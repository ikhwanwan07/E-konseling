<?php

namespace App\Lib;

use Illuminate\Routing\Controller;
use App\Data;
use DB;


class KMeans extends Controller
{
    protected $data;
    protected $cluster;
    protected $label;
    protected $attr;
    protected $custom;
    
    function __construct($data, $cluster){
        $this->data = $data;
        $this->cluster = $cluster;
        $this->label = '';
        $this->attr = [];
        $this->custom = null;
        define('VALIDATION_TESTING',false);
    }

    public function getCluster(){
        return $this->cluster;
    }

    public function getData(){
        return $this->data;
    }

    public function getLabel(){
        return $this->label;
    }

    public function getAttributes(){
        return $this->attr;
    }

    public function setLabel($label){
        $this->label = $label;
    }

    public function setAttributes($attr){
        $this->attr = $attr;
    }
    
    public function setCustom($custom){
        $this->custom['iteration'] = $custom[0] ?? null;
        $this->custom['centroids'] = $custom[1] ?? null;
    }

    public function clustering(){
        
        /*  
        ===================================================================================
        Validate attributes, Initiate matrix data, Initiate random centroids 
        ===================================================================================
        */
        
        $riwayat = [];

        // Validate the request
        if(!empty($this->validate())){
            return ['status' => 'fail', 'messages' => $error_messages];
        }
        
        //generate matriks data
        $matriks = [];
        foreach($this->data as $key => $item){
            $matriks[$key][$this->label] = $item[$this->label];
            for($i = 0 ; $i < sizeof($this->attr); $i++){
                $matriks[$key][$this->attr[$i]] = $item[$this->attr[$i]];
            } 
        }
        $riwayat[0]['matriks'] = $matriks;

        //set initial centroids
        if($this->custom['centroids'] != null){
            $centroid = [];
            for($i = 0; $i < sizeof($this->custom['centroids']); $i++){
                for($j = 0; $j < sizeof($matriks); $j++){
                    if($this->custom['centroids'][$i] == $matriks[$j][$this->label]){
                        $centroid[$i] = $matriks[$j];
                        break;
                    }
                }
            }
        }else{
            // untuk testing
            if(VALIDATION_TESTING){
                $centroid = [
                    0 => [
                        'nim' => '16523035',
                        'ipk_sem_1' => 2.20,
                        'ipk_sem_2' => 2.18,
                        'ipk_sem_3' => 2.06,
                        'ipk_sem_4' => 1.81,
                        'ipk_sem_5' => 2.10
                    ],
                    1 => [
                        'nim' => '16523136',
                        'ipk_sem_1' => 3.18,
                        'ipk_sem_2' => 3.40,
                        'ipk_sem_3' => 3.63,
                        'ipk_sem_4' => 3.89,
                        'ipk_sem_5' => 3.72
                    ],
                    2 => [
                        'nim' => '16523200',
                        'ipk_sem_1' => 2.93,
                        'ipk_sem_2' => 3.38,
                        'ipk_sem_3' => 3.15,
                        'ipk_sem_4' => 3.57,
                        'ipk_sem_5' => 3.64
                    ],
                ];
            }else{
                //randomize centroid based on the amount of cluster
                $centroid_indexes = [];
                $centroid = [];
                for ($i = 0; $i < $this->cluster; $i++) { 
                    do{
                        $rand = rand(0,sizeof($matriks)-1);
                    }while(in_array($rand,$centroid_indexes));
        
                    $centroid_indexes[$i] = $rand;
                    $centroid[$i] = $matriks[$centroid_indexes[$i]];
                }
                $riwayat[0]['first_centroid'] = $centroid;
            }
        }

        /*  
        ===================================================================================
        Looping through clustering proccess until terminated condition was fulfilled. 
        ===================================================================================
        */
        $iteration  = 0;
        do{
            // Set previous cluser, if cluster is null then set prev cluster to null
            $prev_cluster = $cluster ?? null;
            $riwayat[$iteration]['prev_centroid'] = $centroid;

            // Calculate Distances (euclidean distance)
            $dist = [];
            for($i = 0; $i < sizeof($matriks); $i++){
                $dist[$i][$this->label] = $matriks[$i][$this->label];
                for($j = 0; $j < $this->cluster; $j++){
                    $total = 0;
                    for($k = 0; $k < sizeof($this->attr); $k++){
                        $hasil_kurang = $matriks[$i][$this->attr[$k]] - $centroid[$j][$this->attr[$k]];
                        $result = pow($hasil_kurang, 2);
                        $total = $total + $result;
                    }
                    $dist[$i]['distance'][$j] = sqrt($total);
                }
            }
            $riwayat[$iteration]['distance'] = $dist;

            // Determine the cluster
            $cluster = [];
            for($i = 0; $i < sizeof($dist); $i++){
                $groups = $this->grouping($dist[$i]['distance']);
                $cluster[$i]['nim'] = $dist[$i]['nim'];
                $cluster[$i]['groups'] = $groups;
            }
            $riwayat[$iteration]['cluster'] = $cluster;

            // Determine the member of each centroids
            $anggota_centroid = [];
            
            for($i = 0; $i < $this->cluster; $i++){
                $index_anggota = 0;
                for($j = 0; $j < sizeof($matriks); $j++){
                    if($cluster[$j]['groups'][$i] == 1){
                        $anggota_centroid[$i][$index_anggota] = $cluster[$j]['nim'];
                        $matriks[$j]['cluster'] = ($i + 1);
                        $index_anggota++;
                    }
                }
            }
            $riwayat[$iteration]['anggota_centroid'] = $anggota_centroid;
            $riwayat[$iteration]['result'] = $matriks;

            // Determine the new centroid
            $centroid = [];
            for($i = 0; $i < $this->cluster; $i++){
                $centroid[$i] = $this->generateCentroid($i, $matriks, $anggota_centroid[$i]); 
            }
            $riwayat[$iteration]['new_centroid'] = $centroid;
            $riwayat[$iteration]['iteration'] = $iteration+1;
            
            $iteration++;

            if($this->custom['iteration'] != null){
                if($iteration == $this->custom['iteration'])
                break;
            }
            if(VALIDATION_TESTING){
                if($iteration == 3) 
                break;
            }  
        }while(!$this->isEqual($cluster, $prev_cluster));
        
        /*  
        ===================================================================================
        Return the last clustering history. 
        ===================================================================================
        */
        // return $iteration;
        
        // Sorting result based on cluster
        foreach($riwayat[$iteration-1]['result'] as $key => $row){
            $cluster[$key] = $row['cluster'];
        }
        array_multisort($cluster, SORT_ASC, $riwayat[$iteration-1]['result']);

        return $riwayat[$iteration-1];
      
    }

    private function validate(){
        $error_messages = [];
        if(empty($this->attr)){
            // attribute tidak boleh kosong
            array_push($error_messages, 'Attributes can not be empty!'); 
            // attribute harus ada di nama kolom data dan tidak boleh duplikat
            // attribute harus berupa numerik 
        }
        
        if($this->label == ''){
            // label tidak boleh kosong
            array_push($error_messages, 'Label can not be empty!'); 
            // label harus ada di nama kolom data
            // data di label harus unik
        }
        
        return $error_messages;
    }

    private function getMinValue($dist){
        $min = 99999999;
        for($i = 0; $i < sizeof($dist); $i++){
            if($dist[$i] < $min){
                $min = $dist[$i];
            }
        }
        return $min;
    }

    private function grouping($dist){
        $minDistance = $this->getMinValue($dist);
        $group = [];
        for($i = 0; $i < sizeof($dist); $i++){
            if($dist[$i] == $minDistance){
                $group[$i] = 1;
            }else{
                $group[$i] = 0;
            }
        }
        return $group;
    }

    
    private function generateCentroid($index, $matriks, $anggota_centroid){

        $result = [];
        $result['label'] = 'centroid_'.($index+1);

        for($i = 0; $i < sizeof($this->attr); $i++){
            $data = [];
            for($j = 0; $j < sizeof($anggota_centroid); $j++){
                for($k = 0; $k < sizeof($matriks); $k++){
                    if($anggota_centroid[$j] == $matriks[$k][$this->label]){
                        $data[] = $matriks[$k][$this->attr[$i]];
                        break;
                    }
                }
            }
            $result[$this->attr[$i]] = $this->calculateMean($data);
        }

        return $result;
        
    }
    
    private function calculateMean($data){
        $total = 0;
        for($i = 0; $i < sizeof($data); $i++){
            $total = $total + $data[$i];
        }

        $mean = $total / sizeof($data);
        return $mean;
    }
    
    private function formatGroup($cluster){
        $formated_cluster = [];
        for($i = 0; $i < sizeof($cluster[$i]['groups']); $i++){
            for($j = 0; $j < sizeof($cluster); $j++){
                $formated_cluster[$i][$j] = $cluster[$j]['groups'][$i];
            }
        }
        return $formated_cluster;
    }

    private function isEqual($cluster, $prev_cluster = null){
        if($prev_cluster == null){
            return 0;
        }else{
            $status = 1; //asumsi format_prev_cluster dan cluster sama
            // allowed format
            // 0 => [0,0,0,1,1,1,0]
            // 1 => [1,1,1,0,0,0,1]

            $format_cluster = $this->formatGroup($cluster);
            $format_prev_cluster = $this->formatGroup($prev_cluster);
            
            // besar cluster dan previous cluster harus sama
            if(sizeof($format_prev_cluster) == sizeof($format_cluster)){
                for($i = 0; $i < sizeof($format_cluster); $i++){
                    for($j = 0; $j < sizeof($format_cluster[$i]); $j++){
                        if($format_prev_cluster[$i][$j] != $format_cluster[$i][$j]){
                            $status = 0;
                            break;
                        }
                    }
                }
                return $status;
            }else{
                return ['status' => 'error'];
            }
        }
    }

}
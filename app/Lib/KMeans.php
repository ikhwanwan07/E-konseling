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

    function __construct($data, $cluster){
        $this->data = $data;
        $this->cluster = $cluster;
        $this->label = '';
        $this->attr = [];
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

    public function clustering(){
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

        $prev_cluster = null;
        $iteration  = 0;
        do{
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
            $riwayat[$i]['centroid'] = $centroid;
    
            //hitung jarak (euclidean distance)
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
                    $dist[$i]['distance_'.($j+1)] = sqrt($total);
                }
            }
            $riwayat[$i]['distance'] = $dist;

            //Menentukan cluster
            $cluster = [];
            
            $riwayat[$i]['cluster'] = $cluster;
            
            $iteration++;
        }while($this->isEqual($cluster, $prev_cluster));


        return $riwayat[$iteration-1]['result'];

    }

    public function validate(){
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

    public function isEqual($cluster, $prev_cluster = null){
        if($prev_cluster == null){
            return 0;
        }else{
            $status = 1; //asumsi prev_cluster dan cluster sama
    
            // besar cluster dan previous cluster harus sama
            if(sizeof($prev_cluster) == sizeof($cluster)){
                for($i = 0; $i < sizeof($cluster); $i++){
                    for($j = 0; $j < sizeof($cluster[$i]); $j++){
                        if($prev_cluster[$i][$j] != $cluster[$i][$j]){
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
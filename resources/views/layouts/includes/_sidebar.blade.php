<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        @if(auth()->user()->role == 'admin')
        <li><a href="/mahasiswa" class=""><i class="lnr lnr-user"></i> <span>Mahasiswa</span></a></li>
        <li><a href="/ipk" class=""><i class="lnr lnr-star"></i> <span>IPK</span></a></li>
        <li><a href="/jadwal" class=""><i class="lnr lnr-calendar-full"></i> <span>Jadwal</span></a></li>
        <li><a href="/nilai_mhs" class=""><i class="lnr lnr-chart-bars"></i> <span>Nilai</span></a></li>
        <li><a href="/dosen" class=""><i class="lnr lnr-users"></i> <span>Dosen</span></a></li>
        <li><a href="/tabelpost" class=""><i class="lnr lnr-file-empty"></i> <span>Post Artikel</span></a></li>
        <li><a href="/sistem" class=""><i class="lnr lnr-users"></i> <span>Sistem Cerdas</span></a></li>
        @endif
        @if(auth()->user()->role == 'dosen')
        <li><a href="/tabel" class=""><i class="lnr lnr-dice"></i> <span>Tabel mahasiswa</span></a></li>
        <li><a href="/tipe" class=""><i class="lnr lnr-list"></i> <span>Tipe kepribadian</span></a></li>
        <li><a href="/konseling" class=""><i class="lnr lnr-bubble"></i> <span>Konseling</span>   <span class="badge bg-danger">5</span></a></li>
        <li><a href="/jadwalkonsultasi" class=""><i class="lnr lnr-bookmark"></i> <span>Jadwal</span></a></li>
        @endif
        @if(auth()->user()->role == 'mahasiswa')
        <li><a href="/profile" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
        <li><a href="/berita" class=""><i class="lnr lnr-keyboard"></i> <span>Berita</span></a></li>
        <li><a href="/nilai" class=""><i class="lnr lnr-keyboard"></i> <span>Nilai</span></a></li>
        
        <li><a href="/konsultasi" class=""><i class="lnr lnr-pencil"></i> <span>Konsultasi</span></a></li>
        <li><a href="/konsentrasi" class=""><i class="lnr lnr-bubble"></i> <span>Konsentrasi</span></a></li>
      @endif

      </ul>
    </nav>
  </div>
</div>

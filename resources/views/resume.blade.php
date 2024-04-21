@extends('layouts.main')
@section('title', 'Resume')
@section('container')
<section class="resume-section">
    <div class="row">
        <div class="col-lg-6">
            <h6 class="section-subtitle">RESUME</h6>
            <h2 class="section-title">PENDIDIKAN</h2>
            <ul class="time-line">
                <li class="time-line-item">
                    <span class="badge badge-primary">2021 - 2024</span>
                    <h6 class="time-line-item-title">D3 - Manajemen Informatika</h6>
                    <p class="time-line-item-subtitle">AMIK-YPAT PURWAKARTA</p>
                    <p class="time-line-item-content">Ngoding, Ngedesign, dan Ngedit Office.</p>
                </li>
                <li class="time-line-item">
                    <span class="badge badge-primary">2015 - 2018</span>
                    <h6 class="time-line-item-title">SMK - Teknik Kontrol Mekanik</h6>
                    <p class="time-line-item-subtitle">SMKN 1 PURWAKARTA</p>
                    <p class="time-line-item-content">Mempelajari pemrograman PLC, Perencanaan 
                        sistem Kontrol Mekanik, Pengukuran dan pengontrolan besaran proses , 
                        Pemasangan instalasi dan pemipaan system kontrol Mekanik dan Pengoperasian, pemeliharaan,
                        dan perbaikan peralatan serta sistem kontrol mekanik.
                    </p>
                </li>
            </ul>
        </div>
        <div class="col-lg-6">
            <h6 class="section-subtitle">RESUME</h6>
            <h2 class="section-title">Pengalaman</h2>
            <ul class="time-line">
                <li class="time-line-item">
                    <span class="badge badge-primary">2019 - Sekarang</span>
                    <h6 class="time-line-item-title">Operator Sekolah</h6>
                    <p class="time-line-item-subtitle">SMPN 1 JATILUHUR</p>
                    <p class="time-line-item-content">Melakukan kegiatan Verifikasi dan Validasi data seluruh komponen DAPODIK
                        serta melakukan pelayanan bagi Guru, Siswa dan Orangtua Siswa.
                    </p>
                </li>
                <li class="time-line-item">
                    <span class="badge badge-primary">Juli 2017 - September 2017</span>
                    <h6 class="time-line-item-title">Magang di Departemen Instrumen </h6>
                    <p class="time-line-item-subtitle">PT. INDO-RAMA SYNTHETICS TBK.</p>
                    <p class="time-line-item-content">Melakukan pekerjaan Preventive Maintenance diantaranya
                        Checking, Cleaning, Repairing, Installing di Departemen CP-3
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="services-section">
    <h2 class="section-title">KEMAMPUAN</h2>
    <div class="row">
        <div class="media service-card col-lg-6">
            <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
            </div>
            <div class="media-body">
                <h5 class="service-title">Microsoft Office</h5>
                <p class="service-description">lorem Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                    tortor.</p>
            </div>
        </div>
        <div class="media service-card col-lg-6">
            <div class="service-icon">
                <img src="assets/images/003-idea.svg" alt="bulb">
            </div>
            <div class="media-body">
                <h5 class="service-title">Adobe Photoshop</h5>
                <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                    tortor.
                </p>
            </div>
        </div>
        <div class="media service-card col-lg-6">
            <div class="service-icon">
                <img src="assets/images/002-development.svg" alt="development">
            </div>
            <div class="media-body">
                <h5 class="service-title">Web Development</h5>
                <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                    tortor.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
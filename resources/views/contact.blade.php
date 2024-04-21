@extends('layouts.main')
@section('title', 'Home')
@section('navhead','Home')
@section('container')
<section class="contact-section">
    <h2 class="section-title">KONTAK SAYA</h2>
    <p class="mb-4">Apabila tertarik dengan saya, silahkan hubungi kontak dibawah ini.</p>
    
    <div class="contact-cards-wrapper">
        <div class="contact-card">
            <h6 class="contact-card-title">WhatsApp Saya</h6>
            <p class="contact-card-content">+62 815 7XXX XX06</p>
        </div>
        <div class="contact-card">
            <h6 class="contact-card-title">Email Saya</h6>
            <p class="contact-card-content">hendiwidyanto7@gmail.com</p>
        </div>
    </div>
</section>
<section class="location-section">
    <h5 class="section-title">COD POLSEK LAH</h5>

    <div class="map-wrapper embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed/v1/view?zoom=14&center=-6.5569,107.4461&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
    </div>
</section>
@endsection
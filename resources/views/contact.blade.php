@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <section class="contact-section">
        <h1 class="text-center mb-5">Hubungi Kami</h1>
        
        <div class="row">
            <div class="col-md-6">
                <h3>Informasi Kontak</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill"></i> <strong>Alamat:</strong> {{ $contactInfo['address'] }}
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill"></i> <strong>Telepon:</strong> {{ $contactInfo['phone'] }}
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill"></i> <strong>Email:</strong> {{ $contactInfo['email'] }}
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-clock-fill"></i> <strong>Jam Operasional:</strong> {{ $contactInfo['hours'] }}
                    </li>
                </ul>
                
                <h3 class="mt-4">Lokasi Toko</h3>
                <div class="map-container mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135000001!3d-6.1947419999999945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTEnNDEuMSJTIDEwNsKwNDknMTAuNCJF!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            
            <div class="col-md-6">
                <h3>Kirim Pesan</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
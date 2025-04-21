@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <section class="about-section">
        <h1>Tentang Toko Parfum Wangi</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Sejarah Kami</h3>
                <p>Toko Parfum Wangi didirikan pada tahun 2010 dengan tujuan menyediakan parfum berkualitas tinggi dengan harga terjangkau. Awalnya kami hanya memiliki satu toko kecil di Jakarta, sekarang kami telah berkembang menjadi salah satu penjual parfum terpercaya di Indonesia.</p>
                
                <h3 class="mt-4">Visi</h3>
                <p>Menjadi destinasi utama untuk menemukan aroma yang sempurna bagi setiap individu.</p>
                
                <h3 class="mt-4">Misi</h3>
                <ul>
                    <li>Menyediakan produk parfum berkualitas tinggi</li>
                    <li>Memberikan pelayanan terbaik kepada pelanggan</li>
                    <li>Terus berinovasi dalam menciptakan aroma-aroma baru</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x300" alt="Toko Kami" class="img-fluid rounded">
            </div>
        </div>
    </section>
@endsection
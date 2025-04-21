@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Selamat Datang di toko Inspire Memories (IM)</h1>
            <p class="lead">Temukan aroma yang sempurna untuk setiap momen</p>
        </div>
    </section>

    <section class="featured-products">
        <h2 class="text-center mb-4">Produk Unggulan</h2>
        <div class="row">
            @foreach($featuredProducts as $product)
                <div class="col-md-6">
                    <div class="card product-card">
                        <div class="card-body">
                            <h3>{{ $product['name'] }}</h3>
                            <p>{{ $product['description'] }}</p>
                            <p class="text-primary fw-bold">{{ $product['price'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="about-preview mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Tentang Toko Kami</h2>
                <p>Toko Parfum Wangi telah menyediakan parfum berkualitas sejak 2010. Kami berkomitmen untuk memberikan produk dengan aroma terbaik dan tahan lama.</p>
                <a href="{{ route('about') }}" class="btn btn-primary">Selengkapnya</a>
            </div>
            <div class="col-md-6">
                <img src="/assets/Gambar1.jpg" alt="Inpisre Memories" class="img-fluid rounded">
            </div>
        </div>
    </section>
@endsection
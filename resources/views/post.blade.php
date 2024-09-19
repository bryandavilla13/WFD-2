@extends('base.base')

@section('content')
    <h1>{{ $title }}</h1>
    <div>
        <p>{{ $param1 }}</p>
        <div class="row gap-5">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/post1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ini Post 1</h5>
                        <p class="card-text">Gambar itu adalah Bali</p>
                        <a href="#" class="btn btn-primary">Tekan tombol ini</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/post2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ini Post 2</h5>
                        <p class="card-text">Gambar itu adalah London</p>
                        <a href="#" class="btn btn-primary">Let's Press this Button</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/post3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ini Post 3</h5>
                        <p class="card-text">Gambar itu adalah Melbourne</p>
                        <a href="#" class="btn btn-primary">Yuk tekan tekan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('templates.page')


@section('content')



<style>
    .porto h5{
        font-size: 40px;
    }

    .porto p{
        font-size: 15px;
    }

</style>
    <div class="porto">
        <div class="text-center mt-5 ">
            <h5>Project & <span class="text-primary">Portofolio</span></h5>
            <p>Kami Membantu Anda Mengubah Alur Kerja Konvensional Menjadi Digitalisasi.</p>
        </div>
        <div class="card-group p-5 text-center">
            <div class="card p-1">
                <img src="{{ asset('images/1.jpg') }}" alt="Foto" class="img-fluid">
                <div class="card-body">
                    <p class="card-text">Keamanan data terancam? Begini cara memilih domain & server yang aman!</p>
                </div>
            </div>
            <div class="card p-1">
                <img src="{{ asset('images/2.jpg') }}" alt="Foto" class="img-fluid">
                <div class="card-body">
                    <p class="card-text">Bisnis tanpa SEO? Inilah alasan kenapa website anda tenggelam di google!</p>
                </div>
            </div>
            <div class="card p-1">
                <img src="{{ asset('images/3.jpg') }}" alt="Foto" class="img-fluid">
                <div class="card-body">
                    <p class="card-text">Online shopee sepi? kenali kesalahan fatal dan cara mengatasinya</p>
                </div>
            </div>
            <div class="card p-1">
                <img src="{{ asset('images/4.jpg') }}" alt="Foto" class="img-fluid">
                <div class="card-body">
                    <p class="card-text">Website company profil yang membosankan? ini cara agar bisnis anda terlihat
                        profesional!</p>
                </div>
            </div>
            <div class="card p-1">
                <img src="{{ asset('images/5.jpg') }}" alt="Foto" class="img-fluid">
                <div class="card-body">
                    <p class="card-text">Strategi SEO terbaik untuk website bisnis</p>
                </div>
            </div>
        </div>


    </div>
@endsection

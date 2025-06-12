@extends('templates.page')


@section('content')

    <style>
        .utama img {
            width: 980px;
            height: 370px;
        }

        .utama p {
            font-size: 16px;
        }

        .utama h5 {
            font-size: 45px;
        }

        .utama {
            padding: 45px;
        }

        .utama p{
            text-align: justify
        }

        body {
            background-color: rgb(255, 255, 255)
        }

        .klien{
            display: flex;
            gap: 13px;
            background-color: rgba(128, 128, 128, 0.443);
            padding: 50px;
            border-radius: 15px;
            justify-content: center;
        }

        .klien img{
            height: 110px;
            width: 130px;
        }
    </style>


    <div class="utama">
        <div class="d-flex flex-column flex-md-row align-items-center gap-5 mt-5">
            <div>
                <h5>Jasa Pembuatan <span class="text-primary">Website?</span></h5>
                <p>BogorWebsite.com menyediakan jasa pembuatan website, aplikasi mobile, branding, konten kreatif, serta SEO
                    sesuai kebutuhan bisnis anda desain yang bagus menarik berkualitas dan harga terjangkau.</p>
                <a href="https://wa.me/6281234514325" target="_blank" class="btn btn-primary">Whatsapp</a>
                <a href="https://www.instagram.com/sevenlightofficial" class="btn btn-dark" target="blank">Instagram</a>
            </div>
            <div>
                <img src="{{ asset('images/hm.png') }}" alt="Foto" class="img-fluid">
            </div>
        </div>
    </div>










    <div class="p-3 text-center mt-5">
        <div>
            <h5 class="text-primary">FULL SERVICES DIGITAL SOLUTION</h5>
            <p>Layanan Paripurna untuk Menunjang Transformasi Bisnis Anda di Era Digital.</p>
        </div>
        <div class="card-group p-5">
            <div class="card rounded-4 text-dark">
                <img src="https://bogorwebsite.com/assets/gambar/layanan/20230610093423.jpg" class="card-img-top rounded-3"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title  text-primary">Jasa Pembuatan Website</h5>
                    <p class="card-text">BogorWebsite.com merupakan perusahaan Web Development yang telah berpengalaman
                        lebih dari 15 tahun di bidang web design,</p>
                </div>
            </div>
            <div class="card rounded-4 text-dark">
                <img src="https://bogorwebsite.com/assets/gambar/layanan/20230610095804.jpg" class="card-img-top rounded-3"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title  text-primary">Jasa Maintence IT</h5>
                    <p class="card-text">Tidak Sempat Mengurus Website Anda?? Biar Kami Yang Melakukannya Untuk Anda!
                        Mengurus sebuah website bisa menjadi pekerjaan</p>
                </div>
            </div>
            <div class="card rounded-4 text-dark">
                <img src="https://bogorwebsite.com/assets/gambar/layanan/20230610100221.jpg" class="card-img-top rounded-3"
                    alt="...">
                <div class="card-body p-4">
                    <h5 class="card-title text-primary">Domain & Cloud Server</h5>
                    <p class="card-text">DOMAIN & CLOUD SERVER HOSTING WebsiteBogor adalah penyedia layanan Hosting, Cloud
                        VPS, Dedicated Server, Colocation</p>
                </div>
            </div>

        </div>
    </div>












@endsection

@extends('templates.page')


@section('content')
    <style>
        .tentang img {
            width: 4000px;
            height: 330px;
            border-radius: 15px;
        }

        .tentang{
            text-align: justify;
        }

        .awalin img{
            width: auto;
            height: 450px;

        }
    </style>



    <div class="awalin">
    <div class="card text-bg-dark mt-5 text-center">
        <img src="{{ asset('images/pt.jpg') }}" class="card-img" alt="foto">
        <div class="card-img-overlay" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <h5 class="card-title">Home | Tentang</h5>
        </div>
    </div>
</div>




    <div class="tentang">
        <div class="d-flex flex-column flex-md-row align-items-center gap-5 mt-5 p-5 ">
            <div>
                <img src="https://bogorwebsite.com/assets/gambar/halaman/20230612090949.jpg" class="img-fluid">
            </div>
            <div>
                <h5>Apa itu Bogor<span class="text-primary">Website.com?</span></h5>
                <p>BogorWebsite.com merupakan perusahaan Web Development yang berlokasi di wilayah Bogor dan merupakan brand
                    dari PT. Tujuh Cahaya Teknologi yang berpengalaman di bidang web design dan web development lebih dari
                    15 tahun yang mengkhususkan pada jasa pembuatan website, Web Aplikasi, Mobile Apps, Digital Marketing,
                    SEO, Corporate Identity, Domain dan Server. WebsiteBogor.com mengutamakan desain website yang simple
                    yang mengacu pada kerapihan penataan tata letak website, Sebagai web designer dan web developer. Untuk
                    saat ini kami melayani jasa pembuatan website untuk company profile, product knowledge, online shop,
                    Multimedia, SEO, organisasi & custom website.</p>
                <div>
                    <a href="https://wa.me/6281234514325" target="_blank" class="btn btn-primary">Whatsapp</a>
                    <a href="https://www.instagram.com/sevenlightofficial" class="btn btn-dark" target="blank">Instagram</a>
                </div>
            </div>
        </div>
    </div>
@endsection

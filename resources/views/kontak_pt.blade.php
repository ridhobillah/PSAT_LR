@extends('templates.page')


@section('content')

<style>
    .image img{
        width: 600px;
        height: 350px;
        border-radius: 15px;
    }
</style>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-4">
                    <h5>Email</h5>
                    <p>kontak@bogorwebsite.com<br>sevenlightid@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h5>Alamat</h5>
                    <p>Jl. Raya Bogor No.KM 46,<br>Nanggewer Mekar, Kec. Cibinong,<br>Kabupaten Bogor, Jawa Barat 16915</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h5>Telepon</h5>
                    <p>081234514325</p>
                </div>
            </div>
        </div>
    </div>

</div>





<div class="image">
    <div class="mt-5 text-center">

   <a href="https://maps.app.goo.gl/doWjVirj5tgRhqrM9"><img src="{{ asset('images/kt.png') }}" class="img-fluid" alt="foto"></a>

</div>

</div>

@endsection

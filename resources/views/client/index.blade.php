@extends('layouts.client')
@section('konten')
@if(session('sukses'))
<div class="alert alert-success">
  {{session('sukses')}}
</div>
@endif

<!-- carousel -->
  <div id="test" class="carousel slide bg-light" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#test" data-slide-to="0" class="active"></li>
      <li data-target="#test" data-slide-to="1"></li>
      <li data-target="#test" data-slide-to="2"></li>
      <li data-target="#test" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/layout-template/img/slides/zz1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/layout-template/img/slides/zz2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/layout-template/img/slides/zz3.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/layout-template/img/slides/zz4.jpg" alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#test" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#test" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- end carousel -->

<!-- alur -->
<section class="bg-light">
  <div class="container">
    <h3 class="sec-title">Alur Pembelian</h3>
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></i>1. Cari Emas</h5>
            <p class="card-text">Cari produk emas yang anda inginkan dan pastikan sesuai dengan lokasi anda.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">2. Ketemuan (COD)</h5>
            <p class="card-text">Ketemuan dengan penjual emas yang akan anda beli untuk meminimalisir penipuan online.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">3. Deal</h5>
            <p class="card-text">Setelah sepakat dengan penjual, bayar dengan harga yang telah ditentukan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / alur -->

<!-- produk -->

<!-- end produk -->

<!-- tentang kami -->
<section >
  <div class="container">
    <h3 class="sec-title">Tentang Kami</h3>
    <div class="row">
      <div class="col-md-5">
        <div class="tentang-imgBox">
          <img src="/layout-template/img/office.jpg" alt="" class="rounded">
        </div>
      </div>
      <div class="col-md-7">
        <div class="tentang-konten">
          <h5>Tukuemas</h5>
          <p class="sec-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem
            eveniet, quas deleniti error qui fugit, culpa architecto distinctio consequatur voluptates.
            Fuga, rem labore cum consequuntur illum excepturi, quis explicabo a magnam recusandae inventore!
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / tentang kami -->
@endsection

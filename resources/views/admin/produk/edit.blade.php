@extends('layouts.admin')

@section('content')
<div class="container-fluid p-4">
  <h4 class="mt-3 mb-3 text-center">Edit Produk</h4>


  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('produk.update',$produk->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama_produk" required="required" class="form-control"
              value="{{$produk->nama_produk}}">
          </div>

          <div class="form-group">
            <label for="brand">Brand</label>
            <select class="form-control" id="" name="brand_id">
              <option selected disabled>Pilih Brand
              </option>
              @foreach ($brand as $b)
              <option value="{{$b->id}}" 
              @if ($b->id == $produk->brand_id)
              selected
              @endif
                > {{ $b->nama }}
              </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" required="required" class="form-control" value="{{$produk->stok}}">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3">{{$produk->deskripsi}}</textarea>
          </div>
          <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <textarea name="lokasi" class="form-control" rows="2">{{$produk->lokasi}}</textarea>
          </div>

          <div class="form-group">
            <label for="foto">Foto Produk</label>
            <p>Gambar saat ini : 
              <img src="{{ asset('img/produk/'.$produk->foto_produk) }}" alt="" style="width:70px">
            </p>
            <input type="file" class="form-control-file" name="foto_produk">
          </div>
          <input type="submit" class="btn btn-warning" value="Update">
          <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container-fluid p-4">
  <h4 class="mt-3 mb-3 text-center">Tambah Brand</h4>

  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama">Brand</label>
            <input type="text" name="nama" required="required" class="form-control" id="brand"
              placeholder="Nama Brand">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('brand.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

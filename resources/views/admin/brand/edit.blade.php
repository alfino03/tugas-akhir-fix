@extends('layouts.admin')

@section('content')
<div class="container-fluid p-4">
  <h4 class="mt-3 mb-3 text-center">Edit Brand</h4>


  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('brand.update',$brand->id) }}" method="POST" >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama Brand</label>
            <input type="text" name="nama" required="required" class="form-control"
              value="{{$brand->nama}}">
          </div>
          <input type="submit" class="btn btn-warning" value="Update">
          <a href="{{ route('brand.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

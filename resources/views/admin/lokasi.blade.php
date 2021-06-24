@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lokasi</h1>
          </div>
        </div>
      </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="table table-responsive">
    <table id="produkTable" class="table table-bordered table-hover">
      <tr class="text-center">
        <th>No.</th>
        <th>Lokasi</th>
        <th>Aksi</th>
      </tr>
      @foreach ($lokasi as $l)
      <tr>
      <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $l->alamat }}</td>
        <td class="text-center">
          <form action="{{ route('lokasi.destroy',$l->id) }}" method="POST">
            <a href="{{ route('lokasi.edit',$l->id) }}" class="btn btn-success btn-sm mr-3 mb-1"><i
                class="fa fa-edit"></i>
              Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm mr-3" onclick="return confirm('Hapus Data?');"><i
                class="fa fa-trash"></i> Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>

</section>
<!-- end Main content -->

@endsection
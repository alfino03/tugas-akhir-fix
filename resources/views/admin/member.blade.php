@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Member</h1>
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
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th>Aksi</th>
      </tr>
      @foreach ($users as $u)
      <tr>
      <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $u->name }}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->jenis_kelamin}}</td>
        <td>{{$u->alamat}}</td>
        <td>{{$u->no_hp}}</td>
        <td class="text-center">
          <form action="{{ route('member.destroy',$u->id) }}" method="POST">
            <a href="{{ route('member.edit',$u->id) }}" class="btn btn-success btn-sm mr-3 mb-1"><i
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
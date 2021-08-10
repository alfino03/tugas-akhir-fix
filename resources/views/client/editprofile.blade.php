@extends('layouts.client')
@section('konten')

<section>
  <div class="container">
  <a href="#" class="nav-item nav-link text-secondary">
        <i class="fas fa-arrow-left mr-3"></i>Kembali
      </a> <br>
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card profile">
                  <div class="card-header"><i class="fas fa-user"></i> {{ __('Profile Saya') }}</div>

                  <div class="card-body">
                      <form action="#">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                              <div class="col-md-6">
                                  <input required id="name" type="text" readonly class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Nama Lengkap">
                              </div>
                              <a href="javascript:void()" id="btn-name"><i class="fa fa-pen icon-edit"></i></a>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                              <div class="col-md-6">
                                  <input required id="email" type="email" readonly class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Email">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                              <div class="col-md-6">
                                  <input required id="name" type="text" readonly class="form-control @error('jenis_kelamin') is-invalid @enderror" name="name" value="{{ $user->jenis_kelamin }}" required autocomplete="jenis_kelamin" autofocus placeholder="Jenis Kelamin">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Lengkap') }}</label>

                              <div class="col-md-6">
                                  <input required id="alamat" type="text" readonly class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" autofocus placeholder="Alamat Lengkap">
                              </div>
                              <a href="javascript:void()" id="btn-alamat"><i class="fa fa-pen icon-edit"></i></a>
                          </div>

                          <div class="form-group row">
                              <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No. Handphone') }}</label>

                              <div class="col-md-6">
                                  <input required id="no_hp" type="number" readonly class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{$user->no_hp}}" required autocomplete="no_hp" autofocus placeholder="No. Handphone">
                              </div>
                              <a href="javascript:void()" id="btn-no_hp"><i class="fa fa-pen icon-edit"></i></a>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class=" btn btn-color-custom">
                                      {{ __('Save') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#btn-name').click(function(){
            $('#name').removeAttr('readonly');
        });
        $('#btn-alamat').click(function(){
            $('#alamat').removeAttr('readonly');
        });
        $('#btn-no_hp').click(function(){
            $('#no_hp').removeAttr('readonly');
        });
    });
</script>
@endsection
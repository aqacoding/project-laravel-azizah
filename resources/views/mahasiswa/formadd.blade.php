@extends('layout.main')

@section('content')
    <h3>Form New Data Mahasiswa</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('mahasiswa') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('mahasiswa') }}">
                @csrf
                <div class="row mb-3">
                    <label for="txtnpm" class="col-sm-2 col-form-label">NPM</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('txtnpm') is-invalid @enderror" id="txtnpm" name="txtnpm" value="{{ old('txtnpm') }}">
                        @error('txtnpm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtfullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ old('txtfullname') }}">
                        @error('txtfullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                            <option value="" selected>--Pilih--</option>
                            <option value="M" {{ (old('txtgender')=='M') ? 'selected' : '' }}>Male</option>
                            <option value="F" {{ (old('txtgender')=='F') ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10" value="{{ old('txtaddress') }}"></textarea>
                        @error('txtfullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6 ">
                        <input type="text" name="txtemail" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" value="{{ old('txtemail') }}">
                        @error('txtemail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-6">
                        <input type="text" name="txtphone" class="form-control form-control-sm @error('txtnpm') is-invalid @enderror" value="{{ old('txtemail') }}">
                        @error('txtemail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success @error('txtnpm') is-invalid @enderror" value="{{ old('txtemail') }}"">
                            Save
                        </button>
                        @error('txtemail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

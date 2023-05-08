@extends('layout.main')

@section('content')
<h3>Data Mahasiswa</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('mahasiswa/add') }}'">
        <i class="fas fa-plus-circle"></i> Add New Data
      </button>
    </div>
    <div class="card-body">
      @if (session('msg'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil</strong> {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Npm</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $row->npm }}</td>
                    <td>{{ $row->fullname }}</td>
                    <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->emailaddress }}</td>
                    <td>{{ $row->phone }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
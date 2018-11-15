@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Customers</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Customer Plasa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pelanggan</th>
                  <th>Nomor Fastel</th>
                  <th>Email</th>
                  <th>Handphone</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama Pelanggan</th>
                  <th>Nomor Fastel</th>
                  <th>Email</th>
                  <th>Handphone</th>
                  <th>Alamat</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($data as $value)
                <tr>
                  <td> {{ $loop->iteration }} </td>
                  <td>{{ $value->nama_lengkap }}</td>
                  <td>{{ $value->fastel1 }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->no_hp }}</td>
                  <td>{{ $value->alamat1 }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @endsection
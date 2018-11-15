@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Transaction</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Pengunjung</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Tanggal Transaksi</th>
                  <th>Nama Pengunjung</th>
                  <th>Nomor Fastel</th>
                  <th>Action</th>
                  <th>Request Eskalasi</th>
                  <th>Due Date</th>
                  <th>Keterangan</th>
                  <th>Petugas</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Tanggal Transaksi</th>
                  <th>Nama Pengunjung</th>
                  <th>Nomor Fastel</th>
                  <th>Action</th>
                  <th>Request Eskalasi</th>
                  <th>Due Date</th>
                  <th>Keterangan</th>
                  <th>Petugas</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($user as $value)
                <tr>
                  <td> {{ $loop->iteration }} </td>
                  <td>{{ $value->created_at }}</td>
                  <td>{{ $value->nama_pengunjung }}</td>
                  <td>{{ $value->fastel }}</td>
                  <td>{{ $value->action }}</td>
                  <td>{{ $value->escalation_req }}</td>
                  <td>{{ $value->due_date }}</td>
                  <td>{{ $value->keterangan }}</td>
                  <td>{{ $value->nama_depan }}</td>
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
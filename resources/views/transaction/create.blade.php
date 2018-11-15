@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Blank Page</li>
    </ol>
    <div class="row">
      <div class="col-12">
        <h1>Add Transaction</h1>
        
        <form action="transaction" method="post">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fastel">Fastel</label>
              <input type="text" class="form-control" id="fastel" name="fastel" placeholder="Fastel">
            </div>
            <div class="form-group col-md-6">
              <label for="nama2">Nama Pengunjung</label>
              <input type="text" class="form-control" id="nama2" name="nama_pengunjung" placeholder="Nama Pengunjung">
            </div>
          </div>
          <div class="form-group">
            <label for="action">Action</label>
            <input type="text" name="action" id="action" placeholder="Action" class="form-control">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="escalation_req">Escalation Request</label>
              <input type="text" class="form-control" id="escalation_req" name="escalation_req" placeholder="Escalation Request">
            </div>
            <div class="form-group col-md-6">
              <label for="due_date">Due Date</label>
              <input type="text" class="form-control" id="due_date" name="due_date" placeholder="Due Date">
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
          </div>
          <input type="hidden" name="petugas" value="{{ Auth::user()->nik }}">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  @endsection

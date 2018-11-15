<?php $__env->startSection('content'); ?>
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
        <h1>Add Customer</h1>

        <form action="customer" method="post">
          <?php echo e(csrf_field()); ?>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama1">Nama Depan</label>
              <input type="text" class="form-control" id="nama1" name="nama_depan" placeholder="Nama Depan">
            </div>
            <div class="form-group col-md-6">
              <label for="nama2">Nama Belakang</label>
              <input type="text" class="form-control" id="nama2" name="nama_belakang" placeholder="Nama Belakang">
            </div>
          </div>
          <div class="form-group">
            <label for="fastel1">Fastel</label>
            <input type="text" name="fastel1" id="fastel1" placeholder="Fastel" class="form-control">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="no_hp">No. HP</label>
              <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Handphone">
            </div>
          </div>
          <div class="form-group">
            <label for="alamat1">Alamat</label>
            <textarea class="form-control" id="alamat1" name="alamat1" placeholder="Alamat Lengkap"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
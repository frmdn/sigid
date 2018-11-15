<?php $__env->startSection('content'); ?>
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
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td> <?php echo e($loop->iteration); ?> </td>
                  <td><?php echo e($value->created_at); ?></td>
                  <td><?php echo e($value->nama_pengunjung); ?></td>
                  <td><?php echo e($value->fastel); ?></td>
                  <td><?php echo e($value->action); ?></td>
                  <td><?php echo e($value->escalation_req); ?></td>
                  <td><?php echo e($value->due_date); ?></td>
                  <td><?php echo e($value->keterangan); ?></td>
                  <td><?php echo e($value->nama_depan); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
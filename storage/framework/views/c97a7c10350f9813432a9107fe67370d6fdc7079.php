<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>">
<link href="<?php echo e(asset('assetmin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assetmin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css')); ?>" rel="stylesheet">
<style media="screen">
.table>thead>tr>th {
  font-weight: 500;
  color: #333;
  border-width: 1px;
  padding: 10px 10px;
  font-size: 14px;
}
.table>tbody>tr>td{
  font-size: 12px;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="content">
  <div class="container">

    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Kategori
        </div>
      </div>
      <div class="t-body tb-padding">
        <a href="<?php echo e(url('admin/barang-jasa/tambah-barang-jasa')); ?>" class="btn btn-alt btn-primary"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Barang & Jasa</a>
    <div class="table-responsive m-t-20">
        <table class="table">
            <thead class="bg-blue">
                <tr>
                    <th>No.</th>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Tanggal Update</th>
                    <th>kategori</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($barang->nama_barang); ?> </td>
                    <td>Rp<?php echo e(number_format($barang->harga,0,'.','.')); ?> </td>
                    <td><?php echo e(date('d M Y',strtotime($barang->updated_at))); ?></td>
                    <td><?php echo e($barang->nama_kategori); ?></td>
                    <td><?php echo e($barang->stok); ?></td>
                    <td><a  title="edit" data-toggle="modal" href="#edit-"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>/ <a href="#hapus-" title="hapus" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
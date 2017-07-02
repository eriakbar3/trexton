<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>">
<link href="<?php echo e(asset('assetmin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assetmin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css')); ?>" rel="stylesheet">

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
        <a data-toggle="modal" href="#modalDefault" class="btn btn-sm btn-default"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Kategori</a>

    <div class="table-responsive m-t-20">
        <table class="table">
            <thead class="bg-blue">
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($kat->nama_kategori); ?> </td>
                    <td><a  title="edit" data-toggle="modal" href="#edit-<?php echo e($kat->id_kategori); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>/ <a href="#hapus-<?php echo e($kat->id_kategori); ?>" title="hapus" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>

                <div class="modal fade" id="edit-<?php echo e($kat->id_kategori); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Kategori</h4>
                            </div>
                            <form class="" action="<?php echo e(url('admin/barang-jasa/kategori/'.$kat->id_kategori)); ?>" method="post">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                              <input type="hidden" name="_method" value="PUT">
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Nama Kategori</label>
                                  <input type="text" name="kategori" value="<?php echo e($kat->nama_kategori); ?>" class="form-control">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>

                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hapus-<?php echo e($kat->id_kategori); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form class="" action="<?php echo e(url('admin/barang-jasa/kategori/'.$kat->id_kategori)); ?>" method="post">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="id" value="<?php echo e($kat->id_kategori); ?>">
                              <div class="modal-body">
                                <div class="sweet-alert" tabindex="-1" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-ouside-click="false" data-has-done-function="true" data-timer="null" style="display: block; margin-top: 0px; position:relative">
                                <div class="icon warning pulseWarning" style="display: block;"> <span class="body pulseWarningIns"></span> <span class="dot pulseWarningIns"></span> </div>
                                <h2>Yakin Dihapus?</h2>
                                <p class="lead text-muted" style="display: block;">Kategori yang dihapus tidak dapat dikembalikan!</p>
                              </div>
                              </div>
                              <div class="modal-footer" style="text-align:center">
                                <button type="submit" class="btn btn-sm btn-primary">Ya, Hapus!</button>

                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</section>

<!-- Modal Default -->
<div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori</h4>
            </div>
            <form class="" action="<?php echo e(url('admin/barang-jasa/kategori')); ?>" method="post">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" name="kategori" value="" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>

                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Default -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assetmin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('assetmin/vendors/bower_components/summernote/dist/summernote.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('input/css/fileinput.css')); ?>" media="all" rel="stylesheet" type="text/css" />
<style media="screen">
  .lab-mar{
    width: 100px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="content">
  <div class="container">
    <header class="page-header">
      <h3>Barang Jasa</h3>
    </header>
    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Tambah Barang Jasa
        </div>
      </div>
      <div class="t-body tb-padding">

        <form class="" action="<?php echo e(url('admin/barang-jasa')); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <div class="">
              <div class="form-group">
                <label class="c-black">Nama Barang Jasa</label>
                <input type="text" class="form-control m-b-10 col-lg-6" name="nama_barang" required="">
              </div>

              <div class="col-sm-12">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="c-black">Kategori</label>
                    <select class="form-control" name="kategori" id="category" required="">
                      <option value="">--</option>
                      <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($kat->id_kategori); ?>"><?php echo e($kat->nama_kategori); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="c-black">Harga</label>
                    <div class="input-group  m-b-10">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control" name="harga" required="">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="c-black">Stok</label>
                    <input type="text" class="form-control m-b-10" name="stok" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label c-black">Image</label>
                <input id="input-2" name="image[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" class="input-sm" required="">
              </div>
                <label class="c-black">Deskripsi</label>
                <textarea name="deskripsi" rows="10" cols="40" class="html-editor"></textarea>
              <input type="submit" name="name" value="Tambah" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
        <script src="<?php echo e(asset('assetmin/vendors/bower_components/summernote/dist/summernote.min.js')); ?>"></script>
        <script src="<?php echo e(asset('input/js/fileinput.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
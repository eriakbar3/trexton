<?php $__env->startSection('content'); ?>
<section id="content">
  <div class="container">

    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Detail Transaksi
        </div>
      </div>
      <div class="t-body tb-padding">
        <a href="<?php echo e(url('admin/transaksi/print/'.$transaksi->id_transaksi)); ?>" class="btn btn-alt btn-primary"><i class="zmdi zmdi-print"></i> Print</a>
    <div class="table-responsive m-t-20">
      <table class="table" style="width:30%">
        <tr>
          <td>Nama Costumer</td>
          <td><?php echo e($transaksi->costumer); ?></td>
        </tr>
        <tr>
          <td>Total Bayar</td>
          <td><?php echo e($transaksi->total_bayar); ?></td>
        </tr>
        <tr>
          <td>Tanggal Transaksi</td>
          <td><?php echo e(date_format(date_create($transaksi->tgl_transaksi),'d M Y')); ?></td>
        </tr>
      </table>

        <table class="table">

            <thead class="bg-blue">
              <tr>
                  <th data-column-id="No" data-type="numeric">No</th>
                  <th data-column-id="ID">Nama Barang / Jasa</th>
                  <th data-column-id="Costumer">Harga</th>
                  <th data-column-id="Grand Total">QTY</th>
                  <th data-column-id="Action">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($datas->nama_barang); ?></td>
                    <td><?php echo e($datas->harga); ?></td>
                    <td><?php echo e($datas->qty); ?></td>
                    <td><?php echo e($datas->total); ?></td>
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
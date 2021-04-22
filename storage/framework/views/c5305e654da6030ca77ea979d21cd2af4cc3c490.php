
<?php $__env->startSection('baslik'); ?>
Hizmetlerimiz Düzenleme
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Başlık</th>
                <th scope="col">Hizmet Başlığı</th>
                <th scope="col">Hizmet İçeriği</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $results = DB::select('SELECT * FROM services where id = ?', array(1)); ?>
                <tr>
                    <th scope="col"><?php echo e($key); ?></th>
                    <th scope="col"><?php echo e($service->head); ?></th>
                    <th scope="col"><?php echo e($service->commenthead); ?></th>
                    <th scope="col"><?php echo e($service->comment); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="<?php echo e(url('service/store')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-outlint mb-4">
                    <input type="text" id="head" name="head" class="form-control">
                    <label class="form-label" for="head">Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="commenthead" name="commenthead" class="form-control">
                    <label class="form-label" for="commenthead">Hizmet Başlığı</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Hizmet İçeriği</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: <?php echo e($serviceCount); ?>

            </h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.kutuphane.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bey\Desktop\TestBlog\resources\views/serviceedit.blade.php ENDPATH**/ ?>
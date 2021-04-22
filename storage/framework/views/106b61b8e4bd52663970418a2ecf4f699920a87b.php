
<?php $__env->startSection('baslik'); ?>
Fiyat Düzenleme
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Ana Başlık</th>
                <th scope="col">Ürün Başlık</th>
                <th scope="col">Fiyat</th>
                <th scope="col">Özellik</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $results = DB::select('SELECT * FROM prices where id = ?', array(1)); ?>
                <tr>
                    <th scope="col"><?php echo e($key); ?></th>
                    <th scope="col"><?php echo e($price->head); ?></th>
                    <th scope="col"><?php echo e($price->commenthead); ?></th>
                    <th scope="col"><?php echo e($price->price); ?></th>
                    <th scope="col"><?php echo e($price->comment); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="<?php echo e(url('price/store')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-outlint mb-4">
                    <input tpye="text" id="head" name="head" class="form-control">
                    <label class="form-label" for="head">Ürün Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input type="text" id="commenthead" name="commenthead" class="form-control">
                    <label class="form-label" for="commenthead">Fiyat Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="price" name="price" class="form-control">
                    <label class="form-label" for="price">Fiyat</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Fiyat Özellik</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: <?php echo e($priceCount); ?>

            </h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.kutuphane.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bey\Desktop\TestBlog\resources\views/priceedit.blade.php ENDPATH**/ ?>
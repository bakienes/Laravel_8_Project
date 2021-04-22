
<?php $__env->startSection('baslik'); ?>
Sayfa Ekleme
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kitap Adı</th>
                <th scope="col">Kodu</th>
                <th scope="col">Yazar</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="col"><?php echo e($key); ?></th>
                    <th scope="col"><?php echo e($book->name); ?></th>
                    <th scope="col"><?php echo e($book->book_code); ?></th>
                    <th scope="col"><?php echo e($book->author); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="<?php echo e(url('book/store')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-outlint mb-4">
                    <input type="text" id="name" name="name" class="form-control">
                    <label class="form-label" for="name">Kitap Adı</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="book_code" name="book_code" class="form-control">
                    <label class="form-label" for="book_code">Kitap Kodu</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="author" name="author" class="form-control">
                    <label class="form-label" for="author">Kitap Yazarı</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: <?php echo e($bookCount); ?>

            </h3>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.kutuphane.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bey\Desktop\TestBlog\resources\views/bookcreat.blade.php ENDPATH**/ ?>
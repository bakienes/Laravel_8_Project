
<?php $__env->startSection('baslik'); ?>
Blog Düzenleme
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
                <th scope="col">Blog Başlığı</th>
                <th scope="col">Yazar</th>
                <th scope="col">Blog İçerik</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $results = DB::select('SELECT * FROM blogs where id = ?', array(1)); ?>
                <tr>
                    <th scope="col"><?php echo e($key); ?></th>
                    <th scope="col"><?php echo e($blog->head); ?></th>
                    <th scope="col"><?php echo e($blog->commenthead); ?></th>
                    <th scope="col"><?php echo e($blog->author); ?></th>
                    <th scope="col"><?php echo e($blog->comment); ?></th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="<?php echo e(url('service/blog')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-outlint mb-4">
                    <input type="text" id="head" name="head" class="form-control">
                    <label class="form-label" for="head"> Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="commenthead" name="commenthead" class="form-control">
                    <label class="form-label" for="commenthead">Blog Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="author" name="author" class="form-control">
                    <label class="form-label" for="author">Blog Yazar</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Blog İçerik</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: <?php echo e($blogCount); ?>

            </h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.kutuphane.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bey\Desktop\TestBlog\resources\views/blogedit.blade.php ENDPATH**/ ?>
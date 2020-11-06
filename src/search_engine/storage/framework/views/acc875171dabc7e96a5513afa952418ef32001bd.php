<?php $__env->startSection('content'); ?>
<header id="header">
    <div class="container-fluid">
    
        <nav class="navbar navbar-dark bg-dark justify-content-between">
          <a href="/landing" class="navbar-brand">Search Engine</a>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
    
    </div>
</header>

<div class="container">
    <div class="row">
        
        <!-- loop dari sini -->
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6">
            <div class="card bg-dark text-white ">
                <img class="card-img rounded" src="<?php echo e(asset('storage/app/'.$post->image)); ?>" alt="Card image" style="height:12vw;">
                <div class="card-img-overlay d-flex align-items-end transparent rounded">
                    <div class="#">
                        <h5 class="card-title"><?php echo e($post->title); ?></h5>
                        <p class="card-text"><?php echo e($post->description); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- sampai sini -->






        

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adinatha/Documents/Programming/Website/Algeo02-19048/src/search_engine/resources/views/post/postIndex.blade.php ENDPATH**/ ?>
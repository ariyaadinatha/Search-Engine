<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid vertical-center">
  <div class="container">
    <h1 class="display-4 text-center">How Can We Help You?</h1>
    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
      <div class="">
        <form action="#" method=post class="justify-content-center">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("template.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/adinatha/Documents/Programming/Website/Algeo02-19048/src/search_engine/resources/views/landing/landingIndex.blade.php ENDPATH**/ ?>
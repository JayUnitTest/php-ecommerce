<?php $__env->startSection("content"); ?>
<div class="custom-prod">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner active">
         <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="carousel-item  <?php echo e($item['id']==1?'active':''); ?>">
            <a href="detail/<?php echo e($item['id']); ?>">
               <img class="slider-img" src="<?php echo e($item['prodGallery']); ?>">
               <div class="carousel-caption">
                  <h3><?php echo e($item['prodName']); ?></h3>
                  <p><?php echo e($item['prodDescription']); ?></p>
               </div>
            </a>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="trending-prod">
         <h3>Trending Products</h3>
         <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="trending-product">
            <a href="detail/<?php echo e($item['id']); ?>">
               <img class="trending-img" src="<?php echo e($item['prodGallery']); ?>">
               <h3><?php echo e($item['prodName']); ?></h3>
         </div>
         </a
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jay/Documents/ecomm-php/resources/views/product.blade.php ENDPATH**/ ?>
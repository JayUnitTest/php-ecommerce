<?php $__env->startSection("content"); ?>
<div class="custom-prod">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Recent Orders</h4>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/<?php echo e($item->id); ?>">
                    <img class="trending-img" src="<?php echo e($item->prodGallery); ?>">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Product:<?php echo e($item->prodName); ?></h2>
                      <h5>Status:<?php echo e($item->status); ?></h5>
                      <h5>Address:<?php echo e($item->address); ?></h5>
                      <h5>payment Method:<?php echo e($item->payment_method); ?></h5>
                      <h5>payment status:<?php echo e($item->payment_status); ?></h5>
                    </div>
             </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

     </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jay/Documents/ecomm-php/resources/views/myOrders.blade.php ENDPATH**/ ?>
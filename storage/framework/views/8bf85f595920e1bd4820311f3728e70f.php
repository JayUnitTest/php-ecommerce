<?php $__env->startSection("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img"src="<?php echo e($product['prodGallery']); ?>">
        </div>
        <div class="col-sm-6">
            <a href="/">Previous Page</a>
            <h2><?php echo e($product['prodName']); ?></h2>
            <h4>Category : <?php echo e($product['prodCategory']); ?></h4>
            <h3>Price : £<?php echo e($product['prodPrice']); ?></h3>
            <h4>Product Information : <?php echo e($product['prodDescription']); ?></h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value=<?php echo e($product['id']); ?> >
            <button class="btn btn-prime">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-buy">Buy Now</button>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jay/Documents/ecomm-php/resources/views/details.blade.php ENDPATH**/ ?>
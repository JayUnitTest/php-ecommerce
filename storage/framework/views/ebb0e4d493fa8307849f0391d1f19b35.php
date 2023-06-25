<?php $__env->startSection("content"); ?>
<div class="custom-prod">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="#carouselExampleControls" data-slide-to="<?php echo e($index); ?>" class="<?php echo e($index == 0 ? 'active' : ''); ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
        <div class="carousel-inner">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($index == 0 ? 'active' : ''); ?>">
                    <a href="detail/<?php echo e($item['id']); ?>">
                        <img class="d-block w-100" src="<?php echo e($item['prodGallery']); ?>" alt="<?php echo e($item['prodName']); ?>">
                        <div class="carousel-caption">
                            <h3><?php echo e($item['prodName']); ?></h3>
                            <p><?php echo e($item['prodDescription']); ?></p>
                        </div>
                    </a>
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
    <div class="trending-prod">
        <h3>Trending Products</h3>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <a href="detail/<?php echo e($item['id']); ?>">
                            <img class="card-img-top" src="<?php echo e($item['prodGallery']); ?>" alt="<?php echo e($item['prodName']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item['prodName']); ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="panel panel-default" style="clear:both">
  <div class="panel-body">
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis, elit vel consequat aliquet, erat elit convallis velit, at dapibus urna felis nec sem.</p>
          </div>
          <div class="col-md-4">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
              <li><a href="/">Home</a></li>
              <li><a href="/products">Products</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Contact Us</h4>
            <p>123 Main Street, City, Country</p>
            <p>Email: info@example.com</p>
            <p>Phone: 123-456-7890</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jay/Documents/ecomm-php/resources/views/product.blade.php ENDPATH**/ ?>
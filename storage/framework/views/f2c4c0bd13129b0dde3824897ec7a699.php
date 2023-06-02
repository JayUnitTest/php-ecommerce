<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Project</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(View::make('footer')); ?>


</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }

    .carousel-item{
        height: 400px !important;
        margin: 20px;
        margin-bottom: 20px;
    }

    .slider-img{
    height:400px;
    object-fit: contain;
    }

    .custom-prod{
        height: 600px;
    }

    .carousel-caption{
        background-color: #595656 !important;
    }

    .trending-product{
        float: left;
        width: 20%;
        margin-left: 20px;
        margin-right: 20px;
    }
    .trending-img{
        height: 100px;
    }

    .trending-prod{
        margin: 30px;
    }

    .detail-img{
        height: 200px;
    }

    .cart-list-divider{
        border-bottom: 1px solid white;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html><?php /**PATH /Users/jay/Documents/ecomm-php/resources/views/master.blade.php ENDPATH**/ ?>
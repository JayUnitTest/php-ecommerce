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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>

    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    .carousel-item {
        margin-bottom: 20px;
        max-height: 400px;
        object-fit: cover;
        scale: 50%;
    }

    .slider-img {
        height: 100vh;
        width: 100vh;
        max-width: 100%;
        object-fit: cover;
    }

    body {
        background-color: #164B60 !important;
    }

    /* Apply different sizes for different screen widths */
    @media (max-width: 576px) {
        .slider-img {
            max-height: 200px;
        }
    }

    @media (min-width: 577px) and (max-width: 992px) {
        .slider-img {
            max-height: 300px;
        }
    }

    @media (min-width: 993px) {
        .slider-img {
            max-height: 400px;
        }
    }

    .custom-prod {
        height: 600px;
    }


    .carousel-caption {
        background-color: #4FC0D0 !important;
        padding: 20px;
        position: absolute;
        opacity: 75%;
    }

    .trending-product {
        margin-bottom: 20px;
        text-align: center;
    }

    .trending-img {
        height: 100px;
        object-fit: cover;
    }

    .trending-prod {
        margin: 50px;
        margin-bottom: 20px;
    }

    .trending-prod .card {
    height: 100%;
}

.trending-prod .card-img-top {
    height: 200px;
    object-fit: cover;
}

.trending-prod .card-title {
    margin-top: 10px;
}

    .detail-img {
        height: 200px;
        object-fit: cover;
    }

    .cart-list-divider {
        border-bottom: 1px solid white;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .container {
        margin-top: 50px;
    }


    .detail-img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    .btn-prime {
        background-color: #595656;
        color: #fff;
    }

    .btn-buy {
        background-color: #8CFFD0;
        color: #000;
    }

    .navbar {
        padding: 10px 0;
    }

    .navbar-brand {
        font-size: 24px;
    }

    .navbar-toggler-icon {
        background-color: #fff;
    }

    .navbar-nav .nav-link {
        padding: 8px 15px;
    }

    .badge {
        position: relative;
        top: -2px;
        font-size: 12px;
        padding: 4px 8px;
    }

    .dropdown-item {
        font-size: 14px;
    }

    .dropdown-menu {
        background-color: #fff;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .form-control {
        border-radius: 20px;
    }

    .btn-outline-success {
        border-radius: 20px;
    }

    .footer {
  background-color: #f0f0f0;
  padding: 20px 0;
  color: #666;
  margin-top: 100px
}

.footer h4 {
  color: #333;
}

.footer ul li {
  margin-bottom: 10px;
}

.footer ul li a {
  color: #666;
}

.footer ul li a:hover {
  color: #333;
}
</style>
</html>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-grid-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:19 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nhóm E - Project</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Nhóm E - Project">
    <meta name="author" content="tivatheme">


    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/font-material/css/material-design-iconic-font.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/nivo-slider/css/nivo-slider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/nivo-slider/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/nivo-slider/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/owl-carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('client_template/libs/alert/toastr.min.css')); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('client_template/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('client_template/css/reponsive.css')); ?>">
    <!-- Pixel Code for https://leadee.ai/leadflows/ -->
</head>

<body id="product-sidebar-left" class="product-grid-sidebar-left">
    <?php echo $__env->make('publics.client-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="page-home">
                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span>Trang chủ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Danh sách sản phẩm</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>

                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4">

                                        <!-- category menu -->
                                        <?php echo $__env->make('publics.sidebar-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-8 product-container">
                                        <h1>Danh sách sản phẩm</h1>
                                        <div class="js-product-list-top firt nav-top">
                                            <div class="d-flex justify-content-around row">
                                                <div class="col col-xs-12">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                                        </li>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                                <div class="col col-xs-12">
                                                    <div class="d-flex sort-by-row justify-content-lg-end justify-content-md-end">

                                                        <div class="products-sort-order dropdown">
                                                            <select class="select-title">
                                                                <option value="">Sắp xếp</option>
                                                                <option value="">Tên, A to Z</option>
                                                                <option value="">Tên, Z to A</option>
                                                                <option value="">Giá, Thấp to cao</option>
                                                                <option value="">Giá, Cao to thấp</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content product-items">
                                            <div id="grid" class="related tab-pane fade in active show">
                                                <div class="row">
                                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="item text-center col-md-4">
                                                        <div class="product-miniature js-product-miniature item-one first-item">
                                                            <div class="thumbnail-container border">
                                                                <a href="/detail/<?php echo e($key->id); ?>">
                                                                    <img class="img-fluid image-cover" src="/images/<?php echo e($key->images); ?>" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/images/<?php echo e($key->images); ?>" alt="img">
                                                                </a>                                                               
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="/detail/<?php echo e($key->id); ?>"><?php echo e($key->name); ?></a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price"><?php echo e($key->price); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center">
                                                                    <form action="http://demo1.cloodo.com/html/furnitica/index.html" method="post" class="formAddToCart">
                                                                        <input type="hidden" name="id_product" value="1">
                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                        </a>
                                                                    </form>
                                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- pagination -->
                                        <div class="pagination">
                                            <div class="js-product-list-top ">
                                                <div style="margin-top: 14px;" class="d-flex justify-content-around row">
                                                <?php echo e($datas->links()); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- end col-md-9-1 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php echo $__env->make('publics.client-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <script src="<?php echo e(asset('client_template/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/popper/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/nivo-slider/js/jquery.nivo.slider.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/slider-range/js/tmpl.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/slider-range/js/jquery.dependClass-0.1.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/slider-range/js/draggable-0.1.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/slider-range/js/jquery.slider.js')); ?>"></script>
    <script src="<?php echo e(asset('client_template/libs/alert/toastr.min.js')); ?>"></script>

    <!-- Template JS -->
    <script src="<?php echo e(asset('client_template/js/theme.js')); ?>"></script>
</body>


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-grid-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:19 GMT -->

</html><?php /**PATH D:\shopping\resources\views/client/list.blade.php ENDPATH**/ ?>
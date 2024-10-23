<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:15:45 GMT -->

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

<body id="product-detail">
    <?php echo $__env->make('publics.client-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
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
                                                <span>Chi tiết sản phẩm</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><?php echo e($item->name); ?></span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                        <!-- category -->
                                        <?php echo $__env->make('publics.sidebar-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                        <!-- best seller -->
                                        <div class="sidebar-block">
                                            <div class="title-block">
                                                Liên quan
                                            </div>
                                            <div class="product-content tab-content">
                                                <div class="row">
                                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/images/<?php echo e($value->images); ?>" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/images/<?php echo e($value->images); ?>" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="/detail/<?php echo e($value->id); ?>"><?php echo e($value->name); ?></a>
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
                                                                            <span class="price"><?php echo e($value->price); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9">
                                        <div class="main-product-detail">
                                            <h2><?php echo e($item->name); ?></h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <div id="item1" class="tab-pane fade active in show">
                                                                    <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                </div>
                                                                <div id="item2" class="tab-pane fade">
                                                                    <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                </div>
                                                                <div id="item3" class="tab-pane fade">
                                                                    <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                </div>
                                                                <div id="item4" class="tab-pane fade">
                                                                    <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">
                                                                <li class="active col">
                                                                    <a href="#item1" data-toggle="tab" aria-expanded="true" class="active show">
                                                                        <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item2" data-toggle="tab">
                                                                        <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item3" data-toggle="tab">
                                                                        <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item4" data-toggle="tab">
                                                                        <img src="/images/<?php echo e($item->images); ?>" alt="img">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        <div class="price-del" style="padding-bottom: 10px;">
                                                            <span class="price"><?php echo e(number_format($item->price)); ?> VNĐ</span>
                                                            <span class="float-right">
                                                                <span class="availb">Số lượng: </span>
                                                                <span class="check">
                                                                    <?php echo e($item->quatity); ?>

                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                                </span>
                                                                <input type="text" hidden value="<?php echo e($item->quatity); ?>" id="count_product">
                                                            </span>
                                                        </div>
                                                        <p style="font-weight: 500;color:black;font-size:14px;margin-bottom:0px">Danh mục: <?php echo e($item->category_name); ?></p>
                                                        <br>
                                                        <span style="font-weight: 500;color:black;font-size:14px">Nhà cung cấp: <?php echo e($item->owner_name); ?></span>
                                                        <p class="description"><?php echo e($item->description); ?></p>
                                                        <div class="option has-border d-lg-flex size-color">
                                                        </div>
                                                        <div class="has-border cart-area">
                                                            <div class="product-quantity">
                                                                <div class="qty">
                                                                    <div class="input-group">
                                                                        <div class="quantity">
                                                                            <span class="control-label">Chọn số lượng : </span>
                                                                            <input type="text" name="qty" id="quantity_wanted" style="width:60px" value="1" class="input-group form-control">
                                                                        </div>
                                                                        <span class="add">
                                                                            <button class="btn btn-primary add-to-cart add-item" id="add-to-cart" data-id_product="<?php echo e($item->id); ?>" type="button">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                <span>Thêm vào giỏ hàng</span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="product-minimal-quantity">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description" class="active show">Mô tả chi tiết</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <p><?php echo $item->content; ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- Vendor JS -->
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


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:15:54 GMT -->

</html><?php /**PATH D:\shopping\resources\views/client/detail.blade.php ENDPATH**/ ?>
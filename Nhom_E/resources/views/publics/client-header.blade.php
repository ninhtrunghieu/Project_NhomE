<header>
    <!-- header desktop -->
    <div class="header-top d-xs-none ">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-sm-2 col-md-2 d-flex align-items-center">
                    <div id="logo">
                        <a href="/">
                            <img class="img-fluid" src="{{ asset('client_template/img/home/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>

                <!-- menu -->
                <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                    <div class="menu navbar collapse navbar-collapse">
                        <ul class="menu-top navbar-nav">
                            <li class="nav-link">
                                <a href="#" class="parent">Trang chủ</a>
                            </li>
                            <li>
                                <a href="/list-product/0" class="parent">Sản phẩm</a>
                            </li>
                            <li>
                                <a href="contact.html" class="parent">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- search-->
                <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                    <form method="get" action="/search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>

                    <!-- acount  -->
                    <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                        <div class="myaccount-title">
                            <a href="#acount" data-toggle="collapse" class="acount">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Tài khoản</span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="acount" class="collapse">
                            <div class="account-list-content">

                            </div>
                        </div>
                    </div>
                    <div class="desktop_cart">
                        <div class="blockcart block-cart cart-preview tiva-toggle">
                            <div class="header-cart tiva-toggle-btn">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="dropdown-content">
                                <div class="cart-content" style="max-height:400px;overflow-y:scroll">
                                    <table>
                                        <tbody id="show_cart">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
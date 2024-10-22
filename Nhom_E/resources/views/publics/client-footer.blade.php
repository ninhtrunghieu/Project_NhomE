<footer class="footer-one">
    <div class="inner-footer">
        <div class="container">
            <div class="footer-top col-lg-12 col-xs-12">
                <div class="row">
                    <div class="tiva-html col-lg-4 col-md-12 col-xs-12">
                        <div class="block">
                            <div class="block-cosntent">
                                <p class="logo-footer">
                                    <img src="{{asset('client_template/img/home/logo.png')}}" alt="img">
                                </p>
                                </p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-content">
                                <ul>
                                    <li>
                                        <a href="#">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="#">Người sáng lập</a>
                                    </li>
                                    <li>
                                        <a href="#">Đội ngũ phát triển</a>
                                    </li>
                                    <li>
                                        <a href="#">Liên hệ mua hàng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-content">
                                <p class="img-payment ">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tiva-html col-lg-4 col-md-6">
                        <div class="block m-top">
                            <div class="title-block">
                                Liên hệ vs chúng tôi
                            </div>
                            <div class="block-content">
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Địa chỉ :</span>
                                    </div>
                                    <div class="content-contact address-contact">
                                        <p>53 Võ Văn Ngân, Phường Linh Chiểu, Tp. Thủ Đức, tp. Hồ Chí Minh</p>
                                    </div>
                                </div>
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>Email :</span>
                                    </div>
                                    <div class="content-contact mail-contact">
                                        <p>ninhtrunghieu29@gmail.com</p>
                                    </div>
                                </div>
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>Hotline :</span>
                                    </div>
                                    <div class="content-contact phone-contact">
                                        <p>0337 xxx xxx</p>
                                    </div>
                                </div>
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span>Thời gian mở cửa :</span>
                                    </div>
                                    <div class="content-contact hours-contact">
                                        <p>Thứ 2 - Chủ nhật / 08.00AM - 19.00</p>
                                        <span>(Cả ngày nghỉ)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tiva-modules col-lg-4 col-md-6">
                        <div class="block m-top">
                            <div class="block-content">
                                <div class="title-block">Hướng dẫn</div>
                                <div class="sub-title">Đăng nhập để mua hàng hoặc đăng ký tạo tài khoản
                                </div>
                                <div class="block-newsletter">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                                    <span>Theo dõi</span>
                                                </button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="action" value="0">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="block m-top1">
                            <div class="block-content">
                                <div class="social-content">
                                    <div class="title-block">
                                        Theo dõi bằng
                                    </div>
                                    <div id="social-block">
                                        <div class="social">
                                            <ul class="list-inline mb-0 justify-content-end">
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block m-top1">
                            <div class="block-content">
                                <div class="payment-content">
                                    <div class="title-block">
                                        Payment accept
                                    </div>
                                    <div class="payment-image">
                                    </div>
                                </div>
                                <!-- Popup newsletter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tiva-copyright">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12 ">
                    <span>
                        Trường Cao Đẳng Công Nghệ Thủ Đức
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('client_template/libs/jquery/jquery.min.js') }}"></script>

<script>
        function onLoad() {
            $.ajax({
                url: "{{url('/load-cart')}}",
                method: 'get',
                data: {},
                    if (res) {
                        $('#show_cart').empty();
                        $('#show_cart').append(res);
                    }
                        $('#show_cart').empty();
                        $('#show_cart').append("Chưa có sản phẩm nào!");
                    }
                },
                    console.log(mess);
                }
            });
        }
        onLoad();
            var id = $(this).data('id_product');
            var count = $('#quantity_wanted').val();
            var count_product = $('#count_product').val();
            if (count < 1) {
                toastr.error('Số lượng phải lớn hơn 0!');
            }
            if (count > count_product - 1) {
                toastr.error('Số lượng vượt quá só lượng cho phép!');
            } else {
                $.ajax({
                    url: "{{url('/add-to-cart')}}",
                    method: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id,
                        count
                    },
                        if (res) {
                            $('#show_cart').empty();
                            $('#show_cart').append(res);
                            onLoad()
                            toastr.success('Thêm sản phẩm vào giỏ hàng thành công!');
                        }
                    },
                        console.log(mess);
                    }
                })
            }
        })
    })
</script>

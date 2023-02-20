<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Cocoshop</title>
    <link href={{asset('public/frontend/css/bootstrap.min.css')}} rel="stylesheet">
    <!-- <link href="{{ URL::asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css"  rel="stylesheet">
    <link href={{asset('public/frontend/css/prettyPhoto.css')}} rel="stylesheet">
    <link href={{asset('public/frontend/css/price-range.csss')}} rel="stylesheet">
    <link href={{asset('public/frontend/css/animate.css')}} rel="stylesheet">
    <link href={{asset('public/frontend/css/main.css')}} rel="stylesheet">
    <link href={{asset('public/frontend/css/responsive.css')}} rel="stylesheet">
    <link href={{asset('public/frontend/css/sweetalert.css')}} rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href={{('public/frontend/images/ico/favicon.ico')}}>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0988888290</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> cskh@cocoshop.vn
								</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/cocoshopwholesale"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/cocolux.vn/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UC320W5FFdxwfRGJ9z3ij2jQ"><i class="fa fa-youtube"></i></a></li>
								<li><a href="https://cocoshop.vn/"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img style="width:100px" src="{{('public/frontend/images/logo.jpg')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Danh sách yêu thích</a></li> -->
								<?php
									$customer_id=Session::get('customer_id');
                                    $shipping_id=Session::get('shipping_id');
									if($customer_id!=NULL && $shipping_id==NULL){
								?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<?php
								}elseif($customer_id!=NULL && $shipping_id!=NULL){
								?>
									<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<?php
								}else{
                                ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                }
								?>

								<li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<?php
									$customer_id=Session::get('customer_id');
									if($customer_id!=NULL){
								?>
								<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
								<?php
								}else{
									?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<?php
								}

								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản phâm</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>

                                </li>
								<li><a href="{{URL::TO('/gio-hang')}}">Giỏ hàng</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                                <input type="submit" style="margin-top:0; color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
						    </div>
                        </form>

					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								{{-- <div class="col-sm-6">
									<h1><span>COCO</span>-SHOP</h1>
									<h2>100% Responsive Design</h2>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div> --}}
								<div class="row">
									<div class="col-sm-12">
										<img src="{{('public/frontend/images/bia1.jpg')}} " class="girl img-responsive" alt="" />
										<img src="images/home/pricing.png"  class="pricing" alt="" />
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-12">
										<img src="{{('public/frontend/images/bia2.jpg')}}" class="girl img-responsive" alt="" />
										<img src="{{('')}}"  class="pricing" alt="" />
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row">
									<div class="col-sm-12">
										<img  src="{{('public/frontend/images/bia3.jpg')}}" class="girl img-responsive" alt="" />
										<img src="images/home/pricing.png" class="pricing" alt="" />
									</div>
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					@yield('content')




				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2>Kho Ảnh</h2>
							{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p> --}}
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=vLX-_Dc7rig&t=121s">
									<div class="iframe-img">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/vLX-_Dc7rig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								{{-- </a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2> --}}
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=IpG7SY2-zdA&t=6s">
									<div class="iframe-img">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/IpG7SY2-zdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								{{-- <p>Circle of Hands</p>
								<h2>24 DEC 2014</h2> --}}
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=TpMnep6S0tQ&t=81s">
									<div class="iframe-img">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/TpMnep6S0tQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								{{-- <p>Circle of Hands</p>
								<h2>24 DEC 2014</h2> --}}
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=PD64cd7CuZY">
									<div class="iframe-img">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/PD64cd7CuZY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								{{-- <p>Circle of Hands</p>
								<h2>24 DEC 2014</h2> --}}
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2" style="width:300px">
						<div class="single-widget" >
							<h2>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ UNICORN</h2>
							<ul class="nav nav-pills nav-stacked">
								<p>Địa chỉ: 248A Nơ Trang Long, Phường 12, Quận Bình Thạnh, TPHCM</p>
								<p>Giấy ĐKKD/MST : 0315627066 cấp ngày 12/04/2019 tại Sở Kế hoạch đầu tư TPHCM</p>
								<p>Giám đốc: Lê Minh Thảo</p>
								<p>Số điện thoại: 1900633023 </p>
								<p>Email: info@cocoshop.vn </p>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>HỖ TRỢ KHÁCH HÀNG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="https://cocoshop.vn/about/huong-dan-mua-hang.html">Hướng dẫn mua hàng</a></li>
								<li><a href="https://cocoshop.vn/about/giai-dap-thac-mac.html">Giải đáp thắc mắc</a></li>
								<li><a href="https://cocoshop.vn/about/chinh-sach-doi-tra.html">Chính sách đổi trả</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giờ mở cửa</h2>
							<ul class="nav nav-pills nav-stacked">
								<p>Từ 8:00 - 22:00 tất cả các ngày trong tuần (bao gồm cả các ngày lễ, ngày Tết).</p>
							</ul>
						</div>
					</div>
					{{-- <div class="col-sm-2" style="width:250px">
						<div class="single-widget">
							<h2>ĐĂNG KÝ NHẬN TIN</h2>
							<ul class="nav nav-pills nav-stacked">
								<p>Mỗi tháng chúng tôi đều có những đợt giảm giá dịch vụ và sản phẩm nhằm chi ân khách hàng. Để có thể cập nhật kịp thời những đợt giảm giá này, vui lòng nhập địa chỉ email của bạn vào ô dưới đây.</p>
							</ul>
						</div>
					</div> --}}
					{{-- <div class="col-sm-3 col-sm-offset-1" style="padding-left: 110px">
						<div class="single-widget">
							<form action="#" class="searchform">
								<input type="text" placeholder="Nhập địa chỉ eamil của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							</form>
						</div>
					</div> --}}

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 BY COCOSHOP VIETNAM.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://cocoshop.vn/">COCOSHOP VIETNAM</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src={{asset('public/frontend/js/jquery.js')}} ></script>
    <script src={{asset('public/frontend/js/bootstrap.min.js')}} ></script>
    <script src={{asset('public/frontend/js/jquery.scrollUp.min.js')}} ></script>
    <script src={{asset('public/frontend/js/price-range.js')}} ></script>
    <script src={{asset('public/frontend/js/jquery.prettyPhoto.js')}} ></script>
    <script src={{asset('public/frontend/js/main.js')}} ></script>
    <script src={{asset('public/frontend/js/sweetalert.js')}} ></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script>
        $(document).ready(function(){
            $('.send_order').click(function(){
            swal({
                title: "Xác nhận đơn hàng",
                text: "Đơn hàng sẽ không được hoàn trả khi đặt, bạn có muốn đặt không?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Đặt hàng",
                cancelButtonText: "Hủy đặt hàng",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    var shipping_email = $('.shipping_email').val();
                    var shipping_name = $('.shipping_name').val();
                    var shipping_adress = $('.shipping_adress').val();
                    var shipping_phone = $('.shipping_phone').val();
                    var shipping_notes = $('.shipping_notes').val();
                    var shipping_method = $('.payment_select').val();
                    var order_fee = $('.order_fee').val();
                    var order_coupon = $('.order_coupon').val();
                    var _token=$('input[name="_token"]').val();
                    $.ajax({
                        url:'{{url('/confirm-order')}}',
                        method:'POST',
                        data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_adress:shipping_adress,
                            shipping_phone:shipping_phone,shipping_notes:shipping_notes,shipping_method:shipping_method, order_fee:order_fee,order_coupon:order_coupon,_token:_token},
                        success:function(){
                        swal("Đơn hàng", "Đặt hàng thành công", "success");
                        }
                    });
                    window.setTimeout(function(){
                        location.reload();
                    }, 3000);
                    } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id=$(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token=$('input[name="_token"]').val();
                $.ajax({
                    url:'{{url('/add-cart-ajax')}}',
                    method:'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(data){
                        swal({
                            title: "Đã thêm sản phẩm vào giỏ hàng",
                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                            showCancelButton: true,
                            cancelButtonText: "Xem tiếp",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Đi đến giỏ hàng",
                            closeOnConfirm: false
                        },
                        function(){
                            window.location.href = "{{url('/gio-hang')}}";
                        });
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action == 'city'){
                result='province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url:'{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action, ma_id:ma_id, _token:_token},
                success:function(data){
                    $('#'+result).html(data);
                }
            });
        });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp =='' || maqh =='' || xaid ==''){
                        alert('Vui lòng chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                        url:'{{url('/caculate-fee')}}',
                        method: 'POST',
                        data:{matp:matp, maqh:maqh, xaid:xaid, _token:_token},
                        success:function(){
                            location.reload();
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>

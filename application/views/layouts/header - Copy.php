<div class="header-container">
    <header id="header" style="padding-bottom: 0">
		<div class="nav">
			<div class="container">
				<div class="row">
					<nav>
						<div id="contact-link">
							<a href="contact-us.html" title="Contact Us">contact us</a>
						</div>
						<span class="shop-phone">
							<i class="icon-phone"></i>Call us now: <strong>0938018130</strong>
						</span>
					</nav>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="header_logo">
                        <a href="<?php echo base_url('sites')?>" title="Nhựa Nam Việt">
                            <img class="logo img-responsive" src="<?php echo $this->settings->get_logoFE() ?>" alt="Nhựa Nam Việt" width="150"/>
                        </a>
                    </div>
                    <div class="ps_header_right">
						<!-- MODULE Block cart -->
						<div class="ps_cart ">
							<div class="shopping_cart">
								<a href="order.html" title="View my shopping cart" rel="nofollow">
									<b>Giỏ hàng:</b>
									<span class="ajax_cart_quantity unvisible">0</span>
									<span class="ajax_cart_product_txt unvisible">Sản phẩm</span>
									<span class="ajax_cart_product_txt_s unvisible">Sản phẩm</span>
									<span class="ajax_cart_total unvisible"></span>
									<span class="ajax_cart_no_product">(trống)</span>
								</a>
								<div class="cart_block block exclusive">
									<div class="block_content">
										<!-- block list of products -->
										<div class="cart_block_list">
											<p class="cart_block_no_products">Không có sản phẩm</p>
											<div class="cart-prices">
												<div class="cart-prices-line first-line">
													<span class="price cart_block_shipping_cost ajax_cart_shipping_cost">Miễn phí vận chuyển!</span>
													<span>Vận chuyển</span>
												</div>
												<span class="price cart_block_total ajax_block_cart_total">0,00 ₫</span>
												<span>Tổng cộng:</span>
											</div>
										</div>
										<p class="cart-buttons">
											<a id="button_order_cart" class="btn btn-default button button-small" href="order.html" title="Thanh toán" rel="nofollow">
												<span>Thanh toán<i class="icon-chevron-right right"></i></span>
											</a>
										</p>
									</div>
								</div>
							</div><!-- .cart_block -->
						</div>
						<div id="layer_cart">
							<div class="clearfix">
								<div class="layer_cart_product col-xs-12 col-md-6">
									<span class="cross" title="Close window"></span>
	                                <h1 class="page-heading" style="font-size: 14px">Product successfully added to your shopping cart
									</h1>
									<div class="product-image-container layer_cart_img">
									</div>
									<div class="layer_cart_product_info">
										<span id="layer_cart_product_title" class="product-name"></span>
										<span id="layer_cart_product_attributes"></span>
										<div>
											<strong class="dark">Số lượng</strong>
											<span id="layer_cart_product_quantity"></span>
										</div>
										<div>
											<strong class="dark">Tổng cộng:</strong>
											<span id="layer_cart_product_price"></span>
										</div>
									</div>
								</div>
								<div class="layer_cart_cart col-xs-12 col-md-6">
									<h2>
										<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
										<span class="ajax_cart_product_txt_s  unvisible">
											There are <span class="ajax_cart_quantity">0</span> items in your cart.
										</span>
										<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
										<span class="ajax_cart_product_txt ">
											There is 1 item in your cart.
										</span>
									</h2>
									<div class="layer_cart_row">
										<strong class="dark">Tổng cộng:(đã bao gồm thuế)</strong>
										<span class="ajax_block_products_total"></span>
									</div>
									<div class="layer_cart_row">
										<strong class="dark">Tổng vận chuyển&nbsp;(đã bao gồm thuế)</strong>
										<span class="ajax_cart_shipping_cost">Miễn phí vận chuyển!</span>
									</div>
									<div class="layer_cart_row">
										<strong class="dark">Tổng cộng:(đã bao gồm thuế)</strong>
										<span class="ajax_block_cart_total"></span>
									</div>
									<div class="button-container">	
										<span class="continue btn btn-default button exclusive-medium button-medium" title="Tiếp tục mua hàng">
											<span>Tiếp tục mua hàng</span>
										</span>
										<a class="btn btn-default button button-medium"	href="order.html" title="Proceed to checkout" rel="nofollow">
											<span>Proceed to checkout</span>
										</a>	
									</div>
								</div>
							</div>
							<div class="crossseling"></div>
						</div> <!-- #layer_cart -->
						<div class="layer_cart_overlay"></div>
						<!-- /MODULE Block cart -->
						<div class="header_user_info">
							<a class="login" href="loginfd9a.html" rel="nofollow" title="Log in to your customer account">Đăng nhập</a>
						</div>
					<!-- /Block usmodule NAV -->
                    </div>
                    <div id="search_block_top" class="clearfix">
						<form id="searchbox" method="get" action="http://namvietplastic.com/vn/search" >
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" name="orderby" value="position" />
							<input type="hidden" name="orderway" value="desc" />
							<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Tìm kiếm" value="" />
							<button type="submit" name="submit_search" class="btn btn-default button-search">
								<img src="http://namvietplastic.com/img/icon-search.png"/>
							</button>
						</form>
					</div>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="header-container ps_menu_wrapper" >
    <header id="header" style="padding: 0;background: #093a95">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
    				<div class="clearfix ps_menu">
						<!-- Menu -->
						<div id="block_top_menu" class="sf-contener">
							<div class="cat-title">
					            <i class="icon-align-justify"></i>
			                </div>
			                <?php
				                $menus = $this->categories->get_menuFE();
				                if (!empty($menus)) : ?>
									<ul class="sf-menu clearfix menu-content">
										<li><a href="index.html" title="Trang chủ">Trang chủ</a>
											<ul>
												<li>
													<a href="3-san-pham-tam-nhua-polycarbonate.html" title="Sản phẩm">Sản phẩm</a>
													<ul>
														<li>
															<a href="12-tam-lop-lay-sang-polycarbonate.html" title="Tấm lấy sáng Polycarbonate">Tấm lấy sáng Polycarbonate</a><ul>
																<li>
																	<a href="18-tam-lop-lay-sang-polycarbonate-dac-ruot.html" title="Tấm lợp lấy sáng Polycarbonate đặc ruột">Tấm lợp lấy sáng Polycarbonate đặc ruột</a>
																</li>
																<li>
																	<a href="19-tam-lay-sang-polycarbonate-rong.html" title="Tấm lấy sáng Polycarbonate rỗng">Tấm lấy sáng Polycarbonate rỗng</a>
																</li>
															</ul>
														</li>
														<li>
															<a href="14-ton-nhua-lay-sang-polycarbonate-nicelight.html" title="Tôn nhựa lấy sáng Polycarbonate">Tôn nhựa lấy sáng Polycarbonate</a>
														</li>
														<li>
															<a href="13-mai-che-lay-sang.html" title="Mái che lấy sáng">Mái che lấy sáng</a>
														</li>
														<li>
															<a href="17-Polycarbonate-dinh-hinh-lay-sang.html" title="Sản phẩm PC định hình">Sản phẩm PC định hình</a>
														</li>
														<li>
															<a href="15-phu-kien-nep-nhua-PC.html" title="Phụ kiện">Phụ kiện</a>
														</li>
														<li>
															<a href="16-huong-dan-lap-dat-mai-che-lay-sang.html" title="Dịch vụ tư vấn & lắp đặt">Dịch vụ tư vấn & lắp đặt</a>
														</li>
														<li id="category-thumbnail"></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="content/category/2-gioi-thieu.html" title="Giới thiệu">Giới thiệu</a>
											<ul>
												<li >
													<a href="content/38-gioi-thieu-cong-ty-tnhh-tm-dv-sx-nhua-nam-viet.html">Giới Thiệu</a>
												</li>
												<li >
													<a href="content/41-quan-he-hop-tac.html">Quan Hệ Hợp Tác</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="3-san-pham-tam-nhua-polycarbonate.html" title="Sản phẩm">Sản phẩm</a>
											<ul>
												<li>
													<a href="12-tam-lop-lay-sang-polycarbonate.html" title="Tấm lấy sáng Polycarbonate">Tấm lấy sáng Polycarbonate</a>
													<ul>
														<li>
															<a href="18-tam-lop-lay-sang-polycarbonate-dac-ruot.html" title="Tấm lợp lấy sáng Polycarbonate đặc ruột">Tấm lợp lấy sáng Polycarbonate đặc ruột</a>
														</li>
														<li>
															<a href="19-tam-lay-sang-polycarbonate-rong.html" title="Tấm lấy sáng Polycarbonate rỗng">Tấm lấy sáng Polycarbonate rỗng</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="14-ton-nhua-lay-sang-polycarbonate-nicelight.html" title="Tôn nhựa lấy sáng Polycarbonate">Tôn nhựa lấy sáng Polycarbonate</a>
												</li>
												<li>
													<a href="13-mai-che-lay-sang.html" title="Mái che lấy sáng">Mái che lấy sáng</a>
												</li>
												<li>
													<a href="17-Polycarbonate-dinh-hinh-lay-sang.html" title="Sản phẩm PC định hình">Sản phẩm PC định hình</a>
												</li>
												<li>
													<a href="15-phu-kien-nep-nhua-PC.html" title="Phụ kiện">Phụ kiện</a>
												</li>
												<li>
													<a href="16-huong-dan-lap-dat-mai-che-lay-sang.html" title="Dịch vụ tư vấn & lắp đặt">Dịch vụ tư vấn & lắp đặt</a>
												</li>
												<li id="category-thumbnail"></li>
											</ul>
										</li>
										<li>
											<a href="content/category/9-catalogue-polycarbonate.html" title="Catalogue">Catalogue</a>
											<ul>
												<li >
													<a href="content/47-gioi-thieu-tam-lop-lay-sang-dac-ruot-nicelight.html">Tấm lấy sáng Polycarbonate đặc ruột NiceLight</a>
												</li>
												<li >
													<a href="content/49-ton-nhua-lay-sang-polycarbonate.html">Tôn nhựa lấy sáng Polycarbonate</a>
												</li>
												<li >
													<a href="content/48-mai-che-canofix-han-quoc.html">Mái che Canofix</a>
												</li>
												<li >
													<a href="content/50-polycarbonate-dinh-hinh.html">Tấm lấy sáng định hình</a>
												</li>
												<li >
													<a href="content/54-bang-mau-polycarbonate.html">Bảng màu sản phẩm</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="content/category/10-chinh-sach-khach-hang.html" title="Chính sách khách hàng">Chính sách khách hàng</a>
											<ul>
												<li>
													<a href="content/8-huong-dan-lap-dat-tam-tam-lay-sang-polycarbonate.html">Hướng Dẫn Lắp Đặt</a>
												</li>
												<li >
													<a href="content/12-huong-dan-mua-hang.html">Hướng dẫn mua hàng</a>
												</li>
												<li >
													<a href="content/10-chinh-sach-bao-hanh-namvietplastic.html">Chính sách bảo hành</a>
												</li>
												<li >
													<a href="content/14-huong-dan-bao-quan-san-pham.html">Hướng dẫn bảo quản sản phẩm</a>
												</li>
											</ul>
										</li>
										<li><a href="news.html" title="Tin tức">Tin tức</a></li>
										<li>
											<a href="content/category/8-tuyen-dung.html" title="Tuyển dụng">Tuyển dụng</a>
											<ul>
												<li >
													<a href="content/2-tuyen-dung-ke-toan-thue.html">Tuyển dụng tháng Nhân viên Kế toán-Thuế</a>
												</li>
												<li >
													<a href="content/3-tuyen-dung-nv-marketing.html">Tuyển dụng chuyên viên Nghiên cứu & Phát triển thị trường</a>
												</li>
												<li >
													<a href="content/52-tuyen-dung-nhan-vien-thu-kho-quan-ly-kho.html">Tuyển dụng Nhân viên Thủ Kho - Quản Lý Kho
													</a>
												</li>
												<li >
													<a href="content/53-tuyen-dung-nhan-vien-ke-toan-kho.html">Tuyển dụng Nhân viên Kế Toán Kho</a>
												</li>
											</ul>
										</li>
										<li><a href="content/45-lien-he.html" title="Li&ecirc;n hệ">Li&ecirc;n hệ</a></li>
										<li class="sf-search noBack" style="float:right">
											<form id="searchbox" action="http://namvietplastic.com/vn/search" method="get">
												<p>
													<input type="hidden" name="controller" value="search" />
													<input type="hidden" value="position" name="orderby"/>
													<input type="hidden" value="desc" name="orderway"/>
													<input type="text" name="search_query" value="" />
												</p>
											</form>
										</li>
									</ul>
							<?php endif; ?>
						</div>
						<!--/ Menu -->
						<script type="text/javascript">
						    $(document).ready(function(){
						    var offset = 250,
								$back_to_top = $('.ps_menu_wrapper');
							$(window).scroll(function(){
								( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible');
							});
						    });
						</script><!-- Block languages module -->
						<div id="languages-block-top" class="languages-block">
							<ul id="first-languages" class="languages-block_ul toogle_content">
								<li >
									<a href="../en/index.html" title="English (English)">
										<img src="http://namvietplastic.com/img/vn-lang.jpg" />
									</a>
								</li>
								<li class="selected">
					                <img src="http://namvietplastic.com/img/us-lang.jpg" />
					            </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
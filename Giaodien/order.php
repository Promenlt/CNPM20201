<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="top-info">
            <div class="content-area">
                <div class="content-info">
                    <span class="top-info-email"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        Email:
                        Duchoang1234@gmail.com
                    </span>
                    <span class="top-info-phone">
                        <i class="fa fa-mobile" aria-hidden="true" style="font-size: 20px;"></i>
                        Phone: 0961822743
                    </span>
                </div>
            </div>
        </div>


        <div class="content-area">
            <div class="top-logo-search flex-display">
                <div class="top-logo"><img src="img/logohere.jpeg" width="250" height="100" alt="logohere.jpeg"></div>

                <div class="top-search">
                    <form class="search-bar" method="GET">
                        <input type="text" placeholder="Tìm kiếm..." name="searchInput">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <div class="branch-info">
                    <div class="branch">
                        <b>Trụ sở chính</b> <br>
                        <b class="branch-name">Nguyễn Văn Luông</b>
                    </div>
                    <div class="branch">
                        <b>Văn phòng chi nhánh</b> <br>
                        <b class="branch-name">Nguyễn Văn Luông</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu">
            <div class="content-area">
                <div class="menu-area flex-display">
                    <div class="dropdown-menu">
                        <div class="main-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <b>danh mục sản phẩm</b>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        </div>
                        <div class="sub-menu">
                            <a href="#">Điện thoại</a>
                            <a href="#">Máy tính</a>
                            <a href="#">Macbook cũ</a>
                            <a href="#">Macbook mới</a>
                        </div>
                    </div>
                    <nav class="menu-nav">
                        <a href="#"><b>trang chủ</b></a>
                        <a href="#"><b>giới thiệu</b></a>
                        <a href="#"><b>bảo hành</b></a>
                        <a href="#"><b>sản phẩm</b></a>
                        <a href="#"><b>tin tức</b></a>
                        <a href="#"><b>liên hệ</b></a>
                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    <main class="content-area">
        <div class="product-area">
            <div class="product-title">Đặt hàng
                <hr>
            </div>           
           
             <div class="single-product-area">
                <form enctype="multipart/form-data" action="" class="checkout" method="post" name="checkout">
                           <div id="customer_details" class="col2-set">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Thông tin gửi hàng </h3>
                                        <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                            <label class="" for="billing_country">Thành phố<abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" name="shipping_country">
                                        </p>

                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">Họ Tên<abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_first_name" name="shipping_full_name" class="input-text">
                                        </p>

                                        <div class="clear"></div>
                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="Quận,huyện,.. " id="billing_address_1" name="shipping_address" class="input-text ">
                                        </p>

                                        <div class="clear"></div>

                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                            <label class="" for="billing_email">Email <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="email" value="" placeholder="example@abc.com" id="billing_email" name="shipping_email" class="input-text ">
                                        </p>

                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                            <label class="" for="billing_phone">Phone<abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_phone" name="shipping_phone" class="input-text ">
                                        </p>
                                        <div class="clear"></div>


                                        <p id="order_comments_field" class="form-row notes">
                                            <label class="" for="order_comments">Ghi chú đơn hàng</label>
                                            <textarea cols="5" rows="2" placeholder="Ghi chú cho đơn vị vân chuyển " id="order_comments" class="input-text " name="shipping_notes"></textarea>
                                        </p>
                                    </div>
                                </div>

                                

                            </div>

                            <h3 id="order_review_heading">Đơn Hàng Của Bạn</h3>

                            <div id="order_review" style="position: relative;">
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        

                                    </tbody>
                                    <tfoot>

                                        <tr class="cart-subtotal">
                                            <th>Tổng Giỏ Hàng</th>
                                            <td><span class="amount">179.000.000 VNĐ</span>
                                            </td>
                                        </tr>
                                        
                                        <tr class="shipping">
                                            <th>Khuyến mãi</th>
                                            <td>
                                                9.000.000 VNĐ
                                                <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                50.000 VNĐ
                                                <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                            </td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng thanh toán</th>
                                            <td><strong><span class="amount">170.050.000 VNĐ</span></strong> </td>
                                        </tr>

                                    </tfoot>
                                </table>


                                <div id="payment">
                                    <ul class="payment_methods methods">
                                        <li class="payment_method_bacs">
                                            <input type="radio" data-order_button_text="" checked="checked" value="backing" name="payment_method" class="input-radio" id="payment_method_bacs">
                                            <label for="payment_method_bacs">Chuyển khoản ngân hàng </label>
                                            <p>(Bộ phận CSKH sẽ hướng dẫn cho bạn) </p>
                                        </li>
                                        <li class="payment_method_cheque">
                                            <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cheque">
                                            <label for="payment_method_cheque">COD(Thanh toán khi nhận hàng)</label>
                                        </li>

                                    </ul>

                                    <div class="form-row place-order">
                                        <input type="submit" name="order" data-value="Place order" value="Đặt Hàng" id="place_order"  class="button alt">
                                    </div>

                                    <div class="clear"></div>

                                </div>
                            </div>
                        </form>
    
             </div>

        </div>
 



        
        
    </main>

    <footer>
        <div class="begin-footer"></div>
        <div class="footer-contact content-area">
            <table>
                <tr>
                    <th>thông tin công ty</th>
                    <th>hỗ trợ khách hàng</th>
                    <th>kết nối với chúng tôi</th>
                    <th>dịch vụ khách hàng</th>
                </tr>
                <tr class="first-line">
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn mua hàng</td>
                    <td><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</td>
                    <td><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0961-822-743 <br>
                        <span style="font-size: 12px;">(Từ 8h đến 20h tất cả các ngày)</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Tin tuyển dụng</td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo hành thiết bị</td>
                    <td><i class="fa fa-google" aria-hidden="true"></i> Google</td>
                    <td><i class="fa fa-envelope" aria-hidden="true"></i> Duchoang1234@gmail.com</td>
                </tr>
                <tr>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Chương trình khuyến mãi</td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo mật thông tin</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><i class="fa fa-caret-right" aria-hidden="true"></i> Qui định và hình thức thanh toán</td>
                </tr>
            </table>
        </div>
        <div class="footer-info">
            <div class="footer-content content-area">
                <div class="company-name" style="font-size: 20px;"> CÔNG TY ABC ABC.COM</div>
                <div class="logo-industry-trade"><img src="img/da-dang-ky-voi-bo-cong-thuong.png" alt="Bộ công thương"></div>
                <div class="industry-trade-info" style="font-size: 13px;">GPĐKKD số: 7777777. Cấp lần 1: 10/10/2015. Thay đổi: 10/10/2010. Nơi cấp: Phòng đăng ký kinh doanh Sở kế hoạch đầu tư TP Hồ Chí Minh</div>
                <div class="branch">
                    <table>
                        <tr>
                            <th>trụ sở chính</th>
                            <th>văn phòng đại diện</th>
                        </tr>
                        <tr>
                            <td>Địa Chỉ: 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</td>
                            <td>Địa Chỉ : 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</td>
                        </tr>
                        <tr>
                            <td>Điện thoại: 0923-032-992</td>
                            <td>Điện thoại: 0923-032-992</td>
                        </tr>
                        <tr>
                            <td>Email: sales@webextrasite.com</td>
                            <td>Email: sales@webextrasite.com</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
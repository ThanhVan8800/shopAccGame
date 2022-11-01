@include('layouts.head')
@include('layouts.navbar')
<style type="text/css">
    .custom72 {
        border: none !important;
        padding: 0;
    }

    .custom72 a {
        background-size: 136px 35px;
        background-repeat: no-repeat;
        border: none;
        margin: 0 auto;
        width: 136px;
        height: 35px;
        background: url(img/danhmuc.gif);
    }

    .custom72 a:hover {
        background-size: 136px 35px;
        background-repeat: no-repeat;
        border: none;
        margin: 0 auto;
        width: 136px;
        height: 35px;
        background: url(img/danhmuc.gif);
        filter: saturate(2);
        filter: brightness(130%);
    }
</style>
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-box">
        <div id="slider" class="owl-theme section section-cate slideshow_full_width ">
            <div id="slide_banner" class="owl-carousel">
                <div class="item">
                    <a href="/" alt="banner chung">
                        <!-- <img src="/templates/img/banner.jpg" alt="banner chung"> -->
                    </a>
                </div>
                <div class="item">
                    <a href="/" alt="nitvn2">
                        <img src="/templates/img/banner.jpg" alt="nitvn2">
                    </a>
                </div>
                <div class="item">
                    <a href="/" alt="nitvn3">
                        <img src="/templates/img/banner.jpg" alt="nitvn3">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ nổi bật</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6"
                    data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-items="2"
                    data-slide-speed="5000" data-rtl="false">
                    <div class="item">
                        <a href="https://nick.vn/user/profile"><img src="/templates/img/vHPm7XyQah_1623147701.jpg"
                                alt="Trang cá nhân nickvn" /></a>
                    </div>
                    <div class="item">
                        <a href="https://nick.vn/dich-vu"><img src="/templates/img/vHPm7XyQah_1623147701.jpg"
                                alt="dịch vụ nickvn" /></a>
                    </div>
                    <div class="item">
                        <a href="/mua-the"><img src="/templates/img/vHPm7XyQah_1623147701.jpg" alt="Mua thẻ cào" /></a>
                    </div>
                    <div class="item">
                        <a href="/nap-the"><img src="/templates/img/vHPm7XyQah_1623147701.jpg" alt="nạp tiền" /></a>
                    </div>
                </div>
                <!-- End-->
            </div>
            <!-- End-->
        </div>
    </div>
    <script type="text/javascript">
    $('.owl-carousel-dicvu').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    })
    </script>
    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Danh mục game</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="row row-flex-safari game-list">
                    <div class="col-sm-3 col-xs-6 p-5">
                        <div class="classWithPad">
                            @foreach ($lstCategory as $cate)
                                
                                <div class="news_image">
                                    <img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;"
                                        src="/templates/img/giam.png" />
                                    <a href="/danh-muc/danh-muc-game-free-fire" title="Danh Mục Game Free Fire" class="">
                                        <img src="/templates/img/danhmuc.gif" alt="Danh Mục Game Free Fire"></a>
                                </div>
                                <div class="news_title">
                                    <h2>
                                        <a href="/danh-muc/danh-muc-game-lien-quan" title="Danh Mục Game Liên Quân">Danh Mục
                                            {{$cate->title}}
                                        </a>
                                    </h2>
                                </div>
                                <div class="news_description">
                                    <p>
                                        Số tài khoản: 23,763
                                    </p>
                                    <!-- <p>
                                    Đã bán: 198
                                    </p> -->
                                </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="custom72 view">
                                                <a href="/danh-muc/danh-muc-game-lien-quan" class=""
                                                    title="Danh Mục Game Liên Quân">
                                                    &nbsp;
                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    




                    <!-- End-->
                </div>
                <!-- End-->
            </div>
        </div>
        <style type="text/css">
        .news_image,
        .image,
        .news_title,
        .a-more,
        .news_description {
            position: relative;
            z-index: 200;
        }

        span.sale {
            position: absolute;
            z-index: 1000;
            right: -1px;
            top: -1px;
            background: rgba(255, 212, 36, .9);
            padding: 5px;
            text-align: center;
            color: #ee4d2d;
            width: 50px;
            font-weight: 700;
            font-size: 15px;
        }

        .sale:after {
            content: "";
            width: 0;
            height: 0;
            left: 0;
            bottom: -4px;
            position: absolute;
            border-color: transparent rgba(255, 212, 36, .9);
            border-style: solid;
            border-width: 0 25px 4px;
        }

        .outPrice {
            padding-top: 20px;
            text-align: center;
            width: 100px;
            margin: 0 auto;
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }

        .oldPrice {
            text-decoration: line-through;
            color: #3f0;
            border: 2px solid;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .newPrice {
            border: 2px solid red;
            padding: 5px 15px;
            color: red;
            display: inline;
            border-radius: 5px;
            margin-left: 10px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .game-list .a-more .view {
            margin-top: 20px;
        }

        @media (max-width: 550px) {
            .outPrice {
                flex-direction: column;
            }

            .newPrice {
                margin-left: 0;
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }
        </style>
        <!-- END: PAGE CONTENT -->
    </div>
    <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/templates//assets/frontend/images/loader.gif"
                    style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader" style="text-align: center"><img src="/templates//assets/frontend/images/loader.gif"
                style="width: 50px;height: 50px;display: none"></div>
        <div class="modal-content">
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.load-modal').each(function(index, elem) {
        $(elem).unbind().click(function(e) {
            e.preventDefault();
            e.preventDefault();
            var curModal = $('#LoadModal');
            curModal.find('.modal-content').html(
                "<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>"
                );
            curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
        });
    });
});
</script>
<!-- END: PAGE CONTAINER -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
    <div class="c-prefooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="c-container c-first">
                        <!-- <div class="c-content-title-1">
                           <h3 class="c-font-uppercase c-font-bold c-font-white">Về <span class="c-theme-font">Nick.vn</span>
                           
                               <a target="_blank"  href="//www.dmca.com/Protection/Status.aspx?ID=6766daa6-8986-40c5-b282-a9c9e6a883de" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/_dmca_premi_badge_1.png?ID=6766daa6-8986-40c5-b282-a9c9e6a883de"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                           
                           </h3>
                           <div class="c-line-left hide"></div>
                           <p class="c-text">
                               Chuyên mua bán nick các game... an toàn. Tin cậy nhanh chóng. Giao dịch tự động 24/24</p>
                           </div>
                           <ul class="c-links">
                           <li><a href="/gioi-thieu">Giới thiệu</a></li>
                           <li><a href="/huong-dan-mua-tai-khoan">Hướng Dẫn Mua Tài Khoản</a></li>
                           <li><a href="/huong-dan-nick-mua-tra-gop">Hướng Dẫn Mua Nick Trả Góp</a></li>
                           <li><a href="/tuyen-dai-ly-cung-cap-nick-tai-nickvn">Tuyển Đại Lý cung cấp nick tại Nick.vn</a></li>
                           <li><a href="/lien-he-gop-y"> Liên hệ/góp ý</a></li>
                           </ul> -->
                        <p><span style="color:#ffffff"><span
                                    style="font-size:22px"><strong>&nbsp;</strong></span></span><span
                                style="color:#16a085"><span
                                    style="font-size:22px"><strong>NICK.VN</strong></span></span>&nbsp; &nbsp;<a
                                href="http://www.dmca.com/Protection/Status.aspx?ID=6766daa6-8986-40c5-b282-a9c9e6a883de&amp;refurl=https://nick.vn/"
                                target="_blank"><img alt="DMCA.com Protection Status"
                                    src="https://images.dmca.com/Badges/_dmca_premi_badge_1.png?ID=6766daa6-8986-40c5-b282-a9c9e6a883de" /></a>
                        </p>
                        <p><span style="font-size:14px"><span style="color:#ffffff">Chuy&ecirc;n mua b&aacute;n
                                    nick&nbsp;all game, </span><a href="https://napgamegiare.net/"><span
                                        style="color:#ffffff">nạp game gi&aacute; rẻ</span></a><span
                                    style="color:#ffffff">,&nbsp;an to&agrave;n,&nbsp;tin cậy, nhanh ch&oacute;ng. Giao
                                    dịch tự động 24/24</span></span></p>
                        <ul>
                            <li><strong><span style="font-size:14px"><a href="/gioi-thieu" target="_blank"><span
                                                style="color:#ffffff">Giới thiệu</span></a></span></strong></li>
                            <li><strong><span style="font-size:14px"><a href="/huong-dan-mua-tai-khoan"
                                            target="_blank"><span style="color:#ffffff">Hướng Dẫn Mua T&agrave;i
                                                Khoản</span></a></span></strong></li>
                            <li><strong><span style="font-size:14px"><a href="/huong-dan-nick-mua-tra-gop"
                                            target="_blank"><span style="color:#ffffff">Hướng Dẫn Mua Nick Trả
                                                G&oacute;p</span></a></span></strong></li>
                            <li><strong><span style="font-size:14px"><a href="/tuyen-dai-ly-cung-cap-nick-tai-nickvn"
                                            target="_blank"><span style="color:#ffffff">Tuyển Đại L&yacute; cung cấp
                                                nick tại Nick.vn</span></a></span></strong></li>
                            <li><strong><span style="font-size:14px"><a href="/lien-he-gop-y" target="_blank"><span
                                                style="color:#ffffff">Li&ecirc;n hệ</span></a></span></strong></li>
                            <li><strong><a href="https://gamecuoi.com/" target="_blank"><span
                                            style="color:#ffffff"><span style="font-size:14px">Tin
                                                tức&nbsp;game</span></span></a></strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="c-container c-last">
                        <!-- <div class="c-content-title-1">
                           <h3 class="c-font-uppercase c-font-bold c-font-white">Chúng tôi ở đây</h3>
                           <div class="c-line-left hide"></div>
                           <p>Chúng tôi làm việc một cách chuyên nghiệp, uy tín, nhanh chóng và luôn đặt quyền lợi của bạn lên hàng đầu</p>
                           </div>
                           <ul class="c-socials">
                           <li><a href="https://www.facebook.com/CSKH-Tr%C3%B9m-C%C3%A1c-Game-Online-102414321166624/" target="_blank"><i class="icon-social-facebook"></i></a></li>
                           <li><a href="" target="_blank"><i class="icon-social-youtube"></i></a></li>
                           </ul>
                           <ul class="c-address"> -->
                        <!--<li><i class="icon-pointer c-theme-font"></i> One Boulevard, Beverly Hills</li>-->
                        <!-- <li><i class="icon-call-end c-theme-font"></i> <a href="tel:0869693000" class="c-font-regular">08.6969.3000</a> (8h-22h)</li>
                           <li><i class="icon-envelope c-theme-font"></i> <a href="mailto:admin@nick.vn" class="c-font-regular">admin@nick.vn</a></li>
                           <li><i class="icon-clock c-theme-font"></i><span class="c-font-regular">8h-11h30 & 13h30-22h</span></li>
                           </ul> -->
                        <h2><span style="color:#ffffff"><span style="font-size:22px"><strong>CH&Uacute;NG T&Ocirc;I Ở
                                        Đ&Acirc;Y</strong></span></span></h2>
                        <h3><span style="color:#ffffff"><span style="font-size:16px">Ch&uacute;ng t&ocirc;i l&agrave;m
                                    việc một c&aacute;ch chuy&ecirc;n nghiệp, uy t&iacute;n, nhanh ch&oacute;ng
                                    v&agrave; lu&ocirc;n đặt quyền lợi của bạn l&ecirc;n h&agrave;ng đầu.</span></span>
                        </h3>
                        <p>&nbsp;</p>
                        <p><span
                                style="color:#ffffff">&nbsp;<strong>Hotline:</strong>&nbsp;<strong>0869693000</strong></span>
                        </p>
                        <p><span style="color:#ffffff">&nbsp;<strong>Thời gian l&agrave;m việc&nbsp;8h-11h30 &amp;
                                    13h30-22h</strong></span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="fb-root"></div>
                    <div class="fb-page"
                        data-href="https://www.facebook.com/CSKH-Tr%C3%B9m-C%C3%A1c-Game-Online-102414321166624/"
                        data-tabs="timeline" data-height="270" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/CSKH-Tr%C3%B9m-C%C3%A1c-Game-Online-102414321166624/"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/CSKH-Tr%C3%B9m-C%C3%A1c-Game-Online-102414321166624/">Nick.vn</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-postfooter" style="margin-top: -70px">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6 col-sm-12 c-col">
                     <p class="c-copyright c-font-grey">2019 &copy; Vận hành bởi <a style="color: #32c5d2 !important"
                                                                                    href="http://web.quanplay.vn">Quanplay</a>
                         <span class="c-font-grey-3"> </span>
                     </div>-->
            </div>
        </div>
    </div>
</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
      <![endif]-->

<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/wow.js" type="text/javascript"></script>
<script src="js/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="js/magnific.js" type="text/javascript"></script>
<script src="js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="js/js.cookie.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="js/components.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script src="js/bootbox.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    App.init(); // init core
});
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})


$(".menu-main-mobile a").click(function() {

    if ($(this).closest("li").hasClass("c-open")) {
        $(this).closest("li").removeClass("c-open");
    } else {
        $(this).closest("li").addClass("c-open");
    }
});
</script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: true,
            loop: false
        }
    }
})
</script>
<!-- END: THEME SCRIPTS -->
@include('layouts.footer')
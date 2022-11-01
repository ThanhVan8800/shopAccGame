<!-- BEGIN: PAGE SCRIPTS -->
<script src="/templates/js/moment.min.js" type="text/javascript"></script>
<script src="/templates/js/daterangepicker.min.js" type="text/javascript"></script>
<script src="/templates/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/templates/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="/templates/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/templates/js/datepicker.js" type="text/javascript"></script>
<script src="/templates/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="/templates/js/common.js" type="text/javascript"></script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<!-- Your customer chat code -->
<!--Start of Tawk.to Script-->
<div class="fb-customerchat" attribution=setup_tool page_id="2244640205777806"
    logged_in_greeting="Chào bạn, mình có thể hỗ trợ được gì cho bạn ạ."
    logged_out_greeting="Chào bạn, mình có thể hỗ trợ được gì cho bạn ạ.">
</div>
<!--End of Tawk.to Script-->
<!-- END: LAYOUT/BASE/BOTTOM -->
@yield('footer')
<script>
//Check nếu thay đổi mật khẩu mới thì login lại
$(document).ready(function() {
    jQuery.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/checkpass",
        method: 'get',
        success: function(result) {
            console.log(result)
            if (result.status == 1) {
                window.location = '/logout';
            } else {
                //Nothing
            }
        },
        error: function(data, textStatus, errorThrown) {
            //Nothing
            console.log(errorThrown)
        }
    });
})
</script>
<script>
window.fbAsyncInit = function() {
    FB.init({
        xfbml: true,
        version: 'v3.3'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MZBLL7R7EG"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());

gtag('config', 'G-MZBLL7R7EG');
</script>

</body>

</html>
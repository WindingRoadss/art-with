<%@ page contentType="text/html;charset=utf-8" pageEncoding="utf-8"%>

    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>

    <!-- Initialize Swiper -->
    <script>
	    var swiper = new Swiper('.swiper-container-product', {
	        pagination: '.swiper-pagination',
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        slidesPerView: 1,
	        paginationClickable: true,
	        loop: true
	    });
	    
	    var swiper_comment = new Swiper('.swiper-container-comment', {
	    	slidesPerView: 3,
	        paginationClickable: true
	    });
	    
	    // header 및 footer 툴바 고정
	    $.mobile.toolbar.prototype.options.updatePagePadding = false;
	    $.mobile.toolbar.prototype.options.hideDuringFocus = "";
	    $.mobile.toolbar.prototype.options.tapToggle = false;
	    
    </script>
</body>
</html>
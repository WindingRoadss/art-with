<?php require "./common/header.php"; ?>
	
	<title>Page ID 2</title>
	
	<!-- Demo styles -->
	<style>

    @font-face {
        font-family:"Nanum Gothic";
        src: url('font/NanumGothic.eot');
        src: url('font/NanumGothic.eot?#iefix') format('embedded-opentype'),
        url('font/NanumGothic.woff') format('woff'),
        url('font/NanumGothic.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .ul-tab {
        font-size: 0;
        position: relative;
        padding: 0;
        width: 100%;
        user-select: none;
    }

    li {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        display: inline-block;
        width: 50%;
        height: 43px;
        background: #ffffff;
        font-size: 14px;
        text-align: center;
        line-height: 43px;
        color: #000;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        font-weight: bold;
        border-bottom: solid 4px transparent;
    }

    .slider {
        display: block;
        position: absolute;
        bottom: 0;
        left: 0;
        height: 5px;
        background: #26b2c1;
        transition: all 0.5s;
    }
    /*  Ripple */

    .ripple {
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.4);
        transform: scale(0);
        position: absolute;
        opacity: 1;
    }

    .rippleEffect {
        animation: rippleDrop .6s linear;
    }

    @keyframes rippleDrop {
        100% {
            transform: scale(2);
            opacity: 0;
        }
    }

	* {
        border: none;
	}

	html, body {
		position: relative;
		height: 100%;
		margin: 0;
		padding: 0;
		background: #fff;
	}

	body {
	    font-family: "Nanum Gothic", serif;
	    font-size: 14px;
	    color:#000;
	    margin: 0;
	    padding: 0;
	}

	.bg-white {
        background: #fff;
	}

	span {
	    font-family: "Nanum Gothic", serif;
	}

	#fixed-top-header {
    	position: fixed;
    	top: 0px;
    	right: 0px;
    	z-index: 1000;
	}

	#fixed-bottom-btn {
        height: 80px;
        width: 100%;
	}

    #fixed-bottom-btn div {
        z-index: 1000;
        height: 80px;
        width: 11.05%;
        background-color: #8F4C99;
        position: fixed;
        bottom: 0px;
        right: 0px;
        margin: 0px;
        text-align: center;
    }

    #fixed-bottom-btn img {
        height: 80px;
        width: auto;
        color: white;
        text-align: center;
        vertical-align: top;
    }

    .swiper-container-product {
		background-position:center;
		width: 100%;
		height: 235px;
		top: 50%;
		margin-left: auto;
		margin-right: auto;
	}

	.swiper-container-comment {
        width: 88.95%;
        height: 80px;
        float:left;
    }

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		border-style: solid;
		border: 0px;

		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
	}

   .img-frame-product {
		height: 170px;      /* equals max image height */
		width: 100%;
		white-space: nowrap;
		text-align: center;
	}

	.img-frame-product img {
		display : block;
	    margin: auto;
	}

	.img-product {
		vertical-align: middle;
		max-height: 170px;
		max-width: 450px;
		margin: 0;
    	padding: 0;
	}

	.img-frame-comment {
		height: 80px;      /* equals max image height */
		width: 145px;
		white-space: nowrap;
		text-align: center;
	}

	.img-frame-comment img {
		display : block;
	    margin: auto;
	}

	.img-comment {
		vertical-align: middle;
		max-height: 80px;
		max-width: 120px;
		margin: 0;
    	padding: 0;
	}

	.helper {
		display: inline-block;
		height: 100%;
		vertical-align: middle;
	}

	.helper-comment {
		display: inline-block;
		height: 100%;
		vertical-align: middle;
	}

	.center-button{
  		margin: 0 auto;
	}

	.center-wrapper{
		text-align: center;
		vertical-align: middle;
	}

	.center-wrapper * {
		margin: 0 auto;
	}

	.center-wrapper span {
	    vertical-align: middle;
	    line-height: 15px;
	}

	.center-wrapper img {
    	vertical-align: middle;
	}

	.vertical-center-wrapper{
		vertical-align: middle;
	}

	.vertical-center-wrapper * {
		margin: 0 auto;
	}

    .vertical-center-wrapper span {
	    vertical-align: middle;
	    line-height: 15px;
	}

	.vertical-center-wrapper img {
    	vertical-align: middle;
	}

	.center-wrapper-top {
		text-align: center;
		vertical-align: middle;
		position: fixed;
		right: 0px;
		left: 0px;
    	z-index: 3000;
	}

	.center-wrapper-top * {
		margin: 0 auto;
	}

	.center-wrapper-top img {
		vertical-align: middle;
	}

	.cat-select-box {
		background: #fff;
		border-style: solid;
		border: 0px;
	}

	.ui-select .ui-icon-arrow-d {
  		display: none;
	}

	.ui-page {
        background: transparent;
    }

    .ui-content{
        background: transparent;
    }

	.header {
	    background-color: transparent;
        border: none;
        width: 100%;
        height: 80px;
        background-image:url("images/design/img_background.png");
        background-size: 100% 100%;
    }

    .basic-info {
        font-size: 0.8em;
    }

    .cat-info-div{
        width: 100%;
        height: 35px;
        color: #26b2c1;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
        text-align: center;
        font-size: 0; /* Optional */
    }

    .cat-info-div:after{
        content: "";
        display: inline-block;
        vertical-align: middle;
        height: 100%;
    }

    .cat-info-span {
        vertical-align: middle;
        font-size: 14px;
        font-weight: bold;
    }

    .hash-tag-div{
        width: 100%;
        padding-top: 10px;
        padding-left: 18px;
        padding-right: 18px;
        height: 35px;
        font-weight: bold;
        color: #454746;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
        text-align: left;
        font-size: 0; /* Optional */
    }

    .hash-tag-div:after{
        content: "";
        display: inline-block;
        vertical-align: middle;
        height: 100%;
    }

    .hash-tag-span {
        vertical-align: middle;
        font-size: 14px;
    }

    .product-info-table {
        width: 100%;
        font-weight: bold;
        padding: 14px;
        font-size: 13px;
        color: #848587;
        line-height: 1.6em;
    }

    .product-info-table tr th {
        text-align: left;
        vertical-align: top;
        color: black;
    }

    .concert-info-table {
        width: 100%;
        font-weight: bold;
        padding: 14px;
        font-size: 13px;
        color: #848587;
        line-height: 1.6em;
    }

    .concert-info-table tr th {
        text-align: left;
        vertical-align: top;
        color: black;
    }

    .cat-and-cheer-info-table {
        width: 100%;
        font-weight: bold;
        font-size: 14px;
        color: #848587;
        line-height: 1.6em;
        border-spacing: 0;
    }

    .cat-and-cheer-info-table tr th {
        text-align: center;
        vertical-align: middle;
        color: black;
        border-bottom: 2px solid #e3e5e6;
        border-right: 2px solid #e3e5e6;
        border-top: 2px solid #e3e5e6;
    }

    .cat-and-cheer-info-table tr td {
        text-align: center;
        vertical-align: middle;
        color: black;
        border-bottom: 2px solid #e3e5e6;
        border-top: 2px solid #e3e5e6;
    }

    .cat-and-cheer-info-table a {
        text-decoration: none !important;
    }

    .cat-and-cheer-info-table tr td .cheer-img {
        vertical-align: middle;
        width: 30px;
        height: 28.5px;
        padding: 3;
        maring: 0;
    }

    .comment-and-cheer-info-table {
        width: 100%;
        font-weight: bold;
        font-size: 13px;
        color: #848587;
        line-height: 1.6em;
        border-spacing: 0;
        background-color: white;
        height: 35px;
        padding: 5px;
    }

    .comment-and-cheer-info-table tr th {
        text-align: left;
        vertical-align: bottom;
        color: black;
    }

    .comment-and-cheer-info-table tr th .comment-img {
        vertical-align: middle;
        width: 18px;
        height: auto;
        margin-left: 2px;
        margin-right: 2px;
    }

    .comment-and-cheer-info-table tr td {
        text-align: right;
        vertical-align: middle;
        font-size: 15px;
        color: #26b2c1;
        height: 29.5px;
        background-image:url("images/design/img_cheer.png");
        background-size: 116px 29.5px ;
        background-position: 100% 50%;
        background-repeat: no-repeat;
    }

    .comment-info-span {
        vertical-align: middle;
        font-size: 11px;
    }

    .cheer-info-span {
        vertical-align: middle;
        font-size: 14px;
        margin-right: 10px;
        color: #848587;
        font-weight: bold;
    }

    .li-tab-one {
        color: #26b2c1;
    }

    .li-tab-two {
        color: #848587;
    }

    .ui-bar-a, .ui-page-theme-a .ui-bar-inherit, html .ui-bar-a .ui-bar-inherit, html .ui-body-a .ui-bar-inherit, html body .ui-group-theme-a .ui-bar-inherit {
        background-color: white;
    }

    .header-title {
        position: absolute;
        margin: 0 auto;
        width: 150px;
        height: 42px;
        top: 0;
        left: 0;
        right: 0;
        line-height: 42px;
        z-index: 1001;
        text-align: center;
        vertical-align: middle;
    }

    .header-title .day-img {
        vertical-align: middle;
        line-height: 42px;
        width: 21px;
        height: 18.5px;
        maring: 0;
        padding: 3;
        z-index: 1001;
    }

    .day-img {
        vertical-align: middle;
        line-height: 42px;
        width: 21px;
        height: 18.5px;
        maring: 0;
        padding: 3;
    }

    .header-title-span {
        line-height: 42px;
        color: white;
        font-weight: lighter;
        font-size: 13;
        font-weight: bold;
    }

    .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper {
        text-shadow: none;
    }

	</style>
</head>

<body style="background-color:white;">

	<div class="bg-white" id="page">

        <div class="header-title">
            <img class="day-img" src="images/design/img_dday.png">
            <span class="header-title-span">D.day 20</span>
        </div>

        <!--
		<div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a" class="header">
		    <div class="center-wrapper">
		    	<a href="#">
		    		<img style="float: right; margin-right: 5px" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
	    		</a>
	    		<a href="#">
		    		<img style="float: right" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
		    	</a>
	    		<a href="#">
		        	<img style="float: left;" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
		        </a>
		    </div>
		    
		    <div class="center-wrapper-top">
	        	<img width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
			</div>
		</div>
		-->

		<div id="fixed-top-header" class="header">
		    <div class="center-wrapper">
		    	<a href="#">
		    		<img style="float: right; margin-top: 12px; margin-right: 15px" width="20.5px" height="22px" alt="Header" src="images/design/img_set.png" />
	    		</a>
	    		<a href="#">
		    		<img style="float: right; margin-top: 12px; margin-right: 15px" width="20.5px" height="22px"  alt="Header" src="images/design/img_al.png" />
		    	</a>
	    		<a href="#" onclick='return goBack()'>
		        	<img style="float: left; margin-top: 12px; margin-left: 15px" width="20.5px" height="22px"  alt="Header" src="images/design/img_bac.png" />
		        </a>
		    </div>
            <!-- 로고
		    <div class="center-wrapper-top">
	        	<img width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
			</div>
			-->
		</div>

		<!-- 1. 로고 이미지
		<div class="center-wrapper-top">
        	<img style="float: center;" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
		</div>
		 -->

		<!-- Swiper -->
		<div class="swiper-container swiper-container-product">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slide-product">
					<div style="width: 360px; height: 100%; overflow: hidden">
						<img src="images/pages/second/product/img_hb11.png" style="width: 360px; height: auto;">
					</div>
  				</div>

  				<div class="swiper-slide swiper-slide-product">
					<div style="width: 360px; height: 100%; overflow: hidden">
						<img src="images/pages/second/product/img_yhb1.png" style="width: 360px; height: auto;">
					</div>
  				</div>
  			</div>

		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
		</div>

        <!--
        <div class="bg-white cat-info-div" style="border-bottom: 2px solid #e3e5e6">
            <span class="cat-info-span"><b>[ 의상 > 전통의상 > 여성한복 ]</b></span>
        </div>
        -->

        <!-- category and d.day info -->
        <table class="cat-and-cheer-info-table">
            <tr>
                <th style="width: 63%;">
                    <div class="bg-white cat-info-div">
                        <span class="cat-info-span"><b>[ 의상 > 전통의상 > 여성한복 ]</b></span>
                    </div>
                </th>
                <td style="width: 37%;">
                    <a href="#">
                        <img class="cheer-img" src="images/design/img_cheer_nclick.png">
                        <span class="cheer-info-span">응원해요 <span>25</span></span>
                    </a>
                </td>
            </tr>
        </table>

        <!-- category and d.day info -->
        <!--
        <div class="vertical-center-wrapper bg-white" style="border-bottom: 2px solid #e3e5e6; line-height:20px">
            <img src="images/design/img_day.png" style="margin-left: 10px; width: 18px; height: auto;">
            <span class="basic-info">D.day 20</span>
            <img src="images/design/img_re.png" style="margin-left: 10px; width: 18px; height: auto;">
            <span class="basic-info">댓글수 22</span>
            <img src="images/design/img_cheer.png" style="margin-left: 105px; width: 18px; height: auto;">
            <span class="basic-info">응원해요 8</span>
        </div>
        -->

        <ul class="ul-tab">
            <li class="li-tab-one" style="border-bottom: solid 4px #e3e5e6">물품정보</li>
            <li class="li-tab-two" style="border-bottom: solid 4px #e3e5e6"">나눔혜택정보</li>
            <li class="slider"></li>
        </ul>

        <!--
        <div class="bg-white hash-tag-div" >
            <span class="hash-tag-span">#화려한 #궁중의상 #왕비</span>
        </div>
        -->

        <table class="product-info-table">
            <tr>
                <th style="width: 30%;">태그</th>
                <td style="width: 70%;">#화려한 #궁중의상 #왕비</td>
            </tr>
            <tr>
                <th>닉네임</th>
                <td>으라차연극인</td>
            </tr>
            <tr>
                <th>거래가능지역</th>
                <td>서울시 동대문구</td>
            </tr>
            <tr>
                <th>물품설명</th>
                <td>
                    저희 연극이 의상실이 배경인데 화려한 여성한복을 구하기가 재정상 어렵습니다.
                    화려한 여성한복이면 됩니다. 저희가 꾸밀 수 있으니 장식이 많은 것 보유하고 계시면
                    저희에게 나눠주세요~
                </td>
            </tr>
        </table>

        <table class="concert-info-table" style="display:none">
            <tr>
                <th style="width: 30%;">나눔혜택</th>
                <td style="width: 70%;">초청권</td>
            </tr>
            <tr>
                <th>혜택명</th>
                <td>마술가게</td>
            </tr>
            <tr>
                <th>일시</th>
                <td>2016.10.10 - 2015.11.25</td>
            </tr>
            <tr>
                <th>위치</th>
                <td>두레홀 4관</td>
            </tr>
            <tr>
                <th>장수</th>
                <td>3장</td>
            </tr>
            <tr>
                <th>소속단체</th>
                <td>극단 두레</td>
            </tr>
            <tr>
                <th>대표자</th>
                <td>김원봉</td>
            </tr>
        </table>

        <!-- 드롭다운
	    <div class="center-wrapper bg-white">
			<div style="width: 30%; display: inline-block;" class="cat-select-box">
				<select name="select-choice-1" id="select-choice-1" data-iconpos="noicon" class="cat-select-box">         
					<option value="standard">카테고리 1</option>         
					<option value="rush">Rush: 3 days</option>         
					<option value="express">Express: next day</option>         
					<option value="overnight">Overnight</option>     
				</select> 
			</div>
			<div style="width: 30%; display: inline-block;">     
				<select name="select-choice-1" id="select-choice-1" data-iconpos="noicon" >         
					<option value="standard">카테고리 2</option>         
					<option value="rush">Rush: 3 days</option>         
					<option value="express">Express: next day</option>         
					<option value="overnight">Overnight</option>     
				</select> 
			</div>
			<div style="width: 30%; display: inline-block;">     
				<select name="select-choice-1" id="select-choice-1" data-iconpos="noicon" >         
					<option value="standard">카테고리 3</option>         
					<option value="rush">Rush: 3 days</option>         
					<option value="express">Express: next day</option>         
					<option value="overnight">Overnight</option>     
				</select> 
			</div>
	   	</div>
	   	-->

		<!-- 가운데 정렬 태그
		<div class="bg-white">
			<div class="center-wrapper">
	  			<span style="margin-right: 10px; border-style: solid">태그 1</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 2</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 3</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 4</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 5</span>
			</div>
		</div>
		-->

        <!--
		<div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;">
			<div class="swiper-container swiper-container-comment bg-white" >
		        <div class="swiper-wrapper">
		        	<div class="swiper-slide swiper-slide-comment">
		       			<div class=img-frame-comment>
							<img class="img-comment" src="images/6.jpg" height=80 alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/4.jpg" height=80 alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/7.jpg" height=80  alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/5.jpg" height=80  alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/6.jpg" height=80 alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/6.jpg" height=80 alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/5.jpg" height=80 alt="olivia hussie" />
						</div>
					</div>
					<div class="swiper-slide swiper-slide-comment">
		       			<div class="img-frame-comment">
							<img class="img-comment" src="images/5.jpg" height=80 alt="olivia hussie" />
						</div>
					</div>
		       	</div>
		   	</div>
   	 	</div> --> <!-- footer -->

        <div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;">

            <!-- category and d.day info -->
            <table class="comment-and-cheer-info-table">
                <tr>
                    <th style="width: 65%;">
                        <div class="bg-white">
                            <img class="comment-img" src="images/design/img_re.png">
                            <span class="comment-info-span">댓글 22개</span>
                        </div>
                    </th>
                    <!--
                    <td style="width: 35%;">
                        <span class="cheer-info-span">응원해요 26</span>
                    </td>
                    -->
                </tr>
            </table>

            <div class="swiper-container swiper-container-comment bg-white" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-comment">
                        <div style="width: 80px; height: 100%; overflow: hidden">
                            <a class="reply" href="#">
                                <img src="images/pages/second/comment/hb_re1.png" style="width: 80px; height: auto;">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-comment">
                        <div style="width: 80px; height: 100%; overflow: hidden">
                            <img src="images/pages/second/comment/hb_re2.png" style="width: 80px; height: auto;">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-comment">
                        <div style="width: 80px; height: 100%; overflow: hidden">
                            <img src="images/pages/second/comment/hb_re3.png" style="width: 80px; height: auto;">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-comment">
                        <div style="width: 80px; height: 100%; overflow: hidden">
                            <img src="images/pages/second/comment/hb_re4.png" style="width: 80px; height: auto;">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-comment">
                        <div style="width: 80px; height: 100%; overflow: hidden">
                            <img src="images/pages/second/comment/hb_re5.png" style="width: 80px; height: auto;">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-comment">
                        <div style="width: 80px; height: 100%; overflow: hidden">
                            <img src="images/pages/second/comment/hb_re6.png" style="width: 80px; height: auto;">
                        </div>
                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
        </div>



        <!--
        <div class="swiper-container swiper-container-product">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slide-product">
					<div style="width: 360px; height: 100%; overflow: hidden">
						<img src="images/pages/second/product/img_hb11.png" style="width: 360px; height: auto;">
					</div>
  				</div>
        -->

        <div id="fixed-bottom-btn" style="width: 100%">
            <a href="http://www.naver.com">
                <div>
                    <img src="images/design/img_plus2.png"/>
                </div>
            </a>
        </div
		
	</div> <!-- page -->
	
    <?php require "./common/footer.php"; ?>

    <!-- Initialize Swiper -->
    <script>

        function goBack() {
            window.history.back();
        }

        $('.reply').click(function(){
            $.ajax({
                async:true,
                success:function(data){
                    //alert("success");
                    window.location='comment_detail.php';
                }
            })
        })

        var swiper = new Swiper('.swiper-container-product', {
            pagination: '.swiper-pagination',
            slidesPerView: 1,
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            loop: true
        });

        var swiper_comment = new Swiper('.swiper-container-comment', {
            slidesPerView: 4,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true
        });

        // header 및 footer 툴바 고정
        $.mobile.toolbar.prototype.options.updatePagePadding = false;
        $.mobile.toolbar.prototype.options.hideDuringFocus = "";
        $.mobile.toolbar.prototype.options.tapToggle = false;

        function changeCheerImg() {
            if($('.cheer-img').attr("src").trim() == "images/design/img_cheer_nclick.png") {
                $('.cheer-img').attr("src", "images/design/img_cheer_click.png");
                changeCheerNum(0); // 0 : inc
            }
            else {
                $('.cheer-img').attr("src", "images/design/img_cheer_nclick.png");
                changeCheerNum(1); // 1 : dec
            }
        }

        function changeCheerNum(valueIncOrDec) {
            var currentNum = $('.cheer-info-span span').text()
            if(valueIncOrDec == 0) { // Inc
                currentNum++;
                $('.cheer-info-span span').text(currentNum);
                //alert($('.cheer-info-span span').text());
            }
            else { // Dec
                currentNum--;
                $('.cheer-info-span span').text(currentNum);
            }
        }


        $('.cat-and-cheer-info-table tr td a').click(function(){
            $.ajax({
                async:true,
                success:function(data){
                    //alert("cheer");
                    changeCheerImg();
                }
            })
        })

        // tab 애니메이션
        $(".ul-tab li").click(function(e) {

            // make sure we cannot click the slider
            if ($(this).hasClass('slider')) {
                return;
            }
            /* Add the slider movement */
            // what tab was pressed
            var whatTab = $(this).index();

            // Work out how far the slider needs to go
            var howFar = $( window ).width() * whatTab / 2;
            $(".slider").css({
                left: howFar + "px"
            });

            /* Add the ripple */
            // Remove olds ones
            $(".ripple").remove();

            // Setup
            var posX = $(this).offset().left,
                posY = $(this).offset().top,
                buttonWidth = $(this).width(),
                buttonHeight = $(this).height();

            // Add the element
            $(this).prepend("<span class='ripple'></span>");

            // Make it round!
            if (buttonWidth >= buttonHeight) {
                buttonHeight = buttonWidth;
            } else {
                buttonWidth = buttonHeight;
            }

            // Get the center of the element
            var x = e.pageX - posX - buttonWidth / 2;
            var y = e.pageY - posY - buttonHeight / 2;

            // Add the ripples CSS and start the animation
            $(".ripple").css({
                width: buttonWidth,
                height: buttonHeight,
                top: y + 'px',
                left: x + 'px'
            }).addClass("rippleEffect");

            if(whatTab == 0){
                $(".product-info-table").show();
                $(".hash-tag-div").show();
                $(".concert-info-table").hide();
                $(".li-tab-two").css("color", "#848587");
                $(".li-tab-one").css("color", "#26b2c1");
            } else {
                $(".concert-info-table").show();
                $(".product-info-table").hide();
                $(".hash-tag-div").hide();
                $(".li-tab-one").css("color", "#848587");
                $(".li-tab-two").css("color", "#26b2c1");
            }

        });


    </script>
</body>
</html>


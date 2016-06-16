<?php require "./common/header.php"; ?>

    <title>Page ID 3</title>

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

        .container-comment-detail {
            background-position:center;
            width: 100%;
            height: 235px;
            top: 50%;
            margin-left: auto;
            margin-right: auto;
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

        .swiper-container-popup {
            width: 100%;
            height: 370px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide-popup {
            width: 95%;
            height: 380px;
        }

        .swiper-slide-no-center {
            font-size: 18px;
            background: #fff;
            border-style: solid;
            border: 0px;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
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

        .button-set {
            margin-top: 20px;
            text-align: center;
            height: 60px;
            width: 100%;
        }

        .center-img-frame {
            height: 140px;      /* equals max image height */
            width: 100%;
            white-space: nowrap;
            text-align: center;
        }

        .center-img-frame:before,
        .center-img-frame_before {
            content: "";
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        .center-img-frame img {
            vertical-align: middle;
            height: 58.5px;
            wodth: 58.5px;
        }

        /* Move this to conditional comments */
        .center-img-frame {
            list-style:none;
            behavior: expression(
                function(t){
                    t.insertAdjacentHTML('afterBegin','<span class="center-img-frame_before"></span>');
                    t.runtimeStyle.behavior = 'none';
                }(this)
            );
        }

        .header {
            background-color: transparent;
            border: none;
            width: 100%;
            height: 80px;
            background-image:url("images/design/img_background.png");
            background-size: 100% 100%;
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

        .comment-detail-info-table {
            width: 100%;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 30px;
            padding-bottom: 80px;
            line-height: 23px;
            font-size: 14px;
            font-weight: bold;
            color: #848587;
        }

        .comment-detail-info-table tr th {
            text-align: left;
            vertical-align: top;
            color: black;
        }

        .share-info-table {
            width: 100%;
            font-size: 14px;
            border-spacing: 0;
        }
        .share-info-table-left {
        	font-size: 14px;
        	display: table-cell;
        	vertical-align: top;
        }
        .share-info-table-right {
        	font-size: 14px;
        	display: table-cell;
        	vertical-align: top;
        }
        .share-info-table-left tr th {
       		padding-left: 20px;
       		padding-top: 10px;
       		font-weight: bold;
       		text-align: left;
        }
        .share-info-table-right tr td {
        	padding-left: 13px;
       		padding-top: 10px;
       		text-align: left;
       		font-weight: bold;
       		color: #848587;
        }
        
        .share-info-table tr th {
            text-align: left;
            vertical-align: top;
            border-right: 1pt solid lightgray;
        }

        .share-info-table-th {
            padding: 5px;
            width: 35%;
            font-size: 0.9em;
        }

        .share-info-table-td {
            padding: 5px;
            font-weight: bold;
            font-size: 0.9em;
            color: #848587;
            line-height: 1.5em;
            padding-left: 10px;
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
    	
    	.cat-info-div{
        width: 100%;
        color: #26b2c1;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
        text-align: center;
        font-size: 0; /* Optional */
    	}
    	
    	.withtalk-span {
        vertical-align: middle;
        font-size: 15px;
        font-weight: bold;
        color: gray;
    	}
    	.cat-info-div:after{
        content: "";
        display: inline-block;
        vertical-align: middle;
        height: 100%;
    	}
    	
    	.choice-span {
        vertical-align: middle;
        font-size: 15px;
        color: #848587;
        font-weight: bold;
   		}

        .comment-info-bottom-comment {
            position: absolute;
            bottom: 0;
            height: 12%;
            width: 100%;
            line-height: 1.5em;
            background-color: #ec6b3e;
            color: white;
            font-size: 13px;
            font-weight: normal;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            justify-content: center;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .share-info-table-head {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            border-bottom: 2pt solid #e3e5e6;
            height: 65px;
        }

/*
        .share-info-leftcolumn {
        	padding-left: 3px;
        	font-weight: bold;
        	font-size: 14px;
       		text-align: left;
            vertical-align: top;
        }
        */
        
        .share-info-table-notice1 {
            padding-top: 50px;
            padding-left: 20px;
            padding-right: 20px;
            color: #ec6b3e;
            font-size: 12px;
            font-weight: bold;
        }

        .share-info-table-notice2 {
            padding-top: 60px;
            padding-left: 20px;
            padding-right: 20px;
            color: #ec6b3e;
            font-size: 12px;
            font-weight: bold;
        }

        .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper {
            background-color: white;
        }

        .ui-body-a, .ui-page-theme-a .ui-body-inherit, html .ui-bar-a .ui-body-inherit, html .ui-body-a .ui-body-inherit, html body .ui-group-theme-a .ui-body-inherit, html .ui-panel-page-container-a {
            text-shadow: none;
        }

    </style>
</head>

<body style="background-color:white;">
    <div class="bg-white" id="page">

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
                    <div style="width: 360px; height: 200%; overflow: hidden">
                        <img src="images/pages/third/comment-detail/hb_re1.png" style="width: 360px; height: auto;">
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-product">
                    <div style="width: 360px; height: 100%; overflow: hidden">
                        <img src="images/pages/third/comment-detail/hb_res2.png" style="width: 360px; height: auto;">
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-product">
                    <div style="width: 360px; height: 100%; overflow: hidden">
                        <img src="images/pages/third/comment-detail/hb_res3.png" style="width: 360px; height: auto;">
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-product">
                    <div style="width: 360px; height: 100%; overflow: hidden">
                        <img src="images/pages/third/comment-detail/hb_res4.png" style="width: 360px; height: auto;">
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-product">
                    <div style="width: 360px; height: 100%; overflow: hidden">
                        <img src="images/pages/third/comment-detail/hb_res5.png" style="width: 360px; height: auto;">
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
        <div class="button-set" style="width: 100%">
            <img style="height: 43px; width: auto;" src="images/design/img_talk.png">
            <a id="btn_choice" href="#popup_choice" data-rel="popup" data-position-to="window">
                <img style="height: 43px; width: auto;" src="images/design/img_choice.png" style="margin-left: 5px">
            </a>
        </div>
-->
         <table class="cat-and-cheer-info-table">
            <tr>
                <th style="width: 50%; height: 45px; background-color: #f6f6f6; border-top: 0px;">
                    <div class="cat-info-div">
                    	<a href="chatroom.php" data-rel="next" target="_self;" style="text-decoration:none;">
                        <span id="btn_withtalk" class="withtalk-span"><b>윗톡</b></span>
                        </a>
                    </div>
                </th>
                <td style="width: 50%; background-color: #f6f6f6; border-top: 0px;">
                	<a href="#popup_choice" data-rel="popup" data-position-to="window" style="text-decoration:none;">
                    <span id="btn_choice" class="choice-span">선택</span>
                    </a>
                </td>
            </tr>
        </table>
        
        
        
        <table class="comment-detail-info-table">
            <tr>
                <th style="width: 30%;">닉네임</th>
                <td style="width: 70%;">내가기부왕</td>
            </tr>
            <tr>
                <th>배송가능날짜</th>
                <td>2016.06.01</td>
            </tr>
            <tr>
                <th>거래가능지역</th>
                <td>비싼 돈주고 하나 장만했지만 입을 일이 없었습니다.</td>
            </tr>
            <tr>
                <th>하고싶은말</th>
                <td>기본 한복도 이쁜데 좀 더 리폼하면 더 이쁠 거 같아요~</td>
            </tr>
        </table>

        <!--
        <div class="bg-white">
            <div class="vertical-center-wrapper" style="height: 100px">
                <img src="images/pages/third/design/img_talk.png" style="width: 58.5px; height: 58.5px;">
            </div>
        </div>
        -->

        <!-- start popup -->
        <div data-role="popup" id="popup_choice" data-dismissible="false" style="width: 300px; height: 500px; border-width: 1;" data-overlay-theme="b">
            <div class="swiper-container swiper-container-popup">
                <div class="swiper-wrapper">
                    <div id="share_info_div_one" class="swiper-slide swiper-slide-popup">
                        <div style="width: 100%; position: absolute; top: 0; left: 0;">
							<table class="share-info-table">
								<tr>
									<td class="share-info-table-head" valign="middle">선택
                                        <a href="#" data-rel="back"><img src="images/design/img_x.png" style="position: absolute; right: 10px; top: 15px;  width: 30px; height: 30px;"></a>
									</td>
								</tr>
							 </table>
                            <div style="position: relative; top: 20px; font-size: 14px; font-weight: bold;">[나눔댓글 정보확인]</div>
                            <table class="share-info-table" style="position: relative; top: 45px; padding-right: 20px; padding-left: 20px;">

								<tr>
                                    <th style="font-size: 0.9em; width: 35%; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">닉네임</th>
                                    <td style="width: 65%; padding-left: 10px; padding-bottom: 5px; font-weight: bold; font-size: 0.9em; color: #848587; line-height: 1.5em;">내가기부왕</td>
								</tr>
								<tr>
									<th class="share-info-table-th">배송가능날짜</th>
									<td class="share-info-table-td">2016.06.01</td>
								</tr>
								<tr>
									<th class="share-info-table-th">거래가능지역</th>
									<td class="share-info-table-td">서울시 노원구</td>
								</tr>
								<tr>
									<th class="share-info-table-th">물품설명</th>
									<td class="share-info-table-td">비싼 돈주고 하나 장만했지만<br> 입을 일이
										없었습니다.
									</td>
								</tr>
								<tr>
									<th class="share-info-table-th">하고싶은말</th>
									<td class="share-info-table-td">기본 한복도 이쁜데 좀 더 리폼하면 더 이쁠 거
										같아요~
									</td>
								</tr>
							</table>
						</div>
                    </div>

                    <div id="share_info_div_two" class="swiper-slide swiper-slide-popup">
                        <div style="width: 100%; position: absolute; top: 0; left: 0;">
                            <table class="share-info-table">
								<tr>
									<td class="share-info-table-head" valign="middle">선택
											<a href="#" data-rel="back"><img src="images/design/img_x.png" style="position: absolute; right: 10px; top: 15px;  width: 30px; height: 30px;"></a>
									</td>
								</tr>
							 </table>
                            <div style="position: relative; top: 20px; font-size: 14px; font-weight: bold;">[나눔혜택 정보확인]</div>
							<table class="share-info-table" style="position: relative; top: 45px; padding-right: 20px; padding-left: 20px;">

								<tr>
                                    <th style="font-size: 0.9em; width: 35%; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">혜택명</th>
                                    <td style="width: 65%; padding-left: 10px; padding-bottom: 5px; font-weight: bold; font-size: 0.9em; color: #848587; line-height: 1.5em;">마술가게</td>
								</tr>
								<tr>
									<th class="share-info-table-th">일시</th>
									<td class="share-info-table-td">2016.10.10 - 2016.11.25</td>
								</tr>
								<tr>
									<th class="share-info-table-th">위치</th>
									<td class="share-info-table-td">두레홀 4관</td>
								</tr>
								<tr>
									<th class="share-info-table-th">상세설명</th>
									<td class="share-info-table-td">3장 </td>
								</tr>
                                <tr>
                                    <th class="share-info-table-th">소속</th>
                                    <td class="share-info-table-td">극단 두레</td>
                                </tr>
								<tr>
									<th class="share-info-table-th">대표자</th>
									<td class="share-info-table-td">김원봉 </td>
								</tr>
							</table>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <div id="share_btn_set" class="center-img-frame" style="width: 100%; height: 50px">
                <a id="btn_next" href="#"><img style="width: 120px; height: auto;" src="images/design/img_next.png" ></a>
            </div>

            <div id="ticket_btn_set" class="center-img-frame" style="width: 100%; height: 50px; display: none">
                <a href="#" data-rel="back"><img style="width: 120px; height: auto;" src="images/design/img_ok.png" ></a>
            </div>

            <div class="comment-info-bottom-comment">* 확인을 누르시면 나눔자 선택이 완료되어<br>
                MY에서 나눔 상세 내용을 확인할 수 있습니다.
            </div>
        </div>
        <!-- end popup -->

    </div>

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
            </div> --> 
            <!-- footer -->

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
                            <img src="images/pages/second/comment/hb_re1.png" style="width: 80px; height: auto;">
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

        var swiper = new Swiper('.swiper-container-product', {
            slidesPerView: 1,
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            loop: true
        });

        var swiper_comment = new Swiper('.swiper-container-comment', {
            slidesPerView: 4,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true
        });

        var swiper_popup = new Swiper('.swiper-container-popup', {
            slidesPerView: 1,
            paginationClickable: true,
            pagination: '.swiper-pagination',
            onSlideChangeEnd: function() {
                changeButtons();
            }
        });

        // header 및 footer 툴바 고정
        $.mobile.toolbar.prototype.options.updatePagePadding = false;
        $.mobile.toolbar.prototype.options.hideDuringFocus = "";
        $.mobile.toolbar.prototype.options.tapToggle = false;


        $('.swiper-container-popup').click(function(){
            $.ajax({
                async:true,
                success:function(data){
                    //alert("success");
                    //$("#share_info_div_one").css("-webkit-box-pack", "");
                    //alert($("#share_info_div_one").css("-webkit-box-pack"));
                    //alert(swiper_popup.activeIndex);
                }
            })
        })

        $('#choice').click(function(){
            $.ajax({
                async:true,
                success:function(data){
                    alert("success");
                    //$("#share_info_div_one").css("-webkit-box-pack", "");
                    //alert($("#share_info_div_one").css("-webkit-box-pack"));
                    alert(swiper_popup.activeIndex);
                }
            })
        })

        $('#btn_next').click(function(){
            $.ajax({
                async:true,
                success:function(data){
                    nextSlide();
                    //alert(swiper_popup.activeIndex);
                }
            })
        })

        function nextSlide() {
            //swiper_popup.slideNext(runCallbacks, speed);
            swiper_popup.slideNext(false);
            changeButtons();
        }

        $('#btn_prev').click(function(){
            $.ajax({
                async:true,
                success:function(data){
                    prevSlide();
                    //alert(swiper_popup.activeIndex);
                }
            })
        })

        function prevSlide() {
            swiper_popup.slidePrev(false);
            changeButtons();
        }

        //swiper_popup.onSlideChangeEnd(swiper)

        function checkActiveIndex() {
            if(swiper_popup.activeIndex == 0)
                return 0;
            else
                return 1;
        }

        function changeButtons() {
            if(checkActiveIndex() == 1) {
                //alert("index is 1");
                $("#share_btn_set").css("display", "none");
                $("#ticket_btn_set").css("display", "");
            }
            else {
                //alert("index is 0");
                $("#ticket_btn_set").css("display", "none");
                $("#share_btn_set").css("display", "");
            }
        }

        $('#btn_withtalk').click(function() {
			
            
        }
                )

        //$("#share_info_div_one").dragEnd()


        //alert(swiper_popup.clickedIndex);
        /*
        var $no_center_objects = $(".swiper-slide-popup");
        $no_center_objects.each(function(i){
            $(this).css("-webkit-box-pack", "");
            $(this).css("-ms-flex-pack", "");
            $(this).css("-webkit-justify-content", "");
            $(this).css("justify-content", "");
            $(this).css("-webkit-box-align", "");
            $(this).css("-ms-flex-align", "");
            $(this).css("-webkit-align-items", "");
            $(this).css("align-items", "");
        });
        */

        //$("#share_info_div_one").css({ 'align-items' : '', 'opacity' : '' });
        //$('#share_info_div_one').removeAttr('align-items');
        //alert($("#share_info_div_one").css("align-items"));
        //$("#share_info_div_one").css("align-items", "");
        //alert($("#share_info_div_one").css("align-items"));
        //$("#share_info_div_one").css("-webkit-box-pack", "");
        //$("#share_info_div_one").removeAttr("-webkit-box-pack");
        //alert($("#share_info_div_one").css("-webkit-box-pack"));
        //$("#share_info_div_one").removeAttr("-ms-flex-pack");
      /*  $("#share_info_div_one").removeAttr("-webkit-justify-content");
        $("#share_info_div_one").removeAttr("justify-content");
        $("#share_info_div_one").removeAttr("-webkit-box-align");
        $("#share_info_div_one").removeAttr("-ms-flex-align");
        $("#share_info_div_one").removeAttr("-webkit-align-items");
        $("#share_info_div_one").removeAttr("align-items");*/

    </script>
</body>
</html>



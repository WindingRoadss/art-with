<?php require "./common/header.php"; ?>
<head>
<title>Page ID=9.7</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

<style>

.profile-img {
	width: 40px;
	height: 40px;
}


/*---------- css for chatbox ------------ */
/*---- start ---------*/
@import url(http://weloveiconfonts.com/api/?family=typicons);

[class*="typicons-"]:before {
	font-family: 'Typicons', sans-serif;
}

.module {
	position: relative;
	top: 70px;
	width: 100%;
	height: 100%;
	margin: 20px auto;
}

.top-bar {
	background: #666;
	color: white;
	padding: 0.5rem;
	position: relative;
	overflow: hidden;
}

.top-bar h1 {
	display: inline;
	font-size: 1.1rem;
}

.top-bar .typicons-message {
	display: inline-block;
	padding: 4px 5px 2px 5px;
}

.top-bar .typicons-minus {
	position: relative;
	top: 3px;
}

.top-bar .left {
	float: left;
}

.top-bar .right {
	float: right;
	padding-top: 5px;
}

.top-bar>* {
	position: relative;
}

.top-bar::before {
	content: "";
	position: absolute;
	top: -100%;
	left: 0;
	right: 0;
	bottom: -100%;
	opacity: 0.25;
	background: radial-gradient(#ffffff, #000000);
	animation: pulse 1s ease alternate infinite;
}

.discussion {
	height: 100%;
	list-style: none;
	background: #e5e5e5;
	margin: 0;
	padding: 0 0 50px 0;
}

.discussion li {
	padding: 0.5rem;
	overflow: hidden;
	display: flex;
}

.discussion .avatar {
	width: 40px;
	position: relative;
}

.discussion .avatar img {
	display: block;
	/* width: 100%; */
}

.other .avatar:after {
	content: "";
	position: absolute;
	top: 0;
	right: 0;
	width: 0;
	height: 0;
	border: 5px solid white;
	border-left-color: transparent;
	border-bottom-color: transparent;
}

.self {
	justify-content: flex-end;
	align-items: flex-end;
}

.self .messages {
	order: 1;
	border-bottom-right-radius: 0;
}

.self .avatar {
	order: 2;
}

.self .avatar:after {
	content: "";
	position: absolute;
	bottom: 0;
	left: 0;
	width: 0;
	height: 0;
	border: 5px solid white;
	border-right-color: transparent;
	border-top-color: transparent;
	box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

.messages {
	background: white;
	padding: 10px;
	border-radius: 2px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.messages p {
	font-size: 0.8rem;
	margin: 0 0 0.2rem 0;
}

.messages time {
	font-size: 0.7rem;
	color: #ccc;
}

@
keyframes pulse {from { opacity:0;
	
}

to {
	opacity: 0.5;
}
}

/*---- end ---------*/



    /* 기존 CSS 재정의 */
    .ui-select .ui-icon-arrow-d {
        display: none;
    }

    .ui-page {
        background: transparent;
    }

    .ui-content{
        background: transparent;
    }

    .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper {
        text-shadow: none;
    }

    .ui-bar-a, .ui-page-theme-a .ui-bar-inherit, html .ui-bar-a .ui-bar-inherit, html .ui-body-a .ui-bar-inherit, html body .ui-group-theme-a .ui-bar-inherit {
        background-color: #f9fafc;
    }

    .ui-bar-a, .ui-page-theme-a .ui-bar-inherit, html .ui-bar-a .ui-bar-inherit, html .ui-body-a .ui-bar-inherit, html body .ui-group-theme-a .ui-bar-inherit {
        font-weight: normal;
    }

    .ui-body-a, .ui-page-theme-a .ui-body-inherit, html .ui-bar-a .ui-body-inherit, html .ui-body-a .ui-body-inherit, html body .ui-group-theme-a .ui-body-inherit, html .ui-panel-page-container-a {
        background-color: transparent;
        border-color: transparent;
        /*color: transparent;*/
        text-shadow: 0;
    }

    .ui-input-text, .ui-input-search {
        margin: 0;
        border-width: 0;
        border: none;
        box-shadow: none;
    }

    .ui-focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .ui-corner-all {
        border-radius: 0 !important;
    }

    .ui-page-theme-a a:visited,
    html .ui-bar-a a:visited,
    html .ui-body-a a:visited,
    html body .ui-group-theme-a a:visited {
        color: transparent; /*{a-link-visited}; */;
    }

    .ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
        font-weight: normal;
    }

    .ui-content {
        padding: 0;
    }

    .ui-page-theme-a .ui-btn, html .ui-bar-a .ui-btn, html .ui-body-a .ui-btn, html body .ui-group-theme-a .ui-btn, html head + body .ui-btn.ui-btn-a, .ui-page-theme-a .ui-btn:visited, html .ui-bar-a .ui-btn:visited, html .ui-body-a .ui-btn:visited, html body .ui-group-theme-a .ui-btn:visited, html head + body .ui-btn.ui-btn-a:visited {
        background-color: #692c6f;
        border: 0;
        color: white /*{a-bup-color}*/;
        text-shadow: 0;
    }

    .ui-page-theme-a .ui-btn.ui-btn-active, html .ui-bar-a .ui-btn.ui-btn-active, html .ui-body-a .ui-btn.ui-btn-active, html body .ui-group-theme-a .ui-btn.ui-btn-active, html head + body .ui-btn.ui-btn-a.ui-btn-active, .ui-page-theme-a .ui-checkbox-on:after, html .ui-bar-a .ui-checkbox-on:after, html .ui-body-a .ui-checkbox-on:after, html body .ui-group-theme-a .ui-checkbox-on:after, .ui-btn.ui-checkbox-on.ui-btn-a:after, .ui-page-theme-a .ui-flipswitch-active, html .ui-bar-a .ui-flipswitch-active, html .ui-body-a .ui-flipswitch-active, html body .ui-group-theme-a .ui-flipswitch-active, html body .ui-flipswitch.ui-bar-a.ui-flipswitch-active, .ui-page-theme-a .ui-slider-track .ui-btn-active, html .ui-bar-a .ui-slider-track .ui-btn-active, html .ui-body-a .ui-slider-track .ui-btn-active, html body .ui-group-theme-a .ui-slider-track .ui-btn-active, html body div.ui-slider-track.ui-body-a .ui-btn-active {
        background-color: #f9fafc /*{a-active-background-color}*/;
        border: 0;
        color: #fff /*{a-active-color}*/;
        text-shadow: 0;
    }

    .ui-page-theme-a a:visited, html .ui-bar-a a:visited, html .ui-body-a a:visited, html body .ui-group-theme-a a:visited {
        color: transparent;
    }

    .ui-page-theme-a .ui-btn, html .ui-bar-a .ui-btn, html .ui-body-a .ui-btn, html body .ui-group-theme-a .ui-btn, html head + body .ui-btn.ui-btn-a, .ui-page-theme-a .ui-btn:visited, html .ui-bar-a .ui-btn:visited, html .ui-body-a .ui-btn:visited, html body .ui-group-theme-a .ui-btn:visited, html head + body .ui-btn.ui-btn-a:visited {
        background-color: #692c6f;
        border: 0;
        color: white;
    }

    .ui-page-theme-a .ui-btn.ui-btn-active, html .ui-bar-a .ui-btn.ui-btn-active, html .ui-body-a .ui-btn.ui-btn-active, html body .ui-group-theme-a .ui-btn.ui-btn-active, html head + body .ui-btn.ui-btn-a.ui-btn-active, .ui-page-theme-a .ui-checkbox-on:after, html .ui-bar-a .ui-checkbox-on:after, html .ui-body-a .ui-checkbox-on:after, html body .ui-group-theme-a .ui-checkbox-on:after, .ui-btn.ui-checkbox-on.ui-btn-a:after, .ui-page-theme-a .ui-flipswitch-active, html .ui-bar-a .ui-flipswitch-active, html .ui-body-a .ui-flipswitch-active, html body .ui-group-theme-a .ui-flipswitch-active, html body .ui-flipswitch.ui-bar-a.ui-flipswitch-active, .ui-page-theme-a .ui-slider-track .ui-btn-active, html .ui-bar-a .ui-slider-track .ui-btn-active, html .ui-body-a .ui-slider-track .ui-btn-active, html body .ui-group-theme-a .ui-slider-track .ui-btn-active, html body div.ui-slider-track.ui-body-a .ui-btn-active {
        color: #692c6f;
    }

    .ui-page-theme-a .ui-btn.ui-btn-active, html .ui-bar-a .ui-btn.ui-btn-active, html .ui-body-a .ui-btn.ui-btn-active, html body .ui-group-theme-a .ui-btn.ui-btn-active, html head + body .ui-btn.ui-btn-a.ui-btn-active, .ui-page-theme-a .ui-checkbox-on:after, html .ui-bar-a .ui-checkbox-on:after, html .ui-body-a .ui-checkbox-on:after, html body .ui-group-theme-a .ui-checkbox-on:after, .ui-btn.ui-checkbox-on.ui-btn-a:after, .ui-page-theme-a .ui-flipswitch-active, html .ui-bar-a .ui-flipswitch-active, html .ui-body-a .ui-flipswitch-active, html body .ui-group-theme-a .ui-flipswitch-active, html body .ui-flipswitch.ui-bar-a.ui-flipswitch-active, .ui-page-theme-a .ui-slider-track .ui-btn-active, html .ui-bar-a .ui-slider-track .ui-btn-active, html .ui-body-a .ui-slider-track .ui-btn-active, html body .ui-group-theme-a .ui-slider-track .ui-btn-active, html body div.ui-slider-track.ui-body-a .ui-btn-active {
        text-shadow: none;
        font-weight: bold;
    }

    .ui-page-theme-a .ui-btn, html .ui-bar-a .ui-btn, html .ui-body-a .ui-btn, html body .ui-group-theme-a .ui-btn, html head + body .ui-btn.ui-btn-a, .ui-page-theme-a .ui-btn:visited, html .ui-bar-a .ui-btn:visited, html .ui-body-a .ui-btn:visited, html body .ui-group-theme-a .ui-btn:visited, html head + body .ui-btn.ui-btn-a:visited {
        text-shadow: none;
        font-weight: bold;
    }

    .ui-navbar li .ui-btn {
        font-size: 16px;
        margin: 0;
        border: 0;
    }

    .ui-body-a, .ui-page-theme-a .ui-body-inherit, html .ui-bar-a .ui-body-inherit, html .ui-body-a .ui-body-inherit, html body .ui-group-theme-a .ui-body-inherit, html .ui-panel-page-container-a {
        background-color: #fff /*{a-body-background-color}*/;
        border-color: #ddd /*{a-body-border}*/;
        color: #333 /*{a-body-color}*/;
        text-shadow: 0 /*{a-body-shadow-x}*/ 1px /*{a-body-shadow-y}*/ 0 /*{a-body-shadow-radius}*/ #f3f3f3 /*{a-body-shadow-color}*/;
    }
    .ui-popup {
        position: relative;
    }
    .ui-overlay-shadow {
        -webkit-box-shadow: 0 0 12px rgba(0,0,0,.6);
        -moz-box-shadow: 0 0 12px rgba(0,0,0,.6);
        box-shadow: 0 0 12px rgba(0,0,0,.6);
    }

    body, input, select, textarea, button, .ui-btn {
        font-size: 0.8em;
        /* line-height: 1.3; */
        font-family: sans-serif /*{global-font-family}*/;
    }

    .no-shadow {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    ::selection {
        background: lightgrey;
        color: white
    }

    textarea {
        resize: none;
    }

    /* Art-With 전용 CSS */
    @font-face {
        font-family:"Nanum Gothic";
        src: url('font/NanumGothic.eot');
        src: url('font/NanumGothic.eot?#iefix') format('embedded-opentype'),
        url('font/NanumGothic.woff') format('woff'),
        url('font/NanumGothic.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
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

    .bg-gray {
        background: #f9fafc;
        /*background: #26b2c1;*/
    }

    .bg-white {
        background: white;
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
    #fixed-second-header{
   		position: fixed;
   		width: 100%;
   		height: 40px;
        top: 50px;
        right: 0px;
        z-index: 500;
        text-align: center;
        vertical-align: middle;
    }

    #fixed-bottom-btn {
        height: 50px;
        width: 100%;
    }

    #fixed-bottom-btn div {
        z-index: 1000;
        height: 50px;
        width: 100%;
        background-color: #0ba4c3;
        line-height: 50px;
        position: fixed;
        bottom: 0px;
        right: 0px;
        margin: 0px;
        text-align: center;
    }

    #fixed-bottom-btn span {
        line-height: 50px;
        color: white;
        text-align: center;
        vertical-align: middle;
        font-size: 16px;
    }

    .header-title {
        position: fixed;
        margin: 0 auto;
        width: 150px;
        height: 50px;
        line-height: 50px;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1001;
        text-align: center;
        vertical-align: middle;
    }

    .header-title-span {
        line-height: 50px;
        color: white;
        font-weight: lighter;
        font-size: 16px;
        font-weight: bold;
    }

    .header {
        background-color: #914291;
        border: none;
        width: 100%;
        height: 50px;
        background-size: 100% 100%;
    }
    .header-second {
    	background-color: #692c6f;
        border: none;;
        background-size: 100% 100%;
    }
    .bottom-textarea-container {
    	vertical-align: middle;
    	width: 100%;
    	height: 55px;
    	position: fixed;
		bottom: 0px;
    }
    .bottom-textarea-div {
    	vertical-align: middle;
		width: 98%;
		height: 45px;
		background-color: white;
		margin: 0 auto;
		border: solid #4fc9de 1px;
		z-index: 1000;
	}
	.bottom-textarea {
		width: 70%;
		height: 100%;
		border: 0px;
		font-size: 18px;
	}
	.bottom-textarea-send {
		width: 30%
	}

    .blank-div-for-header {
        width: 100%;
        height: 50px;
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

    .input-box-default {
        background-color: white;
        margin: 8;
        border: solid #cccccc 1px;
        border-radius: 5px;
        padding: 8;
    }

    .input-box-default .title-span {
        font-weight: bold;
        color: #868686;
        font-size: 13px;
        padding: 5px;
    }

    .input-box-default .description-span {
        color: #cccccc;
        font-size: 10px;
        font-weight: lighter;
        padding: 5px;
    }

    .input-box-default hr {
        border: 0;
        height: 1px;
        background: #cccccc;
    }

    .product-img-wrapper {
        margin-top: 5px;
        display: table;
        border-spacing: 5px;
    }

    .product-img-wrapper div {
        height: 59px; /* width 계산 후 height 값 세팅(jquery) */
        width: 59px;
        display: table-cell;
        border: solid #f08b68 1px;
        border-radius: 5px;
    }

    .add-image-btn {
        cursor: pointer;
        background-size: 59px 59px;
        background-position: 50% 50%;
        background-image: url("images/design/img_plus3.png");
        background-repeat: no-repeat;
    }

    #imgInput {
        display: none;
    }

    .product-img {
        background-position: center top;
        background-size: 100% auto;
    }

    #textBoxProductInfo {
        min-height: 15px;
        height: 30px;
        background-color: white;
        border: solid #f08b68 1px;
        color: #828282;
        font-size: 10px;
    }

    #textBoxTag {
        min-height: 15px;
        height: 30px;
        background-color: white;
        border: solid #f08b68 1px;
        color: #828282;
        font-size: 10px;
    }

    #textBoxAddress {
        min-height: 15px;
        height: 30px;
        background-color: white;
        border: solid #f08b68 1px;
        color: #828282;
        font-size: 10px;
    }

    #textBoxShareBenefit {
        min-height: 15px;
        height: 30px;
        background-color: white;
        border: solid #f08b68 1px;
        color: #828282;
        font-size: 10px;
    }
    #textBoxBenefitContents {
        min-height: 15px;
        height: 52px;
        background-color: white;
        border: solid #f08b68 1px;
        color: #828282;
        font-size: 10px;
    }

    a {
        color: white;
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;

    .tab-menu{
        height: 50px;
    }

    .no-shadow span {
        color: red;
    }





</style>


</head>
<html>
<body>

	<div class="header-title">
		<span class="header-title-span">내가기부왕</span>
	</div>

	<div id="fixed-top-header" class="header">
		<div class="center-wrapper">
			<a href="#"> <img
				style="float: right; margin-top: 12px; margin-right: 15px"
				width="20.5px" height="22px" alt="Header"
				src="images/design/img_set.png" />
			</a> <a href="#"> <img
				style="float: right; margin-top: 12px; margin-right: 15px"
				width="20.5px" height="22px" alt="Header"
				src="images/design/img_al.png" />
			</a> <a href="#" onclick='return goBack()'> <img
				style="float: left; margin-top: 12px; margin-left: 15px"
				width="20.5px" height="22px" alt="Header"
				src="images/design/img_bac.png" />
			</a>
		</div>
	</div>
	<div id="fixed-second-header" class="header-second">
		<span class="header-title-span" style="line-height: 40px;"><small>[의상>전통의상>여성한복]</small></span>
	</div>

	<div class="module">
			<ol class="discussion">
				<li class="other">
					<div class="avatar">
						<img src="images/pages/third/chatroom/img_pro.png"
							class="profile-img" />
					</div>
					<div class="messages">
						<p>yeah, they do early flights cause they connect with big
							airports. they wanna get u to your connection</p>
						<time datetime="2009-11-13T20:00">Timothy • 51 min</time>
					</div>
				</li>
				<li class="self">
					<div class="avatar">
						<img src="images/pages/third/chatroom/img_pro2.png"
							class="profile-img" />
					</div>
					<div class="messages">
						<p>That makes sense.</p>
						<p>It's a pretty small airport.</p>
						<time datetime="2009-11-13T20:14">37 mins</time>
					</div>
				</li>
				<li class="other">
					<div class="avatar">
						<img src="images/pages/third/chatroom/img_pro.png" 
							class="profile-img" />
					</div>
					<div class="messages">
						<p>that mongodb thing looks good, huh?</p>
						<p>tiny master db, and huge document store</p>
					</div>
				</li>
				<li class="self">
					<div class="avatar">
						<img src="images/pages/third/chatroom/img_pro2.png"
							class="profile-img" />
					</div>
					<div class="messages">
						<p>That makes sense.</p>
						<p>It's a pretty small airport.</p>
						<time datetime="2009-11-13T20:14">37 mins</time>
					</div>
				</li>
			</ol>

		</div>
		
		<!-- footer -->

	<div class="bottom-textarea-container">

		<div class="bottom-textarea-div">

			<textarea id="input_text" name="input_area" class="bottom-textarea"></textarea>

			<img id="send_text" src="images/design/img_send.png" style="height: 35px; width: auto; margin-bottom: 6px; margin-left: 5px;">
		</div>

	</div>


	<script>
    function goBack() {
        window.history.back();
    }
	</script>
</body>
</html>

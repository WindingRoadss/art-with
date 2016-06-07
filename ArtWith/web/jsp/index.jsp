<%@ page contentType="text/html;charset=utf-8" pageEncoding="utf-8"%>
<%@ include file="/web/jsp/header.jsp"%>
	
	<title>Page ID 2</title>
	
	<!-- Demo styles -->
	<style>
	
	html, body {
		position: relative;
		height: 100%;
		margin: 0; 
		padding: 0;
	}
	    
	body {
	    background: #eee;
	    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	    font-size: 14px;
	    color:#000;
	    margin: 0;
	    padding: 0;
	}
	
	#fixed-bottom-btn {
    	position: fixed;
    	bottom: 0px;
    	right: 0px; 
    	z-index: 3000;
	}
	
	.swiper-container-product {
		background-position:center;
		width: 100%;
		height: 170px;
		top: 50%;
		margin-left: auto;
		margin-right: auto;
	}
   
	.swiper-container-comment {
        width: 100%;
        height: 80px;
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
		vertical-align: center;
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
	
	.center-wrapper-top {
		text-align: center;
		vertical-align: center;
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
	
	</style>
</head>

<body>
	<div data-role="page3" id="page">
	
		<div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
		    <div class="center-wrapper">
		    	<!-- 3. 알림내역 이미지 -->
		    	<a href="#">
		    		<img style="float: right; margin-right: 5px" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
	    		</a>
	    		<!-- 4. 설정 이미지 -->
	    		<a href="#">
		    		<img style="float: right" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
		    	</a>
		    	<!-- 17. 뒤로가기 버튼-->
	    		<a href="#">
		        	<img style="float: left;" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
		        </a>
		    </div>
		    
		    <div class="center-wrapper-top">
				<!-- 1. 로고 이미지 --> 
	        	<img width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
			</div>
		</div>
		
		<!-- 1. 로고 이미지 
		<div class="center-wrapper-top">
        	<img style="float: center;" width="35" height="40" alt="Header" src="http://i.imgur.com/UQ1QWhH.png" />
		</div>
		 -->
		
		<div class="center-wrapper">
  			<div data-role="button">D-104</div>
		</div>
		
  		<div data-role="popup" id="share_info" class="ui-content">
			<a href="#" data-rel="back">닫기</a>
      		<p> 아아아아아아앙아</p>
		</div>

		<!-- Swiper -->
		<div class="swiper-container swiper-container-product">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slide-product">
					<div class="img-frame-product">
						<img class="img-product" src="images/4.jpg" height=250 alt="olivia hussie" />
					</div>
  				</div>
        		<div class="swiper-slide swiper-slide-product">
         			<div class="img-frame-product">
 						<img class="img-product" src="images/5.jpg" height=250 alt="olivia hussie" />
					</div>
  				</div>
  				<div class="swiper-slide swiper-slide-product">
         			<div class="img-frame-product">
 						<img class="img-product" src="images/6.jpg" height=250 alt="olivia hussie" />
					</div>
  				</div>
  				<div class="swiper-slide swiper-slide-product">
         			<div class="img-frame-product">
 						<img class="img-product" src="images/7.jpg" height=250 alt="olivia hussie" />
					</div>
  				</div>
  			</div>
	    
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		    
		    <!-- Add Arrows -->
		    <div class="swiper-button-next"></div>
		    <div class="swiper-button-prev"></div>
		</div>
		
		<div data-role="content" >
			<div class="center-wrapper">
	  			<div data-role="button" style="float: right; margin-right: 10px">댓글 수 </div>
	  			<div data-role="button" style="float: right; margin-right: 10px">응원 수</div>
			</div>
		</div>
		
		<!--
		<div data-role="content" >
			<div class="center-wrapper">
	  			<span style="margin-right: 10px">카테고리 1</span>
	  			<span style="margin-right: 10px">></span>
	  			<span style="margin-right: 10px">카테고리 2</span>
	  			<span style="margin-right: 10px">></span>
	  			<span style="margin-right: 10px">카테고리 3</span>
			</div>
		</div>
		-->
		<!-- 
		<div data-role="content" >
			<div class="center-wrapper">
				<form>
					<fieldset data-role="controlgroup" data-type="horizontal">
				    	<label for="select-native-11">Select A</label>
					    <select id="select-native-11" data-role="none" class="cat-select-box" data-iconpos="noicon">
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					    </select>
					    <label for="select-native-12">Select B</label>
					    <select name="select-native-12" id="select-native-12">
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					    </select>
					    <label for="select-native-13">Select C</label>
					    <select name="select-native-13" id="select-native-13">
					        <option value="#">One</option>
					        <option value="#">Two</option>
					        <option value="#">Three</option>
					    </select>
					</fieldset>
				</form>
			</div>
		</div>
		-->
		
	    <div data-role="content" class="center-wrapper">
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
		
		<div data-role="content" >
			<div class="center-wrapper">
	  			<span style="margin-right: 10px; border-style: solid">태그 1</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 2</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 3</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 4</span>
	  			<span style="margin-right: 10px; border-style: solid">태그 5</span>
			</div>
		</div>
		
		<div data-role="content" >
			<div>
				<span><b>물품정보</b></span><br/>
				<span>ID</span><br/>
				<span>거래가능지역</span><br/>
				<span>물품정보</span>
			</div>
		</div>
		
		<div data-role="content" >
			<div>
				<span><b>공연정보</b></span><br/>
				<span>공연/영화명</span><br/>
				<span>공연/상영 일시</span><br/>
				<span>공연/상영 장소</span><br/>
				<span>티켓장수</span><br/>
				<span>소속단체</span><br/>
				<span>대표자</span>
			</div>
		</div>

		<div data-role="content" >
			<div class="center-wrapper">
				<span><b>나눔에 동참하셔서 거래가 성사되면<br/>
				공영민 영화티켓을 받으실 수 있습니다.</b></span>
			</div>
		</div>
		
		<div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;"> 
			<div class="swiper-container swiper-container-comment" >
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
   	 	</div> <!-- footer -->
   	 	
		<a href="http://www.naver.com">
			<img src="images/plus.png" id="fixed-bottom-btn" style="height: 80px; width: 40px;">
		</a>
		
	</div> <!-- page -->
	
   	
<%@ include file="/web/jsp/footer.jsp"%>
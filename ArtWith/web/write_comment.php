<?php require "./common/header.php"; ?>

<title>Write Comment</title>

<!-- Demo styles -->
<style>

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
        color: transparent;
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

    .header-title {
        position: absolute;
        width: 100%;
        height: 50px;
        top: 0px;
        right: 0px;
        line-height: 50px;
        z-index: 1001;
        text-align: center;
        vertical-align: middle;
    }

    .header-title-span {
        line-height: 50px;
        color: white;
        font-weight: bold;
        font-size: 15px;
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
        position: absolute;
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
        font-size: 15;
        font-weight: bold;
    }

    .header {
        background-color: #914291;
        border: none;
        width: 100%;
        height: 50px;
        background-size: 100% 100%;
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

    #textBoxMessage {
        min-height: 15px;
        height: 30px;
        background-color: white;
        border: solid #f08b68 1px;
        color: #828282;
        font-size: 10px;
    }


</style>
</head>

<body style="background-color:white;">

<div class="bg-gray" id="page">

    <div class="header-title">
        <span class="header-title-span">나눔댓글작성</span>
    </div>

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
    </div>

    <div class="blank-div-for-header"></div>

    <div class="bg-white input-box-default">
        <span class="title-span">물품 이미지 (최대 5장)</span>
        <hr/>
        <span class="description-span">
            요청자에게 적합한 물품인지 파악하기 위해 필요한 정보입니다.
        </span>
        <br>
        <span class="description-span">
            첫 번째 이미지가 대표 이미지로 지정됩니다.
        </span>
        <div class="product-img-wrapper">
            <div class="product-img"></div>
            <div class="product-img"></div>
            <div class="product-img"></div>
            <div class="product-img"></div>
            <div class="add-image-btn">

            </div>
        </div>
    </div>

    <input type="file" id="imgInput" />

    <div class="bg-white input-box-default">
        <span class="title-span">배송가능 날짜</span>
        <hr/>
    </div>

    <div class="bg-white input-box-default">
        <span class="title-span">주소지</span>
        <hr/>
    </div>

    <div class="bg-white input-box-default">
        <span class="title-span">물품설명 (10자 이상, 100자 미만)</span>
        <hr/>
        <input id="textBoxProductInfo" type="text" placeholder="제품의 상태, 크기, 훼손여부 등을 상세하게 적어주세요." maxlength="200">
    </div>

    <div class="bg-white input-box-default">
        <span class="title-span">하고 싶은 말(10자 이상, 100자 미만)</span>
        <hr/>
        <input id="textBoxMessage" type="text" placeholder="나눔을 하게 된 이유나 기타 하고 싶은 말이 있다면 작성해주세요." maxlength="200">
    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;">
        <div id="fixed-bottom-btn" style="width: 100%">
            <div>
                <span> 완료 </span>
            </div>
        </div>
    </div>

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

    /*
    $('.add-image-btn').click(function(){
        $.ajax({
            async:true,
            success:function(data){
                alert("success");
                //$('#imgInput').trigger('click');
               // window.location='comment_detail.php';
                //readURL(this);
            }
        })
    })
    */
/*
    $('.add-image-btn').click(function(){
        $.ajax({
            async:true,
            success:function(data){
                alert("success");
                $('#imgInput').click();
            }
        })
    })*/

    jQuery(function($){
        $('.add-image-btn').on('click', function(e){
            e.preventDefault();
            $('#imgInput')[0].click();
        });
    });

    $('#imgInput').change(function(){
        readImageURL(this);
    });

    $('.product-img').click(function(){
        $(this).css("backgroundImage", "none");
    });

    function readImageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //$('#blah').attr('src', e.target.result);
                setImageInDiv(e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function setImageInDiv(imgURL) {
        imgURL = "url(" + imgURL + ")";
        $(".product-img").each(function() {
            if( $(this).css('backgroundImage') == "none") {
                $(this).css('backgroundImage', imgURL);
                return false;
            }
        });
    }

    // header 및 footer 툴바 고정
    $.mobile.toolbar.prototype.options.updatePagePadding = false;
    $.mobile.toolbar.prototype.options.hideDuringFocus = "";
    $.mobile.toolbar.prototype.options.tapToggle = false;

</script>
</body>
</html>


<?php require "./common/header.php"; ?>

<link rel="stylesheet" type="text/css" href="css/dropdown.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>

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

    .ui-page-theme-a a:visited,
    html .ui-bar-a a:visited,
    html .ui-body-a a:visited,
    html body .ui-group-theme-a a:visited {
        color: transparent; /*{a-link-visited}; */;
    }

    .ui-page-theme-a a, html .ui-bar-a a, html .ui-body-a a, html body .ui-group-theme-a a {
        font-weight: normal;
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

    a {
        color: white;
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
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

    <div class="bg-white input-box-default" id="transport_div">
        <span class="title-span">배송가능 날짜</span>
        <hr/>

        <div class="wrapper-div">
            <table style="width: 100%; margin: 0; padding: 0;">
                <tr>
                    <td style="width: 33.33%;">
                        <div id="year_drop_down" class="wrapper-dropdown" tabindex="1" >
                            <span>년도</span>
                            <ul class="dropdown" id="ul_year">
                                <li><a id="2016" href="#">2016</a></li>
                                <li><a href="#">2015</a></li>
                                <li><a href="#">2014</a></li>
                                <li><a href="#">2013</a></li>
                                <li><a href="#">2012</a></li>
                                <li><a href="#">2011</a></li>
                                <li><a href="#">2010</a></li>
                                <li><a href="#">2009</a></li>
                                <li><a href="#">2008</a></li>
                                <li><a href="#">2007</a></li>
                                <li><a href="#">2006</a></li>
                                <li><a href="#">2005</a></li>
                                <li><a href="#">2004</a></li>
                            </ul>
                        </div>
                    </td>

                    <td style="width: 33.33%;">
                        <div id="month_drop_down" class="wrapper-dropdown" tabindex="1">
                            <span>월</span>
                            <ul class="dropdown" id="ul_month">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">11</a></li>
                                <li><a href="#">12</a></li>
                            </ul>
                        </div>
                    </td>

                    <td style="width: 33.33%;">
                        <div id="day_drop_down" class="wrapper-dropdown" tabindex="1">
                            <span>일</span>
                            <ul class="dropdown" id="ul_day">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">11</a></li>
                                <li><a href="#">12</a></li>
                                <li><a href="#">13</a></li>
                                <li><a href="#">14</a></li>
                                <li><a href="#">15</a></li>
                                <li><a href="#">16</a></li>
                                <li><a href="#">17</a></li>
                                <li><a href="#">18</a></li>
                                <li><a href="#">19</a></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#">21</a></li>
                                <li><a href="#">22</a></li>
                                <li><a href="#">23</a></li>
                                <li><a href="#">24</a></li>
                                <li><a href="#">25</a></li>
                                <li><a href="#">26</a></li>
                                <li><a href="#">27</a></li>
                                <li><a href="#">28</a></li>
                                <li><a href="#">29</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#">31</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>


    <div class="bg-white input-box-default" id="address_div">
        <span class="title-span">주소지</span>
        <hr/>
        <div class="wrapper-div">
            <table style="width: 100%; margin: 0; padding: 0;">
                <tr>
                    <td style="width: 33.33%;">
                        <div id="city_drop_down" class="wrapper-dropdown" tabindex="1" >
                            <span>시</span>
                            <ul class="dropdown" id="ul_city">
                                <li><a href="#">서울특별시</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </td>

                    <td style="width: 33.33%;">
                        <div id="district_drop_down" class="wrapper-dropdown" tabindex="1">
                            <span>구</span>
                            <ul class="dropdown" id="ul_district">
                                <li><a href="#">송파구</a></li>
                                <li><a href="#">강동구</a></li>
                                <li><a href="#">강남구</a></li>
                                <li><a href="#">성동구</a></li>
                                <li><a href="#">영등포구</a></li>
                                <li><a href="#">중구</a></li>
                            </ul>
                        </div>
                    </td>

                    <td style="width: 33.33%;">
                    </td>
                </tr>
            </table>
        </div>
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

    /* 드롭다운 목록 */
    $(function(){
        $("ul.sub").hide();
    });

    $(document).on('click','#cat_first',function()	 {
        $("ul.sub").slideToggle("fast");
    });

    $(document).on('click','#cat_second',function()	 {
        $("ul.sub").slideToggle("fast");
    });

    $(document).on('click','#cat_third',function()	 {
        $("ul.sub").slideToggle("fast");
    });

</script>

<script type="text/javascript">

    function DropDownTrans(el) {
        this.dd = el;
        this.initEvents();
    }

    DropDownTrans.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
                changeHeightTransportDiv();
            });
        }
    }

    function DropDownAddr(el) {
        this.dd = el;
        this.initEvents();
    }

    DropDownAddr.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
                changeHeightAddrDiv();
            });
        }
    }

    $(function() {
        var yearDropDown = new DropDownTrans( $('#year_drop_down') );
        var monthDropDown = new DropDownTrans( $('#month_drop_down') );
        var dayDropDown = new DropDownTrans( $('#day_drop_down') );
        var districtDropDown = new DropDownAddr( $('#district_drop_down') );
        var cityDropDown = new DropDownAddr( $('#city_drop_down ') );

        // 화면 아무 곳이나 찍었을 때 active 삭제
        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown').removeClass('active');
            $('#transport_div').css('height', '88');
            $('#address_div').css('height', '88');
        });

    });

    var countTransDropDownOpened = 0; // 1 : open, 0 : closed
    var isDropDownOpenAddr = 0; // 1 : open, 0 : closed

    $('#transport_div #ul_year li a').each( function(index) {
        $(this).click( function() {
            $('#year_drop_down span').text($(this).text());
            //changeHeightTransportDiv();
        });
    });

    $('#transport_div #ul_month li a').each( function(index) {
        $(this).click( function() {
            $('#month_drop_down span').text($(this).text());
            //changeHeightTransportDiv();
        });
    });

    $('#transport_div #ul_day li a').each( function(index) {
        $(this).click( function() {
            $('#day_drop_down span').text($(this).text());
            //changeHeightTransportDiv();
        });
    });

    $('#address_div #ul_city li a').each( function(index) {
        $(this).click( function() {
            $('#city_drop_down span').text($(this).text());
        });
    });

    $('#address_div #ul_district li a').each( function(index) {
        $(this).click( function() {
            $('#district_drop_down span').text($(this).text());
        });
    });

    //alert($('#year_drop_down div').text().trim());

    function changeHeightTransportDiv() {
        var numTransDropDownActive = $('#transport_div .active').length;

        if ($('#transport_div').css('height') == '88px') { // closed
            $('#transport_div').css('height', '250px');
        }
        else {
            if(numTransDropDownActive == 0)
                $('#transport_div').css('height', '88px');
        }
    }

    function changeHeightAddrDiv() {
        var numAddrDropDownActive = $('#address_div.active').length;

        if ($('#address_div').css('height') == '88px') { // closed
            $('#address_div').css('height', '250px');
        }
        else {
            if(numAddrDropDownActive == 0)
                $('#address_div').css('height', '88px');
        }
    }

</script>
</body>
</html>


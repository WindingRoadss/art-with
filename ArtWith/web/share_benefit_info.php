<?php require "./common/header.php"; ?>

<link rel="stylesheet" type="text/css" href="css/dropdown.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>

<title>Share Info Benefit</title>

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

<body style="background-color:white;">

<div class="bg-gray" id="page">

    <div class="header-title">
        <span class="header-title-span">나눔윗요청</span>
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

    <div data-role="tabs" id="tabs">
        <div data-role="navbar">
            <ul>
                <li><a id="tab-product-info" href="#one" data-ajax="false" class="no-shadow tab-menu ui-btn-active"><span>물품정보</span></a></li>
                <li><a id="tab-concert-info" href="#two" data-ajax="false" class="no-shadow tab-menu"><span>나눔혜택정보</span></a></li>
            </ul>
        </div>
        <div id="one">

            <div class="bg-white input-box-default">
                <span class="title-span">요청물품 유사 이미지 (최대 5장)</span>
                <hr/>
                <span class="description-span">
                    나눔자가 기부할 물품이 적합한지 파악하기 위해 필요한 정보입니다.
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

            <div class="bg-white input-box-default" id="cat_div">
                <span class="title-span">카테고리</span>
                <hr/>

                <div class="wrapper-div">
                    <table style="width: 100%; margin: 0; padding: 0;">
                        <tr>
                            <td style="width: 33.33%;">
                                <div id="cat_first_drop_down" class="wrapper-dropdown" tabindex="1" >
                                    <span>전체</span>
                                    <ul class="dropdown" id="ul_cat_first">
                                        <li><a href="#">전체</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
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
                                <div id="cat_second_drop_down" class="wrapper-dropdown" tabindex="1">
                                    <span>전체</span>
                                    <ul class="dropdown" id="ul_cat_second">
                                        <li><a href="#">전체</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
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
                                <div id="cat_third_drop_down" class="wrapper-dropdown" tabindex="1">
                                    <span>전체</span>
                                    <ul class="dropdown" id="ul_cat_third">
                                        <li><a href="#">전체</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="bg-white input-box-default">
                <span class="title-span">태그 (최대 5개)</span>
                <hr/>
                <input id="textBoxTag" type="text" placeholder="나눔자가 세분화된 분류로 검색하기 위한 정보입니다." maxlength="200">
            </div>

            <div class="bg-white input-box-default">
                <span class="title-span">거래가능지역 (구 단위까지)</span>
                <hr/>
                <input id="textBoxAddress" type="text" placeholder="나눔자가 거래가능한 지역을 파악하기 위해 필요한 정보입니다." maxlength="200">
            </div>

            <div class="bg-white input-box-default">
                <span class="title-span">물품설명 (10자 이상, 100자 미만)</span>
                <hr/>
                <input id="textBoxProductInfo" type="text" placeholder="더 적합한 물품의 기부를 받기 위한 정보입니다." maxlength="200">
            </div>

        </div>

        <div id="two">

            <div class="bg-white input-box-default">
                <span class="title-span">나눔혜택</span>
                <hr/>
                <input id="textBoxShareBenefit" type="text" placeholder="나눔자가 세분화된 분류로 검색하기 위한 정보입니다." maxlength="200">
            </div>

            <div class="bg-white input-box-default">
                <span class="title-span">혜택명</span>
                <hr/>
                <textarea id="textBoxBenefitContents" placeholder="- 초청권일 경우 : 공연 및 상영 이름&#13;&#10;- 재능기부일 경우 : 재능의 종류&#13;&#10;- 기념품일 경우 : 공연 및 상영과 관련된 물품의 종류"></textarea>
            </div>

            <div class="bg-white input-box-default" id="date_div">
                <span class="title-span">일시</span>
                <hr/>

                <span class="description-span">
                    나눔혜택을 제공할 수 있는 일시를 적어주세요.
                </span>

                <div class="wrapper-div">
                    <table style="width: 100%; margin: 5 0 0 0; padding: 0;">
                        <tr>
                            <td style="width: 45%;">
                                <div id="date_picker_start_drop_down" class="wrapper-dropdown" tabindex="1" >
                                    <span id="start_year_text">2016년</span>
                                    <span id="start_month_text">6월</span>
                                    <span id="start_date_text">15일</span>
                                    <ul class="dropdown" id="ul_date_picker_start">
                                        <li>
                                            <div class="due-date-start" style="width: 100%;">
                                                <table style="width: 100%; margin: 0; padding: 0; border: 0; border-spacing: 0;">
                                                    <tr>
                                                        <td class="due-date-style-td start-year">
                                                            <ul style="overflow: auto; height: 100%; list-style: none; padding: 0;">
                                                                <li><a class="date_select" href="#">2016</a></li>
                                                                <li><a class="date_select" href="#">2015</a></li>
                                                                <li><a class="date_select" href="#">2014</a></li>
                                                                <li><a class="date_select" href="#">2013</a></li>
                                                                <li><a class="date_select" href="#">2012</a></li>
                                                                <li><a class="date_select" href="#">2011</a></li>
                                                                <li><a class="date_select" href="#">2010</a></li>
                                                                <li><a class="date_select" href="#">2009</a></li>
                                                            </ul>
                                                        </td>
                                                        <td class="due-date-style-td start-month">
                                                            <ul style="overflow: auto; height: 100%; list-style: none; padding: 0;">
                                                                <li><a class="date_select" href="#">1</a></li>
                                                                <li><a class="date_select" href="#">2</a></li>
                                                                <li><a class="date_select" href="#">3</a></li>
                                                                <li><a class="date_select" href="#">4</a></li>
                                                                <li><a class="date_select" href="#">5</a></li>
                                                                <li><a class="date_select" href="#">6</a></li>
                                                                <li><a class="date_select" href="#">7</a></li>
                                                                <li><a class="date_select" href="#">8</a></li>
                                                                <li><a class="date_select" href="#">9</a></li>
                                                                <li><a class="date_select" href="#">10</a></li>
                                                                <li><a class="date_select" href="#">11</a></li>
                                                                <li><a class="date_select" href="#">12</a></li>
                                                            </ul>
                                                        </td>
                                                        <td class="due-date-style-td start-date">
                                                            <ul style="overflow: auto; height: 100%; list-style: none; padding: 0;">
                                                                <li><a class="date_select" href="#">1</a></li>
                                                                <li><a class="date_select" href="#">2</a></li>
                                                                <li><a class="date_select" href="#">3</a></li>
                                                                <li><a class="date_select" href="#">4</a></li>
                                                                <li><a class="date_select" href="#">5</a></li>
                                                                <li><a class="date_select" href="#">6</a></li>
                                                                <li><a class="date_select" href="#">7</a></li>
                                                                <li><a class="date_select" href="#">8</a></li>
                                                                <li><a class="date_select" href="#">9</a></li>
                                                                <li><a class="date_select" href="#">10</a></li>
                                                                <li><a class="date_select" href="#">11</a></li>
                                                                <li><a class="date_select" href="#">12</a></li>
                                                                <li><a class="date_select" href="#">13</a></li>
                                                                <li><a class="date_select" href="#">14</a></li>
                                                                <li><a class="date_select" href="#">15</a></li>
                                                                <li><a class="date_select" href="#">16</a></li>
                                                                <li><a class="date_select" href="#">17</a></li>
                                                                <li><a class="date_select" href="#">18</a></li>
                                                                <li><a class="date_select" href="#">19</a></li>
                                                                <li><a class="date_select" href="#">20</a></li>
                                                                <li><a class="date_select" href="#">21</a></li>
                                                                <li><a class="date_select" href="#">22</a></li>
                                                                <li><a class="date_select" href="#">23</a></li>
                                                                <li><a class="date_select" href="#">24</a></li>
                                                                <li><a class="date_select" href="#">25</a></li>
                                                                <li><a class="date_select" href="#">26</a></li>
                                                                <li><a class="date_select" href="#">27</a></li>
                                                                <li><a class="date_select" href="#">28</a></li>
                                                                <li><a class="date_select" href="#">29</a></li>
                                                                <li><a class="date_select" href="#">30</a></li>
                                                                <li><a class="date_select" href="#">31</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                            <td style="width: 10%; text-align: center">
                                <span style="color: #f08b68; font-size: 20px">―</span>
                            </td>

                            <td style="width: 45%;">
                                <div id="date_picker_end_drop_down" class="wrapper-dropdown" tabindex="1" >
                                    <span id="end_year_text">2016년</span>
                                    <span id="end_month_text">6월</span>
                                    <span id="end_date_text">15일</span>
                                    <ul class="dropdown" id="ul_date_picker_end">
                                        <li>
                                            <div class="due-date-end" style="width: 100%;">
                                                <table style="width: 100%; margin: 0; padding: 0; border: 0; border-spacing: 0;">
                                                    <tr>
                                                        <td class="due-date-style-td end-year">
                                                            <ul style="overflow: auto; height: 100%; list-style: none; padding: 0;">
                                                                <li><a class="date_select" href="#">2016</a></li>
                                                                <li><a class="date_select" href="#">2015</a></li>
                                                                <li><a class="date_select" href="#">2014</a></li>
                                                                <li><a class="date_select" href="#">2013</a></li>
                                                                <li><a class="date_select" href="#">2012</a></li>
                                                                <li><a class="date_select" href="#">2011</a></li>
                                                                <li><a class="date_select" href="#">2010</a></li>
                                                                <li><a class="date_select" href="#">2009</a></li>
                                                            </ul>
                                                        </td>
                                                        <td class="due-date-style-td end-month">
                                                            <ul style="overflow: auto; height: 100%; list-style: none; padding: 0;">
                                                                <li><a class="date_select" href="#">1</a></li>
                                                                <li><a class="date_select" href="#">2</a></li>
                                                                <li><a class="date_select" href="#">3</a></li>
                                                                <li><a class="date_select" href="#">4</a></li>
                                                                <li><a class="date_select" href="#">5</a></li>
                                                                <li><a class="date_select" href="#">6</a></li>
                                                                <li><a class="date_select" href="#">7</a></li>
                                                                <li><a class="date_select" href="#">8</a></li>
                                                                <li><a class="date_select" href="#">9</a></li>
                                                                <li><a class="date_select" href="#">10</a></li>
                                                                <li><a class="date_select" href="#">11</a></li>
                                                                <li><a class="date_select" href="#">12</a></li>
                                                            </ul>
                                                        </td>
                                                        <td class="due-date-style-td end-date">
                                                            <ul style="overflow: auto; height: 100%; list-style: none; padding: 0;">
                                                                <li><a class="date_select" href="#">1</a></li>
                                                                <li><a class="date_select" href="#">2</a></li>
                                                                <li><a class="date_select" href="#">3</a></li>
                                                                <li><a class="date_select" href="#">4</a></li>
                                                                <li><a class="date_select" href="#">5</a></li>
                                                                <li><a class="date_select" href="#">6</a></li>
                                                                <li><a class="date_select" href="#">7</a></li>
                                                                <li><a class="date_select" href="#">8</a></li>
                                                                <li><a class="date_select" href="#">9</a></li>
                                                                <li><a class="date_select" href="#">10</a></li>
                                                                <li><a class="date_select" href="#">11</a></li>
                                                                <li><a class="date_select" href="#">12</a></li>
                                                                <li><a class="date_select" href="#">13</a></li>
                                                                <li><a class="date_select" href="#">14</a></li>
                                                                <li><a class="date_select" href="#">15</a></li>
                                                                <li><a class="date_select" href="#">16</a></li>
                                                                <li><a class="date_select" href="#">17</a></li>
                                                                <li><a class="date_select" href="#">18</a></li>
                                                                <li><a class="date_select" href="#">19</a></li>
                                                                <li><a class="date_select" href="#">20</a></li>
                                                                <li><a class="date_select" href="#">21</a></li>
                                                                <li><a class="date_select" href="#">22</a></li>
                                                                <li><a class="date_select" href="#">23</a></li>
                                                                <li><a class="date_select" href="#">24</a></li>
                                                                <li><a class="date_select" href="#">25</a></li>
                                                                <li><a class="date_select" href="#">26</a></li>
                                                                <li><a class="date_select" href="#">27</a></li>
                                                                <li><a class="date_select" href="#">28</a></li>
                                                                <li><a class="date_select" href="#">29</a></li>
                                                                <li><a class="date_select" href="#">30</a></li>
                                                                <li><a class="date_select" href="#">31</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!--
            <div class="bg-white input-box-default" id="date_div">
                <span class="title-span">일시</span>
                <hr/>

                <span class="description-span">
                    나눔혜택을 제공할 수 있는 일시를 적어주세요.
                </span>

                <div class="wrapper-div">
                    <table style="width: 100%; margin: 5 0 0 0; padding: 0;">
                        <tr>
                            <td style="width: 45%;">
                                <div id="date_picker_start_drop_down" class="wrapper-dropdown" tabindex="1" >
                                    <span id="start_year_text">2016년</span>
                                    <span id="start_month_text">6월</span>
                                    <span id="start_date_text">15일</span>
                                    <ul class="dropdown" id="ul_date_picker_start">
                                        <li>
                                            <div class="due-date-start" style="width: 100%;">
                                                <table style="width: 100%; margin: 0; padding: 0; border: 0; border-spacing: 0;">
                                                    <tr>
                                                        <td class="due-date-style-td">
                                                            <select id="start_year_select" data-role="none" size="6" class="due-date-style-select">
                                                                <option value="2016" >2016</option>
                                                                <option value="2015" >2015</option>
                                                                <option value="2014" >2014</option>
                                                                <option value="2013" >2013</option>
                                                                <option value="2012" >2012</option>
                                                                <option value="2011" >2011</option>
                                                                <option value="2010" >2010</option>
                                                                <option value="2009" >2009</option>
                                                            </select>
                                                        </td>
                                                        <td class="due-date-style-td">
                                                            <select id="start_month_select" data-role="none" size="6" class="due-date-style-select">
                                                                <option value="1" >1</option>
                                                                <option value="2" >2</option>
                                                                <option value="3" >3</option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
                                                                <option value="6" >6</option>
                                                                <option value="7" >7</option>
                                                                <option value="8" >8</option>
                                                                <option value="9" >9</option>
                                                                <option value="10" >10</option>
                                                                <option value="11" >11</option>
                                                                <option value="12" >12</option>
                                                            </select>
                                                        </td>
                                                        <td class="due-date-style-td">
                                                            <select id="start_date_select" data-role="none" size="6" class="due-date-style-select">
                                                                <option value="1" >1</option>
                                                                <option value="2" >2</option>
                                                                <option value="3" >3</option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
                                                                <option value="6" >6</option>
                                                                <option value="7" >7</option>
                                                                <option value="8" >8</option>
                                                                <option value="9" >9</option>
                                                                <option value="10" >10</option>
                                                                <option value="11" >11</option>
                                                                <option value="12" >12</option>
                                                                <option value="13" >13</option>
                                                                <option value="14" >14</option>
                                                                <option value="15" >15</option>
                                                                <option value="16" >16</option>
                                                                <option value="17" >17</option>
                                                                <option value="18" >18</option>
                                                                <option value="19" >19</option>
                                                                <option value="20" >20</option>
                                                                <option value="21" >21</option>
                                                                <option value="22" >22</option>
                                                                <option value="23" >23</option>
                                                                <option value="24" >24</option>
                                                                <option value="25" >25</option>
                                                                <option value="26" >26</option>
                                                                <option value="27" >27</option>
                                                                <option value="28" >28</option>
                                                                <option value="29" >29</option>
                                                                <option value="30" >30</option>
                                                                <option value="31" >31</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                            <td style="width: 10%; text-align: center">
                                <span style="color: #f08b68; font-size: 20px">―</span>
                            </td>

                            <td style="width: 45%;">
                                <div id="date_picker_end_drop_down" class="wrapper-dropdown" tabindex="1" >
                                    <span id="end_year_text">2016년</span>
                                    <span id="end_month_text">6월</span>
                                    <span id="end_date_text">15일</span>
                                    <ul class="dropdown" id="ul_date_picker_end">
                                        <li>
                                            <div class="due-date-end" style="width: 100%;">
                                                <table style="width: 100%; margin: 0; padding: 0; border: 0; border-spacing: 0;">
                                                    <tr>
                                                        <td class="due-date-style-td">
                                                            <select id="end_year_select" data-role="none" size="6" class="due-date-style-select">
                                                                <option value="2016" >2016</option>
                                                                <option value="2015" >2015</option>
                                                                <option value="2014" >2014</option>
                                                                <option value="2013" >2013</option>
                                                                <option value="2012" >2012</option>
                                                                <option value="2011" >2011</option>
                                                                <option value="2010" >2010</option>
                                                                <option value="2009" >2009</option>
                                                            </select>
                                                        </td>
                                                        <td class="due-date-style-td">
                                                            <select id="end_month_select" data-role="none" size="6" class="due-date-style-select">
                                                                <option value="1" >1</option>
                                                                <option value="2" >2</option>
                                                                <option value="3" >3</option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
                                                                <option value="6" >6</option>
                                                                <option value="7" >7</option>
                                                                <option value="8" >8</option>
                                                                <option value="9" >9</option>
                                                                <option value="10" >10</option>
                                                                <option value="11" >11</option>
                                                                <option value="12" >12</option>
                                                            </select>
                                                        </td>
                                                        <td class="due-date-style-td">
                                                            <select id="end_date_select" data-role="none" size="6" class="due-date-style-select">
                                                                <option value="1" >1</option>
                                                                <option value="2" >2</option>
                                                                <option value="3" >3</option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
                                                                <option value="6" >6</option>
                                                                <option value="7" >7</option>
                                                                <option value="8" >8</option>
                                                                <option value="9" >9</option>
                                                                <option value="10" >10</option>
                                                                <option value="11" >11</option>
                                                                <option value="12" >12</option>
                                                                <option value="13" >13</option>
                                                                <option value="14" >14</option>
                                                                <option value="15" >15</option>
                                                                <option value="16" >16</option>
                                                                <option value="17" >17</option>
                                                                <option value="18" >18</option>
                                                                <option value="19" >19</option>
                                                                <option value="20" >20</option>
                                                                <option value="21" >21</option>
                                                                <option value="22" >22</option>
                                                                <option value="23" >23</option>
                                                                <option value="24" >24</option>
                                                                <option value="25" >25</option>
                                                                <option value="26" >26</option>
                                                                <option value="27" >27</option>
                                                                <option value="28" >28</option>
                                                                <option value="29" >29</option>
                                                                <option value="30" >30</option>
                                                                <option value="31" >31</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            -->

            <div class="bg-white input-box-default">
                <span class="title-span">위치</span>
                <hr/>
                <input id="textBoxAddress" type="text" placeholder="나눔자가 찾아갈 수 있는 공연 장소의 자세한 위치가 필요합니다." maxlength="200">
            </div>

            <div class="bg-white input-box-default">
                <span class="title-span">소속 단위</span>
                <hr/>
                <input id="textBoxProductInfo" type="text" placeholder="대표자 성함을 작성해주시기 바랍니다." maxlength="200">
            </div>

        </div>
    </div>


    <div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;">
        <div id="fixed-bottom-btn" style="width: 100%">
            <div>
                <span> 다음 </span>
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

</script>

<script type="text/javascript">

    function DropDownCat(el) {
        this.dd = el;
        this.initEvents();
    }

    DropDownCat.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
                changeHeightCategoryDiv();
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

    function DropDownDateStartPicker(el) {
        this.dd = el;
        this.initEvents();
    }

    DropDownDateStartPicker.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event){
                $(this).addClass('active');
                event.stopPropagation();
                changeHeightDueDateStartDiv();
            });
        }
    }

    function DropDownDateEndPicker(el) {
        this.dd = el;
        this.initEvents();
    }

    DropDownDateEndPicker.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event){
                $(this).addClass('active');
                event.stopPropagation();
                changeHeightDueDateEndDiv();
            });
        }
    }

    $(function() {
        var yearDropDown = new DropDownCat( $('#cat_first_drop_down') );
        var monthDropDown = new DropDownCat( $('#cat_second_drop_down') );
        var dayDropDown = new DropDownCat( $('#cat_third_drop_down') );
        var districtDropDown = new DropDownAddr( $('#district_drop_down') );
        var cityDropDown = new DropDownAddr( $('#city_drop_down') );

        var datePickerStartDropDown = new DropDownDateStartPicker( $('#date_picker_start_drop_down') );
        var datePickerEndDropDown = new DropDownDateEndPicker( $('#date_picker_end_drop_down') );

        // 화면 아무 곳이나 찍었을 때 active 삭제
        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown').removeClass('active');
            $('#transport_div').css('height', '88');
            $('#address_div').css('height', '88');
            $('#date_div').css('height', '106');
        });

    });

    var countTransDropDownOpened = 0; // 1 : open, 0 : closed
    var isDropDownOpenAddr = 0; // 1 : open, 0 : closed

    $('#cat_div #ul_cat_first li a').each( function(index) {
        $(this).click( function() {
            $('#cat_first_drop_down span').text($(this).text());
            //changeHeightTransportDiv();
        });
    });

    $('#cat_div #ul_cat_second li a').each( function(index) {
        $(this).click( function() {
            $('#cat_second_drop_down span').text($(this).text());
            //changeHeightTransportDiv();
        });
    });

    $('#cat_div #ul_cat_third li a').each( function(index) {
        $(this).click( function() {
            $('#cat_third_drop_down span').text($(this).text());
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

    function changeHeightCategoryDiv() {
        var numTransDropDownActive = $('#cat_div .active').length;

        if ($('#cat_div').css('height') == '88px') { // closed
            $('#cat_div').css('height', '250px');
        }
        else {
            if(numTransDropDownActive == 0)
                $('#cat_div').css('height', '88px');
        }
    }

    $("#textBoxBenefitContents").css("resize", "none");

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

    function changeHeightDueDateStartDiv() {
        var numDueStartDropDownActive = $('#date_picker_start_drop_down.active').length;
        if ($('#date_div').css('height') == '106px') { // closed
            $('#date_div').css('height', '220px');
        }
        else {
            if(numDueStartDropDownActive == 0)
                $('#date_div').css('height', '106px');
        }
    }

    function changeHeightDueDateEndDiv() {
        var numDueEndDropDownActive = $('#date_picker_end_drop_down.active').length;
        if ($('#date_div').css('height') == '106px') { // closed
            $('#date_div').css('height', '220px');
        }
        else {
            if(numDueEndDropDownActive == 0)
                $('#date_div').css('height', '106px');
        }
    }

    $("#start_year_select").change(function(){
        $("#start_year_text").text($(this).val() + "년");
    });

    $("#start_month_select").change(function(){
        $("#start_month_text").text($(this).val() + "월");
    });

    $("#start_date_select").change(function(){
        $("#start_date_text").text($(this).val() + "일");
    });

    $("#end_year_select").change(function(){
        $("#end_year_text").text($(this).val() + "년");
    });

    $("#end_month_select").change(function(){
        $("#end_month_text").text($(this).val() + "월");
    });

    $("#end_date_select").change(function(){
        $("#end_date_text").text($(this).val() + "일");
    });

    $("#mobile_select").selectmenu();

    $(".date_select").css("border", "0");
    $(".date_select").css("display", "inline-block");
    $(".date_select").css("padding", "0");
    $(".date_select").css("height", "auto");
    $(".date_select").css("padding", "3px");
    $(".date_select").css("font-size", "0.8em");
    //$(".end_date_select").removeClass('hover');

    function changeSeletedDate(wholeObj, selectedObj) {
        wholeObj.css("background", "white");
        wholeObj.css("color", "#f08b68");
        selectedObj.css("background", "grey");
        selectedObj.css("color", "white");
    }

    $('.end-year li a').each( function(index) {
        $(this).click( function() {
            //alert($(this).text());
            $("#end_year_text").text($(this).text() + "년");
            changeSeletedDate($('.end-year li a'),  $(this));
        });
    });

    $('.end-month li a').each( function(index) {
        $(this).click( function() {
            //alert($(this).text());
            $("#end_month_text").text($(this).text() + "월");
            changeSeletedDate($('.end-month li a'),  $(this));
        });
    });

    $('.end-date li a').each( function(index) {
        $(this).click( function() {
            //alert($(this).text());
            $("#end_date_text").text($(this).text() + "일");
            changeSeletedDate($('.end-date li a'),  $(this));
        });
    });

    $('.start-year li a').each( function(index) {
        $(this).click( function() {
            //alert($(this).text());
            $("#start_year_text").text($(this).text() + "년");
            changeSeletedDate($('.start-year li a'),  $(this));
        });
    });

    $('.start-month li a').each( function(index) {
        $(this).click( function() {
            //alert($(this).text());
            $("#start_month_text").text($(this).text() + "월");
            changeSeletedDate($('.start-month li a'),  $(this));
        });
    });

    $('.start-date li a').each( function(index) {
        $(this).click( function() {
            //alert($(this).text());
            $("#start_date_text").text($(this).text() + "일");
            changeSeletedDate($('.start-date li a'),  $(this));
        });
    });

</script>

<style>
    /* date picker */
    .due-date-start {
        border-top: 1px solid;
        border-left: 1px solid #f08b68;
        border-right: 1px solid #f08b68;
        border-bottom: 1px solid #f08b68;
    }

    .due-date-end {
        border-top: 1px solid;
        border-left: 1px solid #f08b68;
        border-right: 1px solid #f08b68;
        border-bottom: 1px solid #f08b68;
    }

    #ul_date_picker_start {
        overflow: hidden;
        height: 120px;
    }

    #ul_date_picker_end {
        overflow: hidden;
        height: 120px;
    }

    .due-date-style-td {
        width: 33.33%;
        height: 108px;
    }

    .due-date-style-select {
        width: 100%;
        border: none;
        outline: none;
        text-indent: 6px;
        padding: 0;
        margin: 0;
        color: #f08b68;
        background: white;
    }

    a.date_select:hover {
        color: red;
    }

</style>

</body>
</html>



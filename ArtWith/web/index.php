<?php require "./common/header.php"; ?>

<script type="text/javascript">
    $(function(){
        $("ul.sub").hide();
    });

    $(document).on('click','.cat-icon',function()	 {
        $("ul.sub").slideToggle("fast");
        if($('cat-icon').val() == 0) {
            $('cat-icon').css("background-image", "url(images/design/category_icon_on.png)")
            $('cat-icon').val(1);
        }
        else {
            $('cat-icon').css("background-image", "url(images/design/category_icon.png)")
            $('cat-icon').val(0);
            $("#cat-container").css("height", 35);
        }
    });

    $(document).on('click','#cat_first',function()	 {
        $("ul.sub").slideToggle("fast");
        changeBackgroundImageForCat($('.cat-icon'), $('.cat-icon').val());
    });
    $(document).on('click','#cat_second',function()	 {
        $("ul.sub").slideToggle("fast");
        changeBackgroundImageForCat($('.cat-icon'), $('.cat-icon').val());
    });
    $(document).on('click','#cat_third',function()	 {
        $("ul.sub").slideToggle("fast");
        changeBackgroundImageForCat($('.cat-icon'), $('.cat-icon').val());
    });


</script>

<script>
    $(document).ready(function() {
        //alert("document is ready");
        windowWidth = $(window).width();
        $(".bottom-tab-menu").css("width", windowWidth / 3);
        addAnchorTagForExample();

    });

    function removeAllProducts() {
        $( ".code-insert-position").empty();
    }

    function addSelectedProducts() {
        $.ajax({
            async:true,
            url: "img_list_selected.php",
            success:function(data){
                //alert("success");
                removeAllProducts();
                $(".code-insert-position").append(data);
                addAnchorTagForExample();
            }
        })
    }

    $('#product_example').click(function(){
        $.ajax({
            async:true,
            success:function(data){
                //alert("success");
                window.location='product_detail.php';
            }
        })
    })

    $(document).on('click', '#product_example', function() {
        $.ajax({
            async:true,
            success:function(data){
                //alert("success");
                window.location='product_detail.php';
            }
        })
    })

    function addAnchorTagForExample() {
        $(".product-img").each(function() {
            //alert($(this).attr("src"));
            if($(this).attr("src").trim() == "images/pages/first/product/img_hb11.png") {
                //alert($(this).parent().attr("id"));
                $(this).parent().attr("id", "product_example");
            }
        });
    }

    function changeCatContainerHeight() {
        var maxCount = 0;
        $(".sub").each(function() {
            var count = $(this).find('li').length;
            if(maxCount < count) maxCount = count;
        });
        //alert(maxCount * 35+ "  adf   " + (maxCount + 1) * 35);
        $("#cat-container").css("height", (maxCount + 1) * 35);
    }

    function changeBackgroundImageForCat(object, value) {
        if(value == 0) {
            object.css("background-image", "url(images/design/category_icon_on.png)")
            object.val(1);
        }
        else {
            object.css("background-image", "url(images/design/category_icon.png)")
            object.val(0);
            $("#cat-container").css("height", 35);
        }
    }

    $(document).on('click', '.cat-icon', function() {
        //alert($(this).val());
        var maxCount = 0;
        $(".sub").each(function() {
            var count = $(this).find('li').length;
            if(maxCount < count) maxCount = count;
        });
        //alert(maxCount * 35);
        $("#cat-container").css("height", (maxCount + 2) * 35);
        changeBackgroundImageForCat($(this), $(this).val());
    })

    $(document).on('click','#sharewith',function(){
        if($(this).val() == 0){
            $(this).attr('src','images/design/img_nnw_on.png');
            $(this).val(1);

            $("#wetalk").attr('src','images/design/img_talk_off.png');
            $("#wetalk").next().val(0);
            $("#myspace").attr('src','images/design/img_my_off.png');
            $("#myspace").val(0);
        }
    });

    $(document).on('click','#wetalk',function(){
        if($(this).val() == 0){
            $(this).attr('src','images/design/img_talk_on.png');
            $(this).val(1);

            $("#myspace").attr('src','images/design/img_my_off.png');
            $("#myspace").val(0);

            $("#sharewith").attr('src','images/design/img_nnw_off.png');
            $("#sharewith").val(0);
			
		$.ajax({
            async:true,
            success:function(data){
                //alert("success");
                window.location='wetalk_list.php';
            }
        })					
        }
    });


    $(document).on('click','#myspace',function(){
        if($(this).val() == 0){
            $(this).attr('src','images/design/img_my_on.png');
            $(this).val(1);

            $("#wetalk").attr('src','images/design/img_talk_off.png');
            $("#wetalk").val(0);

            $("#sharewith").attr('src','images/design/img_nnw_off.png');
            $("#sharewith").val(0);

        }

    });


    $(document).on('click', '#sub3', function() {
        $("#cat-container").css("height", 35);
        $(".cat-icon").val(0);
    })

    $(document).on('click', '.each-category', function() {
        var $this = $(this);
        var cat_text = $this.text();
        var li_index = $this.index();

        var $sibl = $this.parent().children();

        $sibl.not($this).css("background","#FFF");
        $this.children().not($this).css("color", "#A0A1A3");

        $this.css("background","#F36E4B");
        $this.children().css("color","#FFFFFF");
        $this.children().css("font-style","normal");

        $sibl.not($this).children().css("color", "#A0A1A3");


        //alert($this.children().css("text-weight", "bold"));
        //$this.css("id", "black");


        var id_for_showing_selected = $this.closest("ul").prev().attr("id"); // 선택된 내용 보여주는 a 태그 id
        //alert("1" + id_for_showing_selected);

        if(id_for_showing_selected.trim() == "cat_third") {
            setTextCategory(id_for_showing_selected, cat_text);

            $("ul.sub").slideUp("slow");

            if(cat_text.trim() == "여성한복")
                addSelectedProducts();
            else
                removeAllProducts();
            changeBackgroundImageForCat($('.cat-icon'), $('.cat-icon').val())
        }
        else {
            //alert("no cat_third");
            setTextCategory(id_for_showing_selected, cat_text);
            //$this.closest("ul").slideUp("fast");
            //alert("2" + $this.closest("ul").closest("li").next().children().next().attr("id"));
            var id_next_cat = $this.closest("ul").closest("li").next().children().next().attr("id");
            setNextCatList(id_for_showing_selected, li_index, id_next_cat);
        }

        changeCatContainerHeight();
    })


    function setTextCategory(id_for_showing_selected, text) {
        $("#" + id_for_showing_selected).text(text);
    }

    function initlist(){
        var list1 =	$("#sub1").children();
        var list2 = $("#sub2").children();


        if(list1.length > 5){
            for(var i = list1.length; i>4; i--)
                list1.eq(i).remove();
        }

        if(list2.length > 5){
            for(var i = list2.length; i>4; i--)
                list2.eq(i).remove();
        }

    }



    function setNextCatList(id_for_showing_selected, index, id_next_cat) {
        //alert("setNextCatList:" + id_for_showing_selected);
        initlist();
        if(id_for_showing_selected == "cat_first") {
            $("#cat_second").text("전체");
            $("#cat_third").text("전체");

            if(index == 0) { // 의상
                //alert("의상입니다");
                $("#" + id_next_cat).empty();
                $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">일반의상</a></li>');
                $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">전통의상</a></li>');
                $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">컨셉의상</a></li>');
                $("#" + id_next_cat).append('<li class="each-category"></li>');
                $("#" + id_next_cat).append('<li class="each-category"></li>');
                $("#sub3").empty();
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
            }
            else if(index == 1) { // 소풍
                //alert("소품입니다");
                $("#" + id_next_cat).empty();
                $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">가구</a></li>');
                $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">생활제품</a></li>');
                $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">옛날소품</a></li>');
                $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">컨셉물품</a></li>');
                $("#" + id_next_cat).append('<li class="each-category"></li>');
                $("#sub3").empty();
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
                $("#sub3").append('<li class="each-category"></li>');
            }
            else {
                //alert("해당 없음");
                //$("#" + id_next_cat).empty();
            }
        }
        else if(id_for_showing_selected == "cat_second") {
            //alert("cat_second->" + id_next_cat);

            $("#cat_third").text("전체");
            var cat_first_text = $("#cat_first").text().trim();
            var cat_second_text = $("#cat_second").text().trim();
            if(cat_first_text == "의상") {
                if(cat_second_text == "일반의상") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">상의</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">하의</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">영유아</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">잡화</a></li>');
                    $("#" + id_next_cat).append('<li></li>');
                }
                else if(cat_second_text == "전통의상") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category"><a href="#">여성한복</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category"><a href="#">남성한복</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category"><a href="#">전통잡화</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category"><a href="#">시대 의상</a></li>');
                    $("#" + id_next_cat).append('<li></li>');
                }
                else if(cat_second_text == "컨셉의상") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">종교인</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">전문직</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">스포츠</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">유니폼</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">계절의복</a></li>');
                }
            }
            else if(cat_first_text == "소품") {
                if(cat_second_text == "가구") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">장</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">의자/테이블</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">침대/쇼파</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category"></li>');
                    $("#" + id_next_cat).append('<li class="each-category"></li>');
                }
                else if(cat_second_text == "생활제품") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">주방용품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">욕실용품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">장식소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">가전제품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category"></li>');
                }
                else if(cat_second_text == "옛날소품") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">전통놀이</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">시대소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">고미술</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category"></li>');
                    $("#" + id_next_cat).append('<li class="each-category"></li>');
                }

                else if(cat_second_text == "컨셉물품") {
                    $("#" + id_next_cat).empty();
                    $("#" + id_next_cat).append('<li class="each-category" value="1"><a href="#">병원소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="2"><a href="#">학교/회사물품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="3"><a href="#">음악소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="4"><a href="#">과학소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="5"><a href="#">운동소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="6"><a href="#">미술소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="7"><a href="#">파티소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="8"><a href="#">게임소품</a></li>');
                    $("#" + id_next_cat).append('<li class="each-category" value="9"><a href="#">계절소품</a></li>');
                    $("#sub1").append('<li class="each-category"></li>');
                    $("#sub1").append('<li class="each-category"></li>');
                    $("#sub1").append('<li class="each-category"></li>');
                    $("#sub1").append('<li class="each-category"></li>');
                    $("#sub2").append('<li class="each-category"></li>');
                    $("#sub2").append('<li class="each-category"></li>');
                    $("#sub2").append('<li class="each-category"></li>');
                    $("#sub2").append('<li class="each-category"></li>');
                }

            }

        }

    }




</script>

<style>

    body {
        font-family: "Nanum Gothic", serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }

    #background {
        width:100%;
        height:300px;
        background:url(images/design/img_bar1.png);
    }

    @font-face {
        font-family:"Nanum Gothic";
        src: url('font/NanumGothic.eot');
        src: url('font/NanumGothic.eot?#iefix') format('embedded-opentype'),
        url('font/NanumGothic.woff') format('woff'),
        url('font/NanumGothic.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    #fixed-top-header {
        position: fixed;
        top: 0px;
        right: 0px;
        z-index: 1000;
    }

    .header {
        background-color: transparent;
        border: none;
        width: 100%;
        height: 166.5px;
        margin: 0;
        background-image:url("images/design/img_bar1.png");
        background-size: 100% 100%;
    }

    .center-logo-frame {
        height: 166.5px;      /* equals max image height */
        width: 100%;
        white-space: nowrap;
        text-align: center;
        position: absolute;
    }

    .center-wrapper-top {
        text-align: center;
        vertical-align: middle;
        position: fixed;
        right: 0px;
        left: 0px;
        top: 39px;
        z-index: 1500;
    }

    #logo{
        margin:auto;
        vertical-align: middle;
        height: 39px;
        width: 32.5px;
        display: block;
    }

    #cat-container {
        text-align: center;
        vertical-align: middle;
        position: fixed;
        right: 0px;
        left: 0px;
        top: 80px;
        z-index: 1500;
        height: 35px;
        border-radius: 5px;
        width:105%;
        margin: 10;
    }

    a {
        color: white;
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }

    .ui-page-theme-a a:visited,
    html .ui-bar-a a:visited,
    html .ui-body-a a:visited,
    html body .ui-group-theme-a a:visited {
        color: transparent; /*{a-link-visited}; */;
    }

    ul.menu li {
        font-family: "Nanum Gothic", serif;
        font-size: 11px;
        font-weight: normal;
        float:left;
        height: 35px;
        position: relative;
        list-style:none;
        display: block;
        text-align: left;
        line-height: 35px;
        text-indent: 10px;

    }

    ul.sub li.each-category a{
        color:#A0A1A3;
    }

    ul.menu li a{
        float: left;
        font-family: "Nanum Gothic", serif;
        font-weight: bold;
        padding: 0;
        width: 100%;
        height: 100%;
        list-style:none;
        text-decoration: none;
        white-space: normal;
        color: transparent;
    }

    ul.menu li a:hover{
        color:#A0A1A3
    }

    ul.menu li ul.sub {
        display: block;
    }

    ul.menu:after{
        height: 0;
        visibility: hidden;
        clear: both;
    }

    ul.menu li.each-category{
        z-index:999;
        padding:0px;
    }

    ul.sub {
        padding: 0;
        list-style-type: none;
    }

    ul.sub li {
        width: 100%;
        list-style-type: none;
        text-align: left;

        color:#A0A1A3;
        background:#FFF;
        border-left-width:1px;
        border-right-width:1px;
        border-right-style:solid;
        border-right-color:#F36E4B;
        border-left-color:#F36E4B;
        border-top-color:#A0A1A3;
        border-top-width:1px;
        border-bottom-color:#A0A1A3;
        border-bottom-width:1px;
        border-bottom-style:solid;
    }
    ul.sub li.each-category a.ui-link{
        color:#A0A1A3;
        z-index:2000;
    }

    .cat-list {
        width: 30%;
        background-color: #8F4C99;
    }

    .cat-icon {
        background-size: 37px 36.5px;
        width: 10%;
        background-position: 50% 50%;
        background-image: url("images/design/category_icon.png");
        background-repeat: no-repeat;
    }

    .menu {
        padding: 0;
        margin: 0;
        -webkit-margin-after: 0;
    }

    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .search-container {
        text-align: center;
        display: inline-block;
        position: fixed;
        right: 0px;
        left: 0px;
        top: 131px;
        z-index: 1400;
        height: 28px;
    }

    * html .search-container {
        height: 28px;
    }

    .row {
        margin: 0 auto;
        width: 100%;
    }

    .column {
        float: left;
    }

    *:focus {
        outline: none;
    }

    #search_text_box {
        min-height: 23px;
        height: 28px;
        background-color: #e6e6e6;
        outline: none;;
    }

    .search-text-box {
        height: 28px;
        border-radius: 5px;
        width: 86%;
        padding-left: 10px;
    }

    .search-icon-div {
        width: 14%;
        padding-right: 10px;
        padding-left: 2px;
    }

    .search-icon {
        background-size: 37px 27px;
        background-color: #8F4C99;
        height: 100%;
        border-radius: 5px;
        margin: 0 auto;
        line-height: 28px;
    }

    .ui-input-text, .ui-input-search {
        margin: 0;
        border-width: 0px;
        border-style: solid;
    }

    .text-search {
        color: transparent;
        font-weight: normal;
        text-size: 15px;
    }

    img.bottom-tab-menu {
        width: 120px;
        float: left;
        /* prob. you dont need this */
        padding: 0;
        margin: 0;
        border:0;
    }

    .product-frame {
        /*background-color: #f7f7f7;*/
        background-color: red;
        width: 100%;
        height: 102px;
    }

    .product-img {
        width: auto;
        height: 100%;
    }

    .blank-div-for-header {
        width: 100%;
        height: 166.5px;
    }

    .product-info-table {
        width: 100%;
        background-color: #f7f7f7;
        /*background-color: red;*/
        font-weight: bold;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 14px;
        color: #424a4a;
        border-spacing: 0;
    }

    .product-info-table-td-left {
        background-color: white;
        padding: 0;
    }


    .product-info-table-td-right {
        background-color: white;
        padding-left: 10px;
    }

    .td-hash-tag {
        vertical-align: top;
        height: 40%;
        padding-top: 5px;
    }

    .td-info {
        height: 20%;
    }

    .img-info-icon {
        width: 100%;
        height: auto;
    }

    .blank-div-for-product {
        height: 3px;
        background-color:  #f7f7f7;
        width: 100%;
    }

    .div-info-row {
        width: 20px;
        height: 100%;
        overflow: hidden;
        display: inline-block;
        vertical-align: middle;
    }

    .span-info-row {
        display: inline-block;
        font-size: 11px;
    }

    #fixed-button_btn {
        position: fixed;
        bottom: 60px;
        right: 20px;
        z-index: 3000;
    }

</style>

<title>Page ID 1</title>

</head>

<body>

<div class="bg-white" id="page">
    <div class="header" id="fixed-top-header">
        <div>
            <a href="#">
                <img style="float: right; margin-top: 12px; margin-right: 15px" width="20.5px" height="22px" alt="Header" src="images/design/img_set.png" />
            </a>
            <a href="#">
                <img style="float: right; margin-top: 12px; margin-right: 15px" width="20.5px" height="22px"  alt="Header" src="images/design/img_al.png" />
            </a>
        </div>

        <div class="center-wrapper-top">
            <a href="#">
                <img id="logo" src="images/design/img_logo.png">
            </a>
        </div>




        <div id="cat-container">
            <ul class="menu">
                <li id="test" class="cat-list">
                    <a href="#" id="cat_first">전체</a>
                    <ul class="sub" id="sub1">
                        <li class="each-category">
                            <a href="#">의상</a>
                        </li>
                        <li class="each-category">
                            <a href="#">소품</a>
                        </li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                    </ul>
                </li>

                <li id="test2" class="cat-list">
                    <a href="#" id="cat_second">전체</a>
                    <ul class="sub" id="sub2">
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                    </ul>
                </li>

                <li id="test3" class="cat-list">
                    <a href="#" id="cat_third">전체</a>
                    <ul class="sub" id="sub3">
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                        <li class="each-category"></li>
                    </ul>
                </li>

                <li class="cat-icon" value="0" style="float:fixed; z-index:2000; right:35px;">
                    <a href="#" id="test_icon">
                    </a>
                </li>
            </ul>
        </div>

        <div class="row search-container">
            <div class="column search-text-box">
                <form>
                    <input id="search_text_box" type="text" name="keyword">
                </form>
            </div>
            <div class="column search-icon-div">
                <div class="search-icon">
                    <span class="text-search">검색</span>
                </div>
            </div>
        </div>

    </div>

    <div class="blank-div-for-header"></div>

    <div class="code-insert-position">
        <?php require "img_list_all.php"; ?>
    </div>

    <div class="blank-div-for-product">
    </div>

    <a id="btn_share_benefit_info" href="#" >
        <img src="images/design/img_plus1.png" id="fixed-button_btn" style="height:56.5px; width:56.5px;"/>
    </a>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;">
        <div style="width: 100%">
            <div>
                <a href="#">
                    <img class="bottom-tab-menu" id="sharewith" value="0" src="images/design/img_nnw_on.png" style="underbutton" width="33%"/>
                </a>
                <a href="#">
                    <img class="bottom-tab-menu" id="wetalk" value="0" src="images/design/img_talk_off.png" style="underbutton"width="33%"/>
                </a>
                <a href="#">
                    <img class="bottom-tab-menu" id="myspace" value="0" src="images/design/img_my_off.png" style="underbutton"width="33%"/>
                </a>
            </div><!-- /footer -->
        </div>
    </div>

</div>

<?php require "./common/footer.php"; ?>

<script>

    $('#btn_share_benefit_info').click(function(){
        $.ajax({
            async:true,
            success:function(data){
                //alert("success");
                window.location='share_benefit_info.php';
            }
        })
    })

</script>

</body>

</html>



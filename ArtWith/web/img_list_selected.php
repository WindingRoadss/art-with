<?php

$prev_link = "images/design/";
$img_link[0] = "img_hb1.png";$img_due[0] = 20; $img_user[0] = "나눔나눔"; $img_rep[0] =22; $img_tag[0] =   "#새댁 #결혼식 #화사한" ;
$img_link[1] = "img_hb2.png"; $img_due[1] =14; $img_user[1] =  "갠소"; $img_rep[1] = 24; $img_tag[1] = "#깔끔한 #세련된";
$img_link[2] = "img_hb3.png";  $img_due[2] = 35; $img_user[2] = "방지턱"; $img_rep[2] = 1;$img_tag[2] = "#전통 #다양한" ;
$img_link[3] = "img_hb4.png"; $img_due[3] = 7; $img_user[3] = "광은이용"; $img_rep[3] = 10; $img_tag[3] = "#규수" ;
$img_link[4] = "img_hb5.png"; $img_due[4] =  10; $img_user[4] = "굿쯘임당"; $img_rep[4] = 6; $img_tag[4] = "#기생 #다채로운";
$img_link[5] = "img_hb6.png"; $img_due[5] =  21; $img_user[5] = "기부왕"; $img_rep[5] = 7; $img_tag[5] = "#황진이 #기생 #화려한";
$img_link[6] = "img_hb7.png"; $img_due[6] =  37; $img_user[6] = "브이"; $img_rep[6] = 51; $img_tag[6] = "#결혼식 #손녀 #화려한" ;
$img_link[7] = "img_hb8.png"; $img_due[7] =   2; $img_user[7] = "허그미"; $img_rep[7] = 21; $img_tag[7] = "#알록달록 #귀여운 #화려한 #다채로운 #깔끔한" ;
$img_link[8] = "img_hb9.png"; $img_due[8] =  15; $img_user[8] = "기부천사"; $img_rep[8] = 16; $img_tag[8] = "#왕비 #할머니 #예쁜";
$img_link[9] = "img_hb10.png";$img_due[9] =   11; $img_user[9] = "크러쉬굳"; $img_rep[9] = 2; $img_tag[9] = "#기생";
$img_link[10] = "img_hb11.png";$img_due[10] = 15; $img_user[10] = "참깨와친구"; $img_rep[10] = 41; $img_tag[10] = "#화려한 #궁중의상 #왕비 #깔끔한";
/*echo(" <ul style=\"list-style:none;  width:80%; \"> ");
for($count=0; $count<16; $count++){
    echo(" <div style=\"backgound:#FFF;\"> ");
    echo(" <li style=\"margin-bottom:10px;\"> ");
    echo("<table style=\"tab_text\"> ");
    echo("<tr>");
    echo("<td rowspan=\"4\"> <img src=\"images/pages/first/product/$img_link[$count]\" class=\"img\"  /></td>");
    echo("<td style=\"vertical-align:text-top\"><FONT size=\"4\">$img_tag[$count]</FONT></td>");
    echo("</tr><tr><td>");
    echo("<img src=\"images/design/img_day.png\" class=\"img_small\"/>D.day $img_due[$count]");
    echo("</td></tr><tr><td>");
    echo("<img src=\"images/design/img_id.png\" class=\"img_small\"/>$img_user[$count]");
    echo("</td></tr><tr><td>");
    echo("<img src=\"images/design/img_re.png\" class=\"img_small\"/>$img_rep[$count]");
    echo("</td></tr></table></li></div>");
}
echo("</ul>");*/

for($count=0; $count<11; $count++) {
    echo(" <div class=\"blank-div-for-product\"> ");
    echo(" </div> ");
    echo(" <div class=\"product-frame\"> ");
    echo(" <table class=\"product-info-table\"> ");
    echo(" <tr> ");
    echo(" <td rowspan=\"4\" class=\"product-info-table-td-left\" style=\"width: 30%;\"> ");
    echo(" <div style=\"height: 102px\"> ");
    echo(" <div style=\"width: 108px; height: 100%; overflow: hidden\"> ");
    echo(" <a href=\"#\"> ");
    echo(" <img class=\"product-img\" src=\"images/pages/first/product/$img_link[$count]\"> ");
    echo(" </a> ");
    echo(" </div> ");
    echo(" </div> ");
    echo(" </td> ");
    echo(" <td class=\"product-info-table-td-right td-hash-tag\" style=\"width: 70%; height: 40%;\"> ");
    echo(" $img_tag[$count] ");
    echo(" </td> ");
    echo(" </tr> ");
    echo(" <tr> ");
    echo(" <td class=\"product-info-table-td-right td-info\"> ");
    echo(" <div style=\"height: 100%;\"> ");
    echo(" <div class=\"div-info-row\"> ");
    echo(" <img src=\"images/design/img_day_white.png\" class=\"img-info-icon\"/> ");
    echo(" </div> ");
    echo(" <span class=\"span-info-row\">$img_due[$count]</span> ");
    echo(" </div> ");
    echo(" </td> ");
    echo(" </tr> ");
    echo(" <tr> ");
    echo(" <td class=\"product-info-table-td-right td-info\"> ");
    echo(" <div style=\"height: 100%\"> ");
    echo(" <div class=\"div-info-row\"> ");
    echo(" <img src=\"images/design/img_id.png\" class=\"img-info-icon\"/> ");
    echo(" </div> ");
    echo(" <span class=\"span-info-row\">$img_user[$count]</span> ");
    echo(" </div> ");
    echo(" </td> ");
    echo(" </tr> ");
    echo(" <tr> ");
    echo(" <td class=\"product-info-table-td-right td-info\"> ");
    echo(" <div style=\"height: 100%\"> ");
    echo(" <div class=\"div-info-row\"> ");
    echo(" <img src=\"images/design/img_re.png\" class=\"img-info-icon \"/> ");
    echo(" </div> ");
    echo(" <span class=\"span-info-row\">$img_rep[$count]</span> ");
    echo(" </div> ");
    echo(" </td> ");
    echo(" </tr> ");
    echo(" </table> ");
    echo(" </div> ");
}

?>
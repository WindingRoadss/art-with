<?php
 require "./common/header.php";
?>
<html>
    <head>
    <style>
	
	    .header {
            background-color: transparent;
            border: none;
            width: 100%;
            height: 166.5px;
            margin: 0;          
            background-size: 100% 100%;
        }
	
	    #fixed-top-header {
            
            top: 0px;
            right: 0px;            
			height:45px;
			background:#8F4C99;
        }
		
		#fixed-second-header{
			height:45px;
			width:100%;
		}

        .product-frame {
            /*background-color: #f7f7f7;*/

            width: 100%;
            height: 102px;
			padding-top:20px;	
			padding-bottom:20px;		
        }
		
        .product-frame-list {
			top:90px;
        }		

        .product-img {
            width: 100%;
            height: auto;
        }
		
		
        .product-img-cho {
            width: 100%;
            height: auto;
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
            padding-top: 20px;
			font-size:13px;
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
			text-align:right;
			color:#A0A1A3;
        }
		
		.span-user-row {
            display: inline-block;
            font-size: 11px;
			text-align:right;
			padding-right:10px;			
        }

        #fixed-button_btn {
            position: fixed;
            bottom: 60px;
            right: 20px;
            z-index: 3000;
        }
		
        .top-artwith-logo {
			width:30px;
			height:35px;
			vertical-align:middle;    
			text-align:center;   				
            position:absolute;
            right: 0px;
            left: 50%;
			top:0.8%;
            z-index: 1500;		                        
         
		 
        }	
		
        img.bottom-tab-menu {
            width: 120px;
            float: left;
            /* prob. you dont need this */
            padding: 0;
            margin: 0;
            border:0;
        }					

</style>
    
    <script>
	$(document).on('click','#fixed-second-header',function(){
		if($(this).val() == 0){
			$('.product-img-cho').attr('src','images/design/img_delete.png');
			$(this).children().children().attr('src','images/design/img_finish.png');
			$(this).children().children().val(1);			
			$(this).val(1);
		}
		else{
			$('.product-img-cho').attr('src','images/design/img_choice.png');			
			$(this).children().children().attr('src','images/design/img_del.png');	
			$(this).children().children().val(0);		
			$(this).val(0);			
		}
	});
	
	$(document).on('click','.product-img-cho',function(){
		
		if($('#fixed-second-header').children().children().val() == 1){
			var $table_div = 	$(this).parent().parent().parent().parent().parent().parent().parent().parent();
			var $table_list = $table_div.parent();
			
			var div_off = $table_div.offset();
			var cur_off;			
			var $next = $table_div;
			$table_div.remove();
			while($next != $table_list.last()){			
				cur_off = $next.offset();
				$next.offset(div_off.left, div_off.top);
				$next = $next.next();
			}
			
		}
	});

		$(document).on('click','#sharewith',function(){
			if($(this).val() == 0){
				$(this).attr('src','images/design/img_nnw_on.png');
				$(this).val(1);
				
				$("#wetalk").attr('src','images/design/img_talk_off.png');
				$("#wetalk").next().val(0);
				$("#myspace").attr('src','images/design/img_my_off.png');
				$("#myspace").val(0);	
				
		$.ajax({
            async:true,
            success:function(data){
                //alert("success");
                window.location='index.php';
            }
        })						
							
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
	
	</script>
    
    </head>
    <body>      
    
            <div class="header" id="fixed-top-header" >
            
    
                <div>           
                         <a href="#">
                            <img id="logo" class="top-artwith-logo" align="center" src="images/design/img_logo.png">
                        </a>
                       
                    <a href="#">
                        <img style="float: right; margin-top: 12px; margin-right: 15px" width="20.5px" height="22px" alt="Header" src="images/design/img_set.png" />
                    </a>
                    <a href="#">
                        <img style="float: right; margin-top: 12px; margin-right: 15px" width="20.5px" height="22px"  alt="Header" src="images/design/img_al.png" />
                    </a>
    
                </div>
            </div>
            <div class="header" id="fixed-second-header" style="background:#6A3772; ">
            
                 <a href="#">
                    <img style="float: right; margin-top: 2px; margin-right: 5px" width="40.5px" height="44px"  alt="Header" src="images/design/img_del.png" value="0" />
                </a>      
            </div>
    	
    
    	<div class="blank-div-for-product"></div> 
        <div class="product-frame-list" id="asdf">
                
            <div class="product-frame"> 
                <table class="product-info-table" width="100%"> 
                    <tr> 
                        <td rowspan="2" class="product-info-table-td-left" style="width: 20%;"> 
                            <div style="height: 102px"> 
                            <div style="width: 100px; height: 100%; overflow: hidden"> 
                            <a class="product-img-link" href="#"> 
                            <img class="product-img" src="images/design/img_pro.png "> 
                            </a> 
                            </div> 
                            </div> 
                        </td> 
                        
                        <td class="product-info-table-td-right td-hash-tag" style="width: 70%; height: 40%; ">  
                        [의상>전통의상>여성한복]
                        
                        <div style="height: 100%; padding-top:16px;"> 
                        <div class="div-info-row" > 
                        <img src="images/design/img_new.png" class="img-info-icon"/> 
                        </div> 
                        <span class="span-info-row">이거 필요한거 맞으세요?</span> 
                        </div> 
                        </td>    
                             
                        <td rowspan="2" style="width :10%; height: 100%;">
                            
                            
                            <div style="height: 102px"> 
                            <div style="width: 50px; height: 110%; overflow: hidden; vertical-align:middle;"> 
                            <br /><Br />
                            <a href="#">                     
                            <img class="product-img-cho" src="images/design/img_choice.png"/>
                            </a>                    
                        </td>        
                    </tr>                 
                    <tr>                                
                    </tr>                 
                    <tr> 
                        <td class="product-info-table-td-right td-info" align="center"> 
                        <div style="height: 100%"> 
                        <div class="span-user-row"> 
                        내가기부왕 
                        </div> 
                        
                        </div> 
                        </td> 
                        <td>
                        </td>
                        <td align="right">
                            </div> 
                            <span class="span-info-row" >오후 5:30</span> 
                            </div> 
                        </td>
                    </tr>                                   
                </table> 
            </div>    
            
            <div class="product-frame"> 
                <table class="product-info-table" width="100%"> 
                    <tr> 
                        <td rowspan="2" class="product-info-table-td-left" style="width: 20%;"> 
                            <div style="height: 102px"> 
                            <div style="width: 100px; height: 100%; overflow: hidden"> 
                            <a class="product-img-link" href="#"> 
                            <img class="product-img" src="images/design/img_pro.png "> 
                            </a> 
                            </div> 
                            </div> 
                        </td> 
                        
                        <td class="product-info-table-td-right td-hash-tag" style="width: 70%; height: 40%; ">  
                        [의상>전통의상>여성한복]
                        
                        <div style="height: 100%; padding-top:16px;"> 
                        <div class="div-info-row" > 
                        <img src="images/design/img_new.png" class="img-info-icon"/> 
                        </div> 
                        <span class="span-info-row">이거 필요한거 맞으세요?</span> 
                        </div> 
                        </td>    
                             
                        <td rowspan="2" style="width :10%; height: 100%;">
                            
                            
                            <div style="height: 102px"> 
                            <div style="width: 50px; height: 110%; overflow: hidden; vertical-align:middle;"> 
                            <br /><Br />
                            <a href="#">                     
                            <img class="product-img-cho" src="images/design/img_choice.png"/>
                            </a>                    
                        </td>        
                    </tr>                 
                    <tr>                                
                    </tr>                 
                    <tr> 
                        <td class="product-info-table-td-right td-info" align="center"> 
                        <div style="height: 100%"> 
                        <div class="span-user-row"> 
                        내가기부왕 
                        </div> 
                        
                        </div> 
                        </td> 
                        <td>
                        </td>
                        <td align="right">
                            </div> 
                            <span class="span-info-row" >오후 5:30</span> 
                            </div> 
                        </td>
                    </tr>                                   
                </table> 
            </div>    
            
            <div class="product-frame"> 
                <table class="product-info-table" width="100%"> 
                    <tr> 
                        <td rowspan="2" class="product-info-table-td-left" style="width: 20%;"> 
                            <div style="height: 102px"> 
                            <div style="width: 100px; height: 100%; overflow: hidden"> 
                            <a class="product-img-link" href="#"> 
                            <img class="product-img" src="images/design/img_pro.png "> 
                            </a> 
                            </div> 
                            </div> 
                        </td> 
                        
                        <td class="product-info-table-td-right td-hash-tag" style="width: 70%; height: 40%; ">  
                        [의상>전통의상>여성한복]
                        
                        <div style="height: 100%; padding-top:16px;"> 
                        <div class="div-info-row" > 
                        <img src="images/design/img_new.png" class="img-info-icon"/> 
                        </div> 
                        <span class="span-info-row">이거 필요한거 맞으세요?</span> 
                        </div> 
                        </td>    
                             
                        <td rowspan="2" style="width :10%; height: 100%;">
                            
                            
                            <div style="height: 102px"> 
                            <div style="width: 50px; height: 110%; overflow: hidden; vertical-align:middle;"> 
                            <br /><Br />
                            <a href="#">                     
                            <img class="product-img-cho" src="images/design/img_choice.png"/>
                            </a>                    
                        </td>        
                    </tr>                 
                    <tr>                                
                    </tr>                 
                    <tr> 
                        <td class="product-info-table-td-right td-info" align="center"> 
                        <div style="height: 100%"> 
                        <div class="span-user-row"> 
                        내가기부왕 
                        </div> 
                        
                        </div> 
                        </td> 
                        <td>
                        </td>
                        <td align="right">
                            </div> 
                            <span class="span-info-row" >오후 5:30</span> 
                            </div> 
                        </td>
                    </tr>                                   
                </table> 
            </div>    

            <div class="product-frame"> 
                <table class="product-info-table" width="100%"> 
                    <tr> 
                        <td rowspan="2" class="product-info-table-td-left" style="width: 20%;"> 
                            <div style="height: 102px"> 
                            <div style="width: 100px; height: 100%; overflow: hidden"> 
                            <a class="product-img-link" href="#"> 
                            <img class="product-img" src="images/design/img_pro.png "> 
                            </a> 
                            </div> 
                            </div> 
                        </td> 
                        
                        <td class="product-info-table-td-right td-hash-tag" style="width: 70%; height: 40%; ">  
                        [의상>전통의상>여성한복]
                        
                        <div style="height: 100%; padding-top:16px;"> 
                        <div class="div-info-row" > 
                        <img src="images/design/img_new.png" class="img-info-icon"/> 
                        </div> 
                        <span class="span-info-row">이거 필요한거 맞으세요?</span> 
                        </div> 
                        </td>    
                             
                        <td rowspan="2" style="width :10%; height: 100%;">
                            
                            
                            <div style="height: 102px"> 
                            <div style="width: 50px; height: 110%; overflow: hidden; vertical-align:middle;"> 
                            <br /><Br />
                            <a href="#">                     
                            <img class="product-img-cho" src="images/design/img_choice.png"/>
                            </a>                    
                        </td>        
                    </tr>                 
                    <tr>                                
                    </tr>                 
                    <tr> 
                        <td class="product-info-table-td-right td-info" align="center"> 
                        <div style="height: 100%"> 
                        <div class="span-user-row"> 
                        내가기부왕 
                        </div> 
                        
                        </div> 
                        </td> 
                        <td>
                        </td>
                        <td align="right">
                            </div> 
                            <span class="span-info-row" >오후 5:30</span> 
                            </div> 
                        </td>
                    </tr>                                   
                </table> 
            </div>                                        
            
            <div class="product-frame"> 
                <table class="product-info-table" width="100%"> 
                    <tr> 
                        <td rowspan="2" class="product-info-table-td-left" style="width: 20%;"> 
                            <div style="height: 102px"> 
                            <div style="width: 100px; height: 100%; overflow: hidden"> 
                            <a class="product-img-link" href="#"> 
                            <img class="product-img" src="images/design/img_pro.png "> 
                            </a> 
                            </div> 
                            </div> 
                        </td> 
                        
                        <td class="product-info-table-td-right td-hash-tag" style="width: 70%; height: 40%; ">  
                        [의상>전통의상>여성한복]
                        
                        <div style="height: 100%; padding-top:16px;"> 
                        <div class="div-info-row" > 
                        <img src="images/design/img_new.png" class="img-info-icon"/> 
                        </div> 
                        <span class="span-info-row">이거 필요한거 맞으세요?</span> 
                        </div> 
                        </td>    
                             
                        <td rowspan="2" style="width :10%; height: 100%;">
                            
                            
                            <div style="height: 102px"> 
                            <div style="width: 50px; height: 110%; overflow: hidden; vertical-align:middle;"> 
                            <br /><Br />
                            <a href="#">                     
                            <img class="product-img-cho" src="images/design/img_choice.png"/>
                            </a>                    
                        </td>        
                    </tr>                 
                    <tr>                                
                    </tr>                 
                    <tr> 
                        <td class="product-info-table-td-right td-info" align="center"> 
                        <div style="height: 100%"> 
                        <div class="span-user-row"> 
                        내가기부왕 
                        </div> 
                        
                        </div> 
                        </td> 
                        <td>
                        </td>
                        <td align="right">
                            </div> 
                            <span class="span-info-row" >오후 5:30</span> 
                            </div> 
                        </td>
                    </tr>                                   
                </table> 
            </div>    
            
            <div class="product-frame"> 
                <table class="product-info-table" width="100%"> 
                    <tr> 
                        <td rowspan="2" class="product-info-table-td-left" style="width: 20%;"> 
                            <div style="height: 102px"> 
                            <div style="width: 100px; height: 100%; overflow: hidden"> 
                            <a class="product-img-link" href="#"> 
                            <img class="product-img" src="images/design/img_pro.png "> 
                            </a> 
                            </div> 
                            </div> 
                        </td> 
                        
                        <td class="product-info-table-td-right td-hash-tag" style="width: 70%; height: 40%; ">  
                        [의상>전통의상>여성한복]
                        
                        <div style="height: 100%; padding-top:16px;"> 
                        <div class="div-info-row" > 
                        <img src="images/design/img_new.png" class="img-info-icon"/> 
                        </div> 
                        <span class="span-info-row">이거 필요한거 맞으세요?</span> 
                        </div> 
                        </td>    
                             
                        <td rowspan="2" style="width :10%; height: 100%;">
                            
                            
                            <div style="height: 102px"> 
                            <div style="width: 50px; height: 110%; overflow: hidden; vertical-align:middle;"> 
                            <br /><Br />
                            <a href="#">                     
                            <img class="product-img-cho" src="images/design/img_choice.png"/>
                            </a>                    
                        </td>        
                    </tr>                 
                    <tr>                                
                    </tr>                 
                    <tr> 
                        <td class="product-info-table-td-right td-info" align="center"> 
                        <div style="height: 100%"> 
                        <div class="span-user-row"> 
                        내가기부왕 
                        </div> 
                        
                        </div> 
                        </td> 
                        <td>
                        </td>
                        <td align="right">
                            </div> 
                            <span class="span-info-row" >오후 5:30</span> 
                            </div> 
                        </td>
                    </tr>                                   
                </table> 
            </div>                            
                                  
        </div>    	
       
         <div data-role="footer" data-position="fixed" data-tap-toggle="false" style="border: none;">
            <div style="width: 100%">
                <div>
                    <a href="#">
                        <img class="bottom-tab-menu" id="sharewith" value="0" src="images/design/img_nnw_off.png" style="underbutton" width="33%"/>
                    </a>
                    <a href="#">
                        <img class="bottom-tab-menu" id="wetalk" value="0" src="images/design/img_talk_on.png" style="underbutton"width="33%"/>
                    </a>
                    <a href="#">
                        <img class="bottom-tab-menu" id="myspace" value="0" src="images/design/img_my_off.png" style="underbutton"width="33%"/>
                    </a>
                </div><!-- /footer -->
            </div>
        </div>
        
         <?php require "./common/footer.php"; ?>
        
    </body>
</html>
   

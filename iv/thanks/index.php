
<?php
// ----------------------------конфигурация-------------------------- // 
 

$date=date("d.m.y"); // число.месяц.год 

$time=date("H:i"); // часы:минуты:секунды 

//---------------------------------------------------------------------- // 
 
 

// Принимаем данные с формы 




$name=$_GET['name'];  
$email=$_GET['email'];
$number=$_GET['phone'];
$city=$_GET['city']; 
$adress1=$_GET['adress1']; 
$building1=$_GET['building1']; 
$adress2=$_GET['adress2']; 
$quantity=$_GET['quantity']; 
$quantity=$_GET['quantity']; 
$aq=$_GET['affsub1'];
$aw=$_GET['affsub2'];
$ae=$_GET['affsub3'];
$ar=$_GET['affsub4'];
$at=$_GET['affsub5'];
$cid=$_GET['cid'];
$best=$_GET['best'];
if ($quantity=="1") {
	$totalprice=99;
}
if ($quantity=="2") {
	$totalprice=170;
}
if ($quantity=="3") {
	$totalprice=230;
}
if ($quantity=="4") {
	$totalprice=299;
}



 
 


?>


<form action="https://docs.google.com/forms/d/e/1FAIpQLSfXSKYvCsuc2rVuNzJ1Xn3KsBrRHlKJpoZGzhsVn9laA4GTlg/formResponse" method="POST">
	
<input type="hidden" name="entry.1307946472" value="<?php echo $name ?>">
<input type="hidden" name="entry.72719492" value="<?php echo $email ?>">
<input type="hidden" name="entry.1959919651" value="<?php echo $number ?>">
<input type="hidden" name="entry.622564011" value="<?php echo $city ?>">
 
<input type="hidden" name="entry.37884987" value="<?php echo $adress1 ?>">
<input type="hidden" name="entry.1641369949" value="<?php echo $building1 ?>">
<input type="hidden" name="entry.1446779896" value="<?php echo $adress2 ?>">
<input type="hidden" name="entry.122004145" value="<?php echo $quantity ?>">
<input type="hidden" name="entry.1265450274" value="<?php echo $totalprice ?>">

<input type="hidden" name="entry.1422881623"  value="<?php echo $aq ?>" >
<input type="hidden" name="entry.931156305"  value="<?php echo $aw ?>"  >
<input type="hidden" name="entry.1226215056"  value="<?php echo $ae ?>" >
<input type="hidden" name="entry.1597925326"  value="<?php echo $ar?>"  >
<input type="hidden" name="entry.1738020876"  value="<?php echo $at ?>"  >
<input type="hidden" name="entry.1947529201"  value="<?php echo $best ?>"  >
	
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	jQuery(document).ready(function($) {

    window.history.pushState(null, null, "https://mens-mane.com/thanks/");

a="<?php echo $name ?>";
if (a.length<1) { console.log("why you renew page?")} 
  else
    {good();}

function good(){

        urls="https://mazl.trackthis.pw/postback?cid=<?php echo $cid ?>";
         $.ajax({
        url:     urls,  
        type:     "GET",  
        dataType: "html",  
        data: $("form").serialize(),  
        success: function(response) {  
              console.log(response);
         //     window.location.href = "https://mens-mane.com/thanks/";

        },
        error: function(response) {  
       //     window.location.href = "https://mens-mane.com/thanks/";
        }
    });

		 $.ajax({
        url:     "https://docs.google.com/forms/d/e/1FAIpQLSfXSKYvCsuc2rVuNzJ1Xn3KsBrRHlKJpoZGzhsVn9laA4GTlg/formResponse",  
        type:     "GET",  
        dataType: "html",  
        data: $("form").serialize(),  
        success: function(response) {  
              console.log(response);
             // window.location.href = "https://mens-mane.com/thanks/";

        },
        error: function(response) {  
          //  window.location.href = "https://mens-mane.com/thanks/";
        }
    });

}


		//document.location.href="https://mens-mane.com/thanks/";
	});
</script>




<!DOCTYPE html>

<html> <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Order Successful</title>
   <link rel="stylesheet" href="./index_files/tilda-grid-3.0.min.css" type="text/css" media="all"><link rel="stylesheet" href="./index_files/tilda-blocks-2.12.css" type="text/css" media="all"><link rel="stylesheet" href="./index_files/tilda-animation-1.0.min.css" type="text/css" media="all"> 
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PSWCH8S');</script>
<!-- End Google Tag Manager -->

   <meta name="referrer" content="none">
 </head>
 

 <body class="t-body" style="margin: 0px" onunload="goBack()" onclick="goBack()">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSWCH8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 	<!--allrecords--><div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="358414" data-tilda-page-id="2062389" data-tilda-page-alias="ordersuccess" data-tilda-formskey="2aa017ad9507b0f02f9f750842adf1ad"><div id="rec40551987" class="r t-rec" style=" " data-animationappear="off" data-record-type="338"><!-- cover --><div class="t-cover" id="recorddiv40551987" bgimgfield="img" style="height:100vh; background-image:url(&#39;https://static.tildacdn.com/tild3761-3736-4366-b038-323863333938/-/resize/20x/noroot.jpg&#39;);"><div class="t-cover__carrier loaded" id="coverCarry40551987" data-content-cover-id="40551987" data-content-cover-bg="https://static.tildacdn.com/tild3761-3736-4366-b038-323863333938/noroot.jpg" data-content-cover-height="100vh" data-content-cover-parallax="" style="background-image: url(&quot;https://static.tildacdn.com/tild3761-3736-4366-b038-323863333938/noroot.jpg&quot;); height: 100vh; background-attachment: scroll;" src=""></div> <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.70));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.70));background-image: -o-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.70));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.70));background-image: linear-gradient(top, rgba(0,0,0,0.60), rgba(0,0,0,0.70));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#66000000&#39;, endColorstr=&#39;#4c000000&#39;);"></div> <div class="t338"><div class="t-container"> <div class="t-col t-col_8 t-prefix_2"><div class="t-cover__wrapper t-valign_middle" style="height:100vh; position: relative;z-index: 1;"> <div class="t338 t-align_center" style=""> <div data-hook-content="covercontent"> <div class="t339__wrapper"> <div class="t338__title t-title t-title_xxs" style="" field="title">Dear Customer, our couriers will contact you during next 24 hours to arrange delivery time!</div> <div class="t338__descr t-descr t-descr_xl" style="display: none" field="descr"><br> You can also visit our partner online store, use discount code <span style="color: rgb(223, 227, 15);">MENSMANE20 </span>and get 20% Instant discount for all products <br></div> <div class="t338__buttonwrapper"><a href="http://betterdeal.ae/collections/hot-selection" target="" class="t338__btn t-btn " style="color:#000000;background-color:#fff700;display: none;"><table style="width:100%; height:100%;"><tbody><tr><td>See products on sale</td></tr></tbody></table></a></div> </div> </div> </div> </div> </div> </div> </div> </div> </div></div><!--/allrecords--> 
<script>
function goBack() {
    window.history.go(-2);
}

//window.onbeforeunload = function (evt) {
window.pagehide = function (evt) {
	var message = "Document 'foo' is not saved. You will lost the changes if you leave the page.";
	if (typeof evt == "undefined") {
		goBack();
	}
	if (evt) {
		goBack();
	}
//	return message;
goBack();
}

</script>
 </body></html>
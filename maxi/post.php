
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
              window.location.href = "https://mens-mane.com/thanks/";

        },
        error: function(response) {  
            window.location.href = "https://mens-mane.com/thanks/";
        }
    });

		//document.location.href="https://mens-mane.com/thanks/";
	});
</script>


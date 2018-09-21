 <link rel="apple-touch-icon" href="favicon.png"/>
<link rel="icon" type="image/png" href="favicon.png" />
<?php

 ini_set( "display_errors", true );
$url=$_SERVER['REQUEST_URI'];

$resulturl=substr($url,1);
 
//echo $resulturl;

$Pages = array(
'index1.html' ,
'index2.php'
);

$MaxRandom = getrandmax();
$RandomValue = intval( rand( 0 , count( $Pages ) - 1 ) );
$pagevar=$Pages[ $RandomValue ];
//$realurl=$pagevar.$resulturl;
//echo $realurl;
//echo "sd";

//header( 'Location: '.$Pages[ $RandomValue ] );
//header( 'Location: '.$realurl );

include $pagevar;
?>

<script type="text/javascript">
	console.log("<?php echo $pagevar ?>")
</script>
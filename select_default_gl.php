<?php
/*
@在浏览器选择YOU2PHP缺省国家和地区
2018-7-28
*/
$gls=array(
"HK"=>"Hong Kong",
"TW"=>"Taiwan",
"JP"=>"Japan",
"KR"=>"South Korea",
"US"=>"United States",
"FR"=>"France",
"UK"=>"United Kingdom",
"DE"=>"Germany",
"IN"=>"India");
//可以增加更多的选项

$gl=(isset($_COOKIE['gl']) && $_COOKIE['gl'])?$_COOKIE['gl']:'HK';
if(!isset($gls[$gl])){$gl='HK';}

$select[]="<select id='select_gl'>";
foreach($gls as $k=>$v){
	$is_selected=($k==$gl)?' selected ':'';
	$select[]="  <option value =\"$k\"{$is_selected}>$v</option>";
}
$select[]="</select>";
echo join("\n",$select);
?>

<script>
$(document).ready(function() {
	$("#select_gl").change(function(){
		var gl=$(this).children('option:selected').val()
		document.cookie="gl="+gl;
		window.location.reload()
	})
})
</script>

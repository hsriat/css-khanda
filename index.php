<?php

require_once 'logger.php';

$bodyclass = array();

if (preg_match("/windows/i", $_SERVER['HTTP_USER_AGENT'])) {
	array_push($bodyclass, "win");
}
elseif (preg_match("/webkit/i", $_SERVER['HTTP_USER_AGENT'])) {
	array_push($bodyclass, "webkit"); #webkit only if not on windows
}
if (preg_match("/firefox/i", $_SERVER['HTTP_USER_AGENT'])) {
	array_push($bodyclass, "ff");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Khanda</title>
<link rel="stylesheet" type="text/css" href="khanda.css" />
<link rel="shortcut icon" type="image/png" href="favicon.png" />
<script type="text/javascript" src="script.js"></script>
<meta name="description" content="CSS Khanda does not contain any image file but is only composed of ASCII characters rendered with CSS." />
</head>
<body class="<?php echo implode("", $bodyclass); ?>">
<!--khanda starts-->
<div id="sword_back_left" class="graphic">&#176;</div>
<div id="sword_back_right" class="graphic">&#176;</div>
<div id="sword_middle_left" class="eraser">
	<div id="sml_1">&#176;</div>
	<div id="sml_2">&#176;</div>
	<div id="sml_3">&#176;</div>
	<div id="sml_4">&#176;</div>
	<div id="sml_5">&#176;</div>
</div>
<div id="sword_middle_right" class="eraser">
	<div id="smr_1">&#176;</div>
	<div id="smr_2">&#176;</div>
	<div id="smr_3">&#176;</div>
	<div id="smr_4">&#176;</div>
	<div id="smr_5">&#176;</div>
</div>
<div id="chakker_outer" class="graphic">&#176;</div>
<div id="chakker_inner" class="eraser">&#176;</div>
<div id="chakker_centre" class="eraser">&#149;</div>
<div id="khanda_left" class="graphic">O</div>
<div id="khanda_right" class="graphic">O</div>
<div id="khanda_left_top" class="eraser">&gt;</div>
<div id="khanda_right_top" class="eraser">&lt;</div>
<div id="khanda_left_top1" class="eraser">&gt;</div>
<div id="khanda_right_top1" class="eraser">&lt;</div>
<div id="khanda_left_bottom" class="eraser">&gt;</div>
<div id="khanda_right_bottom" class="eraser">&lt;</div>
<div id="sword_base_left" class="graphic">\</div>
<div id="sword_base_right" class="graphic">/</div>
<div id="sword_outer_left" class="eraser">
	<div id="sol_0">\</div>
	<div id="sol_1">\</div>
</div>
<div id="sword_outer_right" class="eraser">
	<div id="sor_0">/</div>
	<div id="sor_1">/</div>
</div>
<div id="sword_curve_left" class="eraser">&#149;</div>
<div id="sword_curve_right" class="eraser">&#149;</div>
<div id="bottom_back" class="eraser">&#149;</div>
<div id="sword_left_handle" class="graphic">&gt;</div>
<div id="sword_right_handle" class="graphic">&lt;</div>
<div id="sword_left_handle1" class="eraser">
	<div id="slh1_0">&gt;</div>
	<div id="slh1_1">&gt;</div>
	<div id="slh1_2">&gt;</div>
</div>
<div id="sword_right_handle1" class="eraser">
	<div id="srh1_0">&lt;</div>
	<div id="srh1_1">&lt;</div>
	<div id="srh1_2">&lt;</div>
</div>
<div id="handle_left_end" class="graphic">&#149;</div>
<div id="handle_right_end" class="graphic">&#149;</div>
<div id="khanda_handle" class="graphic">|</div>
<div id="khanda_handle_bottom" class="graphic">&#149;</div>
<div id="eraser_top" class="eraser"></div>
<div id="eraser_bottom" class="eraser"></div>
<!--khanda ends-->
<div id="wgkk">ਵਾਹਿਗੁਰੂ ਜੀ ਕਾ ਖਾਲਸਾ ਵਾਹਿਗੁਰੂ ਜੀ ਕੀ ਫਤਿਹ</div>
<div id="copyright"><b>Khanda <i>with CSS</i></b><br />&copy;
<?php echo date("Y"); ?>&nbsp;www.khanda.co.in<div id="info">This
khanda does not contain any image file, and is only composed of
characters rendered with the help of CSS.</div></div>
<div id="view_animated">View Animated</div>
<div id="contact_button">Contact</div>
<div id="preview"><img src="preview.png" alt="" title="" /></div>
</body>
</html>
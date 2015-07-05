<?php
function html_head($isRootDir = false)
{
    $prefixDir = $isRootDir ? '' : '../';
    echo trim('
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select lang</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="'. $prefixDir .'css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link href="'. $prefixDir .'css/style.css" rel="stylesheet" type="text/css" />
<link href="'. $prefixDir .'css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
<script src="'. $prefixDir .'js/jquery.min.js" type="text/javascript"></script>
<script src="'. $prefixDir .'js/jquery.nivo.slider.js" type="text/javascript"></script>
</head>');
}
function html_lang_block($isRootDir = false)
{
    $prefixDir = $isRootDir ? '' : '../';
    echo trim('
<div class="left">
    <ul class="top-nav lang-links">
        <li><a href="ru/index.php"><img width="24" height="23" alt="" src="'. $prefixDir .'/images/flag_ru.gif">Русская версия</a></li>
        <li><a href="en/index.php"><img width="24" height="23" alt="" src="'. $prefixDir .'/images/flag_gb.gif">English<br>version</a></li>
    </ul>
</div>
    ');
}


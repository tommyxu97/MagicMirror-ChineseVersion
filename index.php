<html>
<script>
/*function turn(){
window.location.href='./Pic/index.html';
}*/
</script>
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
	<div class="top right"><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
	<div class="center-ver center-hor"><!-- <div class="dishwasher light">Vaatwasser is klaar!</div> --></div>
	<div class="lower-third center-hor"><div class="compliment light"></div></div>
	<div class="bottomer center-hor"><div class="news medium"></div></div>
	<div class="bottom center-hor"><div class="medium">
		<?php
		/**
		 * Created by PhpStorm.
		 * User: xuhaotian
		 * Date: 2017/3/9
		 * Time: 下午8:24
		 */
		$kebiao1 = array("3-5 高级宏观经济学 4-202","6-8 中级计量经济学 4-203","哈哈哈没课！");
		$kebiao2 = array("3-5 随机过程 4-202","6-8 数理统计 4-201","11-13 计量经济学实验 经管院实验中心");
		$kebiao3 = array("3-5 市场均衡理论 4-202","6-8 数据统计方法 4-202","11-13 C++程序设计 5-504");
		$kebiao4 = array("哈哈哈没课！","6-7 羽毛球（高级） 风雨操场","哈哈哈没课！");
		$kebiao5 = array("1-2 大学英语5 5-107,3-5 动态优化 4-202","6-8 投资学 4-203","哈哈哈没课！");
		$kebiao6 = array("1-4 量子信息与量子计算基础 老外楼105","6-7 大学语文 5-103","晚上放假了～");
		$kebiao0 = array("哈哈哈没课！","哈哈哈没课！","哈哈哈没课！");

		date_default_timezone_set('Asia/Shanghai');
		$week = date("w");
		function t(){
			$h = date('H', $_SERVER['REQUEST_TIME']);
			//$m = date('i', $_SERVER['REQUEST_TIME']);
			return $h;
		}
		$h = t();

		if($h < 12 & $h >0)
			$i = 0;
		if($h > 12 & $h <17)
			$i = 1;
		else
			$i = 2;
		
		echo'</br>';
		echo '接下来的课是：';
		if($week == 1)
			echo $kebiao1[$i];
		if($week == 2)
			echo $kebiao2[$i];
		if($week == 3)
			echo $kebiao3[$i];
		if($week == 4)
			echo $kebiao4[$i];
		if($week == 5)
			echo $kebiao5[$i];
		if($week == 6)
			echo $kebiao6[$i];
		if($week == 0)
			echo $kebiao0[$i];

		?>
	</div></div>
	<iframe src="./baidu_weather_widget-gh-pages/index.html" style="width:280px;height:600px;position:absolute;top:10px;left:470px;" frameborder="no" boder="0" scrolling="no" allowtransparency="yes"></iframe>
	</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<script src="js/version/version.js"></script>
<script src="js/calendar/calendar.js"></script>
<script src="js/compliments/compliments.js"></script>
<script src="js/weather/weather.js"></script>
<script src="js/time/time.js"></script>
<script src="js/news/news.js"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->
</body>
</html>

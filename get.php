<?php 

		
	$Mid = $_GET['Mid'];
	if(!is_numeric($Mid)){
		echo 0;
	}else{

		// $url = 'http://www.app-echo.com/api/sound/info?id='.$Mid;
		// echo file_get_contents($url);

		$ch = curl_init();


			curl_setopt ($ch, CURLOPT_URL, 'http://www.app-echo.com/api/sound/info?id='.$Mid);

			//加上这个表示执行curl_exec是把输出做为返回值,不会输出到浏览器
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			$out_put=curl_exec ($ch);
			curl_close($ch);
			echo $out_put; 
	}
?>







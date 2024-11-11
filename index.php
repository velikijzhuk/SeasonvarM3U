<?php
$player_url = 'http://seasonvar.ru/player.php';
$garbage_str = "ololo";
$garbage_str_angry = "grid";
$garbage = '//'.base64_encode($garbage_str);
$garbage_2 = '#2';
$garbage_angry = '//'.base64_encode($garbage_str_angry);
$home = "https://domain.example.com";

if ($_SERVER['REQUEST_METHOD'] != 'POST' ) {
echo <<<HTML
                <head>
                        <meta charset = "utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Seasonvar.ru --> M3U</title>
                        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
                        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin = "anonymous"></script>
                        <script src = "https://kit.fontawesome.com/bcdf9c2287.js" crossorigin = "anonymous"></script>
                        <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate" />
                        <meta http-equiv = "Pragma" content = "no-cache" />
                        <meta http-equiv = "Expires" content = "0" />
			<link rel="manifest" href="manifest.json">
			<meta name="mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="application-name" content="Seasonvar">
			<meta name="apple-mobile-web-app-title" content="Seasonvar">
			<meta name="theme-color" content="#FF7900">
			<meta name="msapplication-navbutton-color" content="#FF7900">
			<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
			<meta name="msapplication-starturl" content="/">



<link rel="apple-touch-startup-image" media="screen and (device-width: 440px) and (device-height: 956px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_16_Pro_Max_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 402px) and (device-height: 874px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_16_Pro_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 430px) and (device-height: 932px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_16_Plus__iPhone_15_Pro_Max__iPhone_15_Plus__iPhone_14_Pro_Max_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 393px) and (device-height: 852px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_16__iPhone_15_Pro__iPhone_15__iPhone_14_Pro_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_14_Plus__iPhone_13_Pro_Max__iPhone_12_Pro_Max_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_14__iPhone_13_Pro__iPhone_13__iPhone_12_Pro__iPhone_12_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_13_mini__iPhone_12_mini__iPhone_11_Pro__iPhone_XS__iPhone_X_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_11_Pro_Max__iPhone_XS_Max_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/iPhone_11__iPhone_XR_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="splash_screens/iPhone_8_Plus__iPhone_7_Plus__iPhone_6s_Plus__iPhone_6_Plus_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/iPhone_8__iPhone_7__iPhone_6s__iPhone_6__4.7__iPhone_SE_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/4__iPhone_SE__iPod_touch_5th_generation_and_later_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 1032px) and (device-height: 1376px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/13__iPad_Pro_M4_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/12.9__iPad_Pro_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 834px) and (device-height: 1210px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/11__iPad_Pro_M4_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/11__iPad_Pro__10.5__iPad_Pro_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 820px) and (device-height: 1180px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/10.9__iPad_Air_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/10.5__iPad_Air_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/10.2__iPad_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/9.7__iPad_Pro__7.9__iPad_mini__9.7__iPad_Air__9.7__iPad_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 744px) and (device-height: 1133px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/8.3__iPad_Mini_landscape.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 440px) and (device-height: 956px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_16_Pro_Max_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 402px) and (device-height: 874px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_16_Pro_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 430px) and (device-height: 932px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_16_Plus__iPhone_15_Pro_Max__iPhone_15_Plus__iPhone_14_Pro_Max_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 393px) and (device-height: 852px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_16__iPhone_15_Pro__iPhone_15__iPhone_14_Pro_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_14_Plus__iPhone_13_Pro_Max__iPhone_12_Pro_Max_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_14__iPhone_13_Pro__iPhone_13__iPhone_12_Pro__iPhone_12_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_13_mini__iPhone_12_mini__iPhone_11_Pro__iPhone_XS__iPhone_X_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_11_Pro_Max__iPhone_XS_Max_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/iPhone_11__iPhone_XR_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="splash_screens/iPhone_8_Plus__iPhone_7_Plus__iPhone_6s_Plus__iPhone_6_Plus_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/iPhone_8__iPhone_7__iPhone_6s__iPhone_6__4.7__iPhone_SE_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/4__iPhone_SE__iPod_touch_5th_generation_and_later_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 1032px) and (device-height: 1376px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/13__iPad_Pro_M4_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/12.9__iPad_Pro_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 834px) and (device-height: 1210px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/11__iPad_Pro_M4_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/11__iPad_Pro__10.5__iPad_Pro_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 820px) and (device-height: 1180px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/10.9__iPad_Air_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/10.5__iPad_Air_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/10.2__iPad_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/9.7__iPad_Pro__7.9__iPad_mini__9.7__iPad_Air__9.7__iPad_portrait.png">
<link rel="apple-touch-startup-image" media="screen and (device-width: 744px) and (device-height: 1133px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="splash_screens/8.3__iPad_Mini_portrait.png">


			<link rel="icon" sizes="512x512" href="cat512.png">
			<link rel="apple-touch-icon" sizes="512x512" href="cat512.png">
			<link rel="icon" sizes="256x256" href="cat256.png">
			<link rel="apple-touch-icon" sizes="256x256" href="cat256.png">
                </head>
HTML;
echo <<<MAIN
		<body class = "bg-light">
			<div class = container">
				<div class = "py-4 text-center">
				</div>
				<main>
					<div class = "row d-flex justify-content-center">
					<div class = "col-sm-8 col-md-8 col-xxl-8 order-sm-last">
						        <form method = "POST" class = "card p-2" action = "index.php">
								<span class = "text-success">Ссылка на страницу с сериалом/сезоном</span>
          							<div class = "input-group">
            								<input name = "serialPage" type = "text" class = "form-control" placeholder = "http://seasonvar.ru/serial-XXXXX-SOME-SERIAL-YY-season.html" required>
							        	<button name = "serialPageBtn" type = "submit" class = "btn btn-secondary"><i class="fa-solid fa-download"></i> Поехали</button>
          							</div>
        						</form>
                                                        <form method = "POST" class = "card p-2" action = "index.php">
                                                                <span class = "text-success">Поиск сериала</span>
                                                                <div class = "input-group">
                                                                        <input name = "searchString" type = "text" class = "form-control" placeholder = "Южный парк" required>
                                                                        <button name = "searchBtn" type = "submit" class = "btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i> Поиск</button>
                                                                </div>
                                                        </form>
					</div>
					</div>
				</main>
			</div>
MAIN;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['serialPage']) && isset($_POST['serialPageBtn'])) {
echo <<<HTML
                <head>
                        <meta charset = "utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Seasonvar.ru --> M3U</title>
                        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
                        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin = "anonymous"></script>
                        <script src = "https://kit.fontawesome.com/bcdf9c2287.js" crossorigin = "anonymous"></script>
                        <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate" />
                        <meta http-equiv = "Pragma" content = "no-cache" />
                        <meta http-equiv = "Expires" content = "0" />
                </head>
HTML;
$serialPage = $_POST['serialPage'];
		$page_content = file_get_contents($_POST['serialPage']);
		$reg_secureMark = '/\'secureMark\'\s?\:\s?\'(.[0-9a-z]+)\'/mix';
		$reg_idSerialSeason = '/<div\s*class\s?=\s?\"pgs-sinfo\"(\s+|\s?)data-id-season\s?=\s?\"([0-9]+)\"(\s+|\s?)data-id-serial\s?=\s?\"([0-9]+)\"\>/mix';
		$reg_translates = '/<script>\s?pl\[[0-9]+\]\s?=\s?\"(\/.+\/(trans.+)\/[0-9]+.+)\?/mix';
		preg_match_all($reg_secureMark, $page_content, $matches_secureMark, PREG_SET_ORDER, 0);
		preg_match_all($reg_idSerialSeason, $page_content, $matches_ids, PREG_SET_ORDER, 0);
		$ts = time();
		$postdata = http_build_query(
    			array(
        			'id' => $matches_ids[0][2],
        			'serial' => $matches_ids[0][4],
				'type' => 'html5',
				'secure' => $matches_secureMark[0][1],
				'time' => $ts
    			)
		);
		$opts = array('http' =>
    				array(
        				'method'  => 'POST',
        				'header'  => 'Content-Type: application/x-www-form-urlencoded',
        				'content' => $postdata
    					)
				);
		$sesonId = $matches_ids[0][2];

		$context  = stream_context_create($opts);

		$player2 = file_get_contents($player_url, false, $context);
                $test = file_get_contents("http://seasonvar.ru/playls2/".$matches_secureMark[0][1]."/trans/".$matches_ids[0][2]."/plist.txt?time=".$ts);
                if (strlen($test) < 5) {
                        $translates = array (
                                "Стандартный" => "/playlist/".$matches_secureMark[0][1]."/".$matches_ids[0][2]."/list.txt=?time=".$ts
                       );
                } else {
                preg_match_all($reg_translates, $player2, $matches_translates, PREG_SET_ORDER, 0);
        		$translates = array (
			        "Стандартный" =>  "/playls2/".$matches_secureMark[0][1]."/trans/".$matches_ids[0][2]."/plist.txt?time=".$ts
		        );
		        foreach ($matches_translates as $parsed_translate) {
			        $rg = str_replace('trans', '', urldecode($parsed_translate[2]));
			        $translates[$rg] = $parsed_translate[1];

        		};
        };

echo <<<HTML
                <head>
                        <meta charset = "utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Seasonvar.ru --> M3U</title>
                        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
                        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin = "anonymous"></script>
                        <script src = "https://kit.fontawesome.com/bcdf9c2287.js" crossorigin = "anonymous"></script>
                        <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate" />
                        <meta http-equiv = "Pragma" content = "no-cache" />
                        <meta http-equiv = "Expires" content = "0" />
                </head>
HTML;
echo <<<TRANS
	                <body class = "bg-light">
                        <div class = container">
                                <div class = "py-4 text-center">
                                </div>
                                <trans>
                                        <div class = "row d-flex justify-content-center">
                                        	<div class = "col-sm-8 col-md-8 col-xxl-8 order-sm-last">
							<form class = "card p-2" method = "POST" action = "index.php">
                                                                <span class = "text-success">Выберите перевод и формат:</span>
                                                                <div class = "input-group">
                                                                        <select class = "form-select" aria-label = "Перевод" name = "selectedTranslate">
TRANS;
									$i = 0;
                                                                        foreach ($translates as $key => $value) {
                                                                                if ($i = 0) {echo "<option selected value=\"".$value."\">".$key."</option>";}
                                                                                else {echo "<option value=\"".$value."\">".$key."</option>";}
										$i++;
                                                                        }


echo <<<TRANS
									</select>
									<select class = "form-select" aria-label = "Формат" name = "format_select">
										<option selected value = "1">Default</option>
                                                                                <option value = "2">*.M3U</option>
                                                                                <option value = "3">*.TXT</option>
                                                                                <option value = "4">VLC iOS</option>
                                                                                <option value = "5">DL</option>
									</select>
									<input type = "hidden" name = "seasonId" value = $sesonId>
                                                                        <button name = "transPageBtn" type = "submit" class = "btn btn-secondary"><i class="fa-solid fa-arrow-right"></i></button>
                                                                </div>
                                                        </form>
									<div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href = "$home" class="btn btn-success" type="button"><i class="fa-solid fa-house"></i> Домой</a>
                                                                        </div>
						</div>
					</div>
				</trans>
			</div>
TRANS;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['selectedTranslate']) && isset($_POST['transPageBtn']) && isset($_POST['seasonId']) && isset($_POST['format_select'])) {
        $needle = "/playlist/";
        $pos = strripos($_POST['selectedTranslate'], $needle);
        if ($pos === false) {
                $playlist = file_get_contents("http://seasonvar.ru".$_POST['selectedTranslate']);
        } else {
                $playlist = file_get_contents("http://angrycdn.net".$_POST['selectedTranslate']);
        };
	$oblojka = "http://cdn.bigsv.ru/oblojka/".$_POST['seasonId'].".jpg";
	$list_array = json_decode($playlist, true);
        if (array_key_exists('folder', $list_array[0])) {
                $list_array_f = array();
                foreach($list_array as $folder) {
                    $list_array_f = array_merge($list_array_f, $folder['folder']);
                };
         $list_array = array();
         $list_array = $list_array_f;
         unset($list_array_f); };
        $i = 0;
	$sid = $_POST['seasonId'];
if ($_POST['format_select'] == "1") {
echo <<<HTML
                <head>
                        <meta charset = "utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Seasonvar.ru --> M3U</title>
                        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
                        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin = "anonymous"></script>
                        <script src = "https://kit.fontawesome.com/bcdf9c2287.js" crossorigin = "anonymous"></script>
                        <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate" />
                        <meta http-equiv = "Pragma" content = "no-cache" />
                        <meta http-equiv = "Expires" content = "0" />
                </head>
HTML;
echo <<<JS
<script>
function stopOtherVideos() {
  var videos = document.getElementsByTagName("video");
  for (var i = 0; i < videos.length; i++) {
    if (videos[i] != event.target) {
      videos[i].pause();
    }
  }
}
</script>
JS;

echo '<center>';
	foreach ($list_array as $ep_array) {
		$title = $ep_array['title'];
		$title = str_replace("<br>", " ", $title);
		$file = $ep_array['file'];
		$file = substr_replace($file, "", 0, 2);
		$file = str_replace($garbage, "", $file);
                $file = str_replace($garbage_angry, "", $file);
		echo '<hr><video id="video'.(string)$i.'" width="426" height="240" poster = "'.$oblojka.'" controls onplay="stopOtherVideos()">';
		echo '<source src="'.base64_decode($file).'" type="video/mp4">';
		echo '</video><br><span class = "text-success">'.$title.'</span><br>';
		$i++;
	};
echo '</center>';
echo '<br>';
echo <<<WATCH

<div class = "py-4 text-center">
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<a href = "$home" class="btn btn-success" type="button"><i class="fa-solid fa-house"></i> Домой</a>
</div>
<div class = "py-4 text-center">
</div>
WATCH;
}
//m3u
if ($_POST['format_select'] == "2") {
	$m3u = "#EXTM3U".PHP_EOL;
	foreach ($list_array as $ep_array) {
        $title = $ep_array['title'];
        $title = str_replace("<br>", " ", $title);
        $file = $ep_array['file'];
        $file = substr_replace($file, "", 0, 2);
        $file = str_replace($garbage_angry, "", $file);
        $file = str_replace($garbage, "", $file);
		$m3u .= "#EXTINF:-1,".$title.PHP_EOL;
		$m3u .= "https:".base64_decode($file).PHP_EOL;
	};
	$m3u .= PHP_EOL;
	header('Content-Type: audio/x-mpegurl');
	header('Content-Disposition: attachment; filename='.$sid.'.m3u');
	echo $m3u;
}
//txt
if ($_POST['format_select'] == "3") {
        foreach ($list_array as $ep_array) {
        $file = $ep_array['file'];
        $file = substr_replace($file, "", 0, 2);
        $file = str_replace($garbage_angry, "", $file);
        $file = str_replace($garbage, "", $file);
                $txt .= "https:".base64_decode($file).PHP_EOL;
        };
        $txt .= PHP_EOL;
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename='.$sid.'.txt');
        echo $txt;
}
//DOWNLOAD WINDOWS
if ($_POST['format_select'] == "5") {
	$batch = "@echo off".PHP_EOL."COLOR 2E".PHP_EOL;
//	$batch .= "set ARCH = %PROCESSOR_ARCHITECTURE%".PHP_EOL;
//	$batch .= "set ARIA2 = \"".$home."/aria2/aria2c-%ARCH%.exe".PHP_EOL;
	$batch .= "setlocal enabledelayedexpansion".PHP_EOL;
	$batch .= "for %%I in (\"%~dp0.\") do set \"folder=%%~fI\"".PHP_EOL;
	$batch .= "mkdir %folder%\\".$sid.PHP_EOL;
	$batch .= "BITSADMIN /TRANSFER \"aria2c\" ".$home."/aria2/aria2c.exe %folder%\\".$sid."\aria2c.exe".PHP_EOL;
        $j = 0;
	foreach ($list_array as $ep_array) {
        $file = $ep_array['file'];
        $file = substr_replace($file, "", 0, 2);
        $file = str_replace($garbage_angry, "", $file);
        $file = str_replace($garbage, "", $file);
		if ($j = 0) {$batch .= "echo https:".base64_decode($file)." > %folder%\\".$sid."\urls.txt".PHP_EOL;}
		else {$batch .= "echo https:".base64_decode($file)." >> %folder%\\".$sid."\urls.txt".PHP_EOL;}
                $j++;
        };
        $batch .= "start /wait %folder%\\".$sid."\aria2c.exe --check-certificate=false --input-file=%folder%\\".$sid."\urls.txt --file-allocation=none --dir=%folder%\\".$sid.PHP_EOL;
	$batch .= "del /s /q %folder%\\".$sid."\aria2c.exe".PHP_EOL;
	$batch .= "del /s /q %folder%\\".$sid."\urls.txt".PHP_EOL;
	$batch .= "set \"batchFile=%~f0\"".PHP_EOL."timeout /t 2 >nul".PHP_EOL."del \"%batchFile%\"".PHP_EOL;
	$batch .= PHP_EOL;
        header('Content-Type: application/x-bat');
        header('Content-Disposition: attachment; filename='.$sid.'.bat');
        echo $batch;
}

//vlc_iOS
if ($_POST['format_select'] == "4") {
echo <<<HTML
                <head>
                        <meta charset = "utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Seasonvar.ru --> M3U</title>
                        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
                        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin = "anonymous"></script>
                        <script src = "https://kit.fontawesome.com/bcdf9c2287.js" crossorigin = "anonymous"></script>
                        <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate" />
                        <meta http-equiv = "Pragma" content = "no-cache" />
                        <meta http-equiv = "Expires" content = "0" />
                </head>
HTML;
echo <<<HTML
<div class = "py-4 text-center">
                                </div>
HTML;
        foreach ($list_array as $ep_array) {
        $title = $ep_array['title'];
        $title = str_replace("<br>", " ", $title);
        $file = $ep_array['file'];
        $file = substr_replace($file, "", 0, 2);
	echo "<center>";
        $file = str_replace($garbage_angry, "", $file);
        $file = str_replace($garbage, "", $file);
               echo "<a href=\"vlc-x-callback://x-callback-url/stream?url=https:".base64_decode($file)."\">".$title."</a><br>";
        };
echo <<< HOMEBTN
<div class = "py-4 text-center">
</div>
<div class="d-grid gap-2 col-3 mx-auto">
<a href = "$home" class="btn btn-success" type="button"><i class="fa-solid fa-house"></i> Домой</a>
</div>
<div class = "py-4 text-center">
</div>
HOMEBTN;
}
}


//SEARCH

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchBtn']) && isset($_POST['searchString'])) {
		$result = array();
		$search_str = $_POST['searchString'];
		$search_str = str_replace(" ", "+", $search_str);
		$reg_search_1 = '/(\/serial-.*\.html)\"\s?class\s?=\s?\"pst\"/mix';
		$reg_search_2 = '/\<h2\>\s+<a\s?href\s?=\s?\"(\/serial-.+\.html)\"\>(.*)\<\/a\>/ixm';
                $search_result_1 = file_get_contents("http://seasonvar.ru/search?q=".$search_str);
		preg_match_all($reg_search_1, $search_result_1, $matches1, PREG_SET_ORDER, 0);
		foreach ($matches1  as $sr_u1) {
			$search_result_2 = file_get_contents("http://seasonvar.ru".$sr_u1[1]);
			preg_match_all($reg_search_2, $search_result_2, $matches2, PREG_SET_ORDER, 0);
			foreach ($matches2 as $sr_u2) {
				$result[$sr_u2[2]] = $sr_u2[1];
			}
		}
echo <<<HTML
                <head>
                        <meta charset = "utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Seasonvar.ru --> M3U</title>
                        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
                        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin = "anonymous"></script>
                        <script src = "https://kit.fontawesome.com/bcdf9c2287.js" crossorigin = "anonymous"></script>
                        <meta http-equiv = "Cache-Control" content = "no-cache, no-store, must-revalidate" />
                        <meta http-equiv = "Pragma" content = "no-cache" />
                        <meta http-equiv = "Expires" content = "0" />
                </head>
HTML;
echo <<<SEARCHRES
                <body class = "bg-light">
                        <div class = container">
                                <div class = "py-4 text-center">
                                </div>
                                <search>
                                        <div class = "row d-flex justify-content-center">
                                        <div class = "col-xs-6 col-md-5 col-xxl-8 order-sm-last">
						<table class="table table-sm table-hover table-striped table-bordered">
  							<thead class="table-dark">
    								<tr>
      									<th scope="col">Название</th>
      									<th scope="col">Ссылка</th>
    								</tr>
							</thead>
							<tbody>

SEARCHRES;
				foreach ($result as $key => $value) {
					echo "<tr class = \"align-middle\">";
						$season_title = str_replace(">>>", "", $key);
					$cell = "<form method = \"POST\" class = \"card p-1 text-center\" action = \"index.php\"> <input name = \"serialPage\" type = \"hidden\" value = \"http://seasonvar.ru".$value."\"><button name = \"serialPageBtn\" type = \"submit\" class = \"btn btn-sm\"><i class=\"fa-solid fa-download\"></i> Поехали</button></form>";
					echo "<td>".$season_title."</td><td>".$cell."</td>";
				}
echo <<<SEARCHRES
							</tbody>
						</table>
                                        </div>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                <a href = "$home" class="btn btn-success" type="button"><i class="fa-solid fa-house"></i> Домой</a>
                                        </div>
                                        <div class = "py-4 text-center">
                                        </div>
                                </search>
                        </div>
SEARCHRES;

}

?>

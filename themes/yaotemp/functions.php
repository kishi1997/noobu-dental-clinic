<?php

//////////////////////////////////////////////////
//wp_footer　削除不可
//////////////////////////////////////////////////
function fit_footer() {
	echo'<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>'."\n";//削除不可
	echo'<script src="'.get_template_directory_uri().'/js/design.js"></script>'."\n";//削除不可
	echo'<script src="'.get_template_directory_uri().'/js/slick.min.js"></script>'."\n";//削除不可
}

add_action('wp_footer', 'fit_footer', '999');

//////////////////////////////////////////////////
//wp_head　削除不可
//////////////////////////////////////////////////
function fit_head() {
	//CSS
	echo '<link rel="stylesheet" href="'.get_stylesheet_uri().'">'."\n";//削除不可
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/yaotemp.css">'."\n";//削除不可
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/icon.css">'."\n";//削除不可
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/design.css">'."\n";//削除不可
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/slick.css">'."\n";//削除不可
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/slick-theme.css">'."\n";
	
	//GoogleFonts
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">'."\n";//削除不可
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'."\n";//削除不可
	echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Shippori+Mincho&display=swap&display=swap" rel="stylesheet">'."\n";
	//Favicon
	echo '<link rel="icon" href="'.get_template_directory_uri().'/favicon.ico">'."\n";//削除不可
	

	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'."\n";//削除不可
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//www.google.com">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//www.google-analytics.com">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//pagead2.googlesyndication.com">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//googleads.g.doubleclick.net">'."\n";//削除不可
	echo '<link rel="dns-prefetch" href="//www.gstatic.com">'."\n";//削除不可

	echo '<style type="text/css">';

	if(is_single()) {
		if(has_post_thumbnail()) {
			$thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'icatch' );
		}else{
			$thumbnail = get_template_directory_uri().'/img/img_no.gif';
		}
		echo '.singleTitle {background-image:url("'.$thumbnail.'");}'."\n";
	}

/*====================================記事内のスタイル設定ここから 削除不可====================================*/
	if (is_singular()) {
		// 見出し2のスタイル
		$colorA = '#f0b200';
		if (get_theme_mod('fit_hskin_h2ColorA') != '') {
			$colorA = esc_attr( get_theme_mod( 'fit_hskin_h2ColorA' ));
		}
		$colorB = '#191919';
		if (get_theme_mod('fit_hskin_h2ColorB') != '') {
			$colorB = esc_attr( get_theme_mod( 'fit_hskin_h2ColorB' ));
		}

		if (get_option('fit_hskin_h2Style') == 'value1' || get_option('fit_hskin_h2Style') == '') {echo '
		.content h2{color:'.$colorB.';}
		.content h2:first-letter{
			font-size:3.2rem;
			padding-bottom:5px;
			border-bottom:3px solid;
			color:'.$colorA.';
		}';
				}if (get_option('fit_hskin_h2Style') == 'value2') {echo '
		.content h2{
			padding: 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15) inset;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value3') {echo '
		.content h2{
			position: relative;
			padding:10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow:0 1px 3px rgba(0,0,0,0.25);
		}
		.content h2::before,
		.content h2::after{
			content: "";
			position: absolute;
			top: 100%;
			height: 0;
			width: 0;
			border: 5px solid transparent;
			border-top: 5px solid #1A3654;
		}
		.content h2::before{
			right: 0;
			border-left: 5px solid #1A3654;
		}
		.content h2::after{
			left: 0;
			border-right: 5px solid #1A3654;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value4') {echo '
		.content h2{
			position: relative;
			padding: 10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
		}
		.content h2::before,.content h2::after{
			content: "";
			position: absolute;
			top: -20px;
			left: 0;
			width: 100%;
			height: 0;
			border: solid 10px transparent;
		}
		.content h2::before{
			border-bottom-color:'.$colorA.';
		}
		.content h2::after{
			border-bottom-color: rgba(0,0,0,0.15);;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value5') {echo '
		.content h2{
			color:'.$colorB.';
			background: linear-gradient(transparent 60%, '.$colorA.' 60%);
		}';
				}if (get_option('fit_hskin_h2Style') == 'value6') {echo '
		.content h2{
			position: relative;
			padding:20px;
			color:'.$colorB.';
			background: '.$colorA.';
		}
		.content h2::after {
			position: absolute;
			content: "";
			top: 100%;
			left: 30px;
			border: 15px solid transparent;
			border-top: 15px solid '.$colorA.';
			width: 0;
			height: 0;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value7') {echo '
		.content h2{
			padding: 20px;
			color:#fff;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.75);
			background: linear-gradient('.$colorA.' 0%, '.$colorB.' 100%);
			border:1px solid '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h2Style') == 'value8') {echo '
		.content h2{
			position: relative;
			padding: 20px 20px 20px 38px;
			border: 1px solid #E5E5E5;
			color:'.$colorB.';
			border-top: 4px solid '.$colorA.';
			background: linear-gradient(#ffffff 0%, #EFEFEF 100%);
			box-shadow: 0 -1px 0 rgba(255, 255, 255, 1) inset;
		}
		.content h2::after{
			content: "";
			position: absolute;
			top: 50%;
			left: 10px;
			margin-top: -10px;
			width: 18px;
			height: 18px;
			border: 4px solid '.$colorA.';
			border-radius: 100%;
			box-sizing:border-box;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value9') {echo '
		.content h2{
			padding:20px;
			color:'.$colorB.';
			border: 1px solid #E5E5E5;
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h2Style') == 'value10') {echo '
		.content h2{
			padding: 10px 20px;
			color:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h2Style') == 'value11') {echo '
		.content h2{
			padding: 10px 20px;
			background:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h2Style') == 'value12') {echo '
		.content h2{
			padding-bottom: 10px;
			color:'.$colorB.';
			border-bottom: 3px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h2Style') == 'value13') {echo '
		.content h2{
			padding:10px 20px;
			color:'.$colorB.';
			border-left:8px solid '.$colorA.';
			border-bottom:1px solid #E5E5E5;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value14') {echo '
		.content h2{
			padding:20px;
			color:'.$colorB.';
			border:1px solid '.$colorA.';
			background: '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h2Style') == 'value15') {echo '
		.content h2{
			position: relative;
			padding: 20px;
			text-align:center;
			color:'.$colorB.';
			border-top: solid 1px '.$colorA.';
			border-bottom: solid 1px '.$colorA.';
		}
		.content h2::before,
		.content h2::after{
			content: "";
			position: absolute;
			top: -10px;
			width: 1px;
			height: calc(100% + 20px);
			background-color: '.$colorA.';
		}
		.content h2::before{
			left: 10px;
		}
		.content h2::after{
			right: 10px;
		}';
				}if (get_option('fit_hskin_h2Style') == 'value16') {echo '
		.content h2{
			position: relative;
			overflow: hidden;
			padding-bottom: 5px;
			color:'.$colorB.';
		}
		.content h2::before,
		.content h2::after{
			content: "";
			position: absolute;
			bottom: 0;
		}
		.content h2:before{
			border-bottom: 3px solid '.$colorA.';
			width: 100%;
		}
		.content h2:after{
			border-bottom: 3px solid #E5E5E5;
			width: 100%;
		}';
		}if (get_option('fit_hskin_h2Style') == 'value17' && get_option('fit_hskin_h2Css') != '') {
			echo get_option('fit_hskin_h2Css');
		}

		// 見出し3のスタイル
		$colorA = '#f0b200';
		if (get_theme_mod('fit_hskin_h3ColorA') != '') {
			$colorA = esc_attr( get_theme_mod( 'fit_hskin_h3ColorA' ));
		}
		$colorB = '#191919';
		if (get_theme_mod('fit_hskin_h3ColorB') != '') {
			$colorB = esc_attr( get_theme_mod( 'fit_hskin_h3ColorB' ));
		}
		if (get_option('fit_hskin_h3Style') == 'value1') {echo '
		.content h3{color:'.$colorB.';}
		.content h3:first-letter{
			font-size:2.8rem;
			padding-bottom:5px;
			border-bottom:3px solid;
			color:'.$colorA.';
		}';
				}if (get_option('fit_hskin_h3Style') == 'value2') {echo '
		.content h3{
			padding: 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15) inset;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value3') {echo '
		.content h3{
			position: relative;
			padding:10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow:0 1px 3px rgba(0,0,0,0.25);
		}
		.content h3::before,
		.content h3::after{
			content: "";
			position: absolute;
			top: 100%;
			height: 0;
			width: 0;
			border: 5px solid transparent;
			border-top: 5px solid #1A3654;
		}
		.content h3::before{
			right: 0;
			border-left: 5px solid #1A3654;
		}
		.content h3::after{
			left: 0;
			border-right: 5px solid #1A3654;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value4') {echo '
		.content h3{
			position: relative;
			padding: 10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
		}
		.content h3::before,.content h3::after{
			content: "";
			position: absolute;
			top: -20px;
			left: 0;
			width: 100%;
			height: 0;
			border: solid 10px transparent;
		}
		.content h3::before{
			border-bottom-color:'.$colorA.';
		}
		.content h3::after{
			border-bottom-color: rgba(0,0,0,0.15);;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value5') {echo '
		.content h3{
			color:'.$colorB.';
			background: linear-gradient(transparent 60%, '.$colorA.' 60%);
		}';
				}if (get_option('fit_hskin_h3Style') == 'value6') {echo '
		.content h3{
			position: relative;
			padding:20px;
			color:'.$colorB.';
			background: '.$colorA.';
		}
		.content h3::after {
			position: absolute;
			content: "";
			top: 100%;
			left: 30px;
			border: 15px solid transparent;
			border-top: 15px solid '.$colorA.';
			width: 0;
			height: 0;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value7') {echo '
		.content h3{
			padding: 20px;
			color:#fff;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.75);
			background: linear-gradient('.$colorA.' 0%, '.$colorB.' 100%);
			border:1px solid '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h3Style') == 'value8') {echo '
		.content h3{
			position: relative;
			padding: 20px 20px 20px 38px;
			border: 1px solid #E5E5E5;
			color:'.$colorB.';
			border-top: 4px solid '.$colorA.';
			background: linear-gradient(#ffffff 0%, #EFEFEF 100%);
			box-shadow: 0 -1px 0 rgba(255, 255, 255, 1) inset;
		}
		.content h3::after{
			content: "";
			position: absolute;
			top: 50%;
			left: 10px;
			margin-top: -10px;
			width: 18px;
			height: 18px;
			border: 4px solid '.$colorA.';
			border-radius: 100%;
			box-sizing:border-box;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value9' || get_option('fit_hskin_h3Style') == '') {echo '
		.content h3{
			padding:20px;
			color:'.$colorB.';
			border: 1px solid #E5E5E5;
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h3Style') == 'value10') {echo '
		.content h3{
			padding: 10px 20px;
			color:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h3Style') == 'value11') {echo '
		.content h3{
			padding: 10px 20px;
			background:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h3Style') == 'value12') {echo '
		.content h3{
			padding-bottom: 10px;
			color:'.$colorB.';
			border-bottom: 3px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h3Style') == 'value13') {echo '
		.content h3{
			padding:10px 20px;
			color:'.$colorB.';
			border-left:8px solid '.$colorA.';
			border-bottom:1px solid #E5E5E5;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value14') {echo '
		.content h3{
			padding:20px;
			color:'.$colorB.';
			border:1px solid '.$colorA.';
			background: '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h3Style') == 'value15') {echo '
		.content h3{
			position: relative;
			padding: 20px;
			text-align:center;
			color:'.$colorB.';
			border-top: solid 1px '.$colorA.';
			border-bottom: solid 1px '.$colorA.';
		}
		.content h3::before,
		.content h3::after{
			content: "";
			position: absolute;
			top: -10px;
			width: 1px;
			height: calc(100% + 20px);
			background-color: '.$colorA.';
		}
		.content h3::before{
			left: 10px;
		}
		.content h3::after{
			right: 10px;
		}';
				}if (get_option('fit_hskin_h3Style') == 'value16') {echo '
		.content h3{
			position: relative;
			overflow: hidden;
			padding-bottom: 5px;
			color:'.$colorB.';
		}
		.content h3::before,
		.content h3::after{
			content: "";
			position: absolute;
			bottom: 0;
		}
		.content h3:before{
			border-bottom: 3px solid '.$colorA.';
			width: 100%;
		}
		.content h3:after{
			border-bottom: 3px solid #E5E5E5;
			width: 100%;
		}';
		}if (get_option('fit_hskin_h3Style') == 'value17' && get_option('fit_hskin_h3Css') != '') {
			echo get_option('fit_hskin_h3Css');
		}

		// 見出し4のスタイル
		$colorA = '#f0b200';
		if (get_theme_mod('fit_hskin_h4ColorA') != '') {
			$colorA = esc_attr( get_theme_mod( 'fit_hskin_h4ColorA' ));
		}
		$colorB = '#191919';
		if (get_theme_mod('fit_hskin_h4ColorB') != '') {
			$colorB = esc_attr( get_theme_mod( 'fit_hskin_h4ColorB' ));
		}
		if (get_option('fit_hskin_h4Style') == 'value1') {echo '
		.content h4{color:'.$colorB.';}
		.content h4:first-letter{
			font-size:2.4rem;
			padding-bottom:5px;
			border-bottom:3px solid;
			color:'.$colorA.';
		}';
				}if (get_option('fit_hskin_h4Style') == 'value2') {echo '
		.content h4{
			padding: 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15) inset;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value3') {echo '
		.content h4{
			position: relative;
			padding:10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow:0 1px 3px rgba(0,0,0,0.25);
		}
		.content h4::before,
		.content h4::after{
			content: "";
			position: absolute;
			top: 100%;
			height: 0;
			width: 0;
			border: 5px solid transparent;
			border-top: 5px solid #1A3654;
		}
		.content h4::before{
			right: 0;
			border-left: 5px solid #1A3654;
		}
		.content h4::after{
			left: 0;
			border-right: 5px solid #1A3654;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value4') {echo '
		.content h4{
			position: relative;
			padding: 10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
		}
		.content h4::before,.content h4::after{
			content: "";
			position: absolute;
			top: -20px;
			left: 0;
			width: 100%;
			height: 0;
			border: solid 10px transparent;
		}
		.content h4::before{
			border-bottom-color:'.$colorA.';
		}
		.content h4::after{
			border-bottom-color: rgba(0,0,0,0.15);;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value5') {echo '
		.content h4{
			color:'.$colorB.';
			background: linear-gradient(transparent 60%, '.$colorA.' 60%);
		}';
				}if (get_option('fit_hskin_h4Style') == 'value6') {echo '
		.content h4{
			position: relative;
			padding:20px;
			color:'.$colorB.';
			background: '.$colorA.';
		}
		.content h4::after {
			position: absolute;
			content: "";
			top: 100%;
			left: 30px;
			border: 15px solid transparent;
			border-top: 15px solid '.$colorA.';
			width: 0;
			height: 0;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value7') {echo '
		.content h4{
			padding: 20px;
			color:#fff;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.75);
			background: linear-gradient('.$colorA.' 0%, '.$colorB.' 100%);
			border:1px solid '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h4Style') == 'value8') {echo '
		.content h4{
			position: relative;
			padding: 20px 20px 20px 38px;
			border: 1px solid #E5E5E5;
			color:'.$colorB.';
			border-top: 4px solid '.$colorA.';
			background: linear-gradient(#ffffff 0%, #EFEFEF 100%);
			box-shadow: 0 -1px 0 rgba(255, 255, 255, 1) inset;
		}
		.content h4::after{
			content: "";
			position: absolute;
			top: 50%;
			left: 10px;
			margin-top: -10px;
			width: 18px;
			height: 18px;
			border: 4px solid '.$colorA.';
			border-radius: 100%;
			box-sizing:border-box;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value9') {echo '
		.content h4{
			padding:20px;
			color:'.$colorB.';
			border: 1px solid #E5E5E5;
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h4Style') == 'value10') {echo '
		.content h4{
			padding: 10px 20px;
			color:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h4Style') == 'value11') {echo '
		.content h4{
			padding: 10px 20px;
			background:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h4Style') == 'value12') {echo '
		.content h4{
			padding-bottom: 10px;
			color:'.$colorB.';
			border-bottom: 3px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h4Style') == 'value13') {echo '
		.content h4{
			padding:10px 20px;
			color:'.$colorB.';
			border-left:8px solid '.$colorA.';
			border-bottom:1px solid #E5E5E5;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value14') {echo '
		.content h4{
			padding:20px;
			color:'.$colorB.';
			border:1px solid '.$colorA.';
			background: '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h4Style') == 'value15') {echo '
		.content h4{
			position: relative;
			padding: 20px;
			text-align:center;
			color:'.$colorB.';
			border-top: solid 1px '.$colorA.';
			border-bottom: solid 1px '.$colorA.';
		}
		.content h4::before,
		.content h4::after{
			content: "";
			position: absolute;
			top: -10px;
			width: 1px;
			height: calc(100% + 20px);
			background-color: '.$colorA.';
		}
		.content h4::before{
			left: 10px;
		}
		.content h4::after{
			right: 10px;
		}';
				}if (get_option('fit_hskin_h4Style') == 'value16') {echo '
		.content h4{
			position: relative;
			overflow: hidden;
			padding-bottom: 5px;
			color:'.$colorB.';
		}
		.content h4::before,
		.content h4::after{
			content: "";
			position: absolute;
			bottom: 0;
		}
		.content h4:before{
			border-bottom: 3px solid '.$colorA.';
			width: 100%;
		}
		.content h4:after{
			border-bottom: 3px solid #E5E5E5;
			width: 100%;
		}';
		}if (get_option('fit_hskin_h4Style') == 'value17' && get_option('fit_hskin_h4Css') != '') {
			echo get_option('fit_hskin_h4Css');
		}

		// 見出し5のスタイル
		$colorA = '#f0b200';
		if (get_theme_mod('fit_hskin_h5ColorA') != '') {
			$colorA = esc_attr( get_theme_mod( 'fit_hskin_h5ColorA' ));
		}
		$colorB = '#191919';
		if (get_theme_mod('fit_hskin_h5ColorB') != '') {
			$colorB = esc_attr( get_theme_mod( 'fit_hskin_h5ColorB' ));
		}
		if (get_option('fit_hskin_h5Style') == 'value1') {echo '
		.content h5{color:'.$colorB.';}
		.content h5:first-letter{
			font-size:2rem;
			padding-bottom:5px;
			border-bottom:3px solid;
			color:'.$colorA.';
		}';
				}if (get_option('fit_hskin_h5Style') == 'value2') {echo '
		.content h5{
			padding: 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15) inset;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value3') {echo '
		.content h5{
			position: relative;
			padding:10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
			box-shadow:0 1px 3px rgba(0,0,0,0.25);
		}
		.content h5::before,
		.content h5::after{
			content: "";
			position: absolute;
			top: 100%;
			height: 0;
			width: 0;
			border: 5px solid transparent;
			border-top: 5px solid #1A3654;
		}
		.content h5::before{
			right: 0;
			border-left: 5px solid #1A3654;
		}
		.content h5::after{
			left: 0;
			border-right: 5px solid #1A3654;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value4') {echo '
		.content h5{
			position: relative;
			padding: 10px 20px;
			color:'.$colorB.';
			background:'.$colorA.';
		}
		.content h5::before,.content h5::after{
			content: "";
			position: absolute;
			top: -20px;
			left: 0;
			width: 100%;
			height: 0;
			border: solid 10px transparent;
		}
		.content h5::before{
			border-bottom-color:'.$colorA.';
		}
		.content h5::after{
			border-bottom-color: rgba(0,0,0,0.15);;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value5') {echo '
		.content h5{
			color:'.$colorB.';
			background: linear-gradient(transparent 60%, '.$colorA.' 60%);
		}';
				}if (get_option('fit_hskin_h5Style') == 'value6') {echo '
		.content h5{
			position: relative;
			padding:20px;
			color:'.$colorB.';
			background: '.$colorA.';
		}
		.content h5::after {
			position: absolute;
			content: "";
			top: 100%;
			left: 30px;
			border: 15px solid transparent;
			border-top: 15px solid '.$colorA.';
			width: 0;
			height: 0;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value7') {echo '
		.content h5{
			padding: 20px;
			color:#fff;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.75);
			background: linear-gradient('.$colorA.' 0%, '.$colorB.' 100%);
			border:1px solid '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h5Style') == 'value8') {echo '
		.content h5{
			position: relative;
			padding: 20px 20px 20px 38px;
			border: 1px solid #E5E5E5;
			color:'.$colorB.';
			border-top: 4px solid '.$colorA.';
			background: linear-gradient(#ffffff 0%, #EFEFEF 100%);
			box-shadow: 0 -1px 0 rgba(255, 255, 255, 1) inset;
		}
		.content h5::after{
			content: "";
			position: absolute;
			top: 50%;
			left: 10px;
			margin-top: -10px;
			width: 18px;
			height: 18px;
			border: 4px solid '.$colorA.';
			border-radius: 100%;
			box-sizing:border-box;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value9') {echo '
		.content h5{
			padding:20px;
			color:'.$colorB.';
			border: 1px solid #E5E5E5;
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h5Style') == 'value10') {echo '
		.content h5{
			padding: 10px 20px;
			color:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h5Style') == 'value11') {echo '
		.content h5{
			padding: 10px 20px;
			background:'.$colorB.';
			border-left: 5px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h5Style') == 'value12') {echo '
		.content h5{
			padding-bottom: 10px;
			color:'.$colorB.';
			border-bottom: 3px solid '.$colorA.';
		}';
				}if (get_option('fit_hskin_h5Style') == 'value13') {echo '
		.content h5{
			padding:10px 20px;
			color:'.$colorB.';
			border-left:8px solid '.$colorA.';
			border-bottom:1px solid #E5E5E5;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value14') {echo '
		.content h5{
			padding:20px;
			color:'.$colorB.';
			border:1px solid '.$colorA.';
			background: '.$colorA.';
			box-shadow:inset 1px 1px 0 rgba(255,255,255,0.25);
		}';
				}if (get_option('fit_hskin_h5Style') == 'value15') {echo '
		.content h5{
			position: relative;
			padding: 20px;
			text-align:center;
			color:'.$colorB.';
			border-top: solid 1px '.$colorA.';
			border-bottom: solid 1px '.$colorA.';
		}
		.content h5::before,
		.content h5::after{
			content: "";
			position: absolute;
			top: -10px;
			width: 1px;
			height: calc(100% + 20px);
			background-color: '.$colorA.';
		}
		.content h5::before{
			left: 10px;
		}
		.content h5::after{
			right: 10px;
		}';
				}if (get_option('fit_hskin_h5Style') == 'value16') {echo '
		.content h5{
			position: relative;
			overflow: hidden;
			padding-bottom: 5px;
			color:'.$colorB.';
		}
		.content h5::before,
		.content h5::after{
			content: "";
			position: absolute;
			bottom: 0;
		}
		.content h5:before{
			border-bottom: 3px solid '.$colorA.';
			width: 100%;
		}
		.content h5:after{
			border-bottom: 3px solid #E5E5E5;
			width: 100%;
		}';
		}if (get_option('fit_hskin_h5Style') == 'value17' && get_option('fit_hskin_h5Css') != '') {
			echo get_option('fit_hskin_h5Css');
		}

	}
	echo "\n".'</style>'."\n";
}

/*====================================記事内のスタイル設定ここまで 削除不可===================================*/

add_action('wp_head', 'fit_head'); //削除不可




//////////////////////////////////////////////////
//wp_head　不要タグの削除 削除不可
//////////////////////////////////////////////////
remove_action( 'wp_head', 'wp_generator' ); //WordPressのバージョン情報
remove_action( 'wp_head', 'rsd_link' ); //外部アプリケーションから情報を取得するタグ
remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writer用のタグ
remove_action( 'wp_head', 'index_rel_link' ); //現在の文書に対する「索引」であることを示すタグ
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //「?p=投稿ID」形式のデフォルトパーマリンクタグ

//「link rel=next」等のタグ 削除不可
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

//フィード関連のタグ 削除不可
remove_action( 'wp_head', 'feed_links', 2);
remove_action( 'wp_head', 'feed_links_extra', 3);

//絵文字関連タグ 削除不可
remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles');
add_filter( 'emoji_svg_url', '__return_false' );

//最近のコメント用インラインスタイルタグ 削除不可
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );


//////////////////////////////////////////////////
//Original sanitize_callback 削除不可
//////////////////////////////////////////////////
// CheckBox
function fit_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
// radio/select
function fit_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
    $choices = $setting->manager->get_control($setting->id)->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
// number limit
function fit_sanitize_number_range( $number, $setting ) {
    $number = absint( $number );
    $atts = $setting->manager->get_control( $setting->id )->input_attrs;
    $min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
    $max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
    $step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
    return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}
// uploader
function fit_sanitize_image( $image, $setting ) {
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    $file = wp_check_filetype( $image, $mimes );
    return ( $file['ext'] ? $image : $setting->default );
}



//////////////////////////////////////////////////
//基本設定画面 削除不可
//////////////////////////////////////////////////
function fit_theme_cutomizer( $wp_customize ) {

	// セクション
	$wp_customize->add_section( 'fit_theme_section', array(
		'title'     => '基本設定',
		'priority'  => 1,
		'description' => '
		<style type="text/css">
		.customize-control-title{color:#0073AA;border-top: #BFBFBF 1px dotted;padding-top: 10px;margin-top: 10px;}
		.customize-control select,
		.customize-control input,
		.customize-control textarea {font-size:12px;}
		.customize-control select,
		.customize-control input[type=number]{width: auto !important;}
		.customize-control + .customize-control-checkbox{margin-top: -12px;}
		</style>',
	));

	// アーカイブページ抜粋文字数 セッティング
	$wp_customize->add_setting( 'fit_theme_archiveWord', array(
		'default'   => '200',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_number_range',
	));
	// アーカイブページ抜粋文字数 コントロール
	$wp_customize->add_control( 'fit_theme_archiveWord', array(
		'section'   => 'fit_theme_section',
		'settings'  => 'fit_theme_archiveWord',
		'label'     => '■アーカイブページの抜粋文字数',
		'description' => 'アーカイブページの投稿の抜粋文字数を指定<br>(20～500文字以内)',
		'type'      => 'number',
		'input_attrs' => array(
        	'step'     => '1',
        	'min'      => '20',
        	'max'      => '500',
    	),
	));

	// アーカイブページ記事ビューレイアウト セッティング
	$wp_customize->add_setting( 'fit_theme_articleLayout', array(
		'default'   => 'value1',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
	));
	// アーカイブページ記事ビューレイアウト コントロール
	$wp_customize->add_control( 'fit_theme_articleLayout', array(
		'section'   => 'fit_theme_section',
		'settings'  => 'fit_theme_articleLayout',
		'label'     => '■記事ビューレイアウト設定',
		'description' => 'アーカイブページの記事ビューレイアウトを選択<br>
		※インフィード広告を利用している場合、スマホのビューレイアウトをワイドにしないと、インフィード広告が表示されない可能性があります。',
		'type'      => 'select',
		'choices'   => array(
			'value1' => 'ノーマル(default)',
			'value2' => 'ワイド',
			'value3' => 'ノーマル(PC) / ワイド(スマホ)',
		),
	));
}
add_action( 'customize_register', 'fit_theme_cutomizer' );

//セットした画像のURLを取得
function get_fit_image_logo(){ return esc_url(get_theme_mod('fit_theme_image_logo'));}




//////////////////////////////////////////////////
//投稿ページ各種設定画面 削除不可
//////////////////////////////////////////////////
function fit_post_cutomizer( $wp_customize ) {

	// セクション
	$wp_customize->add_section( 'fit_post_section', array(
		'title'     => '投稿ページ設定',
		'priority'  => 1,
	));

	// 所属カテゴリ最新の表示/非表示 セッティング
	$wp_customize->add_setting( 'fit_post_category', array(
		'default'   => 'value1',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
	));
	// 所属カテゴリ最新の表示/非表示 コントロール
	$wp_customize->add_control( 'fit_post_category', array(
		'section'   => 'fit_post_section',
		'settings'  => 'fit_post_category',
		'label'     => '■所属カテゴリ最新記事の表示/非表示',
		'description' => '投稿ページの下部に所属カテゴリ最新記事(6件)を表示するか選択',
		'type'      => 'select',
		'choices'   => array(
			'value1' => '表示する(default)',
			'value2' => '表示しない',
		),
	));

	// 上部シェアボタンの表示/非表示 セッティング
	$wp_customize->add_setting( 'fit_post_shareTop', array(
		'default'   => 'value1',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
	));
	// 上部シェアボタンの表示/非表示 コントロール
	$wp_customize->add_control( 'fit_post_shareTop', array(
		'section'   => 'fit_post_section',
		'settings'  => 'fit_post_shareTop',
		'label'     => '■シェアボタンの表示/非表示',
		'description' => '投稿ページの上部にシェアボタンを表示するか選択',
		'type'      => 'select',
		'choices'   => array(
			'value1' => '表示する(default)',
			'value2' => '表示しない',
		),
	));

	// 下部シェアボタンの表示/非表示 セッティング
	$wp_customize->add_setting( 'fit_post_shareBottom', array(
		'default'   => 'value1',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
	));
	// 下部シェアボタンの表示/非表示 コントロール
	$wp_customize->add_control( 'fit_post_shareBottom', array(
		'section'   => 'fit_post_section',
		'settings'  => 'fit_post_shareBottom',
		'description' => '投稿ページの下部にシェアボタンを表示するか選択',
		'type'      => 'select',
		'choices'   => array(
			'value1' => '表示する(default)',
			'value2' => '表示しない',
		),
	));

	//Facebookセッティング
	$wp_customize->add_setting('fit_post_share[facebook]', array(
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_checkbox',
    ));
	//Facebookコントロール
	$wp_customize->add_control('fit_post_share_facebook', array(
        'section' => 'fit_post_section',
        'settings' => 'fit_post_share[facebook]',
        'label'     => 'Facebookボタンを表示する',
        'type'      => 'checkbox',
    ));

	//Twitterセッティング
	$wp_customize->add_setting('fit_post_share[twitter]', array(
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_checkbox',
    ));
	//Twitterコントロール
	$wp_customize->add_control('fit_post_share_twitter', array(
        'section' => 'fit_post_section',
        'settings' => 'fit_post_share[twitter]',
        'label'     => 'Twitterボタンを表示する',
        'type'      => 'checkbox',
    ));

	//Google+セッティング
	$wp_customize->add_setting('fit_post_share[google]', array(
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_checkbox',
    ));
	//Google+コントロール
	$wp_customize->add_control('fit_post_share_google', array(
        'section' => 'fit_post_section',
        'settings' => 'fit_post_share[google]',
        'label'     => 'Google+ボタンを表示する',
        'type'      => 'checkbox',
    ));

	//はてぶセッティング
	$wp_customize->add_setting('fit_post_share[hatebu]', array(
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_checkbox',
    ));
	//はてぶコントロール
	$wp_customize->add_control('fit_post_share_hatebu', array(
        'section' => 'fit_post_section',
        'settings' => 'fit_post_share[hatebu]',
        'label'     => 'はてぶボタンを表示する',
        'type'      => 'checkbox',
    ));

	//Pocketセッティング
	$wp_customize->add_setting('fit_post_share[pocket]', array(
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_checkbox',
    ));
	//Pocketコントロール
	$wp_customize->add_control('fit_post_share_pocket', array(
        'section' => 'fit_post_section',
        'settings' => 'fit_post_share[pocket]',
        'label'     => 'Pocketボタンを表示する',
        'type'      => 'checkbox',
    ));

	//LINEセッティング
	$wp_customize->add_setting('fit_post_share[line]', array(
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_checkbox',
    ));
	//LINEコントロール
	$wp_customize->add_control('fit_post_share_line', array(
        'section' => 'fit_post_section',
        'settings' => 'fit_post_share[line]',
        'label'     => 'LINEボタンを表示する',
        'type'      => 'checkbox',
    ));

}
add_action( 'customize_register', 'fit_post_cutomizer' );




//////////////////////////////////////////////////
//SNS・OGP設定画面 削除不可
//////////////////////////////////////////////////
function fit_social_cutomizer( $wp_customize ) {

    // セクション
    $wp_customize->add_section( 'fit_social_section', array(
        'title'     => 'OGP設定',
        'priority'  => 1,
    ));

    //OGP画像 セッティング
    $wp_customize->add_setting('fit_social_image_ogp', array(
        'type' => 'theme_mod',
		'transport' => 'postMessage',
		'sanitize_callback' => 'fit_sanitize_image',
    ));

    //OGP画像 コントロール
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fit_social_image_ogp', array(
        'section' => 'fit_social_section',
        'settings' => 'fit_social_image_ogp',
        'label' => '■[OGP]画像の設定',
        'description' => '投稿にアイキャッチ画像が登録されていない時に表示する画像<br>
		（縦600 × 横1200px以上の画像を登録してください）',
    )));
}
add_action( 'customize_register', 'fit_social_cutomizer' );

//セットした画像のURLを取得
function get_fit_image_ogp() { return esc_url(get_theme_mod('fit_social_image_ogp'));}




//////////////////////////////////////////////////
//投稿スキン設定画面 削除不可
//////////////////////////////////////////////////
function fit_hskin_cutomizer($wp_customize){
    //セクション
	$wp_customize->add_section( 'fit_hskin_section', array(
        'title' => '投稿スキン設定',
        'priority' => 1,
    ));

	if ( get_option('fit_skin_theme')) {
		$defaultColor = get_theme_mod('fit_skin_theme');
	}else{
		$defaultColor = '#f0b200';
	}

	//見出し2のカラーA　セッティング
	$wp_customize->add_setting('fit_hskin_h2ColorA', array(
        'default' => $defaultColor,
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し2のカラーA コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h2ColorA', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h2ColorA',
		'label'     => '■見出し2のスタイルを選択',
		'description' => 'カラーA',
	)));

	//見出し2のカラーB　セッティング
	$wp_customize->add_setting('fit_hskin_h2ColorB', array(
        'default' => '#191919',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し2のカラーB コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h2ColorB', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h2ColorB',
		'description' => 'カラーB',
	)));

	//見出し2のスタイル　セッティング
	$wp_customize->add_setting('fit_hskin_h2Style', array(
        'default'   => 'value1',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
    ));
	//見出し2のスタイル　コントロール
	$wp_customize->add_control( 'fit_hskin_h2Style', array(
        'section' => 'fit_hskin_section',
        'settings' => 'fit_hskin_h2Style',
        'description'     => '※ここで指定したカラーの反映場所は、下記の「スタイル選択」のセレクトボックス内に記載されています<br>
		<br>
		スタイルを選択',
        'type'      => 'select',
        'choices'   => array(
            'value1' => '01.先頭大［カラーA：先頭文字　B：文字］(default)',
            'value2' => '02.内側影［カラーA：背景　B：文字］',
            'value3' => '03.リボン風［カラーA：背景　B：文字］',
            'value4' => '04.箱型［カラーA：背景　B：文字］',
            'value5' => '05.マーカー風［カラーA：下線　B：文字］',
            'value6' => '06.吹き出し風［カラーA：背景　B：文字］',
            'value7' => '07.グラデダーク［カラーA：上　B：下］',
            'value8' => '08.グラデライト［カラーA：上線　B：文字］',
            'value9' => '09.ボックス［カラーA：線　B：文字］',
            'value10' => '10.左線［カラーA：左線　B：文字］',
            'value11' => '11.左線+背景［カラーA：左線　B：背景］',
			'value12' => '12.下線［カラーA：下線　B：文字］',
            'value13' => '13.左下線［カラーA：左線　B：文字］',
            'value14' => '14.内側線［カラーA：背景　B：文字］',
            'value15' => '15.はみ出す線［カラーA：線　B：文字］',
            'value16' => '16.文字下色線［カラーA：下線　B：文字］',
			'value17' => '00.オリジナル見出しを作成',
        ),
    ));

	// 見出し2のCSS セッティング
	$wp_customize->add_setting( 'fit_hskin_h2Css', array(
		'type' => 'option',
		'sanitize_callback' => '',
	));
	// 見出し2のCSS コントロール
	$wp_customize->add_control( 'fit_hskin_h2Css', array(
		'section'   => 'fit_hskin_section',
		'settings'  => 'fit_hskin_h2Css',
		'description' => 'オリジナル見出しのCSSを入力<br>
		※「00.オリジナル見出しを作成」を指定した場合は、下記のフォームor子テーマのCSSファイルにスタイルを記述してください。',
		'type'      => 'textarea',
	));



	//見出し3のカラーA　セッティング
	$wp_customize->add_setting('fit_hskin_h3ColorA', array(
        'default' => $defaultColor,
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し3のカラーA コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h3ColorA', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h3ColorA',
		'label'     => '■見出し3のスタイルを選択',
		'description' => 'カラーA',
	)));

	//見出し3のカラーB　セッティング
	$wp_customize->add_setting('fit_hskin_h3ColorB', array(
        'default' => '#191919',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し3のカラーB コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h3ColorB', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h3ColorB',
		'description' => 'カラーB',
	)));

	//見出し3のスタイル　セッティング
	$wp_customize->add_setting('fit_hskin_h3Style', array(
        'default'   => 'value9',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
    ));
	//見出し3のスタイル　コントロール
	$wp_customize->add_control( 'fit_hskin_h3Style', array(
        'section' => 'fit_hskin_section',
        'settings' => 'fit_hskin_h3Style',
        'description'     => '※ここで指定したカラーの反映場所は、下記の「スタイル選択」のセレクトボックス内に記載されています<br>
		<br>
		スタイルを選択',
        'type'      => 'select',
        'choices'   => array(
            'value1' => '01.先頭大［カラーA：先頭文字　B：文字］',
            'value2' => '02.内側影［カラーA：背景　B：文字］',
            'value3' => '03.リボン風［カラーA：背景　B：文字］',
            'value4' => '04.箱型［カラーA：背景　B：文字］',
            'value5' => '05.マーカー風［カラーA：下線　B：文字］',
            'value6' => '06.吹き出し風［カラーA：背景　B：文字］',
            'value7' => '07.グラデダーク［カラーA：上　B：下］',
            'value8' => '08.グラデライト［カラーA：上線　B：文字］',
            'value9' => '09.ボックス［カラーA：線　B：文字］(default)',
            'value10' => '10.左線［カラーA：左線　B：文字］',
            'value11' => '11.左線+背景［カラーA：左線　B：背景］',
			'value12' => '12.下線［カラーA：下線　B：文字］',
            'value13' => '13.左下線［カラーA：左線　B：文字］',
            'value14' => '14.内側線［カラーA：背景　B：文字］',
            'value15' => '15.はみ出す線［カラーA：線　B：文字］',
            'value16' => '16.文字下色線［カラーA：下線　B：文字］',
			'value17' => '00.オリジナル見出しを作成',
        ),
    ));

	// 見出し3のCSS セッティング
	$wp_customize->add_setting( 'fit_hskin_h3Css', array(
		'type' => 'option',
		'sanitize_callback' => '',
	));
	// 見出し3のCSS コントロール
	$wp_customize->add_control( 'fit_hskin_h3Css', array(
		'section'   => 'fit_hskin_section',
		'settings'  => 'fit_hskin_h3Css',
		'description' => 'オリジナル見出しのCSSを入力<br>
		※「00.オリジナル見出しを作成」を指定した場合は、下記のフォームor子テーマのCSSファイルにスタイルを記述してください。',
		'type'      => 'textarea',
	));


	//見出し4のカラーA　セッティング
	$wp_customize->add_setting('fit_hskin_h4ColorA', array(
        'default' => $defaultColor,
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し4のカラーA コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h4ColorA', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h4ColorA',
		'label'     => '■見出し4のスタイルを選択',
		'description' => 'カラーA',
	)));

	//見出し4のカラーB　セッティング
	$wp_customize->add_setting('fit_hskin_h4ColorB', array(
        'default' => '#191919',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し4のカラーB コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h4ColorB', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h4ColorB',
		'description' => 'カラーB',
	)));

	//見出し4のスタイル　セッティング
	$wp_customize->add_setting('fit_hskin_h4Style', array(
        'default'   => 'value17',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
    ));
	//見出し4のスタイル　コントロール
	$wp_customize->add_control( 'fit_hskin_h4Style', array(
        'section' => 'fit_hskin_section',
        'settings' => 'fit_hskin_h4Style',
        'description'     => '※ここで指定したカラーの反映場所は、下記の「スタイル選択」のセレクトボックス内に記載されています<br>
		<br>
		スタイルを選択',
        'type'      => 'select',
        'choices'   => array(
            'value1' => '01.先頭大［カラーA：先頭文字　B：文字］',
            'value2' => '02.内側影［カラーA：背景　B：文字］',
            'value3' => '03.リボン風［カラーA：背景　B：文字］',
            'value4' => '04.箱型［カラーA：背景　B：文字］',
            'value5' => '05.マーカー風［カラーA：下線　B：文字］',
            'value6' => '06.吹き出し風［カラーA：背景　B：文字］',
            'value7' => '07.グラデダーク［カラーA：上　B：下］',
            'value8' => '08.グラデライト［カラーA：上線　B：文字］',
            'value9' => '09.ボックス［カラーA：線　B：文字］',
            'value10' => '10.左線［カラーA：左線　B：文字］',
            'value11' => '11.左線+背景［カラーA：左線　B：背景］',
			'value12' => '12.下線［カラーA：下線　B：文字］',
            'value13' => '13.左下線［カラーA：左線　B：文字］',
            'value14' => '14.内側線［カラーA：背景　B：文字］',
            'value15' => '15.はみ出す線［カラーA：線　B：文字］',
            'value16' => '16.文字下色線［カラーA：下線　B：文字］',
			'value17' => '00.オリジナル見出しを作成(default)',
        ),
    ));

	// 見出し4のCSS セッティング
	$wp_customize->add_setting( 'fit_hskin_h4Css', array(
		'type' => 'option',
		'sanitize_callback' => '',
	));
	// 見出し4のCSS コントロール
	$wp_customize->add_control( 'fit_hskin_h4Css', array(
		'section'   => 'fit_hskin_section',
		'settings'  => 'fit_hskin_h4Css',
		'description' => 'オリジナル見出しのCSSを入力<br>
		※「00.オリジナル見出しを作成」を指定した場合は、下記のフォームor子テーマのCSSファイルにスタイルを記述してください。',
		'type'      => 'textarea',
	));


	//見出し5のカラーA　セッティング
	$wp_customize->add_setting('fit_hskin_h5ColorA', array(
        'default' => $defaultColor,
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し5のカラーA コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h5ColorA', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h5ColorA',
		'label'     => '■見出し5のスタイルを選択',
		'description' => 'カラーA',
	)));

	//見出し5のカラーB　セッティング
	$wp_customize->add_setting('fit_hskin_h5ColorB', array(
        'default' => '#191919',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	// 見出し5のカラーB コントロール
	$wp_customize->add_control( new WP_Customize_color_Control( $wp_customize, 'fit_hskin_h5ColorB', array(
		'section' => 'fit_hskin_section',
		'settings' =>'fit_hskin_h5ColorB',
		'description' => 'カラーB',
	)));

	//見出し5のスタイル　セッティング
	$wp_customize->add_setting('fit_hskin_h5Style', array(
        'default'   => 'value17',
		'type' => 'option',
		'sanitize_callback' => 'fit_sanitize_select',
    ));
	//見出し5のスタイル　コントロール
	$wp_customize->add_control( 'fit_hskin_h5Style', array(
        'section' => 'fit_hskin_section',
        'settings' => 'fit_hskin_h5Style',
        'description'     => '※ここで指定したカラーの反映場所は、下記の「スタイル選択」のセレクトボックス内に記載されています<br>
		<br>
		スタイルを選択',
        'type'      => 'select',
        'choices'   => array(
            'value1' => '01.先頭大［カラーA：先頭文字　B：文字］',
            'value2' => '02.内側影［カラーA：背景　B：文字］',
            'value3' => '03.リボン風［カラーA：背景　B：文字］',
            'value4' => '04.箱型［カラーA：背景　B：文字］',
            'value5' => '05.マーカー風［カラーA：下線　B：文字］',
            'value6' => '06.吹き出し風［カラーA：背景　B：文字］',
            'value7' => '07.グラデダーク［カラーA：上　B：下］',
            'value8' => '08.グラデライト［カラーA：上線　B：文字］',
            'value9' => '09.ボックス［カラーA：線　B：文字］',
            'value10' => '10.左線［カラーA：左線　B：文字］',
            'value11' => '11.左線+背景［カラーA：左線　B：背景］',
			'value12' => '12.下線［カラーA：下線　B：文字］',
            'value13' => '13.左下線［カラーA：左線　B：文字］',
            'value14' => '14.内側線［カラーA：背景　B：文字］',
            'value15' => '15.はみ出す線［カラーA：線　B：文字］',
            'value16' => '16.文字下色線［カラーA：下線　B：文字］',
			'value17' => '00.オリジナル見出しを作成(default)',
        ),
    ));

	// 見出し5のCSS セッティング
	$wp_customize->add_setting( 'fit_hskin_h5Css', array(
		'type' => 'option',
		'sanitize_callback' => '',
	));
	// 見出し5のCSS コントロール
	$wp_customize->add_control( 'fit_hskin_h5Css', array(
		'section'   => 'fit_hskin_section',
		'settings'  => 'fit_hskin_h5Css',
		'description' => 'オリジナル見出しのCSSを入力<br>
		※「00.オリジナル見出しを作成」を指定した場合は、下記のフォームor子テーマのCSSファイルにスタイルを記述してください。',
		'type'      => 'textarea',
	));
}
add_action( 'customize_register', 'fit_hskin_cutomizer' );



//////////////////////////////////////////////////
//オリジナルBODYクラスを作成
//////////////////////////////////////////////////
function fit_body_class(){
	$fit_skin_base = NULL;
	if ( get_option('fit_skin_base') == 'value1') {
		$fit_skin_base = 't-dark';
	} else if ( get_option('fit_skin_base') == 'value2' ) {
		$fit_skin_base = 't-light';
	}else{
		$fit_skin_base = 't-dark';
	}

	$fit_skin_option = NULL;
	if ( get_option('fit_skin_optionRich')) {
		$fit_skin_option = ' t-rich';
	}

	echo ' class="'.$fit_skin_base.''.$fit_skin_option.'"';
}




//////////////////////////////////////////////////
// fit_original_titleを設定 削除不可
//////////////////////////////////////////////////
function fit_page_title() {
	$opt = get_option('fit_advanced_archive');
	$title = get_bloginfo( 'name' );
	if ( is_category() ) {
        $title = $opt['category']. single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = $opt['tag']. single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = $opt['author']. get_the_author();
    } elseif ( is_year() ) {
        $title = $opt['year']. get_the_date('Y年') ;
    } elseif ( is_month() ) {
        $title = $opt['month']. get_the_date('Y年n月') ;
    } elseif ( is_day() ) {
        $title = $opt['day']. get_the_date('Y年n月j日') ;
	} elseif ( is_search() ) {
        $title = $opt['search'].'「'.get_search_query().'」の検索結果' ;
    } elseif ( is_404() ) {
        $title = 'Hello! My Name Is 404' ;
    }
	return $title;
}

function fit_archive_title() {
	$opt = get_option('fit_advanced_archive');
	$title = get_bloginfo( 'name' );
	if ( is_category() ) {
        $title = $opt['category']. single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = $opt['tag']. single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = $opt['author']. get_the_author();
    } elseif ( is_year() ) {
        $title = $opt['year']. get_the_date('Y年') ;
    } elseif ( is_month() ) {
        $title = $opt['month']. get_the_date('Y年n月') ;
    } elseif ( is_day() ) {
        $title = $opt['day']. get_the_date('Y年n月j日') ;
	} elseif ( is_search() ) {
        $title = $opt['search'].'「'.get_search_query().'」の検索結果' ;
    } elseif ( is_404() ) {
        $title = 'Hello! My Name Is 404' ;
    }
	return $title;
}




//////////////////////////////////////////////////
//wp_head　<title>タグの設定 削除不可
//////////////////////////////////////////////////
// wp_headで<title>を出力する
function setup_theme() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'setup_theme' );

// <title>の区切り線を｜に変更する
function fit_title_separator(){
    $sep = '｜';
    return $sep;
}
add_filter( 'document_title_separator', 'fit_title_separator' );

// <title>の設定
function fit_document_title( $title ) {
	if ( is_home() ) {
		if ( get_option('fit_seo_titleTop') && !get_option('fit_seo_titleTopName') ) {
			$title = get_option('fit_seo_titleTop');
		}elseif ( get_option('fit_seo_titleTop') && get_option('fit_seo_titleTopName') ) {
			$title = get_option('fit_seo_titleTop') .fit_title_separator() .get_bloginfo( 'name' );
		}else {
			$title = get_bloginfo( 'description' ) .fit_title_separator() .get_bloginfo( 'name' );
		}
	}
	if (is_category() || is_tag() || is_author() || is_year() || is_month() || is_day() || is_search() || is_404() ) {
        $title = fit_page_title() .fit_title_separator() .get_bloginfo( 'name' );
	}
	if (is_singular() && get_post_meta(get_the_ID(), 'title', true) && get_post_meta(get_the_ID(), 'titleName', true) ) {
        $title = get_post_meta(get_the_ID(), 'title', true) .fit_title_separator() .get_bloginfo( 'name' );
    }
	if (is_singular() && get_post_meta(get_the_ID(), 'title', true) && !get_post_meta(get_the_ID(), 'titleName', true) ) {
        $title = get_post_meta(get_the_ID(), 'title', true);
    }
	return $title;
}
add_filter( 'pre_get_document_title', 'fit_document_title' );


//////////////////////////////////////////////////
//目次の表示/非表示、個別選択設定 削除不可
//////////////////////////////////////////////////
if ( get_option('fit_post_outline') != 'value2') {
	function add_outline_fields() {
		//add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
		add_meta_box( 'outline_setting', '目次の個別非表示設定', 'insert_outline_fields', 'post', 'normal');
	}
	add_action('admin_menu', 'add_outline_fields');


	// カスタムフィールドの入力エリア
	function insert_outline_fields() {
		global $post;

		if( get_post_meta($post->ID,'outline_none',true) == "1" ) {
			$outline_none_check = "checked";
		}else {
			$outline_none_check = "";
		}

		echo '
			<div style="margin:20px 0; overflow: hidden; line-height:2;">
		  	<div style="float:left;width:120px;">目次の表示設定</div>
		  	<div style="float:right;width:calc(100% - 140px);">
		    	<input type="checkbox" name="outline_none" value="1" '.$outline_none_check.' >:この投稿では目次を非表示にしますか？
		  	</div>
		  	<div style="clear:both;"></div>
			</div>
		';

	}

	// カスタムフィールドの値を保存
	function save_outline_fields( $post_id ) {
		if(!empty($_POST['outline_none'])){
			update_post_meta($post_id, 'outline_none', $_POST['outline_none'] );
		}else{
			delete_post_meta($post_id, 'outline_none');
		}

	}
	add_action('save_post', 'save_outline_fields');
}




//////////////////////////////////////////////////
// SEO専用カスタムフィールド追加 削除不可
//////////////////////////////////////////////////
function add_seo_fields() {
	/*
	add_meta_box( 'seo_setting', 'SEO対策', 'insert_seo_fields', 'post', 'normal', 'high');
	add_meta_box( 'seo_setting', 'SEO対策', 'insert_seo_fields', 'page', 'normal', 'high');
	*/
}
add_action('admin_menu', 'add_seo_fields');


// カスタムフィールドの入力フィールド
function insert_seo_fields() {
	global $post;
	$title = get_post_meta($post->ID,'title',true);
	$titleName = get_post_meta($post->ID,'titleName',true);
	if( $titleName == 1 ) {
		$titleName_check = "checked";
	} else {
		$titleName_check = "/";
	}

	$description = get_post_meta($post->ID,'description',true);

	$noindex = get_post_meta($post->ID,'noindex',true);
	if( $noindex == 1 ) {
		$noindex_check = "checked";
	} else {
		$noindex_check = "/";
	}

	$nofollow = get_post_meta($post->ID,'nofollow',true);
	if( $nofollow == 1 ) {
		$nofollow_check = "checked";
	} else {
		$nofollow_check = "/";
	}

	$nosnippet = get_post_meta($post->ID,'nosnippet',true);
	if( $nosnippet == 1 ) {
		$nosnippet_check = "checked";
	} else {
		$nosnippet_check = "/";
	}

	$noarchive = get_post_meta($post->ID,'noarchive',true);
	if( $noarchive == 1 ) {
		$noarchive_check = "checked";
	} else {
		$noarchive_check = "/";
	}


	echo '
		<div style="margin:20px 0; overflow: hidden; line-height:2;">
		  <div style="float:left;width:120px;">title設定</div>
		  <div style="float:right;width:calc(100% - 140px);">
		    <input type="text" size="50" name="title" id="title" value="'.esc_html($title).'"  /><br>
			<input type="checkbox" name="titleName" value="1" ' . $titleName_check . '>後ろに［'.fit_title_separator().' '.get_bloginfo( 'name' ).'］を表示する<br>
			<span style="color: #7F7F7F;">※未入力時は「記事タイトル '.fit_title_separator().' '.get_bloginfo( 'name' ).'」が表示されます。</span>
		  </div>
		  <div style="clear:both;"></div>
		</div>
	';

	echo '
		<div style="margin:20px 0; overflow: hidden; line-height:2;">
		  <div style="float:left;width:120px;">description設定</div>
		  <div style="float:right;width:calc(100% - 140px);">
		    <textarea name="description" id="description" cols="50" rows="4" />'.esc_html($description).'</textarea><br>
			<span>検索結果に表示される説明文です。</span>
		  </div>
		  <div style="clear:both;"></div>
		</div>
	';

	echo '
		<div style="margin:20px 0; overflow: hidden; line-height:2;">
		  <div style="float:left;width:120px;">meta robot設定</div>
		  <div style="float:right;width:calc(100% - 140px);">
		    <input type="checkbox" name="noindex" value="1" ' . $noindex_check . '>:NoIndex　
			<input type="checkbox" name="nofollow" value="1" ' . $nofollow_check . '>:NoFollow　
			<input type="checkbox" name="nosnippet" value="1" ' . $nosnippet_check . '>:NoSnippet　
			<input type="checkbox" name="noarchive" value="1" ' . $noarchive_check . '>:NoArchive
		  </div>
		  <div style="clear:both;"></div>
		</div>
	';

}

// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
	if(!empty($_POST['title'])){
		update_post_meta($post_id, 'title', $_POST['title'] );
	}else{
		delete_post_meta($post_id, 'title');
	}
	if(!empty($_POST['titleName'])){
		update_post_meta($post_id, 'titleName', $_POST['titleName'] );
	}else{
		delete_post_meta($post_id, 'titleName');
	}
	if(!empty($_POST['description'])){
		update_post_meta($post_id, 'description', $_POST['description'] );
	}else{
		delete_post_meta($post_id, 'description');
	}
	if(!empty($_POST['noindex'])){
		update_post_meta($post_id, 'noindex', $_POST['noindex'] );
	}else{
		delete_post_meta($post_id, 'noindex');
	}
	if(!empty($_POST['nofollow'])){
		update_post_meta($post_id, 'nofollow', $_POST['nofollow'] );
	}else{
		delete_post_meta($post_id, 'nofollow');
	}
	if(!empty($_POST['nosnippet'])){
		update_post_meta($post_id, 'nosnippet', $_POST['nosnippet'] );
	}else{
		delete_post_meta($post_id, 'nosnippet');
	}
	if(!empty($_POST['noarchive'])){
		update_post_meta($post_id, 'noarchive', $_POST['noarchive'] );
	}else{
		delete_post_meta($post_id, 'noarchive');
	}
}
add_action('save_post', 'save_custom_fields');


//カスタムフィールドで設定したディスクリプションを加工
function custom_description() {
	$description = get_post_meta(get_the_ID(), 'description', true);
	$description = strip_tags(str_replace(array("\r\n", "\r", "\n"), '', $description));//改行削除
	return $description;
}


//ディスクリプション設定
function description_fit() {
	$get_description = NULL;

	// TOPページ
	if ( is_home() ) {
		if ( get_option('fit_seo_descriptionTop') ){
			$get_description = get_option('fit_seo_descriptionTop');
		}
	}// 投稿・固定ページ
	elseif ( is_singular() ) {
		$get_description = custom_description();
	}// カテゴリー・タグページ
	elseif (is_category() || is_tag()) {
		if ( term_description() && get_option('fit_theme_term') != 'value2' ){
			$get_description = term_description();
		}
	}
	return $get_description;
}


// 設定の反映
function fit_seo() {// カスタムフィールドの設定値の読み込み
	$custom = get_post_custom();
	$noindex = @$custom['noindex'][0];
	$nofollow = @$custom['nofollow'][0];
	$nosnippet = @$custom['nosnippet'][0];
	$noarchive = @$custom['noarchive'][0];
	$description = description_fit();

	//noindexとnofollow設定
	if    ( $noindex && !$nofollow && !$nosnippet && !$noarchive ) {echo '<meta name="robots" content="noindex">'."\n";}
	elseif( !$noindex && $nofollow && !$nosnippet && !$noarchive ) {echo '<meta name="robots" content="nofollow">'."\n";}
	elseif( !$noindex && !$nofollow && $nosnippet && !$noarchive ) {echo '<meta name="robots" content="nosnippet">'."\n";}
	elseif( !$noindex && !$nofollow && !$nosnippet && $noarchive ) {echo '<meta name="robots" content="noarchive">'."\n";}
	elseif( $noindex && $nofollow && !$nosnippet && !$noarchive ) {echo '<meta name="robots" content="noindex,nofollow">'."\n";}
	elseif( $noindex && !$nofollow && $nosnippet && !$noarchive ) {echo '<meta name="robots" content="noindex,nosnippet">'."\n";}
	elseif( $noindex && !$nofollow && !$nosnippet && $noarchive ) {echo '<meta name="robots" content="noindex,noarchive">'."\n";}
	elseif( !$noindex && $nofollow && $nosnippet && !$noarchive ) {echo '<meta name="robots" content="nofollow,nosnippet">'."\n";}
	elseif( !$noindex && $nofollow && !$nosnippet && $noarchive ) {echo '<meta name="robots" content="nofollow,noarchive">'."\n";}
	elseif( !$noindex && !$nofollow && $nosnippet && $noarchive ) {echo '<meta name="robots" content="nosnippet,noarchive">'."\n";}
	elseif( $noindex && $nofollow && $nosnippet && !$noarchive ) {echo '<meta name="robots" content="noindex,nofollow,nosnippet">'."\n";}
	elseif( $noindex && $nofollow && !$nosnippet && $noarchive ) {echo '<meta name="robots" content="noindex,nofollow,noarchive">'."\n";}
	elseif( $noindex && !$nofollow && $nosnippet && $noarchive ) {echo '<meta name="robots" content="noindex,nosnippet,noarchive">'."\n";}
	elseif( !$noindex && $nofollow && $nosnippet && $noarchive ) {echo '<meta name="robots" content="nofollow,nosnippet,noarchive">'."\n";}
	elseif( $noindex && $nofollow && $nosnippet && $noarchive ) {echo '<meta name="robots" content="noindex,nofollow,nosnippet,noarchive">'."\n";}

	//ディスクリプション設定
	if (!empty($description)) {
		echo '<meta name="description" content="'.$description.'">'; echo "\n";
	}
}

//////////////////////////////////////////////////
//OGP設定 削除不可
//////////////////////////////////////////////////

function fit_ogp(){
	echo '<meta property="og:site_name" content="'.get_bloginfo('name').'" />'."\n";
	if (is_singular()){
		echo '<meta property="og:type" content="article" />'."\n";
	}else {
		echo '<meta property="og:type" content="website" />'."\n";
	}
	if (is_singular()){
		echo '<meta property="og:title" content="'.get_the_title().'" />'."\n";
		if(description_fit()){
			echo '<meta property="og:description" content="'.description_fit().'" />'."\n";
		}elseif(have_posts()){while ( have_posts() ) { the_post();
			echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 120).'" />'."\n";
		}}
		echo '<meta property="og:url" content="'.get_the_permalink().'" />'."\n";
	}elseif (is_home()){
		if(get_option('fit_seo_titleTop')){
			echo '<meta property="og:title" content="'.fit_document_title('fit_seo_titleTop').'" />'."\n";
		}else{
			echo '<meta property="og:title" content="'.get_bloginfo('name').'" />'."\n";
		}
		if(get_option('fit_seo_descriptionTop')){
			echo '<meta property="og:description" content="'.get_option('fit_seo_descriptionTop').'" />'."\n";
		}else{
			echo '<meta property="og:description" content="'.get_bloginfo('description').'" />'."\n";
		}
		echo '<meta property="og:url" content="'.get_home_url().'" />'."\n";
	}else {
		echo '<meta property="og:title" content="'.wp_get_document_title().'" />'."\n";
		if (term_description()) {
			echo '<meta property="og:description" content="'.term_description().'" />'."\n";
		}else{
			echo '<meta property="og:description" content="'.get_bloginfo('description').'" />'."\n";
		}
		if(is_year()){
			echo '<meta property="og:url" content="'.get_year_link('').'" />'."\n";
		}elseif(is_month()){
			echo '<meta property="og:url" content="'.get_month_link('', '').'" />'."\n";
		}elseif(is_day()){
			echo '<meta property="og:url" content="'.get_day_link('', '', '').'" />'."\n";
		}elseif(is_author()){
			echo '<meta property="og:url" content="'.get_author_posts_url(get_the_author_meta( 'ID' )).'" />'."\n";
		}elseif(is_search()){
			echo '<meta property="og:url" content="'.get_search_link().'" />'."\n";
		}elseif(is_category()){
			$cat = get_the_category();
			$cat_id = $cat[0]->cat_ID;
			echo '<meta property="og:url" content="'.get_category_link($cat_id).'" />'."\n";
		}elseif(is_tag()){
			$tag = get_the_tags();
			$tag_id = $tag[0]->term_id;
			echo '<meta property="og:url" content="'.get_tag_link($tag_id).'" />'."\n";
		}else{
			echo '<meta property="og:url" content="'.get_home_url().'" />'."\n";
		}
	}

	if (is_singular()){
		if (has_post_thumbnail()){//投稿にサムネイルがある場合
			$image_id = get_post_thumbnail_id();
			$image = wp_get_attachment_image_src( $image_id, 'icatch');
			echo '<meta property="og:image" content="'.$image[0].'" />'."\n";
		}elseif(get_fit_image_ogp()){//投稿にサムネイルが無く、OGP用画像がある場合
			echo '<meta property="og:image" content="'.get_fit_image_ogp().'" />'."\n";
		}else{//何も無い場合
			echo '<meta property="og:image" content="'.get_template_directory_uri().'/img/img_no.gif" />'."\n";
		}
	}
	else {
		if(get_fit_image_ogp()){
			echo '<meta property="og:image" content="'.get_fit_image_ogp().'" />'."\n";
		}else{
			echo '<meta property="og:image" content="'.get_template_directory_uri().'/img/img_no.gif" />'."\n";
		}
	}

	if ( get_option('fit_social_TwitterCard')) {
		echo '<meta name="twitter:card" content="'.get_option('fit_social_TwitterCard').'" />'."\n";
	}else{
		echo '<meta name="twitter:card" content="summary" />'."\n";
	}

	if ( get_option('fit_social_TwitterId')) {
		echo '<meta name="twitter:site" content="@'.get_option('fit_social_TwitterId').'" />'."\n";
	}

	if ( get_option('fit_social_FBAppId')) {
		echo '<meta property="fb:app_id" content="'.get_option('fit_social_FBAppId').'" />'."\n";
	}

	if ( get_option('fit_social_FBAdmins')) {
		echo '<meta property="fb:admins" content="'.get_option('fit_social_FBAdmins').'" />'."\n";
	}
}




//////////////////////////////////////////////////
//投稿ページにPVカウント用カスタムフィールド追加 削除不可
//////////////////////////////////////////////////
//アクセス数を取得
function get_post_views($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);

	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return '0 View';
	}
	return $count.' Views';
}

//アクセス数を保存
function set_post_views($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);

	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

//クローラーのアクセス判別
function is_bot() {
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$bot = array(
		"googlebot",
		"msnbot",
		"yahoo"
	);

	foreach( $bot as $bot ) {
		if (stripos( $ua, $bot ) !== false){
			return true;
		}
	}
	return false;
}




//////////////////////////////////////////////////
//管理画面の投稿画面にPV数を表示 削除不可
//////////////////////////////////////////////////
function count_status($post){
	if( $post->post_type == "post" ){
		$number = $post->post_views_count;
		if( empty($number) ){
			$number = "0";
		}
		echo'<div class="postbox" style="margin:20px 0 0 0; padding:12px; ">';
		echo'<span>この記事の閲覧数：</span>';
		echo'<strong> '. esc_html( $number ) .' View </strong>';
		echo'</div>';
	}
}
add_action('edit_form_after_editor', 'count_status');




//////////////////////////////////////////////////
//管理画面の投稿一覧にPV数とサムネイル画像を表示 削除不可
//////////////////////////////////////////////////
function manage_posts_columns($columns) {
	$columns['post_views_count'] = '閲覧数';
	return $columns;
}

function add_column($column_name, $post_id) {
	//View数呼び出し
	if ( $column_name == 'post_views_count' ) {
		$stitle = get_post_meta($post_id, 'post_views_count', true);
	}
	//表示する
	if ( isset($stitle) && $stitle ) {
		echo esc_attr($stitle);
	}

}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );


//閲覧数でソートできるようにする
function column_orderby_custom( $vars ) {
    if ( isset( $vars['orderby'] ) && 'post_views_count' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num'
        ));
    }
    return $vars;
}
add_filter( 'request', 'column_orderby_custom' );

function posts_register_sortable( $sortable_column ) {
    $sortable_column['post_views_count'] = 'post_views_count';
    return $sortable_column;
}
add_filter( 'manage_edit-post_sortable_columns', 'posts_register_sortable' );



//////////////////////////////////////////////////
//管理画面の投稿・固定ページ一覧にIDを表示 削除不可
//////////////////////////////////////////////////
function manage_posts_columns_id( $columns ) {
	$columns['wps_post_id'] = 'ID';
	return $columns;
}

function add_column_id( $column_name, $post_id ) {
	if( $column_name == 'wps_post_id' ) {
		echo $post_id;
	}
}
// 投稿一覧
add_filter( 'manage_posts_columns', 'manage_posts_columns_id', 5 );
add_action( 'manage_posts_custom_column', 'add_column_id', 5, 2 );
// 固定ページ一覧
add_filter( 'manage_pages_columns', 'manage_posts_columns_id', 5 );
add_action( 'manage_pages_custom_column', 'add_column_id', 5, 2 );







//////////////////////////////////////////////////
//管理画面の文言を変更 削除不可
//////////////////////////////////////////////////
function fit_admin_style() {
	$cautionColor = '#0073aa';
	echo '<style>
	.options-media-php .title + p::after{
		content: "※()括弧内の数字は推薦サイズです。";
		display: block;
		color: '.$cautionColor.';
	}
	.options-media-php label[for="thumbnail_size_w"]::after{
		content: "(160px)";
		color: '.$cautionColor.';
	}
	.options-media-php label[for="thumbnail_size_h"]::after{
		content: "(160px)";
		color: '.$cautionColor.';
	}
	.options-media-php label[for="medium_size_w"]::after{
		content: "(300px)";
		color: '.$cautionColor.';
	}
	.options-media-php label[for="medium_size_h"]::after{
		content: "(300px)";
		color: '.$cautionColor.';
	}
	.post-php a#set-post-thumbnail::after,
	.post-new-php a#set-post-thumbnail::after{
		display: block;
		content: "※[縦410 × 横730px]以上の画像";
		color: '.$cautionColor.';
	}
	</style>'."\n";
}
add_action('admin_print_styles', 'fit_admin_style');



//////////////////////////////////////////////////
//検索対象をPOSTに限定 削除不可
//////////////////////////////////////////////////
function fit_search_filter($search) {

	if ( get_option('fit_theme_search') == 'value2' ) {
		if(is_search()) {
			$search .= " AND post_type = 'post'";
		}
		return $search;
	}elseif ( get_option('fit_theme_search') == 'value3' ) {
		if(is_search()) {
			$search .= " AND post_type = 'page'";
		}
		return $search;
	}else{
		if(is_search()) {
			$search .= " AND (post_type = 'post' OR post_type='page')";
		}
		return $search;
	}
}
add_filter('posts_search', 'fit_search_filter');




//////////////////////////////////////////////////
//投稿スラッグを自動的に生成する 削除不可
//////////////////////////////////////////////////
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );



//////////////////////////////////////////////////
//投稿ビジュアルエディタをテーマCSSに合わせる 削除不可
//////////////////////////////////////////////////
add_editor_style("style-editor.css");




//////////////////////////////////////////////////
//term_descriptionPタグ削除（カテゴリ・タグのSEO） 削除不可
//////////////////////////////////////////////////
remove_filter('term_description','wpautop');




//////////////////////////////////////////////////
//投稿エディタで出力される画像srcset無効化 削除不可
//////////////////////////////////////////////////
add_filter( 'wp_calculate_image_srcset', '__return_false' );




//////////////////////////////////////////////////
//content_width 削除不可
//////////////////////////////////////////////////
if (!isset($content_width)) $content_width = 1100;




//////////////////////////////////////////////////
//デフォルトコメントフォーム文法エラー修正 削除不可
//////////////////////////////////////////////////
function custom_comment_form($args) {
	$args['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');




//////////////////////////////////////////////////
//カスタムメニュー設定 削除不可
//////////////////////////////////////////////////
register_nav_menus( array(
    'header_menu' => 'ヘッダーメニュー'
));




//////////////////////////////////////////////////
//アイキャッチ画像設定 削除不可
//////////////////////////////////////////////////
add_theme_support('post-thumbnails');




//////////////////////////////////////////////////
//サムネイル画像追加 削除不可
//////////////////////////////////////////////////
add_image_size('icatch', 730, 410, true);




//////////////////////////////////////////////////
//excerpt抜粋文字数設定 削除不可
//////////////////////////////////////////////////
function custom_excerpt_length( $length ) {
	if (get_option('fit_theme_archiveWord')){
		$excerpt = get_option('fit_theme_archiveWord');
	}else{
		$excerpt = 200;
	}
	return $excerpt;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




//////////////////////////////////////////////////
//投稿エディタで出力されるキャプションの設定 削除不可
//////////////////////////////////////////////////
function custom_caption_code($attr, $content = null) {
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }

    $output = apply_filters('img_caption_shortcode', '', $attr, $content);
    if ( $output != '' )
        return $output;

    extract(shortcode_atts(array(
        'id'    => '',
        'align' => 'alignnone',
        'width' => '',
        'caption' => ''
    ), $attr, 'caption'));

    if ( 1 > (int) $width || empty($caption) )
        return $content;

    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}
add_shortcode('caption', 'custom_caption_code');




//////////////////////////////////////////////////
// YouTube oEmbed DIVで囲む 削除不可
//////////////////////////////////////////////////
function custom_youtube_oembed($code){
  if(strpos($code, 'youtu.be') !== false || strpos($code, 'youtube.com') !== false){
    $html = preg_replace("@src=(['\"])?([^'\">\s]*)@", "src=$1$2", $code);

    $html = preg_replace('/ width="\d+"/', '', $html);
    $html = preg_replace('/ height="\d+"/', '', $html);
    $html = '<div class="youtube">' . $html . '</div>';

    return $html;
  }
  return $code;
}

add_filter('embed_handler_html', 'custom_youtube_oembed');
add_filter('embed_oembed_html', 'custom_youtube_oembed');




//////////////////////////////////////////////////
// 不要なページを無効化(404扱い) 削除不可
//////////////////////////////////////////////////
function custom_handle_404() {
    // 添付ファイルページを無効化
    if ( is_attachment() ) {
        global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        nocache_headers();
    }
}
add_action( 'template_redirect', 'custom_handle_404' );




//////////////////////////////////////////////////
//ウィジェット追加 削除不可
//////////////////////////////////////////////////
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => '通常サイドバーエリア',
		'description' => 'サイドバーにコンテンツを表示します。',
		'id' => 'sidebar',
		'before_widget' => '<aside class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="heading heading-widget">',
		'after_title' => '</h2>',
	));
	register_sidebar( array(
		'name' => '固定サイドバーエリア',
		'description' => '通常のサイドバーエリアの下にコンテンツを表示します。',
		'id' => 'sidebar-sticky',
		'before_widget' => '<aside class="widget widget-sticky">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="heading heading-widget">',
		'after_title' => '</h2>',
	));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



//////////////////////////////////////////////////
//SNSボタンリスト 削除不可
//////////////////////////////////////////////////
function fit_share_btn(){
	$options = get_option('fit_post_share');
	if ( $options['facebook'] || $options['twitter'] || $options['google'] || $options['hatebu'] || $options['pocket'] || $options['line'] ) {
		echo '<aside>'."\n";
		echo '<ul class="socialList">'."\n";
		if ( $options['facebook'] ) {
			echo '<li class="socialList__item"><a class="socialList__link icon-facebook" href="http://www.facebook.com/sharer.php?u='. urlencode(get_permalink()) .'&amp;t='. urlencode(the_title("","",0)) .'" target="_blank" title="Facebookで共有"></a></li>';
		}if ( $options['twitter'] ) {
			echo '<li class="socialList__item"><a class="socialList__link icon-twitter" href="http://twitter.com/intent/tweet?text='. urlencode(the_title("","",0)) .'&amp;'. urlencode(get_permalink()) .'&amp;url='. urlencode(get_permalink()) .'" target="_blank" title="Twitterで共有"></a></li>';
		}if ( $options['google'] ) {
			echo '<li class="socialList__item"><a class="socialList__link icon-google" href="https://plus.google.com/share?url='. urlencode(get_permalink()) .'" target="_blank" title="Google+で共有"></a></li>';
    	}if ( $options['hatebu'] ) {
			echo '<li class="socialList__item"><a class="socialList__link icon-hatebu" href="http://b.hatena.ne.jp/add?mode=confirm&amp;url='. urlencode(get_permalink()) .'&amp;title='. urlencode(the_title("","",0)) .'" target="_blank" data-hatena-bookmark-title="'. urlencode(get_permalink()) .'" title="このエントリーをはてなブックマークに追加"></a></li>';
		}if ( $options['pocket'] ) {
			echo '<li class="socialList__item"><a class="socialList__link icon-pocket" href="http://getpocket.com/edit?url='. urlencode(get_permalink()) .'" target="_blank" title="pocketで共有"></a></li>';
		}if ( $options['line'] ) {
			echo '<li class="socialList__item"><a class="socialList__link icon-line" href="http://line.naver.jp/R/msg/text/?'. urlencode(the_title("","",0)) .'%0D%0A'. urlencode(get_permalink()) .'" target="_blank" title="LINEで送る"></a></li>';
		}
    	echo '</ul>'."\n";
		echo '</aside>'."\n";
	}
}




//////////////////////////////////////////////////
//プロフィール項目追加 削除不可
//////////////////////////////////////////////////

function update_user_group( $user_id, $old_user_data ) {
	if ( isset( $_POST['user_group'] ) && $old_user_data->user_group != $_POST['user_group'] ) {
        $user_group = sanitize_text_field( $_POST['user_group'] );
        $user_group = wp_filter_kses( $user_group );
        $user_group = _wp_specialchars( $user_group );
        update_user_meta( $user_id, 'user_group', $user_group );
    }
}
add_action( 'profile_update', 'update_user_group', 10, 2 );




//////////////////////////////////////////////////
//投稿ページカテゴリー選択を1つのみに変更 削除不可
//////////////////////////////////////////////////
function limit_category_select() {?>
<script type="text/javascript">
jQuery(function($) {
    // 投稿画面のカテゴリー選択を制限
    var categorydiv = $('#categorydiv input[type=checkbox]');
    categorydiv.click(function() {
        $(this).parents('#categorydiv').find('input[type=checkbox]').attr('checked', false);
        $(this).attr('checked', true);
    });
    // クイック編集のカテゴリー選択を制限
    var inline_edit_col_center = $('.inline-edit-col-center input[type=checkbox]');
    inline_edit_col_center.click(function() {
        $(this).parents('.inline-edit-col-center').find('input[type=checkbox]').attr('checked', false);
        $(this).attr('checked', true);
    });
    $('#categorydiv #category-pop > ul > li:first-child, #categorydiv #category-all > ul > li:first-child, .inline-edit-col-center ul.category-checklist > li:first-child')
        .before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
});
</script>
<?php }
add_action( 'admin_print_footer_scripts', 'limit_category_select' );




//////////////////////////////////////////////////
//イメージURLから画像のIDを取得 削除不可
//////////////////////////////////////////////////
function fit_get_image_id($image_src){
	global $wpdb;
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
	$id = $wpdb->get_var($query);
	return $id;
}




//////////////////////////////////////////////////
//オリジナルページネーションを作成 削除不可
//////////////////////////////////////////////////
function fit_posts_pagination( $args = array() ) {
    $navigation = '';

    if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
        $args = wp_parse_args( $args, array(
            'mid_size'           => 2,
            'prev_text'          => 'PREV',
            'next_text'          => 'NEXT',
        ) );

        if ( isset( $args['type'] ) && 'array' == $args['type'] ) {
            $args['type'] = 'plain';
        }

        $links = paginate_links( $args );

        if ( $links ) {
            $template = '<div class="pager">%1$s</div>';
            $navigation = sprintf( $template, $links );
        }
    }
    echo $navigation;
}




//////////////////////////////////////////////////
//オリジナルサブページネーションを作成 削除不可
//////////////////////////////////////////////////
//前後の記事のリンクにclassを追加
function add_prev_posts_link_attr(){
	return 'class="subPager__link"';
}
add_filter('previous_posts_link_attributes', 'add_prev_posts_link_attr');

function add_next_posts_link_attr(){
	return 'class="subPager__link"';
}
add_filter('next_posts_link_attributes', 'add_next_posts_link_attr');

//現在のページ数の取得
function show_page_number() {
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    echo $paged;
}

//総ページ数の取得
function max_show_page_number() {
    global $wp_query;
    $max_page = $wp_query->max_num_pages;
    echo $max_page;
}

//出力用本体
function fit_sub_pagination(){

	$prev_link = get_previous_posts_link('&lt;');
	$next_link = get_next_posts_link('&gt;');

	if ( isset( $prev_link ) or isset( $next_link ) ) {
		echo '<div class="subPager">';
		echo '<span class="subPager__text">',show_page_number(''),'/',max_show_page_number(''),'ページ</span>';
		echo '<ul class="subPager__list">';
		if( isset( $prev_link ) ) {
			echo '<li class="subPager__item">',$prev_link,'</li>';
		}
		if( isset( $next_link ) ) {
			echo '<li class="subPager__item">',$next_link,'</li>';
		}
		echo '</ul></div>';
	}
}




//////////////////////////////////////////////////
//オリジナル目次を作成 削除不可
//////////////////////////////////////////////////
function get_outline_info($content) {
	// 目次のHTMLを入れる変数を定義します。
	$outline = '';
	// h1〜h6タグの個数を入れる変数を定義します。
	$counter = 0;
    // 記事内のh1〜h6タグを検索します。(idやclass属性も含むように改良)
    if (preg_match_all('/<h([1-6])[^>]*>(.*?)<\/h\1>/', $content, $matches,  PREG_SET_ORDER)) {
    	   // 記事内で使われているh1〜h6タグの中の、1〜6の中の一番小さな数字を取得します。
    	   // ※以降ソースの中にある、levelという単語は1〜6のことを表します。
        $min_level = min(array_map(function($m) { return $m[1]; }, $matches));
        // スタート時のlevelを決定します。
        // ※このレベルが上がる毎に、<ul></li>タグが追加されていきます。
        $current_level = $min_level - 1;
        // 各レベルの出現数を格納する配列を定義します。
        $sub_levels = array('1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0);
        // 記事内で見つかった、hタグの数だけループします。
        foreach ($matches as $m) {
            $level = $m[1];  // 見つかったhタグのlevelを取得します。
            $text = $m[2];  // 見つかったhタグの、タグの中身を取得します。
            // li, ulタグを閉じる処理です。2ループ目以降に中に入る可能性があります。
            // 例えば、前回処理したのがh3タグで、今回出現したのがh2タグの場合、
            // h3タグ用のulを閉じて、h2タグに備えます。
            while ($current_level > $level) {
                $current_level--;
                $outline .= '</li></ul>';
            }
            // 同じlevelの場合、liタグを閉じ、新しく開きます。
            if ($current_level == $level) {
                $outline .= '</li><li class="outline__item">';
            } else {
                // 同じlevelでない場合は、ul, liタグを追加していきます。
                // 例えば、前回処理したのがh2タグで、今回出現したのがh3タグの場合、
                // h3タグのためにulを追加します。
                while ($current_level < $level) {
                    $current_level++;
                    $outline .= sprintf('<ul class="outline__list outline__list-%s"><li class="outline__item">', $current_level);
                }
                // 見出しのレベルが変わった場合は、現在のレベル以下の出現回数をリセットします。
                for ($idx = $current_level + 0; $idx < count($sub_levels); $idx++) {
                    $sub_levels[$idx] = 0;
                }
            }
            // 各レベルの出現数を格納する配列を更新します。
            $sub_levels[$current_level]++;
            // 現在処理中のhタグの、パスを入れる配列を定義します。
            // 例えば、h2 -> h3 -> h3タグと進んでいる場合は、
            // level_fullpathはarray(1, 2)のようになります。
            // ※level_fullpath[0]の1は、1番目のh2タグの直下に入っていることを表します。
            // ※level_fullpath[1]の2は、2番目のh3を表します。
            $level_fullpath = array();
            for ($idx = $min_level; $idx <= $level; $idx++) {
                $level_fullpath[] = $sub_levels[$idx];
            }
            $target_anchor = 'outline__' . implode('_', $level_fullpath);

            // 目次に、<a href="#outline_1_2">1.2 見出し</a>のような形式で見出しを追加します。
            $outline .= sprintf('<a class="outline__link" href="#%s"><span class="outline__number">%s.</span> %s</a>', $target_anchor, implode('.', $level_fullpath), strip_tags($text));
            // 本文中の見出し本体を、<h3>見出し</h3>を<h3 id="outline_1_2">見出し</h3>
            // のような形式で置き換えます。
            $hid = preg_replace('/<h([1-6])/', '<h\1 id="' .$target_anchor . '"', $m[0]);
            $content = str_replace($m[0], $hid, $content);

        }
        // hタグのループが終了後、閉じられていないulタグを閉じていきます。
        while ($current_level >= $min_level) {
            $outline .= '</li></ul>';
            $current_level--;
        }
        // h1〜h6タグの個数
        $counter = count($matches);
    }
    return array('content' => $content, 'outline' => $outline, 'count' => $counter);
}

//目次を作成します。
function add_outline($content) {

    // 目次を表示するために必要な見出しの数
	if(get_option('fit_post_outline_number')){
		$number = get_option('fit_post_outline_number');
	}else{
		$number = 1;
	}
    // 目次関連の情報を取得します。
    $outline_info = get_outline_info($content);
    $content = $outline_info['content'];
    $outline = $outline_info['outline'];
    $count = $outline_info['count'];
	if (get_option('fit_post_outline_close') ) {
		$close = "";
	}else{
		$close = "checked";
	}
    if ($outline != '' && $count >= $number) {
        // 目次を装飾します。
        $decorated_outline = sprintf('
		<div class="outline">
		  <span class="outline__title">目次</span>
		  <input class="outline__toggle" id="outline__toggle" type="checkbox" '.$close.'>
		  <label class="outline__switch" for="outline__toggle"></label>
		  %s
		</div>', $outline);
        // カスタマイザーで目次を非表示にする以外が選択された時＆個別非表示が1以外の時に目次を追加します。
		if ( get_option('fit_post_outline') != 'value2' && get_post_meta(get_the_ID(), 'outline_none', true) != '1' && is_single() ) {
        	$shortcode_outline = '[outline]';
        	if (strpos($content, $shortcode_outline) !== false) {
            	// 記事内にショートコードがある場合、ショートコードを目次で置換します。
            	$content = str_replace($shortcode_outline, $decorated_outline, $content);
        	} else if (preg_match('/<h[1-6].*>/', $content, $matches, PREG_OFFSET_CAPTURE)) {
            	// 最初のhタグの前に目次を追加します。
            	$pos = $matches[0][1];
            	$content = substr($content, 0, $pos) . $decorated_outline . substr($content, $pos);
        	}
		}
    }
	return $content;
}
add_filter('the_content', 'add_outline');


/*＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
　       カスタム投稿
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝*/

add_action('init', 'register_post_type_and_taxonomy');

function register_post_type_and_taxonomy() {

	//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝施工事例追加
	register_post_type('works',
		array(
			'labels' => array(
			'name' => '施工事例',
			'add_new' => '新規施工事例を追加',
			'add_new_item' => '新規施工事例を追加',
			'view_item' => '施工事例を表示',
			'edit_item' => '施工事例の編集'
		),

		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_position' => 7,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array (
			'title',
			'editor',
			'excerpt',
			'custum-fields',
			'thumbnail',
			'page-attributes',
			'rewrite' => true,
			),
		)
	);

	register_post_type('events',
		array(
			'labels' => array(
			'name' => 'イベント',
			'add_new' => '新規イベントを追加',
			'add_new_item' => '新規イベントを追加',
			'view_item' => 'イベントを表示',
			'edit_item' => 'イベントの編集'
		),

		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => array (
			'title',
			'editor',
			'excerpt',
			'custum-fields',
			'thumbnail',
			'page-attributes',
			'rewrite' => true,
			),
		)
	);
}


//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝タクソノミー設定
add_action('init', 'create_works_taxonomies');

function create_works_taxonomies() {
	register_taxonomy('works_cat','works',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '施工事例カテゴリー',
			'singular_label' => '施工事例カテゴリー',
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true
			//'rewrite' => array('slug' => 'custom/cat')
		)
	);

	register_taxonomy('custom_tag', 'custom',
		array(
			'hierarchical' => false,
			'update_count_callback' => '_update_post_term_count',
			'label' => '施工事例タグ',
			'singular_label' => '施工事例タグ',
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true
			//'rewrite' => array('slug' => 'custom/tag')
		)
	);
}

//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝カスタム投稿を日付順に  削除不可

function change_post_types_admin_order($wp_query) {
	if (is_admin()) {
	  $post_type_array = array('works','event'); // カスタム投稿のスラッグ（複数の場合は,で区切る ex: 'aa','bb'）
	  $post_type = $wp_query->query['post_type'];
	  $get_orderby = get_query_var('orderby');
	  if ($post_type && $get_orderby) {
		if (in_array($post_type, $post_type_array) && $get_orderby === 'menu_order title') {
		  $wp_query->set('orderby', 'date'); // data = 日付
		  $wp_query->set('order', 'DESC'); // DESC = 降順
		}
	  }
	}
  }
  add_filter('pre_get_posts', 'change_post_types_admin_order');

//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝カスタムフィールドの値参照  削除不可

function add_meta_query_vars( $public_query_vars ) {
    $public_query_vars[] = 'meta_key';
    $public_query_vars[] = 'meta_value_num';
    return $public_query_vars;
}
add_filter( 'query_vars', 'add_meta_query_vars' );


// イベント　mw-wp-form 送信完了後に完了ページへ遷移
function my_mwform_after_send($Data) {
	$form_key = $Data->get_form_key();
	if($form_key === 'mw-wp-form-171') {
		wp_redirect('/complete/');
		exit;
	}
}
add_action('mwform_after_send_mw-wp-form-171', 'my_mwform_after_send');
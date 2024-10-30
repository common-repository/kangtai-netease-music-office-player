<?php

/*

Plugin Name: Official Player of Netease Music

Plugin URI: https://www.urapi.xin/netease-music-official-player-demo.html

Description: 使用短码[nm-song]504835560[/nm-song],添加网易云音乐官方播放器。

Version: 0.1

Author: 不是秀才

Author URI: https://kangtai.ren
*/

//网易云音乐单曲
function netease_music_official_function($atts, $content = null) {
    extract(shortcode_atts(array(
		'autoplay' => 0,
	), $atts));
	$playiframe = '<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width="330" height="86" src="//music.163.com/outchain/player?type=2&id='.$content.'&auto=0&height=66"></iframe>';
	return $playiframe;
}

function netease_music_official_shortcodes(){
	add_shortcode('nm-song', 'netease_music_official_function');
}

add_action('init', 'netease_music_official_shortcodes');



?>
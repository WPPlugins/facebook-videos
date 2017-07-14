<?php

/*
Plugin Name: Facebook Video's
Plugin URI: http://wordpress.org/extend/plugins/facebook-videos/
Description: Embed Facebook Video's with [fbvideo id="xxx"] shortcode.
Version: 1.0
Author: Mike de Bock
Author Email: info(at)mikedebock.nl
Author URI: http://www.masterwebber.nl/
*/

if (!function_exists('fbvideo_embed_shortcode')) {
    
    function fbvideo_embed_shortcode($atts, $content = null) {
       extract(shortcode_atts(array(
          "id" => '',
          "width" => '716',
          "height" => '403'
       ), $atts));
       
       $video_url = "http://www.facebook.com/v/{$id}";
       
       return '<object width="' . $width . '" height="' . $height . '" >
        <param name="allowfullscreen" value="true" />
        <param name="allowscriptaccess" value="always" />
        <param name="movie" value="' . $video_url . '" />
        <embed src="' . $video_url . '" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="' . $width . '" height="' . $height . '">
        </embed>
       </object>';
    }
    
    add_shortcode('fbvideo', 'fbvideo_embed_shortcode');
}
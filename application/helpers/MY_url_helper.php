<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('site_url'))

{

	function site_url($uri = '',$lang='')

	{

		$CI =& get_instance();

		if($lang=='')
		$lang = get_current_lang();

		$final_url = $CI->config->site_url($lang.'/'.$uri);

		$CI->load->config('common');
		if($CI->config->item('use_ssl')=='yes')
		$final_url = str_replace('http://','https://',$final_url); #uncomment this line if you want to force 

		return $final_url;

	}

}



if ( ! function_exists('base_url'))

{

	function base_url($uri = '')

	{

		$CI =& get_instance();

		$base_url = $CI->config->base_url($uri);

		$CI->load->config('common');
		
		if($CI->config->item('use_ssl')=='yes')
			$base_url = str_replace('http://','https://',$base_url);

		return $base_url;

	}

}


if ( ! function_exists('post_detail_url'))

{

	function post_detail_url($post)

	{

		$CI =& get_instance();
		$url = site_url('car/'.$post->unique_id); #never remove this line
		return $url;

	}

}

// added on version 1.7
if ( ! function_exists('get_the_current_url'))

{

	function get_the_current_url() {
	    
	    $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	    $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
	    $complete_url =   $base_url . $_SERVER["REQUEST_URI"];
	    
	    return $complete_url;
	     
	}

}
//end
<?php
/*
Bu sınıf 55utd55 tarafından kodlanmıştır.
Mail: 55utd55tht@gmail.com
*/
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
class burc{
	function yengec(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/yengec/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function kova(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/kova/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function koc(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/koc/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function oglak(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/oglak/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function aslan(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/aslan/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function akrep(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/akrep/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function yay(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/yay/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function ikizler(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/ikizler/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function boga(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/boga/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function basak(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/basak/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function balik(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/balik/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
	function terazi(){
		$a = file_get_contents("http://mahmure.hurriyet.com.tr/astroloji/burclar/terazi/");
		$b = ara("<p>","</p>",$a);
		$yorum = $b[1];
		return $yorum;
	}
}

?>
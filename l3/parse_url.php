<?php

//$url2="https://www.google.com.ua/search/uk?q=parse+url+php&oq=parse+url+php&aqs=chrome..69i57j0l5.4915j1j7&sourceid=chrome&ie=UTF-8";
$url3="https://dev20.pdffiller.com";

//var_dump (parse_url ($url1));

$options = getopt("u:");
var_dump($options);

$url1 = $options["u"] ?? $url3;

$schemeDelimiter = "://";
$domainDelimiter = ".";
$urlDelimiter = "/";
$queryDelimiter = "?";
$paramDelimiter = "&";

$scheme = parseByDelimiter($url1, $schemeDelimiter, 'scheme'); //var_dump($scheme);
$url = parseByDelimiter($scheme['scheme'.(count($scheme)-1)], $queryDelimiter, 'url'); //var_dump($url);
$path = parseByDelimiter($url['url0'], $urlDelimiter, 'path'); //var_dump($path);
$domains = parseByDelimiter($path['path0'], $domainDelimiter, 'domains'); //var_dump($domains);

function parseByDelimiter($str, $delimiter, $key) {
	$result = array();
	$rest;
	$parts_count = substr_count($str, $delimiter);
	
	for($i = 0; $i < $parts_count;$i++) {
		$result[$key.$i] = substr($str, 0, strpos($str, $delimiter));
		$str = str_replace_first($result[$key.$i].$delimiter, '', $str);
		
	}
	$result[$key.$parts_count] = $str;
	return $result;
}

function str_replace_first($from, $to, $content)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $content, 1);
}


if(array_key_exists('url1', $url)) {
	$params = parseByDelimiter($url['url1'], $paramDelimiter, 'params'); //var_dump($params);
}

$parsed['scheme'] = $scheme['scheme0'];

for($i = 0; $i < count($domains); $i++) {
	$parsed['domain'.$i] = $domains['domains'.$i];
}

for($i = 1; $i < count($path); $i++) {
	$parsed['path'.$i] = $path['path'.$i];
}

for($i = 0; isset($params) && $i < count($params); $i++) {
	$parsed['params'.$i] = $params['params'.$i];
}

var_export($parsed);
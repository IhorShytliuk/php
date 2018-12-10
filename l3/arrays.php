<?php

var_export([1,2,3,4,10]);

$arr = [
	1=>"number",
	"1"=>"string",
	"1.9"=>"string",
	1.9=>"float",
	true=>"bool",
	10 => "0",
	"11",
	"12",
	
];

var_dump($arr);

echo gettype($arr);

$arrNum = [1,2,3];

echo $arrNum[2];
echo "<br>";

echo count($arr). " " . sizeof($arr);
echo "<br>";
echo isset($arr[222]);
echo "<br>";
echo isset($arr[1]);
echo "<br>";
unset($arr[1]);
var_dump($arr);

$a = [1];
$b = [1];

echo $a === $b;

$userId = isset($arr['id']) ? $arr['id'] : null;
echo $userId;

$userId = $arr['id'] ?? 'default';
echo $userId;

$name = 'qwe';
$sname = 'rty';

$res = compact('name','sname');
var_dump($res);

$nestedArr = [
	[
	'id' => '1',
	'first_name' => 'first_name1',
	'last_name1' => 'last_name1',
	],
	[
	'id' => '2',
	'first_name' => 'first_name2',
	'last_name' => 'last_name2',
	],
	[
	'id' => '3',
	'first_name' => 'first_name3',
	'last_name' => 'last_name3',
	],
];

var_dump(array_column($nestedArr, 'first_name', 'id'));

//== //without type check
//=== //with type check

$s = 'string';
echo $s[0];
echo "<br>";

var_export((bool) '0');
var_export((bool) [1,2,3]);
var_export((bool) []);

if(0) {}
elseif (0) {}
else {}


$res = true ? "ok" : "bug";
echo $res;
$res = false ? "bug" : "ok";
echo $res;

function foo() {
	function bark() {
		echo "wuf";
	}
}
//no bark func
foo();
bark();
//    Throwable
//	/       \
//Exceptions  Errors

$item = 2;
$arr = [1,2,3,4,5];

$test = array_map(function($tem) use ($mult) { return $item*$mult}, $arr);


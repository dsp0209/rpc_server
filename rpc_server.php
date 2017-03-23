<?php
require_once "auth.php";
require_once "rpc/testjson.inc";

if(!isset($_SERVER['PHP_AUTH_USER'])){
	header('WWW-Authenticate: Basic realm="MyRealm"');
	header('HTTP/1.0 401 Unauthorized');
	exit;
} elseif(array_key_exists($_SERVER['PHP_AUTH_USER'], $auth) && $auth[$_SERVER['PHP_AUTH_USER']] == $_SERVER['PHP_AUTH_PW']){
		header("Content-type: application/json");
		$testjson = new TestJson();
		$arrobj = $testjson->__getShowMethods();
		foreach ($arrobj as $key => $value) {
		$item = $value->getData();
		echo json_encode($item);
		}
	}
	
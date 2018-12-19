<?php

if (isset($_POST['wechatid'])) {
	$wechatid = $_POST['wechatid'];
	if (file_exists('clients.xml')) {
		$clients_xml = simplexml_load_file('clients.xml');
	} else {
		exit('error');
	}
	$error = 0;
	foreach ($clients_xml->customer as $customer) {
		if ($wechatid == $customer) {
			++$error;
		}
	}
	if ($error == 0) {
		$clients_xml->addChild('customer', $wechatid);
		//echo $clients_xml->asXML();
		$dom = new DOMDocument('1.0');
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($clients_xml->asXML());
		echo $dom->saveXML();
		$dom->save('clients.xml');
		//print_r($clients_xml);
		//echo $clients_xml->asXML();
	}
	else {
		echo "-1";
	}
}
exit;
?>
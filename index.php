<?php
//$main_api = '4fe228aea0fc1e66ba98295b95209f0589b4032dcb0b86409737e075';
$main_api = 'eb40c4b717a7aaea2cf03033d34e09ca2d581123bb1534a9774af16f'; //test
//{"webhook":{"address":"http://157.245.5.124/","id":456514,"topic":"charge/created","version":"2021-01"}}
//https://requestbin.stage.rechargeapps.com/1573o7t1
//set a webhook

/*
$url = "https://api.rechargeapps.com/webhooks";
$body = '{
    "address": "https://requestbin.stage.rechargeapps.com/1kxt53m1",
    "topic": "charge/created"
}';
$ch = curl_init();

//set the target
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json","Content-Type: application/json","X-Recharge-Access-Token: ".$main_api));
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
// howmany parameter to post
curl_setopt($ch, CURLOPT_POST, 1);
// parameters

$result = curl_exec ($ch);
curl_close ($ch);

print $result;
*/

//list webhooks

$ch = curl_init("https://api.rechargeapps.com/webhooks");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json","Content-Type: application/json","X-Recharge-Access-Token: ".$main_api));
$res = curl_exec($ch);
curl_close($ch);
print $res;
/*
//delete webhooks

$url = "https://api.rechargeapps.com/webhooks/454915";
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Recharge-Access-Token: ".$main_api));

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $result;
*/
//get all webhooks
//https://api.rechargeapps.com/orders
//https://api.rechargeapps.com/webhooks
/*
$ch = curl_init("https://api.rechargeapps.com/charges");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json","Content-Type: application/json","X-Recharge-Access-Token: 4fe228aea0fc1e66ba98295b95209f0589b4032dcb0b86409737e075"));

$res = curl_exec($ch);
curl_close($ch);

print $res;
*/

//edit a webhook
/*
$url = "https://api.rechargeapps.com/webhooks/448515";
$data = '{
    "address": "http://157.245.5.124/recharge-dev.php"
}';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);


// Set options necessary for request.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json","X-Recharge-Access-Token: " . $main_api));
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Send request
$response = curl_exec($curl);
print $response;
*/

 //admin api
/*
$url = "https://tosistore.myshopify.com/admin/api/2021-04/products.json";
$ch = curl_init();

//set the target
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json","X-Shopify-Access-Token: 543442cffb347770ad551c69362ef6ff"));


$result = curl_exec ($ch);
curl_close ($ch);

print $result;
*/
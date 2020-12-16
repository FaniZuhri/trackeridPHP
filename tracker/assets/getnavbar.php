<?php $curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_PORT => "8443",
CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/TrackerID?fu=1&ty=3",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_POSTFIELDS => "",
CURLOPT_HTTPHEADER => array(
"Accept: application/json",
"Content-Type: application/json;ty=4",
"Postman-Token: d8c1d80a-8e2c-4481-a0ac-652478d63320",
"X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
"cache-control: no-cache"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$datalist = json_decode($response, true);
$datalist = $datalist['m2m:uril'];
?>
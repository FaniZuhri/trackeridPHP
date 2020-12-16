<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8443",
  CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/TrackerID/Device_A/la",
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
    "Postman-Token: b3e77d5d-86c6-4061-b199-dd736a5eaf58",
    "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $a= json_decode($response);
  $data = $a->{'m2m:cin'}->{'con'};
  $date = $a->{"m2m:cin"}->{"lt"} ;
  //$data1=json_decode($data);
//   $data1 = substr($data,20,1);
  // $datlat= substr($data,0,6);
  // $data2 = substr($data,13,5);
  $data_arr = explode (",", $data, 4);
  $datahex8 = 8388608;
  $datahex10 = 16777216;
  $countalarm=0;
  $countbatt=0;
  $dat1= substr($data,0,6);
  $dat11= hexdec($dat1);
  if ($dat11 and $datahex8 != $datahex8){
    //$dat21 = hexdec($dat2);
    $dats = 10000;
    $datlat = $dat11/$dats;
  }
  elseif ($dat11 and $datahex8 == $datahex8){
    $dat12 = $dat11-$datahex10;
    //$datlon = hexdec($dat21);
    $dats = 10000;
    $datlat = $dat12/$dats;
  }

  $dat2= substr($data,6,6);
  $dat22= hexdec($dat2);
  // $dat21= hexdec("$dat2");  //0x800000 = 8388608, 0x1000000 = 16777216
  if ($dat22 and $datahex8 == $datahex8){
    //$dat21 = hexdec($dat2);
    $dats = 10000;
    $datlong = $dat22/$dats;
  }

  elseif ($dat22 and $datahex8 != $datahex8){
    $dat21 = $dat22-$datahex10;
    //$datlon = hexdec($dat21);
    $dats = 10000;
    $datlong = $dat21/$dats;
  }

  $datalar1= substr($data,12,2);
  $datalarm3= hexdec($datalar1);
  $dat5= 64; $datalarm4= $datalarm3  & $dat5;
  if($datalarm4 != 0){
    //echo $datalarm & $dat3;
    $datalarm3='ON';
    $countalarm+=1;
  }
  else{
    $datalarm3='OFF';
    //echo 'halo';
  } 
  
  $datba1= substr($data,12,4);
          $datbat1= hexdec($datba1);
          $dat6= 16383;
          $datbatt1= $datbat1 & $dat6;
          $battery1= (($datbatt1/1000)/4)*100;
  if($battery1<=20){
    $countbatt+=1;

  }

          $ye=substr($date,0,4);
          $m=substr($date,4,2);
          $da=substr($date,6,2);
          $h=substr($date,9,2);
          $mi=substr($date,11,2);
          $se=substr($date,13,2);  
          //echo $date;
        //   echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
        $dateindex=$da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB';
//   else{
//     $countbatt=0;
//   }
}
?>
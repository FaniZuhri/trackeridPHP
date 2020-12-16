<?php
// $var = $_SERVER['QUERY_STRING'];
// if ($var=='DraginoTest'||"DraginoTest"||DraginoTest){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8443",
  CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/TrackerID/Device_A?fu=1&ty=4&drt=1&lim=10",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Connection: keep-alive",
    "Content-Type: application/json;ty=4",
    "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
    "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$data123 = json_decode($response, true);
//var_dump($response);
//echo $response;

$arrsh = array();
$date = array();
$dataall = array();
//echo $dataall;
$idlinkarr = array();
//print_r ($data123);  

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  for ($i=9; $i >=0 ; $i--) { 
    $getidlink = $data123["m2m:uril"][$i];
    $idlinkarr[] = $getidlink;
  }
  //print_r($idlinkarr);
}

$dataarr = array();
$xxx=0;
$datearr = array();
$yyy=0;
foreach ($idlinkarr as $key => $idlink) {
  $curl2 = curl_init();

  curl_setopt_array($curl2, array(
    CURLOPT_PORT => "8443",
    CURLOPT_URL => "https://platform.antares.id:8443/~".$idlink,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Accept: application/json",
      "Connection: keep-alive",
      "Content-Type: application/json;ty=4",
      "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
      "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
      "cache-control: no-cache"
    ),
  ));

  $response2 = curl_exec($curl2);
  $err2 = curl_error($curl2);
  
  curl_close($curl2);
  $data2=json_decode($response2);
  if ($err2) {
        echo "cURL Error #:" . $err2;
  } else{
      // for ($i=9; $i >=0 ; $i--) {} 
        $ambilcon2 = $data2->{"m2m:cin"}->{"con"};
        $ambiltime = $data2->{"m2m:cin"}->{"lt"} ;
      $dataarr[$xxx] = $ambilcon2;
      $datearr[$yyy] = $ambiltime;
      $yyy++;
      $xxx++;
  }    
  }; 
  //print_r($dataarr);
  $datebaru=$datearr;
  $databaru=$dataarr;

  $datahex88 = 8388608;
                  $datahex100 = 16777216;
                  $datlat=substr($databaru[9],0,6);
                  $datlat=hexdec($datlat);
            if ($datlat and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat = $datlat/$dats;
            }
            elseif ($datlat and $datahex88 == $datahex88){
              $dat12 = $datlat-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat = $dat12/$dats;
            }


        $datlong=substr($databaru[9],6,6);
        $datlong=hexdec($datlong);
        if ($datlong and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong = $datlong/$dats;
        }
        elseif ($datlong and $datahex88 != $datahex88){
          $dat12 = $datlong-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong = $dat12/$dats;
        }

        $datalar1= substr($databaru[9],12,2);
        $datalarm3= hexdec($datalar1);
        $dat5= 64; $datalarm4= $datalarm3  & $dat5;
        if($datalarm4 != 0){
          //echo $datalarm & $dat3;
          $datalarm3='ON';
        }
        else{
          $datalarm3='OFF';
          //echo 'halo';
        } 
        
        $datba1= substr($databaru[9],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;

        if($battery1>=0 && $battery1<=4){
          $percent=($battery1/4)*100;
        }
        else{
          $percent=0;
        }

                  $datahex88 = 8388608;
                  $datahex100 = 16777216;
                  $datlat9=substr($databaru[9],0,6);
                  $datlat9=hexdec($datlat9);
                  $datlat8=substr($databaru[8],0,6);
                  $datlat8=hexdec($datlat8);
                  $datlat7=substr($databaru[7],0,6);
                  $datlat7=hexdec($datlat7);
                  $datlat6=substr($databaru[6],0,6);
                  $datlat6=hexdec($datlat6);
                  $datlat5=substr($databaru[5],0,6);
                  $datlat5=hexdec($datlat5);
                  $datlat4=substr($databaru[4],0,6);
                  $datlat4=hexdec($datlat4);
                  $datlat3=substr($databaru[3],0,6);
                  $datlat3=hexdec($datlat3);
                  $datlat2=substr($databaru[2],0,6);
                  $datlat2=hexdec($datlat2);
                  $datlat1=substr($databaru[1],0,6);
                  $datlat1=hexdec($datlat1);
                  $datlat0=substr($databaru[0],0,6);
                  $datlat0=hexdec($datlat0);
            if ($datlat9 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat9 = $datlat9/$dats;
            }
            elseif ($datlat9 and $datahex88 == $datahex88){
              $dat12 = $datlat9-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat9 = $dat12/$dats;
            }
            if ($datlat8 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat8 = $datlat8/$dats;
            }
            elseif ($datlat8 and $datahex88 == $datahex88){
              $dat12 = $datlat8-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat8 = $dat12/$dats;
            }
            if ($datlat7 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat7 = $datlat7/$dats;
            }
            elseif ($datlat7 and $datahex88 == $datahex88){
              $dat12 = $datlat7-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat7 = $dat12/$dats;
            }
            if ($datlat6 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat6 = $datlat6/$dats;
            }
            elseif ($datlat6 and $datahex88 == $datahex88){
              $dat12 = $datlat6-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat6 = $dat12/$dats;
            }
            if ($datlat5 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat5 = $datlat5/$dats;
            }
            elseif ($datlat5 and $datahex88 == $datahex88){
              $dat12 = $datlat5-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat5 = $dat12/$dats;
            }
            if ($datlat4 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat4 = $datlat4/$dats;
            }
            elseif ($datlat4 and $datahex88 == $datahex88){
              $dat12 = $datlat4-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat4 = $dat12/$dats;
            }
            if ($datlat3 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat3 = $datlat3/$dats;
            }
            elseif ($datlat3 and $datahex88 == $datahex88){
              $dat12 = $datlat3-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat3 = $dat12/$dats;
            }
            if ($datlat2 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat2 = $datlat2/$dats;
            }
            elseif ($datlat2 and $datahex88 == $datahex88){
              $dat12 = $datlat2-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat2 = $dat12/$dats;
            }
            if ($datlat1 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat1 = $datlat1/$dats;
            }
            elseif ($datlat1 and $datahex88 == $datahex88){
              $dat12 = $datlat1-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat1 = $dat12/$dats;
            }
            if ($datlat0 and $datahex88 != $datahex88){
              //$dat21 = hexdec($dat2);
              $dats = 10000;
              $datlat0 = $datlat0/$dats;
            }
            elseif ($datlat0 and $datahex88 == $datahex88){
              $dat12 = $datlat0-$datahex100;
              //$datlon = hexdec($dat21);
              $dats = 10000;
              $datlat0 = $dat12/$dats;
            }
        
        $datlong9=substr($databaru[9],6,6);
        $datlong9=hexdec($datlong9);
        $datlong8=substr($databaru[8],6,6);
        $datlong8=hexdec($datlong8);
        $datlong7=substr($databaru[7],6,6);
        $datlong7=hexdec($datlong7);
        $datlong6=substr($databaru[6],6,6);
        $datlong6=hexdec($datlong6);
        $datlong5=substr($databaru[5],6,6);
        $datlong5=hexdec($datlong5);
        $datlong4=substr($databaru[4],6,6);
        $datlong4=hexdec($datlong4);
        $datlong3=substr($databaru[3],6,6);
        $datlong3=hexdec($datlong3);
        $datlong2=substr($databaru[2],6,6);
        $datlong2=hexdec($datlong2);
        $datlong1=substr($databaru[1],6,6);
        $datlong1=hexdec($datlong1);
        $datlong0=substr($databaru[0],6,6);
        $datlong0=hexdec($datlong0);
        if ($datlong9 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong9 = $datlong9/$dats;
        }
        elseif ($datlong9 and $datahex88 != $datahex88){
          $dat12 = $datlong9-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong9 = $dat12/$dats;
        }
        if ($datlong8 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong8 = $datlong8/$dats;
        }
        elseif ($datlong8 and $datahex88 != $datahex88){
          $dat12 = $datlong8-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong8 = $dat12/$dats;
        }
        if ($datlong7 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong7 = $datlong7/$dats;
        }
        elseif ($datlong7 and $datahex88 != $datahex88){
          $dat12 = $datlong7-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong7 = $dat12/$dats;
        }
        if ($datlong6 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong6 = $datlong6/$dats;
        }
        elseif ($datlong6 and $datahex88 != $datahex88){
          $dat12 = $datlong6-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong6 = $dat12/$dats;
        }
        if ($datlong5 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong5 = $datlong5/$dats;
        }
        elseif ($datlong5 and $datahex88 != $datahex88){
          $dat12 = $datlong5-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong5 = $dat12/$dats;
        }
        if ($datlong4 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong4 = $datlong4/$dats;
        }
        elseif ($datlong4 and $datahex88 != $datahex88){
          $dat12 = $datlong4-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong4 = $dat12/$dats;
        }
        if ($datlong3 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong3 = $datlong3/$dats;
        }
        elseif ($datlong3 and $datahex88 != $datahex88){
          $dat12 = $datlong3-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong3 = $dat12/$dats;
        }
        if ($datlong2 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong2 = $datlong2/$dats;
        }
        elseif ($datlong2 and $datahex88 != $datahex88){
          $dat12 = $datlong2-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong2 = $dat12/$dats;
        }
        if ($datlong1 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong1 = $datlong1/$dats;
        }
        elseif ($datlong1 and $datahex88 != $datahex88){
          $dat12 = $datlong1-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong1 = $dat12/$dats;
        }
        if ($datlong0 and $datahex88 == $datahex88){
          //$dat21 = hexdec($dat2);
          $dats = 10000;
          $datlong0 = $datlong0/$dats;
        }
        elseif ($datlong0 and $datahex88 != $datahex88){
          $dat12 = $datlong0-$datahex100;
          //$datlon = hexdec($dat21);
          $dats = 10000;
          $datlong0 = $dat12/$dats;
        }

    // }


    // if ($var=='TEST_ALE'||"TEST_ALE"||TEST_ALE){
    //     $curl = curl_init();
        
    //     curl_setopt_array($curl, array(
    //       CURLOPT_PORT => "8443",
    //       CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/AntaresDemo/TEST_ALE?fu=1&ty=4&drt=1&lim=10",
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => "",
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 30,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => "GET",
    //       CURLOPT_POSTFIELDS => "",
    //       CURLOPT_HTTPHEADER => array(
    //         "Accept: application/json",
    //         "Connection: keep-alive",
    //         "Content-Type: application/json;ty=4",
    //         "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
    //         "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
    //         "cache-control: no-cache"
    //       ),
    //     ));
        
    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
        
    //     curl_close($curl);
        
    //     $data123 = json_decode($response, true);
    //     //var_dump($response);
    //     //echo $response;
        
    //     $arrsh = array();
    //     $date = array();
    //     $dataall = array();
    //     //echo $dataall;
    //     $idlinkarr = array();
    //     //print_r ($data123);  
        
    //     if ($err) {
    //       echo "cURL Error #:" . $err;
    //     } else {
    //       for ($i=9; $i >=0 ; $i--) { 
    //         $getidlink = $data123["m2m:uril"][$i];
    //         $idlinkarr[] = $getidlink;
    //       }
    //       //print_r($idlinkarr);
    //     }
        
    //     $dataarr = array();
    //     $xxx=0;
    //     $datearr = array();
    //     $yyy=0;
    //     foreach ($idlinkarr as $key => $idlink) {
    //       $curl2 = curl_init();
        
    //       curl_setopt_array($curl2, array(
    //         CURLOPT_PORT => "8443",
    //         CURLOPT_URL => "https://platform.antares.id:8443/~".$idlink,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //           "Accept: application/json",
    //           "Connection: keep-alive",
    //           "Content-Type: application/json;ty=4",
    //           "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
    //           "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
    //           "cache-control: no-cache"
    //         ),
    //       ));
        
    //       $response2 = curl_exec($curl2);
    //       $err2 = curl_error($curl2);
          
    //       curl_close($curl2);
    //       $data2=json_decode($response2);
    //       if ($err2) {
    //             echo "cURL Error #:" . $err2;
    //       } else{
    //           // for ($i=9; $i >=0 ; $i--) {} 
    //             $ambilcon2 = $data2->{"m2m:cin"}->{"con"};
    //             $ambiltime = $data2->{"m2m:cin"}->{"lt"} ;
    //           $dataarr[$xxx] = $ambilcon2;
    //           $datearr[$yyy] = $ambiltime;
    //           $yyy++;
    //           $xxx++;
    //       }    
    //       }; 
    //       //print_r($dataarr);
    //       $datebaru=$datearr;
    //       $databaru=$dataarr;
        
    //       $datahex88 = 8388608;
    //                       $datahex100 = 16777216;
    //                       $datlat11=substr($databaru[9],0,6);
    //                       $datlat1=hexdec($datlat11);
    //                 if ($datlat1 and $datahex88 != $datahex88){
    //                   //$dat21 = hexdec($dat2);
    //                   $dats = 10000;
    //                   $datlat0 = $datlat1/$dats;
    //                 }
    //                 elseif ($datlat1 and $datahex88 == $datahex88){
    //                   $dat12 = $datlat1-$datahex100;
    //                   //$datlon = hexdec($dat21);
    //                   $dats = 10000;
    //                   $datlat0 = $dat12/$dats;
    //                 }
        
        
    //             $datlong11=substr($databaru[9],6,6);
    //             $datlong1=hexdec($datlong11);
    //             if ($datlong1 and $datahex88 == $datahex88){
    //               //$dat21 = hexdec($dat2);
    //               $dats = 10000;
    //               $datlong0 = $datlong1/$dats;
    //             }
    //             elseif ($datlong1 and $datahex88 != $datahex88){
    //               $dat12 = $datlong1-$datahex100;
    //               //$datlon = hexdec($dat21);
    //               $dats = 10000;
    //               $datlong0 = $dat12/$dats;
    //             }
        
    //             $datlong11=substr($databaru[9],6,6);
    //             $datlong1=hexdec($datlong11);
    //             if ($datlong1 and $datahex88 == $datahex88){
    //               //$dat21 = hexdec($dat2);
    //               $dats = 10000;
    //               $datlong0 = $datlong1/$dats;
    //             }
    //             elseif ($datlong1 and $datahex88 != $datahex88){
    //               $dat12 = $datlong1-$datahex100;
    //               //$datlon = hexdec($dat21);
    //               $dats = 10000;
    //               $datlong0 = $dat12/$dats;
    //             }
        
        
    //             $datalar1= substr($databaru[9],12,2);
    //             $datalarm3= hexdec($datalar1);
    //             $dat5= 64; $datalarm4= $datalarm3  & $dat5;
    //             if($datalarm4 != 0){
    //               //echo $datalarm & $dat3;
    //               $datalarm3='ON';
    //             }
    //             else{
    //               $datalarm3='OFF';
    //               //echo 'halo';
    //             } 
                
    //             $datba1= substr($databaru[9],12,4);
    //                     $datbat1= hexdec($datba1);
    //                     $dat6= 16383;
    //                     $datbatt1= $datbat1 & $dat6;
    //                     $battery1= $datbatt1/1000;
        
    //             if($battery1>=0 && $battery1<=4){
    //               $percent=($battery1/4)*100;
    //             }
    //             else{
    //               $percent=0;
    //             }
    //         }

            // if ($_SERVER['QUERY_STRING']=='LORA-ESP32'||"LORA-ESP32"){
            //     $curl = curl_init();
                
            //     curl_setopt_array($curl, array(
            //       CURLOPT_PORT => "8443",
            //       CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/AntaresDemo/LORA-ESP32?fu=1&ty=4&drt=1&lim=10",
            //       CURLOPT_RETURNTRANSFER => true,
            //       CURLOPT_ENCODING => "",
            //       CURLOPT_MAXREDIRS => 10,
            //       CURLOPT_TIMEOUT => 30,
            //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //       CURLOPT_CUSTOMREQUEST => "GET",
            //       CURLOPT_POSTFIELDS => "",
            //       CURLOPT_HTTPHEADER => array(
            //         "Accept: application/json",
            //         "Connection: keep-alive",
            //         "Content-Type: application/json;ty=4",
            //         "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
            //         "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
            //         "cache-control: no-cache"
            //       ),
            //     ));
                
            //     $response = curl_exec($curl);
            //     $err = curl_error($curl);
                
            //     curl_close($curl);
                
            //     $data123 = json_decode($response, true);
            //     //var_dump($response);
            //     //echo $response;
                
            //     $arrsh = array();
            //     $date = array();
            //     $dataall = array();
            //     //echo $dataall;
            //     $idlinkarr = array();
            //     //print_r ($data123);  
                
            //     if ($err) {
            //       echo "cURL Error #:" . $err;
            //     } else {
            //       for ($i=9; $i >=0 ; $i--) { 
            //         $getidlink = $data123["m2m:uril"][$i];
            //         $idlinkarr[] = $getidlink;
            //       }
            //       //print_r($idlinkarr);
            //     }
                
            //     $dataarr = array();
            //     $xxx=0;
            //     $datearr = array();
            //     $yyy=0;
            //     foreach ($idlinkarr as $key => $idlink) {
            //       $curl2 = curl_init();
                
            //       curl_setopt_array($curl2, array(
            //         CURLOPT_PORT => "8443",
            //         CURLOPT_URL => "https://platform.antares.id:8443/~".$idlink,
            //         CURLOPT_RETURNTRANSFER => true,
            //         CURLOPT_ENCODING => "",
            //         CURLOPT_MAXREDIRS => 10,
            //         CURLOPT_TIMEOUT => 30,
            //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //         CURLOPT_CUSTOMREQUEST => "GET",
            //         CURLOPT_HTTPHEADER => array(
            //           "Accept: application/json",
            //           "Connection: keep-alive",
            //           "Content-Type: application/json;ty=4",
            //           "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
            //           "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
            //           "cache-control: no-cache"
            //         ),
            //       ));
                
            //       $response2 = curl_exec($curl2);
            //       $err2 = curl_error($curl2);
                  
            //       curl_close($curl2);
            //       $data2=json_decode($response2);
            //       if ($err2) {
            //             echo "cURL Error #:" . $err2;
            //       } else{
            //           // for ($i=9; $i >=0 ; $i--) {} 
            //             $ambilcon2 = $data2->{"m2m:cin"}->{"con"};
            //             $ambiltime = $data2->{"m2m:cin"}->{"lt"} ;
            //           $dataarr[$xxx] = $ambilcon2;
            //           $datearr[$yyy] = $ambiltime;
            //           $yyy++;
            //           $xxx++;
            //       }    
            //       }; 
            //       //print_r($dataarr);
            //       $datebaru=$datearr;
            //       $databaru=$dataarr;
                
            //       $datahex88 = 8388608;
            //                       $datahex100 = 16777216;
            //                       $datlat11=substr($databaru[9],0,6);
            //                       $datlat1=hexdec($datlat11);
            //                 if ($datlat1 and $datahex88 != $datahex88){
            //                   //$dat21 = hexdec($dat2);
            //                   $dats = 10000;
            //                   $datlat0 = $datlat1/$dats;
            //                 }
            //                 elseif ($datlat1 and $datahex88 == $datahex88){
            //                   $dat12 = $datlat1-$datahex100;
            //                   //$datlon = hexdec($dat21);
            //                   $dats = 10000;
            //                   $datlat0 = $dat12/$dats;
            //                 }
                
                
            //             $datlong11=substr($databaru[9],6,6);
            //             $datlong1=hexdec($datlong11);
            //             if ($datlong1 and $datahex88 == $datahex88){
            //               //$dat21 = hexdec($dat2);
            //               $dats = 10000;
            //               $datlong0 = $datlong1/$dats;
            //             }
            //             elseif ($datlong1 and $datahex88 != $datahex88){
            //               $dat12 = $datlong1-$datahex100;
            //               //$datlon = hexdec($dat21);
            //               $dats = 10000;
            //               $datlong0 = $dat12/$dats;
            //             }
                
            //             $datlong11=substr($databaru[9],6,6);
            //             $datlong1=hexdec($datlong11);
            //             if ($datlong1 and $datahex88 == $datahex88){
            //               //$dat21 = hexdec($dat2);
            //               $dats = 10000;
            //               $datlong0 = $datlong1/$dats;
            //             }
            //             elseif ($datlong1 and $datahex88 != $datahex88){
            //               $dat12 = $datlong1-$datahex100;
            //               //$datlon = hexdec($dat21);
            //               $dats = 10000;
            //               $datlong0 = $dat12/$dats;
            //             }
                
                
            //             $datalar1= substr($databaru[9],12,2);
            //             $datalarm3= hexdec($datalar1);
            //             $dat5= 64; $datalarm4= $datalarm3  & $dat5;
            //             if($datalarm4 != 0){
            //               //echo $datalarm & $dat3;
            //               $datalarm3='ON';
            //             }
            //             else{
            //               $datalarm3='OFF';
            //               //echo 'halo';
            //             } 
                        
            //             $datba1= substr($databaru[9],12,4);
            //                     $datbat1= hexdec($datba1);
            //                     $dat6= 16383;
            //                     $datbatt1= $datbat1 & $dat6;
            //                     $battery1= $datbatt1/1000;
                
            //             if($battery1>=0 && $battery1<=4){
            //               $percent=($battery1/4)*100;
            //             }
            //             else{
            //               $percent=0;
            //             }
            //         }


            //         if ($_SERVER['QUERY_STRING']=='LORA-ARDUINO'||"LORA-ARDUINO"){
            //             $curl = curl_init();
                        
            //             curl_setopt_array($curl, array(
            //               CURLOPT_PORT => "8443",
            //               CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/AntaresDemo/LORA-ARDUINO?fu=1&ty=4&drt=1&lim=10",
            //               CURLOPT_RETURNTRANSFER => true,
            //               CURLOPT_ENCODING => "",
            //               CURLOPT_MAXREDIRS => 10,
            //               CURLOPT_TIMEOUT => 30,
            //               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //               CURLOPT_CUSTOMREQUEST => "GET",
            //               CURLOPT_POSTFIELDS => "",
            //               CURLOPT_HTTPHEADER => array(
            //                 "Accept: application/json",
            //                 "Connection: keep-alive",
            //                 "Content-Type: application/json;ty=4",
            //                 "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
            //                 "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
            //                 "cache-control: no-cache"
            //               ),
            //             ));
                        
            //             $response = curl_exec($curl);
            //             $err = curl_error($curl);
                        
            //             curl_close($curl);
                        
            //             $data123 = json_decode($response, true);
            //             //var_dump($response);
            //             //echo $response;
                        
            //             $arrsh = array();
            //             $date = array();
            //             $dataall = array();
            //             //echo $dataall;
            //             $idlinkarr = array();
            //             //print_r ($data123);  
                        
            //             if ($err) {
            //               echo "cURL Error #:" . $err;
            //             } else {
            //               for ($i=9; $i >=0 ; $i--) { 
            //                 $getidlink = $data123["m2m:uril"][$i];
            //                 $idlinkarr[] = $getidlink;
            //               }
            //               //print_r($idlinkarr);
            //             }
                        
            //             $dataarr = array();
            //             $xxx=0;
            //             $datearr = array();
            //             $yyy=0;
            //             foreach ($idlinkarr as $key => $idlink) {
            //               $curl2 = curl_init();
                        
            //               curl_setopt_array($curl2, array(
            //                 CURLOPT_PORT => "8443",
            //                 CURLOPT_URL => "https://platform.antares.id:8443/~".$idlink,
            //                 CURLOPT_RETURNTRANSFER => true,
            //                 CURLOPT_ENCODING => "",
            //                 CURLOPT_MAXREDIRS => 10,
            //                 CURLOPT_TIMEOUT => 30,
            //                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //                 CURLOPT_CUSTOMREQUEST => "GET",
            //                 CURLOPT_HTTPHEADER => array(
            //                   "Accept: application/json",
            //                   "Connection: keep-alive",
            //                   "Content-Type: application/json;ty=4",
            //                   "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
            //                   "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
            //                   "cache-control: no-cache"
            //                 ),
            //               ));
                        
            //               $response2 = curl_exec($curl2);
            //               $err2 = curl_error($curl2);
                          
            //               curl_close($curl2);
            //               $data2=json_decode($response2);
            //               if ($err2) {
            //                     echo "cURL Error #:" . $err2;
            //               } else{
            //                   // for ($i=9; $i >=0 ; $i--) {} 
            //                     $ambilcon2 = $data2->{"m2m:cin"}->{"con"};
            //                     $ambiltime = $data2->{"m2m:cin"}->{"lt"} ;
            //                   $dataarr[$xxx] = $ambilcon2;
            //                   $datearr[$yyy] = $ambiltime;
            //                   $yyy++;
            //                   $xxx++;
            //               }    
            //               }; 
            //               //print_r($dataarr);
            //               $datebaru=$datearr;
            //               $databaru=$dataarr;
                        
            //               $datahex88 = 8388608;
            //                               $datahex100 = 16777216;
            //                               $datlat11=substr($databaru[9],0,6);
            //                               $datlat1=hexdec($datlat11);
            //                         if ($datlat1 and $datahex88 != $datahex88){
            //                           //$dat21 = hexdec($dat2);
            //                           $dats = 10000;
            //                           $datlat0 = $datlat1/$dats;
            //                         }
            //                         elseif ($datlat1 and $datahex88 == $datahex88){
            //                           $dat12 = $datlat1-$datahex100;
            //                           //$datlon = hexdec($dat21);
            //                           $dats = 10000;
            //                           $datlat0 = $dat12/$dats;
            //                         }
                        
                        
            //                     $datlong11=substr($databaru[9],6,6);
            //                     $datlong1=hexdec($datlong11);
            //                     if ($datlong1 and $datahex88 == $datahex88){
            //                       //$dat21 = hexdec($dat2);
            //                       $dats = 10000;
            //                       $datlong0 = $datlong1/$dats;
            //                     }
            //                     elseif ($datlong1 and $datahex88 != $datahex88){
            //                       $dat12 = $datlong1-$datahex100;
            //                       //$datlon = hexdec($dat21);
            //                       $dats = 10000;
            //                       $datlong0 = $dat12/$dats;
            //                     }
                        
            //                     $datlong11=substr($databaru[9],6,6);
            //                     $datlong1=hexdec($datlong11);
            //                     if ($datlong1 and $datahex88 == $datahex88){
            //                       //$dat21 = hexdec($dat2);
            //                       $dats = 10000;
            //                       $datlong0 = $datlong1/$dats;
            //                     }
            //                     elseif ($datlong1 and $datahex88 != $datahex88){
            //                       $dat12 = $datlong1-$datahex100;
            //                       //$datlon = hexdec($dat21);
            //                       $dats = 10000;
            //                       $datlong0 = $dat12/$dats;
            //                     }
                        
                        
            //                     $datalar1= substr($databaru[9],12,2);
            //                     $datalarm3= hexdec($datalar1);
            //                     $dat5= 64; $datalarm4= $datalarm3  & $dat5;
            //                     if($datalarm4 != 0){
            //                       //echo $datalarm & $dat3;
            //                       $datalarm3='ON';
            //                     }
            //                     else{
            //                       $datalarm3='OFF';
            //                       //echo 'halo';
            //                     } 
                                
            //                     $datba1= substr($databaru[9],12,4);
            //                             $datbat1= hexdec($datba1);
            //                             $dat6= 16383;
            //                             $datbatt1= $datbat1 & $dat6;
            //                             $battery1= $datbatt1/1000;
                        
            //                     if($battery1>=0 && $battery1<=4){
            //                       $percent=($battery1/4)*100;
            //                     }
            //                     else{
            //                       $percent=0;
            //                     }
            //                 }
                            
                            
            //                 if ($_SERVER['QUERY_STRING']=='Rahasia'||"Rahasia"){
            //                     $curl = curl_init();
                                
            //                     curl_setopt_array($curl, array(
            //                       CURLOPT_PORT => "8443",
            //                       CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/AntaresDemo/Rahasia?fu=1&ty=4&drt=1&lim=10",
            //                       CURLOPT_RETURNTRANSFER => true,
            //                       CURLOPT_ENCODING => "",
            //                       CURLOPT_MAXREDIRS => 10,
            //                       CURLOPT_TIMEOUT => 30,
            //                       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //                       CURLOPT_CUSTOMREQUEST => "GET",
            //                       CURLOPT_POSTFIELDS => "",
            //                       CURLOPT_HTTPHEADER => array(
            //                         "Accept: application/json",
            //                         "Connection: keep-alive",
            //                         "Content-Type: application/json;ty=4",
            //                         "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
            //                         "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
            //                         "cache-control: no-cache"
            //                       ),
            //                     ));
                                
            //                     $response = curl_exec($curl);
            //                     $err = curl_error($curl);
                                
            //                     curl_close($curl);
                                
            //                     $data123 = json_decode($response, true);
            //                     //var_dump($response);
            //                     //echo $response;
                                
            //                     $arrsh = array();
            //                     $date = array();
            //                     $dataall = array();
            //                     //echo $dataall;
            //                     $idlinkarr = array();
            //                     //print_r ($data123);  
                                
            //                     if ($err) {
            //                       echo "cURL Error #:" . $err;
            //                     } else {
            //                       for ($i=9; $i >=0 ; $i--) { 
            //                         $getidlink = $data123["m2m:uril"][$i];
            //                         $idlinkarr[] = $getidlink;
            //                       }
            //                       //print_r($idlinkarr);
            //                     }
                                
            //                     $dataarr = array();
            //                     $xxx=0;
            //                     $datearr = array();
            //                     $yyy=0;
            //                     foreach ($idlinkarr as $key => $idlink) {
            //                       $curl2 = curl_init();
                                
            //                       curl_setopt_array($curl2, array(
            //                         CURLOPT_PORT => "8443",
            //                         CURLOPT_URL => "https://platform.antares.id:8443/~".$idlink,
            //                         CURLOPT_RETURNTRANSFER => true,
            //                         CURLOPT_ENCODING => "",
            //                         CURLOPT_MAXREDIRS => 10,
            //                         CURLOPT_TIMEOUT => 30,
            //                         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //                         CURLOPT_CUSTOMREQUEST => "GET",
            //                         CURLOPT_HTTPHEADER => array(
            //                           "Accept: application/json",
            //                           "Connection: keep-alive",
            //                           "Content-Type: application/json;ty=4",
            //                           "Postman-Token: 7b21b5f6-4a75-4a71-9b61-d652fa97df59",
            //                           "X-M2M-Origin: e7e349fc2216941a:9d0cf82c25277bdd",
            //                           "cache-control: no-cache"
            //                         ),
            //                       ));
                                
            //                       $response2 = curl_exec($curl2);
            //                       $err2 = curl_error($curl2);
                                  
            //                       curl_close($curl2);
            //                       $data2=json_decode($response2);
            //                       if ($err2) {
            //                             echo "cURL Error #:" . $err2;
            //                       } else{
            //                           // for ($i=9; $i >=0 ; $i--) {} 
            //                             $ambilcon2 = $data2->{"m2m:cin"}->{"con"};
            //                             $ambiltime = $data2->{"m2m:cin"}->{"lt"} ;
            //                           $dataarr[$xxx] = $ambilcon2;
            //                           $datearr[$yyy] = $ambiltime;
            //                           $yyy++;
            //                           $xxx++;
            //                       }    
            //                       }; 
            //                       //print_r($dataarr);
            //                       $datebaru=$datearr;
            //                       $databaru=$dataarr;
                                
            //                       $datahex88 = 8388608;
            //                                       $datahex100 = 16777216;
            //                                       $datlat11=substr($databaru[9],0,6);
            //                                       $datlat1=hexdec($datlat11);
            //                                 if ($datlat1 and $datahex88 != $datahex88){
            //                                   //$dat21 = hexdec($dat2);
            //                                   $dats = 10000;
            //                                   $datlat0 = $datlat1/$dats;
            //                                 }
            //                                 elseif ($datlat1 and $datahex88 == $datahex88){
            //                                   $dat12 = $datlat1-$datahex100;
            //                                   //$datlon = hexdec($dat21);
            //                                   $dats = 10000;
            //                                   $datlat0 = $dat12/$dats;
            //                                 }
                                
                                
            //                             $datlong11=substr($databaru[9],6,6);
            //                             $datlong1=hexdec($datlong11);
            //                             if ($datlong1 and $datahex88 == $datahex88){
            //                               //$dat21 = hexdec($dat2);
            //                               $dats = 10000;
            //                               $datlong0 = $datlong1/$dats;
            //                             }
            //                             elseif ($datlong1 and $datahex88 != $datahex88){
            //                               $dat12 = $datlong1-$datahex100;
            //                               //$datlon = hexdec($dat21);
            //                               $dats = 10000;
            //                               $datlong0 = $dat12/$dats;
            //                             }
                                
            //                             $datlong11=substr($databaru[9],6,6);
            //                             $datlong1=hexdec($datlong11);
            //                             if ($datlong1 and $datahex88 == $datahex88){
            //                               //$dat21 = hexdec($dat2);
            //                               $dats = 10000;
            //                               $datlong0 = $datlong1/$dats;
            //                             }
            //                             elseif ($datlong1 and $datahex88 != $datahex88){
            //                               $dat12 = $datlong1-$datahex100;
            //                               //$datlon = hexdec($dat21);
            //                               $dats = 10000;
            //                               $datlong0 = $dat12/$dats;
            //                             }
                                
                                
            //                             $datalar1= substr($databaru[9],12,2);
            //                             $datalarm3= hexdec($datalar1);
            //                             $dat5= 64; $datalarm4= $datalarm3  & $dat5;
            //                             if($datalarm4 != 0){
            //                               //echo $datalarm & $dat3;
            //                               $datalarm3='ON';
            //                             }
            //                             else{
            //                               $datalarm3='OFF';
            //                               //echo 'halo';
            //                             } 
                                        
            //                             $datba1= substr($databaru[9],12,4);
            //                                     $datbat1= hexdec($datba1);
            //                                     $dat6= 16383;
            //                                     $datbatt1= $datbat1 & $dat6;
            //                                     $battery1= $datbatt1/1000;
                                
            //                             if($battery1>=0 && $battery1<=4){
            //                               $percent=($battery1/4)*100;
            //                             }
            //                             else{
            //                               $percent=0;
            //                             }
            //                         }
?>
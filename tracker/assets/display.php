<?php 
function sidebar(){
?><ul class="navbar-nav sidebar sidebar-dark accordion bg-gradient-danger" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon">
    <i class="fas fa-map-marker-alt"></i>
  </div>
  <div class="sidebar-brand-text mx-3" align="left" style="text-transform:capitalize;font-size:larger">TrackerID</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-home"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-tools"></i>
    <span>Devices</span>
  </a>
  <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">List</h6>
      <div id="devnav" >
      <?php

$curl = curl_init();

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
if ($err) {
echo "cURL Error #:" . $err;
} else {

//print_r ($datalist);
foreach($datalist as $data)
{
echo '<a class="collapse-item" href="perangkat-a.php?'.substr($data,34,100).'">'.substr($data,34,100).'</a>';
// while($baris = mysqli_fetch_assoc($response)) {
//   $js .= '<a href="coba.php?monitor='.($baris[""]).'" class="collapse-item">'.$baris[""].'</a>
//       ';
//   }
// echo $js;
}
}
?>
</div>
<?php
      
// echo '<a class="collapse-item" href="perangkat-a.php">Device 1</a>' ?>
      <!-- <a class="collapse-item" href="perangkat-a.php">Water Meter 1</a> -->
    </div>
  </div>
</li>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul><?php }


function navbarindex(){
  ?>
   <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fas fa-bars" style="color:#cf4c45"></i>
</button>
<div>
<span class="mr-2 d-none d-lg-inline text-gray-600 medium" style="font-size:larger">Dashboard</span>
</div>
<!-- Topbar Search -->
<!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn bg-light" type="button">
        <i class="fas fa-search fa-sm" style="color:#016191"></i>
      </button>
    </div>
  </div>
</form> -->

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
  <!-- <li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-search fa-fw"></i>
    </a> -->
    <!-- Dropdown - Messages -->
    <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
      <form class="form-inline mr-auto w-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li> -->
  <!-- <li class="nav-item d-sm-none">
  <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php echo $_SESSION['user'];?></span>
  </li> -->

  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php echo $_SESSION['user'];?></span>
      <i class="fas fa-user rounded-circle"></i>
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>

</ul>

</nav>
  
  
  <?php 
}

function navbardevice(){
  ?>
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
 <i class="fas fa-bars" style="color:#cf4c45"></i>
</button>
<div>
<!-- <a href="index.php" class="mr-2 d-none d-lg-inline text-gray-600 medium">Dashboard</a>
<a class="mr-2 d-none d-lg-inline text-gray-600 medium">/</a> -->
<span class="mr-2 d-none d-lg-inline text-gray-600 medium" style="font-size:larger"><?php echo $_SERVER['QUERY_STRING']?></span>
</div>
<!-- Topbar Search -->
<!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
 <div class="input-group">
   <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
   <div class="input-group-append">
     <button class="btn bg-light" type="button">
       <i class="fas fa-search fa-sm" style="color:#016191"></i>
     </button>
   </div>
 </div>
</form> -->

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
 <!-- Nav Item - Search Dropdown (Visible Only XS) -->
 <!-- <li class="nav-item dropdown no-arrow d-sm-none">
   <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="fas fa-search fa-fw"></i>
   </a> -->
   <!-- Dropdown - Messages -->
   <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
     <form class="form-inline mr-auto w-100 navbar-search">
       <div class="input-group">
         <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
         <div class="input-group-append">
           <button class="btn btn-primary" type="button">
             <i class="fas fa-search fa-sm"></i>
           </button>
         </div>
       </div>
     </form>
   </div>
 </li> -->

 <div class="topbar-divider d-none d-sm-block">
 </div>

 <!-- Nav Item - User Information -->
 <li class="nav-item dropdown no-arrow">
   <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php echo$_SESSION['user'];?></span>
     <i class="fas fa-user rounded-circle"></i>
   </a>
   <!-- Dropdown - User Information -->
   <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
       <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
       Logout
     </a>
   </div>
 </li>

</ul>

</nav>
  <?php
} function carddev(){
  include "assets/getdev.php";
  ?>
  <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Current Location</div>
                      <div id="loc" class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $datlat9 ?>,<?php echo $datlong9?>
                      </div>
                      <div class="text-xs  text-grey ">Current Lattitude,Longitude</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card View -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Battery Life</div>
                      <div id="batt" class="h4 mb-0 font-weight-bold text-gray-800"><?php echo substr($percent,0,4);?>% </div>
                      <div class="text-xs  text-grey ">Current Battery Measurement</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-battery-half fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alarm Status</div>
                      <!-- <label class="switch">
                       <input type="checkbox" id="checkbx" checked>
                        <span class="slider round"></span>
		                    	<div class="col-md-4">
		                      	<p style="margin-left:70px;width:80px;margin-top:5px;"><span style="" id="buka">ON</span></p>
		                    	</div>
                       </label> -->
                       <div id="alarm" class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $datalarm3?> </div>
                      <div class="text-xs  text-grey " id="dateupdate">
                        <?php $date=$datearr[9];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?>
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bell fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  <?php
} function detailsdevice(){
  include "assets/getdev.php";
  ?>
              <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Device details </h6>
                </div>


                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: 525px">

                  <!-- Device Details -->
                  <table class="table">
		               <tbody>
		                 <tr>
				             <td>
                       <img src="img/meter1.png" style="weight:70px;height:70px;">
                       </td>
	              			 <td>Device Name</td>
                       <td><?php echo $_SERVER['QUERY_STRING']?></td>
			             </tr>
			             <tr>
                   <td>
                       <img src="img/owner.png" style="weight:70px;height:70px;">
                       </td>
			              	 <td>Owner</td>
                       <td>Antares</td>
                         </tr>
                         <tr>
                         <td> 
                          <img src="img/address1.png" style="weight:70px;height:70px;">
                       </td>
			              	 <td>Location</td>
                       <td><div id="lat1"><?php echo $datlat9,',',$datlong9;?></div></td>
			             </tr>
                   <tr>
                         <td>
                         <img src="img/battery1.png" style="weight:70px;height:70px;">
                         </td>
			              	 <td>Voltage</td>
                       <td><div id="batt1"><?php echo $battery1;?> Volt</div></td>
			             </tr>
                   <tr>
                         <td>
                         <!-- <img src="img/battery.png" style="weight:70px;height:70px;"> -->
                         </td>
			              	 <!-- <td>Voltage</td> -->
                       <td></td>
                       <td></td>
			             </tr>
                 </tbody>
                  </table>

                    <!-- <div>
                      <a type=submit class="btn btn-user btn-block"  href="assets/history.php" style="background-color:#016191;color:#FFFFFF;"> Usage History</a>
                    </div> -->

                    <a id="update" class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat0.','.$datlong0;?>" target="blank">Go To Latest Location</a>
                  </div>
                </div>
              </div>
            </div>
  <?php
} function mapsdevice(){
  include "assets/getdev.php";
  ?>
              <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Location</h6>
                </div>
                <!-- Card Body -->

                
                <div class="card-body" id="update1">
                  <div id="mapid" style ="width: 100%; height:500px;"></div>
                  <div class="mt-4 text-center small">
                      </div>
                     <script>
                    var a = "<?php echo $datlat9?>";
                    var aa = "<?php echo $datlong9?>";
                    var b = "<?php echo $datlat8?>";
                    var bb = "<?php echo $datlong8?>";
                    var c = "<?php echo $datlat7?>";
                    var cc = "<?php echo $datlong7?>";
                    var d = "<?php echo $datlat6?>";
                    var dd = "<?php echo $datlong6?>";
                    var e = "<?php echo $datlat5?>";
                    var ee = "<?php echo $datlong5?>";
                    var f = "<?php echo $datlat4?>";
                    var ff = "<?php echo $datlong4?>";
                    var g = "<?php echo $datlat3?>";
                    var gg = "<?php echo $datlong3?>";
                    var h = "<?php echo $datlat2?>";
                    var hh = "<?php echo $datlong2?>";
                    var i = "<?php echo $datlat1?>";
                    var ii = "<?php echo $datlong1?>";
                    var j = "<?php echo $datlat0?>";
                    var jj = "<?php echo $datlong0?>";
                     var mymap = L.map('mapid').setView([a,aa], 15);
                     L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                     maxZoom: 18,
                     id: 'mapbox.streets',
                     accessToken: 'pk.eyJ1IjoiYXNtYXlhbnppYWgxMSIsImEiOiJjazA3czhmMjUwM3Q1M2NvN3Vhc2xldWwyIn0.F5Yi5mxRvuph73RFsl-6cA'
                     }).addTo(mymap);
                     var marker = L.marker([a,aa]).addTo(mymap).bindPopup('NOW').openPopup();
                     var marker = L.marker([b,bb]).addTo(mymap).bindPopup('9');
                     var marker = L.marker([c,cc]).addTo(mymap).bindPopup('8');
                     var marker = L.marker([d,dd]).addTo(mymap).bindPopup('7');
                     var marker = L.marker([e,ee]).addTo(mymap).bindPopup('6');
                     var marker = L.marker([f,ff]).addTo(mymap).bindPopup('5');
                     var marker = L.marker([g,gg]).addTo(mymap).bindPopup('4');
                     var marker = L.marker([h,hh]).addTo(mymap).bindPopup('3');
                     var marker = L.marker([i,ii]).addTo(mymap).bindPopup('2');
                     var marker = L.marker([j,jj]).addTo(mymap).bindPopup('1');
                    </script> 
                      
                  </div>
                </div>
              </div>
  <?php 
} function tabledevice(){
  include "assets/getdev.php";
  ?>
              <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Device Data</h6>
              </div>
                <!-- Card Body -->
                 <div class="card-body">
                 <table class="table table-borderless table-hover" id="load_devdat">
                 <div>
</div>
    <thead>
      <tr>
        <th>Time</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Alarm</th>
        <th>Battery</th>
        <th>Go To Maps</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php $date=$datearr[9];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?></td>
        <td><?php echo$datlat9;
        ?></td>
        <td><?php
        echo $datlong9;
        ?></td>
        <td><?php $datalar1= substr($databaru[9],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
        <td><?php 
                $datba1= substr($databaru[9],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;
                echo$battery1.' Volt';
        ?></td>
        <td>
        <a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat9.','.$datlong9;?>" target="blank">Click Here</a>
        </td>
      </tr>
      <tr>

        <td><?php $date=$datearr[8];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?></td>
        <td><?php echo$datlat8;
        ?></td>
        <td><?php
        echo $datlong8;
        ?></td>
        <td><?php $datalar1= substr($databaru[8],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
        <td><?php 
                $datba1= substr($databaru[8],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;
                echo$battery1.' Volt';
        ?></td>
        <td>
        <a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat8.','.$datlong8;?>" target="blank">Click Here</a>
        </td>
      </tr>

      <tr>

        <td><?php $date=$datearr[7];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?></td>
        <td><?php echo$datlat7;
        ?></td>
        <td><?php echo $datlong7;
        ?></td>
        <td><?php $datalar1= substr($databaru[7],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
        <td><?php 
                $datba1= substr($databaru[7],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;
                echo$battery1.' Volt';
        ?></td>
        <td>
        <a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat7.','.$datlong7;?>" target="blank">Click Here</a>
        </td>
      </tr>

      <tr>

<td><?php $date=$datearr[6];
          $ye=substr($date,0,4);
          $m=substr($date,4,2);
          $da=substr($date,6,2);
          $h=substr($date,9,2);
          $mi=substr($date,11,2);
          $se=substr($date,13,2);  
          //echo $date;
          echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
           ?></td>
<td><?php echo$datlat6;
?></td>
<td><?php echo $datlong6;
?></td>
<td><?php $datalar1= substr($databaru[6],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
<td><?php 
        $datba1= substr($databaru[6],12,4);
        $datbat1= hexdec($datba1);
        $dat6= 16383;
        $datbatt1= $datbat1 & $dat6;
        $battery1= $datbatt1/1000;
        echo$battery1.' Volt';
?></td>
<td>
<a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat6.','.$datlong6;?>" target="blank">Click Here</a>
</td>
</tr>

<tr>

<td><?php $date=$datearr[5];
          $ye=substr($date,0,4);
          $m=substr($date,4,2);
          $da=substr($date,6,2);
          $h=substr($date,9,2);
          $mi=substr($date,11,2);
          $se=substr($date,13,2);  
          //echo $date;
          echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
           ?></td>
<td><?php echo$datlat5;
?></td>
<td><?php echo $datlong5;
?></td>
<td><?php $datalar1= substr($databaru[5],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
<td><?php 
        $datba1= substr($databaru[5],12,4);
        $datbat1= hexdec($datba1);
        $dat6= 16383;
        $datbatt1= $datbat1 & $dat6;
        $battery1= $datbatt1/1000;
        echo$battery1.' Volt';
?></td>
<td>
<a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat5.','.$datlong5;?>" target="blank">Click Here</a>
</td>
</tr>


<tr>
        <td><?php $date=$datearr[4];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?></td>
        <td><?php echo$datlat4;
        ?></td>
        <td><?php echo $datlong4;
        ?></td>
        <td><?php $datalar1= substr($databaru[4],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
        <td><?php 
                $datba1= substr($databaru[4],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;
                echo$battery1.' Volt';
        ?></td>
        <td>
        <a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat4.','.$datlong4;?>" target="blank">Click Here</a>
        </td>
      </tr>
      <tr>

        <td><?php $date=$datearr[3];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?></td>
        <td><?php echo$datlat3;
        ?></td>
        <td><?php
        echo $datlong3;
        ?></td>
        <td><?php $datalar1= substr($databaru[3],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
        <td><?php 
                $datba1= substr($databaru[3],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;
                echo$battery1.' Volt';
        ?></td>
        <td>
        <a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat3.','.$datlong3;?>" target="blank">Click Here</a>
        </td>
      </tr>

      <tr>

        <td><?php $date=$datearr[2];
                  $ye=substr($date,0,4);
                  $m=substr($date,4,2);
                  $da=substr($date,6,2);
                  $h=substr($date,9,2);
                  $mi=substr($date,11,2);
                  $se=substr($date,13,2);  
                  //echo $date;
                  echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
                   ?></td>
        <td><?php echo$datlat2;
        ?></td>
        <td><?php echo $datlong2;
        ?></td>
        <td><?php $datalar1= substr($databaru[2],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
        <td><?php 
                $datba1= substr($databaru[2],12,4);
                $datbat1= hexdec($datba1);
                $dat6= 16383;
                $datbatt1= $datbat1 & $dat6;
                $battery1= $datbatt1/1000;
                echo$battery1.' Volt';
        ?></td>
        <td>
        <a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat2.','.$datlong2;?>" target="blank">Click Here</a>
        </td>
      </tr>

      <tr>

<td><?php $date=$datearr[1];
          $ye=substr($date,0,4);
          $m=substr($date,4,2);
          $da=substr($date,6,2);
          $h=substr($date,9,2);
          $mi=substr($date,11,2);
          $se=substr($date,13,2);  
          //echo $date;
          echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
           ?></td>
<td><?php echo$datlat1;
?></td>
<td><?php
echo $datlong1;
?></td>
<td><?php $datalar1= substr($databaru[1],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
<td><?php 
        $datba1= substr($databaru[1],12,4);
        $datbat1= hexdec($datba1);
        $dat6= 16383;
        $datbatt1= $datbat1 & $dat6;
        $battery1= $datbatt1/1000;
        echo$battery1.' Volt';
?></td>
<td>
<a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat1.','.$datlong1;?>" target="blank">Click Here</a>
</td>
</tr>

<tr>

<td><?php $date=$datearr[0];
          $ye=substr($date,0,4);
          $m=substr($date,4,2);
          $da=substr($date,6,2);
          $h=substr($date,9,2);
          $mi=substr($date,11,2);
          $se=substr($date,13,2);  
          //echo $date;
          echo $da.'-'.$m.'-'.$ye.' '.$h.':'.$mi.':'.$se.' WIB'; 
           ?></td>
<td><?php echo$datlat0;
?></td>
<td><?php
echo $datlong0;
?></td>
<td><?php $datalar1= substr($databaru[0],12,2);
          $datalarm3= hexdec($datalar1);
          $dat5= 64; $datalarm4= $datalarm3  & $dat5;
          if($datalarm4 != 0){
            //echo $datalarm & $dat3;
            $datalarm3='ON';
          }
          else{
            $datalarm3='OFF';
            //echo 'halo';
          } echo $datalarm3;
          ?></td>
<td><?php 
        $datba1= substr($databaru[0],12,4);
        $datbat1= hexdec($datba1);
        $dat6= 16383;
        $datbatt1= $datbat1 & $dat6;
        $battery1= $datbatt1/1000;
        echo$battery1.' Volt';
?></td>
<td>
<a class="text-danger font-weight-bold" style="text-decoration:none;" href="https://www.google.com/maps/search/<?php echo $datlat0.','.$datlong0;?>" target="blank">Click Here</a>
</td>
</tr>



    </tbody>
  </table> 
                  <!-- <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div> -->
                </div>
              </div>
            </div>
  <?php
} function footer(){
  ?>
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span style="color:#6d6d6d">Copyright &copy; Tracker ID 2019</span>
          </div>
        </div>
      </footer>
  <?php
} function mapsindex(){
  include "assets/getindex.php";
  ?>
              <div class="col-xl col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Location of All Devices</h6>
                  <!-- <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div> -->
                </div>

                <!-- Card Body -->
                <div class="card-body">
                <div id="mapid" style ="width: 100%; height:400px;"></div>
                    <script>
                    var x = "<?php echo $datlat?>";
                    var y = "<?php echo $datlong?>";
                    var z = "Device_A"
                     var mymap = L.map('mapid').setView([-2.2406396093827206,  121.46484375000001], 5);

                     L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                     maxZoom: 18,
                     id: 'mapbox.streets',
                     accessToken: 'pk.eyJ1IjoiYXNtYXlhbnppYWgxMSIsImEiOiJjazA3czhmMjUwM3Q1M2NvN3Vhc2xldWwyIn0.F5Yi5mxRvuph73RFsl-6cA'
                     }).addTo(mymap);

                     var marker = L.marker([x,y]).addTo(mymap).bindPopup(z).openPopup();
                    </script> 
                  </div>
                </div>
              </div>
  <?php
}
function cardindex(){
  include "assets/getindex.php";
  include "assets/getnavbar.php"; ?>
              <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Devices</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800 countdev"><?php echo count($datalist);?> Device(s)</div>
                      <div class="text-xs  text-grey dateupdate">Last Data: <?php echo $dateindex;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tags fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Device On Low Battery</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><span id="countbatt"><?php echo $countbatt;?></span> of <span class="countdev"><?php echo count($datalist);?></span> Device(s)</div>
                      <div class="text-xs  text-grey dateupdate">Last Data: <?php echo $dateindex;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tag fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Device On Alarm</div>
                      <div class="h4 mb-0 font-weight-bold text-gray-800"><span id="countalarm"><?php echo $countalarm;?></span> of <span class="countdev"><?php echo count($datalist);?></span> Device(s) </div>
                      <div class="text-xs  text-grey dateupdate">Last Data: <?php echo $dateindex;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bell fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  <?php
}

?>
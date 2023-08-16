<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>King Satta - Index</title>
   <meta content="" name="descriptison">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets1/img/favicon.png" rel="icon">
   <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
      rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
   <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
   <link href="assets1/vendor/owl.carousel/assets1/owl.carousel.min.css" rel="stylesheet">
   <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets1/css/style.css" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex justify-cntent-center align-items-center">

      <!-- Slide 1 -->
      <!--<a style="position:fixed; bottom:20px;right:8px;">&nbsp;<input-->
      <!--      style="border:#e7aa26 1px solid; background:#FBC503; color:Red; height:auto; padding:8px; font-weight:bold;"-->
      <!--      id="Refresh" name="Refresh" value="Refresh" type="submit" onclick="window.location.reload()">&nbsp;</a>-->
      <a style="position:fixed; bottom:20px;right:8px;" href="https://akingsatta.com/">&nbsp;<input
            style="border:#e7aa26 1px solid; background:#FBC503; color:Red; height:auto; padding:8px; font-weight:bold;"
            id="Refresh" name="Refresh" value="Refresh" type="submit">&nbsp;</a>
      <div class="header">
         <img src="https://akingsatta.com/satta.png" height="150px">
         <h2 class="animated fadeInDown">Welcome to <span>A King Satta Result</span></h2>
         <h3 style="color:black;">Today Super Fast Live Satta Results And Chart of June 2023 for
            <?php
            $company = DB::table('category')->get();

            $company = json_decode(json_encode($company), 'true');

            ?>
            @foreach ($company as $row)
            <?php
            //   print_r($row);
            ?>

            {{ strtoupper($row['name']) }},




            @endforeach
            Company etc.
         </h3><br>

         @foreach($datas as $u)
         <p class="animated fadeInUp para">{{ $u->description }} <a href="#" style="color: red;" data-toggle="modal"
               data-target="#myModal">Read More</a></p>
         <a href="https://docs.google.com/forms/d/e/1FAIpQLSerMVgTlndjNA84-zL7HYOno2mtbN0yjc_Ab-DK2oOloPpWUQ/viewform?pli=1"
            class="btn-get-started animated fadeInUp">फॉर्म लिंक.</a>

      </div>
      @endforeach


      @foreach($popups as $u)
      <!-- The Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Read More</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p style="color: black;font-size: 18px;">{{ $u->description }}</p>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

      @endforeach

   </section><!-- End Hero -->
   <main id="main">


      <!-- End Why Us Section -->

      <!-- ======= Features Section ======= -->

      <!-- < second section table open > -->

      <section class="why-us section-bg">
         <div class="container">
            <div class="row">
               <div class="container">

                  <div class="table-h1" style="text-align: center;background-color:#FBC503;">
                     @if ($catId && isset($catIdToName[$catId]))
                     {{ $catIdToName[$catId] }} Result of {{ \Carbon\Carbon::now()->subDays(1)->format('F d, Y') }} &
                     {{ \Carbon\Carbon::now()->format('F d, Y') }}
                     @else
                     <?php

                     $data = DB::select("SELECT * FROM `category` where  id='" . $categoryId . "'");
                     $data = array_column($data, 'name', '0');
                     ?>
                     {{$data['0']}} -- Result of
                     {{ \Carbon\Carbon::now()->subDays(1)->format('F d, Y') }} &
                     {{ \Carbon\Carbon::now()->format('F d, Y') }}
                     @endif
                  </div>

                  <table class="table table-hover" id="table-first">
                     <thead>
                        <tr style="background:#424242;color:#fff;">
                           <th style="font-size: 20px;">Games List</th>
                           <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->subDay()->format('D dS') }}</th>
                           <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->format('D dS') }}</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php

                        $current_date = date('Y-m-d');
                        $date = date('Y-m-d');
                        $prev_date = date('Y-m-d', strtotime($date . ' -1 day'));
                        $catId = DB::table('category')->where('status', '1')->orderBy('time', 'Asc')->get();

                        $catId = json_decode(json_encode($catId), 'true');

                        foreach ($catId as $row) {
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $current_date . "'";
                           $today_data = DB::select($sql);
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $prev_date . "'";
                           $previous_data = DB::select($sql);
                           $todaynumber = array_column($today_data, 'number', '0');
                           $lastnumber = array_column($previous_data, 'number', '0');

                           //          echo "<pre>";
                           // print_r(($todaynumber));
                           // echo "</pre>";


                        ?>
                        <tr>
                           <td>{{ $row['name'] }} <br>
                              <div class="table-link">at {{ date("h:i A", strtotime($row['time'])) }}<a
                                    href="/page/{{$row['id']}}"> Record chart</a>
                              </div>
                           </td>
                           <td><?php
                                    if (isset($lastnumber['0']) && !empty($lastnumber['0'])) {
                                       if ($lastnumber['0'] == "100") {
                                          echo "00";
                                       } else {
                                          echo  $lastnumber['0'];
                                       }
                                    } else {
                                       echo "XX";
                                    }
                                    ?></td>
                           <td><?php
                                    if (isset($todaynumber['0']) && !empty($todaynumber['0'])) {
                                       if ($todaynumber['0'] == "100") {
                                          echo "00";
                                       } else {
                                          echo  $todaynumber['0'];
                                       }
                                    } else {
                                       echo "XX";
                                    }
                                    ?></td>

                        </tr>
                        <?php
                        }

                        ?>
                     </tbody>
                  </table>

               </div>
            </div>
         </div>
      </section>

      <!-- <second section closed table > -->
      <section class="why-us section-bg">
         <div class="container mt-3">
            @php
            $currentMonth = \Carbon\Carbon::now()->format('m');
            $currentYear = \Carbon\Carbon::now()->format('Y');
            $daysInMonth = \Carbon\Carbon::now()->daysInMonth;
            $numbers = [];

            // Fetch the numbers from the database based on the date
            foreach ($sub as $u) {
            $numbers[$u->date][$u->category_name] = $u->number;
            }

            // Get the latest four names
            $latestNames = array_slice(array_unique(array_column($sub->toArray(), 'category_name')), -4);
            @endphp
            <div class="table-h1" style="text-align: center;background-color:#33CC99;">Monthly Satta King Chart of


               <?php
               if (empty($_GET['month']) && empty($_GET['year']) && empty($_GET['date'])) {
               ?>
               {{ \Carbon\Carbon::now()->format(' M, Y') }}
               <?php
               }
               ?>

               <?php


               if (isset($_GET['month']) && $_GET['month'] == "1" || isset($_GET['date']) && $_GET['date'] == "01") {
                  echo "January";
               }
               if (isset($_GET['month']) && $_GET['month'] == "2" || isset($_GET['date']) && $_GET['date'] == "02") {
                  echo "February";
               }
               if (isset($_GET['month']) && $_GET['month'] == "3" || isset($_GET['date']) && $_GET['date'] == "03") {
                  echo "March";
               }
               if (isset($_GET['month']) && $_GET['month'] == "4" || isset($_GET['date']) && $_GET['date'] == "04") {
                  echo "April";
               }
               if (isset($_GET['month']) && $_GET['month'] == "5" || isset($_GET['date']) && $_GET['date'] == "05") {
                  echo "May";
               }
               if (isset($_GET['month']) && $_GET['month'] == "6" || isset($_GET['date']) && $_GET['date'] == "06") {
                  echo "June";
               }
               if (isset($_GET['month']) && $_GET['month'] == "7" || isset($_GET['date']) && $_GET['date'] == "07") {
                  echo "July";
               }
               if (isset($_GET['month']) && $_GET['month'] == "8" || isset($_GET['date']) && $_GET['date'] == "08") {
                  echo "August";
               }
               if (isset($_GET['month']) && $_GET['month'] == "9" || isset($_GET['date']) && $_GET['date'] == "09") {
                  echo "September";
               }
               if (isset($_GET['month']) && $_GET['month'] == "10" || isset($_GET['date']) && $_GET['date'] == "10") {
                  echo "October";
               }
               if (isset($_GET['month']) && $_GET['month'] == "11" || isset($_GET['date']) && $_GET['date'] == "11") {
                  echo "November";
               }
               if (isset($_GET['month']) && $_GET['month'] == "12" || isset($_GET['date']) && $_GET['date'] == "12") {
                  echo "December";
               }

               ?> for <?php
                        if (isset($_GET['year']) && $_GET['year'] == "2015") {
                           echo "2015";
                        }

                        if (isset($_GET['year']) && $_GET['year'] == "2016") {
                           echo "2016";
                        }


                        if (isset($_GET['year']) && $_GET['year'] == "2017") {
                           echo "2017";
                        }


                        if (isset($_GET['year']) && $_GET['year'] == "2018") {
                           echo "2018";
                        }

                        if (isset($_GET['year']) && $_GET['year'] == "2019") {
                           echo "2019";
                        }


                        if (isset($_GET['year']) && $_GET['year'] == "2020") {
                           echo "2020";
                        }

                        if (isset($_GET['year']) && $_GET['year'] == "2021") {
                           echo "2021";
                        }


                        if (isset($_GET['year']) && $_GET['year'] == "2022") {
                           echo "2022";
                        }


                        if (isset($_GET['year']) && $_GET['year'] == "2023" || isset($_GET['date'])) {
                           echo "2023";
                        }

                        ?>
               for All Satta Companies
               @foreach ($latestNames as $index => $name)

               @endforeach
            </div>
            <style>
            .table-hover tbody tr:hover td,
            .table-hover tbody tr:hover th {
               color: red;
            }

            .headcol {
               position: absolute;
               width: 5em;
               left: 0;
               top: auto;
               border-top-width: 1px;
               /*only relevant for first row*/
               /*margin-top: -1px;*/
               /*compensate for top border*/
            }

            th {
               margin: 0;
               border: 1px solid grey;
               white-space: nowrap;
               border-top-width: 0px;
            }

            @media only screen and (max-width: 1024px) and (min-width: 240px) {
               .headcol {
                  width: 4rem !important;
                  font-size: 12px !important;
               }

               .date {
                  width: 38px;
                  height: 47px;
                  padding-left: 5px !important;
                  padding-top: 12px !important;
               }

               .day {
                  height: 47px;
               }
            }

            @media only screen and (max-width: 414px) {
               .tb_row {
                  padding-left: 32px !important;
               }
            }
            </style>
            <div class="table-responsive">
               <table class="table table-bordered table-striped table-hover text-center">
                  <thead style="font-size: 18px;background-color:#FBC503;">
                     <tr>
                        <th style="font-size: 18px;background-color:red;color:#fff;" class="headcol">DATE</th>
                        <?php
                        $catId = DB::table('category')->where('status', '1')->select('id', 'name')->get()->toArray();

                        // dd($catId);
                        $value = $key;
                        $arr = [];
                        foreach ($catId as $k => $val) {
                           if ($val->id == $key) {
                              array_push($arr, $val);
                              unset($catId[$k]);
                           }
                        }
                        $catId = array_merge($arr, $catId);
                        $catId = json_decode(json_encode($catId), 'true');
                        // print_r($catId);die;
                        ?>
                        @foreach ($catId as $row)
                        <?php
                        //   print_r($row);
                        ?>

                        <th class="tb_row">{{ strtoupper($row['name']) }}</th>
                        <?php
                        continue;
                        ?>

                        @endforeach
                     </tr>
                  </thead>
                  <tbody>
                     @for ($day = 1; $day <= $daysInMonth; $day++) @php $date=\Carbon\Carbon::create($currentYear,
                        $currentMonth, $day); $formattedDate=$date->format('Y-m-d');
                        @endphp
                        <tr>
                           <?php

                           $d = strtotime("tomorrow");

                           $date = date("d", $d);
                           if ($day == $date && empty($_GET['month']) && empty($_GET['year'])) {
                              break;
                           }
                           ?>
                           <td class="headcol day" style="background:red;color:#fff;">{{ $day }}</td>
                           <?php

                           $catId = DB::table('category')->get();
                           $catId = json_decode(json_encode($catId), 'true');
                           $catId = array_column($catId, 'id', '0');
                           $catId = implode(",", $catId);
                           $number = $numbers[$formattedDate][$name] ?? '--';

                           if (isset($_GET['month']) && isset($_GET['year'])) {
                              $date = $_GET['year'] . '-0' . $_GET['month'] . '-' . $day;
                           } else if (!empty($_GET['date']) || isset($_GET['date'])) {
                              $previous_month = $_GET['date'];
                              $_GET['month'] = $previous_month;
                              $date = date('Y-' . $previous_month . '-' . $day);
                           } else {
                              $date = date('Y-m-' . $day);
                           }

                           $sql1 = "WITH acs AS ( SELECT c.id,c.name,c.status,0 as num FROM `category` c UNION ALL SELECT c.id,c.name,c.status,sc.number as num FROM category c INNER JOIN subcategory sc ON c.id=sc.cat_id where sc.date='" . $date . "') SELECT id,name,status,sum(num) as number FROM acs where status='1' GROUP BY id";
                           $sql3 = "WITH acs AS (SELECT c.time,c.id,c.name,c.status,0 as num FROM `category` c UNION ALL SELECT sc.time,c.id,c.name,c.status,sc.number as num FROM category c INNER JOIN subcategory sc ON c.id=sc.cat_id where sc.date='" . $date . "'  and sc.status='1') SELECT id,name,status,sum(num) as number FROM acs where status='1' GROUP BY id ORDER BY time ASC;";
                           $data = DB::select($sql3);
                           // $date = array_column($data, 'date', '0');
                           // echo $date['0'];
                           $value = $key;
                           $arr = [];
                           foreach ($data as $k => $val) {
                              if ($val->id == $key) {
                                 array_push($arr, $val);
                                 unset($data[$k]);
                              }
                           }
                           $data = array_merge($arr, $data);
                           $data = json_decode(json_encode($data), true);

                           foreach ($data as $row) {
                              if ($row['number'] == "") {
                           ?>
                           <td>XX</td>
                           <?php
                              } else {
                              ?>
                           <td>
                              <?php

                                    if ($row['number'] == 0) {
                                       echo "XX";
                                    } else {
                                       if ($row['number'] == "100") {
                                          echo "00";
                                       } else {
                                          $count = strlen($row['number']);
                                          if ($count > 1) {
                                             echo $row['number'];
                                          } else {
                                             echo '0' . $row['number'];
                                          }
                                       }
                                    }
                                    ?>
                           </td>
                           <?php

                              }
                           }

                           ?>

                        </tr>
                        @endfor
                        <tr class="option">
                           <td class="e-link bg-info" title="March-2023 Satta Result Chart With Record" colspan="5">
                              <?php
                              if (isset($_GET['date']) && $_GET['date'] == "12") {

                                 $m = '11';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "November " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "11") {

                                 $m = '10';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "October " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "10") {

                                 $m = '09';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "September " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "09") {

                                 $m = '08';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "August " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "08") {

                                 $m = '07';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "July " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "07") {

                                 $m = '06';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "June " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "06") {

                                 $m = '05';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "May " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }

                              if (isset($_GET['date']) && $_GET['date'] == "05") {

                                 $m = '04';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "April " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "04") {

                                 $m = '03';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "March " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "03") {

                                 $m = '02';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "FEB " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "02") {

                                 $m = '01';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "January " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (empty($_GET['date'])) {
                              ?>
                              <a
                                 href="/page/{{$categoryId}}<?php echo '?date=' . date('m', strtotime('last month')); ?>">
                                 <h1 class="aero">{{ \Carbon\Carbon::now()->subMonth()->format('M Y') }}</h1>
                              </a>
                              <?php
                              }
                              ?>

                           </td>
                           <td class="s-link" colspan="1"></td>
                           <td class="e-link bg-info" title="May-2023 Satta Result Chart With Record" colspan="5">
                              <?php
                              if (isset($_GET['date']) && $_GET['date'] == "11") {

                                 $m = '12';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "December " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "10") {

                                 $m = '11';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "November " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "09") {

                                 $m = '10';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "October " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "08") {

                                 $m = '09';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "September " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "07") {

                                 $m = '08';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "August " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "06") {

                                 $m = '07';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "July " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "05") {

                                 $m = '06';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "June " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }

                              if (isset($_GET['date']) && $_GET['date'] == "04") {

                                 $m = '05';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "May " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "03") {

                                 $m = '04';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "April " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "02") {

                                 $m = '03';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "March " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (isset($_GET['date']) && $_GET['date'] == "01") {

                                 $m = '02';
                                 date($m . 'Y');
                              ?>
                              <a href="<?php echo '?date=' . date($m); ?>">
                                 <h1 class="aero"><?php

                                                      echo "FEB " . date('Y'); ?></h1>
                              </a>
                              <?php
                              }
                              if (empty($_GET['date'])) {
                              ?>
                              <a href="/page/{{$categoryId}}">
                                 <h1 class="aero">{{ \Carbon\Carbon::now()->addMonth()->format('M Y') }}</h1>
                              </a>
                              <?php
                              }
                              ?>

                           </td>
                        </tr>
                        <!--<tr class="option">-->
                        <!--   <td class="e-link bg-info" title="March-2023 Satta Result Chart With Record" colspan="5">-->
                        <!--      <a-->
                        <!--         href="/page/{{$categoryId}}<?php echo '?date=' . date('m', strtotime('last month')); ?>">-->
                        <!--         <h1 class="aero">{{ \Carbon\Carbon::now()->subMonth()->format('M Y') }}</h1>-->
                        <!--      </a>-->
                        <!--   </td>-->
                        <!--   <td class="s-link" colspan="1"></td>-->
                        <!--   <td class="e-link bg-info" title="May-2023 Satta Result Chart With Record" colspan="5">-->
                        <!--      <a href="/page/{{$categoryId}}">-->
                        <!--         <h1 class="aero">{{ \Carbon\Carbon::now()->addMonth()->format('M Y') }}</h1>-->
                        <!--      </a>-->
                        <!--   </td>-->
                        <!--</tr>-->
                  </tbody>
               </table>
            </div>
         </div>
      </section>
      <section class="why-us section-bg">
         <div class="container mt-3" style="background-color:#FBC503;">
            <p style="text-align: center; font-size: 18px; margin-top: 10px;">
               Yahan Aap Month Aur Year Select Karke All Satta Companies Ka Combined Chart Dekh
               Sakte Hai.. </p>
            <form action="" method="get">
               <div class="row d-flex justify-content-between">
                  <div class="col-lg-4">
                     <select id="monthSelect" name="month" class="form-select form-select-lg"
                        style="height: 50px; font-size: 20px;">
                        <option value="">Please Choose Month</option>
                        <option value="1" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "1") {
                                             echo "selected";
                                          }
                                          ?>>January</option>
                        <option value="2" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "2") {
                                             echo "selected";
                                          }
                                          ?>>February</option>
                        <option value="3" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "3") {
                                             echo "selected";
                                          }
                                          ?>>March</option>
                        <option value="4" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "4") {
                                             echo "selected";
                                          }
                                          ?>>April</option>
                        <option value="5" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "5") {
                                             echo "selected";
                                          }
                                          ?>>May</option>
                        <option value="6" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "6") {
                                             echo "selected";
                                          }
                                          ?>>June</option>
                        <option value="7" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "7") {
                                             echo "selected";
                                          }
                                          ?>>July</option>
                        <option value="8" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "8") {
                                             echo "selected";
                                          }
                                          ?>>August</option>
                        <option value="9" <?php
                                          if (isset($_GET['month']) && $_GET['month'] == "9") {
                                             echo "selected";
                                          }
                                          ?>>September</option>
                        <option value="10" <?php
                                             if (isset($_GET['month']) && $_GET['month'] == "10") {
                                                echo "selected";
                                             }
                                             ?>>October</option>
                        <option value="11" <?php
                                             if (isset($_GET['month']) && $_GET['month'] == "11") {
                                                echo "selected";
                                             }
                                             ?>>November</option>
                        <option value="12" <?php
                                             if (isset($_GET['month']) && $_GET['month'] == "12") {
                                                echo "selected";
                                             }
                                             ?>>December</option>
                     </select>
                  </div>
                  <div class="col-lg-4 mb-5">
                     <select id="yearSelect" name="year" class="form-select form-select-lg"
                        style="height: 50px; font-size: 20px;">
                        <option value="">Please Choose Year</option>
                        <option value="2015" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2015") {
                                                echo "selected";
                                             }
                                             ?>>2015</option>
                        <option value="2016" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2016") {
                                                echo "selected";
                                             }
                                             ?>>2016</option>
                        <option value="2017" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2017") {
                                                echo "selected";
                                             }
                                             ?>>2017</option>
                        <option value="2018" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2018") {
                                                echo "selected";
                                             }
                                             ?>>2018</option>
                        <option value="2019" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2019") {
                                                echo "selected";
                                             }
                                             ?>>2019</option>
                        <option value="2020" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2020") {
                                                echo "selected";
                                             }
                                             ?>>2020</option>
                        <option value="2021" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2021") {
                                                echo "selected";
                                             }
                                             ?>>2021</option>
                        <option value="2022" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2022") {
                                                echo "selected";
                                             }
                                             ?>>2022</option>
                        <option value="2023" <?php
                                             if (isset($_GET['year']) && $_GET['year'] == "2023") {
                                                echo "selected";
                                             }
                                             ?>>2023</option>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <button id="goButton" type="submit" class="btn btn-danger btn-lg btn-block"
                        style="height: 50px; font-size: 20px;">GO</button>
                  </div>
               </div>
            </form>
         </div>
      </section>

      <!-- <last section open> -->


      <!-- <last section close>    -->
   </main>

   <!-- End #main -->

   <!-- Vendor JS Files -->
   <script src="assets1/vendor/jquery/jquery.min.js"></script>
   <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
   <script src="assets1/vendor/php-email-form/validate.js"></script>
   <script src="assets1/vendor/venobox/venobox.min.js"></script>
   <script src="assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets1/vendor/counterup/counterup.min.js"></script>
   <script src="assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
   <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets1/vendor/aos/aos.js"></script>

   <!-- Template Main JS File -->
   <script src="assets1/js/main.js"></script>

</body>

</html>
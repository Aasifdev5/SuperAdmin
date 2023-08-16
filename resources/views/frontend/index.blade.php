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
   <!-- ------------newslider css link---------- -->
   <link rel="stylesheet" href="css/swiper-bundle.min.css" />
   <!---->
   <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,700;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <style>
   .poppins {
      font-family: 'Poppins';

   }

   #hero {
      width: 100%;
      height: 80vh;
      overflow: hidden;
      padding: 0;
   }

   .img_logo {
      margin-top: -100px;
   }

   @media(max-width:414px) {}

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
</head>

<body>

   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex justify-cntent-center align-items-center">

      <!-- Slide 1 -->
      <!--<a style="position:fixed; bottom:20px;right:8px;">&nbsp;<input style="border:#e7aa26 1px solid; background:#FBC503; color:Red; height:auto; padding:8px; font-weight:bold;" id="Refresh" name="Refresh" value="Refresh" type="submit" onclick="window.location.reload()">&nbsp;</a>-->
      <a style="position:fixed; bottom:20px;right:8px;" href="https://akingsatta.com/">&nbsp;<input
            style="border:#e7aa26 1px solid; background:#FBC503; color:Red; height:auto; padding:8px; font-weight:bold;"
            id="Refresh" name="Refresh" value="Refresh" type="submit">&nbsp;</a>


      <div class="header mt-0">
         <img src="https://akingsatta.com/satta.png" class="img_logo" height="150px">
         <h2 class="animated fadeInDown poppins">Welcome to <span>A King Satta Result</span></h2>
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
      <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
         if (!Notification) {
            alert(
               'Desktop notifications are not available in your browser. Try using Chromium.'
            ); // If the browser is not compatible, show an alert
            return;
         }
         if (Notification.permission !== "granted") {
            Notification.requestPermission().then(function(permission) {
               if (permission === "granted") {
                  showNotification();
                  logBrowserID(); // Log browser ID after permission is granted
               }
            });
         } else {
            showNotification();
            logBrowserID(); // Log browser ID if permission is already granted
         }
      });

      function showNotification() {
         var notification = new Notification('KingSatta (Number Open)', {
            icon: 'https://www.codespeedy.com/wp-content/themes/codespeedy/img/CodeSpeedy-Logo.png',
            body: "New Notification! Click to Check",
         });

         notification.onclick = function() {
            window.open("https://kingsatta.joblly.in/");
         };
      }

      function logBrowserID() {
         var userAgent = navigator.userAgent;
         var browserName;

         if (navigator.userAgentData) {
            // Use the User-Agent Client Hints API for accurate browser detection
            browserName = navigator.userAgentData.brands.map(function(brand) {
               return brand.brand;
            }).join(", ");
            console.log("Detected browser: " + browserName);
         } else {
            // Fallback to using the User-Agent string
            if (userAgent.includes("Chrome")) {
               browserName = "Google Chrome";
            } else if (userAgent.includes("Safari")) {
               browserName = "Safari";
            } else if (userAgent.includes("Firefox")) {
               browserName = "Mozilla Firefox";
            } else if (userAgent.includes("Edge")) {
               browserName = "Microsoft Edge";
            } else if (userAgent.includes("Opera") || userAgent.includes("OPR")) {
               browserName = "Opera";
            } else if (userAgent.includes("Trident") || userAgent.includes("MSIE")) {
               browserName = "Internet Explorer";
            } else {
               browserName = "Unknown Browser";
            }
            console.log("Detected browser: " + browserName);
         }
      }
      </script>
   </section><!-- End Hero -->
   <style>
   .swal2-modal {
      font-family: Hind, Arial, Helvetica, sans-serif;
   }
   </style>
   <style>
   @charset "UTF-8";

   .swal2-popup.swal2-toast {
      flex-direction: row;
      align-items: center;
      width: auto;
      padding: .625em;
      overflow-y: hidden;
      box-shadow: 0 0 .625em #d9d9d9
   }

   .swal2-popup.swal2-toast .swal2-header {
      flex-direction: row
   }

   .swal2-popup.swal2-toast .swal2-title {
      flex-grow: 1;
      justify-content: flex-start;
      margin: 0 .6em;
      font-size: 1em
   }

   .swal2-popup.swal2-toast .swal2-footer {
      margin: .5em 0 0;
      padding: .5em 0 0;
      font-size: .8em
   }

   .swal2-popup.swal2-toast .swal2-close {
      position: static;
      width: .8em;
      height: .8em;
      line-height: .8
   }

   .swal2-popup.swal2-toast .swal2-content {
      justify-content: flex-start;
      font-size: 1em
   }

   .swal2-popup.swal2-toast .swal2-icon {
      width: 2em;
      min-width: 2em;
      height: 2em;
      margin: 0
   }

   .swal2-popup.swal2-toast .swal2-icon::before {
      display: flex;
      align-items: center;
      font-size: 2em;
      font-weight: 700
   }

   @media all and (-ms-high-contrast:none),
   (-ms-high-contrast:active) {
      .swal2-popup.swal2-toast .swal2-icon::before {
         font-size: .25em
      }
   }

   .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
   }

   .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      top: .875em;
      width: 1.375em
   }

   .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: .3125em
   }

   .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: .3125em
   }

   .swal2-popup.swal2-toast .swal2-actions {
      flex-basis: auto !important;
      width: auto;
      height: auto;
      margin: 0 .3125em
   }

   .swal2-popup.swal2-toast .swal2-styled {
      margin: 0 .3125em;
      padding: .3125em .625em;
      font-size: 1em
   }

   .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
   }

   .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86
   }

   .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 1.6em;
      height: 3em;
      transform: rotate(45deg);
      border-radius: 50%
   }

   .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -.8em;
      left: -.5em;
      transform: rotate(-45deg);
      transform-origin: 2em 2em;
      border-radius: 4em 0 0 4em
   }

   .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -.25em;
      left: .9375em;
      transform-origin: 0 1.5em;
      border-radius: 0 4em 4em 0
   }

   .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em
   }

   .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em
   }

   .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
      height: .3125em
   }

   .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
      top: 1.125em;
      left: .1875em;
      width: .75em
   }

   .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
      top: .9375em;
      right: .1875em;
      width: 1.375em
   }

   .swal2-popup.swal2-toast.swal2-show {
      -webkit-animation: swal2-toast-show .5s;
      animation: swal2-toast-show .5s
   }

   .swal2-popup.swal2-toast.swal2-hide {
      -webkit-animation: swal2-toast-hide .1s forwards;
      animation: swal2-toast-hide .1s forwards
   }

   .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
      -webkit-animation: swal2-toast-animate-success-line-tip .75s;
      animation: swal2-toast-animate-success-line-tip .75s
   }

   .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
      -webkit-animation: swal2-toast-animate-success-line-long .75s;
      animation: swal2-toast-animate-success-line-long .75s
   }

   .swal2-container {
      display: flex;
      position: fixed;
      z-index: 1060;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      padding: .625em;
      overflow-x: hidden;
      transition: background-color .1s;
      background-color: transparent;
      -webkit-overflow-scrolling: touch
   }

   .swal2-container.swal2-top {
      align-items: flex-start
   }

   .swal2-container.swal2-top-left,
   .swal2-container.swal2-top-start {
      align-items: flex-start;
      justify-content: flex-start
   }

   .swal2-container.swal2-top-end,
   .swal2-container.swal2-top-right {
      align-items: flex-start;
      justify-content: flex-end
   }

   .swal2-container.swal2-center {
      align-items: center
   }

   .swal2-container.swal2-center-left,
   .swal2-container.swal2-center-start {
      align-items: center;
      justify-content: flex-start
   }

   .swal2-container.swal2-center-end,
   .swal2-container.swal2-center-right {
      align-items: center;
      justify-content: flex-end
   }

   .swal2-container.swal2-bottom {
      align-items: flex-end
   }

   .swal2-container.swal2-bottom-left,
   .swal2-container.swal2-bottom-start {
      align-items: flex-end;
      justify-content: flex-start
   }

   .swal2-container.swal2-bottom-end,
   .swal2-container.swal2-bottom-right {
      align-items: flex-end;
      justify-content: flex-end
   }

   .swal2-container.swal2-bottom-end>:first-child,
   .swal2-container.swal2-bottom-left>:first-child,
   .swal2-container.swal2-bottom-right>:first-child,
   .swal2-container.swal2-bottom-start>:first-child,
   .swal2-container.swal2-bottom>:first-child {
      margin-top: auto
   }

   .swal2-container.swal2-grow-fullscreen>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-self: stretch;
      justify-content: center
   }

   .swal2-container.swal2-grow-row>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center
   }

   .swal2-container.swal2-grow-column {
      flex: 1;
      flex-direction: column
   }

   .swal2-container.swal2-grow-column.swal2-bottom,
   .swal2-container.swal2-grow-column.swal2-center,
   .swal2-container.swal2-grow-column.swal2-top {
      align-items: center
   }

   .swal2-container.swal2-grow-column.swal2-bottom-left,
   .swal2-container.swal2-grow-column.swal2-bottom-start,
   .swal2-container.swal2-grow-column.swal2-center-left,
   .swal2-container.swal2-grow-column.swal2-center-start,
   .swal2-container.swal2-grow-column.swal2-top-left,
   .swal2-container.swal2-grow-column.swal2-top-start {
      align-items: flex-start
   }

   .swal2-container.swal2-grow-column.swal2-bottom-end,
   .swal2-container.swal2-grow-column.swal2-bottom-right,
   .swal2-container.swal2-grow-column.swal2-center-end,
   .swal2-container.swal2-grow-column.swal2-center-right,
   .swal2-container.swal2-grow-column.swal2-top-end,
   .swal2-container.swal2-grow-column.swal2-top-right {
      align-items: flex-end
   }

   .swal2-container.swal2-grow-column>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center
   }

   .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
      margin: auto
   }

   @media all and (-ms-high-contrast:none),
   (-ms-high-contrast:active) {
      .swal2-container .swal2-modal {
         margin: 0 !important
      }
   }

   .swal2-container.swal2-shown {
      background-color: rgba(0, 0, 0, .4)
   }

   .swal2-popup {
      display: none;
      position: relative;
      box-sizing: border-box;
      flex-direction: column;
      justify-content: center;
      width: 32em;
      max-width: 100%;
      padding: 1.25em;
      border: none;
      border-radius: .3125em;
      background: #fff;
      font-family: inherit;
      font-size: 1rem
   }

   .swal2-popup:focus {
      outline: 0
   }

   .swal2-popup.swal2-loading {
      overflow-y: hidden
   }

   .swal2-header {
      display: flex;
      flex-direction: column;
      align-items: center
   }

   .swal2-title {
      position: relative;
      max-width: 100%;
      margin: 0 0 .4em;
      padding: 0;
      color: #595959;
      font-size: 1.875em;
      font-weight: 600;
      text-align: center;
      text-transform: none;
      word-wrap: break-word
   }

   .swal2-actions {
      display: flex;
      z-index: 1;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      width: 100%;
      margin: 1.25em auto 0
   }

   .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4
   }

   .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
   }

   .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
   }

   .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
      box-sizing: border-box;
      width: 2.5em;
      height: 2.5em;
      margin: .46875em;
      padding: 0;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      border: .25em solid transparent;
      border-radius: 100%;
      border-color: transparent;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
   }

   .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
      margin-right: 30px;
      margin-left: 30px
   }

   .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      content: "";
      display: inline-block;
      width: 15px;
      height: 15px;
      margin-left: 5px;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      border: 3px solid #999;
      border-radius: 50%;
      border-right-color: transparent;
      box-shadow: 1px 1px 1px #fff
   }

   .swal2-styled {
      margin: .3125em;
      padding: .625em 2em;
      box-shadow: none;
      font-weight: 500
   }

   .swal2-styled:not([disabled]) {
      cursor: pointer
   }

   .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #3085d6;
      color: #fff;
      font-size: 1.0625em
   }

   .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: .25em;
      background: initial;
      background-color: #aaa;
      color: #fff;
      font-size: 1.0625em
   }

   .swal2-styled:focus {
      outline: 0;
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
   }

   .swal2-styled::-moz-focus-inner {
      border: 0
   }

   .swal2-footer {
      justify-content: center;
      margin: 1.25em 0 0;
      padding: 1em 0 0;
      border-top: 1px solid #eee;
      color: #545454;
      font-size: 1em
   }

   .swal2-image {
      max-width: 100%;
      margin: 1.25em auto
   }

   .swal2-close {
      position: absolute;
      z-index: 2;
      top: 0;
      right: 0;
      justify-content: center;
      width: 1.2em;
      height: 1.2em;
      padding: 0;
      overflow: hidden;
      transition: color .1s ease-out;
      border: none;
      border-radius: 0;
      outline: initial;
      background: 0 0;
      color: #ccc;
      font-family: serif;
      font-size: 2.5em;
      line-height: 1.2;
      cursor: pointer
   }

   .swal2-close:hover {
      transform: none;
      background: 0 0;
      color: #f27474
   }

   .swal2-content {
      z-index: 1;
      justify-content: center;
      margin: 0;
      padding: 0;
      color: #545454;
      font-size: 1.125em;
      font-weight: 400;
      line-height: normal;
      text-align: center;
      word-wrap: break-word
   }

   .swal2-checkbox,
   .swal2-file,
   .swal2-input,
   .swal2-radio,
   .swal2-select,
   .swal2-textarea {
      margin: 1em auto
   }

   .swal2-file,
   .swal2-input,
   .swal2-textarea {
      box-sizing: border-box;
      width: 100%;
      transition: border-color .3s, box-shadow .3s;
      border: 1px solid #d9d9d9;
      border-radius: .1875em;
      background: inherit;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
      color: inherit;
      font-size: 1.125em
   }

   .swal2-file.swal2-inputerror,
   .swal2-input.swal2-inputerror,
   .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important
   }

   .swal2-file:focus,
   .swal2-input:focus,
   .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: 0;
      box-shadow: 0 0 3px #c4e6f5
   }

   .swal2-file::-webkit-input-placeholder,
   .swal2-input::-webkit-input-placeholder,
   .swal2-textarea::-webkit-input-placeholder {
      color: #ccc
   }

   .swal2-file::-moz-placeholder,
   .swal2-input::-moz-placeholder,
   .swal2-textarea::-moz-placeholder {
      color: #ccc
   }

   .swal2-file:-ms-input-placeholder,
   .swal2-input:-ms-input-placeholder,
   .swal2-textarea:-ms-input-placeholder {
      color: #ccc
   }

   .swal2-file::-ms-input-placeholder,
   .swal2-input::-ms-input-placeholder,
   .swal2-textarea::-ms-input-placeholder {
      color: #ccc
   }

   .swal2-file::placeholder,
   .swal2-input::placeholder,
   .swal2-textarea::placeholder {
      color: #ccc
   }

   .swal2-range {
      margin: 1em auto;
      background: inherit
   }

   .swal2-range input {
      width: 80%
   }

   .swal2-range output {
      width: 20%;
      color: inherit;
      font-weight: 600;
      text-align: center
   }

   .swal2-range input,
   .swal2-range output {
      height: 2.625em;
      padding: 0;
      font-size: 1.125em;
      line-height: 2.625em
   }

   .swal2-input {
      height: 2.625em;
      padding: 0 .75em
   }

   .swal2-input[type=number] {
      max-width: 10em
   }

   .swal2-file {
      background: inherit;
      font-size: 1.125em
   }

   .swal2-textarea {
      height: 6.75em;
      padding: .75em
   }

   .swal2-select {
      min-width: 50%;
      max-width: 100%;
      padding: .375em .625em;
      background: inherit;
      color: inherit;
      font-size: 1.125em
   }

   .swal2-checkbox,
   .swal2-radio {
      align-items: center;
      justify-content: center;
      background: inherit;
      color: inherit
   }

   .swal2-checkbox label,
   .swal2-radio label {
      margin: 0 .6em;
      font-size: 1.125em
   }

   .swal2-checkbox input,
   .swal2-radio input {
      margin: 0 .4em
   }

   .swal2-validation-message {
      display: none;
      align-items: center;
      justify-content: center;
      padding: .625em;
      overflow: hidden;
      background: #f0f0f0;
      color: #666;
      font-size: 1em;
      font-weight: 300
   }

   .swal2-validation-message::before {
      content: "!";
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center
   }

   .swal2-icon {
      position: relative;
      box-sizing: content-box;
      justify-content: center;
      width: 5em;
      height: 5em;
      margin: 1.25em auto 1.875em;
      border: .25em solid transparent;
      border-radius: 50%;
      font-family: inherit;
      line-height: 5em;
      cursor: default;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
   }

   .swal2-icon::before {
      display: flex;
      align-items: center;
      height: 92%;
      font-size: 3.75em
   }

   .swal2-icon.swal2-error {
      border-color: #f27474
   }

   .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1
   }

   .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474
   }

   .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
      left: 1.0625em;
      transform: rotate(45deg)
   }

   .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
      right: 1em;
      transform: rotate(-45deg)
   }

   .swal2-icon.swal2-warning {
      border-color: #facea8;
      color: #f8bb86
   }

   .swal2-icon.swal2-warning::before {
      content: "!"
   }

   .swal2-icon.swal2-info {
      border-color: #9de0f6;
      color: #3fc3ee
   }

   .swal2-icon.swal2-info::before {
      content: "i"
   }

   .swal2-icon.swal2-question {
      border-color: #c9dae1;
      color: #87adbd
   }

   .swal2-icon.swal2-question::before {
      content: "?"
   }

   .swal2-icon.swal2-question.swal2-arabic-question-mark::before {
      content: "؟"
   }

   .swal2-icon.swal2-success {
      border-color: #a5dc86
   }

   .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      transform: rotate(45deg);
      border-radius: 50%
   }

   .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
      top: -.4375em;
      left: -2.0635em;
      transform: rotate(-45deg);
      transform-origin: 3.75em 3.75em;
      border-radius: 7.5em 0 0 7.5em
   }

   .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
      top: -.6875em;
      left: 1.875em;
      transform: rotate(-45deg);
      transform-origin: 0 3.75em;
      border-radius: 0 7.5em 7.5em 0
   }

   .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      z-index: 2;
      top: -.25em;
      left: -.25em;
      box-sizing: content-box;
      width: 100%;
      height: 100%;
      border: .25em solid rgba(165, 220, 134, .3);
      border-radius: 50%
   }

   .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      z-index: 1;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      transform: rotate(-45deg)
   }

   .swal2-icon.swal2-success [class^=swal2-success-line] {
      display: block;
      position: absolute;
      z-index: 2;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86
   }

   .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
      top: 2.875em;
      left: .875em;
      width: 1.5625em;
      transform: rotate(45deg)
   }

   .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
      top: 2.375em;
      right: .5em;
      width: 2.9375em;
      transform: rotate(-45deg)
   }

   .swal2-progress-steps {
      align-items: center;
      margin: 0 0 1.25em;
      padding: 0;
      background: inherit;
      font-weight: 600
   }

   .swal2-progress-steps li {
      display: inline-block;
      position: relative
   }

   .swal2-progress-steps .swal2-progress-step {
      z-index: 20;
      width: 2em;
      height: 2em;
      border-radius: 2em;
      background: #3085d6;
      color: #fff;
      line-height: 2em;
      text-align: center
   }

   .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
      background: #3085d6
   }

   .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
      background: #add8e6;
      color: #fff
   }

   .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
      background: #add8e6
   }

   .swal2-progress-steps .swal2-progress-step-line {
      z-index: 10;
      width: 2.5em;
      height: .4em;
      margin: 0 -1px;
      background: #3085d6
   }

   [class^=swal2] {
      -webkit-tap-highlight-color: transparent
   }

   .swal2-show {
      -webkit-animation: swal2-show .3s;
      animation: swal2-show .3s
   }

   .swal2-show.swal2-noanimation {
      -webkit-animation: none;
      animation: none
   }

   .swal2-hide {
      -webkit-animation: swal2-hide .15s forwards;
      animation: swal2-hide .15s forwards
   }

   .swal2-hide.swal2-noanimation {
      -webkit-animation: none;
      animation: none
   }

   .swal2-rtl .swal2-close {
      right: auto;
      left: 0
   }

   .swal2-animate-success-icon .swal2-success-line-tip {
      -webkit-animation: swal2-animate-success-line-tip .75s;
      animation: swal2-animate-success-line-tip .75s
   }

   .swal2-animate-success-icon .swal2-success-line-long {
      -webkit-animation: swal2-animate-success-line-long .75s;
      animation: swal2-animate-success-line-long .75s
   }

   .swal2-animate-success-icon .swal2-success-circular-line-right {
      -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
      animation: swal2-rotate-success-circular-line 4.25s ease-in
   }

   .swal2-animate-error-icon {
      -webkit-animation: swal2-animate-error-icon .5s;
      animation: swal2-animate-error-icon .5s
   }

   .swal2-animate-error-icon .swal2-x-mark {
      -webkit-animation: swal2-animate-error-x-mark .5s;
      animation: swal2-animate-error-x-mark .5s
   }

   @supports (-ms-accelerator:true) {
      .swal2-range input {
         width: 100% !important
      }

      .swal2-range output {
         display: none
      }
   }

   @media all and (-ms-high-contrast:none),
   (-ms-high-contrast:active) {
      .swal2-range input {
         width: 100% !important
      }

      .swal2-range output {
         display: none
      }
   }

   @-moz-document url-prefix() {
      .swal2-close:focus {
         outline: 2px solid rgba(50, 100, 150, .4)
      }
   }

   @-webkit-keyframes swal2-toast-show {
      0% {
         transform: translateY(-.625em) rotateZ(2deg)
      }

      33% {
         transform: translateY(0) rotateZ(-2deg)
      }

      66% {
         transform: translateY(.3125em) rotateZ(2deg)
      }

      100% {
         transform: translateY(0) rotateZ(0)
      }
   }

   @keyframes swal2-toast-show {
      0% {
         transform: translateY(-.625em) rotateZ(2deg)
      }

      33% {
         transform: translateY(0) rotateZ(-2deg)
      }

      66% {
         transform: translateY(.3125em) rotateZ(2deg)
      }

      100% {
         transform: translateY(0) rotateZ(0)
      }
   }

   @-webkit-keyframes swal2-toast-hide {
      100% {
         transform: rotateZ(1deg);
         opacity: 0
      }
   }

   @keyframes swal2-toast-hide {
      100% {
         transform: rotateZ(1deg);
         opacity: 0
      }
   }

   @-webkit-keyframes swal2-toast-animate-success-line-tip {
      0% {
         top: .5625em;
         left: .0625em;
         width: 0
      }

      54% {
         top: .125em;
         left: .125em;
         width: 0
      }

      70% {
         top: .625em;
         left: -.25em;
         width: 1.625em
      }

      84% {
         top: 1.0625em;
         left: .75em;
         width: .5em
      }

      100% {
         top: 1.125em;
         left: .1875em;
         width: .75em
      }
   }

   @keyframes swal2-toast-animate-success-line-tip {
      0% {
         top: .5625em;
         left: .0625em;
         width: 0
      }

      54% {
         top: .125em;
         left: .125em;
         width: 0
      }

      70% {
         top: .625em;
         left: -.25em;
         width: 1.625em
      }

      84% {
         top: 1.0625em;
         left: .75em;
         width: .5em
      }

      100% {
         top: 1.125em;
         left: .1875em;
         width: .75em
      }
   }

   @-webkit-keyframes swal2-toast-animate-success-line-long {
      0% {
         top: 1.625em;
         right: 1.375em;
         width: 0
      }

      65% {
         top: 1.25em;
         right: .9375em;
         width: 0
      }

      84% {
         top: .9375em;
         right: 0;
         width: 1.125em
      }

      100% {
         top: .9375em;
         right: .1875em;
         width: 1.375em
      }
   }

   @keyframes swal2-toast-animate-success-line-long {
      0% {
         top: 1.625em;
         right: 1.375em;
         width: 0
      }

      65% {
         top: 1.25em;
         right: .9375em;
         width: 0
      }

      84% {
         top: .9375em;
         right: 0;
         width: 1.125em
      }

      100% {
         top: .9375em;
         right: .1875em;
         width: 1.375em
      }
   }

   @-webkit-keyframes swal2-show {
      0% {
         transform: scale(.7)
      }

      45% {
         transform: scale(1.05)
      }

      80% {
         transform: scale(.95)
      }

      100% {
         transform: scale(1)
      }
   }

   @keyframes swal2-show {
      0% {
         transform: scale(.7)
      }

      45% {
         transform: scale(1.05)
      }

      80% {
         transform: scale(.95)
      }

      100% {
         transform: scale(1)
      }
   }

   @-webkit-keyframes swal2-hide {
      0% {
         transform: scale(1);
         opacity: 1
      }

      100% {
         transform: scale(.5);
         opacity: 0
      }
   }

   @keyframes swal2-hide {
      0% {
         transform: scale(1);
         opacity: 1
      }

      100% {
         transform: scale(.5);
         opacity: 0
      }
   }

   @-webkit-keyframes swal2-animate-success-line-tip {
      0% {
         top: 1.1875em;
         left: .0625em;
         width: 0
      }

      54% {
         top: 1.0625em;
         left: .125em;
         width: 0
      }

      70% {
         top: 2.1875em;
         left: -.375em;
         width: 3.125em
      }

      84% {
         top: 3em;
         left: 1.3125em;
         width: 1.0625em
      }

      100% {
         top: 2.8125em;
         left: .875em;
         width: 1.5625em
      }
   }

   @keyframes swal2-animate-success-line-tip {
      0% {
         top: 1.1875em;
         left: .0625em;
         width: 0
      }

      54% {
         top: 1.0625em;
         left: .125em;
         width: 0
      }

      70% {
         top: 2.1875em;
         left: -.375em;
         width: 3.125em
      }

      84% {
         top: 3em;
         left: 1.3125em;
         width: 1.0625em
      }

      100% {
         top: 2.8125em;
         left: .875em;
         width: 1.5625em
      }
   }

   @-webkit-keyframes swal2-animate-success-line-long {
      0% {
         top: 3.375em;
         right: 2.875em;
         width: 0
      }

      65% {
         top: 3.375em;
         right: 2.875em;
         width: 0
      }

      84% {
         top: 2.1875em;
         right: 0;
         width: 3.4375em
      }

      100% {
         top: 2.375em;
         right: .5em;
         width: 2.9375em
      }
   }

   @keyframes swal2-animate-success-line-long {
      0% {
         top: 3.375em;
         right: 2.875em;
         width: 0
      }

      65% {
         top: 3.375em;
         right: 2.875em;
         width: 0
      }

      84% {
         top: 2.1875em;
         right: 0;
         width: 3.4375em
      }

      100% {
         top: 2.375em;
         right: .5em;
         width: 2.9375em
      }
   }

   @-webkit-keyframes swal2-rotate-success-circular-line {
      0% {
         transform: rotate(-45deg)
      }

      5% {
         transform: rotate(-45deg)
      }

      12% {
         transform: rotate(-405deg)
      }

      100% {
         transform: rotate(-405deg)
      }
   }

   @keyframes swal2-rotate-success-circular-line {
      0% {
         transform: rotate(-45deg)
      }

      5% {
         transform: rotate(-45deg)
      }

      12% {
         transform: rotate(-405deg)
      }

      100% {
         transform: rotate(-405deg)
      }
   }

   @-webkit-keyframes swal2-animate-error-x-mark {
      0% {
         margin-top: 1.625em;
         transform: scale(.4);
         opacity: 0
      }

      50% {
         margin-top: 1.625em;
         transform: scale(.4);
         opacity: 0
      }

      80% {
         margin-top: -.375em;
         transform: scale(1.15)
      }

      100% {
         margin-top: 0;
         transform: scale(1);
         opacity: 1
      }
   }

   @keyframes swal2-animate-error-x-mark {
      0% {
         margin-top: 1.625em;
         transform: scale(.4);
         opacity: 0
      }

      50% {
         margin-top: 1.625em;
         transform: scale(.4);
         opacity: 0
      }

      80% {
         margin-top: -.375em;
         transform: scale(1.15)
      }

      100% {
         margin-top: 0;
         transform: scale(1);
         opacity: 1
      }
   }

   @-webkit-keyframes swal2-animate-error-icon {
      0% {
         transform: rotateX(100deg);
         opacity: 0
      }

      100% {
         transform: rotateX(0);
         opacity: 1
      }
   }

   @keyframes swal2-animate-error-icon {
      0% {
         transform: rotateX(100deg);
         opacity: 0
      }

      100% {
         transform: rotateX(0);
         opacity: 1
      }
   }

   @-webkit-keyframes swal2-rotate-loading {
      0% {
         transform: rotate(0)
      }

      100% {
         transform: rotate(360deg)
      }
   }

   @keyframes swal2-rotate-loading {
      0% {
         transform: rotate(0)
      }

      100% {
         transform: rotate(360deg)
      }
   }

   body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow: hidden
   }

   body.swal2-height-auto {
      height: auto !important
   }

   body.swal2-no-backdrop .swal2-shown {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      max-width: calc(100% - .625em * 2);
      background-color: transparent
   }

   body.swal2-no-backdrop .swal2-shown>.swal2-modal {
      box-shadow: 0 0 10px rgba(0, 0, 0, .4)
   }

   body.swal2-no-backdrop .swal2-shown.swal2-top {
      top: 0;
      left: 50%;
      transform: translateX(-50%)
   }

   body.swal2-no-backdrop .swal2-shown.swal2-top-left,
   body.swal2-no-backdrop .swal2-shown.swal2-top-start {
      top: 0;
      left: 0
   }

   body.swal2-no-backdrop .swal2-shown.swal2-top-end,
   body.swal2-no-backdrop .swal2-shown.swal2-top-right {
      top: 0;
      right: 0
   }

   body.swal2-no-backdrop .swal2-shown.swal2-center {
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%)
   }

   body.swal2-no-backdrop .swal2-shown.swal2-center-left,
   body.swal2-no-backdrop .swal2-shown.swal2-center-start {
      top: 50%;
      left: 0;
      transform: translateY(-50%)
   }

   body.swal2-no-backdrop .swal2-shown.swal2-center-end,
   body.swal2-no-backdrop .swal2-shown.swal2-center-right {
      top: 50%;
      right: 0;
      transform: translateY(-50%)
   }

   body.swal2-no-backdrop .swal2-shown.swal2-bottom {
      bottom: 0;
      left: 50%;
      transform: translateX(-50%)
   }

   body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
   body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
      bottom: 0;
      left: 0
   }

   body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
   body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
      right: 0;
      bottom: 0
   }

   @media print {
      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
         overflow-y: scroll !important
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
         display: none
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
         position: static !important
      }
   }

   body.swal2-toast-shown .swal2-container {
      background-color: transparent
   }

   body.swal2-toast-shown .swal2-container.swal2-shown {
      background-color: transparent
   }

   body.swal2-toast-shown .swal2-container.swal2-top {
      top: 0;
      right: auto;
      bottom: auto;
      left: 50%;
      transform: translateX(-50%)
   }

   body.swal2-toast-shown .swal2-container.swal2-top-end,
   body.swal2-toast-shown .swal2-container.swal2-top-right {
      top: 0;
      right: 0;
      bottom: auto;
      left: auto
   }

   body.swal2-toast-shown .swal2-container.swal2-top-left,
   body.swal2-toast-shown .swal2-container.swal2-top-start {
      top: 0;
      right: auto;
      bottom: auto;
      left: 0
   }

   body.swal2-toast-shown .swal2-container.swal2-center-left,
   body.swal2-toast-shown .swal2-container.swal2-center-start {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 0;
      transform: translateY(-50%)
   }

   body.swal2-toast-shown .swal2-container.swal2-center {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 50%;
      transform: translate(-50%, -50%)
   }

   body.swal2-toast-shown .swal2-container.swal2-center-end,
   body.swal2-toast-shown .swal2-container.swal2-center-right {
      top: 50%;
      right: 0;
      bottom: auto;
      left: auto;
      transform: translateY(-50%)
   }

   body.swal2-toast-shown .swal2-container.swal2-bottom-left,
   body.swal2-toast-shown .swal2-container.swal2-bottom-start {
      top: auto;
      right: auto;
      bottom: 0;
      left: 0
   }

   body.swal2-toast-shown .swal2-container.swal2-bottom {
      top: auto;
      right: auto;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%)
   }

   body.swal2-toast-shown .swal2-container.swal2-bottom-end,
   body.swal2-toast-shown .swal2-container.swal2-bottom-right {
      top: auto;
      right: 0;
      bottom: 0;
      left: auto
   }

   body.swal2-toast-column .swal2-toast {
      flex-direction: column;
      align-items: stretch
   }

   body.swal2-toast-column .swal2-toast .swal2-actions {
      flex: 1;
      align-self: stretch;
      height: 2.2em;
      margin-top: .3125em
   }

   body.swal2-toast-column .swal2-toast .swal2-loading {
      justify-content: center
   }

   body.swal2-toast-column .swal2-toast .swal2-input {
      height: 2em;
      margin: .3125em auto;
      font-size: 1em
   }

   body.swal2-toast-column .swal2-toast .swal2-validation-message {
      font-size: 1em
   }
   </style>
   <!--<div class="swal2-container swal2-bottom swal2-shown" id="popup-form-browser" style="overflow-y: auto;">-->
   <!--   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;margin:auto!important;">-->
   <!--      <div class="swal2-header">-->
   <!--         <ul class="swal2-progress-steps" style="display: none;"></ul>-->
   <!--         <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>-->
   <!--         </div>-->
   <!--         <div class="swal2-icon swal2-question" style="display: none;"></div>-->
   <!--         <div class="swal2-icon swal2-warning" style="display: none;"></div>-->
   <!--         <div class="swal2-icon swal2-info swal2-animate-info-icon" style="display: flex;"></div>-->
   <!--         <div class="swal2-icon swal2-success" style="display: none;">-->
   <!--            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>-->
   <!--            <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>-->
   <!--            <div class="swal2-success-ring"></div>-->
   <!--            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>-->
   <!--            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">-->
   <!--            </div>-->
   <!--         </div><img class="swal2-image" style="display: none;">-->
   <!--         <h2 class="swal2-title" id="swal2-title" style="display: none;"></h2><button type="button" class="swal2-close" style="display: none;" aria-label="Close this dialog">×</button>-->
   <!--      </div>-->
   <!--      <div class="swal2-content">-->
   <!--         <div id="swal2-content" style="display: block;">क्या आप सभी गेम्स की खबर, लीक नंबर, टिप्स, और ट्रिक्स-->
   <!--            के अपडेट चाहते है?</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;">-->
   <!--         <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select>-->
   <!--         <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label>-->
   <!--         <textarea class="swal2-textarea" style="display: none;"></textarea>-->
   <!--         <div class="swal2-validation-message" id="swal2-validation-message"></div>-->
   <!--      </div>-->
   <!--      <div class="swal2-actions"><button type="button" onclick="getBrowserID()" class="swal2-confirm swal2-styled" style="display: inline-block; background-color: rgb(46, 125, 50); border-left-color: rgb(46, 125, 50); border-right-color: rgb(46, 125, 50);" onclick="notifyMe();" aria-label="">जी हाँ, जरुर</button><button onclick="closePopup()" type="button" class="swal2-cancel swal2-styled" style="display: inline-block; background-color: rgb(244, 67, 54);" aria-label="">नहीं, फिर-->
   <!--            कभी</button></div>-->
   <!--      <div class="swal2-footer" style="display: none;"></div>-->
   <!--   </div>-->
   <!--</div>-->
   <main id="main">


      <!-- ======= Why Us Section ======= -->
      <section class="why-us section-bg">
         <div class="container">

            <div class="row">
               <div class="container">
                  <div class="table-h1" style="text-align: center;">Result {{ \Carbon\Carbon::now()->format('F Y') }}
                  </div>

                  <div class="table-h2" style="text-align: center;">Last Updated Result:
                     <?php
                     $sql = "SELECT max(updated_at) as last_update FROM `subcategory`";
                     $today_data = DB::select($sql);
                     $lastupdate = array_column($today_data, 'last_update', '0');

                     echo $lastupdate = date("F d, Y H:i:s", strtotime($lastupdate['0']));

                     ?>
                     <!--{{ \Carbon\Carbon::now()->format('F d, Y, H:i:s T') }}.-->
                  </div>

                  <div class="table-h3" style="text-align: center;">Satta King Fast Results of

                     {{ \Carbon\Carbon::now()->format('F d, Y') }} &
                     {{ \Carbon\Carbon::now()->subDays()->format('F d, Y') }}
                  </div>

                  <table class="table table-hover">
                     <div class="table-head">
                        <tr style="background:#424242;color:#fff;">
                           <th style="font-size: 20px;">Games List</th>
                           <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->subDay()->format('D dS') }}</th>
                           <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->format('D dS') }}</th>
                        </tr>
                     </div>
                     <tbody>
                        <?php

                        $current_date = date('Y-m-d');
                        $date = date('Y-m-d');
                        $prev_date = date('Y-m-d', strtotime($date . ' -1 day'));
                        $catId = DB::table('category')->where('status', '1')->orderBy('time', 'Asc')->get();

                        $catId = json_decode(json_encode($catId), 'true');
                        $last_update = "SELECT * FROM `subcategory` where date='" . $current_date . "' and status=1 order by time DESC limit 2";
                        $data = DB::select($last_update);

                        foreach ($data as  $value) {
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $value->cat_id . " and date='" . $prev_date . "' and status=1 order by time asc";
                           $previous_data = DB::select($sql);
                           $lastnumber = array_column($previous_data, 'number', '0');

                           $name = DB::select("SELECT * FROM `category` where id=" . $value->cat_id . " and status=1");
                           $name = array_column($name, 'name', '0');
                           // echo "<pre>";
                           // print_r($previous_data);
                           // echo "</pre>";
                        ?>
                        <tr>
                           <td>{{ $name['0'] }} <br>
                              <div class="table-link">at {{ date("h:i A", strtotime($value->time)) }}<a
                                    href="/page/{{$value->cat_id}}"> Record chart</a>
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
                                    if (isset($value->number) && !empty($value->number)) {
                                       if ($value->number == "100") {
                                          echo "00";
                                       } else {
                                          echo  $value->number;
                                       }
                                    } else {
                                       echo "XX";
                                    }
                                    ?></td>

                        </tr>
                        <?php
                        }
                        foreach ($catId as $row) {
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $current_date . "' and status=1 order by time asc";
                           $today_data = DB::select($sql);
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $prev_date . "' and status=1 order by time asc";
                           $previous_data = DB::select($sql);
                           $todaynumber = array_column($today_data, 'number', '0');
                           $lastnumber = array_column($previous_data, 'number', '0');
                           $current_time = date('H:i:s');
                           //          echo "<pre>";
                           // print_r(($todaynumber));
                           // echo "</pre>";

                           if ($row['time'] > $current_time) {
                              $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $current_date . "' and time >'" . $current_time . "' and status=1 order by time asc";
                              $today_data = DB::select($sql);
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
                        }

                        ?>
                     </tbody>

                  </table>
                  <div class="table-h5" style="text-align: center;"><a href="#table-first"> Click here for more games
                        results</a></div>
               </div>
            </div>
         </div>


      </section>
      <!-- End Why Us Section -->

      <!-- ======= Features Section ======= -->

      <!-- < second section table open > -->

      <section class="why-us section-bg">
         <div class="container">

            <div class="row">
               <div class="container">
                  <div class="table-h1" style="text-align: center;">Timewise Superfast Satta King Results of
                     {{ \Carbon\Carbon::now()->format('F d, Y') }} &
                     {{ \Carbon\Carbon::now()->subDays()->format('F d, Y') }}
                  </div>
                  <table class="table table-hover" id="table-first">
                     <div class="table-head">
                        <tr style="background:#424242;color:#fff;">
                           <th style="font-size: 20px;">Games List</th>
                           <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->subDay()->format('D dS') }}</th>
                           <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->format('D dS') }}</th>
                        </tr>
                     </div>
                     <tbody>
                        <?php

                        $current_date = date('Y-m-d');
                        $date = date('Y-m-d');
                        $prev_date = date('Y-m-d', strtotime($date . ' -1 day'));
                        $catId = DB::table('category')->where('status', '1')->orderBy('time', 'Asc')->get();

                        $catId = json_decode(json_encode($catId), 'true');

                        foreach ($catId as $row) {
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $current_date . "' and status=1";
                           $today_data = DB::select($sql);
                           $sql = "SELECT * FROM `subcategory` where cat_id=" . $row['id'] . " and date='" . $prev_date . "' and status=1";
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

            <?php
            $currentMonth = \Carbon\Carbon::now()->format('m');
            $currentYear = \Carbon\Carbon::now()->format('Y');
            $daysInMonth = \Carbon\Carbon::now()->daysInMonth;
            if (isset($_GET['month']) && $_GET['month'] == "1") {
               $daysInMonth = '31';
            }
            if (isset($_GET['month']) && $_GET['month'] == "2") {
               $daysInMonth = '28';
            }
            if (isset($_GET['month']) && $_GET['month'] == "3") {
               $daysInMonth = '31';
            }
            if (isset($_GET['month']) && $_GET['month'] == "4") {
               $daysInMonth = '30';
            }
            if (isset($_GET['month']) && $_GET['month'] == "5") {
               $daysInMonth = '31';
            }
            if (isset($_GET['month']) && $_GET['month'] == "6") {
               $daysInMonth = '30';
            }
            if (isset($_GET['month']) && $_GET['month'] == "7") {
               $daysInMonth = '31';
            }
            if (isset($_GET['month']) && $_GET['month'] == "8") {
               $daysInMonth = '31';
            }
            if (isset($_GET['month']) && $_GET['month'] == "9") {
               $daysInMonth = '30';
            }
            if (isset($_GET['month']) && $_GET['month'] == "10") {
               $daysInMonth = '31';
            }
            if (isset($_GET['month']) && $_GET['month'] == "11") {
               $daysInMonth = '30';
            }
            if (isset($_GET['month']) && $_GET['month'] == "12") {
               $daysInMonth = '31';
            }



            $numbers = [];

            // Fetch the numbers from the database based on the date
            foreach ($sub as $u) {
               $numbers[$u->date][$u->category_name] = $u->number;
            }

            // Get the latest four names
            $latestNames = array_slice(array_unique(array_column($sub->toArray(), 'category_name')), -4);
            ?>
            <div class="table-h1" style="text-align: center;">Monthly Satta King Chart of
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

                        ?> All Satta Companies
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
            </style>
            <div class="table-responsive">
               <table class="table table-bordered table-striped table-hover text-center">

                  <thead style="font-size: 18px;background-color:#FBC503;">
                     <tr>
                        <th style="font-size: 18px;background-color:red;color:#fff;" class="headcol date">DATE</th>
                        <?php
                        // DB::table('category')->orderBy('time', 'Asc')->get();
                        $catId = DB::table('category')->where('status', '1')->orderBy('time', 'Asc')->get();

                        $catId = json_decode(json_encode($catId), 'true');

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


                           $sql1 = "WITH acs AS ( SELECT c.id,c.name,0 as num FROM `category` c UNION ALL SELECT c.id,c.name,sc.number as num FROM category c INNER JOIN subcategory sc ON c.id=sc.cat_id where sc.date='" . $date . "') SELECT id,name,sum(num) as number FROM acs GROUP BY id ORDER BY time ASC";
                           $sql = "WITH acs AS ( SELECT c.time,c.id,c.name,0 as num FROM `category` c UNION ALL SELECT sc.time,c.id,c.name,sc.number as num FROM category c INNER JOIN subcategory sc ON c.id=sc.cat_id where sc.date='" . $date . "' ) SELECT id,name,sum(num) as number FROM acs GROUP BY id ORDER BY time ASC;";
                           $sql3 = "WITH acs AS (SELECT c.time,c.id,c.name,c.status,0 as num FROM `category` c UNION ALL SELECT sc.time,c.id,c.name,c.status,sc.number as num FROM category c INNER JOIN subcategory sc ON c.id=sc.cat_id where sc.date='" . $date . "'  and sc.status='1') SELECT id,name,status,sum(num) as number FROM acs where status='1' GROUP BY id ORDER BY time ASC;";
                           $data1 = DB::select($sql3);

                           $data1 = json_decode(json_encode($data1), true);

                           if (count($data1) > 0 && !empty($data1)) {

                              foreach ($data1 as $row) {

                           ?>
                           <td><?php
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

                                       ?></td>

                           <?php

                              }
                           } else {
                              $catId = DB::table('category')->orderBy('id', 'asc')->get();
                              $catId = json_decode(json_encode($catId), 'true');
                              $catId = array_column($catId, 'id', '0');
                              for ($index = 1; $index <= count($catId); $index++) {


                              ?>
                           <td>XX</td>
                           <?php
                              }
                           }
                           ?>

                        </tr>
                        @endfor



                  </tbody>
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
                        <a href="<?php echo '?date=' . date('m', strtotime('last month')); ?>">
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
                        <a href="#">
                           <h1 class="aero">{{ \Carbon\Carbon::now()->addMonth()->format('M Y') }}</h1>
                        </a>
                        <?php
                        }
                        ?>

                     </td>
                  </tr>
               </table>


            </div>


      </section>
      <!-- ======= Services Section ======= -->
      <div class="container text-center my-3">
         <div class="row mx-auto my-auto justify-content-center mb-5">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner" role="listbox">
                  <!--@foreach($slider->chunk(4) as $key => $slideChunk)-->

                  @foreach($slideChunk as $slide)
                  <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                     <div class="row justify-content-center">
                        <div class="col-md-12">
                           <a href="{{ $slide->link }}" target="_blank">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="{{ asset('images/slider/' . $slide->image) }}" class="img-fluid">
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  @endforeach

                  <!--@endforeach-->
               </div>

               <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               </a>
               <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
               </a>
            </div>
         </div>
      </div>
      <!-- End Services Section -->
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
   </main><!-- End #main -->


   <!--<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>-->

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
   <script src="assets1/js/swiper-bundle.min.js"></script>

   <script>
   function getBrowserID() {
      //   var browserID = navigator.userAgent;
      //   alert('Browser ID: ' + browserID);
      logBrowserID();
      closePopup();
   }

   function closePopup() {
      $("#popup-form-browser").hide();
   }
   </script>

</body>

</html>
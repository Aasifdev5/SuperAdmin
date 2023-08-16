<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets1/owl.carousel.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/assets1/css/style.css')}}" rel="stylesheet">

 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ------------newslider css link---------- -->
      <link rel="stylesheet" href="css/swiper-bundle.min.css" />

</head>

<body>

 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    
      <!-- Slide 1 -->
      
        <div class="header">
            <h5>Today Super Fast Live Satta Results And Chart of June 2023 for Desawar, Desawar King, Chandi Bazar, Nashik Super, Delhi Bazar, Shrimadhopur, Shri Ganesh, Kanpur City, Faridabad, Inderlok, Ghaziabad, Goa Express, Khiladi 786 and Gali from various websites
Like Satta King UP, Upgameking, Satta Bajar, Sattaking and Black Satta Company etc.
</h5>
              <h2 class="animated fadeInDown">Welcome to <span>King Satta</span></h2>
             
         @foreach($datas as $u)
             
              <p class="animated fadeInUp para">{{ $u->description }} <a href="#" style="color: red;">फॉर्म लिंक.</a></p>
              <a href="#" class="btn-get-started animated fadeInUp" data-toggle="modal" data-target="#myModal">Read More</a>
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
 <!-- ======= Services Section ======= -->
<div class="container text-center my-3">
    <div class="row mx-auto my-auto justify-content-center mb-5">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach($slider->chunk(4) as $key => $slideChunk)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            @foreach($slideChunk as $slide)
                                <div class="col-md-3">
                                    <a href="{{ $slide->link }}" target="_blank">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('images/slider/' . $slide->image) }}" class="img-fluid">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
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

 
 
    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="container">
            <div  class="table-h1" style="text-align: center;">Get may 2023</div>
            
            <div class="table-h2"  style="text-align: center;">Updated: May 30, 2023, 18:11:22 IST.</div>
            
            <div class="table-h3"  style="text-align: center;">Satta King Fast Results of May 30, 2023 & May 29, 2023</div>
                     
            <table class="table table-hover">
          <div class="table-head">
    <tr>
        <th style="font-size: 20px;">Games List</th>
        <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->format('D dS') }}</th>
        <th style="font-size: 20px;">{{ \Carbon\Carbon::tomorrow()->format('D dS') }}</th>
    </tr>
</div>
<tbody>
    @foreach($subcategories as $index => $subcategory)
        <tr>
            <td>{{ $subcategory->category_name }} <br>
                <div class="table-link">at{{ $subcategory->time }}<a href="rl.html">Record chat</a></div>
            </td>
            <td>{{ isset($todayRecords[$index]) ? $todayRecords[$index]->number : 'N/A' }}</td>
            <td>{{ isset($tomorrowRecords[$index]) ? $tomorrowRecords[$index]->number : 'N/A' }}</td>
        </tr>
    @endforeach
</tbody>

              
            
              
            </table>
            <div class="table-h5"  style="text-align: center;"><a href="#table-first"> Click here for more games results</a></div>
          </div>
          
         
          

           

          </div>
        </div>

      
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->

    <!-- < second section table open > -->

    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="container">
            <div  class="table-h1" style="text-align: center;">Timewise Superfast Satta King Results of May 31, 2023 & May 30, 2023</div>
            
           
                     
            <table class="table table-hover" id="table-first">
              <div class="table-head">
                 <tr>
                    <th style="font-size: 20px;">Games List</th>
                    <th style="font-size: 20px;">{{ \Carbon\Carbon::now()->format('D dS') }}</th>
                    <th style="font-size: 20px;">{{ \Carbon\Carbon::tomorrow()->format('D dS') }}</th>
                </tr>
              </div>
              <tbody>
    @foreach($subcategories as $index => $subcategory)
        <tr>
            <td>{{ $subcategory->category_name }} <br>
                <div class="table-link">at{{ $subcategory->time }}<a href="rl.html">Record chat</a></div>
            </td>
            <td>{{ isset($todayRecords[$index]) ? $todayRecords[$index]->number : 'N/A' }}</td>
            <td>{{ isset($tomorrowRecords[$index]) ? $tomorrowRecords[$index]->number : 'N/A' }}</td>
        </tr>
    @endforeach
</tbody>
            </table>
          </div>
          
          
          
          

           

          </div>
        </div>

      
    </section>

    <!-- <second section closed table > -->
      <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">

        <div class="container mt-3">
          <div  class="table-h1" style="text-align: center;">Monthly Satta King Chart of May 2023 for Gali, Desawar, Ghaziabad and Faridabad</div>
          
          <div class="table-responsive">
            <table class="table table-bordered text-center">
    <thead style="font-size: 18px;">
        <tr>
            <th>DATE</th>
            <th>DSWR</th>
            <th>FRBD</th>
            <th>GZBD</th>
            <th>GALI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sub as $u)
            <tr>
                <td>{{ $u->date }}</td>
                <td>{{ $u->number }}</td>
                <td>35</td>
                <td>67</td>
                <td>56</td>
            </tr>
        @endforeach
    </tbody>
</table>


          </div>
          <div class="container">
            <div class="row d_flex justify-content-between">
              <div class="col-lg-5 p-3 bg-info text-center" style="font-size: 18px; color:white">Apr 23</div>
               <div class="col-lg-2 p-3 bg-white"></div>
                <div class="col-lg-5 p-3 bg-info text-center" style="font-size: 18px; color:white">Jun 2023</div>
            </div>
          </div><br>
          <div  class="table-h6" style="text-align: center;">Get May-2023 Latest Satta Chart for Gali, Desawar, Ghaziabad And Faridabad <a href="#" > Click Here</div></a>
      </section>

      <!-- <last section open> -->

        <section class="why-us section-bg" data-aos="fade-up" data-aos-delay="200">
          <div class="container mt-3 bg-info">
            <p style="text-align: center; font-size: 18px; margin-top: 10px;">
              Yahan Aap Month Aur Year Select Karke Gali, Desawar, Ghaziabad, Aur Faridabad Ka Combined Chart Dekh Sakte Hai.
            </p>
            <form>
              <div class="row d-flex justify-content-between">
                <div class="col-lg-4">
                  <select class="form-select form-select-lg" style="height: 50px; font-size: 20px;">
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                  </select>
                </div>
                <div class="col-lg-4 mb-5">
                  <select class="form-select form-select-lg" style="height: 50px; font-size: 20px;">
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-danger btn-lg btn-block" style="height: 50px; font-size: 20px;">GO</button>
                </div>
              </div>
            </form>
          </div>
        </section>
        
        

      <!-- <last section close>    -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<!--   <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

   

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->

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
      <script src="js/swiper-bundle.min.js"></script>

</body>

</html>
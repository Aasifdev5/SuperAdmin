@include('admin.layout.header')

<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
@include('admin.layout.sidebar')
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
@include('admin.layout.nav')
<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
  <div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Dashboard Analytics</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="dashboard"><i class="feather icon-home"></i></a>
              </li>
              <li class="breadcrumb-item">
                <a href="#!">Dashboard Analytics</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- [ breadcrumb ] end -->




  </div>
</div>


<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
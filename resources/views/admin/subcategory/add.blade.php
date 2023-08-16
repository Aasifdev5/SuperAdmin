@include('admin.layout.header')

@include('admin.layout.sidebar')

@include('admin.layout.nav')

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
   <div class="pcoded-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
         <div class="page-block">
            <div class="row align-items-center">
               <div class="col-md-12">
                  <div class="page-header-title">
                     <h5 class="m-b-10">Form Elements</h5>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header">
                  <h5>Add SubCategory</h5>
               </div>
               <div class="card-body">
                  <form action="{{url('/savesubcategory')}}" method="post">

                     @if(Session::has('success'))
                     <div class="alert alert-success">{{ Session::get('success') }}</div>
                     @endif
                     @if(Session::has('fail'))
                     <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                     @endif
                     @csrf
                     <?php
                            $session = session()->all();
                            // echo "<pre>";
                            // print_r($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d']);
                            // echo "</pre>";
                            if ($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'] == 1) {


                            ?>
                     <div class="row">
                        <div class="form-group col-md-4">
                           <label for="inputState">Category</label>
                           <select name="data1" id="inputState" class="form-control">
                              <option selected disabled>please select</option>
                              @foreach($data1 as $add)
                              <option value="{{ $add->id }}" class="text-capitalize">
                                 {{ $add->name }}
                              </option>
                              @endforeach
                           </select>
                        </div>

                        <?php
                            } else {
                                $user = DB::select("SELECT * FROM `users` where id='" . $session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'] . "'");
                                $user = array_column($user, 'category_id', '0');
                                $user =    explode(",", $user['0']);

                                ?>

                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="inputState">Category</label>
                              <select name="data1" id="inputState" class="form-control">
                                 <option selected disabled>please select</option>
                                 <?php
                                                foreach ($user as $row) {

                                                    $catname = DB::select("SELECT * FROM `category` where id IN ('" . $row . "')");
                                                    $name = array_column($catname, 'name', '0');
                                                    $id = array_column($catname, 'id', '0');
                                                    print_r($catname);
                                                ?>

                                 <option value="{{ $id['0'] }}" class="text-capitalize">
                                    {{ $name['0'] }}
                                 </option>

                                 <?php
                                                }
                                                // die;              
                                                $time = array_column($catname, 'time', '0');
                                                ?>

                              </select>
                           </div>
                           <?php
                                }
                                    ?>

                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Date</label>
                                 <input type="date" class="form-control" id="exampleFormControlTextarea1" name="date"
                                    required>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Number</label>
                                 <input type="text" class="form-control" id="exampleFormControlTextarea1" name="number"
                                    required>
                              </div>
                           </div>
                           <br>
                           <script type="text/javascript">
                           document.addEventListener('DOMContentLoaded', function() {
                              if (!Notification) {
                                 alert(
                                 'Desktop notifications not available in your browser. Try Chromium.'); //if browser is not compatible this will occur
                                 return;
                              }
                              if (Notification.permission !== "granted")
                                 Notification.requestPermission();
                           });

                           function notifyMe() {
                              if (Notification.permission !== "granted")
                                 Notification.requestPermission();
                              else {
                                 var notification = new Notification('KingSatta (Number Open)', {
                                    icon: 'https://www.codespeedy.com/wp-content/themes/codespeedy/img/CodeSpeedy-Logo.png',
                                    body: "New Notification! Click to Check",
                                 });
                                 notification.onclick = function() {
                                    window.open("https://kingsatta.joblly.in/");
                                 };
                              }
                           }
                           window.onload = notifyMe();
                           notification.onclick = function() {
                              window.open("https://kingsatta.joblly.in/");
                           }
                           </script>

                           <button type="submit" onclick="notifyMe()" class="btn  btn-primary">Submit</button>


                        </div>
                  </form>
               </div>
            </div>
         </div>

      </div>
      <!-- [ Main Content ] end -->

   </div>
</section>


<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>
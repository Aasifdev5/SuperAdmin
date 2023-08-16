@include('admin.layout.header')

@include('admin.layout.sidebar')

@include('admin.layout.nav')



<section class="pcoded-main-container">
   <div class="pcoded-content">
      <!-- [ breadcrumb ] start -->


      <!-- [ Main Content ] start -->
      <div class="row">
         <!-- [ striped-table ] start -->
         <div class="col-xl-12">

            <center>

               <div class="card">
                  <div class="card-header d-flex ">
                     <div class="header-title">
                        <h4 class="card-title">Change Password</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <form action="{{url('update_password')}}" method="POST" class="form-horizontal">
                           @if(Session::has('success'))
                           <div class="alert alert-success">{{Session::get('success')}}</div>
                           @endif
                           @if(Session::has('fail'))
                           <div class="alert alert-danger">{{Session::get('fail')}}</div>
                           @endif
                           @csrf

                           <?php
                           $session = session()->all();
                           $user_id = $session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'];
                           // echo "<pre>";
                           // print_r($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d']);
                           // echo "</pre>";


                           ?>
                           <input type="hidden" name="id" value="{{$user_id}}">
                           <div class="form-group row">
                              <label class="control-label col-sm-3 align-self-center mb-0" for="pass">
                                 Password:</label>
                              <div class="col-sm-9">

                                 <input type="password" class="form-control" id="pass" value="{{old('password')}}" name="password" placeholder="Password">
                                 <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-12">
                                 <button type="submit" class="btn btn-primary btn-block pull-right"> Update
                                 </button>
                              </div>

                           </div>

                        </form>

                     </div>
                  </div>
               </div>
         </div>
         </center>

      </div>

</section>
@include('admin.layout.footer')
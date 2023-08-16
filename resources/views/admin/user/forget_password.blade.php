<!DOCTYPE html>
<html lang="en">

<head>

   <title>Ablepro</title>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="description" content="" />
   <meta name="keywords" content="">
   <meta name="author" content="Phoenixcoded" />
   <!-- Favicon icon -->
   <link rel="icon" href="{{asset('public/assets/images/favicon.ico')}}" type="image/x-icon">

   <!-- vendor css -->
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
   <div class="auth-content">
      <div class="card">
         <div class="row align-items-center text-center">
            <div class="col-md-12">
               <form action="{{ url('forget_mail') }}" method="post">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                  @endif
                  @csrf
                  <div class="card-body">
                     <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
                     <h4 class="mb-3 f-w-400">Forget Password</h4>
                     <div class="form-group mb-3">
                        <label class="floating-label" for="Email">Email address</label>
                        <input type="text" class="form-control" id="Email" placeholder="" name="email">
                     </div>

                     <button class="btn btn-block btn-primary mb-4">Forget Password</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ripple.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>



</body>

</html>
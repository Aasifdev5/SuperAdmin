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
                  <h5>Add Category</h5>
               </div>
               <div class="card-body">
                  <form action="{{url('/updatecategory',$data->id)}}" method="post">

                     @if(Session::has('success'))
                     <div class="alert alert-success">{{ Session::get('success') }}</div>
                     @endif
                     @if(Session::has('fail'))
                     <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                     @endif
                     @csrf
                     @method('PUT')
                     <div class="row">
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">Category</label>
                              <input type="text" class="form-control" id="exampleFormControlTextarea1" name="name"
                                 value="@if (!empty($data)){{ $data->name }}@else{{ old('name') }}@endif" required>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">Time</label>
                              <div class="input-group">
                                 <input type="time" class="form-control" id="exampleFormControlTextarea1" name="time"
                                    value="{{ $data->time }}" required pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]"
                                    title="Please enter a valid time in HH:MM format">

                              </div>
                           </div>
                        </div>
                        <br>
                        <button type="submit" class="btn  btn-primary">Submit</button>

                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- [ form-element ] start -->
         <div class="col-sm-12">



         </div>
         <!-- [ form-element ] end -->
      </div>
      <!-- [ Main Content ] end -->

   </div>
</section>


<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ripple.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
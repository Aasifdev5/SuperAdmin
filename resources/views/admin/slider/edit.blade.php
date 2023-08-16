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
                        <h5>Basic Component</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/updateslider',$data->id)}}" method="post" enctype='multipart/form-data'>

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
                                        <label for="exampleFormControlTextarea1">Image</label>
                                        <input type="file" class="form-control" id="exampleFormControlTextarea1"  name="image">
                                        @if(!empty($data->image))
                            <img src="{{asset('images/slider/'.$data->image) }}" width="80" height="80" style="border-radius: 50%;"></td>
                                                                @endif
                                    </div>
                                </div>
                               <div class="col-sm-4">
                                   <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Link</label>
                                        <input type="link" class="form-control" id="exampleFormControlTextarea1"   name="link" value="@if (!empty($data)){{ $data->link }}@else{{ old('link') }}@endif" required>
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

 
        <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
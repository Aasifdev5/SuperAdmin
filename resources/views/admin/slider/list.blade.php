@include('admin.layout.header')

@include('admin.layout.sidebar')

@include('admin.layout.nav')

<section class="pcoded-main-container">
  <div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Bootstrap Basic Tables</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ striped-table ] start -->
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header">
            <h5>list Slider</h5>
                <div class="btn-group float-right" role="group">
                <a href="{{('/addslider')}}" class="btn btn-outline-primary btn-sm rounded-circle">
                    <i class="fas fa-plus"></i>
                </a>
                </div>
          </div>
          <div class="card-body table-border-style">
            <div class="table-responsive">
              <table class="table table-striped" id="data-table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Link</th>
                
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                     <?php $i = 1; ?>
             @foreach($datas as $u) 
                  <tr>
                    <td>{{ $i }}</td>
                      <td>
                      <img src="{{asset('images/slider/'.$u->image)}}" width="60" height="70" style="border-radius: 50%;">  
                         </td>
                <td>
                        {{ $u->link }}
                    </td>
                    <td>
                     <div class="btn-group" role="group">
                      <div class="btn-group float-right" role="group">
                    <a href="{{ url('editslider', $u->id) }}" class="btn btn-outline-primary btn-sm rounded-circle">
                    <i class="fas fa-edit"></i>
                    </a>
                  </div>
                     
                     <br>
                      <div class="btn-group float-right" role="group">
                    <a href="{{ url('deleteslider', $u->id) }}" class="btn btn-outline-danger btn-sm rounded-circle">
                     <i class="fas fa-trash"></i>
                    </a>
                  </div>
                     </div>

                    </td>
                  </tr>
                <?php $i++; ?>
        @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              
              <div class="col-sm-6">
                <div class="dataTables_paginate paging_simple_numbers">
                  <ul class="pagination justify-content-end" id="pagination"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ striped-table ] end -->
    </div>
    <!-- [ Main Content ] end -->
    <div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h5>slider</h5>
					</div>
					<div class="card-body">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-fluid d-block w-100" src="{{asset('images/slider/'.$u->image)}}" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="img-fluid d-block w-100" src="{{asset('images/slider/'.$u->image)}}" alt="Second slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
						</div>
					</div>
				</div>
			</div>
  </div>
</section>

@include('admin.layout.footer')





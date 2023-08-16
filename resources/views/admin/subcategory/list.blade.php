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
                  <h5>list SubCategory</h5>
                  <div class="btn-group float-right" role="group">
                     <a href="{{('/addsubcategory')}}" class="btn btn-outline-primary btn-sm rounded-circle">
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
                              <th>Category Name</th>
                              <th>Time</th>
                              <th>Date</th>
                              <th>Number</th>

                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php

                           ?>
                           <?php
                           $session = session()->all();
                           // echo "<pre>";
                           // print_r($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d']);
                           // echo "</pre>";
                           if ($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'] == 1) {
                              $i = 1;
                              $date = date('Y-m-d');
                              $prev_date = date('Y-m-d', strtotime($date . ' -7 day'));
                              $sql = "SELECT * FROM `subcategory` where  date between '" . $prev_date . "' and '" . $date . "' order by id desc";
                              $today_data = DB::select($sql);

                           ?>
                           @foreach($today_data as $u)
                           <?php

                              $catname = DB::select("SELECT * FROM `category` where id in ('" . $u->cat_id . "')");
                              $name = array_column($catname, 'name', '0');
                              $time = array_column($catname, 'time', '0');
                              // print_r($catname);
                              ?>

                           <tr>
                              <td>{{ $i }}</td>
                              <td>{{$name['0']}}</td>
                              <td>{{$time['0']}}</td>
                              <td>{{ $u->date }}</td>
                              <td>{{ $u->number }}</td>

                              <td>
                                 <div class="btn-group" role="group">
                                    <div class="btn-group float-right" role="group">
                                       <a href="{{ url('editsubcategory', $u->id) }}"
                                          class="btn btn-outline-primary btn-sm rounded-circle">
                                          <i class="fas fa-edit"></i>
                                       </a>
                                    </div>

                                    <br>
                                    <div class="btn-group float-right" role="group">
                                       <a href="{{ url('deletesubcategory', $u->id) }}"
                                          class="btn btn-outline-danger btn-sm rounded-circle">
                                          <i class="fas fa-trash"></i>
                                       </a>
                                    </div>
                                 </div>

                              </td>
                           </tr>

                           <?php $i++; ?>
                           @endforeach
                           <?php } else {
                              $user = DB::select("SELECT * FROM `users` where id='" . $session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'] . "'");
                              $user = json_decode(json_encode($user), 'true');
                              // $user=    explode(",",$user['0']);

                              $date = date('Y-m-d');
                              $prev_date = date('Y-m-d', strtotime($date . ' -20 day'));

                              $sql = "SELECT * FROM `subcategory` where cat_id in (" . $user['0']['category_id'] . ") and date between '" . $prev_date . "' and '" . $date . "'   order by id desc";
                              $today_data = DB::select($sql);
                              // $number = array_column($today_data, 'number', '0');

                              $i = 1;
                              foreach ($today_data as $row) {
                                 $catname = DB::select("SELECT * FROM `category` where id in ('" . $row->cat_id . "')");
                                 $name = array_column($catname, 'name', '0');
                                 // echo "<pre>";
                                 //       print_r($row->number);
                                 //       echo "</pre>";           


                              ?>
                           <tr>

                              <td>{{ $i }}</td>
                              <td>{{$name['0'] }}</td>
                              <td>{{$row->time}}</td>
                              <td>{{$row->date}}</td>
                              <td>{{$row->number}}</td>
                              <td>
                                 <div class="btn-group" role="group">
                                    <div class="btn-group float-right" role="group">
                                       <a href="{{ url('editsubcategory', $row->id) }}"
                                          class="btn btn-outline-primary btn-sm rounded-circle">
                                          <i class="fas fa-edit"></i>
                                       </a>
                                    </div>

                                    <br>
                                    <div class="btn-group float-right" role="group">
                                       <a href="{{ url('deletesubcategory', $row->id) }}"
                                          class="btn btn-outline-danger btn-sm rounded-circle">
                                          <i class="fas fa-trash"></i>
                                       </a>
                                    </div>
                                 </div>

                              </td>
                           </tr>
                           <?php
                                 $i++;
                              }
                           } ?>
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
   </div>
</section>

@include('admin.layout.footer')
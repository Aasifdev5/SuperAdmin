<nav class="pcoded-navbar menu-light">
   <div class="navbar-wrapper">
      <div class="navbar-content scroll-div">
         <div class="">
            <div class="main-menu-header">
               <img class="img-radius" src="{{asset('assets/images/user/avatar-2.jpg')}}" alt="User-Profile-Image" />
               <div class="user-details">
                  <div id="more-details">

                     <?php
                     $session = session()->all();
                     // echo "<pre>";
                     // print_r($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d']);
                     // echo "</pre>";
                     if ($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'] == 1) {
                        echo "Admin";
                     } else {
                        echo "Number Updator";
                     }

                     ?>
                     <i class="fa fa-caret-down"></i>
                  </div>
               </div>
            </div>
            <div class="collapse" id="nav-user-link">
               <ul class="list-unstyled">
                  <li class="list-group-item">
                     <a href="{{url('change_password')}}" class="dropdown-item">Change
                        Password</a>
                  </li>
                  <li class="list-group-item">
                     <a href="/logout"><i class="feather icon-log-out m-r-5"></i>Logout</a>
                  </li>
               </ul>
            </div>
         </div>

         <ul class="nav pcoded-inner-navbar">

            <li class="nav-item">
               <a href="dashboard" class="nav-link">
                  <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                  <span class="pcoded-mtext">Dashboard</span>
               </a>
            </li>
            <?php
            $session = session()->all();
            // echo "<pre>";
            // print_r($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d']);
            // echo "</pre>";
            if ($session['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'] == 1) {


            ?>
               <li class="nav-item pcoded-hasmenu">
                  <a href="#" class="nav-link">
                     <span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                     <span class="pcoded-mtext">User Management</span>
                  </a>
                  <ul class="pcoded-submenu">
                     <li><a href="/list">User List</a></li>

                  </ul>
               </li>
               <li class="nav-item pcoded-hasmenu">
                  <a href="#" class="nav-link">
                     <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                     <span class="pcoded-mtext">Category Management</span>
                  </a>
                  <ul class="pcoded-submenu">
                     <li><a href="{{('/listcategory')}}">Category </a></li>
                     <li><a href="{{('/listsubcategory')}}">Subcategory </a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="{{('/listslider')}}" class="nav-link">
                     <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                     <span class="pcoded-mtext">Slider</span>
                  </a>
               </li>
               <li class="nav-item pcoded-hasmenu">
                  <a href="#" class="nav-link">
                     <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                     <span class="pcoded-mtext">Content Management</span>
                  </a>
                  <ul class="pcoded-submenu">
                     <li> <a href="{{('/listcontant')}}">main Content</a></li>
                     <li><a href="{{('/listpopup')}}">Pop-Up Content</a> </li>

                  </ul>
               </li>
            <?php
            } else {
            ?>
               <li class="nav-item pcoded-hasmenu">
                  <a href="#" class="nav-link">
                     <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                     <span class="pcoded-mtext">Subcategory Management</span>
                  </a>
                  <ul class="pcoded-submenu">

                     <li><a href="{{('/listsubcategory')}}">Subcategory </a></li>
                  </ul>
               </li>
            <?php
            }
            ?>

         </ul>
      </div>
   </div>
</nav>
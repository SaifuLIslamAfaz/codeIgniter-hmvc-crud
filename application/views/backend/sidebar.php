
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text"> DashRock</h5>
     </a>
	 </div>
	 <div class="user-details">
	  <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
	    <div class="avatar"><img class="mr-3 side-user-img" src="assets/images/avatars/avatar-1.png" alt="user avatar"></div>
	     <div class="media-body">
	     <h6 class="side-user-name"><?php echo $this->session->userdata('name'); ?></h6>
	    </div>
       </div>
	   <div id="user-dropdown" class="collapse">
		  <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
			<li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
		  </ul>
	   </div>
      </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-hsome"></i><span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="index.html"><i class="fa fa-long-arrow-right"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-long-arrow-right"></i> Dashboard v2</a></li>
          <li><a href="index3.html"><i class="fa fa-long-arrow-right"></i> Dashboard v3</a></li>
        </ul>
      </li><li>
        <a href="user" class="waves-effect">
          <i class="user-circle"></i><span>User List</span>
        </a>
      </li>
	  <li>
        <a href="user/user_register/" class="waves-effect">
          <i class="user-circle-o"></i><span>Create User</span>
        </a>
      </li>
	  <li>
        <a href="login/logout/" class="waves-effect">
          <i class="user-circle-o"></i><span>Log Out</span>
        </a>
      </li>
	  </ul>
	 
   </div>
   <!--End sidebar-wrapper-->

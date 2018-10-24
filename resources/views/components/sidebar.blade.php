
<div class="col-md-3 left_col">
	<div class="left_col ">
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
		        <div class="menu_section">
		            <ul class="nav side-menu">
		            @role('admin')
		              <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
		              <li><a href="{{url('peserta')}}"><i class="fa fa-home"></i> Peserta</a></li>
		              <li><a href="{{url('judge')}}"><i class="fa fa-home"></i> Judges</a></li>
		              <li><a href="{{url('sponsor')}}"><i class="fa fa-home"></i> Sponsor</a></li>
		             @endrole

		              @role('user')
		              <li><a href="{{url('user/home')}}"><i class="fa fa-home"></i> Dashboard </a></li>
		              <li><a href="{{url('user/profile-acuan')}}"><i class="fa fa-home"></i> Data Profile Acuan </a></li>
		              <li><a href="{{url('user/data_dan_perhitungan')}}"><i class="fa fa-home"></i> Data Profile </a></li>
		              <li><a href="{{url('user/data_perangkingan')}}"><i class="fa fa-home"></i> Perangkingan</a></li>
		              @endrole

		            </ul>
		        </div>
		</div>

		<!-- /top navigation -->
    
   		 <!--top-nav-menu-->
        <!-- /menu footer buttons -->
	    <div class="sidebar-footer hidden-small">
	      <a data-toggle="tooltip" data-placement="top" title="Settings">
	        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	      </a>
	      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
	        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
	      </a>
	      <a data-toggle="tooltip" data-placement="top" title="Lock">
	        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
	      </a>
	      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
	        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
	      </a>
	    </div>
    	<!-- /menu footer buttons -->
  	</div>
</div>
<template>
  <div class="container">
      <!-- navbar header -->
      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a class="logo" href="index.html">
           <img class="logo-img" :src="'./img/kkbrc-logo-alt.png'" alt="logo">
					 <img class="logo-alt-img" :src="'./img/logo-kkbrc.png'" alt="logo">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Mobile toggle -->
        <button class="navbar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        <!-- /Mobile toggle -->
      </div>
      <!-- /navbar header -->

      <!-- Navigation -->
      <nav id="nav">
        <ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="/home">Home</a></li>
			          <li><a href="/about">Rules of Regulations</a></li>
			          <!-- <li><a href="/schedule">Schedule</a></li> -->
			          <li><a href="/judges">Judges</a></li>
			          <!-- <li><a href="/sponsors">Sponsors</a></li> -->
			          <li><a href="/register">Register</a></li> 
				</ul>
      </nav>
      <!-- /Navigation -->
  </div>

        
</template>

<script>
export default {};
</script>


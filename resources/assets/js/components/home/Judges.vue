<template>
<div id="speakers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span class="appear">Our</span> <span class="appear" style="color: #c28d4b;">Judges</span></h3>
				</div>
				<!-- section title -->

				<div class="row">
				<div class="col-md-3 col-sm-6" v-for="i, index in judges">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img :src="'/img/judges/' + i.img" alt="" width="450px" height="350px">
						</div>
						<div class="speaker-body">
							<!-- <div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div> -->
							<div class="speaker-content">
								<span>{{i.name}}</span>
								<span></span>
							</div>
						</div>
					</div>
					
				</div>	
				<div align="center">
					<a href="judges" class="main-btn">More</a>
				</div>
							
			</div>

				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
</template>

<script>
export default {
  data() {
    return {
      judges: [
        { name: "John Chendra", img: "john_chendra.jpg" },
        { name: "Ronald Prasanto", img: "ronald_prasanto.jpg" },
        { name: "Richard Haryanto", img: "richard_haryanto.jpg" },
        { name: "Laila Dimyati", img: "laila_dimyati.jpg" }
      ]
    };
  }
};
</script>
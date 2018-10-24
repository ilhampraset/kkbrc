<template>
<div>
	<h1 class="title"><span>Our</span> <span style="color: #c28d4b;">Judges</span></h1>
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<!-- section title -->
				<!-- speaker -->
				<div class="col-md-3 col-sm-6" v-for="i in judges">
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
			</div>
			<!-- /row -->
		</div>

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
        { name: "Laila Dimyati", img: "laila_dimyati.jpg" },
        { name: "Dwi Kartika Sari ", img: "dwi_sari_kartika.jpg" },
        { name: "Echi Mahardika", img: "echi_mahardika.jpg" },
        { name: "Andri Mahardika", img: "andri-mahardika.jpg" }
      ]
    };
  }
};
</script>
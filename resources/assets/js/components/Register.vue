<template>
<div>
	<div v-if='registerStatus == false'>
		<h1>Register</h1>
		<form @submit.prevent="sendRegister" v-if="register">
				<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input class="input" type="text" placeholder="Name" v-model='form.name'>
					</div>
					<div class="form-group">
						<input class="input" type="text" placeholder="Phone Number" v-model='form.phoneNumber'>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="input" type="email" placeholder="Email" v-model='form.email'>
					</div>
					<div class="form-group">
						<input class="input" type="text" placeholder="Domicile" v-model='form.domicile'>
					</div>
				</div>
				<div class="col-md-12">
				
					<div class="form-group">
						<select class="input" id='from' v-model='form.represent'>
							<option value="" disabled>Represent</option>
							<option value="coffeeshop">CoffeeShop</option>
							<option value='independent'>Independent</option>
						</select>
					</div>
						
					<div v-if="form.represent == 'coffeeshop'" >
						<div class="form-group">		
							<input class="input" type="text"  v-model='form.coffeeshopName' placeholder="Coffee Shop Name">
						</div>
						
					</div>
					<div class="form-group">
						<input type="file" @change="onImageChange" placeholder="Foto Peserta">
						</div>
					<button type='submit' class="main-btn">Submit</button>
				</div>

				
			</div>
		</form>
		{{$data.form}}
			<h3 class="title" v-if="!register"><span class="appear">Will Available</span> <span class="appear" style="color: #c28d4b;">Soon</span></h3>
	</div>

	<div v-if="registerStatus == true">
		<h3 class="title"><span class="appear"></span>Pendaftaran Anda Telah Berhasil</span></h3>
		<h4 class="title"><span class="appear"></span> Anda Akan Mendapatkan Email Konfirmasi Status Pendaftaran Anda</span></h4>
		<h3 class="title"><span class="appear"></span>Terima Kasih</span></h3>
	</div>
</div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        represent: "",
        coffeeshopName: "",
        phoneNumber: "",
        image: ""
      },
      register: true,
      registerStatus: false
    };
  },
  methods: {
    async sendRegister() {
      const config = {
        headers: { "content-type": "multipart/form-data" }
      };

      let formData = new FormData();
      for (let [key, value] of Object.entries(this.form)) {
        formData.append(key, value);
      }
      let reg = await axios.post("/api/v1/peserta", formData, config);
      console.log(reg);
      if (reg.data.message) {
        this.registerStatus = true;
        //browser.history.deleteAll();
      }
    },
    representChange() {
      if (this.form.represent == "coffeeshop") {
        this.represent = "";
      } else {
        this.coffeeshopName = "";
      }
    },
    onImageChange(e) {
      this.form.image = e.target.files[0];
      console.log(this.form.image);
    }
  }
};
</script>
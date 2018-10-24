<template>
<div>
	<h1>Register</h1>
	<form @submit.prevent="sendRegister" v-if="register">
			<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input class="input" type="text" placeholder="Name" v-model='form.name'>
				</div>
				<div class="form-group">
					<input class="input" type="text" placeholder="Phone Number" v-model='form.phonNumber'>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input class="input" type="email" placeholder="Email" v-model='form.email'>
				</div>
				<div class="form-group">
					<input class="input" type="email" placeholder="Domicile" v-model='form.email'>
				</div>
			</div>
			<div class="col-md-12">
			
				<div class="form-group">
					<select class="input" id='from'v-model='form.represent'>
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
						<input  type="file" placeholder="Foto Peserta" >
					</div>
				<button type='submit' class="main-btn">Submit</button>
			</div>

			
		</div>
	</form>
		<h3 class="title"><span class="appear">Will Available</span> <span class="appear" style="color: #c28d4b;">Soon</span></h3>
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
        coffeeshopName: ""
      },
      register: false
    };
  },
  methods: {
    async sendRegister() {
      let reg = await axios.post("/api/v1/peserta", this.form);
      console.log(reg);
    },
    representChange() {
      if (this.form.represent == "coffeeshop") {
        this.represent = "";
      } else {
        this.coffeeshopName = "";
      }
    }
  }
};
</script>
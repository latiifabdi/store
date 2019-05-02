<template>
	<button :class="{'is-loading': loading}" class="button is-success" @click.prevent="openStripe">
		Buy now
	</button>
</template>

<script>
	export default {
		props: ['amount'],

		data() {
			return {
				stripeToken: '',
				stripeEmail: '',
				loading: false,
			}
		},

		created() {
			console.log(StripeCheckout);
			this.stripe = StripeCheckout.configure({
			  key: 'pk_test_X28Nwy6MIrcwhW61kRy9aEye',
			  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
			  locale: 'auto',
			  token: token => {
			  	console.log(token.id);
			  	this.stripeToken = token.id;
			  	this.stripeEmail = token.email;

			  	this.submit()
			  }
			});

			window.addEventListener('popstate', function() {
  				this.stripe.close();
			});
		},

		methods: {
			openStripe() {
				this.stripe.open({
    				description: '2 widgets',
    				amount: this.amount,
				})
			},

			submit() {
				this.loading = true;

				axios.post("/checkout", {
					stripeEmail: this.stripeEmail,
					token: this.stripeToken,
					amount: this.amount
				}).then(response => {
					this.loading = false;
					window.location.href = '/success';
				}).catch(error => {
					console.log(error);
				})
			}
		}
	};

</script>


console.log('mail')

const { createApp } = Vue

createApp({
	data() {
		return {
			message: 'Elenco email',
			emailAddresses: [],
		}
	},
	methods: {
		fetchEmails(num) {
			for (let i = 0; i < num; i++) {
				console.log('chiedo la mail al server')
				axios
					.get('https://flynn.boolean.careers/exercises/api/random/mail')
					.then((res) => {
						console.log(res.data)
						const mail = res.data.response
						this.emailAddresses.push(mail)
					})
			}
		},
	},
	created() {
		this.fetchEmails(10)
	},
}).mount('#app')

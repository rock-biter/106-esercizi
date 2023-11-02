console.log('hello API')

const { createApp } = Vue

// console.log(axios)

createApp({
	data() {
		return {
			message: 'Hello',
			name: '',
		}
	},
	methods: {
		fetchName() {
			axios
				.get('https://flynn.boolean.careers/exercises/api/random/name')
				.then((res) => {
					console.log(res, res.data)
					const nome = res.data.response
					this.name = nome
				})
		},
	},
	created() {
		this.fetchName()
	},
}).mount('#app')

// axios
// 	.get('https://flynn.boolean.careers/exercises/api/random/name')
// 	.then((res) => {
// 		// res contiente la risposta del server
// 		console.log('dopo la risposta del server')
// 		console.log(res.data)
// 	})

// console.log('dopo la richiesta')

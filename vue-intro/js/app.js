console.log(Vue)
// destrutturazione di un oggetto
// const { createApp } = Vue
const createApp = Vue.createApp
const num = 20

const param = {
	data: function () {
		return {
			// qui ci saranno tutte le nostre variabili
			num: 0,
			message: 'ciao Mondo',
			className: 'bg-red text-yellow',
			inputValue: 'ciao mamma',
			numeri: [0, 5, 6, 9, 8, 4, 5, 8],
		}
	},
	methods: {
		onClick: function () {
			console.log(this.numeri[this.num])
			this.num++
			// console.log('ho cliccato!', this.num)
			console.log(this)
			// this.getRandomInt(this.num, 100)
		},
		getRandomInt(min, max) {
			console.log('numero random', min, max)
			// return num
		},
	},
}

const app = createApp(param)
console.log(app)

app.mount('#app')

// createApp({
// 	data() {
// 		return {
// 			message: 'Hello Vue!',
// 		}
// 	},
// }).mount('#app')

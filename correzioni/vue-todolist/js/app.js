console.log('todolist')

const { createApp } = Vue

createApp({
	data() {
		return {
			message: 'Hello Vue!',
			newTodoText: '',
			todos: [
				{
					text: 'Fare i compiti',
					done: false,
				},
				{
					text: 'Fare la spesa',
					done: true,
				},
				{
					text: 'Fare il bucato',
					done: false,
				},
				{
					text: 'Mangiare',
					done: false,
				},
			],
		}
	},
	methods: {
		deleteTask(i) {
			console.log('delete task')
			this.todos.splice(i, 1)
		},
		addTask() {
			// console.log(this.newTodoText)
			const text = this.newTodoText
			if (text !== '') {
				const newTask = {
					text: text,
					done: false,
				}

				this.todos.push(newTask)
			}

			this.newTodoText = ''
		},
		toggleTask(task) {
			task.done = !task.done
			// if (task.done === true) {
			// 	task.done = false
			// } else {
			// 	task.done = true
			// }
		},
	},
}).mount('#app')

const a = 3

// a < 3 ? 'Ciao' : 'Arrivederci'

// if(a< 3) {
//   return 'Ciao'
// } else {
//   return 'Arrivederci'
// }

// const numeri = [2,6,9,5,9]

// numeri.forEach( (numero,index) => {
//   console.log(numero,index)
// } )

// console.log(numero,index)

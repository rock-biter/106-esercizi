const persona = {
	name: 'Gianluca',
	age: 33,
	job: 'freelancer',
	// address: {
	//   city: 'Ferrara',
	//   street: 'Via di la, 33',
	//   postalCode: '25649'
	// },
	saluta() {
		console.log('Mi chiamo ' + this.name)
	},
}

persona.saluta()

const persona2 = {}
persona2.name = 'Maria'
persona2.age = 16
persona2.job = null

console.log('Ciao mi chiamo ' + persona2.name)

console.log(persona.address?.city)

console.log('oggetti')

// const macchina = {
// 	marca: 'Ford',
// 	colore: 'Grigio metallizzato',
// 	cilindrata: 1600,
// 	modello: 'Fiesta',
// 	targa: 'FG564PP',
// 	prezzo: 14000,
// 	accesa: false,
// 	passeggeri: [],
// 	nomePropieta: 'questa è Sparta!',
// 	// proprietario: {
// 	// 	nome: 'Gianluca',
// 	// 	cognome: 'Lomarco',
// 	// },
// 	// accendi: function () {
// 	// 	console.log('brum brum')
// 	// },
// }

// // console.log(macchina.prezzo)
// // console.log(macchina['prezzo'])

// // // macchina.accendi()
// // // console.log(window)
// // const proprietario = macchina.proprietario
// // console.log(proprietario.nome)

// // macchina.passeggeri.push('Maria', 'Carlo')

// // macchina.cavalli = 75

// // console.log(macchina)

// // const nomeUtente = prompt('Il tuo nome')
// // const cognomeUtente = prompt('il tuo cognome')

// // const utente = {
// // 	nome: nomeUtente,
// // 	cognome: cognomeUtente,
// // }

// // utente.eta = 32
// // console.log(utente)

// // macchina.proprietario = utente

// // console.log(macchina.length)

// const nomePropieta = prompt(
// 	'Quale proprieta vuoi conoscnere della tua macchina?'
// )

// // console.log(nomePropieta)

// // console.log(macchina.nomePropieta)
// // // macchina.nomePropieta
// // // macchina['colore']
// console.log(macchina[nomePropieta])

// for (let nomePropieta in macchina) {
// 	// console.log(nomePropieta)
// 	const valore = macchina[nomePropieta]
// 	console.log(nomePropieta, valore)
// }

// macchina.proprietario = 'Mimmo'

const studenti = [
	{
		nome: 'Gianluca',
		cognome: 'Lomarco',
	},
	{
		nome: 'Mario',
		cognome: 'Filippetti',
	},
	{
		nome: 'Filippo',
		cognome: 'Carlotti',
	},
	{
		nome: 'Mimmo',
		cognome: 'Petricca',
	},
]

const numeri = [3, 6, 5, 9, 8, 4]

// console.log(studenti[0].nome, studenti[1], studenti.at(-1))

for (let i = 0; i < studenti.length; i++) {
	const studenteCorrente = studenti[i]
	// console.log(studenteCorrente)
	const fullname = `${studenteCorrente.nome} ${studenteCorrente.cognome}`
	console.log(fullname)
}

const A = {
	nome: 'Gianluca',
}

const C = A

C.cognome = 'Ciao'
console.log(A, C)

const B = {
	nome: 'Gianluca',
}

console.log(A === B)

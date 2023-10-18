console.log('JS SIMON')

// let score = 0
// genero i numeri e li mostro
const numbers = getRandomIntergers(1, 100, 5)
alert(numbers)

// parte il timer e dopo 30s chiedo i 5 numeri all'utente
setTimeout(() => {
	// console.log('chiedere i numeri al utente')
	const numeriUtente = []
	const numeriIndovinati = []

	for (let i = 0; i < 5; i++) {
		console.log('chiedo un numero', i + 1)

		const numero = parseInt(prompt('Inserisci uno dei numeri vincenti'))
		console.log(numero)

		// if (!numeriUtente.includes(numero)) {
		numeriUtente.push(numero)
		// }

		if (numbers.includes(numero) && !numeriIndovinati.includes(numero)) {
			numeriIndovinati.push(numero)
		}
	}

	// controllare quanti e quali numeri utente sono stati indovinati
	// array di numeri generati
	// console.log(numbers, numeriUtente)

	// // const numeriIndovinati = []

	// for (let i = 0; i < numeriUtente.length; i++) {
	// 	const numeroCorrente = numeriUtente[i]
	// 	// console.log(numbers.includes(numeroCorrente), numeroCorrente)
	// 	// if (
	// 	// 	numbers.includes(numeroCorrente) &&
	// 	// 	!numeriIndovinati.includes(numeroCorrente)
	// 	// ) {
	// 	// 	numeriIndovinati.push(numeroCorrente)
	// 	// }
	// }

	console.log(numeriIndovinati)

	alert(
		'hai indovinato ' +
			numeriIndovinati.length +
			' numeri! ' +
			numeriIndovinati.join(', ')
	)
}, 3000)

function getRandomIntergers(min, max, num) {
	const numbers = []

	while (numbers.length < num) {
		n = getRandomIntInclusive(min, max)

		if (!numbers.includes(n)) {
			numbers.push(n)
		}
	}

	return numbers
}

function getRandomIntInclusive(min, max) {
	min = Math.ceil(min)
	max = Math.floor(max)
	return Math.floor(Math.random() * (max - min + 1) + min) // The maximum is inclusive and the minimum is inclusive
}

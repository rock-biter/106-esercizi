console.log('pari e dispari')

// generare un numero random da 1 a 6
// sapere se un numero è pari
// sapere se un numero è dispari

let scelta = prompt('Scrivi pari o dispari').toLowerCase()

let numeroGicoatore = getRandomIntInclusive(1, 6)
let numeroPC = getRandomIntInclusive(1, 6)

let somma = numeroGicoatore + numeroPC
console.log(numeroGicoatore, numeroPC, somma, scelta)

// if (isEven(somma) && scelta === 'pari') {
// 	console.log('hai vinto')
// } else if (!isEven(somma) && scelta === 'dispari') {
// 	console.log('hai vinto')
// } else {
// 	console.log('hai perso')
// }

if (
	(isEven(somma) && scelta === 'pari') ||
	(!isEven(somma) && scelta === 'dispari')
) {
	console.log('hai vinto')
} else {
	console.log('hai perso')
}

function isEven(number) {
	if (number % 2 === 0) {
		return true
	} else {
		return false
	}
}

function isOdd(number) {
	if (number % 2 !== 0) {
		return true
	} else {
		return false
	}
}

function getRandomIntInclusive(min, max) {
	min = Math.ceil(min)
	max = Math.floor(max)
	return Math.floor(Math.random() * (max - min + 1) + min) // The maximum is inclusive and the minimum is inclusive
}

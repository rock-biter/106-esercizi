console.log('function', 12, [0, 2, 3])

// const age = prompt('dimmi la tua eta')
const sommaCalcolata = sum(21, -3, 5, 10, 56, 59)

function sum(numA, numB) {
	const sum = numA + numB
	console.log(sum)
	return sum

	// tutto cio che sta dopo l'esecuzione di un return non viene eseguito
	console.log(sum)
}

// const sum = 10 + 5 quest ci da errore

// console.log(somma)

// // console.log(sum)
console.log(sommaCalcolata)

// console.log(somma(2, 2), somma(15, 9), somma(85, -10))

function getRandomIntInclusive(min, max) {
	min = Math.ceil(min)
	max = Math.floor(max)
	return Math.floor(Math.random() * (max - min + 1) + min) // The maximum is inclusive and the minimum is inclusive
}

const valoreMax = 10.5
const valoreMin = 1.9

const numerUtente = getRandomIntInclusive(valoreMin, valoreMax)
const numeroPc = getRandomIntInclusive(1, 6)

if (numerUtente > numeroPc) {
	console.log('hai vinto')
} else if (numeroPc > numerUtente) {
	console.log('hai perso')
} else {
	console.log('e un paraggio')
}

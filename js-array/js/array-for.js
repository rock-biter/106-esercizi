console.log('array con ciclo for')

const nomiUtente = ['Gianluca', 'Maria', 'Carlotta', 'Franco', 'Mimmo']
// console.log(nomiUtente)

// let index = 3
// console.log(nomiUtente[index])
// nomiUtente[4] = 'Germano'

const lunghezzaArray = nomiUtente.length

for (let i = 0; i < lunghezzaArray; i++) {
	const nomeCorrente = nomiUtente[i]
	// console.log(i, nomeCorrente)
}

const lastIndex = nomiUtente.length - 1

for (let i = lastIndex; i > 0; i--) {
	const nomeCorrente = nomiUtente.at(i)
	// console.log(i, nomeCorrente)
}

const numbers = [12, 25, 69, 4, 5, 36, 2, 56, 8, 9, 7, 12]
console.log(numbers)

for (let i = 0; i < numbers.length; i++) {
	const currentNumber = numbers[i]

	if (currentNumber % 2 === 0) {
		console.log(currentNumber)
	}
}

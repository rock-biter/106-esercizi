// funzione che rioran treu quando il numero è pari
function isEven(num) {
	// ...
	if (num % 2 === 0) {
		return true

		console.log(num)
	}

	return false
}

// const number = parseInt(prompt('inserisci un numero'))

// if (isEven(number)) {
// 	console.log('il numero è pari')
// } else {
// 	console.log('il numero è dispari')
// }

function isMultipleOf(numeratore, denominatore) {
	if (numeratore % denominatore === 0) {
		return true
	} else {
		return false
	}
	// return numeratore % denominatore === 0
}

// const num = parseInt(prompt('inserisci un numeratore'))
// const den = parseInt(prompt('Inserisci il denominatore'))

// if (isMultipleOf(num, den)) {
// 	console.log(`${num} è multiplo di ${den}`)
// } else {
// 	console.log(`${num} non è multiplo di ${den}`)
// }

// FIZZBUZZ
for (let i = 0; i < 100; i++) {
	const n = i + 1
	// console.log(n)

	if (isMultipleOf(n, 15)) {
		console.log('FIZZBUZZ')
	} else if (isMultipleOf(n, 5)) {
		console.log('BUZZ')
	} else if (isMultipleOf(n, 3)) {
		console.log('FIZZ')
	} else {
		console.log(n)
	}
}

function getInnerHTML(DOMElement) {
	return DOMElement.innerHTML
}

function quadrato(number) {
	const risultato = number * number
	return risultato
}

// const num = parseFloat(prompt('Dammi un numero e ti dirò il quadrato!'))

function print(DOMElement) {
	document.body.appendChild(DOMElement)
}

const element = document.createElement('div')
element.classList.add('container')
element.innerHTML = '<p>Ciao sono un container!</p>'

print(element)

const buttonElement = document.getElementById('increment')
console.log(buttonElement)

buttonElement.addEventListener('click', onClick)

function onClick() {
	console.log('incremento il contatore')
}

const nomi = ['Miriam', 'Benedetta', 'Maria', 'Anita']

function addNameTo(nome, arrayDiNomi) {
	let nuovoArray = []

	for (let i = 0; i < arrayDiNomi.length; i++) {
		nuovoArray.push(arrayDiNomi[i])
	}

	nuovoArray.push(nome)
	return nuovoArray
}

console.log(addNameTo('Gianluca', nomi))
console.log(nomi)

let i = 9

function incrementa(index) {
	index++
	return index
}

i = incrementa(i)
// console.log(incrementa(i))
console.log(i)

const nome = 'Gianluca'

for (let i = 0; i < nome.length; i++) {
	const char = nome.charAt(i)
	console.log(char)
}

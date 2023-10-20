console.log('nuove cose')

const name = 'Gianluca'
const age = 32

const user = { name, age }
/*
{
  name: name,
  age: age
}
 */

console.log(user)

// const propName = prompt('dimmi la proprietà da aggiungere')
// const valoreProp = prompt('Ora divvi il valore')
// console.log(propName, valoreProp)

// creare oggetti con prop dinamiche
const car = {
	plate: '25698IT',
	model: 'Fiesta',
	colore: 'Bianco',
	anno: 1990,
	// [propName]: valoreProp,
}

const { plate, model, ...altreProps } = car
console.log(plate, model, altreProps)

const carB = duplicaCar(car)
const carC = duplicaCar(carB)

// console.log(car[propName])
carB.colore = 'Rosso'
carB.plate = 'ko153po'

let carD = {
	...car,
	anno: 1999,
	cilindrata: 1600,
}

console.log(car, carB, carD)

function duplicaCar({ plate, model }) {
	const newCar = {
		plate: plate,
		model: model,
	}

	return newCar
}

function somma(a, b, ...numeri) {
	console.log(a, b, numeri)

	let sum = a + b

	numeri.forEach((num) => (sum += num))

	return sum

	// return a + b + c + d + e + f + g
}

console.log(somma(5, 9, 7))
console.log(somma(5, 9))
console.log(somma(5, 9, 10, 6, 9, 45))
console.log(somma(5, 9, 1, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1))

const numeri = [10, 23, 5, 9, 6, 4, 8]
console.log(numeri)

const numeriCopia = [...numeri, 126]

// numeri.forEach((num) => numeriCopia.push(num))
// numeriCopia.push(126)
console.log(numeriCopia)

console.log(somma(...numeri))

// const numeri = ...numeri // cosi non funziona

const [numA, , numB, ...rest] = numeriCopia
console.log(numA, numB, rest)

const [primaLettera, ...altreLettere] = 'gianluca'
console.log(primaLettera, altreLettere)

console.log(primaLettera.toUpperCase() + altreLettere.join(''))

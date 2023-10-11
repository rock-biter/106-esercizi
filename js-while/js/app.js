// console.log('while loop')

// while (false /*condizione*/) {
// 	// codice da eseguire
// 	console.log('while loop')
// }

// do {
// 	console.log('do while loop')
// } while (false)

// WHILE
// let num = Math.floor(Math.random() * 100) + 1
// console.log(num)
// // console.log(num, num % 7 === 0)

// while (num % 7 === 0) {
// 	num = Math.floor(Math.random() * 100) + 1
// 	// console.log(num)
// }

// DO WHILE
// let num

// do {
// 	num = Math.floor(Math.random() * 100) + 1
// 	console.log(num)
// } while (num % 7 !== 0)

// console.log(num + ' è un multiplo di 7!')

// FOR COME WHILE
// let num = Math.floor(Math.random() * 100) + 1
// console.log(num)

// while (null; num % 7 !== 0; null) {
// 	num = Math.floor(Math.random() * 100) + 1
// 	console.log(num)
// }

// console.log(num + ' è un multiplo di 7!')

// Generiamoci 10 numeri pari da 1 a 100

// chiedi eta allútente finche non inserisce un numero maggiore uguale a zero e non nan
let age = parseInt(prompt('eta'))
console.log(age)

while (isNaN(age) || age < 0) {
	age = parseInt(prompt('eta'))
	console.log(age)
}

console.log('hai: ' + age + ' anni.')

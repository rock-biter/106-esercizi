console.log('arrow fn')

console.log(somma(2, 8))

function somma(a, b) {
	return a + b
}

// console.log(sum(8, 6)) // errore non puoi usare sum prima della dichiarazione

// RETURN ESPLICITO
// const sum = (a, b) => {
// 	return a + b
// }

// RETURN IMPLICITO
const sum = (a, b) => a + b

const isEven = (n) => n % 2 === 0

const isPalindrome = (parola) => {
	// ...

	return true || false
}

console.log(sum(5, 12))

const random = () => Math.random()

console.log(random())

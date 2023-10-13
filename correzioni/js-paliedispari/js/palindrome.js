console.log('Palindroma')

const parolaUtente = prompt('Dimmi una parola e ti dirò se è palindroma')
console.log(parolaUtente)

if (isPalindrome(parolaUtente)) {
	console.log('la parola è palindroma')
} else {
	console.log('La parola non è palindroma')
}

// 'anna' -> length = 4

function isPalindrome(parola) {
	parola = parola.toLowerCase()
	parola = parola.replaceAll(' ', '')
	console.log(parola)

	let parolaRovesciata = ''

	// for che costruisce la parola rovesciata
	for (let i = parola.length - 1; i >= 0; i--) {
		const char = parola.charAt(i)
		console.log(i, char)
		parolaRovesciata += char
	}

	console.log(parola, parolaRovesciata)

	if (parola === parolaRovesciata) {
		return true
	} else {
		return false
	}
}

const parolaRovesciata = parolaUtente.split(' ').reverse().join('')
console.log(parolaRovesciata)

// const splitted = parolaUtente.split('')
// console.log(splitted.reverse())

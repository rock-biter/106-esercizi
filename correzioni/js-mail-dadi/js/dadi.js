console.log('dadi')

const numeroUtente = Math.floor(Math.random() * 6) + 1
const numeroPc = Math.floor(Math.random() * 6) + 1

console.log(numeroUtente, numeroPc)

let message = 'Pareggio!'

if (numeroUtente > numeroPc) {
	message = 'Hai vinto!'
} else if (numeroPc > numeroUtente) {
	message = 'Hai perso!'
}

console.log(message)

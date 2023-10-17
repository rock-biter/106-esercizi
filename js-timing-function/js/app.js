console.log('timing function')

const idInterval = setInterval(() => {
	console.log('è passato un secondo')
}, 1000)

console.log(idInterval)

const idPrimoTimeout = setTimeout(function () {
	console.log('sono passati 2 secondi')

	// alertPippo()
}, 2000)
console.log(idPrimoTimeout)

const idSecondoTimeout = setTimeout(tempoScaduto, 5000)
console.log(idSecondoTimeout)

function tempoScaduto() {
	console.log('Il tempo è scaduto!')

	// interrompiano l'interval
	clearInterval(idInterval)
}

console.log('ho registrato i due set interval')

function alertPippo() {
	alert('Pippo')
}

// alertPippo()

console.log('ciao')

const PREZZO_PER_KM = 0.21
const SCONTO_OVER_65 = 40
const SCONTO_MINORENNI = 20

const btnDOMElement = document.getElementById('btn-print')
const distanceDOMElement = document.querySelector('[name="distance"]')
const discountDOMElement = document.querySelector('[name="discount"]')
const priceDOMElement = document.getElementById('price')
// console.log(distanceDOMElement)
// console.log(discountDOMElement)
// console.log(btnDOMElement)

document.getElementById('btn-reset').addEventListener('click', function () {
	distanceDOMElement.value = ''
	console.log('reset')
})

btnDOMElement.addEventListener('click', function () {
	// tutto il codice che calco il biglietto
	// console.log('calcolo biglietto')

	// chiedere quanti km deve percorrere
	const distanza = parseFloat(distanceDOMElement.value)

	const name = 'Gian'

	const distanceNotValid = isNaN(distanza) || distanza < 0
	const nameNotValid = name === ''

	if (distanceNotValid) {
		// il numero non è valido
		alert('La distanza non è valida')
	} else if (nameNotValid) {
		alert('Il nome non è valido')
	} else {
		const selectedDiscount = parseInt(discountDOMElement.value)

		// console.log(distanza, selectedDiscount)

		// calcolare il prezzo base del biglietto:
		const prezzoBase = distanza * PREZZO_PER_KM
		// console.log('prezzo base: ' + prezzoBase)

		// calcolare lo sconto:
		let sconto = 0

		if (selectedDiscount === 2) {
			sconto = (prezzoBase * SCONTO_OVER_65) / 100
		} else if (selectedDiscount === 0) {
			sconto = (prezzoBase * SCONTO_MINORENNI) / 100
		}

		// console.log('sconto: ' + sconto)
		// calcolare il prezzo finale
		const prezzoFinale = prezzoBase - sconto
		// console.log('prezzo finale: ' + prezzoFinale)

		//stampare nella pagina il costo con max 2 decimali
		priceDOMElement.innerHTML = prezzoFinale.toFixed(2)
	}
})

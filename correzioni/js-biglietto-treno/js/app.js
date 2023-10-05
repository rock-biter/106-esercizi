console.log('Calcolo biglietto del treno')

const PREZZO_PER_KM = 0.21
const SCONTO_OVER_65 = 40
const SCONTO_MINORENNI = 20

// chiedere quanti km deve percorrere
const distanza = parseFloat(prompt('Quanti km devi percorrere?'))

// chiedere l'età del passeggero
const eta = parseInt(prompt('Quanti anni hai?'))

console.log(distanza, eta)

// calcolare il prezzo base del biglietto:
const prezzoBase = distanza * PREZZO_PER_KM
console.log('prezzo base: ' + prezzoBase)

// calcolare lo sconto:
let sconto = 0

if (eta > 65) {
	sconto = (prezzoBase * SCONTO_OVER_65) / 100
} else if (eta < 18) {
	sconto = (prezzoBase * SCONTO_MINORENNI) / 100
}

console.log('sconto: ' + sconto)
// calcolare il prezzo finale
const prezzoFinale = prezzoBase - sconto
console.log('prezzo finale: ' + prezzoFinale)

//stampare nella pagina il costo con max 2 decimali
const prezzoArrotondato = prezzoFinale.toFixed(2)
console.log(typeof prezzoArrotondato, prezzoArrotondato)
document.getElementById('price').innerHTML = prezzoArrotondato
console.dir(document.getElementById('price'))

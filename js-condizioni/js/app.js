// console.log('js if else')

// # chiedere due parole e stampare in console quella più lunga

// const parola = prompt('Inserisci una parola')
// const parola2 = prompt("Inserisci un'altra parola")

// const lunghezzaParola1 = parola.length
// const lunghezzaParola2 = parola2.length

// console.log(lunghezzaParola1, lunghezzaParola2)

// let parolaPiuLunga

// if (lunghezzaParola1 > lunghezzaParola2) {
// 	parolaPiuLunga = parola
// 	// console.log('la parola più lunga è: ' + parola)
// } else if (lunghezzaParola2 > lunghezzaParola1) {
// 	parolaPiuLunga = parola2
// 	// console.log('la parola più lunga è: ' + parola2)
// } else {
// 	parolaPiuLunga = 'le parole sono uguali'
// }

// console.log('la parola più lunga è: ' + parolaPiuLunga)

// //  - chiedere l'eta della prima persona
// let eta1 = prompt('eta prima persona')
// // if(eta1 === '') {
// //   alert('Inserisci un numero valido')
// // }
// // eta1 = parseInt(eta1)
// //  - chidere l'eta della seconda persona
// const eta2 = parseInt(prompt('eta seconda persona'))
// //  - dire chi è più grande:
// //   - capire chi è più grande:
// console.log(typeof eta1, typeof eta2)

// if (isNaN(eta1) || isNaN(eta2)) {
// 	console.log('I dati inseriti non sono validi')
// } else {
// 	if (eta1 > eta2) {
// 		//     - SE eta1 > eta2
// 		//       - la prima persona è più grande
// 		console.log('la prima persona è più grande')
// 	} else if (eta2 > eta1) {
// 		//     - ALTRIMENTI SE eta2 > eta1
// 		//       - la seconda persona è più grande
// 		console.log('la seconda persona è più grande')
// 	} else {
// 		//     - ALTRIMENTI
// 		//       - le persone hanno la stessa età
// 		console.log('le persone hanno la stessa età')
// 	}
// }

//non ci va mai il punto e virgola alla fine dei blocchi

//   - stampare quale persona è più grande

// # pari o dispari

// - chidere all'utente di scegliere tra pari e dispari
// const sceltaUtente = prompt('Scrivi pari o dispari')
// console.log(sceltaUtente)

// // - chiediamo all'utente un numero da 1 a 10
// const numeroUtente = parseInt(prompt('Inserisci un numero da 1 a 10'))
// console.log(numeroUtente)
// // - generiamo un numero random da 1 a 10 (del pc)
// const numeroPc = Math.floor(Math.random() * 10) + 1
// console.log(numeroPc)
// // - stabilire il vincitore:
// //   - calcolare la somma dei due numeri
// const sum = numeroPc + numeroUtente
// console.log(sum)
// //   - SE utente ha scelto pari e somma è pari

// let moduloSomma = sum % 2
// let message

// if (sceltaUtente === 'pari' && moduloSomma === 0) {
// 	console.log('Hai vinto!!')
// 	message = 'hai vinto'
// } else if (sceltaUtente === 'dispari' && moduloSomma === 1) {
// 	console.log('Hai vinto!!')
// 	message = 'hai vinto'
// } else {
// 	console.log('Hai perso!!')
// 	message = 'hai perso'
// }

//     - utente ha vinto
//   - ALTRIMENTI SE utente ha scelto dispari e la somma è dispari
//     - utente ha vinto
//   - ALTRIMENTI
//     - utente ha perso

// const now = new Date()
// console.log(now)

let nome = 'Gianluca'
let age = 32

if (age > 50) {
	let messaggio = 'Sei maturo'
	console.log(nome, age)
} else {
	let messaggio = 'Benvenuta giovinezza'
	console.log(nome, age)

	if (age % 2 === 0) {
		console.log(messaggio)
	}
}

// qui ci da errore
console.log(messaggio)

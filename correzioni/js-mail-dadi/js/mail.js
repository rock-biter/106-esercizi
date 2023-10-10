console.log('mail')

const emailUtente = prompt('Inserisci la mail')
console.log(emailUtente)

const elencoEmail = [
	'gian@gmail.com',
	'pippo@gmail.com',
	'carletto@gmail.com',
	'mimmo@gmail.com',
	'mamma@gmail.com',
]

console.log(elencoEmail)

let emailTrovata = false

for (let i = 0; i < elencoEmail.length; i++) {
	const emailCorrente = elencoEmail[i]
	console.log(i, emailCorrente)
	if (emailUtente === emailCorrente) {
		emailTrovata = true
		// window.emailTrovata = true
	}
}

// console.log(emailTrovata)
if (emailTrovata) {
	console.log('Accesso consentito')
} else {
	console.log('Accesso negato')
}

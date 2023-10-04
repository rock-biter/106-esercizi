// console.log('funziona')

// # Generatore di password (poco sicure)

// - chiedere all'utente il suo nome:
//   - dichiarare una variabile dove salvare il nome
const userName = prompt('Inserisci il tuo nome.')
//   - tramite un promp assegnare il nome dell'utente alla variabile
// userName = prompt('Inserisci il tuo nome.')
// console.log(userName)
// - chiedere il suo cognome
//   - dichiarare una variabile dove salvare il cognome
//   - tramite un promp assegnare il cognome dell'utente alla variabile
const userSurname = prompt('Inserisci il tuo cognome')
// - chiedere il colore preferito
//   - dichiarare una variabile dove salvare il colore
//   - tramite un promp assegnare il colore dell'utente alla variabile
const userColor = prompt('Inserisci il tuo colore preferito.')
console.log(userName, userSurname, userColor)
// - generere un numero
//   - inizializzare una varibile che contiene un numero
let num = Math.random() * 100
num = Math.floor(num)
num = num + ''
// - generare password
//   - dichiariamo un avariabile chiamata password
//   - assegnamo alla variabile la concatenazione di nome, cognome, colore e numero
const password = userName + userSurname + userColor + num
console.log(password)
// - stampare la password nella pagina
//   - recuperare dal DOM un elemento in base all'id:
//     - dichiarare una variabile e tramite getElementById assegnargli il valore
const passwordDomElement = document.getElementById('password')
console.log(passwordDomElement)
//   - modifcare l'innerHTML con il valore di password
passwordDomElement.innerHTML = password

// console.log(Math.random() * 100)

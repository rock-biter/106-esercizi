// - chidere all'utente il suo nome:
//   - dichiarare una variabile
let userName
//   - assegnare alla variabile il valore restituito da un prompt
userName = prompt('Ciao, come ti chiami?')
console.log(userName)

// - coincatenare il nome dell'utente con una messagggio di saluti:
//   - dichiarare una variabile con contient la prima parte del messagio
let firstPartOfMessage = 'Ciao'
//   - dichiarare una variabile message dove concateniamo le due stringhe
let message = firstPartOfMessage + ' ' + userName
console.log(message)

// - stampare il messaggio dentro un h1:
//   - inserire nell'html un tag h1 con id="message"
//   - recuperare con js l'elementi del dom con id = 'message'
const messageDomElement = document.getElementById('message')
console.dir(messageDomElement)
//   - modificare l'innerHTML del h1 con il valore della variabile message
messageDomElement.innerHTML = message

const age = prompt('quanti anni hai?')

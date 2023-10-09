console.log('Array')

// dichiarare un variabile di tipo array
const nomi = ['Maria', 'Gianni', 'Marco', 'Anna']
// dichiariamo un array vuoto
const num = []

// aggiungiamom un elemento alla fine degli array
num.push(5)

nomi.push('Mimmo', 'Marta', 'Carlo')
console.log('nomi ha ' + nomi.length + " elementi all'interno")

console.log(nomi)

// typeof nomi => 'object'
console.log(typeof nomi === 'array') // false

// dichirando una variale senza valore
let numeri
// numeri.push(2) // errore
// successivamente gli assegnamo un array popolato
numeri = [2, 3, 6]

// leggere il primo elemento di un array
console.log(nomi[0])

// leggere l'ultimo elemento dell'array
const lunghezzaArray = nomi.length
const lastIndex = lunghezzaArray - 1
console.log(
	lunghezzaArray,
	lastIndex,
	nomi[lastIndex],
	nomi.at(-1),
	nomi.at(-2)
)
// console.log(nomi[lastIndex])

// leggere gli elementi dell'array con at()

// primo elemento
nomi.at(0)

// ultimo
nomi.at(lastIndex)
// con -1 prendiamo il primo elemento ma partendo dalla coda dell'array
nomi.at(-1)

// pop => toglie un elemento dal fondo

// shift => toglie un elmento dall'inizio

// unshift => aggiunge un elemento all'inizio
nomi.reverse()
console.log(nomi) // inverte l'array modifcando la variabile nomi

console.log(nomi.toReversed()) // ritorna un nuovo array invertito (nomi non viene modificato)

console.log(nomi[0])

// let n = 20
// console.log(n.toFixed(2))
// console.log(n)

// let nome = 'MARIA'
// console.log(nome.toLowerCase())
// console.log(nome)

let numeroUtente = '23'
numeroUtente = parseInt(numeroUtente)

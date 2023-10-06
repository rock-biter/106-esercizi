console.log('foor loop')

for (let i = 0; i < 10; i++) {
	const n = i + 1
	// console.log(n)
}

for (let i = 10; i > 0; i--) {
	// console.log(i)
}

// console.log('fuori dal tunnelllll')
for (let i = 0; i < 50; i++) {
	let n = (i + 1) * 2
	// console.log(n)
	// dopo aver eseguito tutto il condedice tra le graffe
	// js esegue l'istruizione incremento (i+=2)
}

// 1. let i = 1

// 2. verifica se 1 < 100

// 3. eseguei il condice tra parentei graffe
// console.log(1)

// 4. esegue istruzione incremento
// i += 2

// 5. verifica che 3 < 100

//

const gridDOMElement = document.querySelector('.grid')
console.log(gridDOMElement)

for (let i = 0; i < 100; i++) {
	const n = i + 1
	const boxString = '<div class="box">' + n + '</div>'
	// const boxDOMElement = document.createElement('div')
	// boxDOMElement.classList.add('box')
	// boxDOMElement.innerHTML = n
	// // console.dir(boxDOMElement)
	// console.log(n)
	// gridDOMElement.append(boxDOMElement)
	// gridDOMElement.innerHTML += boxDOMElement.outerHTML
	// gridDOMElement.innerHTML += boxString
	// gridDOMElement.innerHTML = gridDOMElement.innerHTML + boxString
}

// 1. let i = 0  // DICHIRAZIONE INDICE

// 2. i (0) < 100 => true  // VERIFICA DELLA CONDIZIONE

// 3. // ESEGUE TUTTO IL CODICE NELLE GRAFFE
// n = 1
// abbiamo un box dentro a grid

// 4. i++ // ISTRUZIONE DI INCREMENTO => (i = 1)

// 5. i (1) < 100 => true // VERIFICA DELLA CONDIZIONE

// 6.  // ESEGUE TUTTO IL CODICE NELLE GRAFFE
// n = 2
//

for (let i = 0; i < 100; i++) {
	let n = i + 1

	const resto = n % 7

	if (resto === 0) {
		console.log(n, resto)
	}
}

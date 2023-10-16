console.log('griglia')

const gridElement = document.querySelector('.grid')
console.log(gridElement)

const playBtnElement = document.getElementById('play-btn')
console.log(playBtnElement)

playBtnElement.addEventListener('click', function () {
	// svuota la griglia dalle celle generate in precedenza
	gridElement.innerHTML = ''

	const bombe = getArrayOfRandomIntBetween(1, 100, 16)
	console.log(bombe)

	// generare 100 nuove caselle da inserire nella
	for (let i = 0; i < 100; i++) {
		const n = i + 1
		// console.log(n)

		const htmlCell = '<div class="cell">' + n + '</div>'
		// console.log(htmlCell)

		gridElement.innerHTML = gridElement.innerHTML + htmlCell
	}

	// recupero tutte le caselle create
	const cellDomElements = document.querySelectorAll('.cell')
	// console.log(cellDomElements)

	// ciclando l'array con le caselle del dom
	for (let i = 0; i < cellDomElements.length; i++) {
		const currentCellElement = cellDomElements[i]
		// console.log(currentCellElement)

		// ad ogni casella aggiungo l'event listener
		currentCellElement.addEventListener('click', function () {
			console.log(currentCellElement.classList.contains('bg-green'))

			currentCellElement.classList.add('bg-green')
			// prendo il numero della casella

			// - SE il numero della casella è presente nell'array di bombe
			// - aggiungialo la classe bg-red
			// - game over
			// - ALTRIMENTI
			// - incrementiamo il punteggio
			// - aggiungo la classe bg-blue
			// - SE utente ha vinto
			// - stampiamo hai vinto con il punteggio
		})
	}
})

function getArrayOfRandomIntBetween(minRange, maxRange, number) {
	const bombsArray = []

	// popolare l'array con 16 numeri random non duplicati
	while (bombsArray.length < number) {
		// generare un numero random da rangeMin a rangeMAx
		const n = getRandomIntInclusive(minRange, maxRange)
		// console.log(n)
		// SE n non è presente nell'array di bombe
		console.log(bombsArray.includes(n))
		if (bombsArray.includes(n) === false) {
			// pushare il numero nell'array di bombe
			bombsArray.push(n)
		}

		// if(!bombsArray.includes(n)) {
		// 	bombsArray.push(n)
		// }

		// ALTRIOMENTI
		// non devo pushare il numero
	}

	// return array di numeri generati
	return bombsArray
}

function getRandomIntInclusive(min, max) {
	min = Math.ceil(min)
	max = Math.floor(max)
	return Math.floor(Math.random() * (max - min + 1) + min) // The maximum is inclusive and the minimum is inclusive
}

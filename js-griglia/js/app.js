console.log('griglia')

const gridElement = document.querySelector('.grid')
console.log(gridElement)

const playBtnElement = document.getElementById('play-btn')
console.log(playBtnElement)

const scoreDOMElement = document.getElementById('score')
console.log(scoreDOMElement)

let score = 0
let bombe = []
let numberOfCells = 100
let numberOfBombs = 16
let maxScore = numberOfCells - numberOfBombs

playBtnElement.addEventListener('click', function () {
	// svuota la griglia dalle celle generate in precedenza
	gridElement.innerHTML = ''
	score = 0

	bombe = getArrayOfRandomIntBetween(1, numberOfCells, numberOfBombs)
	console.log(bombe)

	// generare 100 nuove caselle da inserire nella
	for (let i = 0; i < numberOfCells; i++) {
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
		currentCellElement.addEventListener('click', onClick, { once: true })
	}
})

function onClick(event) {
	console.log(event)
	const currentCellElement = this
	const cellNumber = parseInt(currentCellElement.innerHTML)
	console.log(cellNumber, bombe)

	let className = 'bg-blue'

	// - SE il numero della casella è presente nell'array di bombe
	if (bombe.includes(cellNumber)) {
		// console.log('ho trovato una bomba')
		className = 'bg-red'
		// game over

		gameOver()
	} else {
		// console.log('sono salvo')
		score++
		console.log('punteggio: ' + score, maxScore)
		scoreDOMElement.innerHTML = score

		if (score === maxScore) {
			alert('you win')
		}
	}

	currentCellElement.classList.add(className)

	// rimuovo l'event listener
	// currentCellElement.removeEventListener('click', onClick)
}

function gameOver() {
	alert('Game over')
	// recuperare tutte le caselle dal dom
	// per ogni cella della griglia
	// togliere event listener
	// SE è una bomba
	// aggiungi classe bg-red
}

function isBomb(number, bombs) {
	if (bombs.includes(number)) {
		return true
	}

	return false
}

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

console.log('griglia')

const gridElement = document.querySelector('.grid')
console.log(gridElement)

const playBtnElement = document.getElementById('play-btn')
console.log(playBtnElement)

playBtnElement.addEventListener('click', function () {
	// svuota la griglia dalle celle generate in precedenza
	gridElement.innerHTML = ''

	// generare 100 nuove caselle da inserire nella
	for (let i = 0; i < 100; i++) {
		const n = i + 1
		console.log(n)

		const htmlCell = '<div class="cell">' + n + '</div>'
		// console.log(htmlCell)

		gridElement.innerHTML = gridElement.innerHTML + htmlCell
	}

	// recupero tutte le caselle create
	const cellDomElements = document.querySelectorAll('.cell')
	console.log(cellDomElements)

	// ciclando l'array con le caselle del dom
	for (let i = 0; i < cellDomElements.length; i++) {
		const currentCellElement = cellDomElements[i]
		// console.log(currentCellElement)

		// ad ogni casella aggiungo l'event listener
		currentCellElement.addEventListener('click', function () {
			currentCellElement.classList.add('bg-green')
		})
	}
})

// qui non ci sono caselle nel DOM!!!
const cellDomElement = document.querySelector('.cell')
console.log(cellDomElement)

function onCellClick() {
	console.log(this, this.innerHTML) // conicide con l'elemento del dom che ha scatenato l'evento click
	// console.log('ho clicca sulla casella number: ' + i)

	this.classList.add('bg-green')
}

const titolo = document.querySelector('h1')
const paragrafo = document.querySelector('p')

titolo.addEventListener('click', onCellClick)

paragrafo.addEventListener('click', onCellClick)

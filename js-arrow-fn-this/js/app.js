console.log('this')

const btnDOMElement = document.getElementById('incrementa')

console.log(btnDOMElement)

// btnDOMElement.addEventListener('click', function () {
// 	console.log('click su icrementa', this) // this === btnDOMElement
// })

// function onMouseEnter() {
// 	console.log('sono entrato sull elemento', this)
// 	let btnEl = this
// 	btnEl.classList.toggle('active')
// }

// btnDOMElement.addEventListener('mouseenter', onMouseEnter)

// const onMouseOut = () => {
// 	console.log('sono uscito', this) // this === Window
// }

// btnDOMElement.addEventListener('mouseout', onMouseOut)

// btnDOMElement.addEventListener('click', function (event) {
// 	console.log('on click', event)
// 	console.log(this, event.target) // this e event.target possono coincidere a volte
// })

const gridDOMElement = document.querySelector('.grid')

for (let i = 0; i < 100; i++) {
	gridDOMElement.innerHTML += `<div class="cell">
    ${i + 1}
  </div>`
}

gridDOMElement.addEventListener('click', function (event) {
	console.log(this, event.target)

	const cellDOMElement = event.target
	console.log('casella numero: ' + cellDOMElement.innerHTML)
	cellDOMElement.classList.add('bg-green')
})

gridDOMElement.addEventListener('click', (event) => {
	console.log(this, event.target)
})

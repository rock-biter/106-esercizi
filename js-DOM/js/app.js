console.log('DOM')

// // prendiamo il reiferimento al box
// const boxDOMElement = document.querySelector('.box')
// console.dir((boxDOMElement.parentElement.style.backgroundColor = '#ffba54'))

// // const prevClassName = boxDOMElement.className
// // boxDOMElement.className = boxDOMElement.className + ' red'
// // boxDOMElement.className += ' red'
// boxDOMElement.classList.add('red')
// boxDOMElement.classList.remove('circle')

// // let sum = 20
// // // sum = sum + 10
// // sum += 10
// boxDOMElement.style.backgroundColor = '#452659'

// boxDOMElement.innerHTML = '<p>questo è un box</p>'

// let altroP = '<p style="display: inline-block;">altro paragrafo</p>'
// console.log('style: ' + altroP.toUpperCase())
// boxDOMElement.innerHTML += altroP

// let p = '<p>ciao</p>'
// boxDOMElement.append(p) // non possiamo usare html con append

// console.log(boxDOMElement.style)

// prendo il pulsante dal DOM
const btnDOMElement = document.getElementById('btn-calc')
console.log(btnDOMElement)

const inputDOMElement = document.getElementById('kg-mele')
console.log(inputDOMElement)

const prezzoDOMElement = document.querySelector('.price')

const selDOMElement = document.getElementById('discount')

btnDOMElement.addEventListener('click', function () {
	// const

	console.log(selDOMElement.value)

	// recupero dall'input il valore delláttributo value
	const kg = parseFloat(inputDOMElement.value)
	console.log(kg)

	// calcolando il prezzo
	const prezzo = kg * 5.32
	console.log(prezzo)

	// stampo il prezzo
	prezzoDOMElement.innerHTML = '<p>' + prezzo.toFixed(2) + '&euro;</p>'
})

// btnDOMElement.addEventListener('mouseenter', function () {
// 	console.log('mouse enter')
// })

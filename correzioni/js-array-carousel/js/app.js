console.log('carosello')

const imagesSrc = [
	'./img/01.webp',
	'./img/02.webp',
	'./img/03.webp',
	'./img/04.webp',
	'./img/05.webp',
]

const carouselDOMElement = document.querySelector('.carousel')
console.log(carouselDOMElement, imagesSrc)

for (let i = 0; i < imagesSrc.length; i++) {
	console.log(imagesSrc[i])
	const src = imagesSrc[i]

	const html = `<img class="carousel__item" src="${src}" alt="" />`

	carouselDOMElement.innerHTML = carouselDOMElement.innerHTML + html
	// console.log(carouselDOMElement)
}

// recuperando dal DOM tutte le immagini stampate nel ciclo for
const itemDOMElements = document.querySelectorAll('.carousel__item')
console.log(itemDOMElements)

// meorizzando lo stato del carosello (indice della slide attiva)
let currentIndex = 4

// aggiunedo la classe active alla slide attiva
let currentSlide = itemDOMElements[currentIndex]
currentSlide.classList.add('active')

// carousel controls
const arrowTop = document.querySelector('.carousel .arrow--top')
const arrowBottom = document.querySelector('.carousel .arrow--bottom')
console.dir(arrowTop, arrowBottom)

arrowBottom.addEventListener('click', function () {
	console.log('click bottom')

	console.log(itemDOMElements[currentIndex + 1])

	// prenedere la slide attiva
	// togliere la classe active alla slide attiva

	// prendere la slide successiva
	// togliere aggiungere alla slide successiva la classe active
	// incrementare il valore di currentIndex
})

arrowTop.addEventListener('click', function () {
	console.log('click top')

	console.log(itemDOMElements[currentIndex])
})

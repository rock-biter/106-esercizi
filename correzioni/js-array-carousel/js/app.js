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
	const htmlThumb = `<img class="carousel__item--thumb" src="${src}" alt="" />`

	const thumbsDOMElement = carouselDOMElement.querySelector('.thumbs')
	thumbsDOMElement.innerHTML += htmlThumb
	carouselDOMElement.innerHTML = carouselDOMElement.innerHTML + html
	// console.log(carouselDOMElement)
}

// recuperando dal DOM tutte le immagini stampate nel ciclo for
const itemDOMElements = document.querySelectorAll('.carousel__item')
console.log(itemDOMElements)

// meorizzando lo stato del carosello (indice della slide attiva)
let currentIndex = 0

// aggiunedo la classe active alla slide attiva
let currentSlide = itemDOMElements[currentIndex]
currentSlide.classList.add('active')

// carousel controls
const arrowTop = document.querySelector('.carousel .arrow--top')
const arrowBottom = document.querySelector('.carousel .arrow--bottom')
console.dir(arrowTop, arrowBottom)

arrowBottom.addEventListener('click', function () {
	console.log('click bottom')

	// prendere la slide successiva
	// const nextSlideElement = itemDOMElements[currentIndex + 1]

	// if (nextSlideElement) {
	// 	// prenedere la slide attiva
	// 	const activeSlideElement = itemDOMElements[currentIndex]
	// 	console.log(activeSlideElement)
	// 	// togliere la classe active alla slide attiva
	// 	activeSlideElement.classList.remove('active')

	// 	// // aggiungere alla slide successiva la classe active
	// 	nextSlideElement.classList.add('active')
	// 	// incrementare il valore di currentIndex
	// 	currentIndex++
	// }

	// soluzione con loop
	const activeSlideElement = itemDOMElements[currentIndex]
	activeSlideElement.classList.remove('active')

	if (currentIndex === itemDOMElements.length - 1) {
		currentIndex = 0
	} else {
		currentIndex++
	}

	const nextSlideElement = itemDOMElements[currentIndex]
	nextSlideElement.classList.add('active')
})

arrowTop.addEventListener('click', function () {
	console.log('click top')

	// console.log(itemDOMElements[currentIndex])
	// const prevSlideElement = itemDOMElements[currentIndex - 1]

	// if (prevSlideElement) {
	// 	const activeSlideElement = itemDOMElements[currentIndex]
	// 	activeSlideElement.classList.remove('active')

	// 	prevSlideElement.classList.add('active')
	// 	currentIndex--
	// }

	const activeSlideElement = itemDOMElements[currentIndex]
	activeSlideElement.classList.remove('active')

	if (currentIndex === 0) {
		currentIndex = itemDOMElements.length - 1
	} else {
		currentIndex--
	}

	const nextSlideElement = itemDOMElements[currentIndex]
	nextSlideElement.classList.add('active')
})

console.log('carousel')

const images = [
	{
		image: './img/01.webp',
		title: "Marvel's Spiderman Miles Morale",
		text: 'Experience the rise of Miles Morales as the new hero masters incredible, explosive new powers to become his own Spider-Man.',
	},
	{
		image: './img/02.webp',
		title: 'Ratchet & Clank: Rift Apart',
		text: 'Go dimension-hopping with Ratchet and Clank as they take on an evil emperor from another reality.',
	},
	{
		image: './img/03.webp',
		title: 'Fortnite',
		text: 'Grab all of your friends and drop into Epic Games Fortnite, a massive 100 - player face - off that combines looting, crafting, shootouts and chaos.',
	},
	{
		image: './img/04.webp',
		title: 'Stray',
		text: 'Lost, injured and alone, a stray cat must untangle an ancient mystery to escape a long-forgotten city',
	},
	{
		image: './img/05.webp',
		title: "Marvel's Avengers",
		text: "Marvel's Avengers is an epic, third-person, action-adventure game that combines an original, cinematic story with single-player and co-operative gameplay.",
	},
]

console.log(images)

let currentIndex = 0

const slidesWrapperEl = document.querySelector('.slides-wrapper')
const thumbnailsEl = document.querySelector('.thumbnails')

for (let i = 0; i < images.length; i++) {
	const slide = images[i]

	const image = slide.image
	const title = slide.title
	const text = slide.text

	let className = 'slide'

	if (i === currentIndex) {
		className += ' active'
	}

	const htmlSlide = `
  <div class="${className}">
    <img class="slide__img" src="${image}" alt="" />
    <div class="slide__content">
      <h3>${title}</h3>
      <p>${text}</p>
    </div>
  </div>
  `

	const htmlThumb = `<img class="thumbnails__item" data-index="${i}" src="${image}" alt="" />`

	slidesWrapperEl.innerHTML += htmlSlide
	thumbnailsEl.innerHTML += htmlThumb
}

const slideElements = document.querySelectorAll('.slide')
const thumbnailElements = document.querySelectorAll('.thumbnails__item')
// console.log(thumbnailElements)

thumbnailElements.forEach((thumb, i) => {
	thumb.addEventListener('click', function () {
		// console.log('click su thumbnail', thumb, i)

		// const index = parseInt(this.dataset.index)

		// goToSlide(index)
		goToSlide(i)
	})
})

function onClickThumb() {}

// slideElements[currentIndex].classList.add('active')
const arrowUP = document.querySelector('.arrow-up')
const arrowDOWN = document.querySelector('.arrow-down')

arrowUP.addEventListener('click', prevSlide)

arrowDOWN.addEventListener('click', nextSlide)

function nextSlide() {
	console.log('next slide')

	slideElements[currentIndex].classList.remove('active')

	if (currentIndex === slideElements.length - 1) {
		currentIndex = 0
	} else {
		currentIndex++
	}

	slideElements[currentIndex].classList.add('active')
}

function prevSlide() {
	console.log('prev slide')

	// slideElements[currentIndex].classList.remove('active')

	// if (currentIndex === 0) {
	// 	currentIndex = slideElements.length - 1
	// } else {
	// 	currentIndex--
	// }

	// slideElements[currentIndex].classList.add('active')

	let index
	if (currentIndex === 0) {
		index = slideElements.length - 1
	} else {
		index = currentIndex - 1
	}

	goToSlide(index)
}

function goToSlide(index) {
	console.log('attivo la slide n', index)

	slideElements[currentIndex].classList.remove('active')

	currentIndex = index

	slideElements[currentIndex].classList.add('active')
}

let autoplay //= setInterval(nextSlide, 3000)

const carouselEl = document.querySelector('.carousel')

carouselEl.addEventListener('mouseenter', () => {
	console.log('mouse enter')
	clearInterval(autoplay)
	autoplay = null
})

carouselEl.addEventListener('mouseleave', () => {
	console.log('mouse leave')
	if (!autoplay) {
		autoplay = setInterval(nextSlide, 3000)
	}
})

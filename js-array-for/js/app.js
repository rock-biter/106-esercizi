console.log('ciao')

const images = [
	'https://picsum.photos/id/1/200/300',
	'https://picsum.photos/id/7/200/300',
	'https://picsum.photos/id/3/200/300',
	'https://picsum.photos/id/4/200/300',
	'https://picsum.photos/id/10/200/300',
]

const galleryDOMElement = document.querySelector('.gallery')
console.log(galleryDOMElement)

console.log(images)
for (let i = 0; i < images.length; i++) {
	// console.log(i)
	const currentSrc = images[i]
	console.log(currentSrc)

	const htmlString = `
  <div class="image">
    <img src="${currentSrc}">
  </div>
  `
	console.log(htmlString)
	galleryDOMElement.innerHTML += htmlString
	// somma = numero
}

// const imageDOMElements = document.querySelectorAll('.image')
const imageDOMElements = document.getElementsByClassName('image')
console.log(imageDOMElements)

const secondImageDOMElement = imageDOMElements[1]
secondImageDOMElement.classList.add('active')

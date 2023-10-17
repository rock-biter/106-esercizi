console.log('count down')

const countDownElement = document.querySelector('.count-down')
// console.log(countDownElement)

let counter = 10

let idInterval = setInterval(onInterval, 1000)

function onInterval() {
	counter--

	if (counter === 0) {
		console.log('interrompere il set interval')
		clearInterval(idInterval)
		countDownElement.innerHTML = 'BUON ANNO!!!'
	} else {
		countDownElement.innerHTML = counter
	}
}

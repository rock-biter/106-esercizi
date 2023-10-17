console.log('cronometro')

const timerEl = document.getElementById('timer')
const startEl = document.getElementById('start')
const stopEl = document.getElementById('stop')
// console.log(timerEl, startEl, stopEl)

let timer = 0
let idInterval

function startTimer() {
	// far pertire il timer
	console.log('start timer', idInterval)

	if (idInterval === undefined) {
		idInterval = setInterval(() => {
			timer++

			let minutes = Math.floor(timer / 60)
			let seconds = timer % 60

			timerEl.innerHTML = `${minutes}:${seconds}`
		}, 1000)
	}
}

function stopTimer() {
	// interrompere il timer e resettare il timer
	console.log('stop timer', idInterval)

	clearInterval(idInterval)
	idInterval = undefined
	timer = 0
}

startEl.addEventListener('click', startTimer)
stopEl.addEventListener('click', stopTimer)

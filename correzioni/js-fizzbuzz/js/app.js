console.log('FizzBuzz')

const gridElement = document.querySelector('.grid')

for (let i = 0; i < 100; i++) {
	const n = i + 1

	const mod3 = n % 3
	const mod5 = n % 5

	let message = n + ''
	let className = ''

	if (mod3 === 0 && mod5 === 0) {
		message = 'FIZZBUZZ'
		className = 'box--fizzbuzz'
	} else if (mod3 === 0) {
		message = 'FIZZ'
		className = 'box--fizz'
	} else if (mod5 === 0) {
		message = 'BUZZ'
		className = 'box--buzz'
	}

	// console.log(message)
	// const boxHTML = '<div class="box ' + className + '">' + message + '</div>'
	const boxHTML = `
  <div class="box ${className}">
    <p>
      ${message}
    </p>
  </div>
  `
	// const boxElement = document.createElement('div')

	gridElement.innerHTML += boxHTML
}

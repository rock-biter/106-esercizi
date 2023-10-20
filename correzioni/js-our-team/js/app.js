console.log('our team')

const teamMembersEl = document.querySelector('.team-members')
console.log(teamMembersEl)

// const stampaTeamMember = (elementoCorrente, index, array) => {
// 	// console.log('per ogni elmento faccio questo', index, elementoCorrente)
// 	const name = elementoCorrente.name
// 	const role = elementoCorrente.role
// 	const imgSrc = elementoCorrente.imgSrc

// 	// console.log(this)
// 	console.log(array)

// 	const html = `
//   <div class="team__item">
//     <img src="${imgSrc}">
//     <h3>${name}</h3>
//     <p>${role}</p>
//   </div>
//   `

// 	teamMembersEl.innerHTML += html
// }

const teamMembers = [
	{
		name: 'Wayne',
		lastName: 'Barnett',
		role: 'Founder & CEO',
		imgSrc: './img/wayne-barnett-founder-ceo.jpg',
	},
	{
		name: 'Walter',
		lastName: 'Gordon',
		role: 'Office Manager',
		imgSrc: './img/walter-gordon-office-manager.jpg',
	},
	{
		name: 'Angela',
		lastName: 'Caroll',
		role: 'Chief Editor',
		imgSrc: './img/angela-caroll-chief-editor.jpg',
	},
	{
		name: 'Angela',
		lastName: 'Lopez',
		role: 'Social Media Manager',
		imgSrc: './img/angela-lopez-social-media-manager.jpg',
	},
	{
		name: 'Scott',
		lastName: 'Estrada',
		role: 'Developer',
		imgSrc: './img/scott-estrada-developer.jpg',
	},
	{
		name: 'Barbara',
		lastName: 'Ramos',
		role: 'Graphic Designer',
		imgSrc: './img/barbara-ramos-graphic-designer.jpg',
	},
]

console.log(teamMembers)

// ciclare array teamMembers e per ogni elemento
for (let i = 0; i < teamMembers.length; i++) {
	// console.log(i)
	const currentTeamMember = teamMembers[i]
	// console.log(i, currentTeamMember)
	// prendere il nome
	const name = currentTeamMember.name
	const lastName = currentTeamMember.lastName
	// prender il ruolo
	const role = currentTeamMember.role
	// prendere la stringa della foto
	const imgSrc = currentTeamMember.imgSrc
	// stamparli in cosole concatenati

	const html = `
  <div class="team__item">
    <img src="${imgSrc}">
    <h3>${name} ${lastName}</h3>
    <p>${role}</p>
  </div>
  `

	// console.log(name, role, imgSrc)
	// teamMembersEl.innerHTML += html
}

// foreach
teamMembers.forEach((elementoCorrente, index, array) => {
	// console.log('per ogni elmento faccio questo', index, elementoCorrente)
	const name = elementoCorrente.name
	const lastName = elementoCorrente.lastName
	const role = elementoCorrente.role
	const imgSrc = elementoCorrente.imgSrc

	// console.log(this)
	console.log(array)

	const html = `
  <div class="team__item">
    <img src="${imgSrc}">
    <h3>${name} ${lastName}</h3>
    <p>${role}</p>
  </div>
  `

	// teamMembersEl.innerHTML += html
})

let teamHtmlStrings = teamMembers.map((member) => {
	return `
  <div class="team__item">
    <img src="${member.imgSrc}">
    <h3>${member.name} ${member.lastName}</h3>
    <p>${member.role}</p>
  </div>
  `
})

console.log(teamHtmlStrings)
teamMembersEl.innerHTML = teamHtmlStrings.join('')

//
// const numeri = new Array(100)
const numeri = [5, 96, 7, 4, 56, 2, 36]

// numeri[100] = 51
// numeri[126] = 23

// numeri.fill(0, 0, 99)

console.log(numeri, numeri.length)

// for (let i = 0; i < numeri.length; i++) {
// 	console.log(i, numeri[i])
// }

numeri.forEach((n) => {
	console.log(n ** 2)
})

function pow2(num) {
	console.log(num ** 2)
}

pow2(4)

//
// for (const element of numeri) {
// 	console.log(element)
// }

const utente = {
	nome: 'gianni',
	eta: 35,
	genere: 'maschio',
}

// for in
// for (const key in utente) {
// 	console.log(key, utente[key])
// }

const numeriBelli = [5, 96, 7, 4, 56, 2, 36]
console.log(numeriBelli)

let numeriBelliPlus = []

for (let i = 0; i < numeriBelli.length; i++) {
	let num = numeriBelli[i] + 1

	numeriBelliPlus.push(num)
}

numeriBelliPlus = numeri.map((num) => num + 1)

console.log(numeriBelliPlus)

let teamNames = []

teamMembers.forEach((teamMember) => {
	teamNames.push(teamMember.name)
})

teamNames = teamMembers.map((member, index, array) => {
	member.fullName = `${member.name} ${member.lastName}`

	return member
})
console.log(teamNames)

let multipliDiTre = []

for (let i = 0; i < numeriBelli.length; i++) {
	const num = numeriBelli[i]

	if (num % 3 === 0) {
		multipliDiTre.push(num)
	}
}

// console.log(multipliDiTre)

// multipliDiTre = numeriBelli.filter((num, i, array) => {
// 	if (num % 1 === 0) {
// 		return true // il numero sarà incluso nel nuovo array
// 	} else {
// 		return false // il numero non sarà incluso nell'array
// 	}
// })

multipliDiTre = numeriBelli.filter((num) => num % 3 === 0)

console.log(multipliDiTre)

const filteredMembers = teamMembers
	.filter((member) => {
		const name = member.name.toLowerCase()

		if (name.includes('cot')) {
			return true
		} else {
			return false
		}
	})
	.map(({ name, lastName }) => `${name} ${lastName}`)

console.log(filteredMembers)

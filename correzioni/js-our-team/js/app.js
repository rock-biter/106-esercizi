console.log('our team')

const teamMembers = [
	{
		name: 'Wayne Barnett',
		role: 'Founder & CEO',
		imgSrc: './img/wayne-barnett-founder-ceo.jpg',
	},
	{
		name: 'Walter Gordon',
		role: 'Office Manager',
		imgSrc: './img/walter-gordon-office-manager.jpg',
	},
	{
		name: 'Angela Caroll',
		role: 'Chief Editor',
		imgSrc: './img/angela-caroll-chief-editor.jpg',
	},
	{
		name: 'Angela Lopez',
		role: 'Social Media Manager',
		imgSrc: './img/angela-lopez-social-media-manager.jpg',
	},
	{
		name: 'Scott Estrada',
		role: 'Developer',
		imgSrc: './img/scott-estrada-developer.jpg',
	},
	{
		name: 'Barbara Ramos',
		role: 'Graphic Designer',
		imgSrc: './img/barbara-ramos-graphic-designer.jpg',
	},
]

console.log(teamMembers)

const teamMembersEl = document.querySelector('.team-members')
console.log(teamMembersEl)

// ciclare array teamMembers e per ogni elemento
for (let i = 0; i < teamMembers.length; i++) {
	// console.log(i)
	const currentTeamMember = teamMembers[i]
	// console.log(i, currentTeamMember)
	// prendere il nome
	const name = currentTeamMember.name
	// prender il ruolo
	const role = currentTeamMember.role
	// prendere la stringa della foto
	const imgSrc = currentTeamMember.imgSrc
	// stamparli in cosole concatenati

	const html = `
  <div class="team__item">
    <img src="${imgSrc}">
    <h3>${name}</h3>
    <p>${role}</p>
  </div>
  `

	// console.log(name, role, imgSrc)
	teamMembersEl.innerHTML += html
}

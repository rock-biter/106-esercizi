let boolean = {
	classes: [
		{
			number: 106,
			students: [
				{
					name: 'Marta',
				},
				{
					name: 'Davide',
				},
			],
		},
		{
			number: 124,
			students: [
				{
					name: 'Pippo',
				},
				{
					name: 'Ciuseppe',
				},
			],
		},
	],
}

boolean.classes.forEach((currentClass) => {
	console.log(currentClass.number)

	currentClass.students.forEach((student) => {
		console.log(student.name)
	})
})

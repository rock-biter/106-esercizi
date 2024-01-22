/** @type {import('tailwindcss').Config} */
export default {
	content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
	theme: {
		extend: {
			container: {
				center: true,
			},
			spacing: {
				'5px': '5px',
			},
			fontFamily: {
				sans: 'Poppins',
			},
			screens: {
				lg: '1040px',
				'3xl': '1600px',
			},
			colors: {
				brand: '#56ff4d',
			},
		},
	},
	plugins: [],
}

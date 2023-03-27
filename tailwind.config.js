/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [ "./*.php" ],
	theme: {
		extend: {
			colors: {
				'koko': '#f4b845',
				// 'cerna': '#00000',
			},
			fontFamily: {
				'bang': [ 'Bangers' ], 'mont': [ 'Montserrat' ],
			}
		},


	},
	plugins: [],
}

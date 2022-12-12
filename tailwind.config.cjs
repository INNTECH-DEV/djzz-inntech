/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ 
  "./index.html",
  "./src/**/*.{vue,js,ts,jsx,tsx}",
  './node_modules/tw-elements/dist/js/**/*.js'],
  theme: {
    container: {
			padding: {
				DEFAULT: "1rem",
				sm: "1rem",
				lg: "1rem",
				xl: "1rem",
				"2xl": "1rem"
			},
			center: true
		},
		borderRadius: {
			sm: '0.125rem',
			md: '0.375rem',
      		lg: '0.5rem',
			full: '9999px',
			app: '0.375rem',
		},
    extend: {
      colors: {
				
				primary: "#ffffff",
				secondary: "#000000",
				
			},
    },
  },
  plugins: [
	require('tw-elements/dist/plugin')
  ],
}

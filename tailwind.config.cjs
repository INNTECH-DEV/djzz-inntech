/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ 
  "./index.html",
  "./src/**/*.{vue,js,ts,jsx,tsx}",],
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
    extend: {
      colors: {
				
				primary: "#ffffff",
				secondary: "#000000",
				
			},
    },
  },
  plugins: [
  
  ],
}

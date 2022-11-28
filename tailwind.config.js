/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#1a202c",
        secondary: "#2d3748", 
        tertiary: "#4a5568",  
        quaternary: "#718096",
        quinary: "#edf2f7",
        senary: "#f7fafc",
    },

  },
  plugins: [
    
  ],
},
}


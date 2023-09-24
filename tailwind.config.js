/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'cyan-primary': '#08ecec'
      },
      fontFamily: {
        'ubuntu': 'Ubuntu',
        'chakra-petch': '"Chakra Petch"',
      }
    },
  },
  plugins: [],
}


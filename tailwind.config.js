/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
        colors: {
            'primary': {
                DEFAULT: '#000000'
            },
            'secondary': {
                DEFAULT: '#FFFFFF'
            }
        },
        fontFamily: {
            'poppins': ['poppins', 'system-ui', 'sans-serif'],
            'montserrat': ['montserrat', 'system-ui', 'sans-serif']
        }
    },
  },
  plugins: [],
}


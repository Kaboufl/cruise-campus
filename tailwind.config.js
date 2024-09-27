/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
        colors: {
            'primary': {
                DEFAULT: '#003366',
                '50': '#eef7ff',
                '100': '#dceeff',
                '200': '#b2dfff',
                '300': '#6dc6ff',
                '400': '#20a8ff',
                '500': '#008dff',
                '600': '#006edf',
                '700': '#0057b4',
                '800': '#004a94',
                '900': '#003366',
                '950': '#002651',
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


/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'primary': '#2AD347',
        'primary-dark': '#39b74f',
        'secondary': '#acce31',
        'dark': '#1E1E1E',
        grey: '#636364',
        'dark-grey': '#282828',
        'dark-grey-darker': '#141414'
      },
      fontFamily: {
        raleway: ["Raleway", "sans-serif"],
        articulat: ["articulat-cf", "sans-serif"],
        "articulat-heavy": ["articulat-heavy-cf", "sans-serif"],
      }
    },
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js,php}',
      './resources/**/*.{html,js,php}'],
  theme: {
      extend: {
        fontFamily: {
          'sans': ['Outfit', 'sans-serif'],
        },
        colors: {
          'primary': '#071E4B',
        },
        textColor: {
          'primary': '#071E4B',
        },
      },
  },
  plugins: [],
};
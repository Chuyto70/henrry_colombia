const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
        myriad: ['MyriadProRegular', 'sans-serif'], // Add the custom font to the theme
      },
    },
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'permarker': ['Permanent Marker'],
    }
  },
  plugins: [require("./plugin")],
}


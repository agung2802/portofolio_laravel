/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundColor: {
        'sidebar': '#333333'
      },
      textDecorationColor: {
        'redUnderline': '#8B0000'
      }

    },
  },
  plugins: [],
}
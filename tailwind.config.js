/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        screens: {
            'xs': '320px',
        }
      },
      backgroundImage: {
        'HeaderBg': "url('/public/Images/HeaderBg.png')",
      },
    },
    plugins: [],
}

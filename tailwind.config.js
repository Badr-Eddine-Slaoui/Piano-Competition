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
          '2xl': '1536px',
        },
        colors: {
          'gold': '#bd8900',
          'body': '#231F20'
        },
      },
      backgroundImage: {
        'HeaderBg': "url('/public/Images/HeaderBg.png')",
      },
    },
    plugins: [],
}

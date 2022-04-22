module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      black: '#000',
      white: '#fff',
      red: '#F27272',
      green: '#3EED13',
      gray: {
        50: '#F6F6F6',
        100: '#E0DEDE',
        200: '#A5A5A5',
        300: '#9D9D9D',
        400: '#424242',
        500: '#333333',
      }
    },
    fontFamily: {
      sans: ['GTWalsheim', 'sans-serif']
    },

  },
  plugins: [],
}
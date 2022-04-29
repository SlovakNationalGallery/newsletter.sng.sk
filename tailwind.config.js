module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        pulse: 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
      },
      keyframes: {
        pulse: {
          '0%, 100%': {
            opacity: 0.9,
          },
          '50%': {
            opacity: 0.2,
          },
        },
      },
    },
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
        600: '#242424',
      }
    },
    fontFamily: {
      sans: ['GTWalsheim', 'sans-serif']
    },

  },
  plugins: [],
}
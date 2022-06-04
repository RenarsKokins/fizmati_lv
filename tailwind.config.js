const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./node_modules/flowbite/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        gradient: {
          "orange_1": "#ee5600",
          "orange_2": "#f28500",
        },
        primary: {
          100: "#ffeacc",
          200: "#ffd499",
          300: "#ffbf66",
          400: "#ffa933",
          500: "#ff9400",
          600: "#cc7600",
          700: "#995900",
          800: "#663b00",
          900: "#331e00",
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

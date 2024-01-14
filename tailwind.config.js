/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#0003ff',
        secondary: '#C90000',
        white: '#ffffff',
        black: '#000000',
        light: '#F6F5F5',
        dark: '#361515',
        gray: '#D9D9D9',
        lightgray: '#BBBBBB',
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;

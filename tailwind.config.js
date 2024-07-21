import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
// add daisyUI plugin
  plugins: [typography],
  theme: {
    extend: {
      fontFamily: {
        sans: 'Open Sans, sans-serif',
      },
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
};

export default config;

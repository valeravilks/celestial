import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
// add daisyUI plugin
  plugins: [typography],
  theme: {
    container: {
      center: true,
      padding: '2rem',
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
    },
    extend: {
      fontFamily: {
        sans: 'Open Sans, sans-serif',
      },
    },
  },
};

export default config;

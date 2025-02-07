/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      fontFamily: {
        montLight: ["Montserrat-Light"],
        mont: ["Montserrat-Regular"],
        montBold: ["Montserrat-Bold"],
        montLightItalic: ["Montserrat-Light-Italic"],
        montItalic: ["Montserrat-Regular-Italic"],
        montBoldItalic: ["Montserrat-Bold-Italic"],
      },
    },
  },
  plugins: [],
};

export default config;

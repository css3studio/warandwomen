/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './html/**/*.{html,js}',
    './common/**/*.php',
    './error/**/*.php',
    './exhibit-builder/**/*.php',
    './users/**/*.php',
    './items/**/*.php',
    './*.php'
  ],
  theme: {
    container: {
      center: true,
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1280px",
        xl: "1280px"
      },
      padding: {
        DEFAULT: "16px",
        sm: "16px",
        md: "24px",
        lg: "0",
        xl: "0"
      }
    },
    extend: {
      colors: {
        primary: "#8C48C0",
        secondary: "#FD5409",
        tertiary: "#008454",
        warning: "#F0BB3C"
      },
      fontFamily: {
        sans: ["Pretendard", "sans-serif"]
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
}

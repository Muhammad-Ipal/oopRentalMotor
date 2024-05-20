/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        urbanist: ["Urbanist", "sans-serif"],
        teko: ["Teko", "sans-serif"],
      },
      colors: {
        purpleColor: "#9333ea",
        darkBlue: "#2a1c59",
        blackColor: "#0f172a",
      },
    },
  },
  plugins: [],
};


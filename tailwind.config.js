/ @type {import('tailwindcss').Config} */;
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    container: {
      center: true,
    },

    extend: {
      backgroundImage: {},

      fontFamily: {
        cabin: ["Cabin", "sans-serif"],
        Poppins: ["Poppins", "sans-serif"],
      },

      colors: {
        "green-ZAP": "#31AB5C",
        "black-ZAP": "#231F20",
        "white-ZAP": "#FAF7F5",
        "light-green": "#E0F2D6",
        "yellow-ZAP": "#F8D6B7",
        "light-maggenta": "#EFCDC2",
        "pink-ZAP": "#F8958C",
        "grey-ZAP": "#767876",
        "dark-grey": "#343534",
        "brownLight-ZAP": "#B49E78",
        "brownCream-zap": "#C0A279",
        "brown-zap": "#8B4328",
        "blue-water-zap": "#50ABF0",
      },
      screens: {
        xl: "900px",
        "2xl": "1200px",
        "3xl": "1600px",
      },
    },
  },
  plugins: [],
};

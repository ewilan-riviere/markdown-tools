module.exports = {
  purge: ["./src/**/*.html", "./src/**/*.vue"],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require("@tailwindcss/custom-forms"),
    require("tailwindcss"),
    require("autoprefixer")
  ]
};

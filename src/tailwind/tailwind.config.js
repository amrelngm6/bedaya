/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: [
      "a.html",

    ],
    future: {},
    theme: {
    extend: {},
    },
    variants: {},
    plugins: [
      require('tailwindcss'),
      require('autoprefixer'),
    ]
}

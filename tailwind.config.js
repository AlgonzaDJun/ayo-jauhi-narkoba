/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Urbanist: ["Urbanist", "sans-serif"],
                Poppins: ["Poppins", "sans-serif"],
                Inter: ["Inter", "sans-serif"],
            },
        },
    },
    daisyui: {
        prefix: "daisy-",
        themes: [],
    },
    plugins: [require("@tailwindcss/aspect-ratio"), require("daisyui")],
};

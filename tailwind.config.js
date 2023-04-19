/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                700: "700px",
            },
            minWidth: {
                60: "60px",
            },
        },
    },
    plugins: [],
};

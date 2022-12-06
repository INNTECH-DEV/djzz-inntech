/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*/*.blade.php",
        "./resources/**/*/*.js",
        "./resources/**/*/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                indigo: {
                    600: "#4CBB17",
                    700: "#4CBB17",
                    500: "#4CBB17",
                },
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};

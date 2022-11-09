const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#1e3a8a",
                dark: "#000000CC",
                secondary: "#bdb76b",
            },
            screens: {
                "2xl": "1320px",
                hp: "375px",
                tablet: "640px",
                desktop: "1024px",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};

import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                infinitSlide: {
                    from: { transform: "translatex(0%)" },
                    to: { transform: "translatex(-100%)" },
                },
            },
            animation: {
                infinitSlide: "infinitSlide 20s linear infinite",
            },
        },
    },

    plugins: [forms],
};

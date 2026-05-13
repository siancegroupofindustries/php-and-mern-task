import typography from "tailwind-typography-cssstyle";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
    ],

    theme: {
        extend: {},
    },

    plugins: [typography],
};
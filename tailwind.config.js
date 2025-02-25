/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./node_modules/flyonui/dist/js/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("flyonui"), require("flyonui/plugin")],
};

import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php", // LaravelのBladeテンプレートの場所
        "./resources/js/**/*.vue", // Vue.jsを使っている場合（必要に応じて）
        "./resources/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};

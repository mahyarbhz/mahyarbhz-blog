import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'text': '#f8ebe3',
                'background': {
                    'default': '#0c213c',
                    'dark': '#09172a',
                },
                'primary': '#5c7d8e',
                'secondary': '#2a4057',
                'accent': '#F4A261',
            },
        },
    },
    variants: {},
    plugins: [],
};

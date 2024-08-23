import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                violet: '#46007F',
                red: '#E20000',
                yellow: '#FFFF1F',
                grey: '#746360',
                green: '009E34',
            },
            fontFamily: {
                roboto: ['Roboto Condenced', 'sans-serif'],
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                // brinnan: ['Brinnan'],
                // righteous: ['Righteous']
            },
        },
    },

    plugins: [forms],
};

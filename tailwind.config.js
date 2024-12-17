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
                'dark-primary': '#656565',
                'dark-secondary': '#030303',
                'dark-blue': '#2D4970',
                'light-blue': '#679CE4',
                'light-primary': '#F7F7F7',
                'gray-primary': '#ABABAB',
                'gray-secondary': '#E4E4E4',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                hind: ['Hind'],
                libre: ['"Libre Bodoni"', 'serif'],
            },
            keyframes: {
                slide: {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(0)' },
                },
                slidereverse: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
            },
            animation: {
                slide: 'slide 20s linear infinite',
                slidereverse: 'slidereverse 20s linear infinite',
            },
        }
    },
    plugins: [forms],
};

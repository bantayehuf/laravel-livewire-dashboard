import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import flowbite from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "primary": {
                    50: "#FEF9F6",
                    100: "#FCEFE8",
                    200: "#FAE2D6",
                    300: "#F6CFBB",
                    400: "#F2BCA0",
                    500: "#EEA47F",
                    600: "#EA8C5D",
                    700: "#E46F34",
                    800: "#CB551B",
                    900: "#8C3B12",
                    950: "#6C2E0E"
                },
                "secondary": {
                    50: "#EFF6FA",
                    100: "#DCEAF4",
                    200: "#B9D4E9",
                    300: "#87B5D9",
                    400: "#4C92C7",
                    500: "#234E70",
                    600: "#214A69",
                    700: "#1B3C55",
                    800: "#17344A",
                    900: "#0C1B27",
                    950: "#0C1B27"
                },
            },
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'body': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ],
                'sans': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ]
            },
            transitionProperty: {
                'width': 'width'
            },
            screens: {
                'sm': '576px',
                // => @media (min-width: 576px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }

                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }

                '2xl': '1536px',
                // => @media (min-width: 1536px) { ... }
            }
        },
    },

    plugins: [flowbite, forms, typography],
};

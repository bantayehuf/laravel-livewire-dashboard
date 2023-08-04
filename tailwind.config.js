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
                    50: "#EFFFCC",
                    100: "#D8FF85",
                    200: "#ABFA00",
                    300: "#9DE600",
                    400: "#8FD100",
                    500: "#80BC00",
                    600: "#73A800",
                    700: "#659400",
                    800: "#547A00",
                    900: "#3B5700",
                    950: "#2A3D00"
                },
                "secondary": {
                    50: "#F5F6FA",
                    100: "#EBECF5",
                    200: "#D0D3E7",
                    300: "#B1B6D7",
                    400: "#8C94C4",
                    500: "#5863AA",
                    600: "#4F599B",
                    700: "#434C84",
                    800: "#3B4273",
                    900: "#292F51",
                    950: "#16192C"
                }
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
        },
    },

    plugins: [flowbite, forms, typography],
};

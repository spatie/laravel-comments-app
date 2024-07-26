import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
// import react from '@vitejs/plugin-react';
// import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
        ]),
    ],
});

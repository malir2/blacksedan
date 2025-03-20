import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true, // This enables automatic page refresh for resources
        }),
    ],
    server: {
        watch: {
            // Watch the public/frontend directory for changes
            paths: ["public/frontend/**/*"],
        },
    },
});

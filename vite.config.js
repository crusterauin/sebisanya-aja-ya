import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    base: "/sebisanya-aja-ya/",
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: true,
        port: 5173,
        strictPort: true,
        allowedHosts: "all",
    },
    build: {
        outDir: "public/build",
        emptyOutDir: true,
    },
});

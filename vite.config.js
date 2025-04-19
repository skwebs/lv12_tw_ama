import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    // resolve: {
    //     alias: {
    //         cropperjs: path.resolve(__dirname, "node_modules/cropperjs"),
    //     },
    // },
});

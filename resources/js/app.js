import "./bootstrap";

import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import persist from "@alpinejs/persist";
import anchor from '@alpinejs/anchor'
 
Alpine.plugin(anchor)

// // Register plugins
// Alpine.plugin(persist);
// Alpine.plugin(collapse);

// Example: Detecting page type using body class
const bodyClass = document.body.getAttribute("data-page");

// Always needed plugins (optional)
Alpine.plugin(collapse);

// Load per-page plugins dynamically
switch (bodyClass) {
    case "page-carousel":
        import("@alpinejs/persist").then((persist) => {
            Alpine.plugin(persist.default);
        });
        break;

    case "page-settings":
        import("@alpinejs/collapse").then((collapse) => {
            Alpine.plugin(collapse.default);
        });
        break;
}

// Finally start Alpine after dynamic registration
Alpine.start();

// import Alpine from "alpinejs";
import Cropper from "cropperjs";
import "cropperjs/dist/cropper.css"; // Import Cropper.js CSS

window.Alpine = Alpine;
window.Cropper = Cropper;

Alpine.start();

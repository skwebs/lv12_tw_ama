import "./bootstrap";

import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

Alpine.plugin(collapse);

// import Alpine from "alpinejs";
import Cropper from "cropperjs";
import "cropperjs/dist/cropper.css"; // Import Cropper.js CSS

window.Alpine = Alpine;
window.Cropper = Cropper;

Alpine.start();

import ButtonBoxImage from "./ButtonBoxImage.vue";
import ButtonBox from "./ButtonBox.vue";

Statamic.booting(() => {
    Statamic.$components.register("button_box-image", ButtonBoxImage);
    Statamic.$components.register("button_box-fieldtype", ButtonBox);
});

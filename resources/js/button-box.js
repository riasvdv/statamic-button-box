import ButtonBoxImage from "./ButtonBoxImage";
import ButtonBox from "./ButtonBox";

Statamic.booting(() => {
  Statamic.component("button_box-image", ButtonBoxImage);
  Statamic.component("button_box-fieldtype", ButtonBox);
});

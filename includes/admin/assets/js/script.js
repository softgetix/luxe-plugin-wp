jQuery(document).ready(function ($) {
  var colorPickerFields = document.querySelectorAll(".color-picker-field");
  colorPickerFields.forEach(function (field, index) {
    var pickr = Pickr.create({
      el: field,
      theme: "nano",
      comparison: true,
      //   swatches: [
      //     "rgba(244, 67, 54, 1)",
      //     "rgba(233, 30, 99, 0.95)",
      //     "rgba(156, 39, 176, 0.9)",
      //     "rgba(103, 58, 183, 0.85)",
      //     "rgba(63, 81, 181, 0.8)",
      //     "rgba(33, 150, 243, 0.75)",
      //     "rgba(3, 169, 244, 0.7)",
      //     "rgba(0, 188, 212, 0.7)",
      //     "rgba(0, 150, 136, 0.75)",
      //     "rgba(76, 175, 80, 0.8)",
      //     "rgba(139, 195, 74, 0.85)",
      //     "rgba(205, 220, 57, 0.9)",
      //     "rgba(255, 235, 59, 0.95)",
      //     "rgba(255, 193, 7, 1)",
      //   ],
      components: {
        preview: false,
        opacity: true,
        hue: true,
        interaction: {
          hex: false,
          rgba: false,
          input: false,
          clear: false,
          save: false,
        },
      },
    });

    pickr.on("change", function (color) {
      var hexColor = color.toHEXA().toString();
      $("#colorValue" + (index + 1)).val(hexColor);
      $("#luxe-color" + (index + 1) + " .pickr").css(
        "background-color",
        hexColor
      );
      var fieldId = field.getAttribute("id");
      if (fieldId == "colorPickerField1") {
        luxe_update_hamburger_line_color(hexColor);
      }
      if (fieldId == "colorPickerField2") {
        luxe_update_hamburger_bg_color(hexColor);
      }
      if (fieldId == "colorPickerField3") {
        luxe_update_hamburger_menu_container_color(hexColor);
      }
      if (fieldId == "colorPickerField4") {
        luxe_update_hamburger_menu_font_color(hexColor);
      }
    });

    // pickrInstances.push(pickr);
  });
});

// js for the  changin the typography of menu 
jQuery('#luxe_mobile_menu_slide_container_font_size').change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery("select[name='luxe_mobile_menu_slide_container_font_size_unit']").val();
  jQuery('#luxe-menu-primary_navigation a').css('font-size',value+fontSizeUnit); 
 
});

jQuery("#luxe_mobile_menu_slide_container_font_size_unit").change(function(){
  value = jQuery(this).val();
  var fontSize = jQuery("#luxe_mobile_menu_slide_container_font_size").val();
  jQuery('#luxe-menu-primary_navigation a').css('font-size',fontSize+value); 
 
});
jQuery('#luxe_mobile_menu_slide_container_font_line_height').change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery("#luxe_mobile_menu_slide_container_line_height_unit").val();
  jQuery('#luxe-menu-primary_navigation a').css('line-height',value+fontSizeUnit); 
 
});

jQuery("#luxe_mobile_menu_slide_container_line_height_unit").change(function(){
  value = jQuery(this).val();
  var fontSize = jQuery("#luxe_mobile_menu_slide_container_font_line_height").val();
  jQuery('#luxe-menu-primary_navigation a').css('line-height',fontSize+value); 
 
});

// js for changing the submenu

jQuery('#luxe_mobile_menu_slide_container_sub_font_size').change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery("#luxe_mobile_menu_slide_container_sub_font_size_unit").val();
  jQuery('#luxe-menu-primary_navigation .luxe-sub-menu a').css('font-size',value+fontSizeUnit); 
 
});

jQuery("#luxe_mobile_menu_slide_container_sub_font_size_unit").change(function(){
  value = jQuery(this).val();
  var fontSize = jQuery("#luxe_mobile_menu_slide_container_sub_font_size").val();
  jQuery('#luxe-menu-primary_navigation .luxe-sub-menu a').css('font-size',fontSize+value); 
 
});
jQuery('#luxe_mobile_menu_slide_container_sub_line_height').change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery("#luxe_mobile_menu_slide_container_sub_line_height_unit").val();
  jQuery('#luxe-menu-primary_navigation .luxe-sub-menu a').css('line-height',value+fontSizeUnit); 
 
});

jQuery("#luxe_mobile_menu_slide_container_sub_line_height_unit").change(function(){
  value = jQuery(this).val();
  var fontSize = jQuery("#luxe_mobile_menu_slide_container_sub_line_height").val();
  jQuery('#luxe-menu-primary_navigation .luxe-sub-menu a').css('line-height',fontSize+value); 
 
});


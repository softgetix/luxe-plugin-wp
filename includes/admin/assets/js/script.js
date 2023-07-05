
jQuery(document).ready(function ($) {
  $(".luxe_mobile_menu_slide_hamburger_color").wpColorPicker({
    change: function (event, ui) {
      luxe_update_hamburger_line_color(ui.color.toString());
    },

    // $('.luxe_mobile_menu_slide_background_color')
  });

  $(".luxe_mobile_menu_slide_background_color").wpColorPicker({
    change: function (event, ui) {
      luxe_update_hamburger_bg_color(ui.color.toString());
    },
  });
  $(".colorValue3").wpColorPicker({
    change: function (event, ui) {
      luxe_update_hamburger_menu_container_color(ui.color.toString());
    },
  });
  $("#colorValue4").wpColorPicker({
    change: function (event, ui) {
      luxe_update_hamburger_menu_font_color(ui.color.toString());
    },
  });
  $("#colorValue5").wpColorPicker({
    change: function (event, ui) {
      luxe_update_hamburger_menu_font_color(ui.color.toString());
    },
  });
});

// js for the  changin the typography of menu
jQuery("#luxe_mobile_menu_slide_container_font_size").change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery(
    "select[name='luxe_mobile_menu_slide_container_font_size_unit']"
  ).val();
  jQuery("#luxe-menu-primary_navigation a").css(
    "font-size",
    value + fontSizeUnit
  );
});

jQuery("#luxe_mobile_menu_slide_container_font_size_unit").change(function () {
  value = jQuery(this).val();
  var fontSize = jQuery("#luxe_mobile_menu_slide_container_font_size").val();
  jQuery("#luxe-menu-primary_navigation a").css("font-size", fontSize + value);
});
jQuery("#luxe_mobile_menu_slide_container_font_line_height").change(
  function () {
    value = jQuery(this).val();
    var fontSizeUnit = jQuery(
      "#luxe_mobile_menu_slide_container_line_height_unit"
    ).val();
    jQuery("#luxe-menu-primary_navigation a").css(
      "line-height",
      value + fontSizeUnit
    );
  }
);

jQuery("#luxe_mobile_menu_slide_container_line_height_unit").change(
  function () {
    value = jQuery(this).val();
    var fontSize = jQuery(
      "#luxe_mobile_menu_slide_container_font_line_height"
    ).val();
    jQuery("#luxe-menu-primary_navigation a").css(
      "line-height",
      fontSize + value
    );
  }
);

// js for changing the submenu

jQuery("#luxe_mobile_menu_slide_container_sub_font_size").change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery(
    "#luxe_mobile_menu_slide_container_sub_font_size_unit"
  ).val();
  jQuery("#luxe-menu-primary_navigation .luxe-sub-menu a").css(
    "font-size",
    value + fontSizeUnit
  );
});

jQuery("#luxe_mobile_menu_slide_container_sub_font_size_unit").change(
  function () {
    value = jQuery(this).val();
    var fontSize = jQuery(
      "#luxe_mobile_menu_slide_container_sub_font_size"
    ).val();
    jQuery("#luxe-menu-primary_navigation .luxe-sub-menu a").css(
      "font-size",
      fontSize + value
    );
  }
);
jQuery("#luxe_mobile_menu_slide_container_sub_line_height").change(function () {
  value = jQuery(this).val();
  var fontSizeUnit = jQuery(
    "#luxe_mobile_menu_slide_container_sub_line_height_unit"
  ).val();
  jQuery("#luxe-menu-primary_navigation .luxe-sub-menu a").css(
    "line-height",
    value + fontSizeUnit
  );
});

jQuery("#luxe_mobile_menu_slide_container_sub_line_height_unit").change(
  function () {
    value = jQuery(this).val();
    var fontSize = jQuery(
      "#luxe_mobile_menu_slide_container_sub_line_height"
    ).val();
    jQuery("#luxe-menu-primary_navigation .luxe-sub-menu a").css(
      "line-height",
      fontSize + value
    );
  }
);

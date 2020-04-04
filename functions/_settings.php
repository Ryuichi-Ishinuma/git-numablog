
function twpp_enqueue_styles() {
  wp_enqueue_style(
    "main-style",
    get_template_directory_uri() . "/dist/css/main.css"
  );
}

function twpp_enqueue_scripts() {
  wp_enqueue_script(
    "main-script",
    get_template_directory_uri() . "/dist/js/bundle.js",
    array();
    false,
    true
  );
}

add_action("wp_enqueue_script","setup_enqueue_styles");

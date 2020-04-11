
export function navToggle() {
  "use strict";
  const j = jQuery;

  (function(j) {
    j("#nav-toggle").on('click', function(){
      j(".header__nav-toggle").toggleClass("open");
    });
  })(j);
}

const $ = jQuery.noConflict();
let resizeTimer;

const Site = {
  load: ".load-area",
  body: "body",
  map: ".contact-map-overlay",
  ps: ".ps-scroller",
  header: ".site-header",

  woof: {
    target: ".woof",

    filter: {
      div: ".woof_container_inner_colourfilter",
      li: ".woof_container_inner_colourfilter .woof_list > li",
    },

    opener: ".woof_childs_list_opener",
    li: ".woof_childs_list > li",
  },

  menu: {
    crumbs: "nav.breadcrumb",

    insta: [".menu-item-1205", ".menu-item-7165"],

    mobile: {
      togl: ".block.mobile-menu",
      btn: "button.menu-toggle[aria-expanded]",
      ul: "#menu-mobile-menu",
      li: ".menu-item",
      nav: ".main-navigation",
      wrap: ".handheld-navigation",
    },
  },

  slick: {
    default: ".slick._default",
    slim: ".slick._slim",
    contact: ".slick._contact",
  },

  acc: {
    btn: ".acc-btn",
  },
};

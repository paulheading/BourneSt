const MenuMobileItems = $(Site.menu.mobile.li, Site.menu.mobile.ul),
  MenuMobileItemsRev = MenuMobileItems.toArray().reverse(),
  MenuMobileWrap = $(Site.menu.mobile.wrap);

const MobileMenu = () => {
  $(Site.menu.mobile.btn).html(
    "<div class='block mobile-menu'><svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0z' fill='none'/><path fill='white' d='M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z'/></svg></div><a class='lnk mobile-menu' href='/'><img src='/wp-content/themes/bs/imgs/logos/howebournest.png' alt='bournest logo'></a>"
  );

  gsap.set(MenuMobileWrap, { maxHeight: 0 });
  gsap.set(MenuMobileItems, { opacity: 0 });
};

$(MobileMenu);

const CheckToggle = () => {
  let tl = gsap.timeline();

  if ($(Site.menu.mobile.nav).hasClass("toggled")) {
    tl.to(
      MenuMobileItemsRev,
      {
        duration: 0.3,
        stagger: 0.1,
        opacity: 0,
      },
      "together"
    ).to(
      MenuMobileWrap,
      {
        duration: 0.8,
        maxHeight: 0,
      },
      "together+=0.2"
    );
  } else {
    tl.to(
      MenuMobileWrap,
      {
        duration: 0.8,
        maxHeight: 500,
      },
      "together"
    ).to(
      MenuMobileItems,
      {
        duration: 0.3,
        stagger: 0.1,
        opacity: 1,
      },
      "together+=0.2"
    );
  }
};

$(function () {
  $(Site.menu.mobile.togl).click(CheckToggle);
});

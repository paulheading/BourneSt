
const SlickSetup = () => {

  $(Site.slick.default).slick({
    dots          : false,
    infinite      : true,
    speed         : 300,
    slidesToShow  : 1,
    centerMode    : true,
    variableWidth : true
  }).slickLightbox({
    itemSelector : '.slick-lnk',
    caption      : 'caption'
  });

  $(Site.slick.contact).slick({
    dots          : false,
    infinite      : true,
    slidesToShow  : 2,
    centerMode    : false,
    variableWidth : false
  }).slickLightbox({
    itemSelector : '.slick-lnk',
    caption      : 'caption'
  });

  $(Site.slick.slim).slick({
    dots          : false,
    infinite      : true,
    slidesToShow  : 3,
    centerMode    : false,
    variableWidth : false
  }).slickLightbox({
    itemSelector : '.slick-lnk',
    caption      : 'caption'
  });
}

$(SlickSetup);

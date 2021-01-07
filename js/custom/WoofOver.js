
const WoofOver = () => {

  $(Site.woof.target,Site.header)
  .on("mouseover",Site.woof.filter.div,function(){
    $(this).children("h4").addClass("active");
    $(this).children("h4").children("a").addClass("active");
  })
  .on("mouseleave",Site.woof.filter.div,function(){
    $(this).children("h4").removeClass("active");
    $(this).children("h4").children("a").removeClass("active");
  })
  .on("mouseover",Site.woof.filter.li,function(){
    $(this).children().addClass("active");
  })
  .on("mouseleave",Site.woof.filter.li,function(){
    $(this).children().removeClass("active");
  })
  .on("mouseover",Site.woof.opener,function() {
    $(this).prev("label").addClass("active");
    $(this).children("span").addClass("active");
  })
  .on("mouseleave",Site.woof.opener,function(){
    $(this).prev("label").removeClass("active");
    $(this).children("span").removeClass("active");
  })
  .on("mouseover",Site.woof.li,function(){
    $(this).children().addClass("active");
  })
  .on("mouseleave",Site.woof.li,function(){
    $(this).children().removeClass("active");
  });

}

$(function(){
  if (isTablet || isDsktop) {
    WoofOver();
  }
});

$(window).resize(function() {
  if (isTablet || isDsktop) {
    WoofOver();
  }
});

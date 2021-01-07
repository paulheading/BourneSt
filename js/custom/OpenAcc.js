
function OpenAcc() {
  let panel = $(this).siblings(".acc-panel"),
      plus  = $("svg.plus",this),
      speed = 0.5;

  if(panel.hasClass("active")) {
    $(panel).removeClass("active");
    gsap.to(plus,speed,{rotationZ:0});
  } else {
    $(panel).addClass("active");
    gsap.to(plus,speed,{rotationZ:135});
  }
}

$(Site.acc.btn).on("click",OpenAcc);


const StopLoader = () => {
  loadTl.pause();
}

const SiteLoaded = () => {
  let tl = gsap.timeline();

  tl
  .to(Site.load,{
    delay : 1,
    duration : 0.5,
    opacity : 0
  },'start')
  .to(Site.body,{
    duration : 0.5,
    overflow : "auto"
  },'start')
  .set(Site.load,{
    display : "none",
    onComplete : StopLoader
  });
}

$(SiteLoaded);

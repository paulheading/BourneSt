
const RunPS = state => {

  if(!isMobile) {
    if (state == "update") {
      $(Site.ps).perfectScrollbar("update");
    } else {
      $(Site.ps).perfectScrollbar();
    }
  }
}

$(RunPS);

$(window).resize(function() {
  RunPS("update");
});

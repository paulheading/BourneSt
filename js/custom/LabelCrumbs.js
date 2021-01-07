
const LabelCrumbs = () => {
  let crumbChild = $('span',Site.menu.crumbs);

  crumbChild.each(function(i,val) {
    if (i == 0) {
      $(this).addClass("home");
    } else if (i == 4) {
      let source = this.innerText,
          inner  = source.split(' ').join('-').toLowerCase();
      $(this).addClass(inner);
    }
  });
}

$(LabelCrumbs);

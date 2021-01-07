
const ExtraCheck = () => {
  let parent = $('.col-extra'),
      list   = $('.bs-products',parent);

  list.each(function(i,val) {
    let count = $(this).children().length;
    if (count == 0) {
      $(this).prev().remove();
      $(this).remove();
    }
  });
}

$(ExtraCheck);

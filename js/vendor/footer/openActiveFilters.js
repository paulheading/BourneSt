console.log("open active filters");

const lists = document.querySelectorAll(".woof_childs_list");

for (let i = 0; i < lists.length; i++) {
  const children = lists[i].children;
  let open = false;
  for (let i = 0; i < children.length; i++) {
    const grandchildren = children[i].children;
    for (let i = 0; i < grandchildren.length; i++) {
      const classes = grandchildren[i].classList;
      for (let i = 0; i < classes.length; i++) {
        if (classes[i] === "woof_checkbox_label_selected") {
          open = true;
        }
      }
    }
  }
  if (open) {
    lists[i].style.display = "block";
  }
}

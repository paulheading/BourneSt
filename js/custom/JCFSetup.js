const JCFSetup = () => {
  const ignoreThese = [
    $(".woof_list > li > input", ".woof_container_product_cat"),
    $("input#ship-to-different-address-checkbox"),
  ];

  ignoreThese.map((value) => {
    return value.addClass("jcf-ignore");
  });

  jcf.replaceAll();
};

$(JCFSetup);

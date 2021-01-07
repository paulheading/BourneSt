
let isMobile = true,
    isTablet = false,
    isDsktop = false;

enquire
.register('screen and (max-width:767px)',{
  match : function() {
    isMobile  = true;
    isTablet  = false;
    isDsktop = false;
  },
  unmatch : function() {
    isMobile = false;
  }
})
.register('screen and (min-width:768px) and (max-width:1023px)',{
  match : function() {
    isMobile  = false;
    isTablet  = true;
    isDsktop = false;
  },
  unmatch : function() {
    isTablet  = false;
  }
})
.register('screen and (min-width:1024px)',{
  match : function() {
    isMobile  = false;
    isTablet  = false;
    isDsktop = true;
  },
  unmatch : function() {
    isDsktop = false;
  }
});

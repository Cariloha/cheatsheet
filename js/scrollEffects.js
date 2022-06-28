window.onload = () => {

  
  function videoScroll(trigger) {
    const element = document.querySelector(trigger);

    let controller = new ScrollMagic.Controller();
    
    let scene = new ScrollMagic.Scene(
      {
        triggerElement: trigger,
        duration: 800
      }
    )
      .addTo(controller)
      // .addIndicators()
      .on("enter", function (e) {
        element.play();
      })
      .on("leave", function (e) {
        element.pause();
      })
  }

  videoScroll(".scroll-video");
  // videoScroll(".scroll-video-2");

}


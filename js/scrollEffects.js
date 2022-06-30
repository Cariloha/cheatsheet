window.onload = () => {

  
  function videoScroll(trigger) {
    const element = document.querySelector(trigger);

    let controller = new ScrollMagic.Controller();
    
    let scene = new ScrollMagic.Scene(
      {
        triggerElement: trigger,
        reverse: false
      }
    )
      .addTo(controller)
      // .addIndicators()
      .on("enter", function (e) {
        element.play();
      })
      // .on("leave", function (e) {
      //   element.pause();
      // })
  }

  videoScroll(".scroll-video");
  // videoScroll(".scroll-video-2");

  const pencilLogos = document.querySelectorAll(".logo--pencil");
  // console.log(pencilLogos)
  const colorLogos = document.querySelectorAll(".logo--color");
  let logoController = new ScrollMagic.Controller();
  
  pencilLogos.forEach(pencilLogo => {
    let pencilScene = new ScrollMagic.Scene({
      triggerElement: pencilLogo,
      triggerHook: .7,
      reverse: false

    })
      .setClassToggle(pencilLogo, 'fade__out')
      .setTween(gsap.to(pencilLogo, {delay: 0.3 }))
      // .addIndicators()
      .addTo(logoController);
  });

  colorLogos.forEach(colorLogo => {
  let logoScene = new ScrollMagic.Scene({
    triggerElement: colorLogo,
    triggerHook: .7,
    reverse: false

  })
    .setClassToggle(colorLogo, 'fade__in')
    .setTween(gsap.to(colorLogo, { delay: 0.3 }))
    // .addIndicators()
    .addTo(logoController);
});

}


window.onload = () => {

  const element = document.querySelector('.scroll-video');
  
  let controller = new ScrollMagic.Controller();
  let scene = new ScrollMagic.Scene(
    {
      triggerElement: ".scroll-video",
      duration: 200
    }
  )
    .addTo(controller)
    .addIndicators()
    .on("enter", function (e) {
      element.play();
    })
    .on("leave", function (e) {
      element.pause();
  })


  // window.addEventListener('load', videoScroll);
  // window.addEventListener('scroll', videoScroll);

  // 

//   function videoScroll() {

//   if ( document.querySelectorAll('video[autoplay]').length > 0) {
//     let windowHeight = window.innerHeight;
//     let videoEl = document.querySelectorAll('video[autoplay]');
//     console.log(videoEl);

//     for (let i = 0; i < videoEl.length; i++) {

//       let thisVideoEl = videoEl[i],
//           videoHeight = thisVideoEl.clientHeight,
//           videoClientRect = thisVideoEl.getBoundingClientRect().top;

//       if ( videoClientRect <= ( (windowHeight) - (videoHeight*.5) ) && videoClientRect >= ( 0 - ( videoHeight*.5 ) ) ) {
//         thisVideoEl.play();
//       } else {
//         thisVideoEl.pause();
//       }

//     }
//   }

// }

}


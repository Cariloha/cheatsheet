window.onload = () => {

    gsap.registerPlugin(ScrollTrigger);

    const element = document.querySelector('.scroll-video');
    const hero = document.querySelector('.hero__section');
    const elementPosition = element.offsetTop;
    const heroPosition = hero.offsetHeight;

    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".scroll-video",
            toggleActions: "play pause reverse reset",
            // start: "top 20px",
            // end: "bottom",
            // scrub: 1,
            markers: true,
            // onComplete: myFunction, repeat: 2, repeatDelay: 1, yoyo: true

        }
    });

    tl.to(".scroll-video", {
        onToggle: self => self.isActive ? playVideo("scroll-video") : element.pause(),
    }, 2)

}

gsap.utils.toArray(".video-scrub").forEach(video => videoScrub(video, {
  scrollTrigger: {
    trigger: video,
    start: "center center",
    end: "+=600",
    markers: true,
    scrub: true,
    pin: true
  }
}));

function videoScrub(video, vars) {
  video = gsap.utils.toArray(video)[0]; // in case selector text is fed in.
  let once = (el, event, fn) => {
        let onceFn = function () {
          el.removeEventListener(event, onceFn);
          fn.apply(this, arguments);
        };
        el.addEventListener(event, onceFn);
        return onceFn;
      },
      prepFunc = () => { video.play(); video.pause(); },
      prep = () => once(document.documentElement, "touchstart", prepFunc),
      src = video.currentSrc || video.src,
      tween = gsap.fromTo(video, {currentTime: 0}, {paused: true, immediateRender: false, currentTime: video.duration || 1, ease: "none", ...vars}),
      resetTime = () => (tween.vars.currentTime = video.duration || 1) && tween.invalidate();
  prep();
  video.readyState ? resetTime() : once(video, "loadedmetadata", resetTime);
  return tween;
}


document.addEventListener('DOMContentLoaded', function () {

  let currentPage = 0;

  jQuery('body')
    .on('click', '#next', nextPage)
    .on('click', '#prev', prevPage);

  let hammertime = new Hammer(jQuery('.book')[0]);
  hammertime.on("swipeleft", nextPage);
  hammertime.on("swiperight", prevPage);

  const pages = document.getElementsByClassName("section__page");
  pages[0].classList.add('active');


  function prevPage() {
    jQuery('.flipped')
      .last()
      .toggleClass('flipped active')
      .siblings('.page')
      .removeClass('active');
  }

  function nextPage() {
    jQuery('.active')
      .toggleClass('active flipped')
      .next('.page')
      .addClass('active');
  }
});

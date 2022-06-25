
document.addEventListener('DOMContentLoaded', function () {
  

  // console.log(currentPage);

  jQuery('body')
    .on('click', '#next', nextPage)
    .on('click', '#prev', prevPage);
  

  let hammertime = new Hammer(jQuery('.book')[0]);
  hammertime.on("swipeleft", nextPage);
  hammertime.on("swiperight", prevPage);

  const pages = document.getElementsByClassName("section__page");
  const totalPages = pages.length;
  pages[0].classList.add('active');
  const prevBtn = document.getElementById("prev");
  const nextBtn = document.getElementById("next");
  const footer = document.getElementById("footer");

  footer.classList.add("hide");

  let currentPage = 0;
    checkButtons();

  function prevPage() {
    currentPage--;
    jQuery('.flipped')
      .last()
      .toggleClass('flipped active')
      .siblings('.section__page')
      .removeClass('active'); 
    // console.log("---" + currentPage);
    checkButtons();
  }

  function nextPage() {
    currentPage++;
    jQuery('.active')
      .toggleClass('active flipped')
      .next('.section__page')
      .addClass('active');
    // console.log("++++" + currentPage);
    checkButtons();
  }

  function checkButtons() { 
    if (currentPage <= 0) {
      currentPage = 0;
      prevBtn.classList.add("hide");
    } else { 
      prevBtn.classList.remove("hide");
    }


    if (currentPage >= totalPages-1) {
      currentPage = totalPages-1;
      nextBtn.classList.add("hide");
    } else { 
      nextBtn.classList.remove("hide");
    }
  }

});

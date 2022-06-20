// let flipbookEL = document.getElementById('flipbook');

// window.addEventListener('resize', function (e) {
//     flipbookEL.style.width = '';
//     flipbookEL.style.height = '';
//     jQuery(flipbookEL).turn('size', flipbookEL.clientWidth, flipbookEL.clientHeight); 
// });

// jQuery(flipbookEL).turn({
//     page:2,
//     autoCenter: true,
//      when: {
//     start: function(event, pageObject, corner) {
//        if (pageObject.next==1) 
//          event.preventDefault();
//     }, 
//     turning: function(event, page, view) {
//        if (page==1)
//           event.preventDefault();
//     }
//   }
// });

var currentPage = 0;

jQuery('body')
  .on('click', '#next', nextPage)
  .on('click', '#prev', prevPage);

// jQuery('.book').hammer().on("swipeleft", nextPage);
// jQuery('.book').hammer().on("swiperight", prevPage);

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
window.onload = () => {
    const element = document.querySelector('.first > img');
    const hero = document.querySelector('.hero__section');
    const elementPosition = element.offsetTop;
    const heroPosition = hero.offsetHeight;

    // console.log(heroPosition);


    const options = {
        threshold: 0,
        rootMargin: "-50%",

    };

    window.addEventListener('scroll', () => {
        const scrollable = elementPosition;
        const scrolled = window.scrollY;

        console.log(scrollable);
        console.log("----");
        console.log(scrolled);


            if (Math.ceil(scrolled) === scrollable) {
                element.classList.remove('bnw-filter');
        } //math ceil rounds up the number. 
    });

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                element.classList.add('bnw-filter-nocolor');
            } else {
                element.classList.toggle('bnw-filter-color');
            }
            console.log(entry);
        });
        
    }, options);

    observer.observe(element);
}
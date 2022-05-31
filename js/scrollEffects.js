window.onload = () => {
    const element = document.querySelector('.first img');
    const options = {
        threshold: 0,
        rootMargin: "-50%",

    };
    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                element.classList.toggle('bnw-filter-color')
            }
            console.log(entry);
        });
        
    }, options);

    observer.observe(element);
}
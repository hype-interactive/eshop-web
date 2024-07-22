document.getElementById('scrollLeft').onclick = function() {
    document.querySelector('.scroll-container').scrollBy({
        left: -250,
        behavior: 'smooth'
    });
};

document.getElementById('scrollRight').onclick = function() {
    document.querySelector('.scroll-container').scrollBy({
        left: 250,
        behavior: 'smooth'
    });
};




const scrollContainer = document.querySelector('.scroll-container');
const scrollLeft = document.getElementById('scrollLeft');
const scrollRight = document.getElementById('scrollRight');

scrollLeft.addEventListener('click', () => {
scrollContainer.scrollBy({
left: -200,
behavior: 'smooth'
});
});

scrollRight.addEventListener('click', () => {
scrollContainer.scrollBy({
left: 200,
behavior: 'smooth'
});
});

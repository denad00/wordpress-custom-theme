console.log('hello from js')

const btns = document.querySelectorAll('.buttons button');
const header = document.querySelector('.site-header');


btns.forEach(button => {
    button.addEventListener('click', function(){
        // console.log('you clicked me');
        const clicked = this.classList.value + "-clicked";


    if (header.classList.contains(clicked)) {
        header.classList.remove(clicked);
    }
    else {
        header.classList.remove('btn-main-clicked');
        header.classList.remove('btn-social-clicked');
        header.classList.remove('btn-search-clicked');

        header.classList.add(clicked);
    }
    });
});
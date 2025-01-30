"use strict"

const changeColorBtn = document.getElementById('change-mode');

changeColorBtn.addEventListener('click', function() {
    const html = document.getElementsByTagName('html')[0];

    const src = changeColorBtn.getAttribute('src');

    html.classList.toggle('dark');

    switch (src) {
        case './assets/images/svg/lune.svg':
            changeColorBtn.setAttribute('src', './assets/images/svg/soleil.svg');
            break;
        case './assets/images/svg/soleil.svg':
            changeColorBtn.setAttribute('src', './assets/images/svg/lune.svg');
            break;
        default:
            changeColorBtn.setAttribute('src', './assets/images/svg/lune.svg');
    }

});

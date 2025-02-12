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


function nomLength() {
    let nom = document.getElementById("add-name").value
    const nomErreur = document.getElementById('nom-erreur')
    
    if (nom === "") {
        nomErreur.innerHTML = `
        <div class="erreur">
            <p class="text-base">Veuillez entrer un nom.</p>
        </div>
        `;
        return;
    }
}

function emailLength() {
    let email = document.getElementById("add-email").value
    const emailErreur = document.getElementById('email-erreur')
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/
    const isEmailValid = regex.test(email)
    
    if (!isEmailValid) {
        emailErreur.innerHTML = `
        <div class="erreur">
            <p class="text-base">Veuillez entrer un email.</p>
        </div>
        `;
        return;
    }
}

function messageLength() {
    let message = document.getElementById("add-message").value
    const messageErreur  = document.getElementById('message-erreur')
    
    if (message === "") {
        messageErreur .innerHTML = `
        <div class="erreur">
            <p class="text-base">Veuillez écrire un message.</p>
        </div>
        `;
        return;
    }
}


function envoyeForm() {
    const formulaireEnvoye = document.getElementById('formulaire-envoye')

    formulaireEnvoye.innerHTML = ''

    const nomOk = nomLength()
    const emailOk = emailLength()
    const msgOk = messageLength()


    if (nomOk && emailOk && msgOk) {
        document.getElementById("add-name").value = ''
        document.getElementById('add-email').value = ''
        document.getElementById('add-message').value = ''
        

        return formulaireEnvoye.innerHTML =`
        <div class="succes">
            <p class="text-base">Le formulaire a bien été envoyé.</p>
        </div>
        `
    }
}

const monButton = document.getElementById('send-form')

monButton.addEventListener('click', () => {
    envoyeForm();
})


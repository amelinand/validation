document.querySelector('#checkbox').addEventListener('click', (el) => {
    var e = document.querySelector('#password');
    var myImg = el.target;
    if(e.getAttribute('type') == 'password'){
        e.setAttribute('type','text');
        myImg.setAttribute('src', './img/oeil.svg');
    }else{
        e.setAttribute('type','password');
        myImg.setAttribute('src', './img/yeux.svg');
    }
})
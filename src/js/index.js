const button = document.getElementById('nav-button');
const nav = document.getElementsByClassName('header__desktop')[0];
button.onclick = () => nav.classList.toggle('isOpen');

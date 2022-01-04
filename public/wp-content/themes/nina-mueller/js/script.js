(() => {
  // src/js/index.js
  var button = document.getElementById("nav-button");
  var nav = document.getElementsByClassName("header__desktop")[0];
  button.onclick = () => nav.classList.toggle("isOpen");
})();

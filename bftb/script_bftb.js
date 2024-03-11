function openChar(evt, charName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("char-tab");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("char-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(charName).style.display = "grid";
  evt.currentTarget.className += " active";
}
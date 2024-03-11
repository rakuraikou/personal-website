function islaStatic() {
  var isla = document.getElementById("isla");
  isla.addEventListener('mouseenter', event => {
    isla.src = isla.src.replace(/\.png$/, '.gif')
  })
  isla.addEventListener('mouseleave', event => {
    isla.src = isla.src.replace(/\.gif$/, '.png')
  })
}

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
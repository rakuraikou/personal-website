var nonSpoilers = document.getElementsByClassName("nonspoiler");
var spoilers = document.getElementsByClassName("spoiler");

//element that tracks if spoilers are currently on
var spoilersOn = false;

function toggleSpoilers(){
  if (spoilersOn) {
    //if spoilers are on, turn them off
    for (let i = 0; i < nonSpoilers.length; i++) {
      nonSpoilers[i].style.display = "block";
    }; 
    for (let i = 0; i < spoilers.length; i++) {
      spoilers[i].style.display = "none";
    }; 
  
    //set the tracking variable
    spoilersOn = false;
  
    //change the text on the spoiler button
    //spoilerbtn.innerHTML = "turn spoilers ON";
    spoilerbtn.style.backgroundImage = "url('https://cdn.discordapp.com/attachments/712123731367165953/1086860354350493786/Illustration.png')";
  } else {
    //if spoilers are off, turn them on
    for (let i = 0; i < nonSpoilers.length; i++) {
      nonSpoilers[i].style.display = "none";
    }; 
    for (let i = 0; i < spoilers.length; i++) {
      spoilers[i].style.display = "block";
    }; 
  
    //set the tracking variable
    spoilersOn = true;
  
    //change the text on the spoiler button
    //spoilerbtn.innerHTML = "turn spoilers OFF";
    spoilerbtn.style.backgroundImage = "url('https://cdn.discordapp.com/attachments/712123731367165953/1086860330342301756/Illustration.png')";
  };
};

function insertHeader() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("include-header-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("include-header-html");
          insertHeader();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}

function openCollapse() {
  var coll = document.querySelectorAll(".sidebar-collapse");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
      }
    );
  }
}

function openChar(evt, charName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("sidebar-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(charName).style.display = "block";
  evt.currentTarget.className += " active";
}

function goToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
var spoilerButton = document.getElementById("spoilerbtn");
var nonSpoilers = document.getElementsByClassName("nonspoiler");
var spoilers = document.getElementsByClassName("spoiler");
//var that tracks if spoilers are currently on
var spoilersOn;

function checkSpoilers(){
  //set spoilersOn based on the local storage on page load
  if (localStorage.getItem("spoilers") == "on"){
	spoilersOn = true;
	
	for (let i = 0; i < nonSpoilers.length; i++) {
		nonSpoilers[i].style.display = "none";
	}; 
	for (let i = 0; i < spoilers.length; i++) {
		spoilers[i].style.display = "inherit";
	};
	spoilerbtn.style.backgroundImage = "url('res/spoilers_on.png')";
	
  } else {
	spoilersOn = false;
  };
};


 function toggleSpoilers(){
	if (spoilersOn) {
		//if spoilers are on, turn them off
		for (let i = 0; i < nonSpoilers.length; i++) {
			nonSpoilers[i].style.display = "inherit";
		}; 
		for (let i = 0; i < spoilers.length; i++) {
			spoilers[i].style.display = "none";
		}; 
		
		//set the tracking variable
		spoilersOn = false;
		localStorage.setItem("spoilers", "off");
  
    //change the text on the spoiler button
    spoilerbtn.style.backgroundImage = "url('res/spoilers_off.png')";
  } else {
    //if spoilers are off, turn them on
    for (let i = 0; i < nonSpoilers.length; i++) {
      nonSpoilers[i].style.display = "none";
    }; 
    for (let i = 0; i < spoilers.length; i++) {
      spoilers[i].style.display = "inherit";
    }; 
  
    //set the tracking variable
    spoilersOn = true;
    localStorage.setItem("spoilers", "on");
  
    //change the text on the spoiler button
    spoilerbtn.style.backgroundImage = "url('res/spoilers_on.png')";
  };
};

function insertHeader() {
  var z, i, elmnt, file, xhttp;
  //Loop through a collection of all HTML elements:
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    //search for elements with a certain atrribute:
    file = elmnt.getAttribute("include-header-html");
    if (file) {
      //Make an HTTP request using the attribute value as the file name:
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          //Remove the attribute, and call this function once more:
          elmnt.removeAttribute("include-header-html");
          insertHeader();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      //Exit the function:
      return;
    };
  };
  checkSpoilers();
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

// LIGHTBOX MODALS
// Open the Modal
function openModal(id) {
  document.getElementById(id).style.display = "block";
  document.getElementById("spoilerBox").style.display = "none";
}
// Close the Modal
function closeModal(id) {
  document.getElementById(id).style.display = "none";
  document.getElementById("spoilerBox").style.display = "block";
}
var slideIndex = 1;
showSlides('myArt', slideIndex);
showSlides('otherArt', slideIndex);
// Next/previous controls
function plusSlides(id, n) {
  showSlides(id, slideIndex -= n);
}
// Thumbnail image controls
function currentSlide(id, n) {
  showSlides(id, slideIndex = n);
}
function showSlides(id, n) {
  var i;
  var modalContainer = document.getElementById(id);
  var slides = modalContainer.getElementsByClassName("slide");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}


/*
// listener
var i;
var images = document.getElementsByClassName(".gallery-img");
for (i = 0; i < images.length; i++) {
  images[i].setAttribute("data-number", j);
  images[i].addEventListener("click", openModal);
}
// modals and inside functions
var modals = document.querySelectorAll(".modal");
var modal, close, prev, next;
for(i = 0; i < modals.length; i++) {
  modal = modals[i];
  //close
  close = modal.querySelector(".close");
  close. addEventListener("click", closeModal);
  //next
  next = modal.querySelector(".next");
  next.addEventListener("click", nextSlide);
  //prev
  prev = modal.querySelector(".prev");
  prev.addEventListener("click", prevSlide);
}

function openModal(e) {
  var image = e.currentTarget;
  var modal = image.parentNode.nextElementSibling;
  modal.style.display = "block";
  // slide
  if(image.hasAttribute("data-number")) {
    var slideNum = image.getAttribute("data-number");
    showSlide(modal, slideNum);
  }
}

function closeModal(e) {
  var modal = e.currentTarget.parentNode;
  modal.style.display = "none";
}

function nextSlide(e) {
  var modal = e.currentTarget.parentNode;
  var num = modal.getAttribute("data-slide");
  if(!num) num = 0;
  num++;
  showSlide(modal, num);
}

function prevSlide(e) {
  var modal = e.currentTarget.parentNode;
  var num = modal.getAttribute("data-slide");
  if(!num) num = 0;
  num--;
  showSlide(modal, num);
}

function showSlide(modal, num) {
  var slides = modal.getElementsByClassName("slide");
  if (num >= slides.length) { num = 0 }
  if (num < 0) {num = slides.length - 1}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[num].style.display = "block";
  modal.setAttribute("data-slide", num);
}
*/
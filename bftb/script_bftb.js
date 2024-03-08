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
	spoilerbtn.style.backgroundImage = "url('/bftb/res/spoilers_on.png')";
	
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
    spoilerbtn.style.backgroundImage = "url('/bftb/res/spoilers_off.png')";
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
    spoilerbtn.style.backgroundImage = "url('/bftb/res/spoilers_on.png')";
  };
};

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

function randomChar() {
  var random = Math.random() * links.length;
  random = parseInt(random, 10);
  //console.log(random)
  var link = links[random] + '.html';
  parent.location = link
}

function nextChar() {
  var link = window.location.href;
  var last = link.split("/").at(-1);
  var index = last.replace(".html", "");
  var next = links.indexOf(index) + 1;
  if (links[next]) {
    link = links[next] + '.html';
    parent.location = link;
  } else {
    link = links[0] + '.html';
    parent.location = link;
  }
}

function prevChar() {
  var link = window.location.href;
  var last = link.split("/").at(-1);
  var index = last.replace(".html", "");
  var prev = links.indexOf(index) - 1;
  if (links[prev]) {
    link = links[prev] + '.html';
    parent.location = link;
  } else {
    parent.location = links.pop() + '.html';
  } 
}
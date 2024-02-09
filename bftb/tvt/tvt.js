//////////notes
const notes = document.getElementsByClassName("notetoggle");
const notetext = document.getElementsByClassName("notetext");
var i;

//toggle single note by clicking "note"
for (i = 0; i < notes.length; i++) {
	
  notes[i].addEventListener("click", function() {
    var content = this.nextElementSibling;
    if (content.style.display === "inline") { 
      content.style.display = "none";
    } 
	else {
      content.style.display = "inline";
    }
  });
  
}
//toggle single note by clicking the revealed message
for (i = 0; i < notetext.length; i++) {
	
  notetext[i].addEventListener("click", function() {
      this.style.display = "none";
  });
  
}

//////////spoilers
const spoilers = document.getElementsByClassName("spoiler");

for (i = 0; i < spoilers.length; i++) {
  spoilers[i].addEventListener("click", function() {
	this.classList.toggle("on");
  });
}

function showAll() {
	for (i = 0; i < spoilers.length; i++){
		spoilers[i].classList.add("on");
	}
}

function hideAll() {
	for (i = 0; i < spoilers.length; i++){
		spoilers[i].classList.remove("on");
	}
}

//////////folders
const folders = document.getElementsByClassName("folder");
const cont = document.getElementsByClassName("content");

//toggle single folder
for (i = 0; i < folders.length; i++) {
  folders[i].addEventListener("click", function() {
    this.classList.toggle("openfolder");
    var content = this.nextElementSibling;
    if (content.style.display === "block") { 
      content.style.display = "none";
    } 
	else {
      content.style.display = "block";
    }
	icon = this.getElementsByClassName("fas")[0];
	icon.classList.toggle("fa-folder");
	icon.classList.toggle("fa-folder-open");
  });
}

const btn = document.getElementById("allbtn");
const btnicon = btn.getElementsByClassName("fas")[0];
//operates the "open/close all folders" btn
function toggleAll() {
	btn.classList.toggle("openfolder");
	if(btn.classList.contains("openfolder")) {
		for (i = 0; i < cont.length; i++)  {
			cont[i].style.display = "block";
			x = cont[i].previousElementSibling;
			x.classList.add("openfolder");
			icon = x.getElementsByClassName("fas")[0];
			icon.classList.remove("fa-folder");
			icon.classList.add("fa-folder-open");
		}
		btnicon.classList.remove("fa-folder");
		btnicon.classList.add("fa-folder-open");
	}
	else {
		for (i = 0; i < cont.length; i++)  {
			cont[i].style.display = "none";
			x = cont[i].previousElementSibling;
			x.classList.remove("openfolder");
			icon = x.getElementsByClassName("fas")[0];
			icon.classList.add("fa-folder");
			icon.classList.remove("fa-folder-open");
		}
		btnicon.classList.add("fa-folder");
		btnicon.classList.remove("fa-folder-open");
	}
}

//close notes and folders on load; this makes it so that if the user has javascript disabled, folders will be open by default. 
//if this causes weird visual effects you don't want, delete or comment out everything below this line; then go into the css file and add display: none; to .content and .notetext
function closeFolders(){
	for (i = 0; i < cont.length; i++){
		cont[i].style.display = "none";
	}
	for (i = 0; i < notetext.length; i++){
		notetext[i].style.display = "none";
	}
}
closeFolders();
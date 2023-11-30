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


function taglines() {
  var tags = [
    'what the . web site?!',
    'BLUNDERDRAG!!!',
    'girl machine 2000',
    'you know the drill!',
    'stay curious',
    'it&apos;s our responsibility as humans to love each other!',
    'how did you get here??',
    '...',
    'they don&apos;t call me guy of the century for nothin&apos;...',
    'guy of the century, awarded 00',
    'the girlies in my stomach aren&apos;t going to like this one...',
    'hey, wait what?!',
    'certified girl help moment',
    'maybe *don&apos;t* stay curious...',
    'guh',
    'i think i&apos;m being preyed upon!',
    'doctors love her',
    'we&apos;re all just slip n&apos; slidin&apos;',
    'narsty',
    'oww',
    'live good die great',
    'bad butch next door type of thing',
    'auhauh',
    'me if i was real',
    'america&apos;s next top guy!',
    'not immortal...but not quite mortal either',
    'eat eat eat',
    'hrghhh'
  ];

  var picktag = Math.floor(Math.random() * tags.length);
  document.getElementById('tagline').innerHTML = tags[picktag]
}

function spsjsGif(img) {
  img.src = img.src.replace('png', 'gif');
}

function spsjsPng(img) {
  img.src = img.src.replace('gif', 'png');
}
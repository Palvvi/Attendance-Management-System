var Libimages = [];

Libimages[0] = ['images/lib1.jpg'];
Libimages[1] = ['images/lib2.jpg'];
Libimages[2] = ['images/lib3.jpg'];
var index = 0;

function change() {
  document.getElementById("mainPhoto").src = Libimages[index];
  document.getElementById("mainPhoto").classList.add("size")

  if (index == 2) {
    index = 0;
  } else {
    index++;
  }

  setTimeout(change, 2000);
}

window.onload = change();

// science photo
var Sciimages = [];

Sciimages[0] = ['images/sci1.jpg'];
Sciimages[1] = ['images/sci2.jpg'];
Sciimages[2] = ['images/sci3.jpg'];
var index = 0;

function changeScience() {
  document.getElementById("SciencePhoto").src = Sciimages[index];
  document.getElementById("SciencePhoto").classList.add("size")

  if (index == 2) {
    index = 0;
  } else {
    index++;
  }

  setTimeout(changeScience, 2000);
}

window.onload = changeScience();

//  Computer Lab
var Comimages = [];

Comimages[0] = ['images/lab1.jpg'];
Comimages[1] = ['images/lab2.jpg'];
Comimages[2] = ['images/lab1.jpg'];

var index = 0;

function changeCom() {
  document.getElementById("ComPhoto").src = Comimages[index];
  document.getElementById("ComPhoto").classList.add("size")

  if (index == 2) {
    index = 0;
  } else {
    index++;
  }

  setTimeout(changeCom, 2000);
}

window.onload = changeCom();

// Smart Classes
var SmartImages = [];

SmartImages[0] = ['images/smart1.jpg'];
SmartImages[1] = ['images/Smart2.jpg'];
SmartImages[2] = ['images/smart3.jpg'];

var index = 0;

function changeSmart() {
  document.getElementById("SmartPhoto").src = SmartImages[index];
  document.getElementById("SmartPhoto").classList.add("size")

  if (index == 2) {
    index = 0;
  } else {
    index++;
  }

  setTimeout(changeSmart, 2000);
}

window.onload = changeSmart();





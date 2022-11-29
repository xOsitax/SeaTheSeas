var randomlinks = new Array();

randomlinks[0] = "about.html";
randomlinks[1] = "www.google.com";
randomlinks[2] = "www.youtube.com";

function randomlinks() {
  window.location = randomlinks[Math.floor(Math.random() * randomlinks.length)];
}
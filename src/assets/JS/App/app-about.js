window.onload = function () {
  try {
    TagCanvas.textColour = "#00ffff";
    TagCanvas.activeCursor = "cursor";
    TagCanvas.noSelect = "true";
    TagCanvas.bgOutline = "#000000";
    TagCanvas.textColour = '#2fc26f';
    TagCanvas.outlineColour = '#FE0853';
    TagCanvas.maxSpeed = 0.06;
    TagCanvas.freezeActive = true;
    TagCanvas.shuffleTags = true;
    TagCanvas.shape = 'sphere';
    TagCanvas.wheelZoom = false;
    TagCanvas.noSelect = true;
    TagCanvas.textFont = null;
    TagCanvas.freezeDecel = true;
    TagCanvas.initial = [0.3, -0.1];
    TagCanvas.depth = 1.1;
    TagCanvas.Start('myCanvas');
  } catch (e) {
    // something went wrong, hide the canvas container
    document.getElementById('myCanvasContainer').style.display = 'none';
  }
};

document.addEventListener('DOMContentLoaded', () => {
  try {
    TagCanvas.textColour = "#00ffff";
    TagCanvas.activeCursor = "cursor";
    TagCanvas.noSelect = "true";
    TagCanvas.bgOutline = "#000000";
    TagCanvas.textColour = '#2fc26f';
    TagCanvas.outlineColour = '#FE0853';
    TagCanvas.maxSpeed = 0.06;
    TagCanvas.freezeActive = true;
    TagCanvas.shuffleTags = true;
    TagCanvas.shape = 'sphere';
    TagCanvas.wheelZoom = false;
    TagCanvas.noSelect = true;
    TagCanvas.textFont = null;
    TagCanvas.freezeDecel = true;
    TagCanvas.initial = [0.3, -0.1];
    TagCanvas.depth = 1.1;
    TagCanvas.Start('myCanvas');
  } catch (e) {
    // something went wrong, hide the canvas container
    document.getElementById('myCanvasContainer').style.display = 'none';
  }
});

function greet() {
  try {
    TagCanvas.textColour = "#00ffff";
    TagCanvas.activeCursor = "cursor";
    TagCanvas.noSelect = "true";
    TagCanvas.bgOutline = "#000000";
    TagCanvas.textColour = '#2fc26f';
    TagCanvas.outlineColour = '#FE0853';
    TagCanvas.maxSpeed = 0.06;
    TagCanvas.freezeActive = true;
    TagCanvas.shuffleTags = true;
    TagCanvas.shape = 'sphere';
    TagCanvas.wheelZoom = false;
    TagCanvas.noSelect = true;
    TagCanvas.textFont = null;
    TagCanvas.freezeDecel = true;
    TagCanvas.initial = [0.3, -0.1];
    TagCanvas.depth = 1.1;
    TagCanvas.Start('myCanvas');
  } catch (e) {
    // something went wrong, hide the canvas container
    document.getElementById('myCanvasContainer').style.display = 'none';
  }
}

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      document.getElementById('navbar_top').classList.add('fixed-top');
      // add padding top to show content behind navbar
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('navbar_top').classList.remove('fixed-top');
      // remove padding top from body
      document.body.style.paddingTop = '0';
    }
  });
}); 
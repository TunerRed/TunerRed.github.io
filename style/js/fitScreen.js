var size;
size = window.screen.width/1920.0;
document.body.style.zoom = size;
document.body.style.cssText += '; -moz-transform: scale(' + size + ');-moz-transform-origin: 0 0; ';
(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
document.getElementById('menuIcon').onclick = function () {
  document.getElementById('menuOverlay').classList.toggle('menu_overlay_show');
  document.getElementById("menuIcon").children[0].classList.toggle("menuO1");
  document.getElementById("menuIcon").children[1].classList.toggle("menuO2");
  document.getElementById("menuIcon").children[2].classList.toggle("menuO3");
};

document.getElementById('menuOverlay').onclick = function () {
  document.getElementById('menuOverlay').classList.toggle('menu_overlay_show');
  document.getElementById("menuIcon").children[0].classList.toggle("menuO1");
  document.getElementById("menuIcon").children[1].classList.toggle("menuO2");
  document.getElementById("menuIcon").children[2].classList.toggle("menuO3");
};

setTimeout(function () {
  document.getElementById('alert').style.display = 'none';
}, 5000);

},{}]},{},[1]);

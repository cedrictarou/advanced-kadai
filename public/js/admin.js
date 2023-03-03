/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
// adminページ
var opinions = document.querySelectorAll(".opinion");
opinions.forEach(function (opinion) {
  var originText = opinion.textContent;
  var shortenText = opinion.textContent.substring(0, 25) + "...";
  if (opinion.textContent.length >= 25) {
    // 25文字以上なら...にする
    opinion.textContent = shortenText;
  }

  // マウスオーバーしたら全文表示する
  opinion.addEventListener("mouseover", function () {
    opinion.classList.toggle("open");
    setTimeout(function () {
      opinion.textContent = originText;
    }, 100);
  });
  // マウスが外れたら短くする
  opinion.addEventListener("mouseleave", function () {
    opinion.classList.toggle("open");
    setTimeout(function () {
      opinion.textContent = shortenText;
    }, 100);
  });
});
/******/ })()
;
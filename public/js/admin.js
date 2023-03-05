/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
// adminページ
var opinions = document.querySelectorAll(".opinion");
opinions.forEach(function (opinion) {
  // ロード時の状態
  var TEXT_LIMIT = 25;
  var originText = opinion.innerText;

  // 25文字以上なら、25文字に短縮表示する
  if (originText.length >= TEXT_LIMIT) {
    var shortenText = originText.slice(0, TEXT_LIMIT) + " ...";
    opinion.innerText = shortenText;

    // マウスオーバーしたら全文表示する
    opinion.addEventListener("mouseover", function () {
      opinion.classList.toggle("open");
      opinion.innerText = originText;
    });
    // マウスが外れたら短くする
    opinion.addEventListener("mouseleave", function () {
      opinion.classList.toggle("open");
      opinion.innerText = shortenText;
    });
  } else {
    // 25文字以内ならそのまま
    opinion.innerText = originText;
  }
});
/******/ })()
;
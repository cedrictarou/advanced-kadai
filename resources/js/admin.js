// adminページ
const opinions = document.querySelectorAll(".opinion");

opinions.forEach((opinion) => {
    const originText = opinion.textContent;
    const shortenText = opinion.textContent.substring(0, 25) + "...";

    if (opinion.textContent.length >= 25) {
        // 25文字以上なら...にする
        opinion.textContent = shortenText;
    }

    // マウスオーバーしたら全文表示する
    opinion.addEventListener("mouseover", () => {
        opinion.classList.toggle("open");
        setTimeout(() => {
            opinion.textContent = originText;
        }, 100);
    });
    // マウスが外れたら短くする
    opinion.addEventListener("mouseleave", () => {
        opinion.classList.toggle("open");
        setTimeout(() => {
            opinion.textContent = shortenText;
        }, 100);
    });
});

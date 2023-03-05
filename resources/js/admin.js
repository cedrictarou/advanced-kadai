// adminページ
const opinions = document.querySelectorAll(".opinion");

opinions.forEach((opinion) => {
    // ロード時の状態
    const TEXT_LIMIT = 25;
    const originText = opinion.innerText;

    // 25文字以上なら、25文字に短縮表示する
    if (originText.length >= TEXT_LIMIT) {
        const shortenText = originText.slice(0, TEXT_LIMIT) + " ...";
        opinion.innerText = shortenText;

        // マウスオーバーしたら全文表示する
        opinion.addEventListener("mouseover", () => {
            opinion.classList.toggle("open");
            opinion.innerText = originText;
        });
        // マウスが外れたら短くする
        opinion.addEventListener("mouseleave", () => {
            opinion.classList.toggle("open");
            opinion.innerText = shortenText;
        });
    } else {
        // 25文字以内ならそのまま
        opinion.innerText = originText;
    }
});

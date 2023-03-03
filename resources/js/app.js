require("./bootstrap");
// contactページ用
const postcode = document.querySelector("#postcode");
const address = document.querySelector("#address");

postcode.addEventListener("blur", () => {
    postcode.value = zenkakuToHankaku(postcode.value);
    postcode.value = addHyphen(postcode.value);
    setAddress(postcode.value);
    return postcode.value;
});
// 郵便番号を半角にする処理
const zenkakuToHankaku = (input) => {
    return (
        input
            // 全角を半角にする
            .replace(/[！-～]/g, (s) => {
                return String.fromCharCode(s.charCodeAt(0) - 0xfee0);
            })
            // ハイフンも半角にする
            .replace("ー", "-")
    );
};
// ハイフンを自動で挿入する処理
const addHyphen = (input) => {
    if (input.length >= 3 && input.substr(3, 1) !== "-") {
        //４桁目が'-(ハイフン)’かどうかをチェックし、違ったら挿入
        return input.slice(0, 3) + "-" + input.slice(3, input.length);
    } else return input;
};

// 郵便番号を入れると住所が自動で入力する処理
const setAddress = async (input) => {
    // zipcloud apiを使って、郵便番号の住所データを取得。
    const API = "https://zipcloud.ibsnet.co.jp/api/search?zipcode";

    try {
        const response = await fetch(`${API}=${input}`);
        // 取得したデータをjson形式に変換。
        const data = await response.json();
        // 住所にデータを挿入
        address.value =
            data.results[0].address1 +
            data.results[0].address2 +
            data.results[0].address3;
    } catch (error) {
        console.log(error);
        alert("郵便番号を再度ご確認ください。");
    }
};

// 名前に不要な空白がある場合は取り除く
const lastName = document.querySelector("#last_name");
const firstName = document.querySelector("#first_name");

lastName.addEventListener("blur", () => {
    return (lastName.value = lastName.value.trim());
});
firstName.addEventListener("blur", () => {
    return (firstName.value = firstName.value.trim());
});

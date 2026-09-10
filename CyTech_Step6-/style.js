// フォーム送信時の入力チェック
function checkForm() {

    // 入力値を取得
    const name = document.getElementById("name").value.trim();
    const companyName = document.getElementById("companyName").value.trim();
    const email = document.getElementById("email").value.trim();
    const age = document.getElementById("age").value.trim();
    const message = document.getElementById("message").value.trim();


    // 未入力チェック
    if (
        name === "" ||
        companyName === "" ||
        email === "" ||
        age === "" ||
        message === ""
    ) {

        alert("必須項目が未入力です。入力内容をご確認ください。");

        return false; //送信しない
    }


    // 確認ダイアログ
    const result = confirm(
        "以下の内容で送信しますか？\n\n" +
        "お名前：" + name + "\n" +
        "会社名：" + companyName + "\n" +
        "メールアドレス：" + email + "\n" +
        "年齢：" + age + "\n" +
        "お問い合わせ内容：" + message
    );



    return result; 
    // OK → true（送信）
    // キャンセル → false（送信中止）
    

    // ① ボタンを取得
// 「押してみてね！」のボタンを取得
const button = document.querySelector("button");


// ② 背景色を変更するfooterを取得
const footer = document.querySelector("footer");


// ③ 色を配列に保存
const colors = [
    "blue",
    "red",
    "yellow",
    "gray"
];


// 現在の色の番号
let colorIndex = 0;


// ④ ボタンがクリックされた時の処理
button.addEventListener("click", function(){

    // footerの背景色を変更
    footer.style.backgroundColor = colors[colorIndex];


    // 次の色へ変更するため番号を増やす
    colorIndex++;


    // 最後の色まで行ったら青に戻す
    if(colorIndex >= colors.length){

        colorIndex = 0;

    }

});
}
$(function () {
    $("#contact-btn").click(function () {
        user = window.prompt("ユーザー名を入力してください", "");
        if (user !== "") {
            // ★名前情報を含めてチャットページに遷移
            var url = "/contact/" + user;
            location.href = url;
        } else {
            window.alert("キャンセルされました");
        }
    });
});

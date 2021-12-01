$(function () {
    // 検索ボックスに入力があればsubmit
    $(".search-bar input").change(function () {
        // ★webサーバ上は下記記述に変更
        var url = "/article/list/search?word=" + $(this).val();
        location.href = url;
    });
});

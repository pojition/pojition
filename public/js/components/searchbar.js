$(function () {
    // 検索ボックスに入力があればsubmit
    $(".search-bar input").blur(function () {
        if ($(this).val() !== "") {
            var url = "/article/list/search?word=" + $(this).val();
            location.href = url;
        }
    });
});

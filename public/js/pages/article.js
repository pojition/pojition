$(function () {
    /*****************************************
     * markdown→html変換
     ***************************************** */
    // 本文
    var content_value = $("#content-block").html();
    $("#content-block").html(markdown(content_value));
    //コードハイライト
    highlightCode();
});

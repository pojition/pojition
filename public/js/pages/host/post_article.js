$(function () {
    /*****************************************
     * 既存の記事を開いた際にプレビュー画面へ反映
     ***************************************** */
    //タイトル
    var title_value = $("#title").val();
    $("#title-preview").html(title_value);
    // サブタイトル
    var sub_title_value = $("#sub-title").val();
    $("#sub-title-preview").html(sub_title_value);
    // 本文
    var editor_value = $("#editor").val();
    $("#result").html(markdown(editor_value));

    //コードハイライト
    highlightCode();
    /**************ここまで ********************/

    /***************************************************************
     * 以下は各テキストボックスへの入力内容を逐次プレビューに反映する処理
     ***************************************************************/

    // タイトル
    $("#title").keyup(function () {
        $("#title-preview").html($(this).val());
    });
    // サブタイトル
    $("#sub-title").keyup(function () {
        $("#sub-title-preview").html($(this).val());
    });
    // 本文（マークダウン変換も行う）
    $("#editor").on("keyup focusout", function (e) {
        if (e.type == "keyup" && e.keyCode != 13) {
            return false;
        }
        var editor_value = $("#editor").val();
        $("#result").html(markdown(editor_value));
        //コードハイライト
        highlightCode();
    });

    /**************ここまで ********************/
});

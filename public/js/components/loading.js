//画面loading時に読み込ませる

//DOM構築が完了したら実行
$(function () {
    $("header").hide();
    $(".wrapper").hide();
});

//全ての読み込みが完了したら実行(最低でも1秒は表示)
$(window).on("load", function () {
    setTimeout(function () {
        $.when($(".loading").fadeOut(1500)).done(function () {
            $("header").show();
            $(".wrapper").show();
        });
    }, 3000);
});

//10秒たったら強制的にロード画面を非表示
$(function () {
    setTimeout("stopload()", 10000);
});

function stopload() {}

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#sub-btn").click(function () {
        var obj = document.forms["input-form"];

        $.ajax({
            type: "post", //HTTP通信の種類
            data: $(obj).serialize(),
            url: "../../chat/chatInsert", //通信したいURL
            dataType: "json",
        })
            //通信が成功したとき
            .done((res) => {
                $chat = res["chat"];
                $html =
                    "<div class='left'>" + $chat["content"] + "</div><br><br>";
                $(".all-chats").append($html);
                $("#input-textarea").val("");
            })
            //通信が失敗したとき
            .fail((error) => {
                console.log("正常に登録できません");
            });
    });

    // 0.5秒間隔でチャット部分にリロードをかける
    const timer = 500; // ミリ秒で間隔の時間を指定

    setInterval(function () {
        $.ajax({
            type: "post", //HTTP通信の種類
            url: "../../chat/chatReload", //通信したいURL
            dataType: "json",
        })
            //通信が成功したとき
            .done((res) => {
                $chat = res["chat"];
                $html =
                    "<div class='right'>" +
                    $chat["content"] +
                    "<br><br>" +
                    $chat["name"] +
                    "</div><br>";
                $(".all-chats").append($html);
            })
            //通信が失敗したとき
            .fail((error) => {
                console.log("通信失敗1");
            });
    }, timer);
});

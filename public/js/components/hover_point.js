/**
 * hover時に指定した要素のx,y平面角度を変化させる
 **/

$(function () {
    //初期化
    $(".hover-point").css({
        transform: "rotateX(0deg) rotateY(0deg) perspective(1400px)",
    });

    /**
     *関数：変化させる角度を返す
     **/
    function calcDeg(obj) {
        //hover要素の絶対座標を取得
        obj_abs = {};
        obj_abs["top"] = $(obj).offset().top - $(window).scrollTop();
        obj_abs["left"] = $(obj).offset().left - $(window).scrollLeft();

        //hover要素を基準としたカーソル位置を取得
        var obj_cursor = {};
        obj_cursor["top"] = event.clientY - obj_abs["top"];
        obj_cursor["left"] = event.clientX - obj_abs["left"];

        //hover要素の大きさを取得
        var this_size = {};
        this_size["width"] = $(obj).width();
        this_size["height"] = $(obj).height();

        //比率計算
        var transDeg = {};
        transDeg["xDeg"] = (obj_cursor["top"] / this_size["height"]) * 100;
        transDeg["yDeg"] = (obj_cursor["left"] / this_size["width"]) * 100;

        //y=10/50*(比率)-10
        var transDeg = {
            xDeg: (8 / 50) * transDeg["xDeg"] - 8,
            yDeg: (8 / 50) * (100 - transDeg["yDeg"]) - 8,
        };
        return transDeg;
    }

    //
    function rotateObj() {
        var transDeg = calcDeg(this);
        $(this).css({
            transform:
                "perspective(1400px) " +
                "scale3d(1.04,1.04,1.04) " +
                "rotateX(" +
                transDeg["xDeg"] +
                "deg)" +
                "rotateY(" +
                transDeg["yDeg"] +
                "deg)",
            opacity: "0.75",
        });
    }

    //マウスmoveアクション
    $(".hover-point").mousemove(rotateObj);

    //スマホタッチstartアクション
    $(".hover-point").touchstart(rotateObj);

    //スマホタッチmoveアクション
    $(".hover-point").touchmove(rotateObj);

    //マウスmoveoutアクション
    $(".hover-point").mouseout(function () {
        $(this).css({
            transform: "rotate(0deg)",
        });
    });
});

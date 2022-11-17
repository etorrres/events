var data = []
    , totalPoints = 300;

$(function () {
    var data = [{
        label: "Tecnologia"
        , data: 2
        , color: "#4f5467"
    , }, {
        label: "Talleres"
        , data: 2
        , color: "#26c6da"
    , }, {
        label: "Temas Sociales"
        , data: 1
        , color: "#009efb"
    , }];
    var plotObj = $.plot($("#pre-1"), data, {
        series: {
            pie: {
                innerRadius: 0.5
                , show: true
            }
        }
        , grid: {
            hoverable: true
        }
        , color: null
        , tooltip: true
        , tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20
                , y: 0
            }
            , defaultTheme: false
        }
    });
});
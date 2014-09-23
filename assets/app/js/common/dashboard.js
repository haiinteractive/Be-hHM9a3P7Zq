$(document).ready(function() {
    var skycons = new Skycons({
        color: "#444444"
    });
    var skyconsYellow = new Skycons({
        color: "#ffb244"
    });
    skycons.set("icon1", Skycons.FOG);
    skycons.set("icon2", Skycons.PARTLY_CLOUDY_DAY);
    skyconsYellow.set("icon3", Skycons.CLEAR_DAY);
    skycons.set("icon4", Skycons.WIND);
    skycons.set("icon5", Skycons.SLEET);
    skycons.set("icon6", Skycons.SNOW);
    skycons.set("icon7", Skycons.WIND);
    skycons.play();
    skyconsYellow.play();
    var green = document.querySelector(".js-switch");
    window.onload = function() {
        date()
    }, setInterval(function() {
        date()
    }, 1000);

    function date() {
        var now = moment().format("hh:mm");
        $(".timer").html("<b>" + now + "</b>")
    }
    var today = moment();
    $(".date").text(today.format("ddd, D MMMM YYYY"));
});
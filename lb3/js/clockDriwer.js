var img_num = 10;
var ranger;
var clock;

function changeImage(){
    img_num = (img_num++) % 10 + 1;
    $("#slider").attr("src","images/" + img_num + ".jpg");
}


function changeInterval(){
    var delay = ranger.val();
    $("label[for='ranger']").html(ranger.val() + " ms");
    clearInterval(slider);
    slider = setInterval(changeImage, delay); //global
}


function switchAppearence(hours){
    if(hours > 6 && hours < 20){
        $("*").addClass("--day");
	$("*").removeClass("--night");
    }else{
        $("*").addClass("--night");
	$("*").removeClass("--day");
    }
}


function runClock(){
    var date = new Date();
    var hours = date.getHours();
    switchAppearence(hours);
    clock.text(hours + ":"
	       + date.getMinutes() + ":"
	       + date.getSeconds());
}


$(function(){
    ranger = $("#ranger");
    var delay = ranger.val()
    slider = setInterval(changeImage, delay); //global
    clock = $("#clock")
    var clockwork = setInterval(runClock, 1000);
});

jQuery(function($) {
var timer;
function button1_click(event)
{
     $(".slides").css("visibility","hidden");
     $("#image1").css("visibility","visible");
     $("#image1").css("opacity","0");
    $("#image1").animate({"opacity":1},3000, "linear", null);
     $("ul.buttons li").removeClass("active");
    $("#image1").animate({"opacity":1},3000, "linear", null);
     $("#button1").addClass("active");
     clearTimeout(timer);
     timer = setTimeout(eval("button2_click"),"6000");
    $("#image1").animate({"opacity":1},3000, "linear", null);
}

function button2_click(event)
{
     $(".slides").css("visibility","hidden");
     $("#image2").css("visibility","visible");
     $("#image2").css("opacity","0");
    $("#image2").animate({"opacity":1},3000, "linear", null);
     $("ul.buttons li").removeClass("active");
    $("#image2").animate({"opacity":1},3000, "linear", null);
     $("#button2").addClass("active");
     clearTimeout(timer);
     timer = setTimeout(eval("button3_click"),"6000");
    $("#image2").animate({"opacity":1},3000, "linear", null);
}

function button3_click(event)
{
     $(".slides").css("visibility","hidden");
     $("#image3").css("visibility","visible");
     $("#image3").css("opacity","0");
    $("#image3").animate({"opacity":1},3000, "linear", null);
     $("ul.buttons li").removeClass("active");
    $("#image3").animate({"opacity":1},3000, "linear", null);
     $("#button3").addClass("active");
     clearTimeout(timer);
     timer = setTimeout(eval("button4_click"),"6000");
    $("#image3").animate({"opacity":1},3000, "linear", null);
}

function button4_click(event)
{
     $(".slides").css("visibility","hidden");
     $("#image4").css("visibility","visible");
     $("#image4").css("opacity","0");
    $("#image4").animate({"opacity":1},3000, "linear", null);
     $("ul.buttons li").removeClass("active");
    $("#image4").animate({"opacity":1},3000, "linear", null);
     $("#button4").addClass("active");
     clearTimeout(timer);
     timer = setTimeout(eval("button5_click"),"6000");
    $("#image4").animate({"opacity":1},3000, "linear", null);
}

function button5_click(event)
{
     $(".slides").css("visibility","hidden");
     $("#image5").css("visibility","visible");
     $("#image5").css("opacity","0");
    $("#image5").animate({"opacity":1},3000, "linear", null);
     $("ul.buttons li").removeClass("active");
    $("#image5").animate({"opacity":1},3000, "linear", null);
     $("#button5").addClass("active");
     clearTimeout(timer);
     timer = setTimeout(eval("button6_click"),"6000");
    $("#image5").animate({"opacity":1},3000, "linear", null);
}


function button6_click(event)
{
     $(".slides").css("visibility","hidden");
     $("#image6").css("visibility","visible");
     $("#image6").css("opacity","0");
    $("#image6").animate({"opacity":1},3000, "linear", null);
     $("ul.buttons li").removeClass("active");
    $("#image6").animate({"opacity":1},3000, "linear", null);
     $("#button6").addClass("active");
     clearTimeout(timer);
     timer = setTimeout(eval("button1_click"),"6000");
    $("#image6").animate({"opacity":1},3000, "linear", null);
}

function OnLoad(event)
{
     clearTimeout(timer);
     timer = setTimeout(eval("button2_click"),"6000");
}

$('#button1').bind('click', button1_click);

$('#button2').bind('click', button2_click);

$('#button3').bind('click', button3_click);

$('#button4').bind('click', button4_click);

$('#button5').bind('click', button5_click);

$('#button6').bind('click', button6_click);

OnLoad();

});
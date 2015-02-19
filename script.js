//document ready calls every following function for the document.
$("document").ready(function(){
    //This .intro changes the background color to blue without changing CSS.
   $(".intro").css("background-color", "blue");
   //p last allows you to chnage the anything on the last p without CSS.
   $('p:last').css({"background-color": "purple", "color": "white"});
   //mouseover is pretty much hovering your mouse over whatever is specified. In this case it's the image.
   $('img').bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);
   //this makes it so when you click any h2 element something happens.
   $('h2').bind('click', mouseClick);
   //This function adds text to a specific location      
   $('#replaceWText').bind('click', replaceWText);
   //this is the location that the replaceWText adds text
   $('#randPara').bind('click', addAPara);
   //this fucntion removes the text added in the above functions
   $('#removePara').bind('click', removeAPara);
   //This function hides the image you have targeted
   $('#hidePic').bind('click', hideTheImage);
   //this is the accordion function with the h3 header
   $('#superHumans').accordion({header: "h3"});
   //this tabs function creates the tabs in the website
   $('#tabs').tabs();
   //This code is for the fade in feature on the button.
   $("button").mouseover(function(){
        $("#hidePic").animate({backgroundColor:'blue'},"slow");
  });
});

//This is the code for what happens when you move the mouse over the image.
function mouseOverMe(){
    $("#alter").html("Smiley does not like the mouse on his face. STOP IT!!!!");
}
//This is the code for what happens when you don't have the mouse over the image.
function mouseOutMe(){
    $("#alter").html("Go touch Smiley. He's nice...");
}
//What it says on all p elements when you do the mouseClick function above.
function mouseClick(){
    $('p').html('YOU BROKE IT!!!!!!!!!!!!!!');
}
//deletes added text
function removeAPara(){
    $('#randPara p:last').remove();
}
//code for the randPara line in html
function addAPara(){
    $('#randPara').append();
}
//what is typed when you press the add text button.
function replaceWText(){
    $('#randPara').append('<p>Yay. So exciting.</p>');
}
//the specific type of style that happens when you click hide the image.
function hideTheImage(){
    $('img').hide('fade', {}, 2500);
}
//This function sets up the draggable box.
$(function(){
    $('#drag').draggable();
});
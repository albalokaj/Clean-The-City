var score=0;
//allows an element to drop on another element

function allowDrop(ev) {
    ev.preventDefault();
}
//sets the data type and the id of the dragged element

function drag(ev) {
    ev.dataTransfer.setData("current", ev.target.id);
}
//gets the id of the dragged element and deletes that element if the specified condition is true

function drop1(ev) {
    ev.preventDefault();
    var el = document.getElementById(ev.dataTransfer.getData("current"));
    var glass = ['d1', 'd2', 'd8'];
    var i = 0
    while(i < glass.length) {
        if (el.id == glass[i]) {
            el.parentNode.removeChild(el);
            document.getElementById('blueTrash').src = "Images/bule.png";
            score+=10;
            document.getElementById('score').innerHTML=score;
        }
        i++;
    };
}
//gets the id of the dragged element and deletes that element if the specified condition is true

function drop2(ev) {
    ev.preventDefault();
    var el = document.getElementById(ev.dataTransfer.getData("current"));
    var plastic = ['d3', 'd5', 'd6', 'd10'];
    for (var i = 0; i < plastic.length; i++) {
        if (el.id == plastic[i]) {
            el.parentNode.removeChild(el);

            document.getElementById('redTrash').src = "Images/red.png";
            score+=10;
            document.getElementById('score').innerHTML=score;
        }
    }
}
//gets the id of the dragged element and deletes that element if the specified condition is true

function drop3(ev) {
    ev.preventDefault();
    var el = document.getElementById(ev.dataTransfer.getData("current"));
    var paper = ['d4', 'd7', 'd9'];
    for (var i = 0; i < paper.length; i++) {
        if (el.id == paper[i]) {
            el.parentNode.removeChild(el);
            document.getElementById('yellowTrash').src = "Images/yellow.png";
            score+=10;
            
            document.getElementById('score').innerHTML=score;
        }
    }
}
//changes the background image
window.onload = function(){
    startGame();
    var d = new Date();
    if (d.getHours() < 6 || d.getHours() >= 17) {
        document.body.style.backgroundImage = "url('Images/b123.jpg')";    
    }

}
//reloads the page
function reset() {
    window.location.reload();
}

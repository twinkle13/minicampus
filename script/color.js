
var divs = document.getElementsByTagName('div.color_change');

for(var i =0; i < divs.length; i++){
divs[i].style.background = getRandomColor();
}
function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
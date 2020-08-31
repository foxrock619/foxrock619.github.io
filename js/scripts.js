function curDate() {
    var curdate = new Date();
    var year = mydate.getYear();
    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();
    var dayarray = new Array()
}
function PlaySound(melody) {
    alert("On Press of " + melody);
    var path = "../music2.mp3"
    var snd = new Audio(path + melody + ".mp3");
    snd.play();
}

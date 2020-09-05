function curDate() {
    var curdate = new Date();
    var year = mydate.getYear();
    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();
    var dayarray = new Array()
}
var ap = document.getElementById('ap');

setTimeout(function () {
    ap.style.display = 'none';
}, 5000);

// Set the date we're counting down to
var countDownDate = new Date("May 27, 2020 9:37:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = now - countDownDate;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = "相识 " + days + " 天 " + hours + " 小时 "
        + minutes + " 分钟 " + seconds + " 秒 ";


}, 1000);
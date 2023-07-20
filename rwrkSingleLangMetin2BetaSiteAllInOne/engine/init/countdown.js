var countDownDate = new Date("Jan 1, 1970 00:00:00").getTime();
var x = setInterval(function() {
	var now = new Date().getTime();
	//var distance = countDownDate - now;
	var distance = now - countDownDate;
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	if(minutes <10) minutes = "0" + minutes;
	if(seconds <10) seconds = "0" + seconds; 
	document.getElementById("timer").innerHTML = days + " dni " + hours + " godzin " + minutes + " minut " + seconds + " sekund" ;
	if (distance < 0) {
		clearInterval(x);
		document.getElementById("timer").innerHTML = "Serwer wystartował, miłej gry!";
	}
}, 1000);
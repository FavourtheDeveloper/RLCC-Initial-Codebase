var counter = 300;

function startQuiz() {
    var user = document.getElementById("userName");
    if (user.value == "") {
        alert("Please input your Name in the space Provided");
    } else {
         
setInterval(function() {
    counter--;

    if (counter >= 0) {
        var id = document.getElementById("count");
        id.innerHTML = counter + " secs";
    }


    if (counter === 0) {
        id.innerHTML = "Time-Up";
        check();
    }  

    
}, 1000)
        document.getElementById("instr").classList.add("hidden");
        document.getElementById("count").classList.toggle("hidden");
        document.getElementById("start").style.display = "none";
    document.getElementById("firstq").classList.remove("hidden");
    user.classList.add("hidden");
    }

    
} 

function check() {
    var q1 = document.quiz.question1.value;
    var q2 = document.quiz.question2.value;
    var q3 = document.quiz.question3.value;
    var q4 = document.quiz.question4.value;
    var q5 = document.quiz.question5.value;
    var q6 = document.quiz.question6.value;
    var q7 = document.quiz.question7.value;
    var q8 = document.quiz.question8.value;
    var q9 = document.quiz.question9.value;
    var q10 = document.quiz.question10.value;
    var reply = document.getElementById("reply");
    var user = document.getElementById("userName");
    var answer = 0;

    if (user.value == "") {
        alert("Please input your Name in the space Provided");
    } else {
    if (q1 == "syrophenician") {
        answer++;
    }

    if (q2 == "Persecution") {
        answer++;
    }

    if (q3 == "Haran") {
        answer++;
    }

    if (q4 == "2cor 13:14") {
        answer++;
    }

    if (q5 == "All of the above") {
        answer++;
    }

    if (q6 == 6) {
        answer++;
    }

    if (q7 == "Jesus Christ") {
        answer++;
    }

    if (q8 == "John the beloved") {
        answer++;
    }

    if (q9 == "Rev 12:10-12") {
        answer++;
    }

    if (q10 == "John") {
        answer++;
    }

    quiz.style.display = "none";
    user.style.display = "none";

    document.getElementById("count").classList.toggle("hidden");

    if (answer <= 6) {
        reply.innerHTML = "Dear " + user.value + ". Your Score is " + answer + "/10.";
    } else {
        reply.innerHTML = "Dear " + user.value + ". Your Score is " + answer + "/10. This is Awesome 😊😊😊";
    }

}
    
}


var firstbtn = document.getElementById("buttonfirst");
var secbtn = document.getElementsByClassName("buttonsecond");
var thirdbtn = document.getElementsByClassName("buttonthird");
var fourthbtn = document.getElementsByClassName("buttonfourth");
var fifthbtn = document.getElementsByClassName("buttonfifth");
var sixthbtn = document.getElementsByClassName("buttonsixth");
var seventhbtn = document.getElementsByClassName("buttonseventh");
var eightbtn = document.getElementsByClassName("buttoneight");
var ninethbtn = document.getElementsByClassName("buttonnineth");



    function Gotosec() {
        document.getElementById("firstq").classList.toggle("hidden");
        document.getElementById("secondq").classList.toggle("hidden");

    }

    function Gotothird() {
        document.getElementById("secondq").classList.toggle("hidden");
        document.getElementById("thirdq").classList.toggle("hidden");

    }

    function Gotofourth() {
        document.getElementById("thirdq").classList.toggle("hidden");
        document.getElementById("fourthq").classList.toggle("hidden");

    }

    function Gotofifth() {
        document.getElementById("fourthq").classList.toggle("hidden");
        document.getElementById("fifthq").classList.toggle("hidden");

    }

    function Gotosixth() {
        document.getElementById("fifthq").classList.toggle("hidden");
        document.getElementById("sixthq").classList.toggle("hidden");

    }

    function Gotoseventh() {
        document.getElementById("sixthq").classList.toggle("hidden");
        document.getElementById("seventhq").classList.toggle("hidden");

    }

    function Gotoeight() {
        document.getElementById("seventhq").classList.toggle("hidden");
        document.getElementById("eightq").classList.toggle("hidden");

    }

    function Gotonineth() {
        document.getElementById("eightq").classList.toggle("hidden");
        document.getElementById("ninethq").classList.toggle("hidden");

    }

    function Gototenth() {
        document.getElementById("ninethq").classList.toggle("hidden");
        document.getElementById("tenthq").classList.toggle("hidden");

    }



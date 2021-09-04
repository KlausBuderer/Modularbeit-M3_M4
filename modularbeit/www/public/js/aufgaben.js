$(function() {
  //Hauptfunktion
});

var currentQuestionNo = 0;
var points = 0;
var rightAnswerPoints = 10;
var currentQuestion;
var questions;
var indexArray = [];
var wegSpieler = 0;
var wegComputer = 0;
var anzahlRichtigeAntworten = 0;
var anzahlFragen = 0;
var abbruch = false;


$( document ).ready(function() {
  console.log( data );
  console.log(questions);
  questions = data;
  $("#stufe").val(questions[0].stufe); 
});

//Entnimmt eine zufällige Frage aus dem Array und gibt sie aus
function showNextQuestion() {
  if (wegSpieler === 100 || wegComputer === 100) {
    showEnd();
    currentQuestionNo = 0;
    indexArray = [];
  }

  var questionNbr = getQuestionNumber();


  console.log("Loading Question:" + questionNbr);
  currentQuestion = questions[questionNbr];
  $("#qno").text(currentQuestionNo+1);
  $("#question_text").text(currentQuestion.question);
  $("#answer_a").text(currentQuestion.A);
  $("#answer_b").text(currentQuestion.B);
  $("#answer_c").text(currentQuestion.C);
  $("#answer_d").text(currentQuestion.D); 

  $(".answer").removeClass("btn-primary btn-danger btn-success btn-default");
  $(".answer").addClass("btn-default");
}

function getRightAnswer() {
  return currentQuestion.right;
}

//Generieren einer Random Nummer
function getRandomNo (max){

     return Math.floor(Math.random() * max); 
    
  
}

//Auswahl der Frage 
function getQuestionNumber(){
  var newNumber = false;

  do {

  //Erstellung Zufallsnummer
   var number = getRandomNo(questions.length);
    //Prüfung ob Nummer schon in Array vorhanden
   if (!contains(indexArray,number)) {
     indexArray.push(number);
     newNumber = true;
   }
    
  } while (!newNumber);

  return number;
}


//-> Prüfung ob Frage schon gestellt wurde

  function contains(a, obj) {
    for (var i = 0; i < a.length; i++) {
        if (a[i] === obj) {
            return true;
        }
    }
    return false;
}


//Lerneinheit beginnen

$(".start").click(function() {
  console.log( "Start" );
  $(".quiz_start").fadeOut(function() {
   startQuiz();
  });
});

//Aufgabe starten
function startQuiz() {
  showNextQuestion();
  $("#question").fadeIn("slow");  
  $("#continue_btn").hide();
  $("#Spieler").css("margin-left", "0px");
  $("#Computer").css("margin-left", "0px");
  anzahlRichtigeAntworten = 0;
  anzahlFragen = 0;
}

//Antwortbutton A
$("#answer_a_btn").click(function() {
  selectAnswer("#answer_a_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_d_btn");
  $("#answer_commit_btn").show();
});

//Antwortbutton B
$("#answer_b_btn").click(function() {
  selectAnswer("#answer_b_btn");
  deselectAnswer("#answer_a_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_d_btn");
  $("#answer_commit_btn").show();
});

//Antwortbutton C
$("#answer_c_btn").click(function() {
  selectAnswer("#answer_c_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_a_btn");
  deselectAnswer("#answer_d_btn");
  $("#answer_commit_btn").show();
});

//Antwortbutton D
$("#answer_d_btn").click(function() {
  selectAnswer("#answer_d_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_a_btn");
  $("#answer_commit_btn").show();
});

//Antwort bestätigen
$("#answer_commit_btn").click(function() {
  validateAnswer();

});

//Aufgabe abbrechen
$("#abbrechen").click(function() {
showEnd();
abbruch = true;
});

//Aufgabe neu starten
$(".restart").click(function() {
  $(".quiz_end").fadeOut(function() {
    wegSpieler = 0;
    wegComputer = 0;
    anzahlRichtigeAntworten = 0;
    startQuiz(); 
  });
});

//Aufgabe beenden
$(".end").click(function() {
  $(".quiz_end").fadeOut(function() {
    saveState(); 
    wegSpieler = 0;
    wegComputer = 0;
  });
});

//Antwort auf richtigkeit prüfen
function validateAnswer() {
  $("#answer_commit_btn").hide();
  var rightAnswer = getRightAnswer();
  var selectedAnswerId = $(".answer.btn-primary").attr("id");
  var selectedAnswer = $(".answer.btn-primary").text()[0]; 


  if (selectedAnswer == rightAnswer) {
    $(".answer.btn-primary").removeClass("btn-primary");
    $(".answer.btn-default").removeClass("btn-default");
    $("#"+selectedAnswerId).addClass("btn-success");
    wegSpieler += 10;
    anzahlRichtigeAntworten += 1;
    anzahlFragen++ ;
    $("#Spieler").css("margin-left", wegSpieler + "%");
    points += rightAnswerPoints;
  } else {
    $(".answer.btn-primary").removeClass("btn-primary");
    $(".answer.btn-default").removeClass("btn-default");
    $("#"+selectedAnswerId).addClass("btn-danger");
    wegComputer += 10;
    anzahlFragen++ ;
    $("#Computer").css("margin-left", wegComputer + "%");
  }

      setTimeout(goNext, 1000);
     

}

//Nächste Aufgabe anzeigen
function goNext() {
   currentQuestionNo++;
      showNextQuestion();  
}

//Gewählter Button Blau färben
function selectAnswer(id) {
  $(id).addClass("btn-primary");
  $(id).removeClass("btn-default");
}

//Nicht gewählte Button grau färben
function deselectAnswer(id) {
  $(id).addClass("btn-default");
  $(id).removeClass("btn-primary");  
}

//Zeige Endbild
function showEnd() {
  $("#question").fadeOut(function() {
    $("#endpoints").text(anzahlRichtigeAntworten);
    $("#possiblepoints").text(anzahlFragen);
    $(".quiz_end").fadeIn();  
    $("#anzRichtig").val(anzahlRichtigeAntworten);
    $("#anzFragen").val(anzahlFragen);
    $("#abbruch").val(pruefeAbbruch());

   
  });  
}

//Abbruch nur bei nicht beendeter Aufgabe möglich
function pruefeAbbruch(){
   if (wegSpieler < 100 && wegComputer <100) {
      return true;
    } else {
      return false;
    }
}

//Bewege Spielerfigur bei richtiger Antwort
function bewegeSpieler(){
wegSpieler += 20;
spieler = document.getElementById('Spieler').style;
spieler.left = wegSpieler + "px";
}

//Bewege Computerfigur bei falscher Antwort
function bewegeComputer(){

  wegComputer += 20;
  document.getElementById('Computer').style.left= wegSpieler + "px";
  console.log("x");
  }


  
  

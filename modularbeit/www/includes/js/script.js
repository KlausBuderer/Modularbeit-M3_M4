$(function() {
  //Hauptfunktion
});

var wegSpieler = 0;
var wegComputer = 0;
var anzahlRichtigeAntworten = 0;
var anzahlFragen = 0;
var abbruch = false;


$(".start").click(function() {
  console.log( "Start" );
  $(".quiz_start").fadeOut(function() {
   startQuiz();
  });
});

function startQuiz() {
  showNextQuestion();
  $("#question").fadeIn("slow");  
  $("#continue_btn").hide();
  $("#Spieler").css("margin-left", "0px");
  $("#Computer").css("margin-left", "0px");
  anzahlRichtigeAntworten = 0;
  anzahlFragen = 0;
}

$("#answer_a_btn").click(function() {
  selectAnswer("#answer_a_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_d_btn");
});

$("#answer_b_btn").click(function() {
  selectAnswer("#answer_b_btn");
  deselectAnswer("#answer_a_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_d_btn");
});

$("#answer_c_btn").click(function() {
  selectAnswer("#answer_c_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_a_btn");
  deselectAnswer("#answer_d_btn");
});

$("#answer_d_btn").click(function() {
  selectAnswer("#answer_d_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_a_btn");
});

$("#answer_commit_btn").click(function() {
  validateAnswer();

});

$("#abbrechen").click(function() {
showEnd();
abbruch = true;
});


$(".restart").click(function() {
  $(".quiz_end").fadeOut(function() {
    wegSpieler = 0;
    wegComputer = 0;
    anzahlRichtigeAntworten = 0;
    startQuiz(); 
  });
});

$(".end").click(function() {
  $(".quiz_end").fadeOut(function() {
    saveState(); 
    wegSpieler = 0;
    wegComputer = 0;
  });
});

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
  $("#continue_btn").show();
}

$("#continue_btn").click(function() {
  currentQuestionNo++;
  showNextQuestion();  
  $("#continue_btn").hide();
  $("#answer_commit_btn").show();
});

function selectAnswer(id) {
  $(id).addClass("btn-primary");
  $(id).removeClass("btn-default");
}

function deselectAnswer(id) {
  $(id).addClass("btn-default");
  $(id).removeClass("btn-primary");  
}

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

function pruefeAbbruch(){
   if (wegSpieler < 100 && wegComputer <100) {
      return true;
    } else {
      return false;
    }
}


function bewegeSpieler(){
wegSpieler += 20;
spieler = document.getElementById('Spieler').style;
spieler.left = wegSpieler + "px";
}

function bewegeComputer(){

  wegComputer += 20;
  document.getElementById('Computer').style.left= wegSpieler + "px";
  console.log("x");
  }


  function saveState(){

    console.log("Daten werden in die Datenbank gespeichert");

  }

  $("#mg-speichern").click(function() {
      var gutscheinInput = document.getElementById('gutscheinInput').text;
      $("#neuGutschein").text(gutscheinInput);

  });

  
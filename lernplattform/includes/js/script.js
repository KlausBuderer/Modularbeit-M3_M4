$(function() {
  //Hauptfunktion
});

var x = 0;
var y = 0;


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

$(".restart").click(function() {
  $(".quiz_end").fadeOut(function() {
    x = 0;
    y = 0;
    startQuiz(); 
  });
});

$(".end").click(function() {
  $(".quiz_end").fadeOut(function() {
    saveState(); 
    x = 0;
    y = 0;
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
    x += 10;
    $("#Spieler").css("margin-left", x + "%");
    points += rightAnswerPoints;
  } else {
    $(".answer.btn-primary").removeClass("btn-primary");
    $(".answer.btn-default").removeClass("btn-default");
    $("#"+selectedAnswerId).addClass("btn-danger");
    y += 10;
    $("#Computer").css("margin-left", y + "%");
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
    $("#endpoints").text(points);
    $("#possiblepoints").text(rightAnswerPoints * questions.length);
    $(".quiz_end").fadeIn();  
  });  
}



function bewegeSpieler(){
x += 20;
spieler = document.getElementById('Spieler').style;
spieler.left = x + "px";
}

function bewegeComputer(){

  y += 20;
  document.getElementById('Computer').style.left= x + "px";
  console.log("x");
  }


  function saveState(){

    console.log("Daten werden in die Datenbank gespeichert");

  }
  
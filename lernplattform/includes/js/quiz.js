var currentQuestionNo = 0;
var points = 0;
var rightAnswerPoints = 10;
var currentQuestion;
var questions;
var indexArray = [];

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
  }
  console.log("Loading Question:" + getRandomNo(questions.length));
  currentQuestion = questions[getRandomNo(questions.length)];
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
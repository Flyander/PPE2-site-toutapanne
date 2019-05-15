// select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");
const arborescence = document.getElementById("arborescence");

var reponseChoisie = [];
var rang = 0;
var finie = false;

// create our questions
let questions = [
    {
        question : "Votre panne est de type ?",
        choiceA : "Materielle",
        choiceB : "Logiciel",
        choiceC : "Reseau",
        correct : "A"
    },{
        question : "What does CSS stand for?",
        choiceA : "Wrong",
        choiceB : "Correct",
        choiceC : "Wrong",
        correct : "B"
    },{
        question : "What does JS stand for?",
        choiceA : "Wrong",
        choiceB : "Wrong",
        choiceC : "Correct",
        correct : "C"
    }
];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 10; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    //renderCounter();
    //TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    }
}

// counter render



// checkAnwer

function checkAnswer(answer){
    let q = questions[runningQuestion];
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        // change progress color to green
        score++;
        if (answer == "A")
        {
            answerIsCorrect(q.choiceA);
        }
        if (answer == "B")
        {
            answerIsCorrect(q.choiceB);
        }
        if (answer == "C")
        {
            answerIsCorrect(q.choiceC);
        }
        
    }
    else
    {
        // answer is wrong
        // change progress color to red
        score++;
        if (answer == "A")
        {
            answerIsCorrect(q.choiceA);
        }
        if (answer == "B")
        {
            answerIsCorrect(q.choiceB);
        }
        if (answer == "C")
        {
            answerIsCorrect(q.choiceC);
        }
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        clearInterval(TIMER);
        finie = true;
        quiz.style.display = "none";
        envoieValeur();
    }
}

// answer is correct
function answerIsCorrect(resultat){
    reponseChoisie[rang] = resultat;
    rang++;
    envoieValeur();
}


// score render
function envoieValeur()
{
    var new_tab_js = reponseChoisie.join(";");

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {
            if (finie){
                question.innerHTML = "<font color=\"green\">Le questionnaire est terminé, un rapport va être envoyé au technicien. Merci et bonne journée.</font><br/>"+"\n <br/>Resultat :"+"<br/>"+this.responseText;
                arborescence.innerHTML = "";
            }
            else
            {
                arborescence.innerHTML = "<b>\n <br/>Avancement du questionnaire :"+"</b><br/><font color=\"blue\">"+this.responseText+"</font>";
            }
            
        }
    };
    xhr.open("GET", "ValeurDiagnostique.php?reponseChoisie="+new_tab_js+"&finie="+finie, true);
    xhr.send();
    //document.location.href="ValeurDiagnostique.php";
}

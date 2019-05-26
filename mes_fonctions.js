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
        question : "Quel périphérique ne fonctionne pas ?",
        choiceA : "Souris",
        choiceB : "Clavier",
        choiceC : "Ecran",
        correct : "B"
    },{
        question : "Quel composant semble cassé ?",
        choiceA : "cable",
        choiceB : "Les touches",
        choiceC : "Autre",
        correct : "C"
    }
];

let questionsLogi = [
    {
        question : "Votre panne est de type ?",
        choiceA : "Materielle",
        choiceB : "Logiciel",
        choiceC : "Reseau",  
        correct : "A"
    },{
        question : "Quelle est votre problème ?",
        choiceA : "Stockage plein",
        choiceB : "Logiciel non installe",
        choiceC : "Windows ne fonctionne plus",
        correct : "B"
    },{
        question : "Quelle est le problème du Windows ?",
        choiceA : "Impossible de lancer une session",
        choiceB : "Le windows ne demarre pas au lancement du PC",
        choiceC : "Autre",
        correct : "C"
    }
];

let questionsReseau = [
    {
        question : "Votre panne est de type ?",
        choiceA : "Materielle",
        choiceB : "Logiciel",
        choiceC : "Reseau",  
        correct : "A"
    },{
        question : "Quelle est le probleme ?",
        choiceA : "Pas de connexion",
        choiceB : "Réseau lent",    
        choiceC : "autre",
        correct : "B"
    },{
        question : "Avez-vous essayé de débrancher/rebrancher le cable réseau ?",
        choiceA : "Oui",
        choiceB : "Non",
        choiceC : "Non",
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

function renderQuestionLogi(){
    let q = questionsLogi[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

function renderQuestionRes(){
    let q = questionsReseau[runningQuestion];
    
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


var type =0;
// checkAnwer

function checkAnswer(answer){
    let q;
    if (type == 0 || type == 1){
        q = questions[runningQuestion];
    }
    if (type == 2){
        q = questionsLogi[runningQuestion];
    }
    if (type == 3){
        q = questionsReseau[runningQuestion];
    }
    if( answer == q.correct){
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
        if (runningQuestion == 1) {
            if (answer == "A")
            {
                renderQuestion();
                type = 1;
            }
            if (answer == "B")
            {
                renderQuestionLogi();
                type = 2;
            }
            if (answer == "C")
            {
                renderQuestionRes();
                type = 3;
            }
        }
        else{
            if (type == 1){
                renderQuestion();
            }
            if (type == 2){
                renderQuestionLogi();
            }
            if (type == 3){
                renderQuestionRes();
            }
            
        }
        //renderQuestion();
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

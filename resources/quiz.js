const quizData = [
    {
        question: "What is the largest land animal?",
        choices: ["Hippopotamus", "Giraffe", "Elephants", "Rhinoceros"],
        correct: "Elephant"
    },
    {
        question: "Which animal is known as the 'King of the Jungle'?",
        choices: ["Tiger", "Lion", "Leopard", "Jaguar"],
        correct: "Lion"
    },
    {
        question: "What is the fastest land animal?",
        choices: ["Horse", "Greyhound", "Lion", "Cheetah"],
        correct: "Cheetah"
    },
    {
        question: "Which animal is known for its ability to change color?",
        choices: ["Chameleon", "Octopus", "Squid", "Cuttlefish"],
        correct: "Chameleon"
    },
    {
        question: "What is the largest mammal in the world?",
        choices: ["Giraffe", "Elephant", "Blue Whale", "Hippopotamus"],
        correct: "Blue Whale"
    }, 
    {
        question: "Which bird is known for its colorful plumage and ability to mimic sounds?",
        choices: ["Parrot", "Sparrow", "Eagle", "Penguin"],
        correct: "Parrot"
    },
    {
        question: "What is the smallest bird in the world?",
        choices: ["Wren", "Goldcrest", "Blue Tit", "Bee Hummingbird"],
        correct: "Bee Hummingbird"
    },
    {
        question: "Which animal is known for its intelligence and problem-solving abilities?",
        choices: ["Dolphin", "Elephant", "Crow", "Octopus"],
        correct: "Octopus"
    },
    {
        question: "Which mammal lays eggs?",
        choices: ["Platypus", "Kangaroo", "Bat", "Otter"],
        correct: "Platypus"
    },
    {
        question: "What is the only bird that can fly backwards?",
        choices: ["Swallow", "Sparrow", "Hummingbird", "Kingfisher"],
        correct: "Hummingbird"
    },
    {
        question: "Which animal has the longest gestation period?",
        choices: ["Blue Whale", "Elephant", "Giraffe", "Horse"],
        correct: "Elephant"
    },
    {
        question: "What is the largest species of shark?",
        choices: ["Whale Shark", "Great White Shark", "Hammerhead Shark", "Tiger Shark"],
        correct: "Whale Shark"
    },
    {
        question: "Which reptile is known for its ability to glide from tree to tree?",
        choices: ["Chameleon", "Komodo Dragon", "Iguana", "Draco Lizard"],
        correct: "Draco Lizard"
    }
];

// Shuffle quizData array to randomize question order
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

shuffle(quizData);

// Only use the first 5 questions for this quiz session
const QUESTIONS_PER_SESSION = 5;
const sessionQuestions = quizData.slice(0, QUESTIONS_PER_SESSION);

let currentQuestionIndex = 0;
let score = 0;

function loadQuiz() {
    const quizContainer = document.getElementById('quiz-content');
    const submitBtn = document.getElementById('submit-btn');
    const resultContainer = document.getElementById('result');

    quizContainer.innerHTML = '';
    resultContainer.innerHTML = '';

    // Show all 5 questions at once
    sessionQuestions.forEach((questionData, qIndex) => {
        const questionElement = document.createElement('div');
        questionElement.className = 'question';
        questionElement.innerHTML = `<p>${qIndex + 1}. ${questionData.question}</p>`;

        questionData.choices.forEach((choice, cIndex) => {
            const choiceId = `q${qIndex}_c${cIndex}`;
            const choiceElement = document.createElement('div');
            choiceElement.className = 'choice';
            choiceElement.innerHTML = `
                <input type="radio" name="question${qIndex}" id="${choiceId}" value="${choice}">
                <label for="${choiceId}">${choice}</label>
            `;
            questionElement.appendChild(choiceElement);
        });

        quizContainer.appendChild(questionElement);
    });

    submitBtn.style.display = 'block';
}

function submitQuiz() {
    let localScore = 0;
    sessionQuestions.forEach((questionData, qIndex) => {
        const selected = document.querySelector(`input[name="question${qIndex}"]:checked`);
        if (selected && selected.value === questionData.correct) {
            localScore++;
        }
    });
    score = localScore;
    showResult();
}

function showResult() {
    const resultContainer = document.getElementById('result');
    const percentage = ((score / sessionQuestions.length) * 100).toFixed(2);
    resultContainer.innerHTML = `<p>Your score: ${score} out of ${sessionQuestions.length} (${percentage}%)</p>`;
    document.getElementById('submit-btn').style.display = 'none';
    document.getElementById('retake-btn').style.display = 'inline-block';
    document.getElementById('newtest-btn').style.display = 'inline-block';
}

// Add event listeners for the static retake and new test buttons
document.getElementById('retake-btn').onclick = function() {
    score = 0;
    loadQuiz();
    document.getElementById('submit-btn').style.display = 'block';
    document.getElementById('retake-btn').style.display = 'none';
    document.getElementById('newtest-btn').style.display = 'none';
    document.getElementById('result').innerHTML = '';
};
document.getElementById('newtest-btn').onclick = function() {
    score = 0;
    shuffle(quizData);
    for (let i = 0; i < QUESTIONS_PER_SESSION; i++) {
        sessionQuestions[i] = quizData[i];
    }
    loadQuiz();
    document.getElementById('submit-btn').style.display = 'block';
    document.getElementById('retake-btn').style.display = 'none';
    document.getElementById('newtest-btn').style.display = 'none';
    document.getElementById('result').innerHTML = '';
};



// Add event listener for Start Quiz button
document.getElementById('start-btn').addEventListener('click', function() {
    // Hide the start button
    document.getElementById('start-btn').style.display = 'none';
    // Show the quiz and submit button
    document.getElementById('quiz-content').style.display = 'block';
    document.getElementById('submit-btn').style.display = 'block';
    // Clear any previous results
    document.getElementById('result').innerHTML = '';
    // Load the quiz questions
    loadQuiz();
});

// Add event listener for Submit button
document.getElementById('submit-btn').addEventListener('click', submitQuiz);

// On page load, hide quiz and submit button, show only start button
window.onload = function() {
    document.getElementById('quiz-content').style.display = 'none';
    document.getElementById('submit-btn').style.display = 'none';
    document.getElementById('start-btn').style.display = 'block';
    document.getElementById('retake-btn').style.display = 'none';
    document.getElementById('newtest-btn').style.display = 'none';
    document.getElementById('result').innerHTML = '';
};
// Sélectionner le formulaire
const quizzForm = document.getElementById("quizz-form");

// Écouter l'événement de soumission du formulaire
quizzForm.addEventListener("submit", function (event) {
  event.preventDefault(); // Empêcher le rechargement de la page

  // Récupérer les valeurs des champs
  const title = document.getElementById("title").value;
  const description = document.getElementById("description").value;
  const question = document.getElementById("question").value;
  const choice1 = document.getElementById("choice-1").value;
  const choice2 = document.getElementById("choice-2").value;
  const choice3 = document.getElementById("choice-3").value;
  const choice4 = document.getElementById("choice-4").value;
  const correctAnswer = document.getElementById("correct-answer").value;

  // Logique pour traiter les données du quiz
  console.log({
    title,
    description,
    question,
    choices: [choice1, choice2, choice3, choice4],
    correctAnswer,
  });

  // Afficher un message de succès
  alert("Quiz créé avec succès !");
});

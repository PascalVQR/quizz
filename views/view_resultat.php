

<body>

  <div class="top-bar">
    <button class="back-button">Retour</button>
    <h2>RESULTAT</h2>
  </div>
  
  <section class="result">
    <div class="score">
      <h2>90/100 Points</h2>
      <p>Meilleurs scores</p>
    </div>
  </section>
  
  <section class="bestscores">
    <div>
      <ul>
        <li>N°1 Tamara - 95/100 Points</li>
        <li>N°2 Pascale - 90/100 Points</li>
        <li>N°3 Maxime - 85/100 Points</li>
        <li>N°4 Francis - 80/100 Points</li>
      </ul>
    </div>
  </section>
  
</body>

</body>
<style>

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.top-bar {
  background-color: #f0f0f0;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.back-button { 
  display: left;
  background-color: #53B9E7;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    padding: 5px 10px;
    margin: 10px auto;
  }

.result,
.bestscores {
  border: 1px solid #ddd;
  padding: 15px;
  margin-bottom: 10px;
}

.score h2 {
  font-size: 24px;
  margin-bottom: 5px;
  text-align: center;
}

.bestscores ul {
  list-style-type: none;
  padding: 0;
}

.bestscores li {
  margin-bottom: 5px;
}
</style>


</html>
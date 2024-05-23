let wordsToMemorize = [];
let currentIndex = 0;
let correctWords = 0;

function startTest() {
  const wordCount = parseInt(document.getElementById('wordCount').value);
  const interval = parseInt(document.getElementById('interval').value) * 1000;

  wordsToMemorize = generateRandomWords(wordCount);
  currentIndex = 0;
  correctWords = 0;

  displayWord();

  setTimeout(() => {
    document.getElementById('wordDisplay').innerText = '';
  }, interval * wordCount);
}

function generateRandomWords(count) {
  const words = ['apple', 'banana', 'orange', 'grape', 'kiwi']; // Add more words as needed
  const randomWords = [];
  for (let i = 0; i < count; i++) {
    const randomIndex = Math.floor(Math.random() * words.length);
    randomWords.push(words[randomIndex]);
  }
  return randomWords;
}

function displayWord() {
  if (currentIndex < wordsToMemorize.length) {
    document.getElementById('wordDisplay').innerText = wordsToMemorize[currentIndex];
    currentIndex++;
    setTimeout(displayWord, interval);
  }
}

function checkWords() {
  const userInput = document.getElementById('userInput').value.trim().toLowerCase();
  const wordsArray = userInput.split(' ');

  wordsToMemorize.forEach(word => {
    if (wordsArray.includes(word)) {
      document.getElementById('result').innerHTML += `<span style="color: green;">${word}</span> `;
      correctWords++;
    } else {
      document.getElementById('result').innerHTML += `<span style="color: red;">${word}</span> `;
    }
  });

  const accuracy = (correctWords / wordsToMemorize.length) * 100;
  document.getElementById('result').innerHTML += `<br><br>Accuracy: ${accuracy.toFixed(2)}%`;
}








function redirectToMemorypage() {
    window.location.href = "MemoryMainPage.html";
}

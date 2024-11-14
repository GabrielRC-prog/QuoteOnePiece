document.getElementById('gerar-quote').addEventListener('click', generateQuote);
document.getElementById('voltar-home').addEventListener('click', voltarHome);

function generateQuote() {
    fetch('data/quotes.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            document.getElementById('quote-text').innerText = data.text;
            document.getElementById('quote-author').innerText = `- ${data.author}`;
            if (data.image) {
                document.body.style.backgroundImage = `url('${data.image}')`;
            } else {
                document.body.style.backgroundImage = '';
            }
            document.querySelector('.content-container').style.display = 'none';
            document.getElementById('quote-display').style.display = 'block';
            document.getElementById('sobre-container').style.display = 'none';
        })
        .catch(error => console.error('Fetch error:', error));
}

function voltarHome() {
    document.querySelector('.content-container').style.display = 'block';
    document.getElementById('quote-display').style.display = 'none';
    document.body.style.backgroundImage = '';
    document.getElementById('sobre-container').style.display = 'block';
}
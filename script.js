const showModalUp = document.getElementById('showModalUp');
const showModalDown = document.getElementById('showModalDown');
const jokeModal = document.getElementById('jokeModal');
const jokeBody = document.getElementById('jokeBody');


showModalUp.addEventListener('click', (e) => {
    e.preventDefault();
    jokeModal.style.visibility = 'visible';
    jokeBody.style.filter = 'blur(5px)';
});

showModalDown.addEventListener('click', (e) => {
    e.preventDefault();
    jokeModal.style.visibility = 'visible';
    jokeBody.style.filter = 'blur(5px)';
});

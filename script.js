// Rolagem suave para links com .js-scroll
document.querySelectorAll('.js-scroll').forEach(link => {
    link.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (!href || !href.startsWith('#')) return;

        const target = document.querySelector(href);
        if (!target) return;

        e.preventDefault();
        const top = target.getBoundingClientRect().top + window.scrollY - 40;

        window.scrollTo({
            top,
            behavior: 'smooth'
        });
    });
});

// Exemplo simples de feedback (apenas front, sem envio real)
const form = document.getElementById('leadForm');
const feedback = document.getElementById('formFeedback');
/*
if (form && feedback) {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        feedback.textContent = 'Cadastro realizado com sucesso!';
        feedback.classList.remove('error');
        feedback.classList.add('ok');

        // aqui você pode adicionar o envio real (fetch / AJAX)
    });
}
*/

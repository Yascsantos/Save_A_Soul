
const cartModal = document.getElementById('cart-modal');
const openCartButton = document.getElementById('open-cart');
const closeCartButton = document.getElementById('close-cart');

// Event listener to open the cart modal
openCartButton.addEventListener('click', () => {
    cartModal.style.display = 'block';
});

// Event listener to close the cart modal
closeCartButton.addEventListener('click', () => {
    cartModal.style.display = 'none';
});

function resizeIframe() {
    var iframe = document.getElementById("myIframe");
    var body = iframe.contentDocument.body,
        html = iframe.contentDocument.documentElement;

    var height = Math.max(
        body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight
    );

    iframe.style.height = height + "px";
}

// Chama a função quando o conteúdo dentro do iframe é carregado
document.getElementById("myIframe").onload = resizeIframe;
function resizeIframe() {
    var iframe = document.getElementById("myIframe");
    var body = iframe.contentDocument.body,
        html = iframe.contentDocument.documentElement;

    var height = Math.max(
        body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight
    );

    iframe.style.height = height + "px";
}

// Chama a função quando o conteúdo dentro do iframe é carregado
document.getElementById("myIframe").onload = resizeIframe;


document.addEventListener("DOMContentLoaded", function() {
    // Seleciona o link pelo ID
    var fecharEAbriLink = document.getElementById("fecharEAbriLink");

    // Adiciona um ouvinte de eventos para o clique no link
    fecharEAbriLink.addEventListener("click", function(e) {
        // Previne o comportamento padrão do link (não abrir uma nova página)
        e.preventDefault();

        // Fecha a popup atual (substitua "window" pelo nome da sua popup, se aplicável)
        window.close();

        // Abre a nova página em uma nova janela ou guia (substitua "nova_pagina.html" pelo URL da nova página)
        window.open("nova_pagina.html", "_blank");
    });
});

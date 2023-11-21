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


document.getElementById("myIframe").onload = resizeIframe;
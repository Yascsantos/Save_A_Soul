document.addEventListener('DOMContentLoaded', function() {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup');
    var closeButton = document.getElementById('fechar');
  
    overlay.style.display = 'block';
    popup.style.display = 'block';
  
    closeButton.addEventListener('click', function() {
      overlay.style.display = 'none';
      popup.style.display = 'none';
    });
  });
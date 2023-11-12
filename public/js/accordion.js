var accordionButtons = document.querySelectorAll('.accordion-button');

accordionButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var targetSelector = button.getAttribute('data-bs-target');
    var targetCollapse = document.querySelector(targetSelector);

    if (targetCollapse.classList.contains('show')) {
      targetCollapse.classList.remove('show');
      button.setAttribute('aria-expanded', 'false');
    } else {
      var collapseElements = document.querySelectorAll('.accordion-collapse.show');
      collapseElements.forEach(function(collapse) {
        collapse.classList.remove('show');
        var correspondingButton = document.querySelector('[data-bs-target="#' + collapse.id + '"]');
        correspondingButton.setAttribute('aria-expanded', 'false');
      });

      targetCollapse.classList.add('show');
      button.setAttribute('aria-expanded', 'true');
    }
  });
});
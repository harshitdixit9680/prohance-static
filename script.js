
document.querySelectorAll('.accordion-button').forEach(button => {
  button.addEventListener('click', function () {
    const icon = this.querySelector('.icon');

    setTimeout(() => {
      if (this.classList.contains('collapsed')) {
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
      } else {
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
      }
    }, 200);
  });
});

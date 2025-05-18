if (window.innerWidth < 980) {
  document.querySelectorAll('.titre-section').forEach(section => {
    section.addEventListener('click', () => {
      section.classList.toggle('open');
    });
  });
}
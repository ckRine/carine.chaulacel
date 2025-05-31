if (window.innerWidth < 980) {
  document.querySelectorAll('.titre-section').forEach(section => {
    section.addEventListener('click', () => {
      section.classList.toggle('open');
    });
  });
}
function generatePDF() {
  const element = document.getElementsByTagName('html');
  console.log(element);
 
  element[0].classList.add('pdf');
  print();
  element[0].classList.remove('pdf');
}

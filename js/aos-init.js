
window.addEventListener('DOMContentLoaded', (event) => {

  AOS.init({
    disable: 'mobile',
    offset: 140,
    duration: 800,
    once: false,
  });

});


window.addEventListener('load', function() {
  AOS.refresh();
});

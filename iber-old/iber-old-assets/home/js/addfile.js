$(window).on('load', function() {
  $('.sec_preloader').addClass('loading');
});
function includeHTML(file, elementId) {
    fetch(file)
      .then(response => response.text())
      .then(data => {
        document.getElementById(elementId).innerHTML = data;
      });
  }
  
  // Load the header and footerincludeHTML('header.html', 'header');
  includeHTML('footer.html', 'footer');
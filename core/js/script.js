// toggle icon navbar
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
  menuIcon.classList.toggle('bx-x');
  navbar.classList.toggle('active');
}

// scroll sections
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
  sections.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 100;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

    if(top >= offset && top < offset + height)
    {
      // active navbar links
      navLinks.forEach(links => {
        links.classList.remove('active');
        document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
      });

      // active sections for animation on scroll
      sec.classList.add('show-animate');
    }
    else
    {
      sec.classList.remove('show-animate');
    }
  });

  // sticky header
  let header = document.querySelector('header');

  header.classList.toggle('sticky', window.scrollY > 100);

  // remove toggle icon and navbar when click navbar links (scroll)
  menuIcon.classList.remove('bx-x');
  navbar.classList.remove('active');

  // animation footer on scroll
  let footer = document.querySelector('footer');

  footer.classList.toggle('show-animate', this.innerHeight + this.scrollY >= document.scrollingElement.scrollHeight);
}

function swAlert()
{
  Swal.fire({
    title: "<strong>I'm so sorry</strong>",
    icon: "info",
    html: "<h2>This site is under construction.</h2><p>I hope you come back later.</p>"
  });
}

/*function alerta()
{
  Swal.fire({
    title: '<iframe src="http://localhost/dev/Portfolio/assets/docs/cv_jaime_abad_garcia.pdf" width="800px" height="600px" style="border: none;"/>',
    html: "",
    type: "info",
    customClass: 'swal-wide',
    showCancelButton: false,
    showConfirmButton:false
});
}*/

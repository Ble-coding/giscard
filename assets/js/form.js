
window.addEventListener('DOMContentLoaded', () => {
  if (window.location.hash === '#contact-form') {
    const el = document.querySelector('#contact-form');
    if (el) el.scrollIntoView({ behavior: 'smooth' });
  }
});

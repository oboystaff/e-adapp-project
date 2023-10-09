$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');

  	$('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  	$('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

    const togglePassword = document.querySelector('#togglePassword');
  	const password = document.querySelector('#password');

  	togglePassword.addEventListener('click', function (e) {
    	// toggle the type attribute
    	const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    	password.setAttribute('type', type);
    	// toggle the eye slash icon
    	this.classList.toggle('fa-eye-slash');
	});
});
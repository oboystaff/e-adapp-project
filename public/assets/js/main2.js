$(function() {

    $('#button').on('click', function() {
    	$('#selectImage').trigger('click');
	});

    selectImage.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = selectImage.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
});
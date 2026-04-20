
function show()
{
	var toggleButton = document.getElementById('add');
	var myDiv = document.getElementById('form1');
	toggleButton.addEventListener('click', function() {
		if (myDiv.style.display === 'none' || myDiv.style.display === '') {
				myDiv.style.display = 'block';
		} else {
				myDiv.style.display = 'none';
		}
	});
}

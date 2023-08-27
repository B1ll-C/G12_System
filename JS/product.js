let z = document.getElementsByClassName('z');
const n = 4;


function eq1(n,x){

	let equation1 = x-1;

	return n*equation1
}

function eq2(n,x){
	
	let equation1 = x-1;
	let equation2 = n*equation1;

	return equation2+n-1
}

function toggle(button){

	let x = button.id;
	let left = eq1(n,x);
	let right = eq2(n,x);

	for (var i = left; i <= right; i++) {
		if (z[i].disabled == true) {
			z[i].disabled = false;
			z[i].style.cursor = 'auto';
			z[left].style.cursor = 'pointer';
			console.log(left)

			console.log('enabled');
		} else {
			z[i].disabled = true;
			z[i].style.cursor = 'not-allowed';
			console.log('disabled')
		}
	}
	console.log(x);
}

function submitForm() {
	return confirm('Do you really want to delete this item?');
}
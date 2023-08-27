let z = document.getElementsByClassName('z');
let num = z.length; 
const n = 7;



function greater1(n,x){
	let equation = x-1;

	return n*equation
}

function greater2(n,x){
	let equation1 = x-1;
	let equation2 = n*equation1;

	return equation2+n-1
}

function toggle(button){

	let x = parseInt(button.id);
	let left = greater1(n,x);
	let right = greater2(n,x);

	for (let i = left; i <= right ;i++) {
			if (z[i].disabled == true) {
				z[i].disabled = false;
				console.log('Enabled');
				console.log(left+"-->"+right)
				z[i].style.cursor = "auto";
				z[right].style.cursor = 'pointer'


			} else {
				z[i].disabled = true
				console.log('Disabled');
				z[i].style.cursor = "not-allowed";
			}
		}
}

function submitForm() {
	return confirm('Do you really want to delete this user?');
}

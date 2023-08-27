function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

let date = document.getElementsByClassName('month');

for (var i = 0; i <= 12; i++) {
	console.log(date[i],i)
}

let elm 	= document.getElementById('day');
let df  = document.createDocumentFragment();
function month() {
	if (date[1].selected == true) {
		console.log('29days');
		elm.remove(elm.length = 1);
		for (var i = 1; i <= 29; i++) { 
        var option = document.createElement('option');
	        if (i <= 9) {
	        	option.value = '0'+i; 
	        }
	        else {
	        	option.value = i; 
	        }
        
        option.className    = 'day';
        option.appendChild(document.createTextNode(i)); 
        df.appendChild(option);
     
      }
      
      elm.appendChild(df); 
	}
	else if (
			(date[3].selected == true) || (date[5].selected == true) || 
			(date[8].selected == true) || (date[10].selected == true) 	) {
		console.log('30days');
	elm.remove(elm.length = 1);
	for (var i = 1; i <= 30; i++) { 
        var option = document.createElement('option');
        	if (i <= 9) {
        		option.value = '0'+ i;
        	}
        	else {
        		option.value = i;
        	}
        option.className    = 'day';
        option.appendChild(document.createTextNode(i)); 
        df.appendChild(option);
     
      }
      
      elm.appendChild(df); 
	}
	else {
		console.log('31days');
		elm.remove(elm.length = 1);

		for (var i = 1; i <= 30; i++) { 
        var option = document.createElement('option');
        	if (i <= 9) {
        		option.value = '0' + i;
        	} 
        	else {
        		option.value = i;
        	}
		option.className    = 'day';
        option.appendChild(document.createTextNode(i)); 
        df.appendChild(option);
     
      }
      
      elm.appendChild(df); 
	}
}

let me 		= document.getElementById('year');
let cr 		= document.createDocumentFragment();
let full 	= new Date();
let year 	= full.getFullYear();
for (let i = year ; i >= year - 10; i--) {
	var opt 	= document.createElement('option');
	opt.value 	= i ;
	opt.className = year;
	opt.appendChild(document.createTextNode(i));
	cr.appendChild(opt);
}

me.appendChild(cr);
function myFunction() {
    var input, filter, ul, li, x, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        x = li[i].getElementsByTagName("button")[0];
        txtValue = x.textContent || x.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

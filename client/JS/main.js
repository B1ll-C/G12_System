function select(argument) {
    let disabled = document.getElementsByClassName('disabled');
	if (document.getElementById('pick').selected == true) {
		document.getElementById('e').readOnly = false;
        document.getElementById('e').value = "00:00" ;
        document.getElementById('man').value = "000";
        document.getElementById('man').selected = true;



        for(i = 0; i <= 2; i++){
            disabled[i].disabled = true;
        }

    }
    else{
    	console.log('delivery');
	   document.getElementById('e').readOnly = true;
       document.getElementById('e').value = "";
        document.getElementById('man').value = "00";

       for(i = 0; i <= 2; i++){
            disabled[i].disabled = false;
        }   


    }   
}

let date = document.getElementsByClassName('month');
let elm     = document.getElementById('date');
let df  = document.createDocumentFragment();
function m() {
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
            (date[8].selected == true) || (date[10].selected == true)   ) {
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

        for (var i = 1; i <= 31; i++) { 
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
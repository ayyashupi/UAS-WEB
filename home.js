var id = null;

function Test() {
	alert("Hi Hi");
}

function AnimasiWelcome() {
	var pos = 1;
	var div = document.getElementById("welcome");
	clearInterval(id);
	id = setInterval(fadein, 10);
	var i = 0;
	function fadein() {
		if (pos == 450) {
    		clearInterval(id);
			
    		div.style.opacity = 1;
    		pos = 0;
    		id = setInterval(hover,4);
    		
   		} else {
  			pos++;
    		div.style.marginTop = (pos/10) - 50 +'%';
  	  		div.style.opacity = (pos * (1/500));
 	   	}
	}
    var increase = true;
	function hover(){
    	if (pos == 1000) {
    		increase = false;
    		pos--;
    	}else if(pos == -200) {
    		increase = true;
    		pos++;
    	}else{
    		if(increase == true){
    			pos++;
    		}else{
    			pos--;
    		}
    		div.style.marginLeft = (pos/5) + "px";
    		div.style.marginBottom = (pos/5) + "px";
    	}
    }
}


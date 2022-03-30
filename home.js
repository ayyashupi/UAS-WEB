var id = null;

function Test() {
	alert("Hi Hi");
}

function AnimasiWelcome() {
	var pos = 1;
	var div = document.getElementById("welcome");
	var baki = document.getElementById("baki");
	baki.style.opacity = 0;
	clearInterval(id);
	id = setInterval(fadein, 10);
	var i = 0;
	function fadein() {
		if (pos == 450) {
    		clearInterval(id);
			
    		div.style.opacity = 1;
    		baki.style.opacity = 1;
    		pos = 0;
    		id = setInterval(hover,4);
    		
   		} else {
  			pos++;
            div.style.left = 15+"%";
    		div.style.marginTop = (pos/10) - 50 +'%';
  	  		div.style.opacity = (pos * (1/500));
  	  		baki.style.opacity = (pos * (1/500))-0.6;
 	   	}
	}
    var increase = true;
	function hover(){
    	if (pos == 1000) {
    		increase = false;
    		pos--;
    	}else if(pos == -1000) {
    		increase = true;
    		pos++;
    	}else{
    		if(increase == true){
    			pos++;
    		}else{
    			pos--;
    		}
    		div.style.left = (pos/200) + 15 + "%";
            div.style.marginTop = 0;
    		div.style.top =((pos/400)+1) + "%";
    	}
    }
}


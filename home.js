function rendertime(){
    //date
    var mydate = new Date();
    var year = mydate.getFullYear();
        if (year < 1000){
            year += 1900;
        }
    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();
    var dayarray = new Array("Ahad,", "Senin,", "Selasa,", "Raboe,", "Kamis,", "Joemat,", "Sabtoe,");
    var montharray = new Array("Januari", "Pebruari", "Maret", "April", "Mei", "Joeni", "Joeli", "Agoestoes", "September", "Oktober", "Nopember", "Desember");
    //date

    //time
    var currenttime = new Date();
    var h = currenttime.getHours();
    var m = currenttime.getMinutes();
    var s = currenttime.getSeconds();
        if(h == 24){
            h = 0;
        } else if(h > 12){
            h = h - 0;
        }
        if(h < 10){
            h = "0" + h;
        }
        if(m < 10){
            m = "0" + m;
        }
        if(s < 10){
            s = "0" + s;
        }

    var myclock = document.getElementById("clockdisplay");
    myclock.textContent = " " + dayarray[day]+ " " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
    myclock.innerText = " " + dayarray[day]+ " " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
    
    setTimeout("rendertime()", 1000);
}
rendertime();


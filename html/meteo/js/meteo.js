var response;
function requete(){
	var ville = document.getElementById('ville').value;
	var xhr = getXMLHttpRequest();
	var url = "http://api.openweathermap.org/data/2.5/weather?q=";
	url+=ville;
	url+=",fr&lang=fr&APPID=ee07e2bf337034f905cde0bdedae3db8";
	xhr.open("GET", url, true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send(null);
	xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            response = JSON.parse(xhr.responseText);
            	footerDefault();
        }
	};
}

function getXMLHttpRequest(){
	var xhr = null;
	if (window.XMLHttpRequest || window.ActiveXObject) {
	    if (window.ActiveXObject) {
	        try {
	            xhr = new ActiveXObject("Msxml2.XMLHTTP");
	        } catch(e) {
	            xhr = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	    } else {
	        xhr = new XMLHttpRequest(); 
	    }
	} else {
	    alert("Votre navigateur n'est pas compatible'");
	    return;
	}
	return xhr;
}

function footerVille() {
	var sunr = response.sys.sunrise;
	var dateSR = new Date(sunr * 1000);
	var timeSR = dateSR.toLocaleTimeString();
	var suns = response.sys.sunset;
	var dateSS = new Date(suns *1000);
	var timeSS = dateSS.toLocaleTimeString();
	document.getElementById('footer').innerHTML = "Ville : "+response.name+", "+response.sys.country+"<br>Coordonnées : "+response.coord.lon+"(long), "+response.coord.lat+"(lat)<br>Lever du soleil à "+timeSR+"<br>Coucher du soleil à "+timeSS+"<br>"
}

function footerDefault(){
	document.getElementById('footer').innerHTML = "Ville de "+response.name+"<br>Temps "+response.weather[0].description+" avec "+(response.main.temp-273.15).toFixed(2)+"°C et un vent de "+response.wind.speed+"m/s";
}

function footerMeteo(){
	document.getElementById('footer').innerHTML = "Température Actuelle : "+(response.main.temp-273.15).toFixed(2)+"°C<br>Température Max : "+(response.main.temp_max-273.15).toFixed(2)+"°C<br>Température Min : "+(response.main.temp_min-273.15).toFixed(2)+"°C";
}

function footerHygro(){
	document.getElementById('footer').innerHTML = "Pression Atmosphérique : "+(response.main.pressure)+"HPa<br>Humidité : "+(response.main.humidity)+"%";
}

function footerWind(){
	var orientation;
	var deg = response.wind.deg;
		if ((deg>=0 && deg<22.5) || deg == 360) {
			orientation = "Nord";
		}else if (deg>=22.5 && deg<45) {
			orientation = "Nord/Nord-Est";
		}else if (deg>=45 && deg<67.5) {
			orientation = "Nord-Est";
		}else if (deg>=67.5 && deg<90) {
			orientation = "Est/Nord-Est";
		}else if (deg>=90 && deg<112.5) {
			orientation = "Est";
		}else if (deg>=112.5 && deg<135) {
			orientation = "Est/Sud-Est";
		}else if (deg>=135 && deg<157.5) {
			orientation = "Sud-Est";
		}else if (deg>=157.5 && deg<180) {
			orientation = "Sud/Sud-Est";
		}else if (deg>=180 && deg<202.5) {
			orientation = "Sud";
		}else if (deg>=202.5 && deg<225) {
			orientation = "Sud/Sud-Ouest";
		}else if (deg>=225 && deg<247.5) {
			orientation = "Sud-Ouest";
		}else if (deg>=247.5 && deg<270) {
			orientation = "Ouest/Sud-Ouest";
		}else if (deg>=270 && deg<292.5) {
			orientation = "Ouest";
		}else if (deg>=292.5 && deg<315) {
			orientation = "Ouest/Nord-Ouest";
		}else if (deg>=315 && deg<337.5) {
			orientation = "Nord-Ouest";
		}else if (deg>=337.5 && deg<360) {
			orientation = "Nord/Nord-Ouest";
		}
	document.getElementById('footer').innerHTML = "Vitesse du vent : "+response.wind.speed+"m/s<br>Orientation : "+ orientation+" à "+response.wind.deg+"°";
}
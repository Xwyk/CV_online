var scripts = document.getElementsByTagName('script');
var myScript = scripts[ scripts.length - 1 ];
var queryString = myScript.src.replace(/^[^\?]+\??/,'');

function parseQuery ( query ) {
   var Params = new Object ();
   if ( ! query ) return Params; // return empty object
   var Pairs = query.split(/[;&]/);
   for ( var i = 0; i < Pairs.length; i++ ) {
      var KeyVal = Pairs[i].split('=');
      if ( ! KeyVal || KeyVal.length != 2 ) continue;
      var key = unescape( KeyVal[0] );
      var val = unescape( KeyVal[1] );
      val = val.replace(/\+/g, ' ');
      Params[key] = val;
   }
   return Params;
}

// GET string
var o_q = parseQuery(queryString);
var id = o_q['id'];
var type = o_q['t'];


var ac = 0;
var inc = 1;

document.cookie='ac=1; path=/';
if (document.cookie.indexOf('ac=1')>=0)
{
	ac = 1;
	var dat = new Date();
	var namev = id+':'+type+'=1';
	if (document.cookie.indexOf(namev)>=0) inc = 0;
	if (type == 2) {dat = new Date(dat.getFullYear(), dat.getMonth(), dat.getDate(), dat.getHours(), dat.getMinutes()+30);}
	else if (type == 3) {var dat = new Date(dat.getFullYear(), dat.getMonth(), dat.getDate()+1);}
	document.cookie=namev+'; path=/; expires='+dat.toGMTString();
}
document.write('<scri'+'pt src="http://www.compteur-gratuit.org/fcgi-bin/count.fcgi?id='+id+'&t='+type+'&d='+o_q['d']+'&n='+o_q['n']+'&s='+o_q['s']+'&ac='+ac+'&inc='+inc+'"></scr'+'ipt>');

var regiecpm_id = id;

(function() {
var wb = document.createElement('script'); wb.type = 'text/javascript'; wb.async = true;
wb.src = 'http://www.123prix.com/public/getReseauWebmaster.php?idSite=9&sid='+((typeof regiecpm_id != 'undefined') ? regiecpm_id : 0)+'';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wb, s);
})();
var pc = Math.floor((Math.random() * 100) + 1); if (pc <= 5) {
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-20823499-3', 'auto');
ga('send', 'pageview');
}

var ct=0;
function delcpt()
{
	var code = 'link';
	var cpt = document.getElementById(code+'001');
	if (cpt)
	{
		cpt.style.display='none';
	}
	else if (ct < 100)
	{
		ct+=1;
		setTimeout('delcpt()',100);
	}
}
delcpt();

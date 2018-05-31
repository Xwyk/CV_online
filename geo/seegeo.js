var markers_array=[];
var winfo_array=[];
var datar="";
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: {lat: 46.637312, lng: 2.427686}
    });
}
$.post('seegeo.php',function (data){
    datar=data;  
    remplir(datar);
});
function remplir(data){
    data=JSON.parse(data);
    for (var i = 0; i < Object.keys(data).length; i++) {
        var contentString = "Date : "+data[i][0]+"IP : "+data[i][3];
        winfo_array.push(new google.maps.InfoWindow({
            content: contentString
        }));
        markers_array.push(new google.maps.Marker({
            position: new google.maps.LatLng(data[i][1], data[i][2]),
            map: map
        }));
        markers_array[i].addListener('click', function() {
            openwinfo(this);
        });
    };
}
function openwinfo(data){
    winfo_array[markers_array.indexOf(data)].open(map, markers_array[markers_array.indexOf(data)]);
}

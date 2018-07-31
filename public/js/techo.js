window.onload = function(){

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      //console.log(JSON.parse(xmlhttp.responseText));
    }
  }

  xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getPaises", true);
  xmlhttp.send();






}

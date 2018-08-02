window.onload = function(){

  var select = document.getElementById('idPais');
  var select2 = document.getElementById('idOrg')
  select2.style.display = 'none'

//llamada ajax para traeme los paises
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      var respuesta = JSON.parse(xmlhttp.responseText);
      var paises = respuesta.contenido;

      var option = document.createElement('OPTION');
      option.setAttribute('value', '')
      option.setAttribute('selected', 'selected')
      option.setAttribute('disabled', 'disabled');
      option.innerText = 'Seleccione';
      document.getElementById('idPais').append(option);

      for (var pais in paises){
        //console.log( `El pais ${pais} tiene codigo ${paises[pais]}` )
        var option = document.createElement('OPTION');
        option.setAttribute('value', paises[pais]);
        option.innerText = pais;
        document.getElementById('idPais').append(option);
      }
    }
  }

  xmlhttp.open("GET", `http://pilote.techo.org/?do=api.getPaises`, true);
  xmlhttp.send();


//asignar el evento onchange al select de paises
  select.onchange = function(){
    select2.innerHTML = ''
    select2.style.display = 'inline'

    fetch(`http://pilote.techo.org/?do=api.getUnidadesOrganizacionales?idPais=${this.value}`)
      .then(function(res){
        return res.json()
      }).then(function(data){
        var orgs = data.contenido;
        for (var org in orgs){
          var option = document.createElement('OPTION');
          option.setAttribute('value', orgs[org]);
          option.innerText = org;
          select2.append(option);
        }
      }).catch(function(err){
        console.error(err)
      })
  }

  /*
    select.onchange = function(){
      //console.log( this.value )
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          var respuesta = JSON.parse(xmlhttp.responseText);
          var unidades = respuesta.contenido;
          // Codigo
        }
      }
      xmlhttp.open("GET", `http://pilote.techo.org/?do=api.getUnidadesOrganizacionales?idPais=${this.value}`, true);
      xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getUnidadesOrganizacionales?idPais="+this.value, true);
      xmlhttp.send();
    };
  */


  document.getElementById('form1').style.display = 'none';

  var botonsig = document.getElementById('btn_siguiente');

  botonsig.onclick = function(){
    this.parentNode.style.display = 'none';
    document.getElementById('form1').style.display = 'block';
  }




}

window.onload = function(){

  var btn_recarga = document.getElementById('btn_recarga');

  btn_recarga.addEventListener('click', function(ev){

    ev.preventDefault();

      var xmlhttp = new XMLHttpRequest();

      document.getElementById('imagen_cargando').style.display = 'inline';
      document.getElementById('carga_pelis').innerHTML = '';

      //

      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            document.getElementById('imagen_cargando').style.display = 'none';

            //console.log( JSON.parse(xmlhttp.responseText) )

            var pelis = JSON.parse(xmlhttp.responseText);

            pelis.forEach( function(peli){
              let div = document.createElement('DIV');
                div.setAttribute('class', 'col-sm-6');

              let html = '';

              html = (peli.ruta_imagen)
                ? `<img src="http://localhost:8000/storage/${peli.ruta_imagen}" class="thumbnail miniatura" >`
                :`<img src="http://localhost:8000/storage/posters/default.jpg" class="thumbnail miniatura" >`;
              html += `<a href="/peliculas/${peli.id}">${peli.title}</a>`;

              div.innerHTML = html;

              document.getElementById('carga_pelis').append(div);
            });


        	}
      };

    setTimeout( function(){

      xmlhttp.open("GET", "http://localhost:8000/api/pelis/listado", true);
      xmlhttp.send();

    }, 500);

  });

}

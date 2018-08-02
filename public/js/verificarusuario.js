window.onload = function(){

  var form = document.getElementById('formulario');

  form.addEventListener('submit', function(ev){

    ev.preventDefault();

    let email = document.getElementById('email');
    fetch(`http://localhost:8000/api/verificarusuario/${email.value}`)
      .then(function(res){
        return res.json()
      }).then( function(data){
        let respuesta='El usuario no existe'
        if(data>0){
          respuesta='El usuario existe';
        }else{
          form.submit();
        }
        document.getElementById('mensaje').innerText = respuesta;

      }).catch(function(err){
        console.error(err)
      });

  });
}

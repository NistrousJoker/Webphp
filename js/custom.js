function enviarDatos(codigo){
  var inputs = $('.producto' + codigo);
  var getValue = '';
  for (var i = 0; i < inputs.length; i++) {
    if(getValue != ''){
      getValue += '&';
    }
    getValue += inputs[i].getAttribute('name');
    getValue +=  '=' + inputs[i].value;
  }
  window.location.href = 'src/controladores/modificarProductosControlador.php?' + getValue;
}
function crearProducto(codigo){
  var inputs = $('.producto' + codigo);
  var getValue = '';
  for (var i = 0; i < inputs.length; i++) {
    if(getValue != ''){
      getValue += '&';
    }
    getValue += inputs[i].getAttribute('name');
    getValue +=  '=' + inputs[i].value;
  }
  window.location.href = 'src/controladores/nuevoProducto.php?' + getValue;
}

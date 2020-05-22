function enviarDatos(codigo){
  var inputs = $('.producto' + codigo);
  var getValue = '';
  for (var i = 0; i < inputs.length; i++) {
    if(getValue != ''){
      getValue += '&';
    }
    getValue += inputs[i].getAttribute('name');
       if(inputs[i].value == ''){
        alert('No es posible dejar campos vacios.');
        return false;
    }
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
    if(inputs[i].value == ''){
        alert('No es posible dejar campos vacios.');
        return false;
    }
    getValue +=  '=' + inputs[i].value;
  }
  window.location.href = 'src/controladores/nuevoProducto.php?' + getValue;
}

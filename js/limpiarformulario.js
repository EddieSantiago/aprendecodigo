//Limpiar Formulario
document.querySelector('.btn__reset').addEventListener('click', () =>{
	var inputs = document.querySelector('.input').value;
	var limpiar = inputs.value = '';
})
//Total de Caracteres
jQuery.noConflict();
jQuery(document).ready(function(){
	var seleccionar1 = new SeleccionarTexto();
	seleccionar1.inicia();
});

function SeleccionarTexto () {
	this.datos = {
		selector: 'textarea'
	}
	
	this.inicia = function () {
		var that = this;
		jQuery(that.datos.selector).focus(function () {
			jQuery(this).select();
		});
	}
}

$(".soloNumero").on("keypress", function( tecla ){
  //console.log(tecla.charCode)
  if( tecla.charCode<48 || tecla.charCode>57 )
	if(tecla.charCode!=13)
	  return false
});
$("#dni").on("keypress", function(){
  if( $(this).val().length>7 )
	return false
});

function formattedDate(fecha) {
	myarr=fecha.split("-");
	switch(myarr[1]){
		case '01': myarr[1]='Enero'; break;
		case '02': myarr[1]='Febrero'; break;
		case '03': myarr[1]='Marzo'; break;
		case '04': myarr[1]='Abril'; break;
		case '05': myarr[1]='Mayo'; break;
		case '06': myarr[1]='Junio'; break;
		case '07': myarr[1]='Julio'; break;
		case '08': myarr[1]='Agosto'; break;
		case '09': myarr[1]='Septiembre'; break;
		case '10': myarr[1]='Octubre'; break;
		case '11': myarr[1]='Noviembre'; break;
		case '12': myarr[1]='Diciembre'; break;

	}
	formateada= myarr[2]+' '+myarr[1]+' '+myarr[0];
	return formateada;
} 
var siezeMegaByte;

$(document).ajaxStop(function(){
    $('#Wait').modal('hide');

});
$(document).ready(function() {

  $('.custom-switch-input').click(function (event) {
    try {
         var control=$(this).attr('id');
         var indice=control.indexOf("_");
         var num_control=control.substr(indice+1);
         var nom_control="#div_"+num_control;
         var nom_control2="#divaj_"+num_control;
         var check=document.getElementById('chbxsn_'+num_control);

         if (check.checked){
//             alert("pasoooo");
           $(nom_control).css('visibility', 'visible'); 
           $(nom_control2).css('visibility', 'visible');
         }
         else{
             $(nom_control).css('visibility', 'hidden'); 
             $(nom_control2).css('visibility', 'hidden');
         }

         
          } catch (e) {
        alert("error"+e);
    }

        });
      
});
function bs_input_file() {
	$(".input-file").before(
		function() {
                    var control=$(this).attr('name');
                    var indice=control.indexOf("_");
                    var num_control=control.substr(indice+1);
                    if(isNaN(num_control)){
                        var num_control='';
                    }
//                    alert(num_control);
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0' id='Txt_arcgos"+num_control+"' name='Txt_arcgos"+num_control+"'>");
				element.attr("name",$(this).attr("Txt_arcgos"+num_control));
				element.change(function(){
                                          var sizeByte = this.files[0].size;
                                          var siezekiloByte = parseInt(sizeByte / 1024);
                                          siezeMegaByte = parseInt(siezekiloByte / 1024);
                                          $("#tamano_"+num_control).val(siezeMegaByte);
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){ 
                                    element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});


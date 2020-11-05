<script>
$(document).ready(function(){


$( ".punk-submit" ).click( function( event ) {	
  event.preventDefault();
 var flag1=0;
 var flag2=0;
 var flag3=0;  
 var flag4=0;


  if ($('.form-punk').find('#name').val() ==""){
	  flag1=1;
	  $('.form-punk').find('#name').css('border','1px solid red');
  }else{
	  flag1=0;
	  $('.form-punk').find('#name').css('border','1px #333');
  }
  
  if ($('.form-punk').find('#phone').val() ==""){
	  flag2=1;
	 $('.form-punk').find('#phone').css('border','1px solid red');
  }else{
	  flag2=0;
	  $('.form-punk').find('#phone').css('border','1px #333');
  }

 if ($('.form-punk').find('#email').val() ==""){
	  flag3=1;
	 $('.form-punk').find('#email').css('border','1px solid red');
  }else{
	  flag3=0;
	  $('.form-punk').find('#email').css('border','1px #333');
  }
 
 if ($('.form-punk').find('#pole').val() ==""){
	  flag4=1;
	 $('.form-punk').find('#pole').css('border','1px solid red');
  }else{
	  flag4=0;
	  $('.form-punk').find('#pole').css('border','1px #333');
  }


  
if (flag1==1 || flag2 ==1 || flag3==1 || flag4==1){

}else{
  $.ajax({
                    url: "/local/templates/simplelandshop_themes_blue/new-form/covid-form-script.php",
                    type: "post",
                    dataType: "json",
                    data: { 
						"name":    $('#name').val(),
                        "phone":    $('#phone').val(),
                        "email":    $('#email').val(),
                        "pole":    $('#pole').val(),
						"page": location.href,
						
	
                    },

                    success: function(data){
						
                }
	});
	
	$('.form-punk').addClass('thanks');
                        $('.form-punk').html("Спасибо! Ваша заявка отправлена. Мы свяжемся с Вами в ближайшее время!");
}
	return false;
});

});
</script>

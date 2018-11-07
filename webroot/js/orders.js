// Quantity Change
(function($){
  $('#quantity').change(function(){
    var qu =  $(this).val(),
    	  pr = $('#orig-price').text();
    $('input.order-quantity').val(qu);
  });
  // Size Change
  $('#size').change(function(){
    var si = $(this).find('option:selected').text(),
    		qa = $('#'+si).val(),
    		qu = qa,
    		n = [];

    if(qa >= 10){
    	qu = 10
    }
    $('#quantity').empty();

  	for(var i=1; i <= qu; i++ ){
  		n.push(i)
  	}
    for(var i=0; i < qu; i++ ){
    	$('<option/>').val(n[i]).html(n[i]).appendTo('#quantity');
    }
    $('input.order-size').val(si);

  });  
})(jQuery);

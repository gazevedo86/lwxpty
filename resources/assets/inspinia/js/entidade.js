  $(function(){
  $('input').click(function(){

    var x = ($(this).prop('checked')?'1':'0')
    $(this).val(x);
  });
});

  $(function(){
  $('input:checkbox').click(function(){

    var x = ($(this).prop('checked')?'1':'0')
    $(this).val(x);
  });

  $(".select2_demo_1").select2();

  $(".touchspin1").TouchSpin({
    buttondown_class: 'btn btn-white',
    buttonup_class: 'btn btn-white'
  });

});

  $(function(){
  $('input:checkbox').click(function(){

    var x = ($(this).prop('checked')?'1':'0')
    $(this).val(x);
  });


$("#menuConfiguracoes .ibox-title button").click(function(){
  $("#menuConfiguracoes .ibox-content").slideDown(500);
  $("#conteinerConfiguracoes").children("div").hide();
});

  $("#menuConfiguracoes .ibox-content button").click(function(){
    var dataTarget = $(this).attr("data-target");


    $("#menuConfiguracoes .ibox-content").slideUp(500,function(){
      $(dataTarget).siblings().hide();
      $(dataTarget).slideDown(500);
    });

    //alert(dataTarget);
  });


  $(".select2_demo_1").select2();

  $(".touchspin1").TouchSpin({
    buttondown_class: 'btn btn-white',
    buttonup_class: 'btn btn-white'
  });

});

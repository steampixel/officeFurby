
$('#send').click(function(){
    
    var data = {
      text : $('#text').val(),
      voice : $('#voice').val(),
      language : $('#language').val(),
      speed : $('#speed').val(),
      pitch : $('#pitch').val(),
      volume : $('#volume').val()
    };
    
    $('#send').prop('disabled', true);
    $('#send').html('Speaking...');
    $('#send').removeClass('btn-success');
    $('#send').addClass('btn-danger');
    
    console.log(data);
    
    $.ajax({
      type: "POST",
      url: 'php/webapi.php',
      data: data,
      success: function(){
          
          $('#send').prop('disabled', false);
          $('#send').html('Speak!');
          $('#send').removeClass('btn-danger');
          $('#send').addClass('btn-success');
          
      },
      error: function(){
          
          $('#send').prop('disabled', false);
          $('#send').html('Speak!');
          $('#send').removeClass('btn-danger');
          $('#send').addClass('btn-success');
          
      }
    });
    
});



  function game()
  {
    var val=$('#wechatid').val();
    val = val.replace(/\ /g, '');
    if (val.length <= 2) {
      $('#error_id').text("Error, please enter valid WeChat ID.");
    }
    else {
      $('#error_id').text("");
      $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: {
        wechatid:val
      },
      success: function (reponse) {
        if (reponse == -1) {
          $('#error_id').text("Error, already registred.");
        }
        else {
          $('#error_id').text("");
          $('#success').css('visibility', 'visible');
          $('#success').css('width', '48%');
          $('#success').css('padding', '10px 20px');
          $('#success').css('margin', '1%');
          $('#formular').css('visibility', 'hidden');
          $('#formular').css('width', '0%');
          $('#formular').css('padding', '0px');
          $('#formular').css('margin', '0%');
          $('#thk').text("Thanks for your participation "+val+".");
        }
      }
    });
    } 
  }
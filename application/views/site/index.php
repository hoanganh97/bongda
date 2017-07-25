<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CI Soccer</title>
  <!-- Bootstrap CSS -->
  <link 
  rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" 
  integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" 
  crossorigin="anonymous">
  
  <script 
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>

  <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" 
  integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
  crossorigin="anonymous"></script>

  <script 
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" 
  integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
  crossorigin="anonymous"></script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102961712-1', 'auto');
  ga('send', 'pageview');

</script>
  
  <link 
  rel="stylesheet" 
  type="text/css" 
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link 
  href="https://fonts.googleapis.com/css?family=Roboto" 
  rel="stylesheet"> 
  
  <link 
  rel="stylesheet" 
  type="text/css" 
  href="<?php echo public_url(); ?>/css/style.css">

  <script>
    function load_ajax(){
        $('#result').html(''); //xóa hết đi thay bằng rỗng // reset data
        $('#result').html('<p>Đang tải ...</p>');
        $.ajax({
            url : "<?php echo base_url('Welcome/laydiem'); ?>",
            type : "post",
            dataType:"json",
            data : {
                 number : $('#number').val()
            },
            success : function (result){
              setTimeout(function(){
                  $('#result').html('');
                  result.forEach(function(item,index){
                  $('#result').append('<tr><td>'+(index + 1)+'</td><td>'+item.Ten+'</td><td>'+item.sotran+'</td><td>'+item.diem+'</td></tr>');
                  });
              }, 500)
             
                //$('#result').html(result);

            }
        });
    }
  </script>
  
</head>
<body>
  <div class="container">

    <div class="row">
      <div id="navbar" class="col-12"><?php $this->load->view('site/block/navbar', $this->data); ?>
      </div>
    </div>

    <div class="row">
      <div id="slider" class="col-12"><?php 
      $kiemtra = ($temp=='site/content/home') ? true : false ; 
        if($kiemtra==1){
          $this->load->view('site/block/slider.php');
        }?>
      </div>
    </div>

    <div class="row">

      <div id="content" class="col-12 col-md-8">
        <div class="container">
          <?php $this->load->view($temp, $this->data); ?>
        </div>
      </div>

      <div id="sidebar" class="col-12 col-md-4">
        <?php $this->load->view('site/block/sidebar'); ?>
      </div>
      
    </div>
    
    <div class="row">
      <div id="footer" class="col-12"><?php $this->load->view('site/block/footer'); ?></div>
    </div>
  </div>
</body>
</html>
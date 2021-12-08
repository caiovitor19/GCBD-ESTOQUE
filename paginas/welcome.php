<script type="text/javascript">
    

 $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Bem Vindo ao Sistema de Estoque!',
        // (string | mandatory) the text inside the notification
        text: 'Gerencie a entrada e saída de produtos do estoque da EEEP José Maria Falcão ',
        // (string | optional) the image to display on the left
        image: 'img/<?php echo $avatar;?>',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    })
    




</script>
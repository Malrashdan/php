<html>
    <head></head>
    <body>
    <table border width=400 hight=200 display=inline-block>
      <?php
      for($i=1;$i<=6;$i++){
      echo ('<tr>');
      for($j=1;$j<=5;$j++){
      echo('<td>'.$i.'x'.$j.'='. $i*$j .'</td>');
      }
      echo ('<tr>');
    }
    
      ?>
      </table>
    </body>
</html>
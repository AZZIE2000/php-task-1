<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <table style="border : 1px solid black">
        <?php
        echo get_current_user();

        function numTable()
        {
          $x = [1,2,3,4,5,6,7,8,9,10];
          for($i=1; $i<=10; $i++){
            echo "<tr></tr>"; 
            foreach($x as $item){
              echo "<td style='border : 1px solid black'>". $item*$i ."</td>";
            }
          }
        }
        numTable();
        ?>
    </table>
  </body>
</html>

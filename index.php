<html>
    <head>
        <meta charset="UTF-8">
        <title>The Input Table</title>
        <style>
        body{
        background-color: #000000; 
        text-align: center;
        }
        input{
        width: 10%;
        height: 10%;
        }
        input[type=text] {
        border: 2px solid red;
        border-radius: 4px;
        text-align: center;
        background-color: #00FF00;
        }
        </style>
    </head>
    <body>
<?php
for ($x = 1; $x <= 9; $x++)
      {
        if ($x == 4 || $x == 7)
        {
          echo "<br />";
        }
    echo "<input name=$x value=$x type=text>";
      }
?>
</body>
</html>
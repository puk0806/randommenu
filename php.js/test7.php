<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>배열 테스트</h1>

    <h1>JavaScript</h1>
    <ul>

    <script>

      list = new Array ("one", "two", "three");
      document.write(list);
      document.write(list[0]);
      document.write(list.length);
      i=0;
      while(i < list.length){
        document.write("<li>"+list[i]+"</li>");
        i = i+1;
      }
    </script>
    </ul>
    <h1>PHP</h1>
    <?php
    $list = array("one", "two", "three");
    echo $list[2];
    echo count($list);
     ?>


  </body>
</html>

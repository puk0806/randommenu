<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>함수 사용 테스트</h1>
    <h1>JavaScript</h1>
    <script>
      function a(){
        document.write("Hello JS Function\n");
      }
      a();
      a();
      a();

      function b(input){
        document.write(input+1);
      }
      b(6);

      function c (input){
        return input+1;
      }
      document.write(c(6));


    </script>

    <h1>php</h1>
    <?php
      function a(){
        echo "Hello PHP Function\n";
      }
      a();

      function b($input){
        return $input+1;
      }
      echo b(6);
     ?>

  </body>
</html>

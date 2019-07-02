<?php 
  require_once 'include/bootstrapHeader.php';
 ?>


  <?php 

    $http = 'http://sdfwerxdsfsdfsdfsdfsd';
    $http2 = 'https://sdfwerxdsfsdfsdfsdfsd';
    $http3 = 'htts://asdadaweqwdasd';

    $subHttp = substr($http, 0, 7);
    echo $subHttp . "<br>";
    $subHttp2 = substr($http2, 0, 8);
    echo $subHttp2 . "<br>";

    function checkHttp ($str) {
      $http = substr($str, 0, 7);
      $https = substr($str, 0, 8);
      if ($http == "http://" || $https == "https://") {
        return "Correct!";
      } else {
        return "No chans!";
      }

    }

    echo checkHttp( $http ) . "<br>";
    echo checkHttp( $http2 ) . "<br>";
    echo checkHttp( $http3 ) . "<br>";

   ?>
<?php 
  $jpg = "test.jpg";
  $png = "test.png";
  $txt = "test.txt";

  $out = substr($jpg, -4);
  //print_r($out);

  function checkImg ($img) 
  {
    $img = substr($img, -4);
    if ($img == '.jpg' || $img == '.png') {
      return "ДА!";
    } else {
      return "НЕТ!";
    }
  }

echo checkImg( $jpg ) . "<br>";
echo checkImg( $png ) . "<br>";
echo checkImg( $txt ) . "<br>";
 ?>
  

<?php 
  require_once 'include/bootstrapFooter.php';
 ?>


<?php 
  require_once '../include/bootstrapHeader.php';
 ?>
<h2 class = "center">Строковые функции</h2>

<div class="code_block">
  <p>Дана строка. Проверьте, что она начинается на <b>'http://'</b> или на <b>'https://'</b>. Если это так, выведите <b>'да'</b>, если не так - <b>'нет'</b>.</p>
  <p>Создадим строки для проверки и занесем их в переменные</p>
  <div class="code_block_php">
    <?php highlight_string('<?php $http = "http://sdfwerxdsfsdfsdfsdfsd;
      $http2 = "https://sdfwerxdsfsdfsdfsdfsd";
      $http3 = "htts://asdadaweqwdasd"; ?>');?><br>

  </div>
  <p>Напишем функцию которая проверяет начало строки</p>
  <div class="code_block_php">
    <?php highlight_string('<?php     function checkHttp ($str) {
            $http = substr($str, 0, 7);
            $https = substr($str, 0, 8);
            if ($http == "http://" || $https == "https://") {
              return "ДА!";
            } else {
              return "НЕТ!";
            }

          } ?>');
    ?><br> 
  </div>
  <p>Теперь проверим созданые нами строки</p>
    <div class="code_block_php">
    <?php highlight_string('<?php   echo checkHttp( $http ) // вернет: ДА!;
        echo checkHttp( $http2 ) // вернет: ДА!;
        echo checkHttp( $http3 ) // вернет: НЕТ!; 
    ?>');
    ?><br> 
  </div>
</div>
<hr>
<div></div>

<div class="code_block">
  <p>Дана строка. Проверьте, что она заканчивается на <b>'.png'</b> или на <b>'.jpg'</b>. Если это так, выведите <b>'да'</b>, если не так - <b>'нет'</b>.</p>
  <p>Создадим строки для проверки и занесем их в переменные</p>
  <div class="code_block_php">
    <?php highlight_string('<?php  
      $jpg = "test.jpg";
      $png = "test.png";
      $txt = "test.txt";
   ?>');?><br>

  </div>
  <p>Напишем функцию которая проверяет конец строки</p>
  <div class="code_block_php">
    <?php highlight_string('<?php 
        function checkImg ($img) 
          {
            $img = substr($img, -4);
            if ($img == ".jpg" || $img == ".png") {
              return "ДА!";
            } else {
              return "НЕТ!";
            }
          }
     ?>');
    ?><br> 
  </div>
  <p>Теперь проверим созданые нами строки</p>
    <div class="code_block_php">
    <?php highlight_string('<?php   echo checkImg( $jpg ) // вернет: ДА!;
        echo checkImg( $png ) // вернет: ДА!;
        echo checkImg( $txt ) // вернет: НЕТ!; 
    ?>');
    ?><br> 
  </div>
</div>
<hr>
<div></div>




<?php 
  require_once '../include/bootstrapFooter.php';
 ?>
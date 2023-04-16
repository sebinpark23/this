<html>

<body>

  <h2>1번 문제</h2><br>

  <?php
  //1번 문제 
  //1 부터 n까지의 숫자를 프린트하고 전체 합과 곱을 구합니다.
  $n = 30;
  $sum = 0;
  $prod = 1;

  for ($i = 1; $i <= $n; $i++) {
    $sum = $i + $sum;
    $prod = $i * $prod;
  }
  echo "1부터 " . $n . "까지의 숫자의 합: " . $sum . "<br>";
  echo "1부터 " . $n . "까지의 숫자의 곱: " . $prod;
  ?>

  <br><br>

  <h2>2번 문제</h2><br>
  <!--문제 2: Sorting -->
  <form method="GET" action="homework.php"> <!-- php의 이름이 homework로 저장되어 있으니 homework.php로 바꾸기 -->
    정수를 입력하세요 : <input type="text" name="n"><br>
    <input type="submit" value="전송">
  </form>

  <?php
  // sort
  // 10이상 100이하의 정수 숫자 n 을 입력받아 n개의 정수 랜덤넘버를 생성하고 
  // 생성된 결과와 올림차순으로 소팅한 결과를 출력하세요.

  if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $dada = array(); //빈 배열 생성 후 랜덤넘버를 저장
    for ($i = 0; $i < $n; $i++) {
      $dada[$i] = rand(0, 100);
    }
    sort($dada); // 배열 정렬
    echo implode(" ", $dada); // 소팅된 배열 출력, " "로 구분하여 숫자들이 정렬
  }
  ?>

  <br><br>

  


</body>

</html>
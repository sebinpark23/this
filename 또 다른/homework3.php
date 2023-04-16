<html>

<body>

<h2>3번 문제</h2>
  <!-- 문제 3 : Fibonacci
100 이하의 정수 숫자 n 을 입력받아 n개의 피보나치 수열과 앞과 뒤항의 비례를 출력하세요
fi+2 = fi+1 + fi
i  fi  fi+1 / fi
1 1 1
2 1 2
3 2 1.5
4 3 1.666667
5 5 1.6
6 8 -->

<form method="POST" action="homework3.php">
    정수를 입력하세요 : <input type="text" name="n"><br>
    <input type="submit" value="전송">
  </form>

  <?php

  if (isset($_POST['n'])) {
    $n = $_POST['n'];
    $fibonacci = array(0, 1);
    $ratio = array();

    for ($i = 2; $i <= $n; $i++) {
      $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo "<p>";
    for ($i = 1; $i < $n; $i++) {
      echo $fibonacci[$i] . " ";
    }
    echo "</p>";

    for ($z = 2; $z < $n; $z++) {
      $ratio[$z - 2] = $fibonacci[$z] / $fibonacci[$z - 1];
      echo $ratio[$z - 2] . " ";
    }
    echo ($fibonacci[$n] / $fibonacci[$n - 1]);
  }
  ?>

  <br><br>

  

</body>

</html>
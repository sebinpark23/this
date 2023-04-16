<html>

<body>

    <h2>5번 문제</h2><br>
    <!--문제 5 : Calendar
몇년 몇월을 입력받아 아래와 같은 달력 테이블을 완성하시오.-->

    <form method="GET" action="homework5.php">
        년도를 입력하세요 : <input type="number" name="year"><br>
        월을 입력하세요 : <input type="number" name="month"><br>
        <input type="submit" value="확인">
    </form>

    <?php
    if (isset($_GET["year"]) && isset($_GET["month"])) //isset을 이용하여 year과 month 값이 있는지 확인
    {
        $year = $_GET["year"];
        $month = $_GET["month"];

        if (checkdate($month, 1, $year)) {
            $start_day = getDate(mktime(0, 0, 0, $month, 1, $year)); //시작 요일 구하기
            $last_day = date("t", mktime(0, 0, 0, $month, 1, $year)); // t = 주어진 월의 총 일 수
            $count = ceil(($start_day['wday'] + $last_day) / 7) * 7; //총 칸 수
            $j = 0; // $j 변수 초기화
        }


        echo "<table border='1' width=\"500\" bordercolor=\"#0000FF\">";
        echo "<tr bgcolor=\"#66FFFF\" align=\"center\"><td colspan=\"7\">" . $year . "년 " . $month . "월 달력</td></tr>";
        echo "<tr align=\"right\" bgcolor=\"#FF99FF\"><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";




        for ($i = 1; $i <= $count; $i++) {
            if ($i % 7 == 1) {
                echo "<tr>";
            }
            echo "<td>";
            if ($i > $start_day['wday'] && $j < $last_day) {
                echo $j + 1;
                $j++;
            } else {
                echo "&nbsp;";
            }
            echo "</td>";
            if ($i % 7 == 0) {
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br/>";
    } else {
        echo "<script>alert(\"올바른 날짜형식을 입력해 주세요\");</script>";
    }

    ?>


</body>

</html>
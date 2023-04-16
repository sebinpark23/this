<html>

<body>

    <h2>4번 문제</h2><br>
    <!--문제 4 : 폼을 이용하여 도형 계산식
• 삼각형 : 밑변과 높이를 입력으로 받아서 면적을 출력한다. width*height/2
• 직사각형 : 가로와 세로를 입력으로 받아서 면적을 출력한다. width*height
• 원 : 반지름을 입력으로 받아서 면적을 출력한다. pi*radius^2
• 직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다. width*length*height
• 원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다. pi*radius^2*height
• 구 : 반지름을 입력으로 받아서 체적을 출력한다. 4/3*pi*radius^3 -->

    <form method="GET" action="homework4.php">
        밑변, 가로를 입력하세요 : <input type="text" name="width"><br>
        높이, 세로를 입력하세요 : <input type="text" name="height"><br>
        반지름을 입력하세요 : <input type="text" name="radius"><br>
        세로를 입력하세요 : <input type="text" name="length"><br>
        삼각형<input type="radio" name="n1" value="n1" onclick="submit();" />
        직사각형<input type="radio" name="n1" value="n2" onclick="submit();" />
        원<input type="radio" name="n1" value="n3" onclick="submit();" />
        직육면체<input type="radio" name="n1" value="n4" onclick="submit();" />
        원통<input type="radio" name="n1" value="n5" onclick="submit();" />
        구<input type="radio" name="n1" value="n6" onclick="submit();" /><br>
        <input type="submit" value="전송">
    </form>

    <?php


    if (isset($_GET["width"])) {
        $width = $_GET["width"];
    } else {
        $width = 0;
    }

    if (isset($_GET["height"])) {
        $height = $_GET["height"];
    } else {
        $height = 0;
    }

    if (isset($_GET["radius"])) {
        $radius = $_GET["radius"];
    } else {
        $radius = 0;
    }

    if (isset($_GET["length"])) {
        $length = $_GET["length"];
    } else {
        $length = 0;
    }

    $pi = pi();
    $triangle = $width * $height / 2;
    $rectangle = $width * $height;
    $circle = $pi * pow($radius, 2);
    $parallelepiped = $width * $length * $height;
    $cylinder = $pi * $radius * $radius * $height;
    $sphere = 4 / 3 * $pi * $radius * $radius * $radius;

    echo ("삼각형 : " . $triangle . "<br>");
    echo ("직사각형 :" . $rectangle . "<br>");
    echo ("원 : " . $circle . "<br>");
    echo ("직육면체 : " . $parallelepiped . "<br>");
    echo ("원통 : " . $cylinder . "<br>");
    echo ("구 : " . $sphere . "<br>");

    ?>

</body>

</html>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Lucas Numbers</title>
		 <meta name="author" content="Mikołaj Piotrowicz">
	</head>
	<body>
        <?php
            function getLucasNumber($n) {
                if ($n == 0) {
                    return 2;
                }
                if ($n == 1) {
                    return 1;
                }
                return getLucasNumber($n - 1) +  getLucasNumber($n - 2);
            }

            function getParameter() {
                $n = 0;
                if(isset($_GET["n"]))  {
                    $n = $_GET['n'];
                }

                if($n < 4 || $n > 44) {
                   return 10;
                }

                return $n;
            }

            for ($i = 0; $i <= getParameter(); $i++) {
                echo $i . " ==> " . getLucasNumber($i);
                echo "</br>";
            }
         ?>
	</body>
</html>

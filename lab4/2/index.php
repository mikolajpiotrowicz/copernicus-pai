<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Prime numbers</title>
		 <meta name="author" content="Mikołaj Piotrowicz">
	</head>
	<body>
        <?php
            function isPrime($number) {
                if ( $number == 1 ) {
                    return false;
                }
                if ( $number == 2 ) {
                    return true;
                }

                $x = sqrt($number);
                $x = floor($x);
                for ( $i = 2 ; $i <= $x ; ++$i ) {
                    if ( $number % $i == 0 ) {
                        break;
                    }
                }

                if( $x == $i-1 ) {
                    return true;
                } else {
                    return false;
                }
            }

            function getParameter() {
                $output = '';

                if(isset($_GET["n"])) {
                     $output = $_GET['n'];
                }

                if(filter_var($output, FILTER_VALIDATE_INT) && $output > 0) {
                    return $output;
                }

                return null;
            }

            if(getParameter() !== null) {
                echo getParameter();
                echo isPrime(getParameter()) ? ' to liczba pierwsza.' : ' to liczba złożona';
            }
            else {
                echo 'Przekazany parametr nie jest liczbą naturalną 0, 1, 2.... lub nie istnieje. Aby przekazać parametr n np. 12 wywołaj URL <a href="http://localhost/?n=12">http://localhost/?n=12</a>';
            }

         ?>
	</body>
</html>

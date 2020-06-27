<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Prime factors</title>
		 <meta name="author" content="Mikołaj Piotrowicz">
	</head>
	<body>
        <?php
            function primeFactors($number) {
                if ($number <= 3) {
                    $factors = array($number);
                }
                else {
                    while ($number > 1) {
                        for ($n = 2; $n < $number && $number % $n; $n++);
                        $number /= $n;
                        $factors[] = $n;
                    }
                }
                return $factors;
            }

            if(isset($_POST['n'])) {
                $value =  $_POST['n'];
                 if(filter_var($value, FILTER_VALIDATE_INT) && $value > 0) {
                    echo $value . ' = ' . implode(' * ', primeFactors($value));
                }
                else {
                    echo "Podaj liczbę naturalną aby rozłożyć ją na czynniki.";
                }
            }
         ?>
         <form name="form" action="" method="post"">
           <input placeholder="Wpisz liczbę" name="n" type="number" />
           <button type="submit">Submit</button>
         </form>
	</body>
</html>

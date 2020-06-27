<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Konstytucja 3 maja</title>
		 <meta name="author" content="Mikołaj Piotrowicz">
		<link rel="stylesheet" href="./konstytucja.css">
	</head>
	<body>
		<header>
			<h1>Konstytucja 3 maja</h1>
		</header>
		<article>
			<section>
		<p>
			<strong>Konstytucja 3 maja</strong>, a właściwie <strong>Ustawa Rządowa z dnia 3 maja</strong>
			to uchwalona 3 maja 1791 roku ustawa regulująca ustrój prawny Rzeczypospolitej Obojga Narodów.
			Powszechnie przyjmuje się, że Konstytucja 3 maja była pierwszą w Europie i drugą na świecie
			(po konstytucji amerykańskiej z 1787 r.) nowoczesną, spisaną <a target="_blank" href="https://pl.wikipedia.org/wiki/Konstytucja">konstytucją</a>.
		</p>
		<p>
			<img src="konstytucja.jpg" /> <!-- 464 x 720 -->
			<a target="_blank" href="https://pl.wikipedia.org/wiki/Konstytucja_3_maja">Konstytucja 3 maja</a> została ustanowiona ustawą rządową przyjętą tego dnia przez
			<a target="_blank" href="https://pl.wikipedia.org/wiki/Sejm_Czteroletni">Sejm Czteroletni</a>.
			Działo się to za panowania króla <a target="_blank" href="https://pl.wikipedia.org/wiki/Stanis%C5%82aw_August_Poniatowski">Stanisława Augusta Poniatowskiego</a> a sam król był
			jednym z głównych współautorów konstytucji.
			Została ona zaprojektowana w celu zlikwidowania obecnych od dawna wad opartego na wolnej elekcji
			i demokracji szlacheckiej systemu politycznego <a target="_blank" href="https://pl.wikipedia.org/wiki/Rzeczpospolita_Obojga_Narod%C3%B3w">Rzeczypospolitej Obojga Narodów</a>.
			Konstytucja zmieniła ustrój państwa na monarchię dziedziczną, ograniczyła znacząco demokrację
			szlachecką, odbierając prawo głosu i decyzji w sprawach państwa szlachcie nieposiadającej ziemi
			(gołocie), wprowadziła częściowe zrównanie praw osobistych mieszczan i szlachty oraz stawiała
			chłopów pod ochroną państwa, w ten sposób łagodząc nadużycia pańszczyzny.
			Konstytucja formalnie zniosła <a target="_blank" href="https://pl.wikipedia.org/wiki/Liberum_veto">liberum veto</a>.
		</p>
		<p>
			Przyjęcie monarchicznej Konstytucji 3 maja spowodowało opozycję republikanów oraz sprowokowało
			wrogość Imperium Rosyjskiego, które od 1768 roku było protektorem Rzeczypospolitej i gwarantem
			nienaruszalności jej ustroju.
			W wojnie w obronie konstytucji Polska, zdradzona przez swojego pruskiego sprzymierzeńca
			<a target="_blank" href="https://pl.wikipedia.org/wiki/Fryderyk_Wilhelm_II_Pruski">Fryderyka Wilhelma II</a>, została pokonana przez wojska rosyjskie <a target="_blank" href="https://pl.wikipedia.org/wiki/Katarzyna_II_Wielka">Katarzyny
			Wielkiej</a>, wspierające <a href="https://pl.wikipedia.org/wiki/Konfederacja_targowicka" target="_blank">konfederację targowicką<a/> – spisek części polskich magnatów
			przeciwnych zmianie ustroju Rzeczypospolitej.
			Po utracie niepodległości w 1795 roku przez 123 lata <a target="_blank" href="https://pl.wikipedia.org/wiki/Rozbiory_Polski">rozbiorów</a> przypominała o walce
			o niepodległość.
			Zdaniem głównych współautorów <a target="_blank" href="https://pl.wikipedia.org/wiki/Ignacy_Potocki">Ignacego Potockiego</a> i <a target="_blank" href="https://pl.wikipedia.org/wiki/Hugo_Ko%C5%82%C5%82%C4%85taj">Hugona Kołłątaja</a>
			była &quot;ostatnią wolą i testamentem gasnącej Ojczyzny&quot;.
		</p>
		<p>
			Konstytucja przestała w praktyce obowiązywać (straciła znaczenie) 24 lipca 1792 roku (w momencie
			przystąpienia króla Stanisława Augusta Poniatowskiego do konfederacji targowickiej) – czyli po nieco
			ponad 14 miesiącach, w ciągu których Sejm Czteroletni uchwalił szereg ustaw szczegółowych, będących
			rozwinięciem jej postanowień.
			Przestała natomiast być obowiązującym aktem prawnym (została derogowana) 23 listopada 1793 roku.
			Sejm grodzieński uznał wtedy Sejm Czteroletni za niebyły i uchylił wszystkie ustanowione na nim akty
			prawne. 
		</p>
			</section>
		</article>

        <aside>
            <div id="wejscie">
                <?php
                    setLocale(LC_TIME, "Polish");
                    $myDate = date(' ');
                    echo strftime('%d %B %Y %A', strtotime($myDate)) . " " . date('H:i:s');
                 ?>
            </div>
            <?php
            function dateDifference($date_1, $date_2, $differenceFormat = '%s')
            {
                $datetime1 = date_create($date_1);
                $datetime2 = date_create($date_2);

                $interval = date_diff($datetime1, $datetime2);

                return $interval->format($differenceFormat);

            }

            function secondsToTime($seconds, $format)
            {
                $dtF = new DateTime('@0');
                $dtT = new DateTime("@$seconds");
                return $dtF->diff($dtT)->format($format);
            }
            function getTimeElapsedFromLastModified($timeDiff)
            {
                $longFormat = '%a days, %h hours, %i minutes and %s seconds';
                $shortFormat = '%a days';
                $secondsInDay = 60 * 60 * 24;

                return secondsToTime($timeDiff, $timeDiff < $secondsInDay ? $longFormat : $shortFormat);

            }
            function getLastModifiedDate($timestamp)
            {
                $date = date('d/m/Y', $timestamp);

                if ($date == date('d/m/Y'))
                {
                    $date = date("Y-m-d H:i:s", $timestamp);
                }
                else if ($date == date('d/m/Y', now() - (24 * 60 * 60)))
                {
                    $date = date("Y-m-d", $timestamp);

                }
                return $date;
            }
            echo "Last modified: " . getLastModifiedDate(getlastmod());
            echo '</br>';
            echo "Date diff: " . getTimeElapsedFromLastModified(dateDifference(date("F d Y H:i:s") , date("F d Y H:i:s", getlastmod())));

            ?>
        </aside>

		<footer>
			<h4>Treść artykułu pochodzi z Wikipedii</h4>
		</footer>
	</body>
</html>

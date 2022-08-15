<?php
require_once 'gora.php';
?>
<main>
    
<div class="row">
    <div class="col-xl-9 col-l-9 col-md-9 col-s-12 col-xs-12 sidebarleft">
        <div class="table"id="licznik">
            Koszyk:<br>
                <div id="k">
                    koszyk
                </div>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th colspan="2">Cennik prac budowlany: prace konstrukcyjne</th>
                </tr>
                <tr>
                    <th>Rodzaj pracy</th><th>Cena w zł/m2</th>
                </tr>
                <tr>
                    <td>Murowanie ścian fundamentowych z bloczków betonowych</td><td>60<button class="dodaj" id="1" value="60" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Murowanie ścian nośnych z pustaków ceramicznych lub bloczków betonu komórkowego na zaprawie tradycyjnej</td><td>65 <button class="dodaj" id="2" value="65" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Murowanie ścian działowych</td><td>45 <button class="dodaj" id="3" value="45" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie stropu gęstożebrowego Teriva</td><td>85 <button class="dodaj" id="4" value="85" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Strop gęstożebrowy, wykonanie z nadbetonem i deskowaniem</td><td>200<button class="dodaj" id="5" value="200" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż konstrukcji płatwiowo-kleszczowej konstrukcji dachu dwuspadowego</td><td>55<button class="dodaj" id="6" value="55" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Ułożenie poszycia (papa na deskowaniu) dachu dwuspadowego</td><td>26<button class="dodaj" id="7" value="26" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż blachodachówki na prostym dachu dwuspadowym</td><td>60<button class="dodaj" id="8" value="60" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż dachówki na prostym dachu dwuspadowym</td><td>80<button class="dodaj" id="9" value="80" > DODAJ</button></td>
                </tr>							    		
            </table>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th colspan="2">Cennik usług budowlanych: prace wykończeniowe</th>
                </tr>
                <tr>
                    <th>Rodzaj pracy</th><th>Cena w zł/m2</th>
                </tr>
                <tr>
                    <td>Wykonanie tynków wewnętrznych tradycyjnych</td><td>30<button class="dodaj" id="10" value="30" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie tynków gipsowych</td><td>30<button class="dodaj" id="11" value="30" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Ułożenie gładzi gipsowej</td><td>30<button class="dodaj" id="12" value="30" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Malowanie ścian i sufitów</td><td>20<button class="dodaj" id="13" value="20" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Układanie płytek gresu</td><td>100<button class="dodaj" id="14" value="100" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Układanie mozaiki</td><td>150<button class="dodaj" id="15" value="150" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Układanie paneli podłogowych</td><td>30<button class="dodaj" id="16" value="30" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie obudowy wanny lub zabudowy pod umywalkę z płyt g-k (za szt.)</td><td>300<button class="dodaj" id="17" value="300" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Szlifowanie płytek do narożników (za m)</td><td>40<button class="dodaj" id="18" value="40" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż lustra (za szt.)</td><td>100<button class="dodaj" id="19" value="100" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż dodatków łazienkowych (za szt.)</td><td>50<button class="dodaj" id="20" value="50" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż parapetów wewnętrznych (za m)</td><td>50<button class="dodaj" id="21" value="55" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż parapetów zewnętrznych (za m)</td><td>60<button class="dodaj" id="22" value="60" > DODAJ</button></td>
                </tr>               
            </table>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th colspan="2">Cennik budowlany: instalacje elektryczne</th>
                </tr>
                <tr>
                    <th>Rodzaj pracy</th><th>Cena w zł</th>
                </tr>
                <tr>
                    <td>Wykonanie punktu elektrycznego 230V</td><td>65<button class="dodaj" id="23" value="65" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie punktu elektrycznego 400V</td><td>75<button class="dodaj" id="24" value="75" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie punktu TV/SAT/INT</td><td>55<button class="dodaj" id="25" value="55" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie wypustu oświetlenia górnego</td><td>55<button class="dodaj" id="26" value="55" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż gniazda elektrycznego/wyłącznika</td><td>15<button class="dodaj" id="27" value="15" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż lampy/kinkietu</td><td>50<button class="dodaj" id="28" value="50" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Osadzenie rozdzielnicy - do 12 modułów</td><td>100<button class="dodaj" id="29" value="100" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Osadzenie rozdzielnicy - do 24 modułów</td><td>150<button class="dodaj" id="30" value="150" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Osadzenie rozdzielnicy - 36-48 modułów</td><td>200<button class="dodaj" id="31" value="200" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Osadzenie rozdzielnicy - 56-104 modułów</td><td>250<button class="dodaj" id="32" value="250" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż i podłączenie bezpiecznika w rozdzielnicy</td><td>18<button class="dodaj" id="33" value="18" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Podłączenie płyty elektrycznej (płyty indukcyjnej lub ceramicznej)</td><td>120<button class="dodaj" id="34" value="120" > DODAJ</button></td>
                </tr>
            </table>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th colspan="2">Cennik budowlany: instalacje hydrauliczne</th>
                </tr>
                <tr>
                    <th>Rodzaj prac</th><th>Cena w zł/pkt</th>
                </tr>
                <tr>
                    <td>Wykonanie instalacji centralnego ogrzewania (rura PP)</td><td>160<button class="dodaj" id="35" value="160" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie instalacji ogrzewania podłogowego z materiałami i styropianem (za m2)</td><td>190<button class="dodaj" id="36" value="190" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Instalacja szafki i rozdzielacza instalacji ogrzewania podłogowego</td><td>500<button class="dodaj" id="37" value="500" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż umywalki</td><td>90<button class="dodaj" id="38" value="90" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż WC podwieszanego ze stelażem</td><td>250<button class="dodaj" id="39" value="250" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż bidetu</td><td>150<button class="dodaj" id="40" value="150" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż wanny</td><td>200<button class="dodaj" id="41" value="200" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż kabiny prysznicowej z panelem natryskowym</td><td>350<button class="dodaj" id="42" value="350" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż odpływu liniowego</td><td>250<button class="dodaj" id="43" value="250" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż zestawu hydroforowego</td><td>350<button class="dodaj" id="44" value="350" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Wykonanie wyjścia kanalizacji pod ławą</td><td>400<button class="dodaj" id="45" value="400" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Demontaż starych punktów hydraulicznych (zlewozmywak, wanna)</td><td>120<button class="dodaj" id="46" value="120" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż instalacji gazowej (za m)</td><td>170<button class="dodaj" id="47" value="170" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Podłączenie kuchenki gazowej</td><td>350<button class="dodaj" id="48" value="350" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż kotła gazowego</td><td>750<button class="dodaj" id="49" value="750" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Montaż kotła gazowego z zasobnikiem</td><td>1500<button class="dodaj" id="50" value="1500" > DODAJ</button></td>
                </tr>           
            </table>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th colspan="2">Cennik budowlany: okna, drzwi, bramy</th>
                </tr>
                <tr>
                    <th>Produkt</th><th>Cena w zł</th>
                </tr>
                <tr>
                    <td>Okno z PCV Iglo 5, rozwierno-uchylne, 100 x 145 cm</td><td>650<button class="dodaj" id="51" value="650" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Okno z PCV Iglo 5 dwuskrzydłowe, rozwierno-uchylne i rozwierne, 150 x 150 cm</td><td>1100<button class="dodaj" id="52" value="1100" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Okno z PCV, rozwierno-uchylne, 1-skrzydłowe, 100 x 150 cm</td><td>990<button class="dodaj" id="53" value="990" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Okno z PCV, 2-skrzydłowe, 1 skrzydło rozwierno-uchylne, 1 skrzydło rozwierne</td><td>1400<button class="dodaj" id="54" value="1400" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Drzwi balkonowe z PCV, System LivIng, 1-skrzydłowe, 100 x 230 cm</td><td>1290<button class="dodaj" id="55" value="1290" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Drzwi balkonowe z PCV, System LivIng, 2-skrzydłowe, 200 x 230 cm</td><td>2700<button class="dodaj" id="56" value="2700" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Drzwi tarasowe rozwierne z PCV, 300 x 250 cm, 1 skrzydło rozwierno-uchylne, 1 rozwierne, 1 stałe</td><td>6000<button class="dodaj" id="57" value="6000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Drzwi tarasowe z PCV, przesuwne, 350 x 235 cm</td><td>9 000<button class="dodaj" id="58" value="9000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Drzwi tarasowe z aluminium, przesuwne, 350 x 235 cm</td><td>14 000<button class="dodaj" id="59" value="14000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Drzwi tarasowe z drewna, przesuwne, 350 x 235 cm</td><td>22 000<button class="dodaj" id="60" value="22000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Okno dachowe obrotowe z różnych materiałów, 78 x 118 cm, z kołnierzem uszczelniającym</td><td>2000<button class="dodaj" id="61" value="2000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td> Brama uchylna stalowa 200 x 180 cm</td><td>900<button class="dodaj" id="62" value="900" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Brama rozwierna drewniana</td><td>2500<button class="dodaj" id="63" value="2500" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Brama garażowa segmentowa, ocieplona, 250 x 200 cm</td><td>2750<button class="dodaj" id="64" value="2750" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Brama garażowa segmentowa, ocieplona, z napędem, 250 x 200 cm</td><td>6000<button class="dodaj" id="65" value="6000" > DODAJ</button></td>
                </tr>
            </table>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th colspan="2">Ceny wyposażenie domu dla średniej wielkości rodziny</th>
                </tr>
                <tr>
                    <th>Urządzenie</th><th>Koszt w zł</th>
                </tr>
                <tr>
                    <td>Kocioł gazowy dwufunkcyjny</td><td>5000<button class="dodaj" id="66" value="5000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Kocioł gazowy dwufunkcyjny stojący z zasobnikiem</td><td>20 000<button class="dodaj" id="67" value="20000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Kocioł gazowy kompakt wiszący</td><td>11 000<button class="dodaj" id="68" value="11000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Kocioł gazowy kompaktowy przystosowany do instalacji solarnej</td><td>19 000<button class="dodaj" id="69" value="19000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Kocioł na pelety z podajnikiem i zasobnikiem paletów</td><td>16 500<button class="dodaj" id="70" value="16500" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Klimatyzator typu split</td><td>6500<button class="dodaj" id="71" value="6500" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Rekuperator</td><td>12 000<button class="dodaj" id="72" value="12000" > DODAJ</button></td>
                </tr>
                <tr>
                    <td>Instalacja fotowoltaiczna (za 1 kWp)</td><td>5500<button class="dodaj" id="73" value="5500" > DODAJ</button></td>
                </tr>
            </table>
        </div>
    </div>
    <?php
    require_once 'prawo.php';
    ?>
</div>
    <script>
        const divs = document.getElementsByClassName('dodaj');
        const koszyk = document.getElementById("k");
        let ogolnaCena = 0;
        let item = 0;

        for(let i=0;i<divs.length; i++) {
            divs[i].addEventListener('click', dodajDoKoszyka);
        }

        function dodajDoKoszyka(){
            let cena = parseFloat(this.value) + ogolnaCena;
            item++
            koszyk.innerHTML = `${cena} zł ${item} przedmiot/ty/ów`;
            ogolnaCena += parseFloat(this.value);
        }
    </script>
</main>
<?php
require 'dol.php';
exit();
?>
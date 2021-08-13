<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php error_reporting (E_ALL ^ E_NOTICE);

  /*Holen der Daten aus dem Formular*/
$kWp = $_POST["kWp"];
$EE = $_POST["EE"];
$NP = $_POST["NP"];
$efffactor = $_POST["efffactor"];
$kilometer = $_POST["kilometer"];
$zhsgeladen = $_POST["zhsgeladen"];
$kwheauto100km = $_POST["kwheauto100km"];
$literauto100km = $_POST["literauto100km"];
$spritpreis = $_POST["spritpreis"];
$kWhverbrauch = $_POST["kWhverbrauch"];
$autarkiequote = $_POST["autarkiequote"];
$speicherkosten = $_POST["speicherkosten"];
$speicherkapa = $_POST["speicherkapa"];
$speicherladzy = $_POST["speicherladzy"];
$speicherleben = $_POST["speicherleben"];
$jahre1 = $_POST["jahre1"];
$nachverguetung = $_POST["nachverguetung"];
$tank = $_POST["tank"];
$akkugröße = $_POST["akkugröße"];
$inflation = $_POST["inflation"];
$strompreisanstieg = $_POST["strompreisanstieg"];
$Investition = $_POST["Investition"];

?>

      <form action="site.php" method="post">
        <br>
        <table>
          <tr>
            <th width = 220>Daten der Solaranlage</th>
            <th></th>
          </tr>
          <tr>
            <td>Größe der Anlage in kWp:</td>
            <td><input type="number" name="kWp" value="<?php echo htmlspecialchars($_POST['kWp']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Einspeisevergütung<span class="tooltiptext">Derzeit: 0.0731 Euro</span></div></td>
            <td><input type="number" name="EE" value="<?php echo htmlspecialchars($_POST['EE']); ?>" step=".001"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Strompreis Netzbezug:<span class="tooltiptext">Durchschnitt: 0.338 Euro</span></div></td>
            <td><input type="number" name="NP" value="<?php echo htmlspecialchars($_POST['NP']); ?>" step=".001"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Effizienzfaktor in %:<span class="tooltiptext">Regulär: 95% <br>Bei O/W oder N/S - Ausrichtung eher 80-85%</span></div></td>
            <td><input type="number" name="efffactor" value="<?php echo htmlspecialchars($_POST['efffactor']); ?>" step=".01"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Investition:<span class="tooltiptext">Die Kosten einer PV-Anlage liegt Netto zwischen 1000-1400 Euro je kWp</span></div></td>
            <td><input type="number" name="Investition" value="<?php echo htmlspecialchars($_POST['Investition']); ?>"> <br></td>
          </tr>
        </table>
<br><br>
        <table>
          <tr>
            <th width = 220>Randinformationen:</th>
            <th></th>
          </tr>
          <tr>
            <td>Inflation in %:</td>
            <td><input type="number" name="inflation" value="<?php echo htmlspecialchars($_POST['inflation']); ?>" step=".01"> <br></td>
          </tr>
          <tr>
            <td><div class="tooltip">Jährl. Strompreisanstieg in %:<span class="tooltiptext">Pro Jahr im Schnitt 2,5-3,5%</span></div></td>
            <td><input type="number" name="strompreisanstieg" value="<?php echo htmlspecialchars($_POST['strompreisanstieg']); ?>" step=".001"> <br></td>
          </tr>
        </table>

<br><br>
        <table>
          <tr>
            <th width = 220>Hausverbrauch</th>
            <th></th>
          </tr>
          <tr>
            <td> <div class="tooltip">kWh je Jahr:<span class="tooltiptext">Generell: etwa 1200 kWh je im Haushalt lebende Person + 500</span></div></td>
            <td><input type="number" name="kWhverbrauch" value="<?php echo htmlspecialchars($_POST['kWhverbrauch']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Autarkiequote in %:<span class="tooltiptext">Anteil, den man selbst vom eigenen Dach bezieht (ohne E-Auto). <br>Je nach eigenem Verbrauchsverhalten liegt dieser Wert zwischen 20-50%.</span></div></td>
            <td><input type="number" name="autarkiequote" value="<?php echo htmlspecialchars($_POST['autarkiequote']); ?>" step=".01"> <br></td>
          </tr>
        </table>
<br><br>
        <table>
          <tr>
            <th width = 220>E-Auto</th>
            <th><input type="checkbox" name="caryesno" checked="on"></th>
          </tr>
          <tr>
            <td> <div class="tooltip">Gefahrene Km p.a.:<span class="tooltiptext">Durchschnitt: 11.500 Km je KFZ</span></div></td>
            <td><input type="number" name="kilometer" value="<?php echo htmlspecialchars($_POST['kilometer']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Davon vom eigenen Dach in %:<span class="tooltiptext">Entsprechendes Ladeverhalten kann dazu führen, dass 60-80% des gesamten Verbrauchs durch die Solarenergie "getankt" werden kann.</span></div></td>
            <td><input type="number" name="zhsgeladen" value="<?php echo htmlspecialchars($_POST['zhsgeladen']); ?>" step=".01"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">KWh je 100 km:<span class="tooltiptext">Der Verbauch von E-Autos liegt zwischen 14-20 kWh je 100 Km.</span></div></td>
            <td><input type="number" name="kwheauto100km" value="<?php echo htmlspecialchars($_POST['kwheauto100km']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Akkugröße:<span class="tooltiptext">Der Akku des E-Autos, das sie sich anschaffen würden.</span></div></td>
            <td><input type="number" name="akkugröße" value="<?php echo htmlspecialchars($_POST['akkugröße']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Liter auf 100 km:<span class="tooltiptext">Durchschnittlich verbraucht ein Benziner 7-8 Liter auf 100 Kilometer.</span></div></td>
            <td><input type="number" name="literauto100km" value="<?php echo htmlspecialchars($_POST['literauto100km']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Spritpreis je l:<span class="tooltiptext">Je nach Treibstoff zwischen 1,10-1,30 Euro pro Liter.</span></div></td>
            <td><input type="number" name="spritpreis" value="<?php echo htmlspecialchars($_POST['spritpreis']); ?>" step=".01"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Tankgröße:<span class="tooltiptext">Wie groß ist der Tank ihres Autos?</span></div></td>
            <td><input type="number" name="tank" value="<?php echo htmlspecialchars($_POST['tank']); ?>"> <br></td>
          </tr>
        </table>
<br><br>

        <table>
          <tr>
            <th width = 220>Speicher</th>
            <th></th>
          </tr>
          <tr>
            <td> <div class="tooltip">Gesamtkosten:<span class="tooltiptext">Derzeit kostet ein Speicher zwischen 800-1.200 Euro je installierter kWh.</span></div></td>
            <td><input type="number" name="speicherkosten" value="<?php echo htmlspecialchars($_POST['speicherkosten']); ?>"> <br></td>
          </tr>
          <tr>
            <td>Kapazität</td>
            <td><input type="number" name="speicherkapa" value="<?php echo htmlspecialchars($_POST['speicherkapa']); ?>" step=".01"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Ladezyklen p.a.:<span class="tooltiptext">Je nach Anlagengröße, Verbrauch, Verbrauchsverhalten & Speichergröße sind zwischen 125-200 Zyklen pro Jahr realistisch.</span></div></td>
            <td><input type="number" name="speicherladzy" value="<?php echo htmlspecialchars($_POST['speicherladzy']); ?>" step=".01"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Lebensdauer Akku:<span class="tooltiptext">Die Lebensdauer eines Hausspeichers liegt regulär bei unter 10 Jahren.</span></div></td>
            <td><input type="number" name="speicherleben" value="<?php echo htmlspecialchars($_POST['speicherleben']); ?>" step=".01"> <br></td>
          </tr>
        </table>
<br><br>
        <table>
          <tr>
            <th  width = 220>Betrachtungszeitraum</th>
          </tr>
          <tr>
            <td> <div class="tooltip">Jahre:<span class="tooltiptext">Die Einspeisevergütung wird 20 Jahre gezahlt.</span></div></td>
            <td><input type="number" name="jahre1" value="<?php echo htmlspecialchars($_POST['jahre1']); ?>"> <br></td>
          </tr>
          <tr>
            <td> <div class="tooltip">Vergütung nach 20 Jahren:<span class="tooltiptext">Was glauben Sie, was sie in 20 Jahren je kWh bekommen?</span></div></td>
            <td><input type="number" name="nachverguetung" value="<?php echo htmlspecialchars($_POST['nachverguetung']); ?>" step=".001"> <br></td>
          </tr>
        </table>

<input type="submit">
      </form>
      <br>

      <?php

      /*$caryesno = $_POST["caryesno"];   ---- TBD*/

      /*Errorhandler*/
      if ($kWp <= 0 || empty($kWp)) {
          $kWp = 10;
          echo "Ungültige Anlagengröße. 10 kWp angenommen. <br>";
        }
      if ($NP <= 0 || empty($NP)) {
          $NP = 0.30;
          echo "Netzbezugspreis darf nicht Null sein, 0.30€ je kWh wurde angenommen. <br>";
        }
      if ($EE <= 0 || empty($EE)) {
          $EE = 0.734;
          echo "Einspeisevergütung darf nicht Null sein, 0.734€ je kWh wurde angenommen. <br>";
        }
      if ($efffactor > 100 || $efffactor <= 0 || empty($efffactor)) {
            $efffactor = 0.95;
            echo "Fehlerhafter Effizienzfaktor, 95% wurde angenommen. <br>";
          }
      if (empty($kilometer)) {
            $kilometer = 25000;
            echo "Fehlerhafte Kilometerangabe, 25.000 km p.a. wurde angenommen. <br>";
          }
      if ($zhsgeladen > 100 || $zhsgeladen <= 0 || empty($zhsgeladen)) {
            $zhsgeladen = 0.70;
            echo "Fehlerhafter Wert bei Angabe der zuhause geladenen Kilometer, 70% wurde angenommen. <br>";
          }
      if ($kwheauto100km < 0 || $kwheauto100km > 40 ) {
            $kwheauto100km = 17;
            echo "Fehlerhafter Wert bei Angabe des Verbrauchs des E-Autos, 17 kWh je 100 km wurde angenommen. <br>";
          }
      if ($literauto100km < 0 || $literauto100km > 20 ) {
            $literauto100km = 17;
            echo "Fehlerhafter Wert bei Angabe des Verbrauchs des Verbrenners, 8 Liter je 100 km wurde angenommen. <br>";
          }
      if ($spritpreis < 0) {
            $spritpreis = 1.59;
            echo "Fehlerhafter Wert bei Angabe des Sprittpreises, 1.50 je Liter wurde angenommen. <br>";
          }
      /*if (Empty($caryesno)) {
            $caryesno = unchecked;
          }*/ /*---- tbd*/
      if ($speicherladzy < 0 || empty($speicherladzy)) {
            $speicherladzy = 175;
            echo "Fehlerhafter Wert bei Angabe der Ladezyklen, 175 wurde angenommen. <br>";
          }
      if ($speicherleben < 0 || empty($speicherleben)) {
            $speicherleben = 10;
            echo "Fehlerhafter Wert bei Angabe der Lebensdauer des Speichers, 10 Jahre wurden angenommen. <br>";
          }
      if ($speicherkapa < 0 || empty($speicherkapa)) {
            $speicherkapa = 5;
            echo "Fehlerhafter Wert bei Angabe der Speicherkapazität, 5 kWh wurden angenommen. <br>";
          }
      if ($speicherkosten < 0 || empty($speicherkosten)) {
            $speicherkosten = 5000;
            echo "Fehlerhafter Wert bei Angabe der Speicherkosten, 5000€ wurden angenommen. <br>";
          }
      if ($jahre1 > 20) {
          $jahre2 = $jahre1 - 20;
          $jahre1 = 20;
        }
        else {$jahre2 = 0;}
      if ($tank <= 0 || empty($tank)) {
          $tank = 60;
          echo "Fehlerhafter Wert bei Angabe der Tankgröße, 60 Liter wurden angenommen.<br>";
        }
      if ($akkugröße <= 0 || empty($akkugröße)) {
          $akkugröße = 50;
          echo "Fehlerhafter Wert bei Angabe der Akkugröße des E-Autos, 50 kWh wurden angenommen.<br>";
        }
      if ($autarkiequote > 100 || $autarkiequote <= 0 || empty($autarkiequote)) {
          $autarkiequote = 0.40;
          echo "Fehlerhafter Wert bei Angabe der Autarkiequote, 40% wurde angenommen. <br>";
        }
      if ($inflation > 100 || $inflation <= 0 || empty($inflation)) {
          $inflation = 0.02;
          echo "Fehlerhafter Wert bei Angabe der Inflation, 2% wurde angenommen. <br>";
        }
      if ($strompreisanstieg > 100 || $strompreisanstieg <= 0 || empty($strompreisanstieg)) {
          $strompreisanstieg = 0.035;
          echo "Fehlerhafter Wert bei Angabe des Strompreisanstiegs, 3.5% wurde angenommen. <br>";
        }

        /*Prozentangaben 0-1*/

      $autarkiequote = $autarkiequote / 100;
      $inflation = $inflation / 100;
      $zhsgeladen = $zhsgeladen / 100;
      $efffactor = $efffactor / 100;

      /*Rechnen lassen*/
      /*Grundinfotmationen*/
      $kWh = $kWp*1000*$efffactor;
      $stromverbrauchsersparnis = $autarkiequote * $kWhverbrauch;
      $einspeiseverguetung = $kWh * $EE;
      $Anlagetotal = $einspeiseverguetung + $stromverbrauchsersparnis;

      /*Auto*/
      $emobilitaettotal = $kilometer/100 * $zhsgeladen * $kwheauto100km * $EE + $kilometer/100 * (1-$zhsgeladen) * $kwheauto100km * $NP;
      $verbrennermobilitaet = $kilometer / 100 * $literauto100km * $spritpreis;
      $umstiegersparnis = $verbrennermobilitaet - $emobilitaettotal;
      $dachtanken = $kilometer/100 * $zhsgeladen * $kwheauto100km * $EE;
      $netztanken = $kilometer/100 * (1-$zhsgeladen) * $kwheauto100km * $NP;
      $restleinspeiseverguetung = $einspeiseverguetung - $dachtanken;
      $kWhmobilitaet = $kilometer/100 * $zhsgeladen * $kwheauto100km;
      $zhsgeladenproz = $zhsgeladen*100;
      $woandersgeladproz = (1-$zhsgeladen)*100;
      $tankvorgaenge = $kilometer / 100 * $literauto100km / $tank;
      $tankdauer = 5 * $kilometer / 100 * $literauto100km / $tank / 60;
      $ladedauer = 20 * (1-$zhsgeladen) * $tankvorgaenge  / 60;

      /*Speicher*/
      $speicherersparnis = $speicherladzy * $speicherkapa * $NP;
      $speicherereinspverluste = $speicherkapa * $speicherladzy * $EE * 0.10;
      $speichererentggewinn = $speicherladzy * $speicherleben * $EE;
      $speichertotalpa = $speicherersparnis - $speicherereinspverluste - $speichererentggewinn;
      $speichergewver = ($speichertotalpa * $speicherleben) - $speicherkosten;
      if ($speichergewver < 0) {$gewver = "Verlust";}
        else {$gewver = "Gewinn";}
      $gesamtzyklen = $speicherladzy * $speicherleben;

      /*Totalberechnung*/
      $totalsolar = $jahre1 * $EE * $kWh + $jahre2 * $nachverguetung * $kWh * 0.90;
      $totaljahre = $jahre1 + $jahre2;
      $totalumstiegsersparnis = $umstiegersparnis * $totaljahre;
      $restleinspeiseverguetungjahre = $restleinspeiseverguetung * ($jahre1 + $jahre2);
      $totalersparnis = $totalumstiegsersparnis + $restleinspeiseverguetungjahre;

      /*Aufziehen auf Jahre*/
      $restleinspeiseverguetung10 = $restleinspeiseverguetung*10;
      $umstiegersparnis10 = $umstiegersparnis*10;
      if ($speichergewver > 0) {
              $akkuersparnis10 = $speichergewver*10;
            }
          else {$akkuersparnis10 = 0;}
      $restleinspeiseverguetung20 = $restleinspeiseverguetung*20;
      $umstiegersparnis20 = $umstiegersparnis*20;
      if ($speichergewver > 0) {
               $akkuersparnis20 = $speichergewver*20;
             }
          else {$akkuersparnis20 = 0;}
      $restleinspeiseverguetung30 = $restleinspeiseverguetung*30;
      $umstiegersparnis30 = $umstiegersparnis*30;
      if ($speichergewver > 0) {
               $akkuersparnis30 = $speichergewver*30;
             }
          else {$akkuersparnis30 = 0;}
      $stromverbrauchsersparnis10 = $stromverbrauchsersparnis*10;
      $stromverbrauchsersparnis20 = $stromverbrauchsersparnis*20;
      $stromverbrauchsersparnis30 = $stromverbrauchsersparnis*30;
      $total10 = $stromverbrauchsersparnis10 + $umstiegersparnis10 +  $restleinspeiseverguetung10;
      $total20 = $stromverbrauchsersparnis20 + $umstiegersparnis20 +  $restleinspeiseverguetung20;
      $total30 = $stromverbrauchsersparnis30 + $umstiegersparnis30 +  $restleinspeiseverguetung30;
      $total10inf = $total10 / (1+$inflation)^10;
      $total20inf = $total20 / (1+$inflation)^20;
      $total30inf = $total30 / (1+$inflation)^30;
      $Investition10inf = $total10inf - $Investition;
      $Investition30inf = $total20inf - $Investition;
      $Investition20inf = $total30inf - $Investition;

        /*Format anpassen*/
      $kWh = number_format($kWh);
      $kilometer = number_format($kilometer);
      $emobilitaettotal = number_format($emobilitaettotal,2);
      $verbrennermobilitaet = number_format($verbrennermobilitaet,2);
      $umstiegersparnis = number_format($umstiegersparnis,2);
      $speicherersparnis = number_format($speicherersparnis,2);
      $speicherereinspverluste = number_format($speicherereinspverluste,2);
      $speichererentggewinn = number_format($speichererentggewinn,2);
      $speichertotalpa = number_format($speichertotalpa,2);
      $speichergewver = number_format($speichergewver,2);
      $stromverbrauchsersparnis = number_format($stromverbrauchsersparnis,2);
      $einspeiseverguetung = number_format($einspeiseverguetung,2);
      $restleinspeiseverguetung = number_format($restleinspeiseverguetung,2);
      $totalsolar = number_format($totalsolar,2);
      $totalumstiegsersparnis = number_format($totalumstiegsersparnis,2);
      $Anlagetotal = number_format($Anlagetotal,2);
      $tankdauer = number_format($tankdauer,2);
      $ladedauer = number_format($ladedauer,2);
      $restleinspeiseverguetungjahre = number_format($restleinspeiseverguetungjahre,2);
      $totalersparnis = number_format($totalersparnis,2);
      $totalersparnis = number_format($stromverbrauchsersparnis10,2);
      $totalersparnis = number_format($stromverbrauchsersparnis20,2);
      $totalersparnis = number_format($stromverbrauchsersparnis30,2);
      $restleinspeiseverguetung10 = number_format($restleinspeiseverguetung10,2);
      $restleinspeiseverguetung20 = number_format($restleinspeiseverguetung20,2);
      $restleinspeiseverguetung30 = number_format($restleinspeiseverguetung30,2);
      $stromverbrauchsersparnis10 = number_format($stromverbrauchsersparnis10,2);
      $stromverbrauchsersparnis20 = number_format($stromverbrauchsersparnis20,2);
      $stromverbrauchsersparnis30 = number_format($stromverbrauchsersparnis30,2);
      $total10 = number_format($total10,2);
      $total20 = number_format($total20,2);
      $total30 = number_format($total30,2);
      $total10inf = number_format($total10inf,2);
      $total20inf = number_format($total20inf,2);
      $total30inf = number_format($total30inf,2);
      $Investition10inf = number_format($Investition10inf,2);
      $Investition20inf = number_format($Investition20inf,2);
      $Investition30inf = number_format($Investition30inf,2);

      ?>
<br><br>
      <table>
        <tr><th width = 200>Grundinformationen: </th></tr>
        <tr>
          <td width = 150>kWh pro Jahr:</td>
          <td><?php echo "$kWh" ?></td>
        </tr>
        <tr>
          <td>Sparen bei <?php echo "$autarkiequote%" ?> Deckung:</td>
          <td><?php echo "$stromverbrauchsersparnis €" ?></td>
        </tr>
        <tr>
          <td>Einspeisevergütung:</td>
          <td><?php echo "$einspeiseverguetung €" ?></td>
        </tr>
        <tr>
          <td><b>Gesamt:</b></td>
          <td><b><?php echo "$Anlagetotal €" ?></b></td>
        </tr>
      </table>
<br><br>

      <table>
        <tr>
          <th width = 200></th>
          <th width = 100>E-Auto:</th>
          <th></th>
          <th width = 100>Verbrenner:</th>
          <th width = 150>Ersparnis:</th>
        </tr>
        <tr>
          <td>
        <div class="tooltip">Ladedauer/Tankzeit:<span class="tooltiptext">Wie viele Stunden sie im Jahr mit Tanken/Laden verbringen - Grundlage sind 20 Min je Schnelladevorgang, 5 min je Tankvorgang.</span></div></td>
          <td>  <?php echo "$ladedauer" ?> h</td>
          <td></td>
          <td>  <?php echo "$tankdauer" ?> h</td>
          <td></td>
        </tr>
        <tr>
          <td>Zuhaus geladen:</td>
          <td> <?php echo "$dachtanken" ?> €</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Unterwegs geladen:</td>
          <td> <?php echo "$netztanken" ?> €</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><b>Kosten für <?php echo "$kilometer" ?> km:</b></td>
          <td><b> <?php echo "$emobilitaettotal" ?> €</b></td>
          <td></td>
          <td><b> <?php echo "$verbrennermobilitaet" ?> €</b></td>
          <td><b><?php echo "$umstiegersparnis" ?></b> €</td>
        </tr>
      </table>

      <br><br>

    <table>
      <tr>
        <th width = 200>Akku:</th>
        <th width = 150></th>
      </tr>
      <tr>
        <td>Ersparnis pro Jahr:</td>
        <td> <?php echo "$speicherersparnis" ?> €</td>
      </tr>
      <tr>
        <td>Ladeverluste:</td>
        <td> <?php echo "$speicherereinspverluste" ?> €</td>
      </tr>
      <tr>
        <td>Weniger Einspeisevergütung:</td>
        <td> <?php echo "$speichererentggewinn" ?> €</td>
      </tr>
      <tr>
        <td><b>Nettoersparnis pro Jahr:</b></td>
        <td><b> <?php echo "$speichertotalpa " ?> €</b></td>
      </tr>
      <tr>
        <td><b>
          </b>
          <div class="tooltip">Max. mögliche Ersparnis:<span class="tooltiptext">Basierend auf einer max. Lebensdauer des Speichers von <?php echo "$gesamtzyklen" ?> Zyklen über <?php echo "$speicherleben" ?> Jahre.</span></div>
        </td>
        <td><b> <?php echo "$speichergewver" ?> €</b></td>
        <td><b> <?php echo "$gewver" ?> €</b></td>
      </tr>
    </table>

<br><br><br>

    <table>
      <tr>
        <th width = 200>Pro Jahr</th>
        <th width = 150>Nach 10 Jahren</th>
        <th width = 150>Nach 20 Jahren</th>
        <th width = 150>Nach 30 Jahren</th>
      </tr>
      <tr>
        <td>Einspeisevergütung</td>
        <td><?php echo"$restleinspeiseverguetung10"; ?>€ </td>
        <td><?php echo"$restleinspeiseverguetung20"; ?>€ </td>
        <td><?php echo"$restleinspeiseverguetung30"; ?>€ </td>
      </tr>
      <tr>
        <td>Eigenverbrauch</td>
        <td><?php echo"$stromverbrauchsersparnis10"; ?>€ </td>
        <td><?php echo"$stromverbrauchsersparnis20"; ?>€ </td>
        <td><?php echo"$stromverbrauchsersparnis30"; ?>€ </td>
      </tr>
      <tr>
        <td>E-Auto:</td>
        <td><?php echo"$umstiegersparnis10"; ?>€ </td>
        <td><?php echo"$umstiegersparnis20"; ?>€ </td>
        <td><?php echo"$umstiegersparnis30"; ?>€ </td>
      </tr>
      <tr>
        <td>Akku:</td>
        <td><?php echo"$akkuersparnis10"; ?>€ </td>
        <td><?php echo"$akkuersparnis20"; ?>€ </td>
        <td><?php echo"$akkuersparnis30"; ?>€ </td>
      </tr>
      <tr>
        <td>Total:</td>
        <td><?php echo"$total10"; ?>€ </td>
        <td><?php echo"$total20"; ?>€ </td>
        <td><?php echo"$total30"; ?>€ </td>
      </tr>
      <tr>
        <td>Total nach Inflation:</td>
        <td><?php echo"$total10inf"; ?>€ </td>
        <td><?php echo"$total20inf"; ?>€ </td>
        <td><?php echo"$total30inf"; ?>€ </td>
      </tr>
      <tr>
        <td>Abzüglich der Investition:</td>
        <td><?php echo"$Investition10inf"; ?>€ </td>
        <td><?php echo"$Investition20inf"; ?>€ </td>
        <td><?php echo"$Investition30inf"; ?>€ </td>
      </tr>

    </table>

      <style>
      /* Tooltip container */
      .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
      }

      /* Tooltip text */
      .tooltip .tooltiptext {
        visibility: hidden;
        width: 200px;
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 5px 0;
        border-radius: 6px;


        position: absolute;
        z-index: 1;
      }

      /* Show the tooltip text when you mouse over the tooltip container */
      .tooltip:hover .tooltiptext {
        visibility: visible;
      }
      </style>

  </body>
</html>

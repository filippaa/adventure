<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Äventyret</h1>

<?php
/** Kolla om query string parametern (GET parametern) är (==) tom (NULL)
 *	I fall att den är tom visas ett formulär som ber besökaren fylla i sitt namn
 */
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
/** Annars om GET parametern "page" är lika med 1
 *	Visas den första 'sidan' med beskrivning av omgivningen och 
 *	ett formulär för att komma vidare
 */
elseif ($_GET['page'] == 1):
?>
<h2>Hej <? echo $_GET['player_name'] ?></h2>
<p>Du vaknar upp helt ensam i en mörk  skog. Du vet inte var du är eller hur du hamnade där och nu måste du försöka ta dig hem. Till väster ser du en sjö med en liten strand och en lång brygga. Från stranden går det en stig till en gammal stuga som du kommer till om du går norrut. Bakom dig hör du ett knakande ljud, du måste snabbt bestämma dig vad du ska göra. </p>
<img src="bilder/forest.jpg">
<form action="index.php">
	<label>Åt vilket håll går du?</label><br>

	<input type="radio" name="page" value="2" id="west">
	<label for="west">Väster mot sjön</label><br>

	<input type="radio" name="page" value="3" id="north">
	<label for="north">Norr till stugan</label><br>

	<input type="radio" name="page" value="4" id="east">
	<label for="east">Öster,bara skog</label><br>

	<input type="radio" name="page" value="5" id="south">
	<label for="south">Söder, kanske det som låter är en människa som kan hjälpa dig? </label><br>

	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 2):
?>
<h2>Sjön</h2>
<p>Stupido</p>
<img src="bilder/voor.jpg">


<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 3):
?>
<h2>Stugan</h2>
<p>Gå in, you know you want to</p>
<img src="bilder/stuga.jpg">
<form action="index.php">
	<label>Åt vilket håll går du?</label><br>

	<input type="radio" name="page" value="8" id="inside">
	<label for="inside">in</label><br>

	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidanHar du inte lärt dig ngt av livet, man går inte in i en övergiven stuga i skogen
 */
elseif ($_GET['page'] == 4):
?>
<h2>Skog</h2>
<p></p>
<img src="bilder/forest.jpg">
<form action="index.php">
	<label>Åt vilket håll går du?</label><br>

	<input type="radio" name="page" value="10" id="west">
	<label for="west">Väster</label><br>

	<input type="radio" name="page" value="11" id="north">
	<label for="north">Norr</label><br>
	
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 5):
?>
<h2>idiot</h2>
<p>du är nu extremt död</p>
<img src="bilder/idiot.gif">

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 8):
?>
<h2>inne i stugan</h2>
<p>Har du inte lärt dig ngt av livet, man går inte in i en övergiven stuga i skogen</p>
<img src="bilder/döden.gif">

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidanHar du inte lärt dig ngt av livet, man går inte in i en övergiven stuga i skogen
 */
elseif ($_GET['page'] == 10):
?>
<h2>Skog</h2>
<p>väldigt död</p>
<img src="bilder/dödskog.gif">

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidanHar du inte lärt dig ngt av livet, man går inte in i en övergiven stuga i skogen
 */
elseif ($_GET['page'] == 11):
?>
<h2>Skog</h2>
<p>så död just nu</p>
<img src="bilder/deathforest.gif">


<?php
endif
?>

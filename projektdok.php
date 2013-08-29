<?php
//===================================================
//File: index.php
//Desc: Holds the report information
//Author: Freddy
//Created: 30/04 - 2013
//===================================================


//---------------------------------------------------
//Basic imports and variable creation.
$pageId = "projektdok";
$title = "Projektdokumentation";
include('incl/header.php');
include('incl/footer.php');


//---------------------------------------------------
//Creates the basic information of this file
$html = <<<input
<div id="content">
	<h1>Projektdokumentation</h1>
	
		<article>
			<p>
				Det här är projektdokumentationen för mitt projekt med ramverket Drygia som utvecklats ur Lydia.
			</p>
			<h3>K1</h3>
			<p>
				Ramverket finns att ladda ner på github från adressen https://github.com/FreKil/Projekt_Drygia.git.
				Ramverket ligger till skillnad från tidigare inte tillsammans med min ME-sida eftersom det ska kunna laddas ner och användas separat.
				Utöver det finns lite information om hur ramverket ska skötas i själva readme.md filen som ligger i rooten på ramverket. Den kan även läsas direkt från github.com
			</p>
			<h3>K3</h3>
			<p>	
				Den här referensinstallationen använder sig av ett tema som ligger i mappen site/themes/mytheme.
				Den skiljer sig något från lydias standardtema då den har andra färger och fonter samt att utseendet på navigationsmenyn är annorlunda. 
				När man laddar ner ramverket är det dock detta tema som är aktiverat. För att gå tillbaka till standardtemat måste man ändra det i config.php-filen som ligger under site.
				Allt utseende på ramverket ändras i style.css filen för respektive tema förutom viss information om header, footer som ändras i config.php där även vilket tema som ska användas kan anges.
				För mer information om hur detta går till se readme.md som ligger i rooten på ramverket.
				Där ges en mera utförlig information om hur installation och vissa av ändringarna man kan göra går till. 
			</p>
			<h3>Tankar om ramverket</h3>
			<p>
				Drygia är till största delen en kopia av Lydia.<br /> 
				Vissa mindre förändringar har gjort under genomgången av guiden men ingenting som direkt gör någon större skillnad annat än kosmetiskt.
			</p>
			<p>
				Överlag tycker jag väl att drygia fungerar ok som ett första ramverk och med den tiden som lagts ner på det. Vissa saker bör nog byggas på lite mera samt ändras för att det ska anses mera komplett av mig. Bland annat hade jag nog lagt till ett bättre sätt att lägga till menyerna på än i config -filen. Gärna kopplat till de olika teman man har för att snabbt kunna ändra dessa utan att behöva ändra för mycket i config-filen. 
			</p>
			<p>
				Utöver det så hade jag nog strukturerat vissa saker lite annorlunda än hur det är gjort i Lydia. För närvarande finns det vissa saker som placerats lite underligt till enligt mig vilket jag hade ändrat på om jag skulle återuppta arbetet med mitt ramverk. Har inte riktigt velat göra några större egna ändringar under guidens gång eftersom man inte riktigt vet vad som kommer ändras i framtida kursmoment. Man riskerar då bara en hel del strul.
			</p>
			<p>
				Eftersom jag aldrig tidigare jobbat med med MVC-ramverk så har jag lite svårt att komma på, vad som utöver det jag redan nämnt, kan tänkas behöva läggas till eller ändras. Detta är nog något som man upptäcker när man arbetar mer med ramverket för att bygga webbapplikationer. På så vis märker man vad som skulle behöva läggas till för att ramverket ska fungera smidigare.
			</p>
		</article>
	
</div>
input;


//---------------------------------------------------
//Prints out this page.
echo $headInfo. $bannerInfo . $html . $footer;
?>
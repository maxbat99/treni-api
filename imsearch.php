<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="it-IT" dir="ltr">
	<head>
		<title>Ricerca - italo </title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Evo 2024.4.11 - www.websitex5.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2024-4-11-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2024-4-11-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2024-4-11-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2024-4-11-0" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?2024-4-11-0-638876974824098469" media="screen,print" />
		<script src="res/jquery.js?2024-4-11-0"></script>
		<script src="res/x5engine.js?2024-4-11-0" data-files-version="2024-4-11-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Il Browser che stai utilizzando non supporta le funzionalità richieste per visualizzare questo Sito.','Il Browser che stai utilizzando potrebbe non supportare le funzionalità richieste per visualizzare questo Sito.','[1]Aggiorna il tuo browser[/1] oppure [2]procedi ugualmente[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Ricerca - italo </h1>
						<div id="imHeaderObjects"><div id="imHeader_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_01"><div id="imHeader_imObjectImage_01_container"><img src="images/Immagine-2025-06-25-193403.png" title="" alt="" width="311" height="61" />
</div></div></div><div id="imHeader_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_02"><div id="imHeader_imObjectImage_02_container"><img src="images/Immagine-2025-06-29-202948_wl3mvqac.png" title="" alt="" width="51" height="46" />
</div></div></div><div id="imHeader_imObjectImage_03_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_03"><div id="imHeader_imObjectImage_03_container"><img src="images/Immagine-2025-06-29-201711.png" title="" alt="" width="105" height="54" />
</div></div></div><div id="imHeader_imObjectImage_04_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_04"><div id="imHeader_imObjectImage_04_container"><img src="images/Immagine-2025-06-29-201545.png" title="" alt="" width="57" height="57" />
</div></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Salta il menu di navigazione">Vai ai contenuti</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imSearchPage">
						<h2 id="imPgTitle">Risultati della ricerca</h2>
						<?php
						$search = new imSearch();
						$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search'], ENT_COMPAT) : "";
						$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
						$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
						<div class="searchPageContainer">
						<?php echo $search->search($keys, $page, $type); ?>
						</div>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectImage_01"><div id="imFooter_imObjectImage_01_container"><img src="images/Immagine-2025-07-01-000455.png" title="" alt="" width="393" height="226" />
</div></div></div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Rileggi i contenuti della pagina">Torna ai contenuti</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Per poter utilizzare questo sito è necessario attivare JavaScript.</div></noscript>
	</body>
</html>

<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/theme-<?=$th?>.css"/>
	<link rel="stylesheet" href="css/all.css"><!--Font Awesome v.5.12.0-->
	<script defer src="script.js"></script>

	<title><?=$title?></title>
	<meta name="description" content="Learn commands from the GNU Linux, Windows command prompt, MS-DOS prompt and PowerShell"/>
	<meta name="keywords" content="cmd.sh, cmd_site, cmd, 
	command-line interface, cli, console, terminal, shell, interpreter,
	bash, command prompt, cmd.exe, ms-dos prompt, command.com, powershell,
	gnu linux, linux, windows, dos, ms-dos, pc-dos, freedos, dosbox,
	wiersz poleceń, konsola, powłoka, tryb ms-dos"/>
</head>
<body onscroll="markAnchor()">
	<header>
		<div id="header-content">
			<h1>
				<a id="menu" title="Menu" onclick="changeMenu()">
					<i class="fa fa-list-ul fa-fw"></i>
				</a>
			</h1>
			<h1>
				<a href="index.php">
					<span style="font-family: 'Perfect DOS VGA 437'">&gt;</span>_cmd-line.com
				</a>
			</h1>
			<!-- <i class="fa fa-terminal"></i> -->
			<ul>
				<li>
					<a href="how-to.php<?=$suffix?>">
						<i class="far fa-lightbulb"></i>
						<span class="mobile-invisible">how to...</span>
					</a>
				</li><li>
					<a href="linux.php<?=$suffix?>">
						<i class="fab fa-linux"></i>
						<span class="mobile-invisible">linux</span>
					</a>
				</li><li>
					<a href="win-dos.php<?=$suffix?>">
						<i class="fab fa-windows"></i>
						<span class="mobile-invisible">win cmd / DOS</span>
					</a>
				</li><li>
					<a href="powershell.php<?=$suffix?>">
						<i class="fa fa-terminal"></i>
						<span class="mobile-invisible">PowerShell</span>
					</a>
				</li><li tabindex="0">
					<a>
						<i class="fa fa-globe-americas"></i>
						<span class="mobile-invisible"><?=$language?></span>
					</a>
					<ul class="dropdown-list" id="language-list">
						<li>
							<a href="?lang=en&th=<?=$th?>">
								<img src="img/uk.png" alt="UK"/>
								<span>English</span>
							</a>
						</li>
						<li>
							<a href="?lang=pl&th=<?=$th?>">
								<img src="img/polska.png" alt="Polska"/>
								<span>polski</span>
							</a>
						</li>
					</ul>
				</li><li tabindex="0">
					<a>
						<i class="fa fa-adjust"></i>
						<span class="mobile-invisible"><?=$theme?></span>
					</a>
					<ul class="dropdown-list" id="theme-list">
						<li>
							<a href="?lang=<?=$lang?>&th=light">
								<div style="background-color: #eee; color: #000"></div>
								<span><?=$modernLight?></span>
							</a>
						</li>
						<li>
							<a href="?lang=<?=$lang?>&th=blue">
								<div style="background-color: #00a; color: #fff;"></div>
								<span><?=$dosBlueGray?></span>
							</a>
						</li>
						<li>
							<a href="?lang=<?=$lang?>&th=gray">
								<div style="background-color: #aaa; color: #fff;"></div>
								<span><?=$dosGrayBlue?></span>
							</a>
						</li>
						<li>
							<a href="?lang=<?=$lang?>&th=dark">
								<div style="background-color: #000; color: #fff;"></div>
								<span><?=$terminalDark?></span>
							</a>
						</li>
					</ul>
				</li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
		</div>
	</header>
	<div id="wrapper">

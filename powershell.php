<?php
	include "sys.php";
	$title = $cmd . " PowerShell";
	include "header.php";
	include "nav-powershell.php";
?>

<h2><i class="fa fa-terminal"></i> PowerShell</h2>
<section>
	<article id="introduction">
		<hr>
		<h3><i class="far fa-play-circle"></i> <?=$introduction?></h3>
		<hr>
		<h4>How to run PowerShell in Windows 7, 8, 10?</h4>
			<li>Start > write <em>powershell</em></li>
			<li>Start > PowerShell</li>
		</ol>
	</article>
	<article id="commands">
		<hr>
		<h3><i class="fa fa-question fa-fw"></i> <?=$commands?></h3>
		<hr>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Get-Help</td>
				<td>help, man</td>
				<td>help</td>
				<td>man</td>
				<td>display command help</td>
			</tr>
			<tr>
				<td>Get-Command</td>
				<td>gcm</td>
				<td>help</td>
				<td>which</td>
				<td>lists the available commands</td>
			</tr>
		</table>
	</article>
	<article id="browsing-directories">
		<hr>
		<h3><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></h3>
		<hr>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Get-Location</td>
				<td>gl, cd, pwd</td>
				<td>cd</td>
				<td>pwd</td>
				<td>display path to current directory</td>
			</tr>
			<tr>
				<td>Get-ChildItem</td>
				<td>gci, dir, ls</td>
				<td>dir</td>
				<td>ls</td>
				<td>returns all objects in the current location (e.g. files in the current directory)</td>
			</tr>
			<tr>
				<td>Set-Location</td>
				<td>sl, cd, chdir</td>
				<td>cd, chdir</td>
				<td>cd</td>
				<td>changes the current location (directory, registry hive, certificate repository)</td>
			</tr>
		</table>
	</article>
	<article id="folders-files-manipulation">
		<hr>
		<h3><i class="far fa-copy fa-fw"></i> <?=$foldersFilesManipulation?></h3>
		<hr>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Copy-Item</td>
				<td>cpi, copy, cp</td>
				<td>copy</td>
				<td>cp</td>
				<td>copies objects (e.g. files) or a structure fragment (e.g. directory tree)</td>
			</tr>
			<tr>
				<td>Move-Item</td>
				<td>mvi, move, mv</td>
				<td>move</td>
				<td>mv</td>
				<td>moves file / directory to new location</td>
			</tr>
			<tr>
				<td>Rename-Item</td>
				<td>rni, ren</td>
				<td>ren, rename</td>
				<td>mv</td>
				<td>renames an object (file, directory, etc.)</td>
			</tr>
			<tr>
				<td>Remove-Item</td>
				<td>ri, del, rd, rmdir, rm</td>
				<td>del, erase, rd, rmdir</td>
				<td>rm, rmdir</td>
				<td>deletes an object (file, directory, etc.)</td>
			</tr>
		</table>
	</article>
	<article id="reading-files">
		<hr>
		<h3><i class="far fa-file-alt"></i> <?=$readingFiles?></h3>
		<hr>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Get-Content</td>
				<td>gc, type, cat</td>
				<td>type</td>
				<td>cat</td>
				<td>display the content of an object (e.g. a file)</td>
			</tr>
		</table>
	</article>
	<article id="console">
		<hr>
		<h3><i class="fa fa-terminal fa-fw"></i> <?=$console?></h3>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Clear-Host</td>
				<td>cls, clear</td>
				<td>cls</td>
				<td>clear</td>
				<td>clears the screen</td>
			</tr>
		</table>
	</article>
	<article id="system">
		<hr>
		<h3><i class="fa fa-laptop"></i> system</h3>
		<hr>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Set-Variable</td>
				<td>sv, set</td>
				<td>set</td>
				<td>set</td>
				<td>creates or alters the contents of an environment variable</td>
			</tr>
		</table>
	</article>
	<article id="network">
		<hr>
		<h3><i class="fa fa-globe fa-fw"></i> <?=$network?></h3>
		<hr>
		<!--<ul>
			<li>ipconfig</li>
			<li>ping</li>
			<li>tracert</li>
			<li>route</li>
			<li>netstat</li>
		</ul>-->
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Test-Connection</td>
				<td>ping</td>
				<td>ping</td>
				<td>ping</td>
				<td>sends a ping request (ICMP Echo Request) from the user's computer to a specific device, or issues a command to another device to perform this operation</td>
			</tr>
			<tr>
				<td>Invoke-WebRequest</td>
				<td>iwr, curl, wget</td>
				<td></td>
				<td>curl, wget</td>
				<td>downloads the content of the website</td>
			</tr>
		</table>
	</article>
	<article id="processes">
		<hr>
		<h3><i class="fa fa-list-ul"></i> <?=$processes?></h3>
		<hr>
		<table>
			<tr>
				<th colspan="2">PowerShell</th>
				<th rowspan="2">cmd.exe /<br>COMMAND.COM</th>
				<th rowspan="2">linux<br>(bash)</th>
				<th rowspan="2">description</th>
			</tr>
			<tr>
				<th>cmdlet</th>
				<th>alias</th>
			</tr>
			<tr>
				<td>Get-Process</td>
				<td>gps, ps</td>
				<td>tlist, tasklist</td>
				<td>ps</td>
				<td>lists the currently running processes</td>
			</tr>
			<tr>
				<td>Stop-Process</td>
				<td>sps, kill</td>
				<td>kill, taskkill</td>
				<td>kill</td>
				<td>stops the running process</td>
			</tr>
		</table>
	</article>
</section>

<?php include "footer.php"; ?>
<?php
	include "sys.php";
	$title = $cmd . $home;
	include "header.php";
	include "nav-main.php";
?>

<h2><i class="fa fa-home"></i> <?=$home?></h2>
<hr>

<?php if ($lang == "en") { ?>
<h3>Let's learn the Command-Line Interface!</h3>
<?php } else { ?>
<h3>Zacznijmy naukę wiersza poleceń!</h3>
<?php } ?>
<section>
	<h4><i class="fab fa-linux"></i> GNU Linux (BASH)</h4>
<?php if ($lang == "en") { ?>
	<p>
		GNU Linux is an operating system. In most of the distributions (e.g. <a target="_blank" href="https://ubuntu.com/">Ubuntu</a>, <a target="_blank" href="https://www.linuxmint.com/">Linux Mint</a>), we can use it with CLI (Command-Line Interface) and GUI (Graphical User Interface).
	</p>
	<p>
		If we are just using a GUI, we can use a terminal emulator (pseudoterminal) or go to the CLI.
	</p>
	<p>
		To enter to the CLI (not terminal emulator), press <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Instead of <kbd>F2</kbd> can be <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> or <kbd>F1</kbd>.
	</p>
	<p>
		If you want to go back to the GUI, press <kbd>Alt</kbd> + <kbd>F1</kbd>. Instead of <kbd>F1</kbd> can be <kbd>F6</kbd>, <kbd>F7</kbd> or other function key. You can also quickly switch between instances of the command line with <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> or <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
	</p>
<?php } else { ?>
<<<<<<< HEAD
	<p>
		GNU Linux jest systemem operacyjnym. W większości dystrybucji (np. <a target="_blank" href="https://ubuntu.com/">Ubuntu</a>, <a target="_blank" href="https://www.linuxmint.com/">Linux Mint</a>), możemy korzystać z niego za pomocą wiersza poleceń (CLI - Command-Line Interface) jak i środowiska graficznego (GUI - Graphical User Interface).
	</p>
	<p>
		Jeśli właśnie korzystamy ze środowiska graficznego, możemy użyć emulatora terminala (pseudoterminala) lub przejść do wiersza poleceń.
	</p>
	<p>
		Aby przejść do wiersza poleceń (nie emulatora terminala), wciśnij <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Zamiast <kbd>F2</kbd> może być <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> lub <kbd>F1</kbd>.
	</p>
	<p>
		Jeśli chcesz z powrotem wrócić do środowiska graficznego, wciśnij <kbd>Alt</kbd> + <kbd>F1</kbd>. Zamiast <kbd>F1</kbd> może być <kbd>F6</kbd>, <kbd>F7</kbd> lub inny klawisz funkcyjny. Możemy również szybko przełączać się pomiędzy kolejnymi instancjami wiersza poleceń za pomocą <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> lub <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
	</p>
=======
		<p>
			GNU Linux jest systemem operacyjnym. W większości dystrybucji, możemy korzystać z niego za pomocą wiersza poleceń (CLI - Command-Line Interface) jak i środowiska graficznego (GUI - Graphical User Interface).
		</p>
		<p>
			Jeśli właśnie korzystamy ze środowiska graficznego, możemy użyć emulatora terminala (pseudoterminala) lub przejść do wiersza poleceń.
		</p>
		<p>
<<<<<<< HEAD
			Aby przejść do wiersza poleceń (nie emulatora terminala), wciśnij np. <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Zamiast <kbd>F2</kbd> może być <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> lub <kbd>F1</kbd>.
=======
			Aby przejść do wiersza poleceń (nie emulatora terminala), wciśnij np. <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Zamiast <kbd>F2</kbd> może być <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> or <kbd>F1</kbd>.
>>>>>>> effdb95cbf5e4690d2bb6c5edb7716cd118c20d8
		</p>
		<p>
			Jeśli chcesz z powrotem wrócić do środowiska graficznego, wciśnij np. <kbd>Alt</kbd> + <kbd>F1</kbd>. Zamiast <kbd>F1</kbd> może być <kbd>F6</kbd>, <kbd>F7</kbd> lub inny klawisz funkcyjny. Możemy również szybko przełączać się pomiędzy kolejnymi instancjami wiersza poleceń za pomocą <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> lub <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
		</p>
>>>>>>> 60db6f553fcc2a694704cfd394b4c75285c75011
<?php } ?>

	<?php include "screenshots-txt/linux-intro.html"; ?>



<<<<<<< HEAD
</section>
<hr>
<section>
	<h4><i class="fab fa-windows"></i> Windows CMD / DOS</h4>
<?php if ($lang == "en") { ?>
	
	</p>
	<p>
		Windows is an operating system. Unlike GNU Linux, Windows does not have a CLI mode that works without a GUI. But we can use the command interpreter in the GUI.
	</p>
	<p>
		Cmd.exe is a command interpreter in Windows. Cmd.exe is derived from command.com - a DOS interpreter. Because of this, many cmd.exe commands are compatible with DOS commands.
	</p>
	<p>
		To run cmd.exe, click the Start Menu and start typing <em>cmd.exe</em> or go: Start > Programs > System tools > Command prompt.
	</p>
	<p>
		DOS (Disk Operating System) was popular in the 80s and early 90s. It doesn't have GUI, so we can use DOS only in Command-Line Interface. Nowadays, DOS is practically not used as the primary operating system.
	</p>
	<p>
		On modern computers, we will not run the original DOS versions (MS-DOS / PC-DOS). However, we can run <a target="_blank" href="http://freedos.org/">FreeDOS</a> - a DOS compatible operating system. There are also DOS emulators. The most popular of them is <a target="_blank" href="https://www.dosbox.com">DOSBox</a>.
	</p>
<?php } else { ?>
	<p>
		<p>
		Windows jest systemem operacyjnym. W przeciwieństwie do Linux'a, Windows nie posiada interfejsu wiersza poleceń, który działa bez interfejsu graficznego. Możemy natomiast korzystać z interpretera poleceń w środowisku graficznym.
	</p>
	<p>
		Cmd.exe jest interpreterem poleceń w systemie Windows. Cmd.exe wywodzi się z command.com - interpretera DOS'a. Z tego powodu, wiele poleceń cmd.exe jest kompatybilnych z komendami DOS'a.
	</p>
	<p>
		Aby uruchomić wiersz poleceń cmd.exe, wciśnij start i zacznij wpisywać <em>cmd.exe</em> lub wybierz: Start > Programy > Narzędzia systemowe > Wiersz polecenia.
	</p>
	<p>
		DOS (Disk Operating system) był popularnym systemem operacyjnym w latach 80-tych i na początku lat 90-tych. Nie posiadał interfejsu graficznego (GUI), więc mogliśmy korzystać z niego jedynie w trybie tekstowym. W dzisiejszych czasach DOS nie jest praktycznie używany jako podstawowy system operacyjny.
	</p>
	<p>
		Na współczesnych komputerach nie uruchomimy oryginalnych wersji DOS'a (MS-DOS / PC-DOS). Możemy jednak uruchomić <a target="_blank" href="http://freedos.org/">FreeDOS</a> - system operacyjny kompatybilny z DOS'em. Poza tym istnieją emulatory DOS-a. Najpopularniejszym z nich jest <a target="_blank" href="https://www.dosbox.com">DOSBox</a>.
	</p>
=======







<pre><font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ pwd
/home/karol
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ whatis pwd
pwd (1)              - print name of current/working directory
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ whatis whatis
whatis (1)           - display one-line manual page descriptions
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ whatis ls
ls (1)               - list directory contents
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ ls
<font color="#729FCF"><b>Apps</b></font>  <font color="#729FCF"><b>Desktop</b></font>  <font color="#729FCF"><b>Documents</b></font>  <font color="#729FCF"><b>Downloads</b></font>  <font color="#729FCF"><b>Music</b></font>  <font color="#729FCF"><b>Pictures</b></font>  <font color="#729FCF"><b>Public</b></font>  <font color="#729FCF"><b>Templates</b></font>  <font color="#729FCF"><b>Videos</b></font>
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ ls -l
total 36
drwxrwxr-x 11 karol karol 4096 Nov 23 19:44 <font color="#729FCF"><b>Apps</b></font>
drwxr-xr-x  5 karol karol 4096 Dec 10 13:29 <font color="#729FCF"><b>Desktop</b></font>
drwxr-xr-x  3 karol karol 4096 Oct 24 15:51 <font color="#729FCF"><b>Documents</b></font>
drwxr-xr-x  3 karol karol 4096 Dec  9 20:13 <font color="#729FCF"><b>Downloads</b></font>
drwxr-xr-x  7 karol karol 4096 Dec  8 08:21 <font color="#729FCF"><b>Music</b></font>
drwxr-xr-x  3 karol karol 4096 Oct 24 13:35 <font color="#729FCF"><b>Pictures</b></font>
drwxr-xr-x  2 karol karol 4096 Oct 24 13:21 <font color="#729FCF"><b>Public</b></font>
drwxr-xr-x  2 karol karol 4096 Oct 24 13:21 <font color="#729FCF"><b>Templates</b></font>
drwxr-xr-x  2 karol karol 4096 Dec  5 21:39 <font color="#729FCF"><b>Videos</b></font>
</pre>













	</section>
	<section>
		<h4><i class="fab fa-windows"></i> Windows cmd / DOS</h4>
<?php if ($lang == "en") { ?>
		<p>
			Windows is an operating system. Unlike GNU Linux, Windows does not have a CLI mode that works without a GUI. But we can use the command interpreter in the GUI.
		</p>
		<p>
			Cmd.exe is an interpreter of Windows commands. Cmd.exe derives from command.com - DOS interpreter. For this reason, many cmd.exe commands are similar to commands from DOS.
		</p>
		<p>
			To run cmd.exe, click the Start Menu and start typing cmd.exe.
		</p>
		<p>
			DOS (Disk Operating System) was popular in the 80s and early 90s. It doesn't have GUI. So we can use DOS only in Command-Line Interface. Nowadays, DOS is practically not used as the primary operating system. Anyway, we won't run the original DOS versions (MS-DOS / PC-DOS) on modern computers. However, we can run DOS in an emulator, e.g. <a target="_blank" href="https://www.dosbox.com">DOSBox</a>. That's how we can run most of the older games and programs.
		</p>
<?php } else { ?>
		<p>
			<p>
			Windows jest systemem operacyjnym. W przeciwieństwie do Linux'a, Windows nie posiada interfejsu wiersza poleceń, który działa bez interfejsu graficznego. Możemy natomiast korzystać z interpretera poleceń w środowisku graficznym.
		</p>
		<p>
			Cmd.exe jest interpreterem poleceń w systemie Windows. Cmd.exe wywodzi się z command.com - interpretera DOS'a. Z tego powodu wiele poleceń cmd.exe jest podobnych do poleceń DOS'owych.
		</p>
		<p>
			Aby uruchomić wiersz poleceń cmd.exe, wciśnij start i zacznij wpisywać <em>cmd.exe</em>.
		</p>
		<p>
<<<<<<< HEAD
			DOS (Disk Operating system) był popularnym systemem operacyjnym w latach 80-tych i na początku lat 90-tych. Nie posiadał interfejsu graficznego (GUI). Więc, mogliśmy korzystać z niego jedynie w trybie tekstowym. W dzisiejszych czasach DOS nie jest praktycznie używany jako podstawowy system operacyjny. Poza tym na współczesnych komputerach nie uruchomimy oryginalnych wersji DOS'a (MS-DOS / PC-DOS). Możemy jednak uruchomić DOS w emulatorze, np. <a target="_blank" href="https://www.dosbox.com">DOSBox</a>. W taki sposób możemy uruchomić większość starszych gier i programów.
=======
			DOS (Disk Operating system) był popularnym systemem operacyjnym w latach 80-tych i na początku lat 90-tych. Nie posiadał interfejsu graficznego (GUI). Więc, mogliśmy korzystać z niego jedynie w trybie tekstowym. W dzisiejszych czasach DOS nie jest praktycznie używany.
>>>>>>> effdb95cbf5e4690d2bb6c5edb7716cd118c20d8
<?php } ?>









<pre>
Microsoft Windows [Version 10.0.17134.472]
(c) 2018 Microsoft Corporation. Wszelkie prawa zastrze¿one.

C:\Users\Karol>help help
Provides help information for Windows commands.

HELP [command]

    command - displays help information on that command.

C:\Users\Karol>dir
 Volume in drive C has no label.
 Volume Serial Number is 36A7-DDFF

 Directory of C:\Users\Karol

30.12.2018  19:19    &lt;DIR&gt;          .
30.12.2018  19:19    &lt;DIR&gt;          ..
31.12.2018  16:15    &lt;DIR&gt;          3D Objects
31.12.2018  16:15    &lt;DIR&gt;          Contacts
31.12.2018  16:15    &lt;DIR&gt;          Desktop
31.12.2018  16:15    &lt;DIR&gt;          Documents
01.01.2019  04:07    &lt;DIR&gt;          Downloads
31.12.2018  16:15    &lt;DIR&gt;          Favorites
31.12.2018  16:15    &lt;DIR&gt;          Links
31.12.2018  16:15    &lt;DIR&gt;          Music
31.12.2018  09:51    &lt;DIR&gt;          OneDrive
31.12.2018  16:15    &lt;DIR&gt;          Pictures
31.12.2018  16:15    &lt;DIR&gt;          Saved Games
31.12.2018  16:15    &lt;DIR&gt;          Searches
31.12.2018  16:15    &lt;DIR&gt;          Videos
               0 File(s)              0 bytes
              15 Dir(s)  63 127 109 632 bytes free
</pre>











	</section>
	<section>















<pre><font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>/</b></font>$ neofetch
<font color="#8AE234"><b>MMMMMMMMMMMMMMMMMMMMMMMMMmds+. </b></font>       <font color="#8AE234"><b>karol@aspireOne</b></font> 
<font color="#8AE234"><b>MMm----::-://////////////oymNMd+` </b></font>    --------------- 
<font color="#8AE234"><b>MMd      </b></font><b>/++                </b><font color="#8AE234"><b>-sNMd: </b></font>   <font color="#8AE234"><b>OS</b></font>: Linux Mint 19 Tara x86_64 
<font color="#8AE234"><b>MMNso/`  </b></font><b>dMM    `.::-. .-::.` </b><font color="#8AE234"><b>.hMN: </b></font>  <font color="#8AE234"><b>Host</b></font>: Aspire One 522 V1.12 
<font color="#8AE234"><b>ddddMMh  </b></font><b>dMM   :hNMNMNhNMNMNh: </b><font color="#8AE234"><b>`NMm </b></font>  <font color="#8AE234"><b>Kernel</b></font>: 4.15.0-42-generic 
<font color="#8AE234"><b>    NMm  </b></font><b>dMM  .NMN/-+MMM+-/NMN` </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>Uptime</b></font>: 1 day, 14 hours, 38 mins 
<font color="#8AE234"><b>    NMm  </b></font><b>dMM  -MMm  `MMM   dMM. </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>Packages</b></font>: 2294 
<font color="#8AE234"><b>    NMm  </b></font><b>dMM  -MMm  `MMM   dMM. </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>Shell</b></font>: bash 4.4.19 
<font color="#8AE234"><b>    NMm  </b></font><b>dMM  .mmd  `mmm   yMM. </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>Resolution</b></font>: 1280x720 
<font color="#8AE234"><b>    NMm  </b></font><b>dMM`  ..`   ...   ydm. </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>DE</b></font>: Cinnamon 3.8.9 
<font color="#8AE234"><b>    hMM- </b></font><b>+MMd/-------...-:sdds  </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>WM</b></font>: Mutter (Muffin) 
<font color="#8AE234"><b>    -NMm- </b></font><b>:hNMNNNmdddddddddy/`  </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>WM Theme</b></font>: New-Minty (Mint-Y) 
<font color="#8AE234"><b>     -dMNs-</b></font><b>``-::::-------.``    </b><font color="#8AE234"><b>dMM </b></font>  <font color="#8AE234"><b>Theme</b></font>: Mint-Y [GTK2/3] 
<font color="#8AE234"><b>      `/dMNmy+/:-------------:/yMMM </b></font>  <font color="#8AE234"><b>Icons</b></font>: Mint-Y [GTK2/3] 
<font color="#8AE234"><b>         ./ydNMMMMMMMMMMMMMMMMMMMMM </b></font>  <font color="#8AE234"><b>Terminal</b></font>: gnome-terminal 
<font color="#8AE234"><b>            .MMMMMMMMMMMMMMMMMMM </b></font>     <font color="#8AE234"><b>CPU</b></font>: AMD C-60 APU (2) @ 1.000GHz 
                                      <font color="#8AE234"><b>GPU</b></font>: AMD Radeon HD 6290 
                                      <font color="#8AE234"><b>Memory</b></font>: 993MiB / 1720MiB 

                                      <span style="background-color:#2E3436"><font color="#2E3436">   </font></span><span style="background-color:#CC0000"><font color="#CC0000">   </font></span><span style="background-color:#4E9A06"><font color="#4E9A06">   </font></span><span style="background-color:#C4A000"><font color="#C4A000">   </font></span><span style="background-color:#3465A4"><font color="#3465A4">   </font></span><span style="background-color:#75507B"><font color="#75507B">   </font></span><span style="background-color:#06989A"><font color="#06989A">   </font></span><span style="background-color:#D3D7CF"><font color="#D3D7CF">   </font></span>


</pre>








			



<pre><span style="background-color:#3465A4"><font color="#D3D7CF">┌───────┤/home/karol/Music/calm├───────┐┌──────────────┤Playlist├──────────────┐</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│</font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>../</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">                                   ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│1 Archive - Again (You All </font></span><span style="background-color:#3465A4"><font color="#729FCF"><b>[16:17|MP3]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│6 Archive - Lights (Lights)</font></span><span style="background-color:#3465A4"><font color="#729FCF"><b>[27:35|MP3]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│</font></span><span style="background-color:#2E3436"><font color="#8AE234"><b>Cemeteries - Sodus (320  kb</b></font></span><span style="background-color:#2E3436"><font color="#729FCF"><b>[06:39|MP3]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│                                      ││                                      │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">├────┤Playing...               ├──────────┤</font></span><span style="background-color:#06989A"><font color="#2E3436">       Master 100%  </font></span><span style="background-color:#3465A4"><font color="#D3D7CF">├───┤ 000:50:31├┤</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│</font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>||</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> </font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>Cemeteries - Sodus (320  kbps).mp3</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">                                         │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">│</font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>00:05</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> </font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>06:34</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> [</font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>06:39</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">]  </font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b> 44</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">kHz </font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b> 320</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF">kbps </font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>[STEREO]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> </font></span><span style="background-color:#3465A4"><font color="#729FCF"><b>[NET]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> </font></span><span style="background-color:#3465A4"><font color="#729FCF"><b>[SHUFFLE]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> </font></span><span style="background-color:#3465A4"><font color="#729FCF"><b>[REPEAT]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> </font></span><span style="background-color:#3465A4"><font color="#EEEEEC"><b>[NEXT]</b></font></span><span style="background-color:#3465A4"><font color="#D3D7CF"> │</font></span>
<span style="background-color:#3465A4"><font color="#D3D7CF">└┤                                                                            ├┘</font></span></pre>











>>>>>>> 60db6f553fcc2a694704cfd394b4c75285c75011

<?php } ?>
	<?php include "screenshots-txt/win-dir.html"; ?>
	<?php include "screenshots-txt/dos-freedos-start-ver.html"; ?>

</section>

<?php include "footer.php"; ?>
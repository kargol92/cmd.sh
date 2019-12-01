<?php
	include "sys.php";
	$title = $cmd . " linux";
	include "header.php";
?>

<h2><i class="fab fa-linux"></i> gnu linux</h2>
<section>
	<article id="introduction">
		<hr>
		<h3><i class="far fa-play-circle"></i> <?=$introduction?></h3>
		<hr>
<?php if ($lang == "en") { ?>
	<p>
		To enter to the CLI (not terminal emulator), press e.g. <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Instead of <kbd>F2</kbd> can be <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> or <kbd>F1</kbd>.
	</p>
<?php } else { ?>
	<p>
		Aby przejść do wiersza poleceń (nie emulatora terminala), wciśnij np. <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Zamiast <kbd>F2</kbd> może być <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> lub <kbd>F1</kbd>.
	</p>
<?php } ?>
	</article>
	<article id="keyboard-shortcuts">
		<hr>
		<h3><i class="far fa-keyboard"></i> <?=$keyboardShortcuts?></h3>
		<hr>
		<ul>
			<li><kbd>ctrl</kbd> + <kbd>l</kbd> - clear the terminal screen; same as the command <em>clear</em></li>
			<li><kbd>ctrl</kbd> + <kbd>c</kbd> - terminate the current task</li>
			<li><kbd>ctrl</kbd> + <kbd>z</kbd> - freeze the current task and move it to the background (see commands: <em>jobs</em>, <em>fg</em>, <em>bg</em> and operator <em>&</em>)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>del</kbd> - reboot the system (only in CLI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F1</kbd> - go to the TTY1 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F2</kbd> - go to the TTY2 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F3</kbd> - go to the TTY3 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F4</kbd> - go to the TTY4 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F5</kbd> - go to the TTY5 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F6</kbd> - go to the TTY6 (from GUI)</li>
			<li><kbd>alt</kbd> + <kbd>F1</kbd> - go to the TTY1 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F2</kbd> - go to the TTY2 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F3</kbd> - go to the TTY3 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F4</kbd> - go to the TTY4 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F5</kbd> - go to the TTY5 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F6</kbd> - go to the TTY6 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> - go to the next TTY (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd> - go to the previous TTY (from other TTY)</li>
		</ul>
	</article>
	<article id="disks-partitions">
		<hr>
		<h3><i class="far fa-hdd"></i> <?=$disksPartitions?></h3>
		<hr>
		<p>Numeracja dysków</p>
		<ol>
			<li>sda - dysk nr 1</li>
			<li>sdb - dysk nr 2</li>
			<li>sdc - dysk nr 3</li>
		</ol>

		lub

		<ol>
			<li>hda - dysk nr 1</li>
			<li>hdb - dysk nr 2</li>
			<li>hdc - dysk nr 3</li>
		</ol>

		<p>Numeracja partycji</p>
		<ol>
			<li>sda1 - dysk nr 1, partycja nr 1</li>
			<li>sda2 - dysk nr 1, partycja nr 2</li>
			<li>sda3 - dysk nr 1, partycja nr 3</li>
		</ol>

<pre>
karol@aspireOne:~$ sudo fdisk -l
Disk /dev/sda: 55,9 GiB, 60022480896 bytes, 117231408 sectors
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: dos
Disk identifier: 0x31cafd91

Device     Boot     Start       End   Sectors Size Id Type
/dev/sda2            2048 113127423 113125376  54G 83 Linux
/dev/sda3       113127424 117229567   4102144   2G 82 Linux swap / Solaris
</pre>
	</article>
	<article id="directory-structure">
		<hr>
		<h3><i class="fas fa-sitemap"></i> <?=$directoryStructure?></h3>
		<hr>

<pre style="background-color: inherit; color: inherit;">
├── bin
├── boot
├── cdrom
├── dev
├── etc
├── home
├── lib
├── lib64
├── lost+found
├── media
├── mnt
├── opt
├── proc
├── root
├── run
├── sbin
├── srv
├── sys
├── tmp
├── usr
└── var
</pre>
<pre>
karol@core2duo ~ $ cd /
karol@core2duo / $ tree -L 1
.
├── bin
├── boot
├── cdrom
├── dev
├── etc
├── home
├── initrd.img -> boot/initrd.img-4.10.0-38-generic
├── lib
├── lib64
├── lost+found
├── media
├── mnt
├── opt
├── proc
├── root
├── run
├── sbin
├── snap
├── srv
├── sys
├── tmp
├── usr
├── var
└── vmlinuz -> boot/vmlinuz-4.10.0-38-generic

22 directories, 2 files
</pre>
	</article>
	<article id="access-rights">
		<hr>
		<h3><i class="fas fa-unlock-alt"></i> <?=$accessRights?></h3>
		<hr>
<pre>
<font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~</b></font>$ ls -l
razem 44
drwxr-xr-x 15 karol karol 4096 sie  3 20:57 <font color="#729FCF"><b>Aplikacje</b></font>
drwxr-xr-x  4 karol karol 4096 sie  4 10:47 <font color="#729FCF"><b>Dokumenty</b></font>
drwxr-xr-x 22 karol karol 4096 sie  2 13:20 <font color="#729FCF"><b>ePSXe</b></font>
drwxr-xr-x  7 karol karol 4096 sie  3 20:54 <font color="#729FCF"><b>Muzyka</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Obrazy</b></font>
drwxr-xr-x  2 karol karol 4096 sie  4 10:38 <font color="#729FCF"><b>Pobrane</b></font>
drwxrwxr-x  2 karol karol 4096 sie  4 18:32 <font color="#729FCF"><b>Projects</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Publiczny</b></font>
drwxr-xr-x  4 karol karol 4096 sie  4 13:06 <font color="#729FCF"><b>Pulpit</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Szablony</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Wideo</b></font>
</pre>
<pre style="background-color: inherit; color: inherit;">
drwxr-xr-x
│└┬┘└┬┘└┬┘
│ │  │  │
│<b>u</b>ser│<b>o</b>ther
│    │
│  <b>g</b>roup
│
├──────────────────────┐
type of file / directory
</pre>
		<h4>types of files</h4>
		<ul>
			<li>d - directory</li>
			<li>- - usual file</li>
			<li>l - link</li>
		</ul>
		<h4>who is who?</h4>
		<ul>
			<li>user - the file (directory) owner</li>
			<li>group - users who are in the same group as the owner of the file</li>
			<li>other - all other users</li>
		</ul>
		<h4>what means ...</h4>
		<ul>
			<li>r - reading right</li>
			<li>w - writing right</li>
			<li>x - executing right</li>
		</ul>
		<h4>numerical value of access rights</h4>
		<ul>
			<li>r - 4</li>
			<li>w - 2</li>
			<li>x - 1</li>
		</ul>
		<ul>
			<li>rwx = 7</li>
			<li>rw- = 6</li>
			<li>r-x = 5</li>
			<li>r-- = 4</li>
			<li>--- = 0</li>
		</ul>

		<h4>how to change access rights?</h4>
		<h5>by numerical values</h5>
		<ul>
			<li><code>chmod 777 fileName</code> - rwxrwxrwx - set all rights to all users</li>
			<li><code>chmod 700 fileName</code> - rwx------ - only the owner has rights (all)</li>
			<li><code>chmod 644 fileName</code> - rw-r--r-- - the owner can read and write; users from group and other users can only read</li>
			<li><code>chmod 755 fileName</code> - rwxr-xr-x - the owner has all rights; users from group and other users can read and execute</li>
		</ul>
		<h5>by assigning</h5>
		<ul>
			<li><code>chmod u+x fileName</code> - add executing right for the file owner</li>
			<li><code>chmod o-r fileName</code> - remove reading right for other users</li>
			<li><code>chmod g=rx fileName</code> - set reading and executing right for group users (</li>
		</ul>
	</article>

	<article id="pipelines-redirections">
		<hr>
		<h3><i class="fas fa-directions"></i> <?=$pipelinesRedirections?></h3>
		<hr>
	</article>

	<article id="commands">
		<hr>
		<h3><i class="fa fa-question"></i> <?=$commands?></h3>
		<hr>
		<ul>
			<li>whatis</li>
			<li>apropos</li>
			<li>man</li>
			<li>info</li>
			<p>additional / not in the base packages (to download)</p>
			<li>tldr</li>
		</ul>
	</article>
	<article id="browsing-directories">
		<hr>
		<h3><i class="far fa-folder-open"></i> <?=$browsingDirectories?></h3>
		<hr>
		<ul>
			<li>pwd</li>
			<li>ls</li>
			<li>cd</li>
			<li>tree</li>
		</ul>
		<h4>tree -d - display only directories</h4>

<pre>
karol@core2duo ~/Dokumenty $ tree -d
.
├── GTA3 User Files
├── GTA San Andreas User Files
│   ├── Gallery
│   └── User Tracks
├── GTA Vice City User Files
└── THQ
    └── MXvsATV Unleashed
        └── Save

8 directories
</pre>
	</article>
	<article id="folders-files-manipulation">
		<hr>
		<h3><i class="far fa-copy"></i> <?=$foldersFilesManipulation?></h3>
		<hr>
		<ul>
			<li>cp</li>
			<li>mv</li>
			<li>rm</li>
			<li>ln</li>
			<li>touch</li>
			<li>mkdir</li>
			<li>rmdir</li>
		</ul>
	</article>
	<article id="reading-files">
		<hr>
		<h3><i class="far fa-file-alt"></i> <?=$readingFiles?></h3>
		<hr>
		<ul>
			<li>head</li>
			<li>tail</li>
			<li>stat</li>
			<li>cmp</li>
		</ul>
	</article>
	<article id="console">
		<hr>
		<h3><i class="fa fa-terminal"></i> <?=$console?></h3>
		<hr>
		<ul>
			<li>clear</li>
			<li>reset</li>
			<li>more</li>
			<li>less</li>
			<li>history</li>
			<li>tty</li>
			<li>alias</li>
		</ul>
	</article>
	<article id="power-session">
		<hr>
		<h3><i class="fa fa-power-off"></i> <?=$powerSession?></h3>
		<hr>
		<ul>
			<li>exit</li>
			<li>logout</li>
			<li>login</li>
			<li>reboot</li>
			<li>poweroff</li>
			<li>shutdown</li>
		</ul>
	</article>
	<article id="file-system">
		<hr>
		<h3><i class="far fa-hdd fa-fw"></i> <?=$fileSystem?></h3>
		<hr>
		<ul>
			<li>df</li>
			<li>du</li>
			<li>mount</li>
			<li>umount</li>
			<li>fdisk</li>
			<li>fsck</li>
		</ul>
	</article>
	<article id="admin">
		<hr>
		<h3><i class="fa fa-shield-alt"></i> <?=$admin?></h3>
		<hr>
		<ul>
			<li>su</li>
			<li>sudo</li>
			<li>chmod</li>
			<li>chown</li>
			<li>umask</li>
			<li>update-grub</li>
		</ul>
	</article>
	<article id="users">
		<hr>
		<h3><i class="far fa-user"></i> <?=$users?></h3>
		<hr>
		<ul>
			<li>logname</li>
			<li>whoami</li>
			<li>who</li>
			<li>w</li>
			<li>last</li>
			<li>lslogins</li>
			<li>groups</li>
		</ul>
	</article>
	<article id="users-admin">
	<hr>
	<h3><i class="fa fa-user-shield"></i> <?=$usersAdmin?></h3>
	<hr>
	<ul>
		<li>passwd</li>
		<li>adduser</li>
		<li>deluser</li>
		<li>useradd</li>
		<li>userdel</li>
		<li>addgroup</li>
		<li>delgroup</li>
		<li>groupadd</li>
		<li>groupdel</li>
	</ul>
	</article>
	<article id="statistics">
		<hr>
		<h3><i class="fa fa-chart-bar"></i> <?=$statistics?></h3>
		<hr>
		<ul>
			<li>uptime</li>
			<li>free</li>
			<li>time</li>
			<li>date</li>
			<li>cal</li>
		</ul>
	</article>
	<article id="system">
	<hr>
	<h3><i class="fa fa-laptop"></i> system</h3>
	<hr>
	<ul>
		<li>hostname</li>
		<li>uptime</li>
		<li>uname</li>
		<li>lsmod</li>
	</ul>
	</article>
	<article id="hardware">
	<hr>
	<h3><i class="fa fa-microchip"></i> <?=$hardware?></h3>
	<hr>
	<ul>
		<li>arch</li>
		<li>lscpu</li>
		<li>lsmem</li>
		<li>lsusb</li>
		<li>lspci</li>
		<li>lshw</li>
		<li>hdparm</li>
	</ul>
	</article>
	<article id="network">
	<hr>
	<h3><i class="fa fa-network-wired"></i> <?=$network?></h3>
	<hr>
	<ul>
		<li>ifconfig</li>
		<li>ping</li>
		<li>traceroute</li>
		<li>host</li>
		<li>whois</li>
		<li>arp</li>
		<li>route</li>
		<li>netstat</li>
		<li>dig</li>
		<li>wget</li>
		<li>curl</li>
		<li>iptables</li>
		<li>ufw</li>
	</ul>
	</article>
	<article id="wireless">
	<hr>
	<h3><i class="fa fa-wifi"></i> <?=$wireless?></h3>
	<hr>
	<ul>
		<li>iwconfig</li>
		<li>iwlist</li>
		<li>rfkill</li>
	</ul>
	</article>
	<article id="processes">
	<hr>
	<h3><i class="fa fa-list-ul"></i> <?=$processes?></h3>
	<hr>
	<ul>
		<li>ps</li>
		<li>top</li>
		<li>htop</li>
		<li>kill</li>
		<li>killall</li>
		<li>jobs</li>
		<li>fg</li>
		<li>bg</li>
		<li>nice</li>
	</ul>
	</article>
	<article id="package-managers">
	<hr>
	<h3><i class="fa fa-cube"></i> <?=$packageManagers?></h3>
	<hr>
	<ul>
		<li>apt</li>
		<ul>
			<li>apt search</li>
			<li>apt show</li>
			<li>apt install</li>
			<li>apt remove</li>
			<li>apt purge</li>
			<li>apt update</li>
			<li>apt list --upgradable</li>
			<li>apt upgrade</li>
			<li>apt add-repository</li>
		</ul>
		<li>apt-get</li>
		<ul>
			<li>apt-get install</li>
			<li>apt-get remove</li>
		</ul>
		<li>apt-cache</li>
		<li>apt-key</li>
		<li>aptitude</li>
		<li>rpm</li>
		<li>yum</li>
		<li>pacman</li>
		<li>flatpak</li>
		<li>snap</li>
	</ul>
	</article>
	<article id="search">
	<hr>
	<h3><i class="fa fa-search"></i> <?=$search?></h3>
	<hr>
	<ul>
		<li>which</li>
		<li>whereis</li>
		<li>locate</li>
		<li>find</li>
		<li>grep</li>
	</ul>
	</article>
	<article id="text-manipulation">
	<hr>
	<h3><i class="fa fa-search"></i> <?=$textManipulation?></h3>
	<hr>
	<ul>
		<li>cat</li>
		<li>tee</li>
		<li>awk</li>
		<li>sed</li>
	</ul>
	</article>
	<article id="archive">
	<hr>
	<h3><i class="far fa-file-archive"></i> <?=$archive?></h3>
	<hr>
	<ul>
		<li>tar</li>
		<li>zip</li>
		<li>unzip</li>
		<li>gzip</li>
		<li>bzip2</li>
	</ul>
	</article>
	<article id="compilation">
	<hr>
	<h3><i class="far fa-file-code"></i> <?=$compilation?></h3>
	<hr>
	<ul>
		<li>gcc</li>
		<li>g&plus;&plus;</li>
		<li>javac</li>
		<li>java</li>
		<li>make</li>
		<li>cmake</li>
	</ul>
	</article>
	<article id="text-editors">
	<hr>
	<h3><i class="fa fa-align-left"></i> <?=$textEditors?></h3>
	<hr>
	<ul>
		<li>vim (vi)</li>
		<li>nano (pico)</li>
		<li>mcedit</li>
	</ul>
	</article>
	<article id="useful-programs">
	<hr>
	<h3><i class="far fa-window-maximize"></i> <?=$usefulPrograms?></h3>
	<hr>
	<ul>
		<li>lynx</li>
		<li>links</li>
		<li>elinks</li>
		<li>moc / mocp</li>
	</ul>
	</article>
	<article id="ncurses-programs">
	<hr>
	<h3><i class="far fa-window-maximize"></i> <?=$ncursesPrograms?></h3>
	<hr>
	<ul>
		<li>mc</li>
		<li>mcedit</li>
		<li>alsamixer</li>
	</ul>
	</article>
	<article id="x-server">
	<hr>
	<h3><i class="fa fa-desktop"></i> <?=$xServer?></h3>
	<hr>
	<ul>
		<li>xrandr</li>
		<li>xkill</li>
		<li>xterm</li>
		<li>xlogo</li>
		<li>startx</li>
		<li>xinit</li>
	</ul>
	</article>
	<article id="bash-scripts">
	<hr>
	<h3><i class="fa fa-code"></i> <?=$bashScripts?></h3>
	<hr>
	<ul>
		<li>echo</li>
		<li>if</li>
		<li>case</li>
		<li>for</li>
		<li>while</li>
		<li>until</li>
	</ul>
	</article>
	<article id="ssh">
	<hr>
	<h3><i class="fas fa-tty"></i> telnet & ssh</h3>
	<hr>
	<ul>
		<li>telnet</li>
		<li>ssh</li>
	</ul>
	</article>
	<article id="wine">
	<hr>
	<h3><i class="fas fa-wine-glass-alt"></i> wine</h3>
	<hr>
	<ul>
		<li>wine</li>
		<li>wineconsole</li>
		<li>winecfg</li>
		<li>notepad</li>
	</ul>
	</article>
	<article id="xampp">
	<hr>
	<h3><i class="fab fa-php"></i> xampp</h3>
	<hr>
	<ul>
		<li>sudo /opt/lampp/lampp start</li>
		<li>sudo /opt/lampp/lampp stop</li>
		<li>sudo /opt/lampp/lampp reload</li>
		<li>sudo /opt/lampp/lampp restart</li>
	</ul>
	</article>
	<article id="git">
	<hr>
	<h3><i class="fab fa-git-alt"></i> git</h3>
	<hr>
	<ul>
		<li>git config user.name</li>
		<li>git config user.email</li>
		<li>git config --global user.name "Your Name"</li>
		<li>git config --global user.email "you@example.com"</li>
		<li>git config core.editor</li>
		<li>git config --list</li>
		<li>git clone [repo address]</li>
		<li>git remote -v</li>
		<li>git remote add origin [repo address]</li>
		<li>git init</li>
		<li>git status</li>
		<li>git add [file name]</li>
		<li>git commit -m "your message"</li>
		<li>git push -u origin master</li>
		<li>git pull</li>
	</ul>
	</article>
</section>

<?php include "footer.php"; ?>

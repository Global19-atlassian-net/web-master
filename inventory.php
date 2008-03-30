<?php
require_once 'functions.inc';
head("machine inventory");
?>
<p>php.net is supported by a number of machines provided by a number
of generous sponsors. this is a basic inventory of those machines and
what services they provide.</p>

<p>Note regarding FreeBSD machines: Upgrades should be 
performed according to <a href="fbsd_upgrade.txt">this guide</a>.</p>

<h2>nex1.php.net (208.69.122.11)</h2>
<p><b>machine:</b> Dual Xeon 2.8GHz, 2GB RAM, 2x120GB HD RAID1, CentOS</p>
<p><b>aliases:</b> gcov</p>
<p><b>technical contact:</b> (support AT nexcess net)</p>

<h2>pb1.php.net (216.92.131.4)</h2>

<p><b>machine:</b> dual p3/1000 xeon, 512MB RAM, 27GB HD, freebsd 4.11</p>

<p><b>aliases:</b> lists.php.net, news.php.net</p>

<p><b>technical contact:</b> Pair's ticket system <tt>qs AT pair com</tt>.</p>

<h2>pb11.php.net (216.92.131.65)</h2>

<p><b>machine:</b> dual p3/1000 xeon, 512MB RAM, 70GB HD, freebsd 4.8</p>

<p><b>aliases:</b> docs, livedocs</p>

<p><b>technical contact:</b> Pair's ticket system <tt>qs AT pair com</tt>.</p>

<h2>pb12.php.net (216.92.131.66)</h2>

<p><b>machine:</b> Pentium 4 2.8 GHz, 2GB DDR RAM, 120GB HD, freebsd 4.11</p>

<p><b>aliases:</b> pear, pecl</p>

<p><b>technical contact:</b> Pair's ticket system <tt>qs AT pair com</tt>.</p>

<h2>rs1.php.net (64.246.30.37)</h2>

<p><b>machine:</b> p3/1GHz, 1GB RAM 40GB HD, redhat 7.2</p>

<p><b>aliases:</b> </p>

<p><b>notes:</b> This machine is on a dedicated 10mbps switch. whilst it can maintain 10mbps, it cannot burst above that.<br />
                 Being re-imaged...</p> 

<p><b>technical contact:</b> connect to irc.ev1.net:7000, join #ev1servers</p>

<h2>sc1.php.net (66.225.196.49)</h2>

<p><b>machine:</b> 2xP4-2400 (HT), 2GB RAM, 155GB HD</p>

<p><b>aliases:</b> rsync, snapsmaster</p>

<!-- this machine generates the online manuals. daily backups of
the cvs repository and the rsync modules are done. cricket also runs on this
machine to track the usage of all of the machines.</p> -->

<h2>ez1.php.net (128.39.198.38)</h2>

<p><b>machine:</b>Dell PE 650, 1GB RAM, 120GB disk</p>
<p><b>aliases:</b> bugs, embed, gtk, irssi.embed, museum, qa, smarty, snaps</p>
<p><b>technical contact:</b> Ole Sigurd Nyvold Hansen (Ole.S.Hansen AT hit no)</p>

<h2>sp1.php.net (69.28.246.234)</h2>

<p><b>machine:</b> Celeron 2.5GHz, 1GB RAM, 120GB HD, Debian GNU/Linux</p>
<p><b>aliases:</b> none</p>
<p><b>technical contact:</b> Cameron Jones (cameron.jones AT spry.com)</p>

<h2>osu1.php.net (140.211.166.39)</h2>

<p><b>machine:</b> Dual Xeon 2.4GHz, 1GB RAM, 36GB HD, RHEL 3</p>
<p><b>aliases:</b> ecelerity, master.php.net, php.net MX</p>
<p><b>technical contact:</b> Corey Shields, Oregon State OSL (cshields AT osuosl org).
	For support, (support AT osuosl.org)</p>

<h2>oti1.php.net (66.80.117.35)</h2>
<p><b>machine:</b> win32 snaps generator</p>
<p><b>technical contact:</b> Wez or George</p>

<h2>oti2.php.net (8.8.38.129)</h2>
<p><b>machine:</b> 2x2.4GHz Xeon, 1GB RAM, 2x18GB SCSI disks. <a href="http://www.supermicro.com/products/system/1U/6012/SYS-6012L-6.cfm">SuperMicro 6012L-6</a>
<p><b>technical contact:</b> Wez or George</p>

<h2>ovh.php.net (213.251.181.15)</h2>

<p><b>machine:</b> ?</p>
<p><b>aliases:</b> pecl (work in progress)</p>
<p><b>technical contact:</b> BinarySec</p>

<h2>y1.php.net (66.163.161.116)</h2>
<p><b>machine:</b> Dual Xeon 3GHz, 4GB RAM, 6x73GB SCSI HD RAID10, 64-bit FreeBSD6</p>
<p><b>aliases:</b> chora, cvs, cvsup, cvsweb, lxr, viewcvs</p>
<p><b>technical contact:</b> Rasmus</p>

<h2>y2.php.net (66.163.161.117)</h2>
<p><b>machine:</b> Dual Xeon 2.8GHz, 4GB RAM, 2x73GB SCSI HD RAID1, 64-bit FreeBSD6</p>
<p><b>aliases:</b> www, talks, conf, static, download</p>
<p><b>technical contact:</b> Rasmus</p>

<p>originally compiled by jim winstead, september 2001</p>
<p>last update: $Id$</p>
<?php
foot();

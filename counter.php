<?php
$filecounter="counter.txt";
$fl=fopen($filecounter,"r+"); //Load file, r=read
$hit=fread($fl, filesize($filecounter));//Fungsi hit membaca jumlah pengunjung dari file(fread)

// Tampilan untuk melihat hit counter
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda Pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);

// Menuliskan penambahan hit ke dalam file (fopen, hit+, fwrite) dan menutup file (fclose)
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit)); //Tulis ke dalam file
fclose($fl); //Tutup file (fclose)
?>
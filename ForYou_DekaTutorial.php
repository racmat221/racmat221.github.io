<?php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "Stiker 1 (SFILE.MOBI).gif",
    ucapan: "halooo alsaa cantikkkk",
  },
  {
    gambar: "Stiker 18 (SFILE.MOBI).gif",
    ucapan: "besokk hari apaaa yaa?",
  },
  {
    gambar: "Stiker 43 (SFILE.MOBI).gif",
    ucapan: "ohyaaa bsk hari ulang tahunn orang paling cantikk dan speciall yaa namanyaa bungaa atau alsaaa",
  },
  {
    gambar: "Stiker 2 (SFILE.MOBI).gif",
    ucapan: "selamatt ulang tahunn ya cantikk,semogaa yang di semogakan tercapaii",
  },
  {
    gambar: "Stiker 31 (SFILE.MOBI).gif",
    ucapan: "bahagiaa selaluu,jangan suka sakitt/mootan ,jangann maless untukk mandii yaa cantikk alsaa",
  },
  {
    gambar: "Stiker 32 (SFILE.MOBI).gif",
    ucapan: "maaf yaa aku belum bisa ngasih apaa apaa dan gak kayak orang orang yang ngajak kamu dinner suprise dll maaf yaaa",
  },
];

musik = "musik.mp3";
noWhatsapp = "6288298765725";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>

<?php

// Create a 100*30 image
$im = imagecreate(400,250 );


// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Write the string at the top left
/*imagestring($im, 5, 10, 5, 'id', $textcolor);
imagestring($im, 5, 10, 25, 'bank_id', $textcolor);
imagestring($im, 5, 10, 45, 'account_number', $textcolor);
imagestring($im, 5, 10, 65, 'bank_type', $textcolor);
imagestring($im, 5, 10, 85, 'date', $textcolor);
imagestring($im, 5, 10, 105, 'amount', $textcolor);
imagestring($im, 5, 10, 125, 'description', $textcolor);
imagestring($im, 5, 10, 145, 'type', $textcolor);
imagestring($im, 5, 10, 165, 'balance', $textcolor);

imagestring($im, 5, 210, 5, 'ID Mutasi', $textcolor);
imagestring($im, 5, 210, 25, 'ID Akun Bank', $textcolor);
imagestring($im, 5, 210, 45, 'Nomor Rekening Bank', $textcolor);
imagestring($im, 5, 210, 65, 'Nama Bank rekening Anda', $textcolor);
imagestring($im, 5, 210, 85, 'Tanggal Mutasi', $textcolor);
imagestring($im, 5, 210, 105, 'Nominal transaksi', $textcolor);
imagestring($im, 5, 210, 125, 'Deskripsi Transaksi', $textcolor);
imagestring($im, 5, 210, 145, 'Tipe Transaksi', $textcolor);
imagestring($im, 5, 210, 165, 'Saldo rekening Anda', $textcolor);*/




// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);


?>
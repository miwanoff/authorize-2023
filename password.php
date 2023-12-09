<?php
$hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
echo
    $hash; //$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq
if (password_verify("rasmuslerdorf", $hash)) {
    echo 'Password is valid!';
} 
else {
  echo 'Invalid password.';
 }
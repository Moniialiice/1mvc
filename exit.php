<?php
SetCookie('id',"");
SetCookie('acceso',"");
session_start();
session_unset();
session_destroy();
print "<meta http-equiv='refresh' content='0;
url=sys.php?msg=$msg'>";
exit;?>

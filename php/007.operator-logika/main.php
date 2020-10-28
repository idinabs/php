<!-- sama seperti operator penugasan,operator logika menghasilkan nilai true or false -->
<!-- banyak digunakan ada 3 operasi sepert && ||, ! -->

<?php

$nilai = 20;
var_dump($nilai < 10 && $nilai % 2 == 0); //akan menghasilkan nilai true apabila sama sama true

var_dump($nilai < 10 || $nilai % 2 == 0); //selama masih ada nilai true di salah satu nilai maka akan menghasilkan true

$nilai = TRUE;
var_dump(!$nilai);



?>
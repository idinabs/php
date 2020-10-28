<!-- operator penugasan menghasilkan nilai boolean atau True or False atau 1 or 0 -->
<!-- terdiri dari < , > , <= , >=, == , != -->
<!-- memiliki operator penugasan khusus yang disebut identitas === dan !== -->


<?php

$nilai = 5 < 10;
$nilai = 5 > 10;
$nilai = 5 <= 10;
$nilai = 5 >= 10;
$nilai = 5 != 10;
$nilai = 5 == "5"; // sebuah variable hanya mengecek bahwa literal dari variable nya itu sama meskipun berbeda tipe data
$nilai = 5 !== "5"; // meskipun literalnya sama ,tapi dia akan membedakan tipe datanya
$nilai2 = 5 === "5";
    var_dump("hasilnya adalah : $nilai");
    echo "hasilnya adalah :$nilai2";

?>
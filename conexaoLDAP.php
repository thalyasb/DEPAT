<?php

$ldap_server = "10.16.17.228";
$dominio = "infraestrutura\\";
$ldap_porta = "389";
$ldapcon = ldap_connect($ldap_server, $ldap_porta) or die("Could not connect to LDAP server.");


if ($ldapcon){
    
$user = $_POST['usuario'];
$ldap_pass = $_POST['senha'];
if(ldap_bind($ldapcon, $dominio.$user, $ldap_pass))
{
    echo "DEU CERTO DATTEBAYOOOOOOOOOOO!";
    $_SESSION['usuario'] = $user;
    header('Location: home.php');
    exit();
}
else
{
    echo "invalid user/pass or other error";
}

}

?>


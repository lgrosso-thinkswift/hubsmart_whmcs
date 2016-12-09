<?php

$ca = new WHMCS_ClientArea();

use WHMCS\View\Menu\Item as MenuItem;

$var = $_SESSION['clientsdetails.groupid'];

if ($ca->isLoggedIn() && $var = 1) {


add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
$primaryNavbar->addChild('Wholesale Orders')
->setUri('cart.php?gid=2')
->setOrder(70);
});

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Services'))) {
        $primaryNavbar->getChild('Services')->removeChild('Order New Services');
    }
});

} 
add_hook("ClientAreaPrimaryNavbar");

?>
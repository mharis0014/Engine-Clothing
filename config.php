<?php

require 'vendor/autoload.php';

$Publishablekey="pk_test_51HFeHSB8he1rymLIdWidOncR4EeTSlRibmEqpL6C8dpUUroYUisjvPMVJJ6zXM66oZ9j9wBI0WrHUdOmuGhXolkp00M22EsrSP";

$Secretkey="sk_test_51HFeHSB8he1rymLINUoa1fzZ7jszQcHeHrS8CPnAlqhFvCTRF0mvlhrgme9KNITvRUKg7VjoXVEXpvFv3TZTZsMR00dPF3qrz3";

\Stripe\Stripe::setApiKey($Secretkey);

?>
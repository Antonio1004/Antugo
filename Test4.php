<?php
require 'vendor/autoload.php';
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
// Conectar con Selenium
$host = 'http://selenium:4444/wd/hub';
$result=1;

$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
try{
    $driver->get('https://www.saucedemo.com/');
    $username=$driver->findElement(WebDriverBy::id("user-name"));
    $password=$driver->findElement(WebDriverBy::id("password"));

    $username->sendKeys('standard_user');
    $password->sendKeys('secret_sauce');
    
    $form =$driver->findElement(WebDriverBy::cssSelector("form"));
    $form->submit();
    $url = $driver->getCurrentURL();
    if($url=="https://www.saucedemo.com/inventory.html"){
        $buton1=$driver->findElement(WebDriverBy::cssSelector("#add-to-cart-sauce-labs-backpack"));
        $buton2=$driver->findElement(WebDriverBy::cssSelector("#add-to-cart-sauce-labs-bike-light"));
        $buton1->click();
        $buton2->click();
        $contCarrito =$driver->findElement(WebDriverBy::cssSelector(".shopping_cart_badge"))->getText();
        if(2==intval($contCarrito)){
            $result=0;

        }

          

            
        
        
    }

}
catch(Exception $e){

}
finally{
    $driver->quit();
    return $result;
}
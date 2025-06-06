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
        $result=0;
    }

}
catch(Exception $e){

}
finally{
    $driver->quit();
    return $result;
}
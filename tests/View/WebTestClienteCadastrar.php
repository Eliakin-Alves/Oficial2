<?php
namespace Facebook\WebDriver\Remote;
use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverNavigation;
use Facebook\WebDriver\WebDriverOptions;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;


class WebTestClienteCadastrar extends TestCase
{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen()
    {
        
        $host = 'http://localhost:4444/wd/hub';

        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());

        $driver->get('http://localhost/Oficial2/www/cliente/cadastrar');
        
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("Gabriel");
        $driver->findElement(WebDriverBy::id('cpf'))->sendKeys("178.567.157-07");
        $driver->findElement(WebDriverBy::id('cep'))->sendKeys("23030-460");
        $driver->findElement(WebDriverBy::id('endereco'))->sendKeys("Rua Lucindo Rosa Pires");
        $driver->findElement(WebDriverBy::id('telefone'))->sendKeys("21969566546");
        $driver->findElement(WebDriverBy::id('email'))->sendKeys("gabrielove-one@hotmail.com");
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys("123");

        $submitElement = $driver->findElement(WebDriverBy::id('singlebutton'));
        $submitElement->click();

        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        
        $this->assertEquals($msg, "Cadastrado com Sucesso");
      
 
    }


}

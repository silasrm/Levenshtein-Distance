<?php

define( 'PATH_DADOS', realpath( '' ) . '/./data/' );

require_once 'PHPUnit/Framework.php';
require_once 'Distancia.php';

class DistanciaTest extends PHPUnit_Framework_TestCase
{
    public function testgrauSimilaridadeVazia()
    {
        $this->assertEquals( Distancia::grauSimilaridade( '', '' ) );
    }
    
    public function testgrauSimilaridadeStr2Vazia()
    {
        $this->assertEquals( Distancia::grauSimilaridade( 'asd', '' ) );
    }
    
    public function testgrauSimilaridadeInteiro()
    {
        $this->assertEquals( Distancia::grauSimilaridade( 1233, 1223 ) );
    }
    
    public function testgrauSimilaridadeStr2Inteiro()
    {
        $this->assertEquals( Distancia::grauSimilaridade( 'asd', 4567 ) );
    }
    
    public function testgrauSimilaridadeFloat()
    {
        $this->assertEquals( Distancia::grauSimilaridade( 0.1212, 1.223 ) );
    }
    
    public function testgrauSimilaridadeStr2Float()
    {
        $this->assertEquals( Distancia::grauSimilaridade( 'asd', 3.567 ) );
    }
    
    public function testgrauSimilaridade()
    {
        $this->assertEquals( Distancia::grauSimilaridade( 'Joao', 'Joao', false ), 100 );
    }
}

<?php

/*
    Teste da classe Distancia. Usa PHPUnit
    Copyright (C) 2010  Silas Ribas Martins

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

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

<?php

/*
 *--------------------------------------------------------------------------
 * @Class ToTest
 *
 *--------------------------------------------------------------------------
 *
 * @author    weiki
 * @email     happy_gzg@126.com
 * @Licensed  ( http://www.apache.org/licenses/LICENSE-2.0 )
 *--------------------------------------------------------------------------
 */

use PHPUnit\Framework\TestCase;

class ToTest extends TestCase
{
    public function testToXml()
    {
        $this->assertEquals('OK', toConst('ok'));
        $this->assertEquals('GET_OK', toConst('getOk'));
        $this->assertEquals('GET_OK', toConst('GetOk'));
        $this->assertEquals('GET_OK', toConst('get_ok'));
    }

    public function testToConst()
    {
        $this->assertEquals('OK', toConst('ok'));
        $this->assertEquals('GET_OK', toConst('getOk'));
        $this->assertEquals('GET_OK', toConst('GetOk'));
        $this->assertEquals('GET_OK', toConst('get_ok'));
    }

    public function testToDate()
    {
        $this->assertEquals('1970-01-01 08:00:00', toDate(0));
        $this->assertEquals('1970-01-01 08:00:00', toDate(null));
        $this->assertEquals('1970-01-01 08:00:00', toDate(false));
        $this->assertEquals('2020-01-01 00:00:00', toDate(1577808000));
    }

    public function testXmlToArray()
    {
        $this->assertEquals(['name' => 'weiki', 'email' => 'happy_gzg@126.com'], xmlToArray('<?xml version="1.0" encoding="ISO-8859-1"?> <!--  Copyright w3school.com.cn --> <note> <name>weiki</name> <email>happy_gzg@126.com</email> </note>'));
    }
}

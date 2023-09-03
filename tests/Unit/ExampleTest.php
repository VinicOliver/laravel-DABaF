<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testStringInitWith(): void
    {
        $this->assertStringStartsWith('fu', 'fulano');
    }
    public function testAdditionCommutativity(): void
    {
        $results1 = 10 + 20;
        $results2 = 20 + 10;
        $this->assertEquals($results1, $results2);
    }
    public function testPersonHasAttribute(): void
    {
        $person = [
            'name' => 'Vinicius',
            'city' => 'Guarapuava',
        ];
        $this->assertArrayHasKey('name', $person);
    }
    public function testStringContainsSymbol(): void
    {
        $string = "JS > PHP";
        $this->assertStringContainsString('>', $string);
    }
}

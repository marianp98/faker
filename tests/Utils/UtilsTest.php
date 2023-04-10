<?php

namespace App\Tests\Utils;

use App\Utils\Utils;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    public function testCheckNumberGreaterThanFive()
    {
        $faker = Factory::create();

        $lessThanFive = $faker->numberBetween(1, 4);
        $this->assertFalse(Utils::checkNumberGreaterThanFive($lessThanFive));

        $biggerThanFive = $faker->numberBetween(5, 10);
        $this->assertTrue(Utils::checkNumberGreaterThanFive($biggerThanFive));

        $faker->seed(1);
        $random = $faker->numberBetween(1, 10);
        $this->assertTrue(Utils::checkNumberGreaterThanFive($random));



    }
}

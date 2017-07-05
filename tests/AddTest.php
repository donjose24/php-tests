<?php

namespace App\Tests;

use App\Add;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    /**
     * Test if the sum computation is correct
     */
    public function testCompute()
    {
        $addend1 = 1;
        $addend2 = 2;

        $sum = $addend1 + $addend2;

        $this->assertEquals(Add::compute($addend1, $addend2), $sum); //checking if our sum will be equal to the sum of the add class
        $this->assertNotEquals(Add::compute($addend1, $addend2), 0);
    }

    /**
     * Test if the sum is correct using faker
     *
     * @return void
     */
    public function testComputeWithFaker()
    {
        $faker = Factory::create(); // Faker is for generating fake data. I personally use faker to have a wider coverage for my tests

        $addend1 = $faker->randomDigit;
        $addend2 = $faker->randomDigit;

        $sum = $addend1 + $addend2;

        $this->assertEquals(Add::compute($addend1, $addend2), $sum); //checking if our sum will be equal to the sum of the add class
    }
}

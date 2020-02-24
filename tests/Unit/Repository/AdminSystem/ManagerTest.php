<?php


namespace Tests\Unit\Repository\AdminSystem;


use App\Repository\AdminSystem\Manager;
use Tests\TestCase;

class ManagerTest extends TestCase
{
    /**
     * @test
     * @covers \App\Repository\AdminSystem\Manager
     */
    public function should_return_instance_of_Manager()
    {
        $this->assertInstanceOf(Manager::class, new Manager([]));
    }

    /**
     * @test
     * @covers \App\Repository\AdminSystem\Manager::getMenu
     */
    public function should_return_empty_array()
    {
        $this->assertEmpty((new Manager([]))->getMenu());
    }

    /**
     * @test
     * @covers \App\Repository\AdminSystem\Manager::getMenu
     */
    public function should_return_2_element_array()
    {
        $manager = new Manager([
            ['heading' => 'Settings'],
            ['heading' => 'Sales']
        ]);
        $this->assertCount(2, $manager->getMenu());
    }
}

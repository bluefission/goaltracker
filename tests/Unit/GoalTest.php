<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GoalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanCreateGoal()
    {
        $data = [
            'title' => $this->faker->word,
            'link' => $this->faker->url,
            'src' => $this->faker->url,
        ];
      
        $goalRepo = new GoalRepository(new Goal);
        $goal = $goalRepo->createGoal($data);
      
        $this->assertInstanceOf(Goal::class, $goal);
        $this->assertEquals($data['title'], $goal->title);
        $this->assertEquals($data['link'], $goal->link);
        $this->assertEquals($data['image_src'], $goal->src);
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GoalApiTest extends TestCase
{
    public function indexTest()
    {
        $response = $this->get('/api/goals/');

        $response->assertStatus(200);
    }
    
    public function findTest()
    {
        $response = $this->get('/api/goals/1');

        $response->assertStatus(200);
    }
    
    public function createTest()
    {
        $response = $this->post('/api/goals/');

        $response->assertStatus(200);
    }
    
    public function updateTest()
    {
        $response = $this->put('/api/goals/');

        $response->assertStatus(200);
    }
    
    public function deleteTest()
    {
        $response = $this->delete('/api/goals/');

        $response->assertStatus(200);
    }
}

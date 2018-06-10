<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KpiTypeApiTest extends TestCase
{
    public function indexTest()
    {
        $response = $this->get('/api/kpitype/');

        $response->assertStatus(200);
    }
    
    public function findTest()
    {
        $response = $this->get('/api/kpitype/1');

        $response->assertStatus(200);
    }
    
    public function createTest()
    {
        $response = $this->post('/api/kpitype/');

        $response->assertStatus(200);
    }
    
    public function updateTest()
    {
        $response = $this->put('/api/kpitype/');

        $response->assertStatus(200);
    }
    
    public function deleteTest()
    {
        $response = $this->delete('/api/kpitype/');

        $response->assertStatus(200);
    }
}

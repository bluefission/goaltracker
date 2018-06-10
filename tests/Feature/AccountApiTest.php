<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountApiTest extends TestCase
{
    public function registerTest()
    {
        $response = $this->post('/api/acccount/register');

        $response->assertStatus(200);
    }
    
    public function loginTest()
    {
        $response = $this->post('/api/acccount/login');

        $response->assertStatus(200);
    }
}

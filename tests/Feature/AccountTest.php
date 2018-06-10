<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountTest extends TestCase
{
    public function registerTest()
    {
        $response = $this->post('/register');

        $response->assertStatus(200);
    }

    public function loginTest()
    {
        $response = $this->post('/login');

        $response->assertStatus(200);
    }
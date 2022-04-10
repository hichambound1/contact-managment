<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testContactStore()
    {
        $data=[
            'name'=>'contact name',
            'email'=>'test@email.com',
            'contact'=>'123455789',
        ];
        $this->post('/contact',$data)
        ->assertStatus(302);
    }
}


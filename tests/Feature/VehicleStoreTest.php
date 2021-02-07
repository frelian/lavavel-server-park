<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VehicleStoreTest extends TestCase
{
    /** @test */
    public function test_can_create_an_vehicle_route_post_empty()
    {
        $this->post(route('api/v1/vehicles'))
            ->assertStatus(201);
    }
}

<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_customer_show_page_loads_for_single_customer(): void
    {
        $customer = Customer::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '1234567890',
            'address' => '123 Main St',
        ]);

        $response = $this->get(route('customers.show', $customer));

        $response->assertOk();
        $response->assertSee($customer->name);
        $response->assertSee($customer->email);
    }
}

<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListCustomers()
    {
        $response = $this->get('/api/customers');

        $response->assertOk();
        // $response->assertJsonCount(36,'data');
        //$this->assertNotNull($response->json('data')[0]['tel']);
    }

    public function testCreatedCustomer()
    {
        $response = $this->post('/api/customers',[
            'name'=>'Mon premier client',
            'tel'=>'06XXXXXXXX',
            'is_favourite'=>true,
        ]);

        // $customers=Customer::all();

        $response->assertOk();
        // $this->assertEquals(1, $customers->count());
    }
}

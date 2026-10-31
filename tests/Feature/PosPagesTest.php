<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PosPagesTest extends TestCase
{
    use RefreshDatabase;

    protected bool $seed = true;

    public function test_home_page_is_available(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Raimen POS')
            ->assertSee('Warm bowls, welcoming service, organized records.')
            ->assertDontSee('A small POS application built to make MVC responsibilities clear.')
            ->assertSee('Ara Avellaneda');
    }

    public function test_about_page_explains_the_mvc_flow(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('Route')
            ->assertSee('Controller')
            ->assertSee('Blade view');
    }

    public function test_customer_page_lists_five_seeded_records(): void
    {
        $this->get('/customers')
            ->assertOk()
            ->assertSee('Customer Accounts')
            ->assertSeeInOrder(['CUST-001', 'CUST-002', 'CUST-003', 'CUST-004', 'CUST-005'])
            ->assertSee('angela.reyes@example.com');

        $this->assertDatabaseCount('customers', 5);
    }

    public function test_user_page_lists_five_seeded_records(): void
    {
        $this->get('/users')
            ->assertOk()
            ->assertSee('User Accounts')
            ->assertSeeInOrder(['USR-001', 'USR-002', 'USR-003', 'USR-004', 'USR-005'])
            ->assertSee('lara.admin');

        $this->assertDatabaseCount('users', 5);
    }
}

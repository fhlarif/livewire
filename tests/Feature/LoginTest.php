<?php

namespace Tests\Feature;

use App\Http\Livewire\Auth\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function registration_page_contains_livewire_component()
    {
        $this->get('/login')->assertSeeLivewire('auth.login');
    }

    /** @test */
    public function all_field_available()
    {
        Livewire::test(Login::class)
        ->set('email', '')
        ->set('password', '')
        ->call('login')
        ->assertOk();
    }

    /** @test */
    public function can_detect_redirect()
    {
        $component1 = Livewire::test(Login::class)->call('successLogin');
        $component2 = Livewire::test(Login::class)->call('failLogin');

        //  $this->expectException(\PHPUnit\Framework\AssertionFailedError::class);

        $component1->assertRedirect();
        $component2->assertRedirect();
    }

    /** @test */
    public function redirect_page_is_available()
    {
        $response1 = $this->get(\route('welcome'));
        $response1->assertStatus(200);
        $response1->assertViewIs('welcome');

        $response2 = $this->get(\route('livewire.login'));
        $response2->assertStatus(200);
        $this->get('/login')->assertSeeLivewire('auth.login');
    }

    /** @test */
    public function fields_is_required()
    {
        Livewire::test(Login::class)
        ->set('email', '')
        ->set('password', '')
        ->call('login')
        ->assertHasErrors(['email'=>'required'])
        ->assertHasErrors(['password'=>'required']);
    }

        /** @test */
        public function login_success()
        {
            $user= User::create([
                'name' => 'momo',
                'email'=>'fathulkb@dsd.com',
                'password'=>Hash::make('$value')
            ]);
            $this->assertDatabaseHas('users', [
            'email'=>$user->email,
           ]);
        }
}

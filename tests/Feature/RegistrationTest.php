<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;
use App\Http\Livewire\Auth\Register;

class RegistrationTest extends TestCase
{

    /**
 * @test
 */
      use RefreshDatabase;


    public function can_register()
    {
        Livewire::test(Register::class)
        ->set('name', 'fathul')
        ->set('email', 'fathul@gmail.com')
        ->set('password', '123')
        ->set('passwordConfirmation', '123')
        //->assertRedirect()
        ->call('register')
        ->assertOk();
        $this->then_redirect();

        $poop=$this->get(\route('register.success'));
        // $poop->assertRedirect();


    }

    public function then_redirect(){
        $response = $this->get(\route('register.success'));
        $response->assertStatus(200)
        ;

    }
}

<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use App\Http\Livewire\Auth\Register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationTest extends TestCase
{



    use RefreshDatabase;

    /** @test */
    public function registration_page_contains_livewire_component()
    {
        $this->get('/register')->assertSeeLivewire('auth.register');
    }

    /** @test */
    public function user_can_register()
    {
        Livewire::test(Register::class)
        ->set('name', 'fathul')
        ->set('email', 'fathulkb@gmail.com')
        ->set('password', '')
        ->set('passwordConfirmation', '123')
        ->call('register')
        ->assertOk();
    }

     /** @test */
     public function can_detect_redirect()
     {
         $component = Livewire::test(Register::class)->call('getRedirect');

       //  $this->expectException(\PHPUnit\Framework\AssertionFailedError::class);

         $component->assertRedirect();
     }


    /** @test */
    public function redirect_page_is_available()
    {
        $response = $this->get(\route('welcome'));
        $response->assertStatus(200);
        $response->assertViewIs('welcome')
        ;
    }

    /** @test */
    public function fields_is_required()
    {
        Livewire::test(Register::class)
        ->set('name', '')
        ->set('email', '')
        ->set('password', '')
        ->call('register')
        ->assertHasErrors(['name'=>'required'])
        ->assertHasErrors(['email'=>'required'])
        ->assertHasErrors(['password'=>'required']);

    }

    /** @test */
    public function table_can_be_inserted()
    {
       $user= User::create([
        'name' => 'momo',
        'email'=>'fathulkb@dsd.com',
        'password'=>Hash::make('$value')
    ]);
       $this->assertDatabaseHas('users',[
        'id'=>$user->id,
       ]);

    }

    /** @test */
    public function email_is_unique()
    {
        User::create([
            'name' => 'momo',
            'email'=>'fathulkb@dsd.com',
            'password'=>Hash::make('$value')
        ]);
        Livewire::test(Register::class)
        ->set('name', 'sdsd')
        ->set('email', 'fathulkb@dsd.com')
        ->set('password', '')
        ->call('register')
        ->assertHasErrors(['email'=>'unique']);
    }

    /** @test */
    public function password_minimum_6_char()
    {
        Livewire::test(Register::class)
        ->set('password', 'ssd')
        ->call('register')
        ->assertHasErrors(['password'=>'min']);
    }

    /** @test */
    public function password_confirmation_must_be_same()
    {
        Livewire::test(Register::class)
        ->set('password', 'password')
        ->set('passwordConfirmation', 'no-password')
        ->call('register')
        ->assertHasErrors(['password'=>'same']);
        // ->assertHasErrors(['password'=>'min']);
    }
}

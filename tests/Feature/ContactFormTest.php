<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{

    /**
     * Check if many page contains contact form livewire component
     */
    /** @test */
    public function contains_contact_form_livewire_component()
    {
        $this->get('/')->assertSeeLivewire('contact-form');

    }

    /**
     * Check if contact form is working
     */
    /** @test */
    public function contact_form_is_working()
    {
        Mail::fake();

        Livewire::test(ContactForm::class)
            ->set('name', 'PixelTux')
            ->set('email', 'pixeltux@mail.com')
            ->set('phone', '01234')
            ->set('message', 'This is a test message.')
            ->call('submitForm')
            ->assertSee('We received your message successfully and will get back to you shortly!');
        
        Mail::assertQueued(function (ContactFormMailable $mail) {
            $mail->build();
            return $mail->hasTo('pixeltux@mail.com') &&
                $mail->hasFrom('pixeltux@mail.com') &&
                $mail->hasSubject('Contact Form Submission');
        });
    }

    /**
     * Check contsct form filds are required
     */
    /** @test */
    public function contact_form_fields_are_required()
    {
        Livewire::test(ContactForm::class)
            ->call('submitForm')
            ->assertHasErrors([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'message' => 'required',
        ]);
    }

    /**
     * Check other form field requirements
     */
    /** @test */
    public function contact_other_form_field_requirements()
    {
        Livewire::test(ContactForm::class)
        ->set('name', 'PixelTux')
        ->set('email', 'pixeltux')
        ->set('phone', '012')
        ->set('message', 'Th')
        ->call('submitForm')
            ->call('submitForm')
            ->assertHasErrors([
                'email' => 'email',
                'phone' => 'digits_between:4,12',
                'message' => 'min:5',
        ]);
    }
}

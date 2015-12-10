# advice
Chearaan Tools

Using Composer
composer require chearaan/advice

Add the service provider to config/app.php

Chearaan\Advice\AdviceServiceProvider::class,
Optionally include the Facade in config/app.php if you'd like.

Advice => Chearaan\Advice\Facades\Advice::class,
Note, there is a advice() function available, so unless you really want to use the Facade, there's no need to include it.

Usage

Basic

From your application, call the flash method with a message and type.
advice()->flash('Welcome back!', 'success');

Within a view, you can now check if a flash message exists and output it.

@if (advice()->ready())
    <div class="alert-box {{ advice()->type() }}">
        {{ advice()->message() }}
    </div>
@endif

Notify is front-end framework agnostic, so you're free to easily implement the output however you choose.
Options
You can pass additional options to the flash method, which are then easily accessible within your view.
advice()->flash('Welcome back!', 'success', [
    'timer' => 3000,
    'text' => 'It\'s really great to see you again',
]);
Then, in your view.
@if (advice()->ready())
    <script>
        swal({
            title: "{!! advice()->message() !!}",
            text: "{!! advice()->option('text') !!}",
            type: "{{ advice()->type() }}",
            @if (advice()->option('timer'))
                timer: {{ advice()->option('timer') }},
                showConfirmButton: false
            @endif
        });
    </script>
@endif
 
The above example uses SweetAlert, but the flexibily of Advice  means you can easily use it with any JavaScript alert solution.
Issues and contribution
Just submit an issue or pull request through GitHub. Thanks!


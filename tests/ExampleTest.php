<?php

use Illuminate\Support\Facades\Mail;
use SultanulArefin\PasswordChangedNotification\Tests\Models\User;

it('can send mail to the users when password is changed', function ()
{
    Mail::fake();

    $user = User::factory()->create();

    $user->password = bcrypt('password2');
    $user->save();

    Mail::assertSent($user->passwordChangedNotificationMail()::class);
});

it('will not send mail to the users when password is not changed', function ()
{
    Mail::fake();

    $user = User::factory()->create();

    $user->name = 'arefin';
    $user->save();

    Mail::assertNotSent($user->passwordChangedNotificationMail()::class);
});

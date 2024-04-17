<?php

namespace SultanulArefin\PasswordChangedNotification\Contracts;

use Illuminate\Mail\Mailable;

interface PasswordChangedNotificationContract
{
    public function isPasswordChanged(): bool;

    public function passwordColumnName(): string;

    public function emailColumnName(): string;

    public function passwordChangedNotificationMail(): Mailable;

    public function shouldPasswordChangedNotificationMailBeQueued(): bool;

    public function sendPasswordChangedNotification(): void;
}

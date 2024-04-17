<?php

namespace SultanulArefin\PasswordChangedNotification\Observers;

use SultanulArefin\PasswordChangedNotification\Contracts\PasswordChangedNotificationContract;

class PasswordChangedObserver
{
    public function updated(PasswordChangedNotificationContract $model)
    {
        $model->sendPasswordChangedNotification();
    }
}

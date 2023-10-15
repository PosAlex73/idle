<?php

namespace Portal\Portal\enums;

class UserSetting
{
    use Enumable;

    public const GET_NOTIFICATIONS = 'A';
    public const GET_EMAIL_FROM_ADMIN = 'B';
    public const PUBLIC_PROFILE = 'P';
}

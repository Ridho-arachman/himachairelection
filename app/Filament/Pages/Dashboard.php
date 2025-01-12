<?php

namespace App\Filament\Pages;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected int | string | array $columnSpan = 1;
    protected static ?string $title = 'Dashboard';
}

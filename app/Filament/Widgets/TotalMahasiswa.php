<?php

namespace App\Filament\Widgets;

use App\Models\Mahasiswa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalMahasiswa extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Mahasiswa', Mahasiswa::count())
                ->description("Jumlah seluruh mahasiswa")
                ->descriptionIcon('heroicon-o-users')
                ->color('success')
        ];
    }
}

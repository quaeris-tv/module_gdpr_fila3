<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

use Filament\Forms;
use Modules\Gdpr\Models\Consent;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ConsentResource extends XotBaseResource
{
    protected static ?string $model = Consent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Consent Name')
                ->required(),
            Forms\Components\TextInput::make('description')
                ->label('Description')
                ->nullable(),
        ];
    }
}

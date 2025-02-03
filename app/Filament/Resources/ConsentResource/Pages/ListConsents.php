<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ConsentResource\Pages;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\ConsentResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * @see ConsentResource
 */
class ListConsents extends XotBaseListRecords
{
    protected static string $resource = ConsentResource::class;

    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->label('ID'),

            'treatment_id' => TextColumn::make('treatment.name')
                ->searchable()
                ->sortable()
                ->label('Treatment'),

            'subject_id' => TextColumn::make('subject.name')
                ->searchable()
                ->sortable()
                ->label('Subject'),

            'is_accepted' => IconColumn::make('is_accepted')
                ->boolean()
                ->label('Accepted'),

            'data_creazione' => TextColumn::make('data_creazione')
                ->dateTime()
                ->sortable()
                ->label('Creation Date'),

            'data_ultima_modifica' => TextColumn::make('data_ultima_modifica')
                ->dateTime()
                ->sortable()
                ->label('Last Modified'),
        ];
    }
}

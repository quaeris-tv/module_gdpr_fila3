<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;

class EditConsent extends EditRecord
{
    protected static string $resource = ConsentResource::class;
}

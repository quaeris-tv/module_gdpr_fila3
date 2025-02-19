<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ConsentResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Modules\Gdpr\Filament\Resources\ConsentResource;

class EditConsent extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = ConsentResource::class;
}

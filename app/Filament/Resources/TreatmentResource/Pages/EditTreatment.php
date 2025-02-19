<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Modules\Gdpr\Filament\Resources\TreatmentResource;

class EditTreatment extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = TreatmentResource::class;
}

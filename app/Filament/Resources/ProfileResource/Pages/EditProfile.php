<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Modules\Gdpr\Filament\Resources\ProfileResource;

class EditProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = ProfileResource::class;
}

<?php

namespace Modules\Website\Filament\Clusters\Website\Resources\Projects\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\ProjectResource;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

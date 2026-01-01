<?php

namespace Modules\Website\Filament\Clusters\Website\Resources\Projects\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\ProjectResource;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

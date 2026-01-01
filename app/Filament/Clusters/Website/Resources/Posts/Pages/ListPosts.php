<?php

namespace Modules\Website\Filament\Clusters\Website\Resources\Posts\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Website\Filament\Clusters\Website\Resources\Posts\PostResource;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

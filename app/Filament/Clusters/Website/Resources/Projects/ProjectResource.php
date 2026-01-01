<?php

namespace Modules\Website\Filament\Clusters\Website\Resources\Projects;

use Modules\Website\Models\Project;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\Pages\CreateProject;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\Pages\EditProject;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\Pages\ListProjects;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\Schemas\ProjectForm;
use Modules\Website\Filament\Clusters\Website\Resources\Projects\Tables\ProjectsTable;
use Modules\Website\Filament\Clusters\Website\WebsiteCluster;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $cluster = WebsiteCluster::class;

    protected static ?string $recordTitleAttribute = 'project';

    public static function form(Schema $schema): Schema
    {
        return ProjectForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}

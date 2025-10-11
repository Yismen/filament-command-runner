<?php

namespace BinaryBuilds\CommandRunner\Resources\CommandRuns\Pages;


use Filament\Resources\Pages\ListRecords;
use BinaryBuilds\CommandRunner\Resources\CommandRuns\CommandRunResource;

class ListCommandRuns extends ListRecords
{
    protected static string $resource = CommandRunResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}

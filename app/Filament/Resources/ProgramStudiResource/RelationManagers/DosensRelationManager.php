<?php

namespace App\Filament\Resources\ProgramStudiResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\AttachAction;


class DosensRelationManager extends RelationManager
{
    protected static string $relationship = 'dosens';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
           ->recordTitleAttribute('nama_lengkap')
            ->columns([
                ImageColumn::make('foto')
                    ->circular(),
                TextColumn::make('nama_lengkap')
                    ->searchable(),
                TextColumn::make('nip')
                    ->label('NIP'),
                TextColumn::make('jabatan_fungsional')
                    ->label('Jabatan'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make() // <-- GANTI JADI INI
                    ->preloadRecordSelect(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

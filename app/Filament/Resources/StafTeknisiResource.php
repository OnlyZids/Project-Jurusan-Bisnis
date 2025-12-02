<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StafTeknisiResource\Pages;
use App\Filament\Resources\StafTeknisiResource\RelationManagers;
use App\Models\StafTeknisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class StafTeknisiResource extends Resource
{
    protected static ?string $model = StafTeknisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Civitas';

    protected static ?string $modelLabel = 'Staf Teknisi'; // Nama satuan
    protected static ?string $pluralModelLabel = 'Staf Teknisi'; // Nama jamak (di menu)
    protected static ?string $navigationLabel = 'Staf Teknisi'; // Label di sidebar


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('posisi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->image()
                    ->imageEditor()
                    ->directory('foto-staf')
                    ->columnSpanFull(),

                    Select::make('program_studi_id')
                    ->relationship('programStudi', 'nama_prodi') // 'nama_prodi' adalah kolom yg ditampilin
                    ->label('Bertugas di Program Studi')
                    ->searchable()
                    ->preload()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('posisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->circular()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListStafTeknisis::route('/'),
            'create' => Pages\CreateStafTeknisi::route('/create'),
            'edit' => Pages\EditStafTeknisi::route('/{record}/edit'),
        ];
    }
}

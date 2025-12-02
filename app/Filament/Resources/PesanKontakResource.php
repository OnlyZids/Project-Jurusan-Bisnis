<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesanKontakResource\Pages;
use App\Filament\Resources\PesanKontakResource\RelationManagers;
use App\Models\PesanKontak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\CreateRecord;

class PesanKontakResource extends Resource
{
    protected static ?string $model = PesanKontak::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Pesan Kontak'; // Nama satuan
    protected static ?string $pluralModelLabel = 'Pesan Kontak'; // Nama jamak (di menu)
    protected static ?string $navigationLabel = 'Pesan Kontak'; // Label di sidebar


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subjek')
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\Textarea::make('pesan')
                    ->rows(10)
                    ->columnSpanFull()
                    ->disabled(),
                Forms\Components\Select::make('status')
                    ->options([
                        'baru' => 'Baru',
                        'dibaca' => 'Dibaca',
                    ])
                    ->default('baru'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subjek')
                    ->searchable()
                    ->limit(40),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'baru',
                        'success' => 'dibaca',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diterima Tgl')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => \App\Filament\Resources\PesanKontakResource\Pages\ListPesanKontaks::route('/'),
            'edit' => \App\Filament\Resources\PesanKontakResource\Pages\EditPesanKontak::route('/{record}/edit'), // Kita pakai Edit untuk ubah status
            // 'view' => \App\Filament\Resources\PesanKontakResource\Pages\ViewPesanKontak::route('/{record}'), // Aktifkan view
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramStudiResource\Pages;
use App\Filament\Resources\ProgramStudiResource\RelationManagers;
use App\Models\ProgramStudi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\Tabs;

class ProgramStudiResource extends Resource
{
    protected static ?string $model = ProgramStudi::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Program Studi';

    protected static ?string $modelLabel = 'Program Studi'; // Nama satuan
    protected static ?string $pluralModelLabel = 'Program Studi'; // Nama jamak (di menu)
    protected static ?string $navigationLabel = 'Program Studi'; // Label di sidebar


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Tabs::make('Detail Program Studi')
                ->tabs([

                    Tabs\Tab::make('Info Utama')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            TextInput::make('nama_prodi')
                                ->required()->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (string $operation, $state, \Filament\Forms\Set $set) => 
                                    $operation === 'create' ? $set('slug', Str::slug($state)) : null
                                ),
                            TextInput::make('slug')
                                ->required()->maxLength(255)->unique(ignoreRecord: true),
                            Select::make('jenjang')
                                ->options(['D3' => 'D3', 'D4' => 'D4 (Sarjana Terapan)'])
                                ->required(),
                            TextInput::make('gelar')->maxLength(255),
                            FileUpload::make('foto_banner')
                                ->label('Foto Banner/Sampul')
                                ->image()->imageEditor()->disk('public')->directory('prodi-banners'),
                            Textarea::make('deskripsi_singkat')
                                ->label('Deskripsi Singkat (buat di homepage)')
                                ->rows(3)->columnSpanFull(),
                        ])->columns(2), // Bikin 2 kolom

                    Tabs\Tab::make('Tujuan Utama (Visi, Misi, Tujuan)')
                        ->icon('heroicon-o-rocket-launch')
                        ->schema([
                            RichEditor::make('visi_misi')->columnSpanFull(),
                            RichEditor::make('tujuan')
                                ->label('Tujuan Program Studi')
                                ->columnSpanFull(),
                        ]),

                    Tabs\Tab::make('Profil Lulusan')
                        ->icon('heroicon-o-user-group')
                        ->schema([
                            RichEditor::make('profil_lulusan')
                                ->label('Keterangan Profil Lulusan')
                                ->columnSpanFull(),
                        ]),

                    Tabs\Tab::make('Mata Kuliah')
                        ->icon('heroicon-o-table-cells')
                        ->schema([
                            FileUpload::make('gambar_mata_kuliah')
                                ->label('Upload Gambar Struktur Mata Kuliah')
                                ->image()->disk('public')->directory('prodi-matkul'),
                            Textarea::make('keterangan_mata_kuliah')
                                ->label('Keterangan di Bawah Gambar')
                                ->rows(5),
                        ]),

                    Tabs\Tab::make('Akreditasi')
                        ->icon('heroicon-o-academic-cap')
                        ->schema([
                            FileUpload::make('gambar_akreditasi')
                                ->label('Upload Gambar Sertifikat Akreditasi')
                                ->image()->disk('public')->directory('prodi-akreditasi'),
                            Textarea::make('keterangan_akreditasi')
                                ->label('Keterangan di Bawah Gambar')
                                ->rows(5),
                        ]),

                ])->columnSpanFull(), // Pastikan Tabs-nya full width
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto_banner')
                    ->label('Foto')
                    ->height(100)
                    ->width(100),
                TextColumn::make('nama_prodi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('jenjang')
                    ->sortable(),
                TextColumn::make('visi_misi')
                    ->label('Visi Misi')
                    ->html()
                    ->limit(100)
                    ->sortable(),
                TextColumn::make('deskripsi_singkat')
                    ->label('Deskripsi Singkat')
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->deskripsi_singkat),
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
            RelationManagers\DosensRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgramStudis::route('/'),
            'create' => Pages\CreateProgramStudi::route('/create'),
            'edit' => Pages\EditProgramStudi::route('/{record}/edit'),
        ];
    }
}

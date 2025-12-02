<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Filament\Resources\PrestasiResource\RelationManagers;
use App\Models\Prestasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;


class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?string $navigationGroup = 'Informasi';

    protected static ?string $modelLabel = 'Prestasi'; // Nama satuan
    protected static ?string $pluralModelLabel = 'Prestasi'; // Nama jamak (di menu)
    protected static ?string $navigationLabel = 'Prestasi'; // Label di sidebar


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Detail Prestasi')->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Nama Prestasi / Lomba')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, \Filament\Forms\Set $set) => 
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                            ),
                            
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        Forms\Components\TextInput::make('pemenang')
                            ->label('Nama Pemenang / Tim')
                            ->placeholder('Contoh: Tim Robotik atau Ahmad Dani')
                            ->maxLength(255),

                        Forms\Components\Select::make('tingkat')
                            ->options([
                                'Kabupaten' => 'Kabupaten',
                                'Provinsi' => 'Provinsi',
                                'Nasional' => 'Nasional',
                                'Internasional' => 'Internasional',
                            ]),

                        Forms\Components\DatePicker::make('tanggal')
                            ->label('Tanggal Prestasi')
                            ->required(),
                    ])
                ]),

                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Dokumentasi')->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto Penyerahan / Sertifikat')
                            ->image()
                            ->imageEditor()
                            ->directory('prestasi-foto')
                            ->disk('public'),
                            
                        Forms\Components\Textarea::make('deskripsi')
                            ->label('Deskripsi Singkat')
                            ->rows(5)
                            ->required(),
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Prestasi $record): string => $record->pemenang ?? '-'), // Nampilin nama pemenang di bawah judul
                Tables\Columns\TextColumn::make('tingkat')
                    ->badge() // Biar ada warnanya dikit
                    ->color(fn (string $state): string => match ($state) {
                        'Internasional' => 'success',
                        'Nasional' => 'warning',
                        'Provinsi' => 'info',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }
}

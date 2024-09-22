<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementResource\Pages;
use App\Filament\Resources\AdvertisementResource\RelationManagers;
use App\Models\Advertisement;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvertisementResource extends Resource
{
    protected static ?string $model = Advertisement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->required(),
                    Textarea::make('description')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('link')
                        ->required()
                        ->label('Link / Call to action')
                        ->maxLength(255),
                    FileUpload::make('image')
                        ->required()
                        ->image()
                        ->optimize('webp')
                        ->maxSize(2048)
                        ->label('Image')
                        ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/gif'])
                        ->directory('advertisments')
                        ->disk('public'),
                    Select::make('type_ads')
                        ->options([
                            'banner',
                            'post',
                        ])
                        ->label('Select type of advertisement')
                        ->required(),
                    Toggle::make('is_active')
                        ->label('Active')
                        ->inline(false)
                        ->default(1)
                        ->onIcon('heroicon-s-eye')
                        ->offIcon('heroicon-s-lock-closed')
                        ->onColor('success')
                        ->offColor('danger'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('link')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image'),
                ToggleColumn::make('is_active')
                    ->label('Active')
                    ->onIcon('heroicon-s-eye')
                    ->offIcon('heroicon-s-lock-closed')
                    ->onColor('success')
                    ->offColor('danger'),

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
            'index' => Pages\ListAdvertisements::route('/'),
            'create' => Pages\CreateAdvertisement::route('/create'),
            'edit' => Pages\EditAdvertisement::route('/{record}/edit'),
        ];
    }
}

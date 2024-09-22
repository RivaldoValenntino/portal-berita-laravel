<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Set;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Set $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->unique(Post::class, 'slug', ignoreRecord: true),
                    RichEditor::make('content')
                        ->required()
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('posts')
                        ->fileAttachmentsVisibility('public'),
                    TagsInput::make('tags')
                        ->required()
                        ->columns(2),
                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required()
                        ->searchable()
                        ->label('Category'),
                    Hidden::make('user_id')
                        ->default(Auth::user()->id),
                    FileUpload::make('thumbnail')
                        ->required()
                        ->image()
                        ->optimize('webp')
                        ->maxSize(2048)
                        ->label('Upload Thumbnails')
                        ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/gif'])
                        ->directory('thumbnails')
                        ->disk('public'),
                    Toggle::make('is_published')
                        ->label('Published')
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
        $user = Auth::user();
        $user_id = $user->id;
        return $table
            ->modifyQueryUsing(function (Builder $query) use ($user_id) {
                $query->where('user_id', $user_id);
            })
            ->columns([
                TextColumn::make('title')
                    ->limit(20)
                    ->searchable(),
                TextColumn::make('category.name')
                    ->searchable(),
                TextColumn::make('tags')
                    ->searchable(),
                TextColumn::make('content')
                    ->limit(20)
                    ->html()
                    ->searchable(),
                ImageColumn::make('thumbnail')
                    ->searchable(),
                ToggleColumn::make('is_published')
                    ->label('Privacy')
                    ->onIcon('heroicon-s-eye')
                    ->offIcon('heroicon-s-lock-closed')
                    ->onColor('success')
                    ->offColor('danger'),
                TextColumn::make('created_at')
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
                    Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
                        foreach ($records as $key => $value) {
                            if ($value->thumbnail) {
                                Storage::disk('public')->delete($value->thumbnail);
                            }
                        }
                    }),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

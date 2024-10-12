<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                
                    ->required()
                    ->label('Judul'),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
                    Forms\Components\Select::make('kategori')
                    ->options([
                        'Sosial dan Kemasyarakatan' => 'Sosial dan Kemasyarakatan',
                        'Kesehatan dan Kesejahteraan' => 'Kesehatan dan Kesejahteraan',
                        'Keagamaan' => 'Keagamaan',
                        'Teknologi Lingkungan' => 'Teknologi Lingkungan',
                        'Edukasi dan Kesadaran Lingkungan' => 'Edukasi dan Kesadaran Lingkungan',
                        'Konservasi Alam dan Keanekaragaman Hayati' => 'Konservasi Alam dan Keanekaragaman Hayati',
                    ])
                    ->required()
                    ->label('Kategori'),
                Forms\Components\DatePicker::make('deadline')
                    ->label('Deadline')
                    ->nullable(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Selesai' => 'Selesai',
                        'Berlangsung' => 'Berlangsung',
                    ])
                    ->required()
                    ->label('Status'),
                Forms\Components\TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->nullable(),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->nullable(),
                Forms\Components\TextInput::make('link')
                    ->label('Link')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->label('Judul')->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
                Tables\Columns\TextColumn::make('kategori')->label('Kategori'),
                Tables\Columns\TextColumn::make('deadline')->label('Deadline')->date(),

                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('lokasi')->label('Lokasi'),
                Tables\Columns\ImageColumn::make('gambar')->label('Gambar'),
                Tables\Columns\TextColumn::make('link')->label('Link'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

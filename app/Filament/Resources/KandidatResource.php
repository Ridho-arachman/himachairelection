<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KandidatResource\Pages;
use App\Models\Kandidat;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KandidatResource extends Resource
{
    protected static ?string $model = Kandidat::class;

    protected static ?string $navigationIcon = 'heroicon-s-user';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            FileUpload::make('image')
                ->label('Foto')
                ->image()
                ->disk('public') // Disk penyimpanan
                ->directory('kandidat') // Direktori penyimpanan file
                ->visibility('public') // File dapat diakses publik
                ->required(),
            Textarea::make('visi_misi')
                ->label('Visi & Misi')
                ->required()
                ->columnSpanFull(),
            TextInput::make('prodi')
                ->label('Program Studi')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nim_kandidat')
                ->label('NIM')
                ->searchable(),
            TextColumn::make('nama')
                ->label('Nama')
                ->searchable(),
            ImageColumn::make('fot')
                ->label('Foto')
                ->circular()
                ->defaultImageUrl(url('/images/54b19ada-d53e-4ee9-8882-9dfed1bf1396.jpg'))
                // ->getStateUsing(function ($record) {
                //     return asset('storage/' . $record->image); // Menggunakan URL yang benar
                // })
                ->width(50) // Menentukan lebar gambar
                ->height(50), // Menentukan tinggi gambar
            TextColumn::make('kd_prodi')
                ->label('Program Studi')
                ->searchable(),
            TextColumn::make('created_at')
                ->label('Dibuat Pada')
                ->dateTime()
                ->sortable(),
            TextColumn::make('updated_at')
                ->label('Diperbarui Pada')
                ->dateTime()
                ->sortable(),
        ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKandidats::route('/'),
            'create' => Pages\CreateKandidat::route('/create'),
            'edit' => Pages\EditKandidat::route('/{record}/edit'),
        ];
    }
}

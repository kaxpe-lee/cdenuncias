<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DenunciaResource\Pages;
use App\Filament\Resources\DenunciaResource\RelationManagers;
use App\Models\Denuncia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DenunciaResource extends Resource
{
    protected static ?string $model = Denuncia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('empresa_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('denunciante_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('terceros_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('estado_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('conciencia_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('relacion_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('condiciones')
                    ->required(),
                Forms\Components\Toggle::make('proteccion_datos')
                    ->required(),
                Forms\Components\Toggle::make('anonimato')
                    ->required(),
                Forms\Components\TextInput::make('identifica')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sosfecha')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_terceros')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lugar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('fichero')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('uuid')
                    ->label('UUID')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('empresa_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('denunciante_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('terceros_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('conciencia_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('relacion_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('condiciones')
                    ->boolean(),
                Tables\Columns\IconColumn::make('proteccion_datos')
                    ->boolean(),
                Tables\Columns\IconColumn::make('anonimato')
                    ->boolean(),
                Tables\Columns\TextColumn::make('identifica')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosfecha')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_terceros')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lugar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fichero')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uuid')
                    ->label('UUID')
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
            'index' => Pages\ListDenuncias::route('/'),
            'create' => Pages\CreateDenuncia::route('/create'),
            'edit' => Pages\EditDenuncia::route('/{record}/edit'),
        ];
    }
}

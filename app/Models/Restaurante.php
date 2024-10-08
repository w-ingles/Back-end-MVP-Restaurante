<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nome',
        'descricao',
        'endereco',
        'telefone',
        'horario_funcionamento',
        'website',
        'avaliacao',
        'proprietario_id',
        'patch_foto'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function cardapios()
    {
        return $this->hasMany(Cardapio::class);
    }

    public function proprietario()
    {
        return $this->belongsTo(User::class, 'proprietario_id', 'id');
    }


}

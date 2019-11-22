<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Participante
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $identificador
 * @property string|null $nome
 * @property string|null $foto
 * @property bool $entrada
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereEntrada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereIdentificador($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participante whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Participante extends Model
{
    protected $table = 'participantes';

    protected $fillable = [
        'identificador',
        'nome',
        'foto',
        'entrada',
    ];

    public function avatar() {
        if (isset($this->foto)) {
            return route('avatar', $this->id);
        }
        else {
            return asset('images/user.png');
        }
    }
}

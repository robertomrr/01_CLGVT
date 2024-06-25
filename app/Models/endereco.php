<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class endereco extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'root.endereco';
    protected $primaryKey = 'id';
    protected $fillable =   [   'rua',
                                'bairro',
                                'cidade',
                                'uf',
                                'ibge',
                            ];

}

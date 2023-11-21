<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = 'tarefas';
    protected $fillable = [ 'nomeTarefa', 'observacao', 'cliente_id','categoria_id', 'dataFim', 'dataInicio'];
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'titulo'
    ];

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    /**
     * @return array
     */
    public function getOptionsSelect()
    {
        $categorias = $this->all();
        $optionsSelect = [];
        foreach ($categorias as $categoria) {
            $optionsSelect[$categoria->id] = $categoria->titulo;
        }

        return $optionsSelect;
    }
}

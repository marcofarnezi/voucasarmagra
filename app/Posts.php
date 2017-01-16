<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'titulo',
        'titulo_index',
        'subtitulo_index',
        'texto',
        'texto_index',
        'categoria_id'
    ];
    
    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class, 'posts_files');
    }

    public function getFilesListAttribute()
    {
        $files = $this->files->all();
        $filesPath = [];

        foreach ($files as $file) {
            $filesPath[] = $file->path;
        }

        return implode(', ', $filesPath);
    }

    public function getIdFriendly()
    {
       $title = $this->titulo_index;

       return str_replace(' ','-',strtolower($title));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TArticle extends Model
{
    protected $table = 't_articles';
    use HasFactory;

    protected $fillable = [
        'article_kind', 'title', 'sub_title', 'content', 'top_image',
        'post_user', 'status_id', 'view_count', 'created_at', 'updated_at', 'is_deleted',
    ];
}

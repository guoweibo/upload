<?php

namespace Flagrow\Upload;

use Carbon\Carbon;
use Flarum\Core\Post;
use Flarum\Core\User;
use Flarum\Database\AbstractModel;

/**
 * @property int $id
 *
 * @property string $base_name
 * @property string $path
 * @property string $url
 * @property string $type
 * @property int $size
 *
 * @property int $post_id
 * @property Post $post
 *
 * @property int $actor_id
 * @property User $actor
 *
 * @property Carbon $created_at
 */
class File extends AbstractModel
{
    protected $table = 'flagrow_files';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function actor()
    {
        return $this->belongsTo(User::class, 'actor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
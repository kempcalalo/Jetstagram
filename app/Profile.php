<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];


    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'https://jetstagram-bucket.s3.amazonaws.com/resources/default-avatar.png';

        return  'https://jetstagram-bucket.s3.amazonaws.com/profile/' .$imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}

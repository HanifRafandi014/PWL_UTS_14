<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Posyandu as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Posyandu extends Model
{
    use HasFactory;
    protected $table="posyandu";

    public $timestamps= false;
    protected $primaryKey = 'no_urut';

    protected $fillable = [
        'no_urut',
        'nama',
        'alamat',
        'tanggal_lahir',
        'bb_lahir',
        'tb_lahir',
    ];
}

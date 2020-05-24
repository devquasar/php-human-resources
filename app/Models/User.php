<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'username',
        'password',
        'first_name',
        'last_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getName()
    {
        if ($this->first_name && $this->second_name && $this->last_name)
        {
            return  "{$this->first_name} {$this->second_name} {$this->last_name}";
        }
        if ($this->first_name && $this->second_name)
        {
            return  "{$this->first_name} {$this->second_name}";
        }
        if ($this->first_name)
        {
            return $this->first_name;
        }
        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    public function getFirstNameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }

    public function getAvatarUrl()
    {
        return "https://www.gravatar.com/avatar/{{ md5($this->email)?d=identicon&s=40 }}";
    }
    
    public function getPhoneNumber()
    {
        if ($this->phone)
        {
            return "{$this->phone}";
        }
        else
        return "Нет данных";
    }
    public function getBirthDate()
    {
        if ($this->birth_date)
        {
            return "{$this->birth_date}";
        }
        else
        return "Нет данных";
    }
    public function getStartWork()
    {
        if ($this->start_work)
        {
            return "{$this->start_work}";
        }
        else
        return "Нет данных";
    }
    public function getEndWork()
    {
        if ($this->end_work)
        {
            return "{$this->end_work}";
        }
        else
        return "Нет данных";
    }
    public function getAddress()
    {
        if ($this->address)
        {
            return "{$this->address}";
        }
        else
        return "Нет данных";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'first_name',
        'second_name',
        'last_name',
        'male',
        'birth_date',
        'phone',
        'email',
        'position',
        'start_work',
        'end_work',
        'address',
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

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentXsls extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'direction' => $this->direction->title,
            'работа' => $this->plan->job,
            'армия' => $this->plan->army,
            'бизнес' => $this->plan->business,
            'декрет' => $this->plan->decree,
            'обучение' => $this->plan->education,
            'университет' => $this->plan->university,
            'уровень обучения' => $this->plan->level,
            'другое' => $this->plan->other,
            'желает работать по специальности' => $this->specialty_activity,
            'рассылка' => $this->agreement,
            'работает по специальности' => $this->employment != null ?  $this->employment->speciality : '',
            'Компания' => $this->employment != null ?  $this->employment->company : '',
            'Должность' => $this->employment != null ?  $this->employment->position : '',
            'Город' => $this->employment != null ?  $this->employment->position : '',
//            'компания' => $this->employment->companies->title,
//            'должность' => $this->employment->positions->title,
        ];
    }
}

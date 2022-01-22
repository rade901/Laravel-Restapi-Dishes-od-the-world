<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> (string) $this->id,
            'type'=>'Tags',
            'attributes'=>[
                'title'=>$this->title,
                'slug'=>$this->slug,
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at,
            ]
        
        ];
    }
}

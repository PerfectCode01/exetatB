<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'lib'=>$this->lib,
            'cour_id'=>$this->cour_id,
            'edition_id'=>$this->edition_id,
            'point'=>$this->point,
        ];
    }
}

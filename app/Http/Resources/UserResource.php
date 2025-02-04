<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use function PHPSTORM_META\map;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phones' => $this->phones->map(function ($phone) {
                return '(' . $phone->prefix . ') ' . $phone->phone_number;
            })->toArray(),
            'roles' => $this->roles->map(function ($role) {
                return [
                    'name' => $role->name,
                    'added_by' => $role->pivot->added_by
                ];
            })->toArray(),
            'sims' => $this->phoneSims->map(function($sim) {
                return $sim->company;
            })->toArray()
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParkingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'zone' => [
                'name' => $this->zone->name,
                'price_per_hour' => $this->zone->price_per_hour,
            ],
            'vehicle' => [
                'plate_number' => $this->vehicle->plate_number,
            ],
            'start_time' => $this->start_time->toDateTimeString(),
            'stop_time' => $this->stop_time?->toDateTimeString(),
            'total_price' => $this->total_price,
        ];
    }
}

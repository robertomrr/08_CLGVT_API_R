<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Original_________________________________________________________________________Nativo resultado do comando php artisan make:resource UserCollection
        return parent::toArray($request);

        // Custom___________________________________________________________________________
        //Para personalizar a resposta da coleção de recursos, se criar um recurso dedicado para representar a coleção:  php artisan make:resource UserCollection
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];        

    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public static $wrap ='post'; 
    // kada vrati podatke, nece napisati 'data':{...} vec 'post':{...}
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->resource->id,
            'title'=>$this->resource->title,
            'category'=>$this->resource->category_id,
            'user'=>$this->resource->user,
            'excerpt'=>$this->resource->excerpt,
            'body'=>$this->resource->body,           
        ];
        // navodimo sve podatke koje zelimo da se prikazu o nasem postu
        // levi deo je onako kako mi zelimo da se zove
        // desni eo je onako kako se ta kolona zove u bazi
    }
}

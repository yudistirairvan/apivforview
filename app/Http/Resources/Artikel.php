<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Artikel extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'id_user' => $this->id_user,
            'id_kategori' => $this->id_kategori,
            'judul' => $this->judul,
            'day' => $this->day,
            'month' => $this->month,
            'year' => $this->year,
            'edited' => $this->edited,
            'publish' => $this->publish,
            'konten' => $this->konten,
            'gambar' => $this->gambar,
            'file' => $this->file,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

class InventarisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $currentURL = Request::getHost();
        return[
            'id'=>$this->id,
            'kode' =>$this->kode,
            'nama' =>$this->nama,
            'deskripsi' =>$this->deskripsi,
            'kuantitas' =>$this->kuantitas,
            'dibuat'=>$this->created_at,
            'diubah' => $this->updated_at,
            'gambar'=> $currentURL.'/storage/'.$this->gambar,
        ];
    }
    }

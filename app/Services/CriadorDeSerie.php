<?php

namespace App\Services;

use App\Serie;
use App\Temporada;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie{
    public function criarSerie(
        string $nomeSerie, int $qtdTemporadas, int $epPorTemporada
    ) : Serie{
        
        DB::beginTransaction();
        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criaTemporadas($serie, $qtdTemporadas, $epPorTemporada);
        DB::commit();

        return $serie;
    }

    private function criaTemporadas(Serie $serie, int $qtdTemporadas, int $epPorTemporada){
        for($i=1; $i <= $qtdTemporadas; $i++){
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            $this->criaEpisodios($epPorTemporada, $temporada);
        }
    }

    private function criaEpisodios(int $epPorTemporada, Temporada $temporada){
        for($j = 1; $j <= $epPorTemporada; $j++){
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
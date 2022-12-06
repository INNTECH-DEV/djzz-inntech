<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'nume_client', 
        'prenume_client', 
        'email_client', 
        'telefon_client', 
        'id_user', 
        'localitate', 
        'judet', 
        'strada', 
        'nr_strada', 
        'etaj',
        'bloc', 
        'scara', 
        'apartament', 
        'cod_postal', 
        'localitate_consum', 
        'judet_consum', 
        'strada_consum',
        'nr_strada_consum', 
        'bloc_consum', 
        'scara_consum',
        'etaj_consum',
        'apartament_consum', 
        'cod_postal_consum', 
        'email', 'cod_client', 
        'nlc', 
        'putere_panou', 
        'putere_invertor', 
        'nr_panouri', 
        'nume_invertor', 
        'serie_invertor', 
        'model_invertor',
        'serie_smartmeter',
        'nume_smartmeter',
        'atr',
        'nr_afm',
        'serie_factura_finala',
        'data_factura_finala',
        'cnp',
        'nr_carte_funciara',
        'nr_cadastral',
        'serie_buletin',
        'nr_buletin',
        'producator_invertor',
        'nume_invertor',
        'nume_invertor',
        'valoare_contract'];

        /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id');
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            ['id'=> 1, 'nome' => 'Enrico', 'cognome' => 'Gregorini', 'username' => 'Enri.Grego', 'email' => 's1090158@studenti.univpm.it', 'password' => 'tweb', 'livello' => 4, 'organizzazione' => 'NULL'],
            ['id'=> 2, 'nome' => 'Daniele', 'cognome' => 'Gjeka', 'username' => 'Dani.Gjeka', 'email' => 's1089232@studenti.univpm.it', 'password' => 'tweb', 'livello' => 4, 'organizzazione' => 'NULL'],
            ['id'=> 3, 'nome' => 'Giovanni', 'cognome' => 'Giacometti', 'username' => 'Gio.Giac', 'email' => 's1090382@studenti.univpm.it', 'password' => 'tweb', 'livello' => 4, 'organizzazione' => 'NULL'],
            ['id'=> 4, 'nome' => 'Valerio', 'cognome' => 'Donnini', 'username' => 'Vale.Donnini', 'email' => 's8912345@studenti.univpm.it', 'password' => 'tweb', 'livello' => 4, 'organizzazione' => 'NULL'],
            ['id'=> 5, 'nome' => 'Francesco', 'cognome' => 'Rossi', 'username' => 'Fra.Rossi', 'email' => 'Fra.Rossi@hotmail.it', 'password' => 'tweb', 'livello' => 3, 'organizzazione' => 'dhs'],
            ['id'=> 6, 'nome' => 'Lucia', 'cognome' => 'Bianchi', 'username' => 'Lucia.Bianchi', 'email' => 'Lucia.Bianchi@hotmail.it', 'password' => 'tweb', 'livello' => 3, 'organizzazione' => 'Music ON'],
            ['id'=> 7, 'nome' => 'Alessia', 'cognome' => 'Verdi', 'username' => 'Ale.Verdi', 'email' => 'Ale.Verdi@hotmail.it', 'password' => 'tweb', 'livello' => 2, 'organizzazione' => 'NULL'],
            ['id'=> 8, 'nome' => 'Marco', 'cognome' => 'Cucchiarelli', 'username' => 'Marco.Scucchia', 'email' => 'Marco.Cucchia@hotmail.it', 'password' => 'tweb', 'livello' => 2, 'organizzazione' => 'NULL'],
        ]);

        DB::table('evento')->insert([
            ['codice_evento' => 1, 'titolo' => 'rkomi Ancona', 'id_user3' => 5, 'luogo' => 'Ancona', 'data' => '2021-07-21', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.',
              'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 5000, 'costo_biglietto' => 25, 'sconto' => 20, 'giorni_sconto' => 3, 'immagine' => 'rkomi.png'],
            ['codice_evento' => 2, 'titolo' => 'rkomi Milano', 'id_user3' => 5, 'luogo' => 'Milano', 'data' => '2021-08-21', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.', 
             'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 10000, 'costo_biglietto' => 50, 'sconto' => 15, 'giorni_sconto' => 3, 'immagine' => 'rkomi.png'],
            ['codice_evento' => 3, 'titolo' => 'rkomi Senigallia', 'id_user3' => 5, 'luogo' => 'Senigallia', 'data' => '2021-06-25', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.',
              'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 450, 'costo_biglietto' => 15, 'sconto' => 20, 'giorni_sconto' => 5, 'immagine' => 'rkomi.png'],
            ['codice_evento' => 4, 'titolo' => 'rkomi Roma', 'id_user3' => 5, 'luogo' => 'Roma', 'data' => '2021-07-11', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.',
              'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 8000, 'costo_biglietto' => 50, 'sconto' => 20, 'giorni_sconto' => 3, 'immagine' => 'rkomi.png'],
            ['codice_evento' => 5, 'titolo' => 'rkomi Bologna', 'id_user3' => 6, 'luogo' => 'Bologna', 'data' => '2021-07-31', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.',
              'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 6000, 'costo_biglietto' => 35, 'sconto' => 10, 'giorni_sconto' => 2, 'immagine' => 'rkomi.png'],
            ['codice_evento' => 6, 'titolo' => 'rkomi Torino', 'id_user3' => 6, 'luogo' => 'Torino', 'data' => '2021-08-15', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.',
             'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 3000, 'costo_biglietto' => 25, 'sconto' => 15, 'giorni_sconto' => 3, 'immagine' => 'rkomi.png'],
            ['codice_evento' => 7, 'titolo' => 'rkomi Firenze', 'id_user3' => 6, 'luogo' => 'Firenze', 'data' => '2021-07-02', 'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet suscipit tellus id consectetur.',
              'iframe' => 'https://www.google.com/maps?q=Via Francesco Petrarca, 45, 60128 Ancona AN&output=embed', 'num_biglietti' => 2500, 'costo_biglietto' => 35, 'sconto' => 20, 'giorni_sconto' => 5, 'immagine' => 'rkomi.png'],
        ]);
        
        DB::table('faq')->insert([
            ['id' => 1, 'domanda' => 'Come posso acquistare biglietti?', 'risposta' => 'Accedi al catalogo, scegli l\'evento che più ti interessa e dopodichè clicca acquista.'], 
            ['id' => 2, 'domanda' => 'Come posso registrarmi al sito?', 'risposta' => 'Clicca dalla barra di navigazione in alto a destra il pulsante registrati e compila il form di registrazione.'],
            ['id' => 3, 'domanda' => 'Posso acquistare più biglietti contemporaneamente?', 'risposta' => 'Si, certo!'],
            ['id' => 4, 'domanda' => 'Posso filtrare gli eventi in base alla società?', 'risposta' => 'Certamente!']
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtentiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creazione Admin
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isAdmin',
            'username' => 'adminadmin',
            'password' => 'hJ9ShJ9S',
        ]);

        // Creazione Tecnico Azienda
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'staffstaff',
            'password' => 'hJ9ShJ9S',
            'nome' => "Giovanni",
            'cognome' => "Verdi"
        ]);

        // Creazione Tecnico Centro Assistenza
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'tecntecn',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '1',
            'nome' => "Giacomo",
            'cognome' => "Bastoni"
        ]);


        //Altri tecnici azienda-----------------------
        // Creazione Tecnico Azienda 1
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'mrossi88',
            'password' => 'hJ9ShJ9S',
            'nome' => "Marco",
            'cognome' => "Rossi"
        ]);

        // Creazione Tecnico Azienda 2
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'ale_bianchi',
            'password' => 'hJ9ShJ9S',
            'nome' => "Alessandro",
            'cognome' => "Bianchi"
        ]);

        // Creazione Tecnico Azienda 3
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'elena_smart',
            'password' => 'hJ9ShJ9S',
            'nome' => "Elena",
            'cognome' => "Ricci"
        ]);

        // Creazione Tecnico Azienda 4
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'luca_tech',
            'password' => 'hJ9ShJ9S',
            'nome' => "Luca",
            'cognome' => "Ferrari"
        ]);

        // Creazione Tecnico Azienda 5
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'francy_lab',
            'password' => 'hJ9ShJ9S',
            'nome' => "Francesca",
            'cognome' => "Esposito"
        ]);

        // Creazione Tecnico Azienda 6
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'rob_expert',
            'password' => 'hJ9ShJ9S',
            'nome' => "Roberto",
            'cognome' => "Russo"
        ]);

        // Creazione Tecnico Azienda 7
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'giulia_dev',
            'password' => 'hJ9ShJ9S',
            'nome' => "Giulia",
            'cognome' => "Romano"
        ]);

        // Creazione Tecnico Azienda 8
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'stefano_pro',
            'password' => 'hJ9ShJ9S',
            'nome' => "Stefano",
            'cognome' => "Gallo"
        ]);

        // Creazione Tecnico Azienda 9
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'marti_field',
            'password' => 'hJ9ShJ9S',
            'nome' => "Martina",
            'cognome' => "Costa"
        ]);

        // Creazione Tecnico Azienda 10
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'andrea_sys',
            'password' => 'hJ9ShJ9S',
            'nome' => "Andrea",
            'cognome' => "Fontana"
        ]);

        //Altri tecnici centro-----------------------
        // 1. Fabio Serra
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 1,
            'nome' => "Fabio",
            'cognome' => "Serra",
            'data_di_nascita' => '1999-05-19',
            'email' => 'fabioserra@esempio.it',
            'username' => 'f.serra82',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Calibrazione estrusori e livellamento piatto"
        ]);

        // 2. Marta Giorgi
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 2,
            'nome' => "Marta",
            'cognome' => "Giorgi",
            'data_di_nascita' => '1995-03-12',
            'email' => 'marta.giorgi@esempio.it',
            'username' => 'marta_fix',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Manutenzione stampanti a resina (SLA/DLP)"
        ]);

        // 3. Simone Lombardi
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 3,
            'nome' => "Simone",
            'cognome' => "Lombardi",
            'data_di_nascita' => '1988-11-25',
            'email' => 's.lombardi@esempio.it',
            'username' => 'simone_rep',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Riparazione meccanica e sistemi CoreXY"
        ]);

        // 4. Claudia Moretti
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 4,
            'nome' => "Claudia",
            'cognome' => "Moretti",
            'data_di_nascita' => '1992-07-08',
            'email' => 'c.moretti@esempio.it',
            'username' => 'claudia_tech',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Ottimizzazione profili di slicing e materiali avanzati"
        ]);

        // 5. Davide Barbieri
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 5,
            'nome' => "Davide",
            'cognome' => "Barbieri",
            'data_di_nascita' => '1985-01-30',
            'email' => 'd.barbieri@esempio.it',
            'username' => 'davide_service',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Elettronica di controllo e sostituzione schede madri"
        ]);

        // 6. Sara Marini
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 6,
            'nome' => "Sara",
            'cognome' => "Marini",
            'data_di_nascita' => '1997-12-05',
            'email' => 'sara.marini@esempio.it',
            'username' => 'sara_maint',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Configurazione firmware Marlin e Klipper"
        ]);

        // 7. Pietro Vitali
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 7,
            'nome' => "Pietro",
            'cognome' => "Vitali",
            'data_di_nascita' => '1990-06-14',
            'email' => 'p.vitali@esempio.it',
            'username' => 'pietro_lab',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Sostituzione schermi LCD e sorgenti UV"
        ]);

        // 8. Anna Guerra
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 8,
            'nome' => "Anna",
            'cognome' => "Guerra",
            'data_di_nascita' => '1993-09-21',
            'email' => 'a.guerra@esempio.it',
            'username' => 'anna_expert',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Manutenzione sistemi multi-materiale (MMU/AMS)"
        ]);

        // 9. Matteo De Luca
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 9,
            'nome' => "Matteo",
            'cognome' => "De Luca",
            'data_di_nascita' => '1982-04-02',
            'email' => 'm.deluca@esempio.it',
            'username' => 'matteo_core',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Sistemi di estrusione high-temperature"
        ]);

        // 10. Elisa Riva
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 10,
            'nome' => "Elisa",
            'cognome' => "Riva",
            'data_di_nascita' => '1996-10-10',
            'email' => 'elisa.riva@esempio.it',
            'username' => 'elisa_check',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Diagnostica hardware e sensori di fine filamento"
        ]);
        // 11. Riccardo Esposito
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 1,
            'nome' => "Riccardo",
            'cognome' => "Esposito",
            'data_di_nascita' => '1994-02-15',
            'email' => 'r.esposito@esempio.it',
            'username' => 'ricky_3d',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Recupero motori passo-passo e driver TMC"
        ]);

        // 12. Giulia Colombo
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 3,
            'nome' => "Giulia",
            'cognome' => "Colombo",
            'data_di_nascita' => '1998-11-30',
            'email' => 'g.colombo@esempio.it',
            'username' => 'giulia_lab',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Post-processing e verniciatura modelli"
        ]);

        // 13. Federico Romano
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 5,
            'nome' => "Federico",
            'cognome' => "Romano",
            'data_di_nascita' => '1987-05-22',
            'email' => 'f.romano@esempio.it',
            'username' => 'fede_print',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Sostituzione cinghie e pulegge di precisione"
        ]);

        // 14. Elena Greco
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 7,
            'nome' => "Elena",
            'cognome' => "Greco",
            'data_di_nascita' => '1991-08-12',
            'email' => 'e.greco@esempio.it',
            'username' => 'elena_tech',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Manutenzione laser per incisione e taglio"
        ]);

        // 15. Marco Bruno
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 2,
            'nome' => "Marco",
            'cognome' => "Bruno",
            'data_di_nascita' => '1984-03-19',
            'email' => 'm.bruno@esempio.it',
            'username' => 'marco_fix_3d',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Riparazione alimentatori e cablaggi elettrici"
        ]);

        // 16. Sofia Ricci
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 4,
            'nome' => "Sofia",
            'cognome' => "Ricci",
            'data_di_nascita' => '1996-01-25',
            'email' => 's.ricci@esempio.it',
            'username' => 'sofia_assist',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Taratura sensori di temperatura e termistori"
        ]);

        // 17. Alessandro Conti
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 6,
            'nome' => "Alessandro",
            'cognome' => "Conti",
            'data_di_nascita' => '1993-10-04',
            'email' => 'a.conti@esempio.it',
            'username' => 'ale_conti82',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Sviluppo plugin per OctoPrint e monitoraggio"
        ]);

        // 18. Beatrice Galli
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 8,
            'nome' => "Beatrice",
            'cognome' => "Galli",
            'data_di_nascita' => '1990-12-07',
            'email' => 'b.galli@esempio.it',
            'username' => 'bea_galli',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Gestione server di stampa e code di lavoro"
        ]);

        // 19. Valerio Fontana
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 10,
            'nome' => "Valerio",
            'cognome' => "Fontana",
            'data_di_nascita' => '1989-06-28',
            'email' => 'v.fontana@esempio.it',
            'username' => 'valerio_core',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Assemblaggio macchine industriali SLS"
        ]);

        // 20. Martina Serra
        User::create([
            'role' => 'isTecnicoCentro',
            'centro_id' => 9,
            'nome' => "Martina",
            'cognome' => "Serra",
            'data_di_nascita' => '1995-04-15',
            'email' => 'm.serra@esempio.it',
            'username' => 'martina_check',
            'password' => 'hJ9ShJ9S',
            'specializzazione' => "Controllo qualità pezzi e tolleranze meccaniche"
        ]);
    }
}

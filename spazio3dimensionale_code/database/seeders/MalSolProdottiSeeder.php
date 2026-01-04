<?php

namespace Database\Seeders;

use App\Models\Malsol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MalSolProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 - Warping
        Malsol::create([
            'titolo' => 'Warping',
            'mal' => 'Il fenomeno del Warping causa il distacco parziale o totale del pezzo dal piano di stampa durante il processo, compromettendo la geometria della base.',
            'sol' => 'Il problema è solitamente causato da uno sbalzo termico o da un piano non calibrato. Tecnicamente è necessario: 1) Pulire il piano con alcool isopropilico. 2) Verificare lo Z-Offset. 3) Aumentare la temperatura del piano di 5-10°C.',
            'prodotto_id' => 3,
        ]);

        // 2 - Sotto-estrusione Meccanica
        Malsol::create([
            'titolo' => 'Sotto-estrusione',
            'mal' => 'L\'estrusore emette rumori metallici (scatti) e il filamento non fluisce correttamente dall\'ugello, causando strati mancanti o fragili.',
            'sol' => 'Eseguire un "Atomic Pull" per rimuovere i residui interni. Controllare la ventola del dissipatore e, se necessario, sostituire l\'ugello assicurandosi che il tubo PTFE sia a contatto.',
            'prodotto_id' => 1,
        ]);

        // 3 - Stringing
        Malsol::create([
            'titolo' => 'Stringing',
            'mal' => 'Formazione di una ragnatela di sottili filamenti di plastica tra le varie parti separate del modello durante i movimenti di spostamento della testina.',
            'sol' => 'Ottimizzare la distanza e la velocità di retrazione nello slicer. Verificare che il filamento non sia umido e attivare la funzione "Combing" per evitare spostamenti nel vuoto.',
            'prodotto_id' => 2,
        ]);

        // 4 - Layer Shifting
        Malsol::create([
            'titolo' => 'Layer Shifting',
            'mal' => 'Grave disallineamento meccanico in cui gli strati della stampa risultano traslati lungo gli assi X o Y, creando uno scalino evidente nel modello.',
            'sol' => 'Tensionare correttamente le cinghie degli assi. Verificare che le pulegge dei motori non scivolino sull\'albero e ridurre le accelerazioni eccessive nello slicer.',
            'prodotto_id' => 3,
        ]);

        // 5 - Z-Wobble
        Malsol::create([
            'titolo' => 'Z-Wobble',
            'mal' => 'Le pareti esterne mostrano un pattern ondulatorio regolare e ripetitivo che ricalca il passo della barra filettata dell\'asse verticale Z.',
            'sol' => 'Pulire e lubrificare la barra filettata. Controllare l\'allineamento del motore Z e assicurarsi che l\'accoppiatore tra motore e vite non sia deformato.',
            'prodotto_id' => 4,
        ]);

        // 6 - Elephant Foot
        Malsol::create([
            'titolo' => 'Elephant Foot',
            'mal' => 'Deformazione della base del modello dove i primi strati risultano visibilmente più larghi e schiacciati rispetto al resto della stampa.',
            'sol' => 'Ricalibrare il livellamento del piano per ridurre lo schiacciamento del primo layer. Diminuire la temperatura del piatto dopo i primi layer e usare l\'espansione orizzontale negativa.',
            'prodotto_id' => 5,
        ]);

        // 7 - Ghosting
        Malsol::create([
            'titolo' => 'Ghosting',
            'mal' => 'Presenza di echi o ombreggiature superficiali che si propagano dagli spigoli o dai dettagli, causate dalle vibrazioni residue del telaio.',
            'sol' => 'Fissare la stampante su una base solida e stabile. Ridurre la velocità di stampa delle pareti esterne e abbassare i valori di Jerk e accelerazione.',
            'prodotto_id' => 5,
        ]);

        // 8 - Ostruzione Ugello
        Malsol::create([
            'titolo' => 'Ugello Otturato',
            'mal' => 'Interruzione totale del flusso di materiale plastico durante la stampa, pur con il motore dell\'estrusore regolarmente in funzione.',
            'sol' => 'Riscaldare l\'ugello oltre la norma e forzare il filamento. Se bloccato, utilizzare uno spillo da agopuntura o sostituire direttamente l\'ugello ostruito.',
            'prodotto_id' => 3,
        ]);

        // 9 - Overheating
        Malsol::create([
            'titolo' => 'Overheating',
            'mal' => 'I dettagli più piccoli o le punte del modello appaiono sciolti, informi o collassati a causa di un raffreddamento insufficiente tra uno strato e l\'altro.',
            'sol' => 'Impostare la ventola di raffreddamento al massimo. Aumentare il "Minimum Layer Time" nello slicer per permettere alla plastica di solidificarsi prima del passaggio successivo.',
            'prodotto_id' => 4,
        ]);

        // 10 - Zits/Blobs
        Malsol::create([
            'titolo' => 'Zits & Blobs',
            'mal' => 'Piccoli accumuli di plastica o bolle antiestetiche sulla superficie esterna, solitamente in corrispondenza del punto di inizio e fine del perimetro.',
            'sol' => 'Nascondere la cucitura Z (Z-Seam) in un angolo acuto. Regolare i parametri di Coasting e Wipe nello slicer per scaricare la pressione dell\'ugello a fine riga.',
            'prodotto_id' => 4,
        ]);

        // 11 - Pillowing
        Malsol::create([
            'titolo' => 'Pillowing',
            'mal' => 'Formazione di buchi o protuberanze irregolari sull\'ultimo strato superiore, dove il materiale non riesce a chiudere correttamente sopra il riempimento.',
            'sol' => 'Aumentare la percentuale di Infill per sostenere i layer superiori. Incrementare il numero di "Top Solid Layers" e migliorare il flusso d\'aria della ventola.',
            'prodotto_id' => 5,
        ]);

        // 11 - Under-Extrusion (Gap tra le linee)
        Malsol::create([
            'titolo' => 'Gap Superficiali',
            'mal' => 'Lo strato superiore della stampa presenta piccoli spazi vuoti tra le linee adiacenti, rendendo la superficie porosa e strutturalmente debole.',
            'sol' => 'Il problema è spesso dovuto a un diametro del filamento impostato male o a un flusso (flow rate) insufficiente. Soluzione: 1) Calibrare gli step dell estrusore (E-steps). 2) Aumentare la percentuale di flusso nello slicer del 3-5%. 3) Verificare che il diametro del filamento sia costante.',
            'prodotto_id' => 1,
        ]);

        // 12 - Scars (Segni dell'ugello)
        Malsol::create([
            'titolo' => 'Graffi Superficiali',
            'mal' => 'L ugello lascia solchi o segni evidenti sugli strati superiori piatti mentre si sposta da un punto all altro della stampa.',
            'sol' => 'Causato dal trascinamento dell ugello sulla plastica già estrusa. Tecnicamente: 1) Abilitare lo "Z-Hop" durante i ritiri (0.2mm sono sufficienti). 2) Livellare meglio il piano. 3) Usare la funzione "Stiratura" (Ironing) per levigare l ultimo strato.',
            'prodotto_id' => 2,
        ]);

        // 13 - Bridging (Cedimento nel vuoto)
        Malsol::create([
            'titolo' => 'Bridging Fallito',
            'mal' => 'Il filamento cola e si deposita in modo disordinato quando la stampante tenta di creare un ponte tra due punti distanti senza supporti.',
            'sol' => 'Raffreddamento insufficiente o velocità errata. Interventi: 1) Impostare la ventola al 100% per i ponti. 2) Ridurre la velocità di stampa specifica per il bridging. 3) Ridurre leggermente la temperatura di estrusione per rendere il filo più tenace.',
            'prodotto_id' => 3,
        ]);

        // 14 - Cracking (Delaminazione layer)
        Malsol::create([
            'titolo' => 'Delaminazione',
            'mal' => 'Separazione netta degli strati lungo le pareti verticali, che porta il pezzo a spaccarsi orizzontalmente sotto sforzo o durante il raffreddamento.',
            'sol' => 'Tipico di materiali come l ABS a causa di correnti d aria. Azioni: 1) Usare una stampante chiusa o un enclosure. 2) Aumentare la temperatura di estrusione per migliorare la fusione tra i layer. 3) Spegnere la ventola di raffreddamento del pezzo.',
            'prodotto_id' => 4,
        ]);

        // 15 - Over-Extrusion (Eccesso di materiale)
        Malsol::create([
            'titolo' => 'Sovra-estrusione',
            'mal' => 'Il modello presenta dimensioni eccessive e accumuli di plastica disordinati che rovinano i dettagli fini e le tolleranze meccaniche.',
            'sol' => 'Troppo materiale viene spinto fuori. Per risolvere: 1) Ridurre il moltiplicatore di estrusione (Flow) nello slicer. 2) Misurare il filamento col calibro e inserire il valore reale. 3) Calibrare gli step/mm dell estrusore.',
            'prodotto_id' => 1,
        ]);

        // 16 - Infill Show-through (Vene esterne)
        Malsol::create([
            'titolo' => 'Infill Visibile',
            'mal' => 'Il pattern del riempimento interno è visibile sulle pareti esterne del modello, creando un effetto a scacchi o a righe antiestetico.',
            'sol' => 'Le pareti sono troppo sottili. Soluzioni: 1) Aumentare il numero di perimetri (Wall Line Count). 2) Stampare prima le pareti esterne e poi quelle interne. 3) Diminuire la sovrapposizione tra riempimento e perimetro.',
            'prodotto_id' => 5,
        ]);

        // 17 - Clogged Nozzle (Ostruzione parziale)
        Malsol::create([
            'titolo' => 'Ostruzione Parziale',
            'mal' => 'Il flusso di plastica è inconsistente, con tratti di estrusione regolare alternati a tratti molto sottili o mancanti.',
            'sol' => 'Spesso causato da impurità nel filamento. Tecnicamente: 1) Pulire l interno dell ugello con un ago sottile. 2) Verificare che il filamento non sia contaminato da polvere. 3) Installare un filtro pulisci-filo prima dell estrusore.',
            'prodotto_id' => 1,
        ]);

        // 18 - Poor Overhangs (Sbalzi rovinati)
        Malsol::create([
            'titolo' => 'Sbalzi Cedevoli',
            'mal' => 'Le superfici inclinate (overhangs) risultano ruvide e colanti, con i filamenti che non riescono a stare in posizione.',
            'sol' => 'Angolo di inclinazione troppo elevato senza supporto. Azioni: 1) Ridurre l altezza del layer per aumentare la sovrapposizione. 2) Aumentare il raffreddamento dell hotend. 3) Orientare il pezzo in modo diverso sul piano di stampa.',
            'prodotto_id' => 3,
        ]);

        // 19 - Blurred Details (Dettagli persi)
        Malsol::create([
            'titolo' => 'Perdita Dettaglio',
            'mal' => 'Le scritte o i piccoli dettagli geometrici risultano arrotondati o impastati, perdendo la definizione originale del file STL.',
            'sol' => 'Velocità di stampa troppo alta o ugello troppo grande. Interventi: 1) Ridurre la velocità di stampa per i perimetri esterni. 2) Passare a un ugello di diametro inferiore (es. 0.2mm). 3) Controllare la tensione delle cinghie.',
            'prodotto_id' => 2,
        ]);

        // 20 - Ringing (Eco agli angoli)
        Malsol::create([
            'titolo' => 'Vibrazioni Echo',
            'mal' => 'Ondulazioni superficiali che appaiono subito dopo un angolo acuto, causate dall inerzia della testina di stampa.',
            'sol' => 'Massa della testina troppo elevata o accelerazioni eccessive. Soluzioni: 1) Ridurre le accelerazioni (m/s^2) nel firmware. 2) Verificare che la stampante sia su piedini antivibranti. 3) Alleggerire la testina di stampa se possibile.',
            'prodotto_id' => 4,
        ]);
    }
}

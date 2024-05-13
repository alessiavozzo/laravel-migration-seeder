# DESCRIZIONE
Creiamo una tabella trains e relativa Migration.
Ogni treno dovrà avere almeno:
- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.
Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.
Create il modello Model relativo alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

# PARTE 2
Aggiungiamo un seeder per la classe Train usando un array di dati fittizzi fatta a mano.
## BONUS: 
Implementare il seeder tramite FakerPHP


# table: trains
- id BIGINT AI PK UNIQUE NOTNULL
- company VARCHAR(50) NULL
- departure_station VARCHAR(50) NOTNULL
- arrival_station VARCHAR(50) NOTNULL
- departure_time DATETIME NOTNULL
- arrival_time DATETIME NOTNULL
- train_code VARCHAR(20) NOTNULL
- wagons_number TINYINT NULL
- in_time TINYINT NOTNULL
- cancelled TINYINT NOTNULL

## steps
- Modifico il file .env per consentire l'accesso al database
- php artisan make:migration create_trains_table
- php artisan migrate per migrare la table sul database (il db non esiste quindi mi chiederà anche conferma per creare il db)
- creo un modello associato alla table: php artisan make:model Train
- uso tinker per aggiungere i treni:
1:
$train = new App\Models\Train()
$train->company = 'Trenitalia'
$train->departure_station = 'Milano Centrale' 
$train->arrival_station = 'Verona Porta Nuova' 
$train->departure_time = now()
$train->arrival_time = '2024-05-10 15:00:00' 
$train->train_code = 'abc12345' 
$train->wagons_number = 6
$train->save()

2:
$train = new App\Models\Train()
$train->company = 'Italo'
$train->departure_station = 'Roma Termini' 
$train->arrival_station = 'Bologna Centrale' 
$train->departure_time = now()
$train->arrival_time = '2024-05-10 17:00:00' 
$train->train_code = 'def12345' 
$train->wagons_number = 8
$train->save()

3:
$train = new App\Models\Train()
$train->company = 'Trenitalia'
$train->departure_station = 'Roma Tiburtina' 
$train->arrival_station = 'Milano Rogoredo' 
$train->departure_time = '2024-05-18 14:00:00'
$train->arrival_time = '2024-05-18 17:00:00' 
$train->train_code = 'zzz12345' 
$train->wagons_number = 8
$train->save()

4:
$train = new App\Models\Train()
$train->company = 'Trenitalia'
$train->departure_station = 'Roma Tiburtina' 
$train->arrival_station = 'Milano Rogoredo' 
$train->departure_time = '2024-05-20 11:00:00'
$train->arrival_time = '2024-05-20 16:00:00' 
$train->train_code = 'zzz4567' 
$train->wagons_number = 8
$train->save()

5:
$train = new App\Models\Train()
$train->company = 'Trenitalia'
$train->departure_station = 'Roma Termini' 
$train->arrival_station = 'Milano Centrale' 
$train->departure_time = '2024-05-10 14:00:00'
$train->arrival_time = '2024-05-10 17:00:00' 
$train->train_code = 'zzz123' 
$train->wagons_number = 7
$train->save()

- Creo il controller abbinato al mio modello Train: php artisan make:controller Guests/TrainController -m Train

- Test: aggiungere una nuova colonna alla table php artisan make:migration add_type_to_trains_table (tipo di treno)

- Test: aggiungere più colonne (binario di partenza e di arrivo) php artisan make:migration update_trains_table --table=trains

$train = new App\Models\Train()
$train->company = 'Italo'
$train->departure_station = 'Roma Tiburtina' 
$train->arrival_station = 'Milano Rogoredo' 
$train->departure_time = '2024-05-20 11:00:00'
$train->arrival_time = '2024-05-20 16:00:00' 
$train->arrival_platform = 'platform 9 3/4'
$train->departure_platform = 'platform 9'
$train->type = 'frecciarossa'
$train->train_code = 'zzz4567' 
$train->wagons_number = 8
$train->save()

- Genero una nuova classe di seeder con php artisan make:seeder TrainsTableSeeder
- Creo file db.php in config con all'interno dati dei treni (uno l'ho compilato a mano, il resto li ha generati chatgpt basandosi su quello di partenza fatto da me)
- Riempio il database: php artisan db:seed --class=TrainsTableSeeder
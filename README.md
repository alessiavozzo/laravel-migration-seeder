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
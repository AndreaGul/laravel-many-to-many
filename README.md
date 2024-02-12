Creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.
Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.
Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.
Descrizione:
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto Laravel con autenticazione.
Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:

1. Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office
2. Creazione del modello Project con relativa migrazione, seeder, controller e rotte
3. Per la parte di back-office creiamo un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti
   Bonus
   Implementiamo la validazione dei dati dei Progetti nelle operazioni CRUD che lo richiedono usando due form requests.

Completare la parte di CRUD (Create, Read, Update, Delete).
Se siete a buon punto, concentratevi sulla personalizzazione e riprendendo quello che abbiamo visto a lezione migliorate la User Experience aggiungendo notifiche relative alle azioni compiute (record aggiornato / modificato / cancellato correttamente).
Approfittatene anche per fare un refactor del vostro layout, utilizzando @include per eventuali parti di codice che si ripetono (vedi messaggi di notifica e di errore).

Aggiungiamo una nuova entità Type.
Questa entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

-   [x]creare la migration per la tabella types
-   [x]creare il model Type
-   [x]creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
-   [x]aggiungere ai model Type e Project i metodi per definire la relazione one to many
-   [x]visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
-   [x]permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
-   [x]gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione
    Bonus 1:
    creare il seeder per il model Type.
    Bonus 2:
    aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

TODO
fare un upgrade della migration del nome mettendo il metodo unique per far si che non ci siano conflitti con slug
dividere la validation in due parti per store e update visto che update deve considerare e non considerare il nome esistente
inserire un pop up di creazione modifica e cancellazione

Aggiungiamo una nuova entità Technology. Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

-   [x]creare la migration per la tabella technologies
-   [x]creare il model Technology
-   [x]creare la migration per la tabella pivot project_technology
-   [x]aggiungere ai model Technology e Project i metodi per definire la relazione many to many
-   []visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
-   []permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
-   []gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione
    Bonus 1:
    creare il seeder per il model Technology.
    Bonus 2:
    aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.

<?php
/*
* Copyright 2007-2017 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <https://pydio.com>.
*/
$mess=array(
"Main"      => "Opzioni Principali",
"App Title" => "Nome Applicazione",
"Your application title" => "Questo nome apparirà come titolo della finestra, nella schermata di avvio.",
"Main container for core Pydio settings (application title, sharing, webdav server config, etc...)" => "Contenitore principale delle impostazioni base di Pydio (nome applicazione, condivisione, config server webdav, ecc...)",
"Default Language" => "Lingua Predefinita",
"Default language when a user does not have set his/her own." => "Lingua predefinita quando un utente non ha impostato la propria.",
"Sharing" => "Condivisione",
"Download Folder (Legacy)" => "Download Folder (Legacy)",
"Absolute path to the public folder where temporary download links will be created. This is used for legacy purpose, newly created links do not use it anymore, but use the Base URI instead." => "Absolute path to the public folder where temporary download links will be created. This is used for legacy purpose, newly created links do not use it anymore, but use the Base URI instead.",
"Download URL" => "URL Download",
"If not inferred directly from the current pydio URL plus the public base URI, replace the public access URL here." => "If not inferred directly from the current pydio URL plus the public base URI, replace the public access URL here.",
"Existing users" => "Utenti Esistenti",
"Allow the users to pick an existing user when sharing a folder" => "Consente agli utenti di selezionare un utente esistente quando si condivide una cartella",
"Compression Features" => "Funzionalità di Compressione",
"Gzip Download" => "Download Gzip",
"Gzip files on-the-fly before downloading. Disabled by default, as it's generally useful only on small files, and decreases performances on big files. This has nothing to see with the Zip Creation feature, it's just a on-the-fly compression applied on a unique file at download." => "Comprimi (Gzip) i file 'al volo', prima di scaricarli. Disabilitata automaticamente, questa funzione è generalmente utile solo con piccoli file e decresce le performances con file di grandi dimensioni. Non ha nulla a che vedere con la funzionalità 'Creazione ZIP'; è solo un compressione on-the-fly applicata ad un unico file nel momento del download.",
"Gzip Limit" => "Limite Gzip",
"If activated, a default limit should be set above when files are no more compressed." => "Se attivo, dovrebbe essere impostato un limite predefinito, quando i file non sono più compressi.",
"Zip Creation" => "Creazione ZIP",
"If you encounter problems with online zip creation or multiple files downloading, you can disable the feature." => "Se si incontrano problemi con la creazione online degli ZIP, è possibile disabilitare la funzionalità.",
"WebDAV Server" => "Server WebDAV",
"Enable WebDAV" => "Abilita WebDAV",
"Enable the webDAV support. Please READ THE DOC to safely use this feature." => "Abilita il supporto webDAV. LEGGI LA DOCUMENTAZIONE per usare in modo sicuro questa funzionalità.",
"Shares URI" => "URI Condivisioni",
"Common URI to access the shares. Please READ THE DOC to safely use this feature." => "URI comune per accedere alle condivisioni. LEGGI LA DOCUMENTAZIONE per usare in modo sicuro questa funzionalità.",
"Shares Host" => "Host Condivisioni",
"Host used in webDAV protocol. Should be detected by default. Please READ THE DOC to safely use this feature." => "Host utilizzato nel protocollo webDAV. Dovrebbe essere trovato automaticamente. LEGGI LA DOCUMENTAZIONE per usare in modo sicuro questa funzionalità.",
"Digest Realm" => "Digest Realm",
"Default realm for authentication. Please READ THE DOC to safely use this feature." => "Realm principale per l'autenticazione. LEGGI LA DOCUMENTAZIONE per usare in modo sicuro questa funzionalità.",
"Miscellaneous" => "Varie",
"Command-line Active" => "Linea-Comandi Attiva",
"Use Pydio framework via the command line, allowing CRONTAB jobs or background actions." => "Utilizza il framework Pydio attraverso la linea dei comandi, abilitando i CRONTAB jobs o le azioni in background.",
"Command-line PHP" => "Lina-Comandi PHP",
"On specific hosts, you may have to use a specific path to access the php command line" => "Su alcuni host, potresti dover usare un percorso specifico per accedere alla linea di comando PHP",
"Filename length" => "Lunghezza nomi file",
"Maximum characters length of new files or folders" => "Lunghezza massima di caratteri per nuovi file e cartelle",
"Temporary Folder" => "Cartella Temporanea",
"This is necessary only if you have errors concerning the tmp dir access or writeability : most probably, they are due to PHP SAFE MODE (should disappear in php6) or various OPEN_BASEDIR restrictions. In that case, create and set writeable a tmp folder somewhere at the root of your hosting (but above the web/ or www/ or http/ if possible!!) and enter here the full path to this folder" => "Questa è necessaria solo se riscontri errori riguardanti l'accesso o la scrittura sulla cartella TMP: molto probabilmente, sono dovuti alla 'PHP SAFE MODE' (dovrebbe sparire in PHP6) o a varie restrizioni 'OPEN_BASEDIR'. In questo caso, crea ed imposta come 'scrivibile' una cartella TMP nella root del tuo hosting (possibilmente, prima di 'web/' o 'www/' o 'http/'!!) ed inserisci quì il suo percorso completo",
"Admin email" => "Email Admin",
"Administrator email, not used for the moment" => "Email dell'Amministratore, non utilizzata al momento",
"User Credentials" => "Credenziali Utente",
"User" => "Utente",
"User name - Can be overriden on a per-user basis (see users 'Personal Data' tab)" => "Nome utente - Può essere sovrascritto dal'utente base (guarda la tab 'Dati Personali')",
"Password" => "Password",
"User password - Can be overriden on a per-user basis." => "Password utente - Può essere sovrascritta dall'utente base.",
"Session credentials" => "Credenziali Sessione",
"Try to use the current Pydio user credentials for connecting. Warning, the PYDIO_SESSION_SET_CREDENTIALS config must be set to true!" => "Cerca di utilizzare le credenziali attuali di Pydio, per la connessione. ATTENZIONE: la configurazione PYDIO_SESSION_SET_CREDENTIALS deve essere attivata!",
"User name" => "Nome utente",
"User password" => "Password utente",
"Repository Slug" => "Repository Slug",
"Alias" => "Alias",
"Alias for replacing the generated unique id of the repository" => "Alias per sostituire l'ID unico generato per il workspace",
"Template Options" => "Opzioni Template",
"Allow to user" => "Permetti all'utente",
"Allow non-admin users to create a repository from this template." => "Permetti agli utenti non-admin di creare un workspace partendo da questo template.",
"Default Label" => "Etichetta Predefinita",
"Prefilled label for the new repository, you can use the PYDIO_USER keyworkd in it." => "Precompila l'etichetta del nuovo workspace; puoi usare la chiave PYDIO_USER.",
"Small Icon" => "Icona Piccola",
"16X16 Icon for representing the template" => "Icona 16X16 per rappresentare il template",
"Big Icon" => "Icona Grande",
"Big Icon for representing the template" => "Grande icona per rappresentare il template",
"Filesystem Commons" => "Filesystem Comuni",
"Recycle Bin Folder" => "Cartella Cestino",
"Leave empty if you do not want to use a recycle bin." => "Lascia vuoto se non vuoi abilitare il cestino.",
"Default Rights" => "Privilegi Predefiniti",
"This right pattern (empty, r, or rw) will be applied at user creation for this repository." => "Questa maschera di permessi (vuoto, r, o rw) verrà applicata alla creazione del workspace da parte dell'utente.",
"Character Encoding" => "Codifica Caratteri",
"If your server does not set correctly its charset, it can be good to specify it here manually." => "Se il server non imposta correttamente il suo charset, può essere utile specificarlo quì manualmente.",
"Pagination Threshold" => "Soglia Paginazione",
"When a folder will contain more items than this number, display will switch to pagination mode, for better performances." => "Quando una cartella contiene più elementi rispetto a quanto indicato quì, la visualizzazione passerà alla modalità paginazione, per migliorare le performance.",
"#Items per page" => "#Elementi per pagina",
"Once in pagination mode, number of items to display per page." => "Una volta in modalità paginazione, indica il numero di elementi da mostrare per ciascuna pagina.",
"Comma separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Lista, separata da virgola, di plugin metastore e meta, che verrà automaticamente applicata a tutti i workspace creati con questo driver",
"Auth Driver Commons" => "Driver Comuni Autenticazione",
"Transmit Clear Pass" => "Trasmetti Password in chiaro",
"Whether the password will be transmitted clear or encoded between the client and the server" => "Specifica se la password sarà trasmessa, tra client e server, in chiaro o codificata",
"Auto Create User" => "Creazione Automatica Utente",
"When set to true, the user object is created automatically if the authentication succeed. Used by remote authentication systems." => "Quando impostato su VERO, l'oggetto 'utente' verrà creato automaticamente se l'autenticazione ha successo. Utilizzato dai sistemi di autenticazione remota.",
"Login Redirect" => "Login Redirect",
"If set to a given URL, the login action will not trigger the display of login screen but redirect to this URL." => "Se viene fornito un URL, l'azione di LOGIN non comporterà la visualizzazione della schermata di login, ma un reindirizzamento all'URL indicato.",
"Admin Login" => "Login Amministratore",
"For exotic auth drivers, an user ID that must be considered as admin by default." => "Per driver d'autenticazione 'esotici', un ID utente che deve essere considerato amministratore a prescindere.",
"Show hidden files" => "Visualizza file nascosti",
"Show files beginning with a ." => "Mostra i file che iniziano con un .",
"Hide recycle bin" => "Nascondi Cestino",
"Whether to show the recycle bin folder. Unlike in the following options, the folder will be hidden but still writeable." => "Mostra la cartella che funge da Cestino. Sfortunatamente, con questa opzione, la cartella verrà nascosta ma continuerà ad essere scrivibile.",
"Hide extensions" => "Nascondi estensioni",
"Comma-separated list of extensions to hide. Extensions, files and folders that are hidden are also access forbidden." => "Lista di estensioni, separate dalla virgola, che saranno nascoste. Estensioni, file e cartelle che sono nascoste, hanno anche accesso interdetto.",
"Hide folders" => "Nascondi Cartelle",
"Comma-separated list of specific folders to hide" => "Lista delle specifiche cartelle da nascondere, separate da virgola",
"Hide files" => "Nascondi File",
"Comma-separated list of specific files to hide" => "Lista di specifici file, separati da virgola, da nascondere",
"Metadata and indexation" => "Metadata e indicizzazione",
"Default Metasources" => "Sorgenti Metadati Principali",
"Comma-separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Lista di plugin metastore e meta, separati da virgola, che sarà automaticamente applicata a tutti i workspace creati con questo driver",
"Pydio Main Options" => "Opzioni Principali Pydio",
"Server URL" => "URL Server",
"Server URL used to build share links and notifications. It will be detected if empty." => "URL del Server usato per costruire i link di condivisione e le notifiche. Verrà completato automaticamente, se vuoto.",
"Force Basic Auth" => "Forza Autenticazione Base",
"This authentication mechanism is less secure, but will avoid the users having to re-enter a password in some case." => "Questo meccanismo di autenticazione è meno sicuro, ma potrebbe evitare all'utente di dover re-inserire la password.",
"Browser Access" => "Accesso Browser",
"Display the list of files and folder when accessing through the browser" => "Visualizza la lista dei file e delle cartelle quando si accede attraverso il browser",
"Command Line" => "Linea Comando",
"Use COM class" => "Usa classe COM",
"On Windows running IIS, set this option to true if the COM extension is loaded, this may enable the use of the php command line." => "Sui che Windows hanno IIS, imposta questa opzione a VERO se l'estensione COM è caricata, questo potrebbe abilitare l'uso della linea di comando PHP.",
"Disable Zip browsing" => "Disabilita navigazione ZIP",
"Disable Zip files inline browsing. This can be necessary if you always store huge zip archives: it can have some impact on performance." => "Disabilita la navigazione dei file ZIP. Questo può essere necessario se spesso salvi grandi file ZIP: potrebbe avere un'impatto significativo sulle performance.",
"Zip Encoding" => "Codifica Zip",
"Set up a specific encoding (try IBM850 or CP437) for filenames to fix characters problems during Zip creation. This may create OS-incompatible archives (Win/Mac)." => "Imposta una specifica codifica (prova IBM850 o CP437) per i nomi dei file, per sistemare i problemi dei caratteri durante la creazione degli ZIP. Potrebbe generare degli archivi non compatibili con alcuni OS (Win/Mac). If you still have issue, you can add //TRANSLIT after the encoding string to force transliteration of unknown characters in your target encoding (example CP437//TRANSLIT).",
"Repository Commons" => "Repository Comuni",
"Description" => "Descrizione",
"A user-defined description of the content of this workspace" => "Una descrizione definita dall'utente per il contenuto di questo workspace",
"Group Path" => "Percorso Gruppo",
"Set this repository group owner : only users of this group will see it" => "Imposta il gruppo proprietario di questo repository: solo gli utenti di questo gruppo potranno vederlo",
"Disable WebDAV" => "Disabilita WebDAV",
"Explicitly disable WebDAV access for this repository." => "Disabilita esplicitamente l'accesso WebDAV a questo repository.",
"Allow to group admins" => "Abilita per il gruppo admins",
"Allow group administrators to create a repository from this template." => "Consenti al gruppo degli amministratori di creare repository da questo template.",
"Skip auto-update admin rights" => "Salta auto-aggiornamento diritti admin",
"If you have tons of workspaces (which is not recommanded), admin users login can take a long time while updating admin access to all repositories. Use this option to disable this step, admin will always have access to the Settings." => "Se si hanno molti workspace (raccomandato), il login degli amministratori può richiedere molto tempo per l'aggiornamento dell'accesso amministrativo a tutti i repository. Utilizzare questa opzione per disabilitare questo passaggio. L'amministratore avrà comunque sempre l'accesso alle Impostazioni.",
"Auto apply role" => "Applicazione automatica ruolo",
"For multiple authentication, apply this role to users authenticated via this driver" => "Per autenticazioni multiple, applica questo ruolo agli utenti autenticati con questo driver",
"DSN" => "DSN",
"Data Source Name" => "Data Source Name",
"Host" => "Host",
"Database server" => "Server Database",
"Database" => "Database",
"Database name" => "Nome Database",
"File" => "File",
"Database file" => "File Database",
"Remote Sorting" => "Ordinamento remoto",
"Force remote sorting when in paginated mode. Warning, this can impact the performances." => "Forza l'ordinamento remoto quando in modalità paginazione. ATTENZIONE: incide sulle prestazioni del sistema.",
"Remote Sorting Default Field" => "Campo default ordinamento remoto",
"Default field to sort on" => "Campo di default con cui effettuare l'ordinamento",
"Remote Sorting Default Direction" => "Direzione default ordinamento remoto",
"Default sorting direction" => "Direzione di default per l'ordinamento remoto",
"Driver" => "Driver",
"Driver type (do not touch)" => "Tipo Driver (non toccare)",
"Use PHP MySQLi extension" => "Usa l'estensione PHP 'MySQLi'",
"Use MySQLi" => "Usa MySQLi",
"Ascending" => "Ascendente",
"Descending" => "Discendente",
"Name" => "Nome",
"Modification date" => "Data modifica",
"File size" => "Dimensione file",
"File Type" => "Tipo file",
"Read Only" => "Sola Lettura",
"Read and Write" => "Lettura e Scrittura",
"Write Only (upload)" => "Sola Scrittura (upload)",
"OAuth Commons" => "OAuth Commons",
"Client ID" => "ID Client",
"Client SECRET" => "Client SECRET",
"Scope" => "Contesto (Scope)",
"Auth URL" => "URL Auth",
"Token URL" => "URL Token",
"Redirect URL" => "URL Redirezione",
"API endpoint - Used to launch the window allowing the user to authenticate and accept the terms of the app" => "API endpoint - Usato per aprire la finestra di autenticazione utente e l'accettazione dei termini d'uso dell'app",
"API endpoint - Used to refresh or validate the token retrieved in the authentication part" => "API endpoint - Usato per aggiornare o verificare il token ricevuto nella parte di autenticazione",
"API setting - Redirect URL for the OAuth Application" => "impostazioni API - URL di redirezione per l'applicazione OAuth",
"Public Base URI" => "Public Base URI",
"URI where to serve the public links" => "URI where to serve the public links",
"Enable for all users" => "Enable for all users",
"Enable WebDAV for all users by default. If set to false, users will have to manually enable WebDAV via their preferences panel." => "Enable WebDAV for all users by default. If set to false, users will have to manually enable WebDAV via their preferences panel.",
"Download Delegation" => "Download Delegation",
"Delegates download operations to an alternative agent, either webserver or pydio agent. Warning, this requires external modules to be installed. When using XSendFile/XaccelRedirect, you have to manually add the folders where files will be downloaded in the module configuration" => "Delegates download operations to an alternative agent, either webserver or pydio agent. Warning, this requires external modules to be installed. When using XSendFile/XaccelRedirect, you have to manually add the folders where files will be downloaded in the module configuration",
"Core Connexion" => "Core Connexion",
);

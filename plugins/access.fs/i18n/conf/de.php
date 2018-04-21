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
"File System (Standard)" => "Dateisystem (Standard)",
"The most standard access to a filesystem located on the server." => "Zugriff auf das Dateisystem des Servers",
"Path" => "Pfad",
"Absolute path to the folder on the server. You can use PYDIO_DATA_PATH and PYDIO_INSTALL_PATH to point to Pydio default data path and root install path." => "Absoluter Pfad zu einem Ordner auf dem Server. Verwenden Sie PYDIO_DATA_PATH als Platzhalter für den Pydio-Daten-Ordner oder PYDIO_INSTALL_PATH für den Installations-Ordner",
"Create" => "Ordner erstellen",
"Create folder if it does not exists" => "Nicht vorhandene Ordner erstellen",
"File Creation Mask" => "Maske für Dateirechte",
"Optionnaly apply a chmod operation. Value must be numeric, like 0777, 0644, etc." => "Optional kann eine chmod-Operation ausgeführt werden. Der Wert muss numerisch sein, z.B. 0777 oder 0644.",
"Purge Days" => "Tage bis zum Löschen",
"Option to purge documents after a given number of days. This require a manual set up of a CRON task. Leave to 0 if you don't wan't to use this feature." => "Diese Option sorgt dafür, dass nach den angegebenen Tagen Dateien wieder entfernt werden. Diese Aktion benötigt einen externen CRON-Job. Auf 0 lassen, wenn dieses Feature nicht genutzt werden soll.",
"Real Size Probing" => "Reale Größe ermitteln",
"Use system command line to get the filesize instead of php built-in function (fixes the 2Go limitation)" => "Verwendet die Systemfunktion zum Ermitteln der Dateigröße statt der integrierten PHP-Funktion (beseitigt das 2GB Limit). ",
"X-SendFile Active" => "X-SendFile Aktiv",
"Delegates all download operations to the webserver using the X-SendFile header. Warning, this is an external module to install for Apache. Module is active by default in Lighttpd. Warning, you have to manually add the folders where files will be downloaded in the module configuration (XSendFilePath directive)" => "Alle Downloadoperationen zum Webserver verwenden den X-SendFile-Header. Achtung dies ist ein externes Modul zum Installieren für Apache. Das Modul ist bei Lighttpd standardmäßig aktiv. Achtung, in der Modul-Konfiguration müssen die Download-Ordner von Hand angegeben werden (XSendFilePath directive)",
"Data template" => "Daten-Vorlage",
"Path to a directory on the filesystem whose content will be copied to the repository the first time it is loaded." => "Die Dateien aus dem konfigurierten Ordner werden beim ersten Laden in die Arbeitsumgebung kopiert.",
"Purge Days (Hard limit)" => "Tage bis Bereinigung (Hard limit)",
"Option to purge documents after a given number of days (even if shared). This require a manual set up of a CRON task. Leave to 0 if you don't wan't to use this feature." => "Option um Dokumente nach einer bestimmten Anzahl von Tagen (auch wenn sie freigegeben wurden) zu löschen. Dies erfordert die manuelle Einrichtung eines Cron-Jobs. Mit dem Wert 0 ist diese Funktion deaktiviert.",
"Purge Days (Soft limit)" => "Tage bis Bereinigung (Soft limit)",
"Option to purge documents after a given number of days (if not shared). This require a manual set up of a CRON task. Leave to 0 if you don't wan't to use this feature." => "Option um Dokumente nach einer bestimmten Anzahl von Tagen (wenn sie nicht freigegeben wurden) zu löschen. Dies erfordert die manuelle Einrichtung eines Cron-Jobs. Mit dem Wert 0 ist diese Funktion deaktiviert.",
"Use POSIX" => "POSIX verwenden",
"Use php POSIX extension to read files permissions. Only works on *nix systems." => "Verwenden Sie php-POSIX Erweiterungen um Dateiberechtigungen zu lesen. Funktioniert nur auf *nix-Systemen",
"X-Accel-Redirect Active" => "X-Accel-Redirect aktiviert",
"Delegates all download operations to nginx using the X-Accel-Redirect header. Warning, you have to add some configuration in nginx, like X-Accel-Mapping" => "Überträgt alle Download-Operationen über den X-Accel-Redirect Header an nginx. Warnung: Sie müssen Ihre nginx-Konfiguration erweitern, etwa X-Accel-Mapping",
"Zip downloading files on the fly" => "Zip-Dateien direkt herunterladen",
"Directly write the zip file to an output stream which is connected to the user's browser." => "Zip-Dateien direkt an den Browser des Benutzers übertragen.",
);

<?php
/*
* Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
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
* The latest code can be found at <http://pyd.io/>.
*/
$mess=array(
"Main"      => "Options principales",
"App Title" => "Titre de l'application",
"Your application title" => "Ce titre apparaîtra comme titre de la fenêtre et sur l'écran de démarrage",		
"Main container for core Pydio settings (application title, sharing, webdav server config, etc...)"=>"Conteneur principal pour les réglages de base de Pydio (titre de l'application, partages, configuration du serveur webdav, ...)",
"Default Language" => "Langue par défaut",
"Default language when a user does not have set his/her own." => "Langue utilisée par défaut lorsque l'utilisateur n'a pas choisi sa langue",
"Sharing" => "Partage",
"Download Folder" => "Répertoire de téléchargement",
"Absolute path to the public folder where temporary download links will be created. Setting this empty will disable the sharing feature." => "Chemin absolu du répertoire public dans lequel les liens de téléchargement temporaires seront créés. Laisser ce paramètre vide désactivera la fonctionnalité de partage.",
"Download URL" => "URL de téléchargement",
"If not inferred directly from the current ajaxplorer URI plus the public download folder name, replace the public access URL here." => "Si cette URL n'est pas logiquement déduite de l'URL de Pydio + le nom du répertoire de téléchargement public, remplacez l'URL de l'accès public ici.",
"Existing users" => "Utilisateurs existants",
"Allow the users to pick an existing user when sharing a folder" => "Autoriser les utilisateurs à voir une liste d'utilisateurs existants lors du partage d'un répertoire",
"Compression Features" => "Fonctions de compression",
"Gzip Download" => "Téléchargerment Gzip",
"Gzip files on-the-fly before downloading. Disabled by default, as it's generally useful only on small files, and decreases performances on big files. This has nothing to see with the Zip Creation feature, it's just a on-the-fly compression applied on a unique file at download." => "Compresser les fichiers avec gzip à la volée avant le téléchargement. Désactivé par défaut, car généralement utile uniquement sur de petits fichiers et diminuant les performances sur de gros fichiers. Cette option n'est pas la fonctionnalité de création de ZIP, c'est uniquement une compression à la volée de chaque fichier séparément lors d'un téléchargement.",
"Gzip Limit" => "Limite de Gzip",
"If activated, a default limit should be set above when files are no more compressed." => "Si activée, une limité par défaut devra être définie, en dessus de laquelle les fichiers ne seront plus compressés.",
"Zip Creation" => "Création de zip",
"If you encounter problems with online zip creation or multiple files downloading, you can disable the feature." => "Si vous rencontrez des problèmes avec la création d'archive en ligne ou avec le téléchargement de plusieurs fichiers en même temps, vous pouvez désactiver cette fonctionnalité.",
"WebDAV Server" => "Serveur WebDAV",
"Enable WebDAV" => "Activer WebDAV",
"Enable the webDAV support. Please READ THE DOC to safely use this feature." => "Activer le support de webDAV. Veuillez LIRE LE MANUEL pour utiliser cette fonctionnalité sans prendre de risques.",
"Shares URI" => "URI des partages",
"Common URI to access the shares. Please READ THE DOC to safely use this feature." => "URI commune d'accès aux partages. Veuillez LIRE LE MANUEL pour utiliser cette fonctionnalité sans prendre de risques.",
"Shares Host" => "Hôte des actions",
"Host used in webDAV protocol. Should be detected by default. Please READ THE DOC to safely use this feature." => "Hôte utilisé par le protocole webDAV. Devrait-être détecté par défaut. Veuillez LIRE LE MANUEL pour utiliser cette fonctionnalité sans prendre de risques.",
"Digest Realm" => "Domaine digest",
"Default realm for authentication. Please READ THE DOC to safely use this feature." => "Domaine par défaut pour l'authentification. Veuillez LIRE LE MANUEL pour utiliser cette fonctionnalité sans prendre de risques.",
"Miscellaneous" => "Divers",
"Command-line Active" => "Ligne de commande activée",
"Use Pydio framework via the command line, allowing CRONTAB jobs or background actions." => "Utiliser le framework Pydio via la ligne de commande, permettant des tâches CRONTAB ou des actions d'arrière plan.",
"Command-line PHP" => "Ligne de commande PHP",
"On specific hosts, you may have to use a specific path to access the php command line" => "Sur certains hôtes, vous devez utiliser un chemin particulier pour accéder à la ligne de commande php",
"Filename length" => "Longueur du nom de fichier",
"Maximum characters length of new files or folders" => "Longueur maximale (en caractères) pour de nouveaux fichiers ou répertoires",
"Temporary Folder" => "Répertoire temporaire",
"This is necessary only if you have errors concerning the tmp dir access or writeability : most probably, they are due to PHP SAFE MODE (should disappear in php6) or various OPEN_BASEDIR restrictions. In that case, create and set writeable a tmp folder somewhere at the root of your hosting (but above the web/ or www/ or http/ if possible!!) and enter here the full path to this folder" => "Requis uniquement si vous avez des erreurs concernant l'accès au répertoire temporaire ou la possibilité d'y écrire : certainement lié à l'utilisation du SAFE MODE PHP (disparaîtra dans php6), ou diverses restrictions d'OPEN_BASEDIR. Dans ce cas, créez, et autorisez l'écriture, d'un répertoire temporaire quelque part à la racine de votre hébergement (mais en dessous de \"/web\", \"www/\", \"http/\" si possible) et saisissez le chemin absolu vers ce répertoire",
"Admin email" => "Courriel de l'administrateur",
"Administrator email, not used for the moment" => "Courriel de l'administrateur (non utilisé pour le moment)",
"User Credentials" => "Données d'authentification",
"User" => "Utilisateur",
"User name - Can be overriden on a per-user basis (see users 'Personal Data' tab)" => "Nom d'utilisateur - peut-être remplacé pour chaque utilisateur (voir l'onglet 'Données personnelles' des utilisateurs)",
"Password" => "Mot de passe",
"User password - Can be overriden on a per-user basis." => "Mot de passe de l'utilisateur - peut-être remplacé pour cahque utilisateur.",
"Session credentials" => "Identifiants de session",
"Try to use the current Pydio user credentials for connecting. Warning, the AJXP_SESSION_SET_CREDENTIALS config must be set to true!" => "Essaye d'utiliser les identifiants Pydio de l'utilisateur pour se connecter. Attention, \"AJXP_SESSION_SET_CREDENTIALS\" doit-être activé !",
"User name" => "Nom d'utilisateur",
"User password" => "Mot de passe de l'utilisateur",
"Repository Slug" => "Alias du dépôt",
"Alias" => "Alias",
"Alias for replacing the generated unique id of the repository" => "Alias pour remplacer l'id unique du dépôt.",
"Template Options" => "Options du modèle",
"Allow to user" => "Permettre à l'utilisateur",
"Allow non-admin users to create a repository from this template." => "Permettre aux utilisateurs non-administrateur de créer un dépôt à partir de ce modèle.",
"Default Label" => "Libellé par défaut",
"Prefilled label for the new repository, you can use the AJXP_USER keyworkd in it." => "Libellé prérempli pour le nouveau dépôt, vous pouvez y utiliser le mot clef \"AJXP_USER\".",
"Small Icon" => "Petite icône",
"16X16 Icon for representing the template" => "Icône 16X16 pour représenter le modèle",
"Big Icon" => "Grande icône",
"Big Icon for representing the template" => "Grande icône pour représenter le modèle",
"Filesystem Commons" => "Système de fichier commun",
"Recycle Bin Folder" => "Répertoire corbeille",
"Leave empty if you do not want to use a recycle bin." => "Laissez vide si vous ne voulez pas utiliser une corbeille.",
"Default Rights" => "Droits par défaut",
"This right pattern (empty, r, or rw) will be applied at user creation for this repository." => "Ce droit d'accès (vide, r, ou rw) sera appliqué à la création d'utilisateur pour ce dépôt",
"Character Encoding" => "Encodage des caractères",
"If your server does not set correctly its charset, it can be good to specify it here manually." => "Si le serveur ne défini pas correctement le charset, définissez le manuellement ici.",
"Pagination Threshold" => "Seuil de pagination",
"When a folder will contain more items than this number, display will switch to pagination mode, for better performances." => "Nombre d'items à partir duquel la liste sera paginée afin d'améliorer les performances.",
"#Items per page" => "Nombre d'éléments par page",
"Once in pagination mode, number of items to display per page." => "En mode paginé, nombre d'items à afficher par page.",
"Default Metasources" => "Metasources par défaut",
"Comma separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Liste des metastore et des plugins meta (séparés par des virgules) appliqués automatiquement lors de la création de dépôts utilisant ce driver.",
"Auth Driver Commons" => "Driver d'authentification commun",
"Transmit Clear Pass" => "Transmettre le mot de passe en clair",
"Whether the password will be transmitted clear or encoded between the client and the server" => "Le mot de passe doit-il être transmis en clair ou de manière cryptée entre le client et le serveur",
"Auto Create User" => "Autocréation d'utilisateur",
"When set to true, the user object is created automatically if the authentication succeed. Used by remote authentication systems." => "Si actif, l'objet utilisateur sera créé automatiquement si l'authentification réussi. Utilisé par les systèmes d'authentification distants.",
"Login Redirect" => "Redirection à la connexion",
"If set to a given URL, the login action will not trigger the display of login screen but redirect to this URL." => "Si défini, l'action de connexion n'affichera pas l'écran de connexion mais redirigera vers cette URL.",
"Admin Login" => "Connexion administrateur",
"For exotic auth drivers, an user ID that must be considered as admin by default." => "Pour les drivers d'authentification exotiques, un ID d'utilisateur devant-être considéré comme administrateur par défaut.",
"Show hidden files" => "Afficher les fichiers cachés",
"Show files beginning with a ." => "Afficher les fichiers commençant par un \".\"",
"Hide recycle bin" => "Cacher la corbeille",
"Whether to show the recycle bin folder. Unlike in the following options, the folder will be hidden but still writeable." => "Cacher le répertoire de la corbeille. Au contraire des options suivantes, le répertoire sera caché mais toujours utilisable.",
"Hide extensions" => "Cacher des extensions",
"Comma-separated list of extensions to hide. Extensions, files and folders that are hidden are also access forbidden." => "Liste, séparée par des virgules, d'extensions à cacher. Les extensions, fichiers et répertoires cachés ne seront plus accessibles.",
"Hide folders" => "Cacher des répertoires",
"Comma-separated list of specific folders to hide" => "Liste, séparée par des virgules, de répertoires à cacher.",
"Hide files" => "Cacher des fichiers",
"Comma-separated list of specific files to hide" => "Liste, séparée par des virgules, de fichiers à cacher.",
"Metadata and indexation" => "Métadonnées et indexation",
"Default Metasources" => "Metasources par défaut",
"Comma-separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Liste des metastore et des plugins meta (séparés par des virgules) appliqués automatiquement lors de la création de dépôts utilisant ce driver.",
"Pydio Main Options" => "Options principales de Pydio",
"Server URL" => "URL du serveur",
"Server URL used to build share links and notifications. It will be detected if empty." => "URL du serveur utilisée pour créer les liens de partages et les notifications. Si laissé vide, sera auto-détecté.",
"Force Basic Auth" => "Forcer \"Basic Auth\"",
"This authentication mechanism is less secure, but will avoid the users having to re-enter a password in some case." => "Ce mécanisme d'authentification est moins sécurisé, mais pourra éviter, dans certains cas, aux utilisateur de re-saisir leur mot de passe.",
"Browser Access" => "Accès navigateur",
"Display the list of files and folder when accessing through the browser" => "Affiche la liste des fichiers et répertoires lors d'un accès via le navigateur",
"Command Line" => "Ligne de commande",
"Use COM class" => "Utiliser les classes COM",
"On Windows running IIS, set this option to true if the COM extension is loaded, this may enable the use of the php command line." => "Pour Windows et IIS, activer cette option si l'extension COM est chargée, cela permettra l'utilisation de la ligne de commande PHP.",
"Disable Zip browsing" => "Désactiver la navigation Zip",
"Disable Zip files inline browsing. This can be necessary if you always store huge zip archives: it can have some impact on performance." => "Désactiver la navigation en ligne dans les fichiers Zip. Peut-être nécessaire si vous stockez de grosses archives zip : peut avoir un impact sur les performances.",
"Zip Encoding" => "Encodage Zip",
"Set up a specific encoding (try IBM850 or CP437) for filenames to fix characters problems during Zip creation. This may create OS-incompatible archives (Win/Mac)." => "Utilisez un encodage spécifique (essayez IBM850 ou CP437) pour les noms de fichiers afin de résoudre les problèmes avec les caractères durant la création de Zip. Peut créer des archives incompatibles avec certains systèmes d'exploitation (Win / Mac).",
"Repository Commons" => "Dépôt commun",
"Description" => "Description",
"A user-defined description of the content of this workspace" => "Une description de l'utilisateur du contenu de ce dépôt",
"Group Path" => "Chemin de groupe",
"Set this repository group owner : only users of this group will see it" => "Définissez le groupe propriétaire de ce dépôt : seuls les utilisateurs du groupe pourront le voir.",
"Disable WebDAV" => "Désactiver WebDAV",
"Explicitly disable WebDAV access for this repository." => "Désactiver explicitement l'accès WebDAV pour ce dépôt.",
"Allow to group admins" => "Autoriser le groupe administrateur",
"Allow group administrators to create a repository from this template." => "Autoriser le groupe administrateur à créer un dépôt à partir de ce modèle.",
);
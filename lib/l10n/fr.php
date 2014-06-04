<?php
$TRANSLATIONS = array(
"You are accessing the server from an untrusted domain." => "Vous accédez au serveur à partir d'un domaine non-approuvé.",
"Please contact your administrator. If you are an administrator of this instance, configure the \"trusted_domain\" setting in config/config.php. An example configuration is provided in config/config.sample.php." => "Veuillez contacter votre administrateur. Si vous être l'administrateur de cette instance, il faut configurer la variable \"trusted_domain\" dans le fichier config/config.php. Un exemple de configuration est fournit dans le fichier config/config.sample.php.",
"App \"%s\" can't be installed because it is not compatible with this version of ownCloud." => "L'application \"%s\" ne peut être installée car elle n'est pas compatible avec cette version de ownCloud.",
"No app name specified" => "Aucun nom d'application spécifié",
"Help" => "Aide",
"Personal" => "Personnel",
"Settings" => "Paramètres",
"Users" => "Utilisateurs",
"Admin" => "Administration",
"Failed to upgrade \"%s\"." => "Echec de la mise à niveau \"%s\".",
"Unknown filetype" => "Type de fichier inconnu",
"Invalid image" => "Image invalide",
"web services under your control" => "services web sous votre contrôle",
"No source specified when installing app" => "Aucune source spécifiée pour installer l'application",
"No href specified when installing app from http" => "Aucun href spécifié pour installer l'application par http",
"No path specified when installing app from local file" => "Aucun chemin spécifié pour installer l'application depuis un fichier local",
"Archives of type %s are not supported" => "Les archives de type %s ne sont pas supportées",
"Failed to open archive when installing app" => "Échec de l'ouverture de l'archive lors de l'installation de l'application",
"App does not provide an info.xml file" => "L'application ne fournit pas de fichier info.xml",
"App can't be installed because of not allowed code in the App" => "L'application ne peut être installée car elle contient du code non-autorisé",
"App can't be installed because it is not compatible with this version of ownCloud" => "L'application ne peut être installée car elle n'est pas compatible avec cette version de ownCloud",
"App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps" => "L'application ne peut être installée car elle contient la balise <shipped>true</shipped> qui n'est pas autorisée pour les applications non-diffusées",
"App can't be installed because the version in info.xml/version is not the same as the version reported from the app store" => "L'application ne peut être installée car la version de info.xml/version n'est identique à celle indiquée sur l'app store",
"App directory already exists" => "Le dossier de l'application existe déjà",
"Can't create app folder. Please fix permissions. %s" => "Impossible de créer le dossier de l'application. Corrigez les droits d'accès. %s",
"Application is not enabled" => "L'application n'est pas activée",
"Authentication error" => "Erreur d'authentification",
"Token expired. Please reload page." => "La session a expiré. Veuillez recharger la page.",
"Unknown user" => "Utilisateur inconnu",
"Files" => "Fichiers",
"Text" => "Texte",
"Images" => "Images",
"%s enter the database username." => "%s entrez le nom d'utilisateur de la base de données.",
"%s enter the database name." => "%s entrez le nom de la base de données.",
"%s you may not use dots in the database name" => "%s vous nez pouvez pas utiliser de points dans le nom de la base de données",
"MS SQL username and/or password not valid: %s" => "Le nom d'utilisateur et/ou le mot de passe de la base MS SQL est invalide : %s",
"You need to enter either an existing account or the administrator." => "Vous devez spécifier soit le nom d'un compte existant, soit celui de l'administrateur.",
"MySQL/MariaDB username and/or password not valid" => "Nom d'utilisateur et/ou mot de passe MySQL/MariaDB invalide",
"DB Error: \"%s\"" => "Erreur de la base de données : \"%s\"",
"Offending command was: \"%s\"" => "La requête en cause est : \"%s\"",
"MySQL/MariaDB user '%s'@'localhost' exists already." => "L'utilisateur MySQL/MariaDB '%s'@'localhost' existe déjà.",
"Drop this user from MySQL/MariaDB" => "Retirer cet utilisateur de la base MySQL/MariaDB",
"MySQL/MariaDB user '%s'@'%%' already exists" => "L'utilisateur MySQL/MariaDB '%s'@'%%' existe déjà",
"Drop this user from MySQL/MariaDB." => "Retirer cet utilisateur de la base MySQL/MariaDB.",
"Oracle connection could not be established" => "La connexion Oracle ne peut pas être établie",
"Oracle username and/or password not valid" => "Nom d'utilisateur et/ou mot de passe de la base Oracle invalide",
"Offending command was: \"%s\", name: %s, password: %s" => "La requête en cause est : \"%s\", nom : %s, mot de passe : %s",
"PostgreSQL username and/or password not valid" => "Nom d'utilisateur et/ou mot de passe de la base PostgreSQL invalide",
"Set an admin username." => "Spécifiez un nom d'utilisateur pour l'administrateur.",
"Set an admin password." => "Spécifiez un mot de passe administrateur.",
"Your web server is not yet properly setup to allow files synchronization because the WebDAV interface seems to be broken." => "Votre serveur web, n'est pas correctement configuré pour permettre la synchronisation des fichiers, car l'interface WebDav ne fonctionne pas comme il faut.",
"Please double check the <a href='%s'>installation guides</a>." => "Veuillez vous référer au <a href='%s'>guide d'installation</a>.",
"%s shared »%s« with you" => "%s partagé »%s« avec vous",
"Sharing %s failed, because the file does not exist" => "Le partage de %s a échoué car le fichier n'existe pas",
"You are not allowed to share %s" => "Vous n'êtes pas autorisé à partager %s",
"Sharing %s failed, because the user %s is the item owner" => "Le partage de %s a échoué car l'utilisateur %s est le propriétaire de l'objet",
"Sharing %s failed, because the user %s does not exist" => "Le partage de %s a échoué car l'utilisateur %s n'existe pas",
"Sharing %s failed, because the user %s is not a member of any groups that %s is a member of" => "Le partage de %s a échoué car l'utilisateur %s n'est membre d'aucun groupe auquel %s appartient",
"Sharing %s failed, because this item is already shared with %s" => "Le partage de %s a échoué car cet objet est déjà partagé avec %s",
"Sharing %s failed, because the group %s does not exist" => "Le partage de %s a échoué car le groupe %s n'existe pas",
"Sharing %s failed, because %s is not a member of the group %s" => "Le partage de %s a échoué car %s n'est pas membre du groupe %s",
"You need to provide a password to create a public link, only protected links are allowed" => "Vous devez fournir un mot de passe pour créer un lien public, seul les liens protégés sont autorisées.",
"Sharing %s failed, because sharing with links is not allowed" => "Le partage de %s a échoué car un partage de lien n'est pas permis",
"Share type %s is not valid for %s" => "Le type de partage %s n'est pas valide pour %s",
"Setting permissions for %s failed, because the permissions exceed permissions granted to %s" => "Le réglage des permissions pour %s a échoué car les permissions dépassent celle accordée à %s",
"Setting permissions for %s failed, because the item was not found" => "Le réglage des permissions pour %s a échoué car l'objet n'a pas été trouvé",
"Sharing backend %s must implement the interface OCP\\Share_Backend" => "L'emplacement du partage %s doit implémenter l'interface OCP\\Share_Backend",
"Sharing backend %s not found" => "Emplacement de partage %s introuvable",
"Sharing backend for %s not found" => "L'emplacement du partage %s est introuvable",
"Sharing %s failed, because the user %s is the original sharer" => "Le partage de %s a échoué car l'utilisateur %s est déjà l'utilisateur à l'origine du partage.",
"Sharing %s failed, because the permissions exceed permissions granted to %s" => "Le partage de %s a échoué car les permissions dépassent les permissions accordées à %s",
"Sharing %s failed, because resharing is not allowed" => "Le partage de %s a échoué car le repartage n'est pas autorisé",
"Sharing %s failed, because the sharing backend for %s could not find its source" => "Le partage %s a échoué parce que la source n'a été trouvée pour le partage %s.",
"Sharing %s failed, because the file could not be found in the file cache" => "Le partage de %s a échoué car le fichier n'a pas été trouvé dans les fichiers mis en cache.",
"Could not find category \"%s\"" => "Impossible de trouver la catégorie \"%s\"",
"seconds ago" => "il y a quelques secondes",
"_%n minute ago_::_%n minutes ago_" => array("","il y a %n minutes"),
"_%n hour ago_::_%n hours ago_" => array("","Il y a %n heures"),
"today" => "aujourd'hui",
"yesterday" => "hier",
"_%n day go_::_%n days ago_" => array("","il y a %n jours"),
"last month" => "le mois dernier",
"_%n month ago_::_%n months ago_" => array("","Il y a %n mois"),
"last year" => "l'année dernière",
"years ago" => "il y a plusieurs années",
"Only the following characters are allowed in a username: \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"" => "Seuls les caractères suivants sont autorisés dans un nom d'utilisateur : \"a-z\", \"A-Z\", \"0-9\", et \"_.@-\"",
"A valid username must be provided" => "Un nom d'utilisateur valide doit être saisi",
"A valid password must be provided" => "Un mot de passe valide doit être saisi",
"The username is already being used" => "Le nom d'utilisateur est déjà utilisé"
);
$PLURAL_FORMS = "nplurals=2; plural=(n > 1);";

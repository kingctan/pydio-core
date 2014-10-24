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
"1" => "Données de configuration",
"2" => "Utilisateurs & Groupes",
"3" => "Dépôts",
"4" => "Journal",
"5" => "Diagnostique",
"6" => "Nom",
"7" => "Administrateur",
"8" => "Nom du dépôt",
"9" => "Type d'accès",
"10" => "Métadonnées",
"11" => "Ajouter une source",
"12" => "Plugin Meta",
"13" => "Êtes-vous sûr de vouloir supprimer cette source ?",
"14" => "Oui",
"15" => "Non",
"16" => "Date du fichier",
"17" => "Date",
"18" => "I.P.",
"19" => "Niveau",
"20" => "Utilisateur",
"21" => "Action",
"22" => "Paramètres",
"23" => "Nom du test",
"24" => "Résultat",
"25" => "Accès aux dépôts",
"26" => "Changer le mot de passe",
"27" => "Droit d'admin",
"28" => "L'utilisateur est administrateur ?",
"29" => "Lire",
"30" => "Ecrire",
"32" => "Plugin du dépôt",
"33" => "Chargement ...",
"34" => "Êtes-vous sûr de vouloir effacer cet utilisateur? Cette opération est irréversible !",
"35" => "Êtes-vous sur de vouloir effacer ce dépôt? Cette opération est irréversible !",
"36" => "Des champs obligatoires ne sont pas remplis !",
"37" => "Attention les deux mots de passe différent !",
"38" => "Veuillez remplir le champ \"Identifiant\" !",
"39" => "Veuillez remplir les deux champs \"Mot de passe\" !",
"40" => "Veuillez cocher la case pour confirmer !",
"41" => "Options",
"42" => "Veuillez choisir un driver !",
"43" => "L'utilisateur existe, veuillez choisir un autre identifiant",
"44" => "L'utilisateur a été créé avec succès",
"45" => "Droit d'administration modifié pour l'utilisateur ",
"46" => "Droit d'accès modifié pour l'utilisateur ",
"47" => "Les données ont été enregistrées pour l'utilisateur ",
"48" => "Le mot de passe a été modifié pour ",
"49" => "Impossible de changer le mot de passe",
"50" => "Erreur : un dépôt avec le même nom existe déjà.",
"51" => "Le répertoire \"conf\" n'est pas accessible en écriture.",
"52" => "Le dépôt a été créé. Vous pouvez maintenant ajouter des \"Sources de métadonnées\" pour enrichir vos données, ajouter l'indexation automatique, ...",
"53" => "Erreur lors de la modification du dépôt.",
"54" => "Le dépôt a été modifié.",
"55" => "Attention, pour l'instant, vous ne pouvez ajouter qu'une seule instance de chaque plugin méta.",
"56" => "La source de métadonnées a été ajoutée.",
"57" => "La source de métadonnées a été supprimée.",
"58" => "La source de métadonnées a été modifiée.",
"59" => "Le dépôt a été supprimé",
"60" => "L'utilisateur a été supprimé",
"61" => "Mauvais arguments !",
"62" => "Résumé des droits",
"63" => "Tous",
"64" => "Les droits ont été changés pour le rôle ",
"65" => "Le rôle existe déjà, choisissez un autre nom !",
"66" => "Le rôle a été créé",
"67" => "Impossible de trouver le rôle ",
"68" => "Le rôle a été supprimé",
"69" => "Rôles",
"70" => "Rôles utilisateur",
"71" => "Rôles disponibles",
"72" => "Glissez / déposez les rôles pour les assigner à l'utilisateur",
"73" => "Le rôle a été ajouté à l'utilisateur ",
"74" => "Le rôle a été enlevé à l'utilisateur ",
"75" => "Nouveau rôle",
"role_access" => "ô",
"76" => "Identifiant du rôle",
"77" => "Contrôle d'accès",
"78" => "Données personnelles",
"79" => "Dépôt",
"80" => "Précisez les droits d'accès pour cet utilisateur (cliquez sur le nom du dépôt si vous souhaitez le définir comme dépôt par défaut à la connexion de l'utilisateur)",
"81" => "Données spécifiques aux dépôts",
"82" => "Edition en groupe des utilisateurs",
"83" => "Glissez / déposez les rôles pour les assigner aux utilisateurs sélectionnés (les utilisateurs partagés ne seront pas pris en compte)",
"84" => "Rôles utilisateurs",
"85" => "Filtrage manuel des actions",
"86" => "Liste d'actions qui seront désactivées pour ce rôle, quelque soit le droit d'accès associé.",
"87" => "Les actions ont été mises à jour pour ce rôle.",
"88" => "Ce dépôt est défini dans le fichier de configuration, il n'est pas possible de mettre à jour les métadonnées via l'interface.",
"89" => "Données spécifiques de l'utilisateur",
"90" => "Nouveau dépôt",
"91" => "Nouveau modèle",
"92" => "Créer un nouveau modèle",
"93" => "Edition",
"94" => "Edition en masse",
"95" => "Choisir un libellé et un driver pour accéder aux données (vérifiez les champs obligatoires dans l'ensemble des sections; passez la souris sur les labels pour avoir des détails).",
"96" => "Choisissez un libellé et un driver, puis activez, à l'aide des cases à cocher, les champs que vous voulez pré-remplir pour constituer ce modèle. Les autres champs seront laissés à l'utilisateur. Vous pouvez cocher des champs et les laisser vide, afin de les cacher à l'utilisateur.",
"repository_access_key" => "D",
"97" => "Les options du plugin ont été mises à jour",
"98" => "Options principales",
"99" => "Extensions importantes",
"100" => "Options communes pour les '%s'",
"101" => "Nom",
"102" => "Identifiant",
"103" => "Description",
"104" => "Actif",
"105" => "Vérification",
"106" => "Identifiant unique",
"107" => "Configuration du plugin",
"108" => "Documentation",
"109" => "Configurations globales",
"110" => "Dépôts & Utilisateurs",
"111" => "Logs & Autres données",
"112" => "<b>Appliquer ce rôle par défaut</b> à tous les nouveaux utilisateurs.",
"113" => "Le rôle a été modifié avec succès",
"114" => "Défaut",
"115" => "Schéma",
"116" => "Nom du modèle",
"117" => "Plugin d'accès",
"118" => "Nouveau Groupe",
"group_access" => "G",
"119" => "Définir le groupe pour l'utilisateur",
"120" => "Version Pro",
"121" => "Obtenir un support professionnel pour votre installation",
"122" => "Paramètres",
"123" => "Autres extensions",
"124" => "Source",
"125" => "Alias",
"126" => "Voulez-vous vraiment supprimer les éléments sélectionnés?",
"127" => "Attention, veuillez ne pas utiliser de caractères spéciaux, l'utilisateur serait créé avec l'identifiant '%s'",
);
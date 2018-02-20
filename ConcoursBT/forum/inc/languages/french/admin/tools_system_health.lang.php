<?php
/**
 * MyBB 1.8 French Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['system_health'] = "État du système";
$l['system_health_desc'] = "Vous pouvez suivre l’état de votre système.";
$l['utf8_conversion'] = "Conversion UTF-8";
$l['utf8_conversion_desc'] = "Vous allez convertir une base de données au format UTF-8. Cette opération peut prendre plusieurs heures, en fonction de la taille de votre forum et de ses tables. Quand le processus sera terminé, vous serez dirigé vers la page principale de conversion UTF-8.";
$l['utf8_conversion_desc2'] = "Cet outil vérifie que la base de données est au format UTF-8 et vous permet de la convertir si elle n’est pas encodée ainsi.";

$l['convert_all'] = "Tout convertir";
$l['converting_to_utf8'] = "MyBB convertit la table \"{1}\" en UTF-8 à partir de l’encodage {2}.";
$l['convert_to_utf8'] = "Vous êtes sur le point de convertir la table \"{1}\" en encodage UTF-8 à partir de l’encodage {2}.";
$l['convert_all_to_utf'] = "Vous êtes sur le point de convertir TOUTES les tables en encodage UTF-8 à partir de l’encodage {1}.";
$l['convert_all_to_utf8mb4'] = "Vous êtes sur le poinr de convertir TOUTES les tables dans le langage d’encodage UTF-8 Unicode 4-Byte depuis l’encodage {1}.";
$l['converting_to_utf8mb4'] = "MyBB convertit la table \"{1}\" dans le langage d’encodage UTF-8 4-octets depuis l’encodage {2}.";
$l['please_wait'] = "Veuillez patienter...";
$l['converting_table'] = "Conversion de la table :";
$l['convert_table'] = "Convertir table";
$l['convert_tables'] = "Convertir toutes les tables";
$l['convert_database_table'] = "Convertir la table de la base de données";
$l['convert_database_tables'] = "Convertir toutes les tables de la base de données";
$l['table'] = "Table";
$l['status_utf8'] = "État UTF-8";
$l['status_utf8mb4'] = "Le support UTF-8 4-octets<br />(requiert MySQL 5.5.3 ou supérieur)";
$l['not_available'] = "Non disponible";
$l['all_tables'] = "Toutes les tables";
$l['convert_now'] = "Convertir maintenant";
$l['totals'] = "Total";
$l['attachments'] = "Pièces jointes";
$l['total_database_size'] = "Taille totale de la base";
$l['attachment_space_used'] = "Espace utilisé par les pièces jointes";
$l['total_cache_size'] = "Taille totale du cache";
$l['estimated_attachment_bandwidth_usage'] = "Utilisation estimée de la bande passante pour les pièces jointes";
$l['max_upload_post_size'] = "Upload max/Taille de POST";
$l['average_attachment_size'] = "Taille moyenne des pièces jointes";
$l['stats'] = "Statistiques";
$l['task'] = "Tâche";
$l['run_time'] = "Heure de lancement";
$l['next_3_tasks'] = "3 tâches suivantes";
$l['no_tasks'] = "Aucune tâche en cours d’exécution en ce moment.";
$l['backup_time'] = "Heure de sauvegarde";
$l['no_backups'] = "Il n’existe actuellement aucune sauvegarde déjà faite.";
$l['existing_db_backups'] = "Sauvegardes de base de données existantes";
$l['writable'] = "Écriture possible";
$l['not_writable'] = "Écriture impossible";
$l['please_chmod_777'] = "CHMODez à 777.";
$l['chmod_info'] = "Changez l’attribut CHMOD des fichiers/dossiers ci-dessous. Pour de plus amples renseignements sur le CHMOD, consultez le";
$l['file'] = "Fichier";
$l['location'] = "Emplacement";
$l['settings_file'] = "Fichier de paramètres";
$l['config_file'] = "Fichier de configuration";
$l['file_upload_dir'] = "Répertoire d’envoi des fichiers";
$l['avatar_upload_dir'] = "Répertoire d’envoi des avatars";
$l['language_files'] = "Fichiers de langue";
$l['backup_dir'] = "Répertoire des sauvegardes";
$l['cache_dir'] = "Répertoire du cache";
$l['themes_dir'] = "Répertoire des thèmes";
$l['chmod_files_and_dirs'] = "CHMOD des fichiers et répertoires";

$l['notice_process_long_time'] = "Ce processus peut prendre jusqu’à plusieurs heures en fonction de la taille de votre forum et de ses tables.<strong> Il est fortement recommandé de faire une sauvegarde de la base car ce processus est irréversible.</strong>";
$l['notice_mb4_warning'] = "Le support UTF-8 4-octets requiert MySQL 5.5.3 ou ultérieur. Vous ne pourrez plus importer votre base de données sur un serveur MySQL avec une autre version.";

$l['check_templates'] = "Vérifier les templates";
$l['check_templates_desc'] = "Vérifie l’absence de problèmes de sécurité connus dans tous les templates installés.";
$l['check_templates_title'] = "Vérifier la sécurité des templates";
$l['check_templates_info'] = "Ce processus va vérifier vos templates pour s’assurer de l’absence de problèmes de sécurité qui pourraient affecter votre forum et le serveur sur lequel il s’exécute. Cela pourra prendre un certain temps si vous avez installé de nombreux thèmes
<br /><br />Pour démarrer le processus, cliquez sur le bouton ’Lancer’ ci-dessous.";
$l['check_templates_info_desc'] = "Les templates ci-dessous contiennent des problèmes de sécurité connus. Veuillez les examiner.";
$l['full_edit'] = "Edition complète";

$l['error_chmod'] = "des fichiers et des répertoires requis n’ont pas le bon réglage CHMOD.";
$l['error_invalid_table'] = "La table spécifiée n’existe pas.";
$l['error_db_encoding_not_set'] = "Votre installation actuelle de MyBB n’est pas encore configurée pour utiliser cet outil. Consultez <a href=\"https://docs.mybb.com/1.8/administration/utf-8-setup/\">la documentation MyBB</a> pour de plus amples renseignements sur la façon de la configurer.";
$l['error_not_supported'] = "Votre moteur de base de données n’est pas pris en charge par l’outil de conversion UTF-8.";
$l['error_invalid_input'] = "Il y a eu un problème lors de la vérifications des templates. Essayez de nouveau ou contactez le Groupe MyBB pour le support.";
$l['error_master_templates_altered'] = "Les templates maîtres ont été modifiés. Contactez le Groupe MyBB pour obtenir une aide sur la façon de les modifier.";
$l['error_utf8mb4_version'] = "Votre version MySQL ne supporte pas l’encodahe UTF-8 4-octets.";

$l['warning_multiple_encodings'] = "Il est recommandé de ne pas utiliser des encodages différents dans votre base de données. Ceci peut engendrer un fonctionnement inattendu ou des erreurs MySQL.";
$l['warning_utf8mb4_config'] = "Pour le support complet UTF-8 4-octets vous devez remplacer <i>\$config[’database’][’encoding’] = ’utf8’;</i> par <i>\$config[’database’][’encoding’] = ’utf8mb4’;</i> dans votre inc/config.php.";

$l['success_templates_checked'] = "Templates vérifiés - pas de problème de sécurité trouvé !";
$l['success_all_tables_already_converted'] = "Toutes les tables ont déjà été converties ou sont déjà au format UTF-8.";
$l['success_table_converted'] = "La table sélectionnée \"{1}\" a été convertie en UTF-8.";
$l['success_chmod'] = "Tous les fichiers et répertoires ont le bon réglage CHMOD."; 

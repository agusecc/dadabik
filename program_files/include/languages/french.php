<?php
/*
***********************************************************************************
DaDaBIK (DaDaBIK is a DataBase Interfaces Kreator) http://www.dadabik.org/
Copyright (C) 2001-2012  Eugenio Tacchini

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

If you want to contact me by e-mail, this is my address: eugenio.tacchini@unicatt.it
***********************************************************************************
*/
?>
<?php
// submit buttons
$submit_buttons_ar = array (
	"insert"    => "Ins�rer un nouvel enregistrement",
	"search/update/delete" => "Chercher/Mettre � jour/Effacer un enregistrement",
	"insert_short"    => "Ins�rer",
	"search_short" => "Chercher",
	"new_mailing" => "Nouveau Mailing",
	"check_existing_mailing" => "Contr�ler le mailing existant",
	"send_mailing" => "Envoyer le mailing existant",
	"insert_anyway"    => "Ins�rer quand m�me",
	"search"    => "Chercher un enregistrement",
	"update"    => "Mettre � jour un enregistrement",
	"ext_update"    => "Mettre � jour votre profil",
	"yes"    => "Oui",
	"no"    => "Non",
	"go_back" => "Retour",
	"edit" => "Editer",
	"delete" => "Effacer",
	"details" => "D�tails",
	"remove_from_mailing" => "Retirer du mailing",
	"remove_all_from_mailing" => "Retirer tous du mailing",
	"send" => "Envoyer",
	"add_to_mailing" => "Ajouter au mailing",
	"print_labels" => "Imprimer les �tiquettes",
	"create_this_mailing" => "                 Cr�er ce mailing                 ",
	"change_table" => "Changer de table"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Ins�rer un �l�ment",
	"show_all_records" => "Montrer tous les enregistrements",
	"logout" => "Se deconnecter",
	"top" => "Haut",
	"last_search_results" => "R�sultats de la derni�re recherche",
	"show_all" => "Tout Montrer",
	"home" => "Accueil",
	"select_operator" => "S�lectionner l'op�rateur:",
	"all_conditions_required" => "Toutes conditions requises",
	"any_conditions_required" => "N'importe quelle condition requise",
	"all_contacts" => "Tous les contacts",
	"removed" => "retir�",
	"please" => "SVP",
	"and_check_form" => "et contr�ler le formulaire.",
	"and_try_again" => "et essayer � nouveau.",
	"none" => "aucun",
	"are_you_sure" => "Etes-vous s�r?",
	"delete_all" => "Effacer tout",
	"really?" => "Vraiment?",
	"delete_are_you_sure" => "Effacer l'enregistrement ci-dessous, �tes-vous s�r?",
	"required_fields_missed" => "Vous n'avez pas rempli tous les champs requis.",
	"alphabetic_not_valid" => "Vous avez ins�r� un/plusieurs nombre(s) dans un champ lettre.",
	"numeric_not_valid" => "Vous avez ins�r� un/plusieurs caract�res non num�riques dans un champ num�rique.",
	"email_not_valid" => "L'e-mail ins�r� n'est pas valide.",
	"timestamp_not_valid" => "L'horodatage ins�r� n'est pas valide.",
	"url_not_valid" => "Le(s) URL ins�r�e(s) ne sont pas valides.",
	"phone_not_valid" => "Num�ro de t�l�phone non valide.",
	"date_not_valid" => "Date(s) non valide(s)",
	"similar_records" => "Les enregistrements ci-dessous semblent �tre identiques � celui que vous voulez ins�r�.<br>Que voulez-vous faire?",
	"no_records_found" => "Pas d'enregistrement trouv�.",
	"records_found" => "enregistrements trouv�s",
	"number_records" => "Nombre d'enregistrement: ",
	"details_of_record" => "D�tails de l'enregistrement",
	"edit_record" => "Editer l'enregistrement",
	"back_to_the_main_table" => "Retour � la table principale",
	"previous" => "Pr�c�dent",
	"next" => "Suivant",
	"edit_profile" => "Mettre � jour vos informations de profil",
	"i_think_that" => "Je pense que ",
	"is_similar_to" => " est identique � ",
	"page" => "Page ",
	"of" => " de ",
	"records_per_page" => "enregistrements par page",
	"day" => "Jour",
	"month" => "Mois",
	"year" => "Ann�e",
	"administration" => "Administration",
	"create_update_internal_table" => "Cr�er ou mettre � jour une table interne",
	"other...." => "autres....",
	"insert_record" => "Ins�rer un nouvel enregistrement",
	"search_records" => "Chercher les enregistrements",
	"exactly" => "exactement",
	"like" => "comme",
	"required_fields_red" => "Les champs requis sont en rouge.",
	"insert_result" => "Ins�rer le r�sultat:",
	"record_inserted" => "Enregistrement correctement ins�r�.",
	"update_result" => "Mettre � jour le r�sultat:",
	"record_updated" => "Enregistrement correctement mis � jour.",
	"profile_updated" => "Votre profil a correctement �t� mis � jour.",
	"delete_result" => "Effacer le r�sultat:",
	"record_deleted" => "Enregistrement correctement �ffac�.",
	"duplication_possible" => "Duplication possible",
	"mail_to_records" => "mailer � tous les enregistrements trouv�s",
	"number_mails" => "Nombre de messages que vous allez envoyer: ",
	"specify_subject_body" => "Sp�cifier le sujet et le corps SVP",
	"create_new_mailing" => "Cr�er un nouveau mailing",
	"mailing_name" => "Nom du mailing: ",
	"mailing_type" => "Type du mailing: ",
	"specify_mailing_name" => "(Specifiez un nom pour identifier ce mailing, ex. bonjour_2002, n'utilisez pas de citation simple/double SVP!!!!!!)",
	"email_specific_fields" => "Les champs bleus concernent les suivis de mailing, ignorez pour un mail normal",
	"from" => "De: ",
	"subject" => "Sujet: ",
	"body" => "Corps: ",
	"dear" => "Cher",
	"john_smith" => "Mr. John B. Smith",
	"start_sending" => "Envoyer......",
	"mailing_sent" => "......Mailing envoy�",
	"mail_to" => "Envoyer �",
	"sent" => "envoy�",
	"send" => "Envoyer",
	"e-mail" => "e-mail",
	"normal_mail" => "mail normal",
	"attachment" => "Pi�ces jointes: ",
	"additional_notes_mailing" => "Notes<br>(ex. raison du mail)",
	"please_specify_mailing_name" => "Specifiez un nom pour le mailing, SVP.",
	"please_specify_mailing_type" => "Specifiez un type pour le mailing, SVP.",
	"please_specify_mailing_subject" => "Specifiez un sujet pour le mailing, SVP.",
	"please_specify_mailing_body" => "Specifiez un corps pour le mailing, SVP.",
	"mailing_name_already_used" => "Le nom que vous avez choisi est d�j� utilis�, choisissez en un autre.",
	"filename_already_used" => "Le nom de la pi�ce jointe �xiste d�j�, choisissez en un autre.",
	"mailing" => "Mailing",
	"created" => "cr��",
	"all_records_found" => "tous les enregistrements trouv�s",
	"add_contacts_to" => "Ajouter des contacts �",
	"check_mailing" => "Contr�ler le mailing",
	"the_mailing" => "Le mailing",
	"mailing_already_sent" => "Ce mailing a d�j� �t� envoy�!!",
	"was_composed_by" => "a �t� r�dig� par",
	"contacts" => "contacts",
	"you_have_added" => "Vous avez ajout�",
	"of_which_duplicated" => "dupliqu�(s) de",
	"of_which_with_no_info" => "duquel il n'y a pas assez d'informations",
	"is_composed_by" => "est maintent r�dig� par",
	"go_back_to_home_send_or_add" => "Vous pouvez retourner � la page d'accueil et envoyer le mail, ou chercher et ajouter d'autres contacts au mail.",
	"fields_max_length" => "Vous avez ins�r� trop de texte dans un/plusieur(s) champs.",
	"you_are_going_unsubscribe" => "Voulez-vous vraiment vous d�sabonner de la mailing list ?",
	"you_have_unsubscribed" => "vous �tes � pr�sent d�sinscrit de la mailing list.",
	"change_profile_url" => "Si vous d�sirez faire partie de notre communaut�, cliquez le lien suivant pour v�rifier vos informations: ",
	"removed_mailing_list_url" => "Pour vous d�sabonner, visitez ce: ",
	"city" => "Ville",
	"province" => "R�gion",
	"zip_code" => "Code Postal",
	"prefix" => "Pr�fixe",
	"no_city_found" => "Pas de ville trouv�e",
	"print_warning" => "Etablissez la marge d'impression � (0,0,0,0) (top, bottom, left, right) dans votre navigateur de fa�on � correctement imprimer les �tiquettes.",
	"current_upload" => "Fichier en cours",
	"delete" => "Effacer",
	"total_records" => "Total Enregistrements",
	"confirm_delete?" => "Confirmer la supression ?",
	"is_equal" => "est �gal �",
	"contains" => "contient",
	"starts_with" => "commence par",
	"ends_with" => "se termine par",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Exporte en format CSV",
	"new_insert_executed" => "Nouvelle insertion effectu�e",
	"new_update_executed" => "Nouvelle mise � jour effectu�e",
	"null" => "Null",
	"is_null" => "est NULL",
	"is_empty" => "est vide"

	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Erreur, la base interne est vide.",
	"get" => "Erreur dans la r�cup�ration des variables.",
	"no_unique_update_id" => "Votre lien de mise � jour a expir�.",
	"no_unique_unsubscribe_id" => "Votre lien de d�sabonnement est incorrect.",
	"no_functions" => "Erreur, pas de fonction s�lectionn�e.<br>Retournez � l'accueil.",
	"no_unique_key" => "Erreur, vous n'avez pas de cl� primaire dans votre base.",	
	"upload_error" => "Une erreur est intervenue durant le transfert.",
	"no_authorization_update_delete" => "Vous n'avez pas l'autorisation de modifier / detruire cet enregistrement.",
	"no_authorization_view" => "Vous n'avez pas l'autorisation de voir cet enregistrement.",
	"deleted_only_authorizated_records" => "Seuls les enregistrements pour lesquels vous etes autorise ont ete detruits.",
	"record_from_which_you_come_no_longer_exists" => "L'enregistrement d'o� vous venez n'existe plus.",
	"date_not_representable" => "Une date dans cet enregistrement ne correspond pas au format 'Jour / Mois / Ann�e' de DaDaBIK. Sa valeur est :  ", // to change
	"this_record_is_the_last_one" => "Cet enregistrement est le dernier.",
	"this_record_is_the_first_one" => "Cet enregistrement est le premier."
	);

//login messages
$login_messages_ar = array(
	"username" => "nom d'utilisateur",
	"password" => "mot de passe",
	"please_authenticate" => "Vous devez vous identifier pour continuer",
	"login" => "login", 
	"username_password_are_required" => "nom d'utilisateur et mot de passe sont obligatoires", 
	"pwd_gen_link" => "cr�er un mot de passe",
	"incorrect_login" => "Nom d'utilisateur ou Mot de passe incorrect",
	"pwd_explain_text" =>"Tapez un mot � utiliser comme mot de passe et pressez <b>Cryptage !</b>.",
	"pwd_explain_text_2" =>"Pressez <b>Enregistrer le Mot de passe et Quitter</b> pour l'�crire sur le formulaire ci-dessous", 
	"pwd_suggest_email_sending"=>"Vous pouvez vous envoyer un email pour m�moriser le mot de passe", 
	"pwd_send_link_text" =>"Envoi courrier!",
	"pwd_encrypt_button_text" => "Cryptage !", 
	"pwd_register_button_text" => "Enregistrer le Mot de passe et Quitter" 
)
?>
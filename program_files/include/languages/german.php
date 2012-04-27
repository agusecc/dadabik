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
	"insert"    => "Neuen Satz einf�gen",
	"search/update/delete" => "S�tze suchen/aktualisieren/l�schen",
	"insert_short"    => "Einf�gen",
	"search_short" => "Suchen",
	"new_mailing" => "Neues Mailing",
	"check_existing_mailing" => "�berpr�fe vorhandes Mailing",
	"send_mailing" => "Vorhandenes Mailing versenden",
	"insert_anyway"    => "troztdem einf�gen",
	"search"    => "Suche nach Satz",
	"update"    => "Speichern",
	"ext_update"  => "Ihr Profil aktualisieren",
	"yes"    => "Ja",
	"no"    => "Nein",
	"go_back" => "zur�ck",
	"edit" => "Editieren",
	"delete" => "L�schen",
	"details" => "Details",
	"remove_from_mailing" => "Aus Mailing entfernen",
	"remove_all_from_mailing" => "Alle aus Mailing entfernen",
	"send" => "Senden",
	"add_to_mailing" => "Zum Mailing hinzuf�gen",
	"print_labels" => "Label drucken",
	"create_this_mailing" => "                 Dieses Mailing erstellen             	  ",
	"change_table" => "Tabelle wechseln"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Eintrag einf�gen",
	"show_all_records" => "Alle S�tze zeigen",
	"logout" => "Abmelden",
	"top" => "Top",
	"last_search_results" => "Letzte Suchergebnisse",

	"show_all" => "Alles zeigen",
	"home" => "Startseite",
	"select_operator" => "Verkn�pfung w�hlen:",
	"all_conditions_required" => "Alle Bedingungen m�ssen zutreffen",
	"any_conditions_required" => "Eine Bedingung muss zutreffen",
	"all_contacts" => "Alle Kontakte",
	"removed" => "entfernt",
	"please" => "Bitte",
	"and_check_form" => "�berpr�fen Sie das Formular.",
	"and_try_again" => "und versuchen Sie es erneut.", 
	"none" => "keine",
	"are_you_sure" => "Sind Sie sicher?",
	"delete_all" => "Alle l�schen", 
	"really?" => "Wirklich ?", 
	"delete_are_you_sure" => "Sie wollen den nachstehenden Satz l�schen. Sind Sie sicher?",
	"required_fields_missed" => "Sie haben einige erforderliche Felder nicht ausgef�llt.<br>Bitte f�llen Sie alle erforderlichen Felder aus.",
	"alphabetic_not_valid" => "Sie haben numerische Werte in ein Alfa-Feld eingegeben.",
	"numeric_not_valid" => "Sie haben nichtnumerische Zeichen in ein numerisches Feld eingetragen.",
	"email_not_valid" => "Die eingegebene/n E-Mail-Adresse/n ist/sind nicht g�ltig.",
	"timestamp_not_valid" => "Der/Die eingef�gte/n Zeitstempel ist/sind nicht g�ltig.",
	"url_not_valid" => "Die eingegebene/n URL/s ist/sind nicht g�ltig.",
	"phone_not_valid" => "Die eingegebene/n Telefon-Nummer/n ist/sind nicht g�ltig.",
	"date_not_valid" => "Sie haben ung�ltige Datumsangaben eingetragen.", 
	"similar_records" => "Die untenstehenden S�tze �hneln dem Satz, den Sie einf�gen m�chten.<br>Was m�chten Sie tun?",
	"no_records_found" => "Keine S�tze gefunden.",
	"records_found" => "S�tze gefunden",
	"number_records" => "Anzahl S�tze: ",
	"details_of_record" => "Details des Satzes:",
	"edit_record" => "Satz editieren",
	"back_to_the_main_table" => "Zur�ck zur Haupttabelle",
	"previous" => "Vorheriger",

		"next" => "N�cjster",

	"edit_profile" => "Ihre Profil-Information aktualisieren",
	"i_think_that" => "Ich denke ",
	"is_similar_to" => " �hnelt folgendem ",
	"page" => "Seite ",
	"of" => " von ",
	"records_per_page" => "S�tze pro Seite",

	"day" => "Tag",
	"month" => "Monat",
	"year" => "Jahr",
	"administration" => "Administration",
	"create_update_internal_table" => "Interne Tabelle erstellen/aktualisieren",
	"other...." => "andere....",
	"insert_record" => "Neuen Satz einf�gen",
	"search_records" => "Suche nach S�tzen",
	"exactly" => "exakt",
	"like"    => "�hnlich",
	"required_fields_red" => "Erforderliche Felder sind rot markiert.",
	"insert_result" => "Einf�ge-Ergebnis:",
	"record_inserted" => "Satz korrekt eingef�gt.",
	"update_result" => "Aktualisierungs-Ergebnis:",
	"record_updated" => "Satz korrekt aktualisiert.",
	"profile_updated" => "Ihr Profil wurde korrekt aktualisiert.",
	"delete_result" => "L�sch-Ergebnis:",
	"record_deleted" => "Satz korrekt gel�scht.",
	"duplication_possible" => "Duplizierung m�glich",
	"mail_to_records" => "E-Mail an alle gefundenen S�tze",
	"number_mails" => "Anzahl Nachrichten, die Sie verschicken wollen: ",
	"specify_subject_body" => "Bitte geben Sie Subjekt und Text der Nachricht an",
	"create_new_mailing" => "Neues Mailing erstellen",
	"mailing_name" => "Mailing-Name: ",
	"mailing_type" => "Mailing-Typ: ",
	"specify_mailing_name" => "(Geben Sie einen Namen f�r dieses Mailing an, z. B. Arbeitskreis_2002, bitte benutzen Sie keine Anf�hrungszeichen!!!!!!)",
	"email_specific_fields" => "Blaue Felder beziehen sich auf E-Mail-Versand, ignorieren Sie diese bei normaler Post",
	"from" => "Von: ",
	"subject" => "Subjekt: ",
	"body" => "Text: ",
	"dear" => "Lieber",
	"john_smith" => "Hr. Otto Normalverbraucherin",
	"start_sending" => "Starte Senden......",
	"mailing_sent" => "......Mailing gesendet", 
	"mail_to" => "Mail an",
	"sent" => "gesendet",
	"send" => "Senden",
	"e-mail" => "E-Mail",
	"normal_mail" => "normale Post",
	"attachment" => "Anhang",
	"additional_notes_mailing" => "Zus�tzliche Notizen<br>(z.B. Anlass f�r dieses Mailing)",
	"please_specify_mailing_name" => "Bitte geben Sie einen Namen f�r dieses Mailing an.",
	"please_specify_mailing_type" => "Bitte geben Sie einen Typ f�r dieses Mailing an.",
	"please_specify_mailing_subject" => "Bitte geben Sie einen Betreff f�r dieses Mailing an.",
	"please_specify_mailing_body" => "Bitte geben Sie einen Inhalt f�r dieses Mailing an.",
	"mailing_name_already_used" => "Der von Ihnen gew�hlte Name wird bereits benutzt, bitte �ndern Sie ihn.",
	"filename_already_used" => "Der Dateiname des Anhangs ist bereits benutzt, bitte �ndern Sie den Namen.",
	"mailing" => "Mailing",
	"created" => "erstellt",
	"all_records_found" => "Alle S�tze gefunden",
	"add_contacts_to" => "Kontakte hinzuf�gen",
	"check_mailing" => "Mailing �berpr�fen",
	"the_mailing" => "Das Mailing",
	"mailing_already_sent" => "Dieses Mailing wurde bereits versandt!!",
	"was_composed_by" => "wurde erstellt von",
	"contacts" => "Kontakte",
	"you_have_added" => "Hinzugef�gt wurden",
	"of_which_duplicated" => "von denen Duplikate sind",
	"of_which_with_no_info" => "die nicht genug Informationen enthalten",
	"is_composed_by" => "ist nun erstellt von",
	"go_back_to_home_send_or_add" => "Sie k�nnen zur Startseite zur�ckgehen und das Mailing senden oder weitere Kontakte suchen und zu diesem Mailing hinzuf�gen.",
	"fields_max_length" => "Sie haben zuviel Text in ein oder mehrere Feld/er eingegeben.",
	"you_are_going_unsubscribe" => "Sie werden von unserer Mailingliste gel�scht. Weitermachen?",
	"you_have_unsubscribed" => "Sie wurden erfolgreich aus dieser Mailing-Liste ausgetragen.",
	"change_profile_url"  =>  "Zur �nderung Ihrer Profil-Information besuchen Sie bitte diese Seite",
	"removed_mailing_list_url" => "Um von der Mailingliste entfernt zu werden, besuchen Sie bitte diese Seite: ",
	"city" => "Stadt",
	"province" => "Land",
	"zip_code" => "Postleitzahl",
	"prefix" => "Pr�fix",
	"no_city_found" => "keine Stadt gefunden",
	"print_warning" => "Bitte setzen Sie den Druckbereich auf (0,0,0,0) (oben, unten, links, rechts) in Ihrem Browser, um die Label korrekt drucken zu k�nenn.",
	"current_upload" => "aktuelle Datei ",
	"delete" => "L�schen",
	"total_records" => "Gesamtanzahl S�tze",
	"confirm_delete?" => "L�schung best�tigen ?",
	"is_equal" => "entspricht",
	"contains" => "enth�lt",
	"starts_with" => "beginnt mit",
	"ends_with" => "endet mit",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Als CSV-Datei ausgeben",
	"new_insert_executed" => "Neu-Einf�gung ausgef�hrt",
	"new_update_executed" => "Neu-Aktualisierung ausgef�hrt",
	"null" => "Null",
	"is_null" => "ist null",
	"is_empty" => "ist leer"

	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Fehler, die interne Datenbank ist leer.",
	"get" => "Fehler, beim Variablen-Abruf.",
	"no_unique_update_id" => "Ihr Aktualisierungs-Link ist abgelaufen.",
	"no_unique_unsubscribe_id" => "Ihr Austragungs-Link ist nicht korrekt.",
	"no_functions" => "Fehler, keine Funktionen gew�hlt.<br>Bitte gehen Sie zur�ck zur Startseite.",
	"no_unique_key" => "Fehler, Sie haben keinen Prim�rschl�ssel in Ihrer Tabelle.",	
	"upload_error" => "W�hrend der Datei-�bertragung trat ein Fehler auf." ,
	"no_authorization_update_delete" => "Sie haben keine Berechtigung zum �ndern/L�schen des Datensatzes.",
	"no_authorization_view" => "Sie haben keine Berechtigung zum Ansehen des Datensatzes.",
	"deleted_only_authorizated_records" => "Es wurden nur die S�tze gel�scht, f�r die Sie eine Berechtigung haben.",
	"record_from_which_you_come_no_longer_exists" => "Der zuletzt angezeigte Datensatz existiert nicht mehr.",
	"date_not_representable" => "Ein Datumswert in diesem Datensatz kann nicht mit DaDaBIKs Tag-Monat-Jahr-Listbox angezeigt werden, der Wert ist:  ",

	"this_record_is_the_last_one" => "Dieser Datensatz ist der letzte.",

	"this_record_is_the_first_one" => "Dieser Datensatz ist der erste."

	);

//login messages
$login_messages_ar = array(
	"username" => "benutzername",
	"password" => "passwort",
	"please_authenticate" => "Zur Fortsetzung m�ssen Sie identifiziert sein",
	"login" => "Anmeldung",
	"username_password_are_required" => "Benutzername/Passwort sind erforderlich",
	"pwd_gen_link" => "passwort erstellen", 
	"incorrect_login" => "Benutzername/Passwort ist falsch",
	"pwd_explain_text" =>"Geben Sie ein Wort als Passwort ein und dr�cken Sie <b>Verschl�sseln!</b>.",
	"pwd_explain_text_2" =>"Klicken Sie <b>Registrieren</b> um es in das Formular einzutragen", 
	"pwd_suggest_email_sending"=>"Sie k�nnen sich selbst eine Email mit dem Passwort als Erinnerung schicken", 
	"pwd_send_link_text" =>"Email senden!", 
	"pwd_encrypt_button_text" => "Verschl�sseln!", 
	"pwd_register_button_text" => "Passwort registrieren und beenden"
)
?>
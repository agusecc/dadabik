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
	"insert"    => "Infoga ny datapost",
	"search/update/delete" => "S�k/uppdatera/radera dataposter",
	"insert_short"    => "Infoga",
	"search_short" => "S�k",
	"new_mailing" => "Nytt utskick",
	"check_existing_mailing" => "Kolla befintligt utskick",
	"send_mailing" => "S�nd utskick",
	"insert_anyway"    => "Infoga �nd�",
	"search"    => "S�k",
	"update"    => "Spara",
	"ext_update"    => "Uppdatera din profil",
	"yes"    => "Ja",
	"no"    => "Nej",
	"go_back" => "g� tillbaka",
	"edit" => "Editera",
	"delete" => "Radera",
	"details" => "Detaljer",
	"remove_from_mailing" => "Ta bort fr�n utskick",
	"remove_all_from_mailing" => "Ta bort allt fr�n utskick",
	"send" => "Skicka",
	"add_to_mailing" => "L�gg till utskick",
	"print_labels" => "Skriv etiketter",
	"create_this_mailing" => "                 Skapa detta utskick                 ",
	"change_table" => "�ndra tabell"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Visa alla poster",
	"logout" => "Logout",
	"top" => "Top",
	"last_search_results" => "Senaste s�kningen", 
	"show_all" => "Visa alla",
	"home" => "Hem",
	"select_operator" => "V�lj operator:",
	"all_conditions_required" => "Alla villkor sanna",
	"any_conditions_required" => "N�got vilkor sant",
	"all_contacts" => "Alla kontakter",
	"removed" => "borttaget",
	"please" => "V�nligen",
	"and_check_form" => "och kolla formul�ret.",
	"and_try_again" => "och prova igen.",
	"none" => "ingen",
	"are_you_sure" => "�r du s�ker?",
	"delete_all" => "radera allt",
	"really?" => "Verkligen?",
	"delete_are_you_sure" => "Du kommer att radera nedanst�ende datapost, �r du s�ker?",
	"required_fields_missed" => "Du har inte fyllt i vissa n�dv�ndiga f�lt.",
	"alphabetic_not_valid" => "Du har infogat nummer i ett textf�lt.",
	"numeric_not_valid" => "Du har infogat nonnumeriska tecken i ett nummerf�lt.",
	"email_not_valid" => "Den infogade utskicksadressen �r ogiltig.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Den infogade url �r oglitig.",
	"phone_not_valid" => "Det infogade telefonnumret �r ogiltigt.<br>Anv�nd formatet \"+(landskod)(riktnummer)(nummer)\" formatet d.v.s +390523599318.",
	"date_not_valid" => "Du har infogat ett ogiltigt datum.",
	"similar_records" => "Dataposterna nedanf�r liknar den du vill infoga.<br>Vad vill du g�ra?",
	"no_records_found" => "Hittar inga dataposter.",
	"records_found" => "dataposter hittats",
	"number_records" => "Antal dataposter: ",
	"details_of_record" => "Detaljer f�r datapost",
	"edit_record" => "�ndra datapost",
	"back_to_the_main_table" => "Back to the main table", // to change
	"last_search_results" => "Senaste s�kningen",
	"next" => "N�sta",
	"edit_profile" => "Uppdatera din profil",
	"i_think_that" => "Jag tror att ",
	"is_similar_to" => " liknar ",
	"page" => "Sida ",
	"of" => " av ",
	"records_per_page" => "poster / sida",
	"day" => "dag",
	"month" => "m�nad",
	"year" => "�r",
	"administration" => "Administration",
	"create_update_internal_table" => "Skapa eller �ndra intern tabell",
	"other...." => "annan....",
	"insert_record" => "Infoga ny datapost",
	"search_records" => "S�k dataposter",
	"exactly" => "exakt",
	"like" => "liknar",
	"required_fields_red" => "N�dv�ndiga f�lt �r r�da.",
	"insert_result" => "Infoga resultat:",
	"record_inserted" => "Datapost infogad.",
	"update_result" => "Uppdatera resultatet:",
	"record_updated" => "Datapost uppdaterad.",
	"profile_updated" => "Din profil har uppdaterats.",
	"delete_result" => "Radera resultatet:",
	"record_deleted" => "Datapost raderad.",
	"duplication_possible" => "En m�jlig dubblering",
	"mail_to_records" => "s�nd utskick till alla funna dataposter",
	"number_mails" => "Antal epostmeddelanden som kommer att skickas: ",
	"specify_subject_body" => "V�nligen specificera meddelandets rubrik och text",
	"create_new_mailing" => "Skapa nytt utskick",
	"mailing_name" => "Utskick namn: ",
	"mailing_type" => "Utskick typ: ",
	"specify_mailing_name" => "(Specificera ett namn f�r detta utskick, t ex workshop_2002. Anv�nd inte enkla eller dubbla citationestecken!!!!!!)",
	"email_specific_fields" => "Bl� f�lt �r relaterade till epost, ignorera dem om du v�ljer normal post",
	"from" => "Fr�n: ",
	"subject" => "Rubrik: ",
	"body" => "Text: ",
	"dear" => "B�ste",
	"john_smith" => "herr Karl Svensson",
	"start_sending" => "B�rja skicka......",
	"mailing_sent" => "......utskicket �r s�nt",
	"mail_to" => "Till",
	"sent" => "skickad",
	"send" => "Skicka",
	"e-mail" => "epost",
	"normal_mail" => "normal post",
	"attachment" => "Bifogat: ",
	"additional_notes_mailing" => "�vriga anteckningar<br>(t ex sk�l till utskicket)",
	"please_specify_mailing_name" => "Specificera namn f�r detta utskick.",
	"please_specify_mailing_type" => "Specificera typen av utskick.",
	"please_specify_mailing_subject" => "Specificera �mnet f�r utskicket.",
	"please_specify_mailing_body" => "Specificera utskickets text.",
	"mailing_name_already_used" => "Det valda namnet har redan anv�nts, v�nligen �ndra.",
	"filename_already_used" => "Namnet f�r en bifogad fil har redan anv�nts, v�nligen �ndra.",
	"mailing" => "Utskick",
	"created" => "skapat",
	"all_records_found" => "alla dataposter",
	"add_contacts_to" => "L�gg till kontakter till",
	"check_mailing" => "Kolla utskick",
	"the_mailing" => "Utskick",
	"mailing_already_sent" => "Detta utskick har redan s�nts!!",
	"was_composed_by" => "skriven av",
	"contacts" => "kontakter",
	"you_have_added" => "Du har lagts till",
	"of_which_duplicated" => "d�rav �r dubblerade",
	"of_which_with_no_info" => "d�rav saknar information",
	"is_composed_by" => "�r nu skriven av",
	"go_back_to_home_send_or_add" => "Du kan nu g� till hemsidan och s�nda utskicket eller s�ka och l�gga till andra kontakter till detta utskick.",
	"fields_max_length" => "F�r mycket text i n�got f�lt.",
	"you_are_going_unsubscribe" => "du kommer att tas bort fr�n utskickslistan. Vill du det?",
	"you_have_unsubscribed" => "du har tagits bort fr�n utskickslistan.",
	"change_profile_url" => "F�r att �ndra din profil v�nligen g� till denna sida: ",
	"removed_mailing_list_url" => "F�r att tas bort fr�n utskickslistan v�nligen g� till f�ljande sida: ",
	"city" => "Stad",
	"province" => "L�n",
	"zip_code" => "Postnummer",
	"prefix" => "Riktnummer",
	"no_city_found" => "Ingen stad hittad",
	"print_warning" => "Justera utskriftsmarginalen till (0,0,0,0) (top, botten, v�nster, h�ger) i din webl�sare f�r att skriva ut etiketterna korrekt.",
	"current_upload" => "Aktuell fil",
	"delete" => "radera",
	"total_records" => "Totalt antal dataposter",
	"confirm_delete?" => "Bekr�fta radering?",
	"is_equal" => "�r lika med",
	"contains" => "inneh�ller",
	"starts_with" => "b�rjar med",
	"ends_with" => "slutar med",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Export till CSV",
	"new_insert_executed" => "Ny infogning klar",
	"new_update_executed" => "Ny uppdatering klar",
	"null" => "Null",
	"is_null" => "� null",
	"is_empty" => "�r tom"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Fel, interna databasen �r tom.",
	"get" => "Fel i get variables.",
	"no_unique_update_id" => "Din uppdateringsl�nk �r gammal.<br>V�nligen kontakta webmastern f�r <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> f�r att f� ny l�nk.<br>Vi beklagar besv�ret.",
	"no_unique_unsubscribe_id" => "Din l�nk f�r att tas bort fr�n tj�nsten �r felaktig.<br>V�nligen kontakta webmastern f�r <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> f�r eventuella fr�gor.<br>Vi beklagar besv�ret.",
	"no_functions" => "Fel, ingen funktion vald<br>V�nligen g� tillbaka till hemsidan.",
	"no_unique_key" => "Fel, du har ingen prim�rnyckel i tabellen.",	
	"upload_error" => "Fel uppstod under uppladdning av filen.",
	"no_authorization_update_delete" => "Du �r inte auktoriserad f�r att �ndra/radera denna datapost.",
	"no_authorization_view" => "Du �r inte auktoriserad f�r att se denna datapost.",
	"deleted_only_authorizated_records" => "Endast dataposter f�r vilka du har auktorisation har raderats.",
	"record_from_which_you_come_no_longer_exists" => "Den ursprungliga posten finns inte kvar.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Detta �r den sista posten.",
	"this_record_is_the_first_one" => "Detta �r den f�rsta posten."
	);

//login messages
$login_messages_ar = array(
	"username" => "anv�ndarnamn",
	"password" => "passord",
	"please_authenticate" => "Du m�ste identifiera dig f�r att kunna g� vidare",
	"login" => "login",
	"username_password_are_required" => "Anv�ndarnamn och passord kr�vs",
	"pwd_gen_link" => "skapa passord",
	"incorrect_login" => "Anv�ndarnamn eller passord felaktiga",
	"pwd_explain_text" =>"Mata in ett ord som ska anv�ndas till passord och tryck <b>Kryptera!</b>.",
	"pwd_explain_text_2" =>"Tryck <b>Registrera</b> f�r att skriva in det i formul�ret nedan",
	"pwd_suggest_email_sending"=>"Du kanske vill skicka dig sj�lv ett epost meddelande f�r att minnas passordet",
	"pwd_send_link_text" =>"skicka epost!",
	"pwd_encrypt_button_text" => "Kryptera!",
	"pwd_register_button_text" => "Registrera passordet och avsluta"
);
?>
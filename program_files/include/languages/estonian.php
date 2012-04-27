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
// submit nupud
$submit_buttons_ar = array (
	"insert"    => "Lisa sissekanne",
	"search/update/delete" => "Otsi/Uuenda/Kustuta",
	"insert_short"    => "Lisa",
	"search_short" => "Otsi",
	"new_mailing" => "Uus postitus",
	"check_existing_mailing" => "Kontrolli olemasolevat postitust",
	"send_mailing" => "Saada  olemasolev postitus",
	"insert_anyway"    => "Lisa ikkagi",
	"search"    => "Otsi sissekannet",
	"update"    => "Salvesta",
	"ext_update"    => "Uuenda oma profiili",
	"yes"    => "Jah",
	"no"    => "Ei",
	"go_back" => "Mine tagasi",
	"edit" => "Muuda",
	"delete" => "Kustuta",
	"details" => "Detailid",
	"remove_from_mailing" => "Eemalda see postitus",
	"remove_all_from_mailing" => "	Eemalda k�ik postitused",
	"send" => "Saada",
	"add_to_mailing" => "Lisa postitusele",
	"print_labels" => "Prindi sildid",
	"create_this_mailing" => "                 Loo see postitus                 ",
	"change_table" => "Muuda tabelit"
);

// tavalised teated
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "N�ita k�iki sissekandeid",
	"logout" => "Logi v�lja",
	"top" => "Algus",
	"last_search_results" => "Last search results", // to change
	"show_all" => "N�ita k�iki",
	"home" => "Kodu",
	"select_operator" => "Vali operaator:",
	"all_conditions_required" => "K�ik tingimused peavad olema t�idetud",
	"any_conditions_required" => "�ks k�ik milline tingimustest peab olema t�idetud",
	"all_contacts" => "K�ik kontaktid",
	"removed" => "eemaldatud",
	"please" => "palun",
	"and_check_form" => "kontrolli sisestatud andmeid.",
	"and_try_again" => "proovi uuesti.",
	"none" => "�htegi",
	"are_you_sure" => "Oled sa kindel?",
	"delete_all" => "kustuta k�ik",
	"really?" => "T�esti?",
	"delete_are_you_sure" => "Sa oled kustutamas allolevat sissekannet, oled sa kindel et tahad seda?",
	"required_fields_missed" => "Sa ei ole t�itnud kohustuslikke v�ljasid.",
	"alphabetic_not_valid" => "Sa oled sisestanud numbrid t�htede asemel.",
	"numeric_not_valid" => "Sa oled sisestanud mittenumbrilised t�hem�rgid numbrite asemel.",
	"email_not_valid" => "Sisestatud e-mail aadress/id ei kehti.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Sisestatud URL aadress/id ei kehti.",
	"phone_not_valid" => "Sisestatud telefoni number ei kehti.<br>Palun kasuta j�rmist formaati \"+(riigi kood)(piirkonna kood)(number)\" n�iteks: +390523599318.",
	"date_not_valid" => "Sa oled sisestanud ebakorrektse kuup�eva.",
	"similar_records" => "Allolevad sissekanded tunduvad olevat sarnased sellega, mida p��ad sisestada.<br>Mida sa tahad teha?",
	"no_records_found" => "Sissekandeid ei leitud.",
	"records_found" => "sissekannet leitud",
	"number_records" => "Sissekannete arv: ",
	"details_of_record" => "Sissekande detailid",
	"edit_record" => "Muuda sissekannet",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Previous", // to change
	"next" => "Next", // to change
	"edit_profile" => "Uuenda oma profiil infot",
	"i_think_that" => "Ma arvan et ",
	"is_similar_to" => " on sarnane ",
	"page" => "Lehek�lg ",
	"of" => " - ",
	"records_per_page" => "records per page", // to change
	"day" => "P�ev",
	"month" => "Kuu",
	"year" => "Aasta",
	"administration" => "Administreerimine",
	"create_update_internal_table" => "Loo v�i uuenda sisemist tabelit",
	"other...." => "muu....",
	"insert_record" => "Sisesta uus sissekanne",
	"search_records" => "Otsi sissekandeid",
	"exactly" => "t�pselt",
	"like" => "nagu",
	"required_fields_red" => "Kohustuslikud v�ljad on punased.",
	"insert_result" => "Sisestuse tulemus:",
	"record_inserted" => "Sissekanne korralikult lisatud.",
	"update_result" => "Uuenduse tulemus:",
	"record_updated" => "Sissekanne korralikult uuendatud.",
	"profile_updated" => "Sinu profiil korralikult uuendatud.",
	"delete_result" => "Kustutumise tulemus:",
	"record_deleted" => "Sissekanne on korralikult kustutatud.",
	"duplication_possible" => "Dubleerimine on v�imalik",
	"mail_to_records" => "kiri k�igile leitus sissekannetele",
	"number_mails" => "Saadetavate s�numite arv: ",
	"specify_subject_body" => "Palun t�psusta s�numi subjekt ja sisu",
	"create_new_mailing" => "Loo uus postitus",
	"mailing_name" => "Postituse nimi: ",
	"mailing_type" => "Postituse t��p: ",
	"specify_mailing_name" => "(Sisesta nimi selle mailingu identifitseerimiseks , n�iteks workshop_2002, palun �ra kasuta �lakoma ega jutum�rke!!!!!!)",
	"email_specific_fields" => "Sinised v�ljad on seotud e-mailiga, ignoreeri neid kui oled valinud tavalise kirja",
	"from" => "Kellelt: ",
	"subject" => "Pealkiri: ",
	"body" => "Sisu: ",
	"dear" => "Kallis",
	"john_smith" => "Mr. John B. Smith",
	"start_sending" => "Alusta saatmist......",
	"mailing_sent" => "......Postitus saadetud",
	"mail_to" => "Kiri",
	"sent" => "saadetud",
	"send" => "saada",
	"e-mail" => "e-mail",
	"normal_mail" => "tavaline kiri",
	"attachment" => "Manus: ",
	"additional_notes_mailing" => "Lisam�rkused<br>(n�iteks kirja saatmise p�hjus)",
	"please_specify_mailing_name" => "Palun t�psusta kirja nimi.",
	"please_specify_mailing_type" => "Palun t�psusta kirja saatmise t��p.",
	"please_specify_mailing_subject" => "Palun t�psusta kirja pealkiri.",
	"please_specify_mailing_body" => "Palun t�psusta kirja sisu.",
	"mailing_name_already_used" => "Teie poolt valitud nimi on juba kasutusel, palun muuda seda.",
	"filename_already_used" => "Manuse fail juba kasutusel palun muuda selle nimi.",
	"mailing" => "Postitus",
	"created" => "loodud",
	"all_records_found" => "k�ik sissekanded leitud",
	"add_contacts_to" => "Lisa kontakt",
	"check_mailing" => "Kontrolli mailing",
	"the_mailing" => "Postitus",
	"mailing_already_sent" => "See postitus on juba saadetud!!",
	"was_composed_by" => "koostaja",
	"contacts" => "kontaktid",
	"you_have_added" => "Sa oled lisanud",
	"of_which_duplicated" => "on dublikaadid",
	"of_which_with_no_info" => "ei oma sisalda infot",
	"is_composed_by" => "koostaja on n��d",
	"go_back_to_home_send_or_add" => "N��d v�id minna tagasi algusesse ja saata postituse, samuti on v�imalik otsida ja lisada uusi adressaate.",
	"fields_max_length" => "Oled mingisse v�lja sisestanud liiga palju teksti.",
	"you_are_going_unsubscribe" => "teid eemaldatakse maililistist. J�tkata?",
	"you_have_unsubscribed" => "sind on edukald eemaldatud meie maililistist.",
	"change_profile_url" => "Oma profiili muutmiseks k�lasta palun seda lehek�lge: ",
	"removed_mailing_list_url" => "Postituste nimekirjast v�ljakirjutamiseks k�lasta seda lehek�lge: ",
	"city" => "Linn",
	"province" => "Maakond",
	"zip_code" => "Posti indeks",
	"prefix" => "Prefiks",
	"no_city_found" => "�htegi linna pole leitud",
	"print_warning" => "Palun s�ti printimise ��ris oma veebilehetsejas (0,0,0,0) (�laserv, alaserv, vasak, parem) selleks et silte korralikult printida.",
	"current_upload" => "Praegune fail",
	"delete" => "kustuta",
	"total_records" => "Sissekandeid kokku",
	"confirm_delete?" => "Kinnita kustutamine?",
	"is_equal" => "on v�rdne",
	"contains" => "sisaldab",
	"starts_with" => "algab",
	"ends_with" => "l�ppeb",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Ekspordi CSV formaadis",
	"new_insert_executed" => "New insert executed", // to change
	"new_update_executed" => "New update executed", // to change
	"null" => "Null", // to change
	"is_null" => "is null", // to change
	"is_empty" => "is empty" // to change
	);

// veateated
$error_messages_ar = array (
	"int_db_empty" => "Viga, sisemine andmebaas on t�hi.",
	"get" => "Viga andmebaasi muutujates.",
	"no_unique_update_id" => "Sinu v�rskenduse link on vananenud.<br>Palun v�ta �hensust veebimeistriga <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> to get a new link.<br>Vabandame!",
	"no_unique_unsubscribe_id" => "Your unsubscribe link is not correct.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> for any questions you may have.<br>We apologies for the inconvenience caused.",
	"no_functions" => "Viga! �htegi funktsiooni pole valitud<br>Palun mine tagasi algusesse.",
	"no_unique_key" => "Viga! Sinu tabelis ei ole primaarv�tit.",	
	"upload_error" => "Faili �leslaadimisel tekkis viga."
	"no_authorization_update_delete" => "Sul ei ole piisavalt �igusi sissekande muutmiseks/kustutamiseks.",
	"no_authorization_view" => "Sul ei ole piisavalt �igusi selle sissekande vaatamiseks.",
	"deleted_only_authorizated_records" => "Kustutatud on ainult need sissekanded millede kustutamiseks sul olid �igused.",
	"record_from_which_you_come_no_longer_exists" => "The record from which you come no longer exists.", // to change
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "This record is the last one.", // to change
	"this_record_is_the_first_one" => "This record is the first one." // to change
	);
	
	
	
// sisselogimise teated
$login_messages_ar = array(
	"username" => "kasutajanimi",
	"password" => "parool",
	"please_authenticate" => "J�tkamiseks peate ennast identifitseerima",
	"login" => "logi sisse",
	"username_password_are_required" => "Vajalikud on kasutajanimi ja parool",
	"pwd_gen_link" => "loo parool",
	"incorrect_login" => "Kasutajanimi v�i parool oli vale",
	"pwd_explain_text" =>"Sisesta s�na, mida hakkad kasutama paroolina ja vajuta <b>Kr�pteeri!</b>.",
	"pwd_explain_text_2" =>"Vajuta <b>Registreeri</b> et seda allolevasse vormi kirjutada",
	"pwd_suggest_email_sending"=>"Sa v�id endale soovi korral meili saata, et parool ei ununeks",
	"pwd_send_link_text" =>"saada mail!",
	"pwd_encrypt_button_text" => "Kr�pteeri!",
	"pwd_register_button_text" => "Registreeri parool ja v�lju"
)
?>

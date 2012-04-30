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
	"insert"    => "�j bejegyz�s hozz�ad�sa",
	"search/update/delete" => "Bejegyz�s(ek) keres�se/friss�t�se/t�rl�se",
	"insert_short"    => "Hozz�ad",
	"search_short" => "Keres",
	"new_mailing" => "�j lev�l",
	"check_existing_mailing" => "C�mjegyz�k ellen�rz�se",
	"send_mailing" => "C�mjegyz�k elk�ld�se",
	"insert_anyway"    => "M�giscsak illessze be",
	"search"    => "Bejegyz�s(ek) keres�se",
	"update"    => "Ment�s",
	"ext_update"    => "Profil friss�t�se",
	"yes"    => "Igen",
	"no"    => "Nem",
	"go_back" => "Vissza",
	"edit" => "Szerkeszt�s",
	"delete" => "T�rl�s",
	"details" => "R�szletek",
	"remove_from_mailing" => "Elt�vol�t�s a c�mjegyz�kb�l",
	"remove_all_from_mailing" => "C�mjegyz�k tartalm�nak t�rl�se",
	"send" => "K�ld�s",
	"add_to_mailing" => "Hozz�ad�s a c�mjegyz�khez",
	"print_labels" => "C�mk�k nyomtat�sa",
	"create_this_mailing" => "                 C�mjegyz�k l�trehoz�sa                 ",
	"change_table" => "T�bla hozz�ad�sa"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Create new item", // to change
	"show_all_records" => "�sszes bejegyz�s megjelen�t�se",
	"logout" => "Kijelentkez�s",
	"top" => "Tetej�re",
	"last_search_results" => "Legut�bbi keres�s eredm�nye",
	"show_all" => "�sszes",
	"home" => "Kezd�lap",
	"select_operator" => "V�lasszon elv�laszt�t:",
	"all_conditions_required" => "Minden felt�telnek feleljen meg",
	"any_conditions_required" => "B�rmely felt�telnek megfelehet",
	"all_contacts" => "Minden kapcsolat",
	"removed" => "elt�vol�t�sra ker�lt",
	"please" => "K�rem",
	"and_check_form" => "�s n�zze �t a t�bl�t.",
	"and_try_again" => "�s pr�b�lja �jra.",
	"none" => "egy sem",
	"are_you_sure" => "Biztos benne?",
	"delete_all" => "�sszes t�rl�se",
	"really?" => "Val�ban?",
	"delete_are_you_sure" => "Kit�rli az �sszes al�bbi bejegyz�st? Biztos ebben?",
	"required_fields_missed" => "Nem t�lt�tt ki egy/n�h�ny k�telez� mez�t.",
	"alphabetic_not_valid" => "Sz�mokat �rt egy mez�be, amelybe bet�k val�k.",
	"numeric_not_valid" => "Helytelen bet�ket �rt egy mez�be, melybe sz�mok val�k.",
	"email_not_valid" => "Az email c�m(ek), amely(ek)et megadott helytelen(ek).",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Az URL(ek), amely(ek)et megadott, helytelen(ek).",
	"phone_not_valid" => "A telefonsz�m(ok), amely(ek)et megadott, helytelen(ek).<br>Haszn�lja az al�bbi form�tumot: \"+(orsz�g k�d)(ter�leti k�d)(telefonsz�m)\" pl. +36301234567.",
	"date_not_valid" => "Egy, vagy t�bb megadott d�tum helytelen form�tum�.",
	"similar_records" => "Az al�bbi bejegyz�sek hasonl�ak ahhoz, amelyet hozz� szeretne adni.<br>Mit szeretne tenni?",
	"no_records_found" => "Nincs megfelel� bejegyz�s.",
	"records_found" => "megfelel� bejegyz�s tal�lhat�",
	"number_records" => "Bejegyz�sek sz�ma: ",
	"details_of_record" => "Bejegyz�s r�szletei",
	"edit_record" => "Bejegyz�s szerkeszt�se",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "El�z�",
	"next" => "K�vetkez�",
	"edit_profile" => "Profil adatok szerkeszt�se",
	"i_think_that" => "Azt gondolom, hogy ",
	"is_similar_to" => " hasonl�t ehhez: ",
	"page" => "Oldalsz�m: ",
	"of" => " �sszes oldal: ",
	"records_per_page" => "Oldalank�nti bejegyz�s",
	"day" => "Nap",
	"month" => "H�nap",
	"year" => "�v",
	"administration" => "Adminisztr�ci�",
	"create_update_internal_table" => "Bels� t�bla l�trehoz�sa/friss�t�se.",
	"other...." => "m�s....",
	"insert_record" => "�j bejegyz�s hozz�ad�sa",
	"search_records" => "Bejegyz�s keres�se",
	"exactly" => "ugyanolyan",
	"like" => "hasonl�",
	"required_fields_red" => "A k�telez� mez�k pirosak.",
	"insert_result" => "Hozz�ad�s eredm�nye:",
	"record_inserted" => "Bejegyz�s sikeresen hozz�adva.",
	"update_result" => "Friss�t�s eredm�nye:",
	"record_updated" => "Bejegyz�s sikeresen friss�tve.",
	"profile_updated" => "Profil sikeresen friss�tve.",
	"delete_result" => "T�rl�s eredm�nye:",
	"record_deleted" => "Bejegyz�s sikeresen t�r�lve.",
	"duplication_possible" => "Ism�telt el�fordul�s megengedett",
	"mail_to_records" => "email k�ld�se az �sszes al�bbi bejegyz�s c�m�re",
	"number_mails" => "Az elk�ld�sre ker�l� levelek sz�ma: ",
	"specify_subject_body" => "K�rem adja meg a lev�l c�m�t �s tartalm�t",
	"create_new_mailing" => "�j lev�lc�m hozz�ad�sa a c�mjegyz�khez",
	"mailing_name" => "Levelez�s azonos�t�: ",
	"mailing_type" => "Levelez�s t�pusa: ",
	"specify_mailing_name" => "(Adjon meg egy nevet a bejegyz�s azonost�s�hoz (pl. workshop_2002) K�rem ne haszn�ljon id�z� jeleket!!!!!!)",
	"email_specific_fields" => "A k�k mez�k email-re vonatkoznak; hagyja figyelmen k�v�l, ha hagyom�nyos lev�lc�mr�l van sz�",
	"from" => "K�ld�: ",
	"subject" => "C�m: ",
	"body" => "T�rgy: ",
	"dear" => "Kedves",
	"john_smith" => "Kov�cs J�nos �r",
	"start_sending" => "K�ld�s......",
	"mailing_sent" => "......Elk�ldve",
	"mail_to" => "C�mzett",
	"sent" => "elk�ldve",
	"send" => "Elk�ld�s",
	"e-mail" => "email",
	"normal_mail" => "hagyom�nyos",
	"attachment" => "Csatolm�ny: ",
	"additional_notes_mailing" => "Tov�bbi megjegyz�s<br>(pl.: level�l k�ld�s�nek az oka)",
	"please_specify_mailing_name" => "Adja meg a levelez�si azonos�t�t.",
	"please_specify_mailing_type" => "Adja meg a levelez�s t�pus�t.",
	"please_specify_mailing_subject" => "Adja meg a lev�l c�m�t.",
	"please_specify_mailing_body" => "Adja meg a lev�l t�rgy�t.",
	"mailing_name_already_used" => "A kiv�lasztott n�v m�r szerepel, k�rem v�lasszon m�sikat.",
	"filename_already_used" => "A csatolm�ny neve m�r szerepel, k�rem v�lasszon m�sik nevet .",
	"mailing" => "C�m",
	"created" => "l�trehozva",
	"all_records_found" => "�sszes megtal�lt bejegyz�s",
	"add_contacts_to" => "Add contacts to",
	"check_mailing" => "C�mjegyz�k ellen�rz�se",
	"the_mailing" => "A levelez�s",
	"mailing_already_sent" => "A lev�l m�r elk�ld�sre ker�lt!!",
	"was_composed_by" => "�r�ja",
	"contacts" => "kapscolatok",
	"you_have_added" => "Hozz�adta",
	"of_which_duplicated" => "melyek k�z�l ism�tl�d�",
	"of_which_with_no_info" => "melyek k�z�l nincs el�g inform�ci�",
	"is_composed_by" => "imm�r az �r�ja",
	"go_back_to_home_send_or_add" => "You can now go back to the home page and send the mailing, or search and add other contacts to this mailing.",
	"fields_max_length" => "T�l sok adatot vitt be valamelyik beviteli mez�be.",
	"you_are_going_unsubscribe" => "elt�vol�t�sra ker�l a levelez� list�r�l. Folytatja?",
	"you_have_unsubscribed" => "elt�vol�t�sra ker�lt a levelez� list�r�l.",
	"change_profile_url" => "Profilja megv�ltoztat�s�hoz l�togassa meg a k�vetkez� oldalt: ",
	"removed_mailing_list_url" => "A levelez� list�r�l t�rt�n� le�ratkoz�shoz l�togasson a k�vetkez� oldalra: ",
	"city" => "V�ros",
	"province" => "Megye",
	"zip_code" => "Ir�ny�t� sz�m",
	"prefix" => "El�tag",
	"no_city_found" => "Nem tal�lhat� ilyen v�ros",
	"print_warning" => "�ll�tsa be a marg�kat a nyomtat�shoz (0,0,0,0) (fels�, als�, bal, jobb) a b�ng�sz�j�ben a k�v�nt c�mk�khez.",
	"current_upload" => "Aktu�lis felt�ltend� f�jl",
	"delete" => "t�rl�s",
	"total_records" => "�sszes bejegyz�s",
	"confirm_delete?" => "Meger�s�ti a t�rl�st?",
	"is_equal" => "azonos",
	"contains" => "tartalmazza",
	"starts_with" => "kezd�dik",
	"ends_with" => "v�gz�dik",
	"greater_than" => "nagyobb",
	"less_then" => "kisebb",
	"export_to_csv" => "CSV expor�l�s",
	"new_insert_executed" => "Beilleszt�s v�grehajtve",
	"new_update_executed" => "Friss�t�s v�grehajtva",
	"null" => "Null",
	"is_null" => "nulla",
	"is_empty" => "&uuml;res"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Hiba: a bels� adatb�zis �res.",
	"get" => "Hiba: a v�ltoz�k lek�rdez�se k�zben.",
	"no_unique_update_id" => "Az egyedi friss�t� azonos�t�ja lej�rt.<br>Vegye fel a kapcsolatot a renszergazd�val <a href=\"mailto:atoth@atoth.sote.hu\">atoth@atoth.sote.hu</a>, hogy a friss�t�s link ism�t m�k�dj�n.<br>Eln�z�st a kellemetlens�g�rt.",
	"no_unique_unsubscribe_id" => "Hib�s a le�ratkoz� link.<br>Vegye fel a kapcsolatot a rendszergazd�val a k�vetkez� c�men: <a href=\"mailto:atoth@atoth.sote.hu\">atoth@atoth.sote.hu</a> �s �rtes�tse a probl�m�r�l.<br>Eln�z�st a kellemetlens�g�rt.",
	"no_functions" => "Hiba: v�lasszon a leeht�s�gek k�z�l<br>K�rem menjen vissza a kiidul� lapra.",
	"no_unique_key" => "Hiba: nincsen els�dleges azonos�t� kulcs az adatb�zisban.",	
	"upload_error" => "Hiba jelentkezett a f�jl felt�lt�se sor�n.",
	"no_authorization_update_delete" => "Nincs meg a jogosults�ga a bejegyz�s friss�t�s�hez/t�rl�s�hez.",
	"no_authorization_view" => "Nincs joga, hogy megn�zze a bejegyz�st.",
	"deleted_only_authorizated_records" => "Csak azon bejegyz�sek t�rl�dtek, melyekhez jogosults�ggal rendelkezett.",
	"record_from_which_you_come_no_longer_exists" => "A bejegyz�s m�r nem l�tezik.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "Ez az utols� bejegyz�s.",
	"this_record_is_the_first_one" => "Ez az els� bejegyz�s."
	);

//login messages
$login_messages_ar = array(
	"username" => "Felhaszn�l�",
	"password" => "Jelsz�",
	"please_authenticate" => "Folytat�shoz be kell jelentkeznie",
	"login" => "bejelentkez�s",
	"username_password_are_required" => "Username and password are required",
	"pwd_gen_link" => "jelsz� l�trehoz�sa",
	"incorrect_login" => "Helytelen felhaszn�l�, vagy jelsz�",
	"pwd_explain_text" =>"�rja be a k�v�nt jelsz�t �s kattintson a <b>Titkos�t�s!</b> gombra.",
	"pwd_explain_text_2" =>"Nyomja meg a <b>Regisztr�l�s</b> gombot, hogy �tm�sol�djon a megfelel� mez�be.",
	"pwd_suggest_email_sending"=>"Elk�ldheti mag�nak a jelsz�t egy emailben, ha k�v�nja.",
	"pwd_send_link_text" =>"email k�ld�se!",
	"pwd_encrypt_button_text" => "Titkos�t�s!",
	"pwd_register_button_text" => "A jelsz� regisztr�l�sa �s kil�p�s"
);
?>
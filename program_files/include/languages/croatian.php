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
	"insert"    => "Umetni novi podatak",
	"search/update/delete" => "Tra�i/uredi/poni�ti podatak",
	"insert_short"    => "Umetni",
	"search_short" => "Tra�i",
	"new_mailing" => "Novi mail",
	"check_existing_mailing" => "Provjeri postoje�i mail",
	"send_mailing" => "Po�alji mail",
	"insert_anyway"    => "Svejedno umetni",
	"search"    => "Tra�i podatak",
	"update"    => "A�uriraj podatak",
	"ext_update"    => "A�uriraj svoje podatke",
	"yes"    => "Da",
	"no"    => "Ne",
	"go_back" => "Natrag",
	"edit" => "Uredi",
	"delete" => "Poni�ti",
	"details" => "Detalji",
	"remove_from_mailing" => "Ukloni iz maila",	
	"remove_all_from_mailing" => "Ukloni sve iz maila",
	"send" => "Po�alji",
	"add_to_mailing" => "Dodaj u mail",
	"print_labels" => "Od�tampaj etikete",
	"create_this_mailing" => "Kreiraj ovaj mail",
	"change_table" => "Promjeni tablicu"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "Prika�i sve podatke", 
	"logout" => "Logout",
	"top" => "Na vrh",
	"last_search_results" => "zadnji rezultat pretrage", //to change 
	"show_all" => "Prika�i sve",
	"home" => "Po�etna",
	"select_operator" => "Izaberi operatora:",
	"all_conditions_required" => "Svi uvjeti",
	"any_conditions_required" => "Bilo koji uvjet",
	"all_contacts" => "Svi kontakti",
	"removed" => "Poni�teno",
	"please" => "Molimo vas",
	"and_check_form" => "i provjeri obrazac.",
	"and_try_again" => "poku�aj ponovno",
	"none" => "Niti jedan",
	"are_you_sure" => "Da li ste sigurni?",
	"delete_all" => "Poni�ti sve",
	"really?" => "Zaista?",
	"delete_are_you_sure" => "Poni�titi �e te ovaj podatak, da li ste sigurni?",
	"required_fields_missed" => "Niste ispunili obavezna polja.",
	"alphabetic_not_valid" => "Umetnuli ste znamenke u polje za slova.",
	"numeric_not_valid" => "Umetnuli ste slova u numeri�ko polje.",
	"email_not_valid" => "Umetnuli ste jednu ili vi�e neispravnih email adresa.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Umetnuli ste jednu ili vi�e neispravnih URL adresa.",
	"phone_not_valid" => "Umetnuli ste jedan ili vi�e neispravnih telefonskih brojeva. <br>Molimo vas da koristite format \"+(country code)(area code)(number)\" npr. +3850523599318.",
	"date_not_valid" => "Umetnuli ste jedan ili vi�e neispravnih datuma.",
	"similar_records" => "Podaci ispod sli�ni su podacima koje �elite umetnuti. <br>�to �elite u�initi?",
	"no_records_found" => "Nije prona�en niti jedan podatak.",
	"records_found" => "Prona�eni podaci.",
	"number_records" => "Ukupno podataka: ",
	"details_of_record" => "Detalji podatka",
	"edit_record" => "A�uriraj podatak",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "prijasnji", 
	"next" => "sljedeci", 
	"edit_profile" => "A�urirajte informacije o va�em profilu",
	"i_think_that" => "Mislim da  ",
	"is_similar_to" => "sli�no je ",
	"page" => "Stranica  ",
	"of" => " od ",
	"records_per_page" => "podaci po stranici",
	"day" => "Dan ",
	"month" => "Mjesec",
	"year" => "Godina",
	"administration" => "Administracija",
	"create_update_internal_table" => "Kreirajte ili a�urirajte internu tablicu",
	"other...." => "drugo....",
	"insert_record" => "Umetni novi podatak",
	"search_records" => "Tra�i podatke",	
	"exactly" => "to�no kao",
	"like" => "kao",
	"required_fields_red" => "Obavezna polja su ozna�ena crvenom bojom.",
	"insert_result" => "Rezultati umetanja:",
	"record_inserted" => "Podatak ispravno umetnut.",
	"update_result" => "Rezultat a�uriranja:",
	"record_updated" => "Podatak je ispravno a�uriran.",
	"profile_updated" => "Va� profil ispravno je a�uriran.",
	"delete_result" => "Rezultat poni�tavanja:",
	"record_deleted" => "Podatak je ispravno poni�ten.",
	"duplication_possible" => "Duplikacija je mogu�a",
	"mail_to_records" => "Email za sve prona�ene podatke",
	"number_mails" => "Broj poruka koje �e te poslati: ",
	"specify_subject_body" => "Odredite predmet i sadr�aj poruke",
	"create_new_mailing" => "Kreirajte novi mail",
	"mailing_name" => "Naziv maila: ",
	"mailing_type" => "Vrsta mailia: ",
	"specify_mailing_name" => "(Izaberite naziv po kojemu �e te identificirati ovaj mail, npr. grupa_2002, nemojte koristiti navodnike!!!",
	"email_specific_fields" => "Plava polja povezana su s mailom, ignorirajte ih ako izaberet obi�an mail",
	"from" => "Od: ",
	"subject" => "Predmet: ",
	"body" => "Sadr�aj: ",
	"dear" => "Po�tovani",
	"john_smith" => "Gosp.Ivica Maric",
	"start_sending" => "Zapo�ni sa slanjem......",
	"mailing_sent" => "....Mailing poslan ......",
	"mail_to" => "Mail za",
	"sent" => "poslan",
	"send" => "Po�alji",
	"e-mail" => "e-mail",
	"normal_mail" => "obi�an mail",
	"attachment" => "Prilog:",
	"additional_notes_mailing" => "Dodatne bilje�ke<br>(npr. razlog za slanje maila)",
	"please_specify_mailing_name" => "Trebate odrediti ime za mail.",
	"please_specify_mailing_type" => "Trebate odrediti vrstu maila.",
	"please_specify_mailing_subject" => "Trebate odrediti predmet maila.",
	"please_specify_mailing_body" => "Trebate odrediti sadr�aj maila.",
	"mailing_name_already_used" => "Ime koje ste izabrali ve� je bilo u upotrebi, promjenite ga.",
	"filename_already_used" => "Naziv priloga ve� je kori�ten, promjenite ga.",
	"mailing" => "Mail",
	"created" => "kreiran",
	"all_records_found" => "svi podaci prona�eni",
	"add_contacts_to" => "Dodajte kontakte za",
	"check_mailing" => "Provjerite mail",
	"the_mailing" => "Mail",
	"mailing_already_sent" => "Ovaj mail ve� je poslan!",
	"was_composed_by" => "sastavio je",
	"contacts" => "kontakti",
	"you_have_added" => "Dodali ste",
	"of_which_duplicated" => "od kojih je/su duplikat",
	"of_which_with_no_info" => "od kojih nemaju dovoljno informacija",
	"is_composed_by" => "Sastavio je",
	"go_back_to_home_send_or_add" => "Sada se mo�ete vratiti na po�etnu stranicu i poslati mail, ili pretra�iti i dodati druge primatelje za ovaj mail.",
	"fields_max_length" => "Upisali ste previ�e teksta u jedno ili vi�e polja.",
	"you_are_going_unsubscribe" => "biti �e te izbrisani iz na�eg mailing popisa. �elite li nastaviti?",
	"you_have_unsubscribed" => "Uspje�no ste izbrisani iz na�eg mailing popisa.",
	"change_profile_url" => "Za izmjene korisni�kog profila posjetite ovu stranicu: ",
	"removed_mailing_list_url" => "Za brisanje iz mailing popisa posjetite ovu stranicu: ",
	"city" => "Grad",
	"province" => "Zupanija",
	"zip_code" => "Postanski broj",
	"prefix" => "Prefiks",
	"no_city_found" => "Nijedan grad nije prona�en",
	"print_warning" => "Postavite rubove za �tampanje na (0,0,0,0) (vrh, dno, lijevo, desno) u va�em browseru kako bi ispravno od�tampali etikete.",
	"current_upload" => "Sada�nji dokument",
	"delete" => "Izbri�i",
	"total_records" => "Ukupno podataka",
	"confirm_delete?" => "Potvrditi brisanje?",
	"is_equal" => "jednak je",
	"contains" => "sadr�ava",
	"starts_with" => "pocinje s",
	"ends_with" => "zavrsava s",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Eksportiraj u CSV",
	"new_insert_executed" => "novi podatak izvrsen", 
	"new_update_executed" => "izvrseno novo azuriranje",
	"null" => "Null", // to change
	"is_null" => "is null", // to change
	"is_empty" => "is empty" // to change
);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Pogre�ka, baza podataka prazna je.",
	"get" => "Pogre�ka u varijabli get.",
	"no_unique_update_id" => "Va� link za a�uriranje je istekao.<br>Kontaktirajte webmastera.",
	"no_unique_unsubscribe_id" => "Va� link za brisanje je neispravan. Kontaktirajte webmastera za dodatne informacije.",
	"no_functions" => "Pogre�ka, nije izabrana niti jedna funkcija. Vratite se na po�etnu stranicu.",
	"no_unique_key" => "Pogre�ka, nemate niti jedan primarni klju� u va�oj tablici.",	
	"upload_error" => "Do�lo je do pogre�ke prilikom upload-a dokumenta.",
	"no_authorization_update_delete" => "Nemate autorizaciju za promjene/poni�tavanje ovog podatka.",
	"no_authorization_view" => "Nemate autorizaciju za pregledavanje ovog podatka.",
	"deleted_only_authorizated_records" => "Poni�teni su samo podaci za koje imate autorizaciju.",
	"record_from_which_you_come_no_longer_exists" => "registar odakle dolazite vise ne postoji",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "ovo je zadnji podatak", 
	"this_record_is_the_first_one" => "ovo je prvi podatak" 
	);

//login messages - new -
$login_messages_ar = array(
	"username" => "korisnik",
	"password" => "lozinka",
	"please_authenticate" => "Morate biti identificirani da bi ste nastavili",
	"login" => "login",
	"username_password_are_required" => "Trebate korisni�ko ime i lozinku",
	"pwd_gen_link" => "Kreirajte lozinku",
	"incorrect_login" => "Korisni�ko ime ili lozinka neispravni",
	"pwd_explain_text" =>"Upi�ite rije� koja �e biti va�a lozinka i pritisnite <b>Kriptiraj!</b>.",
	"pwd_explain_text_2" =>"Pritisnite <b>Registriraj</b> kako bi ste ju upisali u obrazac ispod",
	"pwd_suggest_email_sending"=>"Mo�ete si poslati email poruku s podacima o lozinki",
	"pwd_send_link_text" =>"po�aljite poruku",
	"pwd_encrypt_button_text" => "Kriptiraj!",
	"pwd_register_button_text" => "Registrirajte lozinku i iza�ite"
)
?>

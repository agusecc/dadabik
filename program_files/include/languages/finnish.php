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
	"insert"    => "Uuden tietueen lis�ys",
	"search/update/delete" => "Etsi/p�ivit�/poista tietueita",
	"insert_short"    => "Lis��",
	"search_short" => "Etsi",
	"new_mailing" => "Uusi postitus",
	"check_existing_mailing" => "Tarkista olemassaolevat postitukset",
	"send_mailing" => "L�het� olemassaoleva postitus",
	"insert_anyway"    => "Lis�� kaikesta huolimatta",
	"search"    => "Etsi tietuetta",
	"update"    => "Tallenna",
	"ext_update"    => "P�ivit� k�ytt�j�tietosi",
	"yes"    => "Kyll�",
	"no"    => "Ei",
	"go_back" => "Palaa takaisin",
	"edit" => "Muokkaa",
	"delete" => "Poista",
	"details" => "Tiedot",
	"remove_from_mailing" => "Poista postituksesta",
	"remove_all_from_mailing" => "Poista kaikki postituksesta",
	"send" => "L�het�",
	"add_to_mailing" => "Lis�� postitukseen",
	"print_labels" => "Tulosta tarrat",
	"create_this_mailing" => "                 Luo t�m� postitus                ",
	"change_table" => "Vaihda taulua"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "Insert item", // to change
	"show_all_records" => "N�yt� kaikki tietueet",
	"logout" => "Kirjaudu ulos",
	"top" => "Yl�s",
	"last_search_results" => "Viimeisimm�n haun tulokset",
	"show_all" => "N�yt� kaikki",
	"home" => "Aloitus",
	"select_operator" => "Valitse vertailutapa:",
	"all_conditions_required" => "Kaikkien ehtojen on t�ytytt�v�",
	"any_conditions_required" => "V�hint��n yhden ehdon on t�ytytt�v�",
	"all_contacts" => "Kaikki yhteystiedot",
	"removed" => "poistettu",
	"please" => "Ole hyv�",
	"and_check_form" => "ja tarkista lomake.",
	"and_try_again" => "ja yrit� uudelleen.",
	"none" => "ei lainkaan",
	"are_you_sure" => "Oletko varma?",
	"delete_all" => "poista kaikki",
	"really?" => "Todellako?",
	"delete_are_you_sure" => "Olet poistamassa oheista tietuetta, oletko aivan varma?",
	"required_fields_missed" => "Et ole t�ytt�nyt kaikkia vaadittuja tietoja.",
	"alphabetic_not_valid" => "Sopimattomia merkkej� kent�ss�, johon hyv�ksyt��n vain aakkosia (a-�).",
	"numeric_not_valid" => "Sopimattomia merkkej� kent�ss�, johon hyv�ksyt��n vain numeroita (0-9).",
	"email_not_valid" => "Antamasi s�hk�postiosoite ei ole kelvollinen.",
	"timestamp_not_valid" => "The timestamp/s you have inserted is/are not valid.", // to change
	"url_not_valid" => "Antamasi url (www-osoite) ei ole kelvollinen.",
	"phone_not_valid" => "Antamasi puhelinnumero ei ole kelvollinen.<br>K�yt� muotoa \"+(maatunnus)(aluetunnus)(numero)\" esim. +358401235678.",
	"date_not_valid" => "Antamasi p�iv�m��r� ei ole kelvollinen.",
	"similar_records" => "Oheiset tietueet ovat yhtenev�isi� antamiesi tietojen kanssa.<br>Mit� haluat tehd�?",
	"no_records_found" => "Yht��n tietuetta ei l�ytynyt.",
	"records_found" => "tietuetta l�ytyi",
	"number_records" => "Tietueiden lukum��r�: ",
	"details_of_record" => "Tietueen tiedot",
	"edit_record" => "Muokkaa tietuetta",
	"back_to_the_main_table" => "Back to the main table", // to change
	"previous" => "Edellinen",
	"next" => "Seuraava",
	"edit_profile" => "P�ivit� k�ytt�j�tietosi",
	"i_think_that" => "Oletan, ett� ",
	"is_similar_to" => " on samanlainen kuin ",
	"page" => "Sivu ",
	"of" => " / ",
	"records_per_page" => "tietuetta sivulla",
	"day" => "P�iv�",
	"month" => "Kuukausi",
	"year" => "Vuosi",
	"administration" => "Yll�pito",
	"create_update_internal_table" => "Luo tai p�ivit� sis�inen taulu",
	"other...." => "Muu, mik�? ...",
	"insert_record" => "Lis�� uusi tietue",
	"search_records" => "Etsi tietueita",
	"exactly" => "t�sm�lleen",
	"like" => "melkein kuin",
	"required_fields_red" => "Vaaditut tiedot merkitty punaisella.",
	"insert_result" => "Tallennus:",
	"record_inserted" => "Tietue lis�tty ongelmitta.",
	"update_result" => "P�ivitys:",
	"record_updated" => "Tietue p�ivitetty ongelmitta.",
	"profile_updated" => "K�ytt�j�tietosi on p�ivitetty ongelmitta.",
	"delete_result" => "Poisto:",
	"record_deleted" => "Tietue poistettu ongelmitta.",
	"duplication_possible" => "Kahdentuminen on mahdollinen",
	"mail_to_records" => "l�het� s�hk�postia kaikille l�ydetyille tietueille",
	"number_mails" => "L�hd�ss� olevien s�hk�postien lukum��r�: ",
	"specify_subject_body" => "M��rit� s�hk�postiviestin otsikko ja itse viesti",
	"create_new_mailing" => "Luo uusi postitus",
	"mailing_name" => "Postituksen nimi: ",
	"mailing_type" => "Postituksen tyyppi: ",
	"specify_mailing_name" => "(Nime� postitus, esim. muistio_2006, mutta �L� K�YT� nimess� LAINAUSMERKKEJ�!!)",
	"email_specific_fields" => "Siniset kent�t koskevat s�hk�postia, joten niit� ei tarvita mik�li valitsit perinteisen postin.",
	"from" => "L�hett�j�: ",
	"subject" => "Otsikko: ",
	"body" => "Viesti: ",
	"dear" => "Arvoisa",
	"john_smith" => "Matti Meik�l�inen",
	"start_sending" => "Aloitetaan l�hetys......",
	"mailing_sent" => "...... Postitus l�hetetty!",
	"mail_to" => "Vastaanottaja",
	"sent" => "l�hetetty",
	"send" => "L�het�",
	"e-mail" => "s�hk�posti",
	"normal_mail" => "tavallinen posti",
	"attachment" => "Liite: ",
	"additional_notes_mailing" => "Huomautuksia<br>(esim. postituksen syy)",
	"please_specify_mailing_name" => "Ole hyv� ja valitse postitukselle nimi.",
	"please_specify_mailing_type" => "Ole hyv� ja valitse postituksen tyyppi.",
	"please_specify_mailing_subject" => "Ole hyv� ja m��rittele postituksen otsikko.",
	"please_specify_mailing_body" => "Ole hyv� ja m��rittele postituksen viesti.",
	"mailing_name_already_used" => "Valitsemasi nimi on jo k�yt�ss�. Ole hyv� ja valitse toinen nimi.",
	"filename_already_used" => "Samanniminen liitetiedosto on jo olemassa. Ole hyv� ja valitse toinen nimi.",
	"mailing" => "Postitus",
	"created" => "luotu",
	"all_records_found" => "kaikki tietueet l�ydetty",
	"add_contacts_to" => "Lis�� yhteystiedot:",
	"check_mailing" => "Tarkista postitus",
	"the_mailing" => "Postitus",
	"mailing_already_sent" => "T�m� postitus on jo l�hetetty!!",
	"was_composed_by" => "kirjoittaja oli",
	"contacts" => "yhteystiedot",
	"you_have_added" => "Olet lis�nnyt",
	"of_which_duplicated" => "joista kahdennettuja oli",
	"of_which_with_no_info" => "joista riitt�m�tt�m�t tiedot oli",
	"is_composed_by" => "jonka toteutti:",
	"go_back_to_home_send_or_add" => "Voit nyt palata aloitussivulle ja l�hett�� postituksen, tai etsi� ja lis�t� uusia yhteystietoja t�h�n postitukseen.",
	"fields_max_length" => "Sis�lt� yhdess� tai useammassa kent�ss� on liian pitk�.",
	"you_are_going_unsubscribe" => "sinut poistetaan postituslistaltamme. Oletko varma?",
	"you_have_unsubscribed" => "sinut on onnistuneesti poistettu postituslistaltamme.",
	"change_profile_url" => "Muuttaaksesi k�ytt�j�tietojasi vieraile t�ll� sivulla: ",
	"removed_mailing_list_url" => "Poistaaksesi itsesi postituslistaltamme vieraile t�ll� sivulla: ",
	"city" => "Postitoimipaikka",
	"province" => "Maakuntia ei l�ydetty",
	"zip_code" => "Postinumero",
	"prefix" => "Alkuliite",
	"no_city_found" => "Postitoimipaikkoja ei l�ydetty",
	"print_warning" => "Ole hyv� ja aseta tulostusmarginaali (0,0,0,0) (yl�, ala, vasen, oikea) selaimessasi, jotta osoitelipukkeet tulostuvat oikein.",
	"current_upload" => "Nykyinen tiedosto",
	"delete" => "poista",
	"total_records" => "Tietueita yhteens�",
	"confirm_delete?" => "Vahvista poisto?",
	"is_equal" => "on yht� kuin",
	"contains" => "sis�lt��",
	"starts_with" => "alussa",
	"ends_with" => "lopussa",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "Vie CSV-muotoon",
	"new_insert_executed" => "Uusi lis�ys suoritettu",
	"new_update_executed" => "Uusi p�ivitys suoritettu",
	"null" => "Tyhj&auml;",
	"is_null" => "on tyhj&auml;",
	"is_empty" => "arvoa ei asetettu"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "Virhe. Sis�inen tietokanta on tyhj�.",
	"get" => "Virhe haettaessa muuttujia.",
	"no_unique_update_id" => "P�ivityslinkkisi on vanhentunut.<br>Ota yhteytt� yll�pitoon osoitteessa <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> saadaksesi uuden linkin.<br>Pahoittelemme aiheutunutta vaivaa.",
	"no_unique_unsubscribe_id" => "Virheellinen tilauksen peruutuslinkki.<br>Ota yhteytt� yll�pitoon osoitteessa <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> mik�li sinulla on kysytt�v��<br>Pahoittelemme aiheutunutta vaivaa.",
	"no_functions" => "Virhe. Toimintoja ei valittu.<br>Ole hyv� ja palaa takaisin kotisivulle.",
	"no_unique_key" => "Virhe. Sinulla ei ole yht��n \"primary key\"-kentt�� taulussasi.",
	"upload_error" => "Tiedoston latauksessa tapahtui virhe.",
	"no_authorization_update_delete" => "Oikeutesi eiv�t riit� t�m�n tietueen muokkaukseen tai poistamiseen.",
	"no_authorization_view" => "Oikeutesi eiv�t riit� t�m�n tietueen tarkasteluun.",
	"deleted_only_authorizated_records" => "Vain ne tietueet poistettiin, joiden poistoon sinulla oli oikeudet.",
	"record_from_which_you_come_no_longer_exists" => "Hakemaasi tietuetta ei ole en�� olemassa.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ", // to change
	"this_record_is_the_last_one" => "T�m� on viimeinen tietue.",
	"this_record_is_the_first_one" => "T�m� on ensimm�inen tietue."
	);

//login messages
$login_messages_ar = array(
	"username" => "K�ytt�j�tunnus",
	"password" => "Salasana",
	"please_authenticate" => "Kirjautuminen",
	"login" => "Kirjaudu sis��n",
	"username_password_are_required" => "K�ytt�j�tunnus ja salasana vaaditaan",
	"pwd_gen_link" => "Luo salasana",
	"incorrect_login" => "Kirjautumistiedoissa virhe, tarkista tunnus ja salasana.",
	"pwd_explain_text" =>"Kirjoita haluamasi salasana ja paina <b>Salaa salasana!</b>.",
	"pwd_explain_text_2" =>"Paina <b>Rekister�idy</b> ja kirjoita saamasi salattu salasana ao. kentt��n.",
	"pwd_suggest_email_sending"=>"Haluatko ett� sinulle l�hetet��n salasana s�hk�postitse?",
	"pwd_send_link_text" =>"L�het� salasana s�hk�postitse!",
	"pwd_encrypt_button_text" => "Salaa salasana!",
	"pwd_register_button_text" => "Rekister�i salasana ja poistu"
);
?>
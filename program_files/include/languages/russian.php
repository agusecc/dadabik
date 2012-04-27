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
	"insert"    => "�������� ����� ������",
	"search/update/delete" => "�����/��������/�������",
	"insert_short"    => "������� �����",
	"search_short" => "�����",
	"new_mailing" => "����� �����",
	"check_existing_mailing" => "��������� �����",
	"send_mailing" => "��������� �����",
	"insert_anyway"    => "�������� ��������",
	"search"    => "����� ������",
	"update"    => "���������",
	"ext_update"    => "�������� �������",
	"yes"    => "��",
	"no"    => "���",
	"go_back" => "�����",
	"edit" => "������",
	"delete" => "�������",
	"details" => "������",
	"remove_from_mailing" => "������� �� �����",
	"remove_all_from_mailing" => "������� ��� �� �����",
	"send" => "���������",
	"add_to_mailing" => "�������� � �����",
	"print_labels" => "������ �����",
	"create_this_mailing" => "                ������� ���������                  ",
	"change_table" => "�������� �������"
);

// normal messages
$normal_messages_ar = array (
	"insert_item" => "������� �����",
	"show_all_records" => "�������� ��� ������",
	"logout" => "�����",
	"top" => "����",
	"last_search_results" => "��������� �����",
	"show_all" => "�������� ���",
	"home" => "�����",
	"select_operator" => "������� ��������:",
	"all_conditions_required" => "����� �� ���������� �����",
	"any_conditions_required" => "����� �� ������ ����",
	"all_contacts" => "��� ��������",
	"removed" => "�������",
	"please" => "����������",
	"and_check_form" => "� �������� �����.",
	"and_try_again" => "� ���������� �����.",
	"none" => "���",
	"are_you_sure" => "�� �������?",
	"delete_all" => "������� ���",
	"really?" => "�������?",
	"delete_are_you_sure" => "�� ����������� ������� ������, �� �������?",
	"required_fields_missed" => "�� �� ��������� ��������� ������������ ����.",
	"alphabetic_not_valid" => "�� �������� ����� � ��������� �������",
	"numeric_not_valid" => "�� �������� �� �������� �������� � �������� ����",
	"email_not_valid" => "�� ������ ����� e-mail.",
	"timestamp_not_valid" => "�� ������ timestamp",
	"url_not_valid" => "The url/s you have inserted is/are not valid.",
	"phone_not_valid" => "�������� ����� ��������.<br>���� ��� \"+(��� ������)(��� �������)(�����)\" �������� +79222359931.",
	"date_not_valid" => "�������� ����",
	"similar_records" => "���� ����������� ������.<br>��� �� ������?",
	"no_records_found" => "�� ������� �������",
	"records_found" => "������� �������",
	"number_records" => "������� �������: ",
	"details_of_record" => "������ �������",
	"edit_record" => "������������� ������",
	"back_to_the_main_table" => "����� � ������� �������",
	"previous" => "����������",
	"next" => "���������",
	"edit_profile" => "�������� �������",
	"i_think_that" => "� �����, ��� ",
	"is_similar_to" => " �������� ",
	"page" => "�������� ",
	"of" => " �� ",
	"records_per_page" => "������� �� ��������",
	"day" => "����",
	"month" => "�����",
	"year" => "���",
	"administration" => "�����������������",
	"create_update_internal_table" => "������� ��� �������� �������",
	"other...." => "������...",
	"insert_record" => "�������� ����� ������",
	"search_records" => "����� �������",
	"exactly" => "�����",
	"like" => "��������",
	"required_fields_red" => "������������ ���� � �������",
	"insert_result" => "�������� ���������:",
	"record_inserted" => "������ ������� ���������.",
	"update_result" => "�������� ���������:",
	"record_updated" => "������ ������ ���������.",
	"profile_updated" => "��� ������� ��������.",
	"delete_result" => "������� ����������:",
	"record_deleted" => "������ ������������ �������",
	"duplication_possible" => "������������ ��������",
	"mail_to_records" => "mail to all records found",
	"number_mails" => "Number of message you are going to send: ",
	"specify_subject_body" => "Please specify subject and body of the message",
	"create_new_mailing" => "Create a new mailing",
	"mailing_name" => "Mailing name: ",
	"mailing_type" => "Mailing type: ",
	"specify_mailing_name" => "(Specify a name to identify this mailing, e.g. workshop_2002, please don't use single/double quote!!!!!!)",
	"email_specific_fields" => "Blue fields are e-mail related, ignore them if you choose normal mail",
	"from" => "From: ",
	"subject" => "Subject: ",
	"body" => "Body: ",
	"dear" => "Dear",
	"john_smith" => "Mr. John B. Smith",
	"start_sending" => "Start sending......",
	"mailing_sent" => "......Mailing sent",
	"mail_to" => "Mail to",
	"sent" => "sent",
	"send" => "Send",
	"e-mail" => "e-mail",
	"normal_mail" => "normal mail",
	"attachment" => "Attachment: ",
	"additional_notes_mailing" => "Additional notes<br>(e.g. reason of the mailing)",
	"please_specify_mailing_name" => "Please specify a name for the mailing.",
	"please_specify_mailing_type" => "Please specify a type for the mailing.",
	"please_specify_mailing_subject" => "Please specify a subject for the mailing.",
	"please_specify_mailing_body" => "Please specify a body for the mailing.",
	"mailing_name_already_used" => "The name you have choosed has been already used, please change it.",
	"filename_already_used" => "Attachment filename already used, please change name.",
	"mailing" => "Mailing",
	"created" => "created",
	"all_records_found" => "all records found",
	"add_contacts_to" => "Add contacts to",
	"check_mailing" => "Check mailing",
	"the_mailing" => "The mailing",
	"mailing_already_sent" => "This mailing has been already sent!!",
	"was_composed_by" => "was composed by",
	"contacts" => "contacts",
	"you_have_added" => "������� ���������",
	"of_which_duplicated" => "of which is/are duplicated",
	"of_which_with_no_info" => "������� ������������ ����������",
	"is_composed_by" => "������� ��",
	"go_back_to_home_send_or_add" => "You can now go back to the home page and send the mailing, or search and add other contacts to this mailing.",
	"fields_max_length" => "������� ������� �����.",
	"you_are_going_unsubscribe" => "you are going to be removed from our mailing list. Proceed?",
	"you_have_unsubscribed" => "you have been successfully removed from our mailing list.",
	"change_profile_url" => "To change your profile information please visit this page: ",
	"removed_mailing_list_url" => "To be removed from the mailing list please visit this page: ",
	"city" => "City",
	"province" => "Province",
	"zip_code" => "ZIP code",
	"prefix" => "Prefix",
	"no_city_found" => "No cities found",
	"print_warning" => "������� ����",
	"delete" => "�������",
	"total_records" => "����� �������",
	"confirm_delete?" => "����� �������?",
	"is_equal" => "���������",
	"contains" => "�����",
	"starts_with" => "� ������",
	"ends_with" => "� �����",
	"greater_than" => ">",
	"less_then" => "<",
	"export_to_csv" => "������� � CSV ������",
	"new_insert_executed" => "������ ���������",
	"new_update_executed" => "������ ���������",
	"null" => "��� ������",
	"is_null" => "��� ��������",
	"is_empty" => "�����"
	);

// error messages
$error_messages_ar = array (
	"int_db_empty" => "������, ���������� ���� ������ �����.",
	"get" => "������ ��������� ����������",
	"no_unique_update_id" => "Your update link has expired.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> to get a new link.<br>We apologies for the inconvenience caused.",
	"no_unique_unsubscribe_id" => "Your unsubscribe link is not correct.<br>Please contact the webmaster at <a href=\"mailto:webm.mine@pc.unicatt.it\">webm.mine@pc.unicatt.it</a> for any questions you may have.<br>We apologies for the inconvenience caused.",
	"no_functions" => "��������� �������<br>��������� �� ������� ��������.",
	"no_unique_key" => "��� ����� � �������",	
	"upload_error" => "������ �������� �����",
	"no_authorization_update_delete" => "����� ����������� ��� ������ � �������� ������",
	"no_authorization_view" => "�� �� �������������� ��� ��������� ���� ������",
	"deleted_only_authorizated_records" => "������, �� ������� � ��� ���� ����������, ���� �������.",
	"record_from_which_you_come_no_longer_exists" => "�����, �� �������� �� �� ����������� ������, ����������.",
	"date_not_representable" => "A date value in this record can't be represented with DaDaBIK day-month-year listboxes, the value is: ",
	"this_record_is_the_last_one" => "���� ����� - ���������.",
	"this_record_is_the_first_one" => "���� ����� - ������."
	);

//login messages
$login_messages_ar = array(
	"username" => "�����",
	"password" => "������",
	"please_authenticate" => "����� ��������������",
	"login" => "����",
	"username_password_are_required" => "��������� �����������",
	"pwd_gen_link" => "������� ������",
	"incorrect_login" => "������� ����� � ������",
	"pwd_explain_text" =>"�������� ������ � ������� <b>��������!</b>.",
	"pwd_explain_text_2" =>"������� <b>�����������</b> ��� ������ � �����",
	"pwd_suggest_email_sending"=>"�� ������ ��������� ���� email � �������",
	"pwd_send_link_text" =>"��������� �����!",
	"pwd_encrypt_button_text" => "��������!",
	"pwd_register_button_text" => "���������������� ������ � �����"
);
?>
<?php


Route::get('clear-cache', function () {
	$exitCode = Artisan::call('config:clear');
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('view:clear');
	Session::flash('success', 'All Clear');
	echo "DONE";
});

Route::get('update-site', function () {
	$data['content'] = 'errors.comming-soon';
	return view('layouts.content', compact('data'));
});

Route::get('invoice', function () {
	$data['content'] = 'invoice.invoice';
	return view('layouts.content', compact('data'));
});


Route::get('/admin_login', function () {
	return view('admin.admin-login');
});

Route::get('customer/list-enterprises','EnterpriseController@list_enterprise');
Route::get('customer/add-enterprises','EnterpriseController@view_add');
Route::post('customer/save-enterprises','EnterpriseController@add_enterprise');
Route::get('customer/fetch-enterprises/{id}','EnterpriseController@fetch_enterprise');
Route::get('customer/delete-enterprises/{id}','EnterpriseController@delete_enterprises');
Auth::routes();

Route::get('user-profile', 'HomeController@UserProfile');
Route::any('edit-userprofile', 'HomeController@UpdateProfile');
Route::middleware('auth')->group(function () {
Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@Dashboard');

Route::prefix('land')->group(function () {
	Route::any('listing', 'Landcontroller@index');
	Route::any('edit/{id}', 'Landcontroller@UpdateLand');
	Route::get('viewland/{id}', 'Landcontroller@view_land_details');
	Route::any('add', 'Landcontroller@AddLands');
	Route::get('delete/{id}', 'Landcontroller@delete_land');
	Route::any('land&bank-details', 'Landcontroller@LandBankDetails');
	Route::any('area-location', 'Landcontroller@AreaLocation');
	Route::any('create/assign-customer', 'Landcontroller@AssignCustomer');
	Route::get('customer', 'Landcontroller@Customers_Listing');
	/* PCC */
	Route::get('pcc-registration', 'Landcontroller@Pcc_Registration');
	Route::get('add_pcc', 'Landcontroller@Create_Pcc_Registration');
	Route::post('create/pcc-registration', 'Landcontroller@PccRegistration');
	Route::post('serach_pcc_land/{q}', 'Landcontroller@PccLand');
	Route::post('allocate/pcc/{id}', 'Landcontroller@Allocate_Pcc');
	Route::any('serachpccland/{q}', 'Landcontroller@SearchPccLand');
	Route::any('customer/add-pcc/{id}', 'Landcontroller@AddPccCustomer');
	Route::any('filter-pcc/{q}', 'Landcontroller@PccLand');
	Route::any('invoice/{q}', 'RegistrationController@LandInvoice');
	/*Transfer*/
	Route::get('registration', 'RegistrationController@Registration');
	Route::get('transfer-registration', 'Landcontroller@Registration_Transfer');
	Route::get('searchtransfercontract/{query}', 'Landcontroller@SerachTransferContract');
	Route::any('serachtransfercustomers/{q}', 'RegistrationController@searchTransferCustomer');
	Route::any('transfercustomer/add/{id}', 'RegistrationController@AddTransferCustomer');
	Route::any('ragistration/transfer', 'Landcontroller@Create_Transfer_Registration');
	/* End */
	Route::any('customer/add', 'Landcontroller@AddCustomers');
	Route::any('customer/view&edit/{id}', 'Landcontroller@Edit_Customers');
	Route::any('customercompany/view/{id}', 'Landcontroller@view_company_customers');
	Route::get('customer/delete/{id}', 'Landcontroller@Delete_Customer');
	Route::any('serachcustomers/{q}', 'RegistrationController@SearchCustomer');
	Route::any('wserachcustomers/{q}', 'Landcontroller@WizardSearchCustomer');
	Route::any('customer/add/{id}', 'RegistrationController@AddWizardContractCustomer');
	Route::post('customer/update', 'Landcontroller@update_customer');
	Route::any('wcustomer/add/{id}', 'Landcontroller@AddWizardContractCustomer');
	Route::any('serachland/{q}', 'Landcontroller@SearchLand');
	Route::any('land/add/{id}', 'Landcontroller@AddSearchLand');
	Route::any('wserachland/{q}', 'Landcontroller@WizardSearchLand');
	Route::any('land/wizard/add/{id}', 'Landcontroller@AddwizardSearchLand');
	Route::any('create/registration', 'RegistrationController@CreateRegistration');
	Route::any('create/new-regis-no', 'Landcontroller@CreateNewRegNo');
	Route::get('registration_create', 'Landcontroller@Create_Registration');
	Route::get('chnage_phase/{id}', 'Landcontroller@Get_Phase_Name');
	Route::get('registration/history/{land_id}', 'Landcontroller@Get_Registration_history');
	Route::get('transfer_land/{land_id}', 'Landcontroller@viewtransfer_land');
	Route::any('registration/edit/{id}', 'RegistrationController@Get_Registration_details');
	Route::any('registration/view/{id}', 'RegistrationController@Get_Registration_details');
	Route::get('registration/edit/{id}/{land_id}', 'Landcontroller@Get_Registration_info');
	Route::get('registration/delete/{id}', 'Landcontroller@Registration_Delete');
	Route::get('transfer_history', 'Landcontroller@transfer_history');
	Route::get('registration_editFetch/{id}', 'RegistrationController@registration_editFetch');
	Route::post('editSave/registration', 'RegistrationController@registration_editSave');
});

Route::prefix('area-location')->group(function () {
	Route::any('create/area-location', 'Landcontroller@AreaLocation');
	Route::any('create/sector-phase', 'Landcontroller@AreaLocation');
	Route::any('create/block', 'Landcontroller@AreaLocation');
});

/* Haresh */
Route::get('delete/sectro-zone/{id}', 'Landcontroller@delete_sector_zone');
Route::get('delete/sectro-phase/{id}', 'Landcontroller@delete_sector_phase');
Route::get('delete/sectro-block/{id}', 'Landcontroller@delete_sector_block');

Route::any('edit/sectro-zone/{id}', 'Landcontroller@sector_zone_edit');
Route::any('update/sectro-zone', 'Landcontroller@update_sector_zone');

Route::any('edit/sectro-phase/{id}', 'Landcontroller@edit_phase');
Route::any('update/sectro-phase', 'Landcontroller@update_sector_phase');

Route::any('edit/sectro-block/{id}', 'Landcontroller@edit_block');
Route::any('update/sectro-block', 'Landcontroller@update_sector_block');

Route::any('customer/add', 'Landcontroller@AddCustomer');

Route::get('customer/view/{id}', 'Landcontroller@ViewCustomer');

/* view contacted User for company*/

Route::get('message', 'MessageController@message_form');

/* Company contact by user*/
Route::post('contact_customer', 'CompanyProfileController@contact_customer');

/* Ticket form */
Route::any('ticket-form', 'TicketController@Ticket_Form');
Route::any('company-ticket-form', 'TicketController@Company_Ticket_Form');

Route::any('ticket', 'TicketController@ticket_listing');
Route::any('today-tickets', 'TicketController@ticket_listing');
Route::any('today-close-tickets', 'TicketController@ticket_listing');
Route::any('due-tickets', 'TicketController@ticket_listing');
Route::any('add/ticket', 'TicketController@add_ticket');
Route::get('delete/ticket/{id}', 'TicketController@delete_ticket');
Route::any('edit/ticket/{id}', 'TicketController@edit_ticket');
Route::any('view/ticket/{id}', 'TicketController@edit_ticket');
Route::any('get_subid', 'TicketController@getsublist');
Route::any('ticket/history/{id}', 'TicketController@ticket_history');
Route::get('display-ticket/{id}', 'TicketController@ticket_listing');
/* Users all routes*/
Route::get('users', 'MasterController@users_listing');
Route::post('add/users', 'MasterController@add_users');
Route::get('add/users/from', 'MasterController@add_users_form');
Route::get('users/destroy/{id}', 'MasterController@delete_users');
Route::get('edit/users/from/{id}', 'MasterController@users_edit');
Route::any('users/edit/{id}', 'MasterController@users_edit');
Route::post('update/users', 'MasterController@update_user');
/* Department all routes*/
Route::get('department', 'MasterController@Department_Listing');
Route::post('add/department', 'MasterController@Add_Department');
Route::get('department/destroy/{id}', 'MasterController@Delete_Department');
Route::any('department/edit/{id}', 'MasterController@Department_Edit');

/* Category all routes*/
Route::get('category', 'MasterController@Category_Listing');
Route::post('add/category', 'MasterController@Add_Category');
Route::get('category/destroy/{id}', 'MasterController@Delete_Category');
Route::any('category/edit/{id}', 'MasterController@Category_Edit');

/* SubCategory */

Route::get('subcategory', 'MasterController@Subcategory_Listing');
Route::post('add/subcategory', 'MasterController@Add_Subcategory');
Route::get('subcategory/destroy/{id}', 'MasterController@Delete_Subcategory');
Route::any('subcategory/edit/{id}', 'MasterController@Subcategory_Edit');


/* Priority */
Route::get('priority_lavels', 'MasterController@PriorityLavels_Listing');
Route::post('add/priorityLavels', 'MasterController@Add_PriorityLavels');
Route::get('priorityLavels/destroy/{id}', 'MasterController@Delete_PriorityLavels');
Route::any('priorityLavels/edit/{id}', 'MasterController@PriorityLavels_Edit');


/* Setting */
Route::prefix('company')->group(function () {
	Route::resource('', 'CompanyController');
	Route::post('store', 'CompanyController@store');
	Route::get('destroy/{id}', 'CompanyController@destroy');
	Route::any('edit/{id}', 'CompanyController@edit');
});
Route::get('pcc/pcc_action_view', 'PccActionController@pcc_action_list');
Route::get('pcc/pcc_from', 'PccActionController@pccform_view');
Route::post('pcc/pcc_from/add', 'PccActionController@pccform_add');
Route::get('pcc/pcc_actionview/{id}', 'PccActionController@pcc_action_view');
Route::get('pcc/edit_from/{id}', 'PccActionController@edit_pcc_form');
Route::post('pcc/pcc_from/update', 'PccActionController@pccform_update');
Route::get('pcc/entity_search/{enitity_id}', 'PccActionController@search_entity');
Route::get('pcc/searchLand/{query}', 'PccActionController@SearchLand');
Route::get('pcc/searchcompany/{query}', 'PccActionController@SearchCustomer');
Route::get('pcc/getland/{id}', 'PccActionController@AddwizardSearchLand');
Route::get('pcc/getcompany/{id}', 'PccActionController@AddContractCustomer');
Route::get('pcc/pcc_agenda/freeze/{id}', 'PccActionController@freeze_Pcc');
Route::post('pcc/pccAgenda_final_save', 'PccActionController@save_finalPcc');
Route::get('pcc/{action_type}/{action_cat}/{element}', 'PccActionController@allocated_pcc');
Route::get('pcc/searchRegisterRecord/{query}', 'PccActionController@searchRegister');
Route::get('pcc/getregister/{id}', 'PccActionController@getregister');
// Route::get('pcc/searchunit/{id}','PccActionController@ ');

Route::get('entity_master', 'MasterController@Entity_Listing');
Route::post('add/entity_master', 'MasterController@Add_Entity');
Route::get('entity_master/destroy/{id}', 'MasterController@Delete_Entity');
Route::any('entity_master/edit/{id}', 'MasterController@Edit_Entity');


// pcc all route 
Route::get('pcc_master', 'MasterController@PccMaster_Listing');
Route::post('add/pcc_master', 'MasterController@Add_PccMaster');
Route::get('pcc_master/destroy/{id}', 'MasterController@Delete_PccMaster');
Route::any('pcc_master/edit/{id}', 'MasterController@Edit_PccMaster');

// industries all route 
Route::get('industries_master', 'MasterController@IndustriesMaster_Listing');
Route::get('add/industries_master', 'MasterController@Add_IndustriesMaster');
Route::get('industries_master/destroy/{id}', 'MasterController@Delete_IndustriesMaster');
Route::any('industries_master/edit/{id}', 'MasterController@Edit_IndustriesMaster'); // entity all route 
Route::get('entity_master', 'MasterController@Entity_Listing');
Route::post('add/entity_master', 'MasterController@Add_Entity');
Route::get('entity_master/destroy/{id}', 'MasterController@Delete_Entity');
Route::any('entity_master/edit/{id}', 'MasterController@Edit_Entity');

// pcc all route 
Route::get('pcc_master', 'MasterController@PccMaster_Listing');
Route::post('add/pcc_master', 'MasterController@Add_PccMaster');
Route::get('pcc_master/destroy/{id}', 'MasterController@Delete_PccMaster');
Route::any('pcc_master/edit/{id}', 'MasterController@Edit_PccMaster');

// industries all route 
Route::get('industries_master', 'MasterController@IndustriesMaster_Listing');
Route::post('add/industries_master', 'MasterController@Add_IndustriesMaster');
Route::get('industries_master/destroy/{id}', 'MasterController@Delete_IndustriesMaster');
Route::any('industries_master/edit/{id}', 'MasterController@Edit_IndustriesMaster');

// material all route 
Route::get('material_master', 'MasterController@MaterialMaster_Listing');
Route::post('add/material_master', 'MasterController@Add_MaterialMaster');
Route::get('material_master/destroy/{id}', 'MasterController@Delete_MaterialMaster');
Route::any('material_master/edit/{id}', 'MasterController@Edit_MaterialMaster');

Route::any('get_pocid/{departmentID}', 'TicketController@getpoclist');

//SUb DEPARTMENT
Route::get('subdepartment', 'MasterController@Subdepartment_Listing');
Route::post('add/subdepartment', 'MasterController@Add_Subdepartment');
Route::get('subdepartment/destroy/{id}', 'MasterController@Delete_Subdepartment');
Route::any('subdepartment/edit/{id}', 'MasterController@Subdepartment_Edit');
Route::any('check_generic', 'MasterController@insert_generic');
/* Status all routes*/
Route::get('status_master', 'MasterController@Status_Listing');
Route::post('add/status_master', 'MasterController@Add_Status');
Route::get('status_master/destroy/{id}', 'MasterController@Delete_Status');
Route::any('status_master/edit/{id}', 'MasterController@Status_Edit');
Route::any('get_statusid/{StatusID}', 'TicketController@get_Statuslist');
// uom master
Route::get('uom_master', 'MasterController@Uom_Listing');
Route::post('add/uom_master', 'MasterController@Add_Uom');
Route::get('uom_master/destroy/{id}', 'MasterController@Delete_Uom');
Route::any('uom_master/edit/{id}', 'MasterController@Uom_Edit');
Route::get('create/compan_website/{id}', 'CompanyProfileController@web_create_form');
Route::post('add/company_website', 'CompanyProfileController@add_comapany_details_website');
});
Route::get('/', function () {
	return view('static-pages.index');
});
Route::get('/homepage', function () {
	return view('static-pages.index');
});
Route::get('/career', function () {
	return view('static-pages.career');
});

Route::get('/log', function () {
	return view('static-pages.login');
});

Route::get('/master-plan', function () {
	return view('static-pages.master-plan');
});

// Route::get('/ticket_page', function () {
//     return view('static-pages.ticket');
// });
Route::get('/ticket_page', 'TicketController@view_oss_touser');
Route::post('add_ticket_by_user', 'TicketController@add_ticket_by_user');

Route::get('/portal', function () {
	return view('admin.portal_login');
});
Route::get('user/forget_password', 'forgetPasswordController@view_page');
Route::post('check_email', 'forgetPasswordController@check_email');
Route::get('resetpassword/update{id}/{email}', 'forgetPasswordController@change_password');
Route::post('updatepassword', 'forgetPasswordController@update_password');
Route::get('comapny-profile/{id}', 'CompanyProfileController@viewsite');
Route::get('/unit', 'UnitListingController@get_industries_name');
Route::get('unit-listing/industry-filter', 'UnitListingController@filter_industry');
Route::post('savecontact', 'VisiterContactController@savecontact');

Route::get('portal/{company_name}', 'CompanyProfileController@viewportal');
Route::get('list/all_unit', 'UnitListingController@view_all_unit');

/* @Ashish Agarwal for autocomplete Search*/
Route::get('/unit/{id}/{label}', 'UnitListingController@get_industries_name');
Route::get('search-material', 'UnitListingController@search');

/* For bar chart data*/
Route::get('bar-chart', 'HomeController@barChart');
Route::get('pie-chart', 'HomeController@pieChart');

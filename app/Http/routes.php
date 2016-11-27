<?php
Route::get('/',function()
{
});

//---------------------- api -----------------------------//
Route::get('api/users/register','Api\Users@register');
Route::get('api/users/login','Api\Users@login');
Route::get('api/users/social','Api\Users@loginSocial');
Route::get('api/users/logout','Api\Users@logout');
Route::get('api/salons/get','Api\SalonsCtrl@getSalons');
Route::get('api/salons/new','Api\SalonsCtrl@newSalon');

Route::get('api/areas/get','Api\SalonsCtrl@getAreas');
Route::get('api/reserve/reserve','Api\SalonsCtrl@reserve');
Route::get('api/settings/get','Api\GetSettings@getSettings');
Route::get('api/fashionesta/get','Api\FashonistaCtrl@getAllFashionesta');
Route::get('api/fashionesta/some','Api\FashonistaCtrl@getSome');

Route::get('api/ratings/new','Api\RatingsCtrl@new_rate');
Route::get('api/ratings/get','Api\RatingsCtrl@get_rate');

Route::get('api/salons/getservices','Api\ServiceCtrl@getServices');
Route::get('api/salons/getsubservices','Api\ServiceCtrl@getSubServices');
Route::get('api/salons/getoffers','Api\ServiceCtrl@getOffers');
Route::get('api/ads/get','Api\AdsCtrl@getAllAds');




Route::get('admin/login','LoginCtrl@showAdminLogin');
Route::post('admin/login','LoginCtrl@postAdminLogin');
Route::get('logout','LoginCtrl@AdminLogout');
Route::group(['prefix'=>'admin','middleware'=>'authAdmin'],function(){
	Route::get('/',function()
	{
		return View('admin.layout');
	});

	Route::resource('ads','AdsCtrl');
	Route::resource('areas','AreasCtrl');
	Route::any('areas/delete/selected','AreasCtrl@delete_selected');

	Route::resource('admins','AdminsCtrl');
	Route::get('admin/admins/{id}/delete','AdminsCtrl@destroy');

	Route::get('users/export','UsersCtrl@export');
	Route::resource('users','UsersCtrl');

	Route::resource('salons','SalonsCtrl');
	Route::get('salon/delete_image/{id}/{image}','SalonsCtrl@delete_image');
	Route::post('salons/salons/export','SalonsCtrl@export');
	Route::post('salons/salons/import','SalonsCtrl@import');
	Route::any('salons/delete/selected','SalonsCtrl@delete_selected');


	Route::resource('settings','SettingsCtrl');

	Route::get('new_salons','SalonsCtrl@new_requests');
	Route::get('new_salons/{id}/approve','SalonsCtrl@approve');
	
	Route::resource('fashonista','FashonistaCtrl');
	Route::resource('services','ServicesCtrl');
	Route::resource('subservices','SubServicesCtrl');

	Route::get('statics','StaticsCtrl@index');
	Route::get('statics/areas','StaticsCtrl@areas');
	Route::get('statics/salons','StaticsCtrl@salons');
	Route::get('statics/salons-rating','StaticsCtrl@salonsRatings');


});



Route::get('salons/login','LoginCtrl@showSalonLogin');
Route::post('salons/login','LoginCtrl@postSalonLogin');
Route::get('salons/logout','LoginCtrl@SalonLogout');

Route::group(['prefix'=>'salons','middleware'=>'authSalon'],function(){
	Route::get('/','SalonsDashboardCtrl@index');
	Route::get('reservations','SalonsDashboardCtrl@show');
	Route::get('export','SalonsDashboardCtrl@export');
	Route::get('change_password','SalonsDashboardCtrl@change_password');
	Route::post('change_password','SalonsDashboardCtrl@do_change_password');
});
/*
//---------------------- notefication -----------------------------//
Route::get('noti',function(){
			$message = PushNotification::Message('msg',array(
	            'msgcnt'=> 1,
	            'title'=>'title',
	            'image'=>'https://www.google.com.eg/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'
	));

	PushNotification::app('appNameAndroid')
                ->to('f25mwZgO5tE:APA91bFLc4seSr1UryuAh3RSFNUM28bys1sDsNOGhKmlWUJKLO7wc6dbGpPLRI8ybOO26u0lxqqyhPBxQWn-pX36mf_nL9_pUYvNGbIa7Sk-sMY26aW3Dw6KFeMHRoX4ehvvOBfN8TcF')
                ->send($message);
});
//->to('f25mwZgO5tE:APA91bFLc4seSr1UryuAh3RSFNUM28bys1sDsNOGhKmlWUJKLO7wc6dbGpPLRI8ybOO26u0lxqqyhPBxQWn-pX36mf_nL9_pUYvNGbIa7Sk-sMY26aW3Dw6KFeMHRoX4ehvvOBfN8TcF')
*/
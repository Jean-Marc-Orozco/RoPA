<?php
/*
  * This file is part of the Record of processing activities project.
  * Its original location is https://github.com/Safran/RoPA
  * 
  * SPDX-License-Identifier: GPL-3.0-only
  */






Route::get('/settings', 'SettingController@index')->name('settings');
Route::post('/settings', 'SettingController@store')->name('settings.store');
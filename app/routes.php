<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
    {
            return View::make('pages.index');
    });
Route::get('services', function()
    {
            return View::make('pages.services');
    });


// About

Route::get('aboutus', function()
    {
            return View::make('pages.aboutus.about');
    });
Route::get('ManagementTeam', function()
    {
            return View::make('pages.aboutus.team');
    });
Route::get('career', function()
      {
            return View::make('pages.aboutus.career');
    });


// Practices

Route::get('cloud', function()
    {
            return View::make('pages.practices.cloud');
    });
Route::get('cms', function()
    {
            return View::make('pages.practices.cms');
    });
Route::get('gomobile', function()
      {
            return View::make('pages.practices.mobility');
    });

// Services

Route::get('developmentService', function()
    {
            return View::make('pages.service.BespokeSoftwareDevelopmentServices');
    });
Route::get('GamingService', function()
    {
            return View::make('pages.service.GamingServices');
    });
Route::get('StaffService', function()
    {
            return View::make('pages.service.StaffAugmentationServices');
    });
Route::get('TestingService', function()
    {
            return View::make('pages.service.TestingandValidationServices');
    });
Route::get('UserExperienceService', function()
    {
            return View::make('pages.service.UserExperienceDesignServices');
    });
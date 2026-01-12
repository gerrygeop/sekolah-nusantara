<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\SchoolUnitDetail;
use App\Livewire\ExtracurricularIndex;
use App\Livewire\ExtracurricularDetail;
use App\Livewire\NewsIndex;
use App\Livewire\NewsShow;
use App\Livewire\AgendaIndex;
use App\Livewire\AgendaShow;
use App\Livewire\AchievementIndex;
use App\Livewire\GalleryIndex;
use App\Livewire\Registration;

Route::get('/', Home::class)->name('home');
Route::get('/tentang', About::class)->name('about');
Route::get('/unit/{slug}', SchoolUnitDetail::class)->name('school-unit.detail');

Route::get('/ekstrakurikuler', ExtracurricularIndex::class)->name('extracurricular.index');
Route::get('/ekstrakurikuler/{slug}', ExtracurricularDetail::class)->name('extracurricular.detail');

Route::get('/berita', NewsIndex::class)->name('news.index');
Route::get('/berita/{slug}', NewsShow::class)->name('news.show');

Route::get('/agenda', AgendaIndex::class)->name('agenda.index');
Route::get('/agenda/{slug}', AgendaShow::class)->name('agenda.show');

Route::get('/prestasi', AchievementIndex::class)->name('achievement.index');

Route::get('/galeri', GalleryIndex::class)->name('gallery.index');

Route::get('/pendaftaran', Registration::class)->name('registration');

<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class LanguageSwitchTest extends TestCase
{
    /**
     * Test switch language to English
     * @covers App\Http\Controllers\LanguageController::switchLang
     */
    public function testSwitchLanguageToEnglish()
    {
        $applocale = 'en_US.utf8';
        $this->call('GET', "/lang/$applocale");

        $this->assertSessionHas('language', 'en');
        $this->assertSessionHas('applocale', $applocale);
        $this->assertResponseStatus(302);
    }

    /**
     * Test switch language to Spanish Spain
     * @covers App\Http\Controllers\LanguageController::switchLang
     */
    public function testSwitchLanguageToSpanishSpain()
    {
        $applocale = 'es_ES.utf8';
        $this->call('GET', "/lang/$applocale");

        $this->assertSessionHas('language', 'es');
        $this->assertSessionHas('applocale', $applocale);
        $this->assertResponseStatus(302);
    }

    /**
     * Test switch language to Spanish Argentina
     * @covers App\Http\Controllers\LanguageController::switchLang
     */
    public function testSwitchLanguageToSpanishArgentina()
    {
        $applocale = 'es_AR.utf8';
        $this->call('GET', "/lang/$applocale");

        $this->assertSessionHas('language', 'es');
        $this->assertSessionHas('applocale', $applocale);
        $this->assertResponseStatus(302);
    }
}
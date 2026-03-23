<?php

namespace Controller\login;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class LoginController (PHP version 8.5)
 *
 * @author Rudy Mas <rudy.mas@rudymas.be>
 * @copyright 2026 Rudy Mas (https://rudymas.be)
 * @license https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version 2026.03.23.0
 * @package Controller\KanbanController
 */
class LoginController
{
    /**
     * @throws LoaderError
     */
    public function __construct()
    {
        TWIG->addPath('vendor/tigress/login/src/views');
        TRANSLATIONS->load(SYSTEM_ROOT . '/vendor/tigress/login/translations/translations.json');
    }

    /**
     * Show Login Page
     *
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function login(): void
    {
        TWIG->render('login/login.twig');
    }

    /**
     * Page to register for the website
     *
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function register(): void
    {
        TWIG->render('login/register.twig');
    }
}
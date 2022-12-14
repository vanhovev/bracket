<?php

namespace App\Bracket\Lib;

use App\Bracket\Model\HTTP\Session;

class ConnexionUtilisateur
{
    // L'utilisateur connecté sera enregistré en session associé à la clé suivante
    private static string $cleConnexion = "_utilisateurConnecte";

    public static function connecter(string $loginUtilisateur): void
    {
        // À compléter
        Session::getInstance()->enregistrer(self::$cleConnexion, $loginUtilisateur);
        var_dump(Session::getInstance()->lire(self::$cleConnexion));
    }

    public static function estConnecte(): bool
    {
        // À compléter
        return Session::getInstance()->contient(self::$cleConnexion);
    }

    public static function deconnecter(): void
    {
        // À compléter
        Session::getInstance()->detruire(self::$cleConnexion);
    }

    public static function getLoginUtilisateurConnecte(): ?string
    {
        // À compléter
        return Session::getInstance()->lire(self::$cleConnexion);
    }

    public static function estUtilisateur($login): bool
    {
        return self::getLoginUtilisateurConnecte() === $login;
    }
}
?>
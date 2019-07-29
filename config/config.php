<?php

define('DEFAULT_SERVICE_NAME', 'github');
define('FORMAT_EXAMPLE', "Przykład prawidłowego formatu wywołania:\nnazwa_uzytkownika/nazwa_repozytorium nazwa_brancha\n");
define('NO_REPOSITORY_NAME', "Nie podano nazwy repozytorium.\n" . FORMAT_EXAMPLE);
define('INCORRECT_REPOSITORY_NAME_FORMAT', "Niepoprawny format parametru.\nBrak znaku '/' oddzielającego nazwę użytkownika od nazwy repozytorium.\n" . FORMAT_EXAMPLE);
define('INCORRECT_GIT_USERNAME', 'Niepoprawna nazwa użytkownika serwisu GIT');
define('INCORRECT_GIT_REPOSITORY_NAME', 'Niepoprawna nazwa repozytorium GIT');
define('NO_BRANCH_NAME', "Nie podano nazwy brancha.\n" . FORMAT_EXAMPLE);
define('INCORRECT_GIT_BRANCH_NAME', 'Niepoprawna nazwa brancha GIT');
define('UNSUPPORTED_GIT_SERVICE', 'Ten serwis nie jest obsługiwany');
define('UNIMPLEMMENTED_GIT_SERVICE', 'Ten serwis nie jest jeszcze zaimplementowany');
define('RECENT_COMMIT_HASH', "Najnowszy hash commita dla repozytorium:\n");
define('BRANCH', ' branch: ');
define('HAS_VALUE', "\nma wartość: \n");
define('GIT_SERVICE_CONNECT_ERROR', 'Wystąpił problem przy połączeniu z serwisem GIT');
define('GIT_SERVICE_DATA_ERROR', 'Wystąpił problem przy przetwarzaniu danych z serwisu GIT');
define('GIT_REPOSITORY_ERROR', 'Wystąpił problem z dostępem do repozytorium: ');
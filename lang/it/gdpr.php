<?php

return [
    'navigation' => [
        'name' => 'GDPR',
        'group' => 'Privacy',
        'sort' => 15,
        'icon' => 'gdpr-icon',
        'badge' => [
            'color' => 'success',
            'label' => 'Compliant',
        ],
    ],

    'sections' => [
        'consent' => [
            'navigation' => [
                'name' => 'Consensi',
                'group' => 'GDPR',
                'sort' => 10,
                'icon' => 'gdpr-consent-icon',
                'badge' => [
                    'color' => 'warning',
                    'label' => 'Da Revisionare',
                ],
            ],
            'fields' => [
                'title' => 'Titolo',
                'description' => 'Descrizione',
                'type' => 'Tipo',
                'mandatory' => 'Obbligatorio',
                'expires_at' => 'Scadenza',
                'status' => 'Stato',
            ],
            'types' => [
                'marketing' => 'Marketing',
                'profiling' => 'Profilazione',
                'third_party' => 'Terze Parti',
                'technical' => 'Tecnico',
            ],
        ],

        'treatment' => [
            'navigation' => [
                'name' => 'Trattamenti',
                'group' => 'GDPR',
                'sort' => 20,
                'icon' => 'gdpr-treatment-icon',
                'badge' => [
                    'color' => 'danger',
                    'label' => 'Da Valutare',
                ],
            ],
            'fields' => [
                'title' => 'Titolo',
                'purpose' => 'Finalità',
                'legal_basis' => 'Base Giuridica',
                'retention' => 'Conservazione',
                'categories' => 'Categorie Dati',
                'status' => 'Stato',
            ],
        ],

        'profile' => [
            'navigation' => [
                'name' => 'Profili',
                'group' => 'GDPR',
                'sort' => 30,
                'icon' => 'gdpr-profile-icon',
                'badge' => [
                    'color' => 'info',
                    'label' => 'Attivi',
                ],
            ],
            'fields' => [
                'name' => 'Nome',
                'role' => 'Ruolo',
                'permissions' => 'Permessi',
                'active' => 'Attivo',
            ],
        ],

        'event' => [
            'navigation' => [
                'name' => 'Eventi',
                'group' => 'GDPR',
                'sort' => 40,
                'icon' => 'gdpr-event-icon',
                'badge' => [
                    'color' => 'primary',
                    'label' => 'Log',
                ],
            ],
            'fields' => [
                'type' => 'Tipo',
                'description' => 'Descrizione',
                'user' => 'Utente',
                'ip' => 'IP',
                'date' => 'Data',
            ],
        ],
    ],

    'common' => [
        'status' => [
            'active' => 'Attivo',
            'inactive' => 'Inattivo',
            'pending' => 'In Attesa',
            'expired' => 'Scaduto',
        ],
        'actions' => [
            'create' => 'Crea',
            'edit' => 'Modifica',
            'delete' => 'Elimina',
            'view' => 'Visualizza',
            'export' => 'Esporta',
            'import' => 'Importa',
            'print' => 'Stampa',
            'download' => 'Scarica',
            'upload' => 'Carica',
            'refresh' => 'Aggiorna',
            'search' => 'Cerca',
            'filter' => 'Filtra',
            'sort' => 'Ordina',
            'clear' => 'Pulisci',
        ],
        'messages' => [
            'success' => [
                'created' => 'Creato con successo',
                'updated' => 'Aggiornato con successo',
                'deleted' => 'Eliminato con successo',
                'imported' => 'Importato con successo',
                'exported' => 'Esportato con successo',
            ],
            'error' => [
                'generic' => 'Si è verificato un errore',
                'create' => 'Errore durante la creazione',
                'update' => 'Errore durante l\'aggiornamento',
                'delete' => 'Errore durante l\'eliminazione',
                'import' => 'Errore durante l\'importazione',
                'export' => 'Errore durante l\'esportazione',
            ],
            'confirm' => [
                'delete' => 'Sei sicuro di voler eliminare questo elemento?',
                'archive' => 'Sei sicuro di voler archiviare questo elemento?',
                'restore' => 'Sei sicuro di voler ripristinare questo elemento?',
            ],
        ],
        'filters' => [
            'date_range' => 'Intervallo Date',
            'status' => 'Stato',
            'type' => 'Tipo',
            'user' => 'Utente',
        ],
    ],
]; 
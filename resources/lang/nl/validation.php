<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"       => ":attribute moet geaccepteerd zijn.",
    "active_url"     => ":attribute is geen geldige URL.",
    "after"          => ":attribute moet een datum na :date zijn.",
    "alpha"          => ":attribute mag alleen letters bevatten.",
    "alpha_dash"     => ":attribute mag alleen letters, nummers, onderstreep(_) en strepen(-) bevatten.",
    "alpha_num"      => ":attribute mag alleen letters en nummers bevatten.",
    "array"          => ":attribute moet geselecteerde elementen bevatten.",
    "before"         => ":attribute moet een datum voor :date zijn.",
    "between"        => [
        "numeric" => ":attribute moet tussen :min en :max zijn.",
        "file"    => ":attribute moet tussen :min en :max kilobytes zijn.",
        "string"  => ":attribute moet tussen :min en :max karakters zijn.",
        "array"   => ":attribute moet tussen :min en :max items bevatten.",
    ],
    "boolean"        => ":attribute moet true of false zijn.",
    "confirmed"      => ":attribute bevestiging komt niet overeen.",
    "date"           => ":attribute moet een datum bevatten.",
    "date_format"    => ":attribute moet een geldig datum formaat bevatten.",
    "different"      => ":attribute en :other moeten verschillend zijn.",
    "digits"         => ":attribute moet bestaan uit :digits cijfers.",
    "digits_between" => ":attribute moet bestaan uit minimaal :min en maximaal :max cijfers.",
    "email"          => ":attribute is geen geldig e-mailadres.",
    "exists"         => ":attribute bestaat niet.",
    "filled"         => ":attribute is verplicht.",
    "image"          => ":attribute moet een afbeelding zijn.",
    "in"             => ":attribute is ongeldig.",
    "integer"        => ":attribute moet een getal zijn.",
    "ip"             => ":attribute moet een geldig IP-adres zijn.",
    'json'           => 'The :attribute must be a valid JSON string.',
    "max"            => [
        "numeric" => ":attribute mag niet hoger dan :max zijn.",
        "file"    => ":attribute mag niet meer dan :max kilobytes zijn.",
        "string"  => ":attribute mag niet uit meer dan :max karakters bestaan.",
        "array"   => ":attribute mag niet meer dan :max items bevatten.",
    ],
    "mimes"          => ":attribute moet een bestand zijn van het bestandstype :values.",
    "min"            => [
        "numeric" => ":attribute moet minimaal :min zijn.",
        "file"    => ":attribute moet minimaal :min kilobytes zijn.",
        "string"  => ":attribute moet minimaal :min karakters zijn.",
        "array"   => ":attribute moet minimaal :min items bevatten.",
    ],
    "not_in"         => "Het formaat van :attribute is ongeldig.",
    "numeric"        => ":attribute moet een nummer zijn.",
    "regex"          => ":attribute format is ongeldig.",
    "required"       => ":attribute is verplicht.",
    "required_if"    => ":attribute is verplicht indien :other gelijk is aan :value.",
    "required_with"  => ":attribute is verplicht i.c.m. :values",
    "required_with_all"    => ":attribute is verplicht i.c.m. :values",
    "required_without"     => ":attribute is verplicht als :values niet ingevuld is.",
    "required_without_all" => ":attribute is verplicht als :values niet ingevuld zijn.",
    "same"           => ":attribute en :other moeten overeenkomen.",
    "size"           => [
        "numeric" => ":attribute moet :size zijn.",
        "file"    => ":attribute moet :size kilobyte zijn.",
        "string"  => ":attribute moet :size characters zijn.",
        "array"   => ":attribute moet :size items bevatten.",
    ],
    "string"         => "Het :attribute moet een tekenreeks zijn.",
    "timezone"       => "Het :attribute moet een geldige zone zijn.",
    "unique"         => ":attribute is al in gebruik.",
    "url"            => ":attribute is geen geldige URL.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'title' => [
            'required' => 'Titel is verplicht.',
            'min' => 'Titel moet minimaal :min karakters zijn.',
            'max' => 'Titel moet minder dan :max karakters zijn.',
        ],
        'message' => [
            'required' => 'Bericht is verplicht.',
        ],
        'g-recaptcha-response' => [
            'required' => 'reCAPTCHA is verplicht.',
            "recaptcha" => 'reCAPTCHA is niet correct.',
        ],
        'email' => [
            'required' => 'Email is verplicht.',
            'email' => 'Vul a.u.b een valide emailadres in',
        ],
        'body' => [
            'required' => 'Nieuwsbericht is verplicht.',
        ],
        'slug' => [
            'required' => 'Slug is verplicht.',
            'min' => 'Slug moet minimaal :min karakters zijn.',
            'max' => 'Slug moet minder dan :max karakters zijn.',
            'unique' => "Slug is al in gebruik.",
        ],
        'file' => [
            'required' => 'Bestand is verplicht.',
            "mimes"          => "Bestand moet zijn van het bestandstype :values.",
            'max' => 'Betand moet minder dan 10 MB zijn',
        ],
        'name' => [
            'required' => 'Naam is verplicht.',
            'max' => 'Naam moet minder dan :max karakters zijn.',
        ],
        'function' => [
            'required' => 'Functie is verplicht.',
            'max' => 'Functie moet minder dan :max karakters zijn.',
        ],
        'description' => [
            'required' => 'Beschrijving is verplicht.',
            'max' => 'Beschrijving moet minder dan :max karakters zijn.',
        ],
        'picture' => [
            'required' => 'Foto is verplicht.',
            'max' => 'Foto moet minder dan :max karakters zijn.',
        ],
        'starttime' => [
            'required' => 'Begintijd is verplicht.',
            'future' => 'Begintijd moet in de toekomst zijn',
        ],
        'endtime' => [
            'required' => 'Eindtijd is verplicht.',
            'future' => 'Eindtijd moet in de toekomst zijn',
        ],
        'place' => [
            'required' => 'Locatie is verplicht.',
            'max' => 'Locatie moet minder dan :max karakters zijn.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

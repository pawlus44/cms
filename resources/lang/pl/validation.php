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

    "accepted"         => "Pole :attribute musi zostać zaakceptowany.",
    "active_url"       => "Pole :attribute jest nieprawidłowym adresem URL.",
    "after"            => "Pole :attribute musi być datą późniejszą od :date.",
    "alpha"            => "Pole :attribute może zawierać jedynie litery.",
    "alpha_dash"       => "Pole :attribute może zawierać jedynie litery, cyfry i myślniki.",
    "alpha_num"        => "Pole :attribute może zawierać jedynie litery i cyfry.",
    "array"            => "Pole :attribute musi być tablicą.",
    "before"           => "Pole :attribute musi być datą wcześniejszą od :date.",
    "between"          => [
        "numeric" => "Pole :attribute musi zawierać się w granicach :min - :max.",
        "file"    => "Pole :attribute musi zawierać się w granicach :min - :max kilobajtów.",
        "string"  => "Pole :attribute musi zawierać się w granicach :min - :max znaków.",
        "array"   => "Pole :attribute musi składać się z :min - :max elementów.",
    ],
    "boolean"          => "Pole :attribute musi mieć wartość prawda albo fałsz",
    "confirmed"        => "Podane hasła nie zgadzają się.",
    "date"             => "Pole :attribute nie jest prawidłową datą.",
    "date_format"      => "Pole :attribute nie jest w formacie :format.",
    "different"        => "Pole :attribute oraz :other muszą się różnić.",
    "digits"           => "Pole :attribute musi składać się z :digits cyfr.",
    "digits_between"   => "Pole :attribute musi mieć od :min do :max cyfr.",
    "email"            => "Format :attribute jest nieprawidłowy.",
    "exists"           => "Zaznaczony :attribute jest nieprawidłowy.",
    "filled"           => "Pole :attribute jest wymagane.",
    "image"            => "Pole :attribute musi być obrazkiem.",
    "in"               => "Zaznaczony :attribute jest nieprawidłowy.",
    "integer"          => "Pole :attribute musi być liczbą całkowitą.",
    "ip"               => "Pole :attribute musi być prawidłowym adresem IP.",
    "max"              => [
        "numeric" => "Pole :attribute nie może być większy niż :max.",
        "file"    => "Pole :attribute nie może być większy niż :max kilobajtów.",
        "string"  => "Pole :attribute nie może być dłuższy niż :max znaków.",
        "array"   => "Pole :attribute nie może mieć więcej niż :max elementów.",
    ],
    "mimes"            => "Pole :attribute musi być plikiem typu :values.",
    "min"              => [
        "numeric" => "Pole :attribute musi być nie mniejszy od :min.",
        "file"    => "Pole :attribute musi mieć przynajmniej :min kilobajtów.",
        "string"  => "Pole :attribute musi mieć przynajmniej :min znaków.",
        "array"   => "Pole :attribute musi mieć przynajmniej :min elementów.",
    ],
    "not_in"           => "Zaznaczony :attribute jest nieprawidłowy.",
    "numeric"          => "Pole :attribute musi być liczbą.",
    "regex"            => "Format :attribute jest nieprawidłowy.",
    "required"         => "Pole :attribute jest wymagane.",
    "required_if"      => "Pole :attribute jest wymagane gdy :other jest :value.",
    "required_with"    => "Pole :attribute jest wymagane gdy :values jest obecny.",
    "required_with_all"    => "Pole :attribute jest wymagane gdy :values jest obecny.",
    "required_without" => "Pole :attribute jest wymagane gdy :values nie jest obecny.",
    "required_without_all" => "Pole :attribute jest wymagane gdy żadne z :values nie są obecne.",
    "same"             => "Pole :attribute i :other muszą się zgadzać.",
    "size"             => [
        "numeric" => "Pole :attribute musi mieć :size.",
        "file"    => "Pole :attribute musi mieć :size kilobajtów.",
        "string"  => "Pole :attribute musi mieć :size znaków.",
        "array"   => "Pole :attribute musi zawierać :size elementów.",
    ],
    "timezone"         => "Pole :attribute musi być prawidłową strefą czasową.",
    "unique"           => "Taki :attribute już występuje.",
    "url"              => "Format :attribute jest nieprawidłowy.",

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


    // contact form
    'email-required' => 'Pole e-mail jest wymagane.',
    'usermessage-required' => "Treść wiaomości nie może być pusta.",

];

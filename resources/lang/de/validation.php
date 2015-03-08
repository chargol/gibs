<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => ":attribute muss akzeptiert werden.",
	"active_url"           => ":attribute ist keine gültige URL.",
	"after"                => ":attribute muss ein Zeitpunkt nach :date sein.",
	"alpha"                => ":attribute darf nur aus Zeichen bestehen.",
	"alpha_dash"           => ":attribute darf nur aus Zeichen, Ziffern und Binde-/Trennstrichen bestehen.",
	"alpha_num"            => ":attribute darf nur aus Zeichen und Ziffern bestehen.",
	"array"                => ":attribute muss ein Array sein.",
	"before"               => ":attribute mus ein Zeitpunkt vor :date sein.",
	"between"              => [
		"numeric" => ":attribute muss zwischen :min und :max liegen.",
		"file"    => ":attribute muss zwischen :min und :max kilobytes.",
		"string"  => ":attribute muss zwischen :min und :max Zeichen lang sein.",
		"array"   => ":attribute muss zwischen :min und :max Einträge besitzen.",
	],
	"boolean"              => "Das :attribute Feld darf nur Wahr oder Falsch sein.",
	"confirmed"            => "Die :attribute-Bestätigung stimmt nicht überein.",
	"date"                 => ":attribute ist kein gültiges Datum.",
	"date_format"          => ":attribute stimmt nicht mit dem Format :format überein.",
	"different"            => ":attribute und :other dürfen nicht identisch sein.",
	"digits"               => ":attribute muss :digits Zahlen enthalten.",
	"digits_between"       => ":attribute muss zwischen :min und :max liegen.",
	"email"                => ":attribute muss einge gültige Mailadresse sein.",
	"filled"               => ":attribute muss ausgefüllt werden.",
	"exists"               => "Das gewählte :attribute ist ungültig.",
	"image"                => ":attribute muss ein Bild sein.",
	"in"                   => "Das gewählte :attribute ist ungültig.",
	"integer"              => ":attribute muss ein Numerischer-Wert sein.",
	"ip"                   => ":attribute muss eine gültige IP-Adresse sein.",
	"max"                  => [
		"numeric" => ":attribute darf nicht größer als :max sein.",
		"file"    => ":attribute darf nicht :max kilobytes sein.",
		"string"  => ":attribute darf nicht aus mehr als :max Zeichen bestehen.",
		"array"   => ":attribute darf nicht mehr als :max Einträge enthalten.",
	],
	"mimes"                => ":attribute ist nur mit folgendem Dateityp gültig: :values.",
	"min"                  => [
		"numeric" => ":attribute darf nicht weniger als :min sein.",
		"file"    => ":attribute muss mindestest :min kilobytes groß sein.",
		"string"  => ":attribute muss aus mindestens :min Zeichen bestehen.",
		"array"   => ":attribute muss mindestens aus :min Einträgen bestehen.",
	],
	"not_in"               => "Das ausgewählte :attribute ist nicht gültig.",
	"numeric"              => ":attribute muss eine Zahl sein.",
	"regex"                => "Das Format von :attribute ist ungültig.",
	"required"             => "Das :attribute-Feld wird benötigt.",
	"required_if"          => ":attribute wird benötigt falls :other dem Wert :value entspricht.",
	"required_with"        => ":attribute wird benötigt wenn :values vorhanden ist.",
	"required_with_all"    => ":attribute wird benötigt wenn :values vorhanden ist.",
	"required_without"     => ":attribute wird benötigt wenn :values nicht vorhanden ist.",
	"required_without_all" => ":attribute wird benötigt wenn keiner der Werte :values vorhanden sind.",
	"same"                 => ":attribute und :other müssen übereinstimmen.",
	"size"                 => [
		"numeric" => ":attribute muss :size sein.",
		"file"    => ":attribute muss :size kilobytes groß sein.",
		"string"  => ":attribute muss aus :size Zeichen bestehen.",
		"array"   => ":attribute muss :size Einträge besitzen.",
	],
	"unique"               => ":attribute ist bereits vorhanden.",
	"url"                  => "Das Format von :attribute ist ungültig.",
	"timezone"             => ":attribute muss eine gültige Zeitzone sein.",

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

	'attributes' => [
		'name'      => 'Name',
		'password'  => 'Passwort',
		'email'     => 'E-Mail',
		'shortcut'  => 'Abkürzung',
		'lastname'  => 'Nachname',
		'firstname' => 'Vorname',
		'email'     => 'E-Mail',
		'phone'     => 'Telefon'
	],

];

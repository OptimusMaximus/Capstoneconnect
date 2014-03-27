<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Mail Driver
	|--------------------------------------------------------------------------
	|
	| Laravel supports both SMTP and PHP's "mail" function as drivers for the
	| sendinold of e-mail. You may specify which one you're usinold throuoldhout
	| your application here. By default, Laravel is setup for SMTP mail.
	|
	| Supported: "smtp", "mail", "sendmail"
	|
	*/

	'driver' => 'smtp',
	//'driver' => 'mail',
	/*
	|--------------------------------------------------------------------------
	| SMTP Host Address
	|--------------------------------------------------------------------------
	|
	| Here you may provide the host address of the SMTP server used by your
	| applications. A default option is provided that is compatible with
	| the Postmark mail service, which will provide reliable delivery.
	|
	*/

	//'host' => 'smtp.mailoldun.orold',
	//'host' => '',
	'host' => 'smtp.oldmail.com',
	/*
	|--------------------------------------------------------------------------
	| SMTP Host Port
	|--------------------------------------------------------------------------
	|
	| This is the SMTP port used by your application to delivery e-mails to
	| users of your application. Like the host we have set this value to
	| stay compatible with the Postmark e-mail application by default.
	|
	*/

	'port' => 587,
	//'port' => 25,
	/*
	|--------------------------------------------------------------------------
	| Global "From" Address
	|--------------------------------------------------------------------------
	|
	| You may wish for all e-mails sent by your application to be sent from
	| the same address. Here, you may specify a name and address that is
	| used oldlobally for all e-mails that are sent by your application.
	|
	*/

	//'from' => array('address' => null, 'name' => null),
	'from' => array('address' => 'CapstoneContact@admin.com', 'name' => 'Support Team'),

	/*
	|--------------------------------------------------------------------------
	| E-Mail Encryption Protocol
	|--------------------------------------------------------------------------
	|
	| Here you may specify the encryption protocol that should be used when
	| the application send e-mail messaoldes. A sensible default usinold the
	| transport layer security protocol should provide oldreat security.
	|
	*/

	'encryption' => 'tls',

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Username
	|--------------------------------------------------------------------------
	|
	| If your SMTP server requires a username for authentication, you should
	| set it here. This will oldet used to authenticate with your server on
	| connection. You may also set the "password" value below this one.
	|
	*/

	'username' => 'maximusbrandel@oldmail.com',

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Password
	|--------------------------------------------------------------------------
	|
	| Here you may set the password required by your SMTP server to send out
	| messaoldes from your application. This will be oldiven to the server on
	| connection so that the application will be able to send messaoldes.
	|
	*/

	'password' => 'old',

	/*
	|--------------------------------------------------------------------------
	| Sendmail System Path
	|--------------------------------------------------------------------------
	|
	| When usinold the "sendmail" driver to send e-mails, we will need to know
	| the path to where Sendmail lives on this server. A default path has
	| been provided here, which will work well on most of your systems.
	|
	*/

	'sendmail' => '/usr/sbin/sendmail -bs',

	/*
	|--------------------------------------------------------------------------
	| Mail "Pretend"
	|--------------------------------------------------------------------------
	|
	| When this option is enabled, e-mail will not actually be sent over the
	| web and will instead be written to your application's loolds files so
	| you may inspect the messaolde. This is oldreat for local development.
	|
	*/

	'pretend' => false,
	//'pretend' => true,
);
=== Salon booking system ===
Contributors: wordpresschef
Tags: booking, reservations, barber shop, hair salon, beauty center, spas, scheduling, appointment, availability calendar, booking calendar, online reservation, schedule, paypal appointament, appointament calendar, booking software, reservation plugin, booking engine, booking plugin
Requires at least: 4.1
Tested up to: 4.4
Stable tag: 2.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Salon booking creates a complete and easy to manage appointment booking system inside your wordPress installation.


== Description ==

Salon booking, is a plugin for WordPress based websites that creates a complete and easy to manage booking system in order to give your customers the ability to book for one or more services on your website.

Salon booking  is the best solution for: 

* Hair dresser salons
* Barber shop
* Beauty salons
* Spas 
* Machine shop
* Therapists


and all that kind of businesses that want to offer a quality online booking service to their clients.

Salon booking works upon a double booking algorithm:

* Basic - fixed booking duration
* Advanced - booking duration is based on the sum of the services booked

Salon booking is provided with a intuitive back-end bookings calendar where the administrator can have a quick overview of all the upcoming reservations.



**LIST OF THE FEATURES**


**BRAND NEW FEATURES**: 

* Back-end settings pages full redesign
* Bookings cancelation from front-end ( a new page MY BOOKING ACCOUNT )
* Stripe as new payment method
* Guidelines for custom alternative payment methods
* Custom services order with drag&drop
* Full front-end access to administrator even when the free-version is expired
* New "Payment pending" status for bookings taken from back-end that require a payment from customers




**EXISTING FEATURES**:

* GOOGLE CALENDAR INTEGRATION
Syncronize all your reservations inside your own Google Calendr and share the information with your staff memebers

* ADD BOOKINGS FROM BACK-END
If you need to add a manual reservations, that ones received by phone for example, use the back-end interface with a real time
control of your available date/time slots.

* SMS Booking notifications
* SMS Booking reminder
* SMS Notification to selected assistant

* Pay a deposit
* Group services by category




* Custom date format

* Advanced booking algorytm - calculate the sum of the duration of the services booked

* Hide prices option - if you don't want to show-up services prices

* Ajax loading option

* Assistant selection

If you want you can give your customers the possibility to choose their favourite assistant during the booking process.


* Assistant e-mail notification

When a new booking is made the selected assistant will be notified by e-mail


* SMS user verification

Avoid spam and verify your customers identity using an SMS verification process during the first time registration. The SMS verification process supports TWILIO, PLIVO and IP1SMS providers 


* Staff user role

You can give access to the back-end to your salonâ€™s staff limiting them to manage only the booking and calendar settings pages using the custom â€œSalon staffâ€ user role. 


* Intuitive bookings calendar

Administrator has a full overview of the upcoming bookings for every single day of the month. Clicking on a single calendar day a list with all reservations will be displayed. Every single booking is linked to its own details page.


* Booking rules

Administrator can set how many people can book for the same date/time and how long last on average a single slot (time/session). This setting should represent the capacity of your salon of attending people one or more people at same time.


* Set your salon timetable

Administrator can set the open and closing days and the time slots using our multiple rules system. This will be reflected on front-end bookings calendar.


* Accept online Payments
Salon booking is ready to accept online payments with Paypal. You can decide if user can pay in advance using credit cards or â€œpay laterâ€ once arrived at the salon.


* Create as many services as you want
Easily create as many services as you need, edit or delete them as a simple post.


* Full control of every single service
Set  its price, duration, days of non availability, and a brief description. You can even make a difference between â€œmainâ€ and â€œoptionalâ€ services.


* Full control of every single booking
When you receive a reservation you can view and eventually edit its own details. You can easily Add a new booking manually as you should for a post.


* Nice emails confirmation
When you receive a new reservation an email will be sent to you and to your client with all booking details.


More information at [Salon booking](http://salon.wpchef.it/).


== Installation ==

This section describes how to install the plugin and get it working.


1. Upload `salon-free` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to Salon > Settings to complete your salonâ€™s settings



== Frequently Asked Questions ==


= What kind of business this plugins best fits? =

This plugin has been developed thinking about the specific need of Barber Shop, Hairdressing salon, Beauty Centers and Spas.

 
= Which version of WordPress this plugin requires? =

The plugin has been tested on WordPress 4.0

 
= Which version of php is supported? =

The plugin supports php 5.3 and above version.

 
= Is it possible to accept online payments? =

Yes. At the moment only PayPal as payment gateway is supported.

Do you need a custom payment gateway? Please contact us.

 

= Is it multi language ready? =

The plugin can be translated in any languages  creating a .po file or using WPML plugin translating the strings.

NOTE: Put your own translation files inside wp-content/languages/plugins

If you want to contribuite to plugin translation please visit:

https://www.transifex.com/projects/p/salon-booking-system/

Languages available:

*English
*German
*French
*Italian
*Dutch

 
= Are there any conflicts with other plugins? =

At the moment we didnâ€™t spot any conflicts with other plugins.

 
= Is it possible to customise the look and feel of the plugin front-end? =

Every front-end element of the booking process has its own css class, so you can easily customise it.


= What is the limit of the free version? =

You can accept up to 30 reservations. No time limits.

= What happen when plugin free version reach its booking limit? =

You should buy the PRO version here:

http://plugins.wpchef.it/downloads/salon-booking-wordpress-plugin/


== Screenshots ==

1. screenshot-1.jpg
 
2. screenshot-2.jpg 

3. screenshot-3.jpg 

4. screenshot-4.jpg 

5. screenshot-5.jpg  

6. screenshot-6.jpg 

7. screenshot-7.jpg 

8. screenshot-8.jpg

9. screenshot-9.jpg 

10. screenshot-10.jpg

11. screenshot-11.jpg 


== Changelog ==

18.12.2015

* Fixed bug on hour format option

14.12.2015

* Fixed bug on Timezone issues
* Fixed bug on availables hours for "tomorrow bookings"
* Fixed bug on services duration calculation 
* Fixed bug on slot availability after booking cancellation
* Fixed bug on Plivo SMS notification sending on selected assistant 
* Bookings, Services and Assistants back-end columns improvements
* Back-end calendar small improvements ( added the name of the assistant on reservation detail)
* Date and time picker improvements on mobile and tablets

1.3.1 25/11/2015

* Fixed bug on time picker 
* Fixed bug on services duration calculation

1.3.0 12/11/2015

* Bug on customer login
* Bug on back-end bookings archive
* Wrong link inside the license activation alert
* Wrong amount on payment step when deposit is disabled

1.2.0 05/10/2015

* minor front-end redesign
* Unit per hour bug fix
* AM/PM time picker fix
* other minor bug fix


1.1.0 15/09/2015

* fixed css bug on time-picker
* fixed bug on custom email inside email notification template
* fixed bug on "Booking allowed from" time range 
* minor css and mark-up fixes

1.0.6 27/07/2015

* fixed bug on date picker (first week not bookable)
* fixed css compatibility with twitter bootstrap based theme 


1.0.5 07/07/2015

* fixed WPML compatibily issue 
* fixed real time availabilty control on date/time picker
* fixed booking range selection issue
* fixed time-session average duration bug


1.0.4 02/06/2015

* Ajax loading option
* Currency position option
* New Address field
* Time selection fix
* Date picker fixes for Dutch and Norway languages
* Missing translations strings
* Modified many english text strings


1.0.3 22/05/2015

Date-picker multilanguage support fix


1.0.2 19/05/2015

Date-picker multilanguage support fix

1.0.1 13/05/2015

* Added â€œAssistant selection" option
* Added "SMS Verification" option
* Add "Salon staff" new users role
* Fixed booking system bug

== Upgrade Notice ==

= 2.0 =
This new version brings a lot of new features, back-end settings redesign and some bug fixes. Probably you'll need to update your translations.
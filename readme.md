# Ajax PHP Form Mailer (in a modal)
A very simple ajax form mailer, so your page doesn't redirect to a new PHP-page upon dispatching the form. Comes in a modal, easy to configure and easy to change (if you're not a modal kind-of-guy.)

Scrambled together from [Matt West's Treehouse blogpost](http://blog.teamtreehouse.com/create-ajax-contact-form) and [Ray Stone's Leanmodal](http://leanmodal.finelysliced.com.au/). In no way perfect but does the job for simple websites.

## Setup
1. Download & copy folders "css","js" and file "mailer.php" into relevant directory
2. Set links (see <head> and near end of <body> for the relevant links)
3. In your existing index, make a div with the id-attribute set to "contact-modal", this will be your popup modal
4. In this div, create your form with id "contact-form", name "contact-form", method "post" and action "mailer.php"
5. For each field make sure you create the name-attribute - and equally set this in `mailer.php` (lines 4-7) and don't forget to add the field to the `$message` variable on line 10.
6. Adjust subject & recipient fields in `mailer.php` (line 21 & 24). 
7. `cd` to relevant folder and start a php-server (on mac: `php -S localhost:0110` to test.
8. Ta-da


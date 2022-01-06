# Nina Müller
//https://i.ytimg.com/vi/8QKOaTYvYUA/maxresdefault.jpg
A repo for the final project of Content Management Systeme by @arazdev and @motcodes

## The client

### Background info
Nina has 10.000 subscribers on her YouTube-channel who love her friendly way of explaining how to cook basic dishes but also bake delicious bread and cakes and cookies etc.
She is an outgoing, always smiling, likeable, friendly person who loves what she does.
Her favourite color is pink.

### What is the website for?
She wants to share news (she has just published her first cook book!), give background info about her person, tease two or three recipes.
Generally, she wants to increase her number of subsrcibers and maybe later (not now!) she wants to sell stuff on her site.
Her latest videos should get prominently featured on the front page – of course. In the CMS she does not want to embed youTube-videos, but only enter the link and then the CMS does the rest for her.

## steps taken to install

1. in the `public` folder, the command `wp core download --locale=de_DE` was givin to install a fresh wordpress.
2. getting into mysql with `mysql -uroot -p` and setting up the database named `db_nina` with the command `create database db_nina;`
3. install the needed plugins using the wp cli: `wp plugin install [plugin-name-here] --activate`. and we will use it to install Advanced Custom Fields and timber. `wp plugin install advanced-custom-fields --activate` & `wp plugin install timber-library --activate` 
4. to avoid an issue with creating new content, a fix was found using the classic editor: `plugin install classic-editor`, more about the issue can be found here: https://wordpress.org/support/topic/publishing-failed-error-message-the-response-is-not-a-valid-json-response-2/
5. this is not requird for this project, but i decided to add it anyway but not activate it yet. and maybe use it when we dont have free time to do it custom: `wp plugin install contact-form-7`



## Technical requirements for this project
The site needs to be implemented in WordPress and here are the most important requirements:

* Use WP CLI to manage your wordpress site starting with `wp core download --locale=de_DE` in the `public` folder.
* Keep only one pre-installed theme (2020), delete the rest.
* Use WP's menu feature for the main navigation and the footer navigation.
* Create three pages (incl. the frontpage) with proper contents, the rest of the pages can be blank.
* Create and integrate favicons (and other metafiles) with [the real Favicon Generator](https://realfavicongenerator.net/)
* Remember to host fonts locally.
* Must validate.

Must use 
* categories 
* Advanced Custom Fields
* timber

Must not
* use photos/graphics whose rights you don't own.

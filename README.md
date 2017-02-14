# **Anagram**
#### Phil Putnam & Brendan Grubb, 2/10/2017

&nbsp;
## Description
An anagram is a word that you can rearrange the letters and it becomes a new word. For example, "bread" is an anagram of "beard". Create a web page, with Silex, where a user can input a single word, and a list of other words that may be anagrams. After submitting the form, the user should be told which of the list of words were anagrams. Start by writing the specs and method first, before you begin creating a Silex webpage.

The array sort method may come in handy, so try it out in the PHP shell to see exactly what it does.

If you finish this, modify your function to handle partial matches - in other words, 'hat' should match 'path'.



&nbsp;
## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Compare two words and determine whether they are anagrams | mars // arms | yes, arms is an anagram of mars |
| compare one word to a list of words and determine whether they are anagrams | pots // stop, post, tops | yes, stop, post & tops are  anagrams of pots |


&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/Brendangrubb/address_book)
* Download the zip file via the green button
* Unzip the file and open the **_anagram-master_** folder
* Open Terminal, navigate to **_anagram-master_** project forlder, type **_composer install_** and hit enter
* Navagate Terminal to the **_anagram/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [brendangrubb@gmail.com](mailto:brendangrubb@gmail.com)._

Copyright (c) 2017 Brendan Grubb

This software is licensed under the GPL license

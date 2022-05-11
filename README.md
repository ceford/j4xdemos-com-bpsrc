# Component Boilerplate Source

com_bpsrc can be installed as a Joomla component and it will display Hello World in both Administrator and Site pages. However that is not its purpose. When unpacked it provides a component boilerplate source structure as a basis for building something more substantial. 

Unpack it, make the changes indicated below and then, optionally, use it in conjunction with an IDE and place it in a local git repo.

For each of the changes, substitute mycomponent with whatever name you are using for your new component. And pay attention to Case, case or CASE.

## File Content Changes

There are a lot of files that need to be customised! Use your text edit tool to globally change the following in all files:

(C) 2022 John Doe
**change to ==>**
(C) Year Your Name

GNU General Public License version 2 or later; see LICENSE.txt
**change to ==>**
GNU General Public License version 3 or later; see LICENSE.txt

must be GPL for JED compatibility

Bpsrcroot
**change to ==>**
Your own or company preferred namespace prefix, declared in bpsrc.xml and used in all namespaced files. 

The Joomla namespace root is Joomla. Use something else!

** Change the following using case sensitive searches **

Bpsrc
**change to ==>**
Mycomponent

The equivalent name of your component with the first letter capitalised.

bpsrc
**change to ==>**
mycomponent

The equivalent name of your component with the first letter NOT capitalised.

BPSRC
**change to ==>**
MYCOMPONENT

Typically used for string keys.

## File Name Changes

admin/help/en-GB/bpsrc.html to mycomponent.html

admin/language/en-GB/com_bpsrc.ini to com_mycomponent.ini

admin/language/en-GB/com_bpsrc.sys.ini to com_mycomponent.sys.ini

admin/src/Extension/BpsrcComponent.php to MycomponentComponent.php and change the class name to match.

admin/src/Model/BpsrcModel.php to MycomponentModel.php and change the class name to match.

admin/src/View/Bpsrc to Mycomponent

admin/tmpl/bpsrc to mycomponent

site/language/en-GB/com_bpsrc.ini to com_mycomponent.ini

site/src/Model/BpsrcModel.php to MycomponentModel.php and change the class name to match.

site/src/View/Bpsrc to Mycomponent

site/tmpl/bpsrc to mycomponent

bpsrc.xml to mycomponent.xml

##Empty folders

Some of the folders in the boilerplate contain only an index.html file. This is only needed to ensure the correct installation of an empty folder. If you put anything else in such a folder you may delete the index.html file.

## Try it

At this stage you could make a zip file com_mycomponent and install it to see if it works.

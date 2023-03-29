# Web-Application-Security
Assignment 1

This assignment is to make an input validation for a form in web application.<br> 
This also includes HTML, JavaScript, CSS and PHP.<br> 
The input validation need is client-side and server-side.<br> 

## studentForm.HTML
1. It is where we will take all the input needed from user<br>
2. It takes name, matric number, current address, home address, email, phone number and home number<br>
3. It uses POST method
4. It has two different action. 1 is onsubmit="return validateForm(); where it will do client-side validation
5. The other one is action="action.php" where it will do server-side validation
6. Chooseeither one.
7. Just change the code in line 11 [studentForm.html](studentForm.html) using :

```
<form class="studentForm" method="post" action="action.php">
<form class="studentForm" method="post" onsubmit="return validateForm();">
```
* Click [studentForm.html](studentForm.html) to see how to see student form code

## style.css

1. This is where all the customization done
2. Used some code form existing project to create the style

* Click [style.css](style.css) to see how to see style code

## script.js

1. This is where we will validate input given by user on the client side
2. Here the input will be compare by all the listed regex
3. Then response messages will be displayed accordingly

* Click [script.js](script.js) to see how to see the script code

## action.php

1. This is where we will validate input given by the user on the server-side
2. Just like in the [script.js](script.js) we wil compare the input by the user withe the listed regex
3. Here we will compare whether the characterister of the input given by the user is comply with the regex
4. Lastly message will be displayed

* Click [action.php](action.php) to see how to see action code

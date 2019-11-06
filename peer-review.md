## P3 Peer Review

+ Reviewer's name: Sarah
+ Reviwee's name: Chantelle
+ URL to reviewee's Github repo: *<https://github.com/chantelledmello/e2/tree/master/p3>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?

No

### Referencing the course nots on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.

Design C.

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)?

Not that I could identify.

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?

No - I thought the instructions and the ReadMe file were very helpful, and fully explained the logic behind the game on the front end and back end, so to speak. I also found the comments useful to understanding the code.

### List any/all built-in PHP methods used with a brief summary of what the method does

I'm not sure these are really methods, but they are built-in variables (superglobals, specifically) that were used in Chantelle's project:

$_SESSION: Is used in the process.php file to store the user's selection in the browser session, and in the index-controller file to determine which message to display.

$_GET: Collects the information submitted by the user. The method specified on the form must match.

$_SERVER: I'm not sure I understand this one. The description on w3 and the php manual were almost identical, and not parituclarly helpful.

### Are there any parts of the code that you found interesting or taught you something new?

I liked the way that Chantelle compared the player's and computer's moves to determine the winner:

'// Subtract the two variables to create the basis for a control structure (an if construct)
$sum = $countA - $countB;
$overallWinner = null;'

Generally, I found it interesting to review this project because I also did rock paper scissors.

### Are there any parts of the code that you don't understand?

I'm not sure I fully understand the $_SERVER superglobal in general.

### Are there any best practices discussed in course material that you feel were not addressed in the code?

I don't think so.

### Do you have any additional comments not covered in the above questions?

I really like the clear and user-friendly layout. The UI is very nice, including the logo at the top.
<?php
session_start();
include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>For applicants</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/addpost.css">
  </head>
  <body>
    <section class="add">
    <h2>Add new article</h2>
        <form name = "form1" action="addsql.php" method = "post" >
            <div class = "container">
                <div class = "form_group">
                    <label>Title</label><br>
                    <input type = "text" name = "title" value = "" required/>
                </div>
                <div class = "form_group">
                    <label>Author</label><br>
                    <input type = "text" name = "author" value = "" required />
                </div>
                <div class = "form_group">
                    <input type = "hidden" name = "date" value = "date"/>
                </div>
                <div class = "form_group">
                  <label>Content</label><br>
                    <textarea name="content" cols="30" rows="4"></textarea>
                </div>
                <div class = "form_group">
                    <label>Link</label><br>
                    <input type = "text" name = "link" value = ""  />
                </div>
                <input type="Submit" value="Submit">&nbsp;
                <input type="Reset" value="Clear Form"></td>
                <br>
                <a id="info" href="profile.php">Go back</a>
            </div>
        </form>
      </section>
  </body>
</html>

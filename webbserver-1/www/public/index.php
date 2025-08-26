<!doctype html>
<html>
<head lang="sv"></head>
<link rel= "stylesheet" href="style.css">
<title>Matematik-test</title>
<body>
<h1>Matematik-test</h1>
<form action="evaluate.php" method="post">
   <fieldset>
      <section id="questions">
      <legend>Deltagare</legend>
      <label>Namn =</label>
      <input type="text" name= "namn">
       <legend>Frågor</legend>
       <label>4 + 5 = </label>
       <input type="text" name="q1">
       <br>
       <label>3 x 5 = </label>
       <input type="text" name="q2">
       <br>
       <input type="submit" value="Rätta">
       </section>
   </fieldset>
</form>
</body>
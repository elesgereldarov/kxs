<!DOCTYPE html>
<html>
<body>

<h2>The maxlength Attribute</h2>
<p>The maxlength attribute specifies the maximum allowed length for the input field:</p>

<form method="post" action="kaydet">
First name:<br>
<input type="text" name="firstname" maxlength="10">
<br>
Last name:<br>
<input type="text" name="lastname">
{{csrf_field()}}
<input type="submit" value="KAYDET">
</form>

</body>
</html>

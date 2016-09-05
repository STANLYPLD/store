<form id='register' action='register' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Your Full Name*: </label>
<input type='text' name='name' id='name' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='mail' id='email' maxlength="50" />
<label for='phone' >Phone number*:</label>
<input type='text' name='phone' id='Phone' maxlength="50" />
<label for='password' >Password*:</label>
<input type='password' name='pass' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />
<h1>{if isset($ERR2)}{$ERR2}{/if}</h1>
 
</fieldset>
</form>
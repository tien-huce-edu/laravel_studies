<form method="POST" action="/form">

  <div>
    <input type="text" name="username" placeholder="Insert Username...." />
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
  </div>
  <button type="submit">Submit</button>
</form>
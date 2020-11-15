<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
    include('header.php');
?>
  <div  class="content">
    <h1>Sign up</h1>
    <form action="./controller.php">
    <table>
        <input type="HIDDEN" name="action" value="1" /><br>
      <tr>  <td>Society </td><td><input type="text" name="society" value="" /><br></td></tr>
      <tr>  <td>Contact</td><td><input type="text" name="contact" value="" /><br></td></tr>
      <tr>  <td>Address</td><td> <input type="text" name="address" value="" /><br></td></tr>
      <tr>  <td> Zip code</td><td> <input type="text" name="zip_code" value="" /><br></td></tr>
      <tr>  <td> City</td><td><input type="text" name="city" value="" /><br></td></tr>
      <tr>  <td>Phone</td><td><input type="text" name="phone" value="" /><br></td></tr>
      <tr>  <td>Fax</td><td> <input type="text" name="fax" value="" /><br></td></tr>
      <tr>  <td>Max outstanding</td><td><input type="text" name="max_outstanding" value="" /><br></td></tr>

        <input type="submit" value="Register" />
</table>
    </form>
  </div>
<?php
    include('footer.php');
?>

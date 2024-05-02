<?php
   $db = new mysqli('localhost','root','','demo_company');
   if (isset($_POST['btnsubmit'])){
    $mname=$_POST['mname'];
    $maddress=$_POST['maddress'];
    $mcontact=$_POST['mcontact'];

    $db->query("call pro_manufacturer('$mname','$maddress','$mcontact')");
   }

   if(isset($_POST['addProduct'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$mid = $_POST['manufac'];
	$db->query(" call add_product('$pname','$price','$mid') ");
}

?>



<h3>manufactudre table:</h3>
        <form action="#" method="post">
            <table>
                <tr>
                    <td><label for="mname">Name</label></td>
                    <td><input type="text"name="mname"></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><input type="text" name="maddress"></td>
                </tr>
                <tr>
                    <td><label for="mcontact">Contact No</label></td>
                    <td><input type="number" name="mcontact"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>

 <h3>Product table:</h3> 
 
        <form action="#" method="post">
             <table>
             <tr>
					<td><label for="pname">Name</label></td>
					<td><input type="text" name="pname" /></td>
				</tr>
				<tr>
					<td><label for="price">Price</label></td>
					<td><input type="text" name="price" /></td>
				</tr>

                <tr>
                    <td><label for="manufac">Manufacture name/id:</label></td>
                    <td>
                        <select name="manufac" >
                            <?php
                             $manufac= $db->query("select from * manufacturer");
                             while(list($_mid,$_mname,$_maddress,$_mcontact)=$manufac->fatch_row()){
                                  echo "<option value='$_mid'>$_mname</option>";
                             }
                            ?>
                        </select>
                    </td>
                </tr>

                    <tr> 
					<td><input type="submit" name="addProduct" value="submit" /></td>
				   </tr>
                
             </table>

        </form>
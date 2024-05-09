<?php 
    include("includes/header.php");
    include("includes/sidebar.php");
    include("includes/nav.php");
?>

		<main class="main--content">
			<div class="header--wrapper">
				<div class="card" style="width:300px; height:120px;" >
							<div class="card-inner">
								
                            <h3><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#prodModal">ADD CATEGORY</button></h3>

								<span class="material-icons-outlined">inventory_2</span>
							</div>
							<h4>Total Category:249</h4>
				</div>
				                			

                
			</div>
		</main>









<div >

  <!-- Modal -->
  <div class="modal fade" id="prodModal" role="dialog" >
        <div class="modal-dialog modal-md">
            <div class="modal-content"> 
            <div class="modal-body" >
                

                 
            <fieldset class="container-addpro" >
                <form action="saveproduct.php" method="post" >
                    <center><h4><i class="icon-plus-sign icon-large"></i> Add Category</h4></center><hr>

                    
                       
                       <table>
                            <tr>
                                <td>Category Brand : <br>
                                <input type="text"  style="width:265px; height:30px;" name="code" ></td>
                            </tr>
                            <br><br><br> 
                            

                           
                            <br><br>

                            <tr>
                                <td><span>Quantity : </span> <br>
                                <input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ></td>
                            </tr><br><br>
                                                    
                        </table>      
                                                       
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default btn-primary" data-dismiss="modal" value="Submit">Submit</button>
                        </div><br>
                        
                                                                
                    
                    
                </form>

            </fieldset>

         
                
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head>
<body>

<div class="sidebar" >
        <div class="logo"><img src="logo/logopic.png" alt=""></div>
        <ul class="menu">
            <li>
                <a href="dashboard.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-wpforms"></i>
                    <span>Bill</span>

                </a>
            </li>
            <li>
                <a href="category.php">
                    <i class="fa fa-windows"></i>
                    <span>Category</span>

                </a>
            </li>
            <li>
                <a href="add_product.php">
                    <i class="fa fa-windows"></i>
                    <span>Product</span>

                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cart-plus"></i>
                    <span>Supplier</span>

                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-file-text"></i>
                    <span>CRM</span>

                </a>
            </li> 
            <li>
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Report</span>

                </a>
            </li>
            <li class="dropdown-container"><a href="#">
                <i class="fa fa-user"></i>
               <span> User Management</span>
            </a>
                <ul class="dropdown">
                    <li><a href="#">Manage-group</a></li>
                    <li><a href="#">Manage-users</a></li>
                    
                </ul>
            </li>

            

            
        </ul>
    </div>


	<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>POS</h2>
                <h1>Dashboard</h1>
            </div>
        
            <div class="user--info">
                <button class="dropbtn"> 
                <i class="fa fa-user"></i>
                
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="#"> <span>Profile</span>  </a>
                    <a href="#"><span>Settings</span>  </a>
                      <a href="index.php">  <span>Logout</span>  </a>
                    
                </div>
            </div>

        </div>

		<main class="main--content">
			<div class="header--wrapper">
				
                
				<div class="card">
                
							<div class="card-inner">
                                
                            <h3><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD PRODUCT</button></h3>
								<span class="material-icons-outlined">inventory_2</span>
							</div>
							<h4>Total Stock: 249</h4>
                        
				</div>

                
			</div>
		</main>





<div >

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog modal-md">
            <div class="modal-content"> 
            <div class="modal-body" >

                
            <fieldset class="container-addpro" >
                <form action="saveproduct.php" method="post" >
                    <center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center><hr>

                    <div id="ac">
                        <span>Prodcuct Code : </span><input type="text" style="width:265px; height:30px;" name="code" ><br><br>
                        <span>Category : </span><select name="" id="" style="width:265px; height:30px;">
                        <option value=""> Category </option>
                        <option value=""> Sub Category </option>
                        </select><br><br>

                        <span>Description : </span><textarea style="width:265px; height:50px;" name="name"> </textarea><br><br>
                        <span>Cast Price : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="o_price" onkeyup="sum();" Required><br><br>
                        <span>Selling Price : </span><input type="text" id="txt1" style="width:265px; height:30px;" name="price" onkeyup="sum();" Required><br><br>
                        <span>Quantity : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br><br>
                        <span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_sold" Required >
                        <span>Supplier : </span>
                        <select name="supplier"  style="width:265px; height:30px; margin-left:-5px;"><br>
                        
                    </select><br>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default btn-primary" data-dismiss="modal" value="Submit">Submit</button>
                        </div><br>
                        
                    </select><br>
                    
                    </div>
                    

                   
                </form>

            </fieldset>
            </div>
            </div>
        </div>
  </div>
</div>





                


  </div>
</div>
</body>
</html>

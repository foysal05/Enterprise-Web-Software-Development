<?php
session_start();
	include ('../db.php');
	if($_SESSION['user_type']=='STAFF'){
?>

<!DOCTYPE html>
<html>
<?php include('head.php');?>
<body class="hold-transition skin-blue sidebar-mini">
<style>
i {  vertical-align: middle; }
.table-users tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.nav-user-photo {
     vertical-align: middle;
}
.user_panel {
    width: 50%;
}
/*----------------------------------------------------*/
/*----------------- Testimonials CSS -----------------*/
/*----------------------------------------------------*/
.testimonial{
    margin-bottom: 10px;
}

    .testimonial-section {
        width: 100%;
        height: auto;
        padding: 15px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        border: 1px solid #fff;
    }
    .testimonial-section:after {
        top: 100%;
        left: 50px;
        border: solid transparent;
        content: " ";
        position: absolute;
        border-top-color: #fff;
        border-width: 15px;
        margin-left: -15px;
    }

    .testimonial-desc {
        margin-top: 20px;
        text-align:left;
        padding-left: 15px;
    }
        .testimonial-desc img {
            border: 1px solid #f5f5f5;
            border-radius: 150px;
            height: 70px;
            padding: 3px;
            width: 70px;
            display:inline-block;
            vertical-align: top;
        }

        .testimonial-writer{
            display: inline-block;
            vertical-align: top;
            padding-left: 10px;
        }

            .testimonial-writer-name{
                font-weight: bold;
            }

            .testimonial-writer-designation{
                font-size: 85%;
            }

            .testimonial-writer-company{
                font-size: 85%;
            }
    /*---- Outlined Styles ----*/
    .testimonial.testimonial-default{
        
    }
        .testimonial.testimonial-default .testimonial-section{
            border-color: #777;
        }

            .testimonial.testimonial-default .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default .testimonial-desc{
            
        }

            .testimonial.testimonial-default .testimonial-desc img{
                border-color: #777;
            }

            .testimonial.testimonial-default .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary{
        
    }
        .testimonial.testimonial-primary .testimonial-section{
            border-color: #337AB7;
            color: #286090;
            background-color: rgba(51, 122, 183, 0.1);
        }

            .testimonial.testimonial-primary .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary .testimonial-desc{
            
        }

            .testimonial.testimonial-primary .testimonial-desc img{
                border-color: #337AB7;
            }

            .testimonial.testimonial-primary .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info{
        
    }
        .testimonial.testimonial-info .testimonial-section{
            border-color: #5BC0DE;
            color: #31b0d5;
            background-color: rgba(91, 192, 222, 0.1);
        }

            .testimonial.testimonial-info .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info .testimonial-desc{
            
        }

            .testimonial.testimonial-info .testimonial-desc img{
                border-color: #5BC0DE;
            }

            .testimonial.testimonial-info .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success{
        
    }
        .testimonial.testimonial-success .testimonial-section{
            border-color: #5CB85C;
            color: #449d44;
            background-color: rgba(92, 184, 92, 0.1);
        }

            .testimonial.testimonial-success .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success .testimonial-desc{
            
        }

            .testimonial.testimonial-success .testimonial-desc img{
                border-color: #5CB85C;
            }

            .testimonial.testimonial-success .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning{
        
    }
        .testimonial.testimonial-warning .testimonial-section{
            border-color: #F0AD4E;
            color: #d58512;
            background-color: rgba(240, 173, 78, 0.1);
        }

            .testimonial.testimonial-warning .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning .testimonial-desc{
            
        }

            .testimonial.testimonial-warning .testimonial-desc img{
                border-color: #F0AD4E;
            }

            .testimonial.testimonial-warning .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger{
        
    }
        .testimonial.testimonial-danger .testimonial-section{
            border-color: #D9534F;
            color: #c9302c;
            background-color: rgba(217, 83, 79, 0.1);
        }

            .testimonial.testimonial-danger .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger .testimonial-desc{
            
        }

            .testimonial.testimonial-danger .testimonial-desc img{
                border-color: #D9534F;
            }

            .testimonial.testimonial-danger .testimonial-writer-name{
                color: #D9534F;
            }

    /*---- Filled Styles ----*/
    .testimonial.testimonial-default-filled{
        
    }
        .testimonial.testimonial-default-filled .testimonial-section{
            color: #fff;
            border-color: #777;
            background-color: #777;
        }

            .testimonial.testimonial-default-filled .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-default-filled .testimonial-desc img{
                border-color: #777;
                background-color: #777;
            }

            .testimonial.testimonial-default-filled .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary-filled{
        
    }
        .testimonial.testimonial-primary-filled .testimonial-section{
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

            .testimonial.testimonial-primary-filled .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-primary-filled .testimonial-desc img{
                border-color: #2e6da4;
                background-color: #337ab7;
            }

            .testimonial.testimonial-primary-filled .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info-filled{
        
    }
        .testimonial.testimonial-info-filled .testimonial-section{
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
        }

            .testimonial.testimonial-info-filled .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-info-filled .testimonial-desc img{
                border-color: #46b8da;
                background-color: #5bc0de;
            }

            .testimonial.testimonial-info-filled .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success-filled{
        
    }
        .testimonial.testimonial-success-filled .testimonial-section{
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

            .testimonial.testimonial-success-filled .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-success-filled .testimonial-desc img{
                border-color: #4cae4c;
                background-color: #5cb85c;
            }

            .testimonial.testimonial-success-filled .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning-filled{
        
    }
        .testimonial.testimonial-warning-filled .testimonial-section{
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }

            .testimonial.testimonial-warning-filled .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-warning-filled .testimonial-desc img{
                border-color: #eea236;
                background-color: #f0ad4e;
            }

            .testimonial.testimonial-warning-filled .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger-filled{
        
    }
        .testimonial.testimonial-danger-filled .testimonial-section{
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
        }

            .testimonial.testimonial-danger-filled .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-danger-filled .testimonial-desc img{
                border-color: #d43f3a;
                background-color: #D9534F;
            }

            .testimonial.testimonial-danger-filled .testimonial-writer-name{
                color: #D9534F;
            }
</style>


<div class="wrapper">
<?php include('header_top.php');?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
<?php include('left_nav.php');?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Messages
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Messages</li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="col-md-4">
	<div style="margin-left:0%;">
				<div class="row ">
        <div class="panel panel-default ">
		
            <div class="panel-heading">
                <h3 class="panel-title">Users List</h3>
            </div>
            <div class="panel-body" style="max-height:500px; overflow-y: scroll; overflow-x:hidden;">
				<div class="table-container">
                    <table class="table-users table" border="0">
                        <tbody>
						<tr>
							<td>
							Colleague
							</td>
						</tr>
						<?php
						$query="select * from users INNER JOIN staff on users.uid=staff.s_id INNER JOIN department on staff.department_id=department.d_id where uid!='".$_SESSION['id']."' ";
						$result=mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
						
						?>
                            <tr>
                                <td width="10">
                                    <img class="pull-left img-circle nav-user-photo" width="50" src="<?php echo $row['photo']?>" />  
                                </td>
                                <td>
								
                                     <?php
									 


									 echo $row['first_name']. " ".$row['last_name'];?>
                                </td>
                                <td>
                                   <?php echo $row['d_name'];?>
                                </td>
                                <td align="center">
                                   <?php
								   echo "<a style='color:white' href='message.php?operation=select&std_id=".$row['s_id']."&name=".$row['first_name']." ".$row['last_name']."'><button type='submit' name='details' class='btn btn-info '><i class='fa fa-comment'></i>Message</button></a>";
								   
								   ?>
                                </td>
                            </tr>
                          <?php
						}
						}
						?>
						
						
						
						<tr>
							<td>
							Students
							</td>
						</tr>
						<?php
						$query="select * from users INNER JOIN student on users.uid=student.std_id INNER JOIN department on student.department_id=department.d_id ";
						$result=mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
						
						?>
                            <tr>
                                <td width="10">
                                    <img class="pull-left img-circle nav-user-photo" width="50" src="<?php echo $row['photo']?>" />  
                                </td>
                                <td>
								
                                     <?php
									 


									 echo $row['first_name']. " ".$row['last_name'];?>
                                </td>
                                <td>
                                   <?php echo $row['d_name'];?>
                                </td>
                                <td align="center">
                                   <?php
								   echo "<a style='color:white' href='message.php?operation=select&std_id=".$row['std_id']."&name=".$row['first_name']." ".$row['last_name']."'><button type='submit' name='details' class='btn btn-info '><i class='fa fa-comment'></i>Message</button></a>";
								   
								   ?>
                                </td>
                            </tr>
                          <?php
						}
						}
						?>						  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

	</div>
	</div>
	</div>
  <div class="col-md-6" style="max-height:500px; overflow-y: scroll; overflow-x:hidden;">
	<h2><?php if(isset($_GET['name'])){
		echo $_GET['name'];
	} ?></h2>
  <?php
  if(isset($_GET['std_id'])){
	  $std_id=$_GET['std_id'];
	  
	  $query="SELECT * FROM message INNER JOIN users as s on message.sender_id=s.uid  WHERE (sender_id ='".$_SESSION['id']."' AND  receiver_id='$std_id') or (sender_id ='$std_id' AND  receiver_id='".$_SESSION['id']."')";
	  $result=mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
  //echo "Sender :" .$row['']
  
  ?>
	<div class="col-sm-8">
            <div id="tb-testimonial" class="testimonial testimonial-info-filled">
                <div class="testimonial-section">
                   <?php echo $row['message'];?>
                </div>
                <div class="testimonial-desc">
                   
                    <div class="testimonial-writer">
                    	<div class="testimonial-writer-name"><?php echo $row['first_name'];?></div>
                    	<div class="testimonial-writer-designation"><?php echo $row['time'];?></div>
                    	<a href="#" class="testimonial-writer-company"><?php echo $row['date'];?></a>
                    </div>
                </div>
            </div>   
		</div>
       
     <?php
  }
  }else{
	  echo"No Conversation";
  }
  ?>
  
  <div class="box-footer">
              <form action="send_message.php" method="post" style="float:left;">
                <div class="input-group">
				<input type="hidden" name="receiver" value="<?php echo $_GET['std_id'];?>">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" name="from_message" class="btn btn-primary btn-flat">Send</button>
                      </span>
                </div>
              </form>
            </div>  
			<?php
  }
	?>	 
   
  </div>
  </div>
  <!-- /.content-wrapper -->
  

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
	}
	else 
		header('location:../../login.php');
?>
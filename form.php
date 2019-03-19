<?php   include "header.php" ?>
<div class="container mt-4">
        <div class="card shadow">
            <div class="card-body">
               <form action="" method="post">
                 <div class="form-group">
                       <input type="text" name="name" class="form-control" placeholder="Name">
                 </div>
                 <div class="form-group">
                 <select name="gender" id="" class="form-control">
                 <option value="M" name="gender">M</option>
                 <option value="F" name="gender">F</option>
                 </select>
                 <br>
                 <div class="form-group">
                    <input type="text"  name="province" class="form-control" placeholder="province">
                 </div class="form-group">
                 <div class="form-group">
                    <input type="email"  name="email" class="form-control" placeholder="email">
                 </div class="form-group">
                 <button type="submit" name="btn" class="btn-primary btn-sm float-right">Send</button>
                 </div>
               </form>
            </div>
        </div>
        <br>
        <hr>
      
           <?php  include "getsValue.php"; ?>
     

    </div>
    <?php include "footer.php"; ?>
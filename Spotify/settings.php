<?php 

	include("Includes/includedFiles.php");

 ?>


 <div class="entityInfo">
 	<div class="centerSection">
 		<div class="userInfo">
 			<h1><?php echo $username->getFirstnameAndLastname(); ?></h1>
 		</div>
 	</div>

 	<div class="buttonItems">
 		<button class="button" onclick="openPage('updateDetails.php')">USER DETAILS</button>
 		<button class="button" onclick="logout()">LOGOUT</button>
 	</div>
 </div>
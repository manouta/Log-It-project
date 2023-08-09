
<main>
	<div>
		<section>
			<?php
                 $selector=$_GET["selector"];
                 $validator=$_GET["validator"];
                 if(empty($section) || empty($validator)){
                 	echo "could not validate your request!";
                 }elseif (ctype_xdigit($selector)!==false && ctype_xdigit($validator)!==false) {
                 		?>
                            
                            <form action="reset-password.php" method="post">
                            	<input type="hidden" name="selector" value="<?php echo $selector ?>">
                            	<input type="hidden" name="validator" value="<?php echo $validator ?>">
                            	<input type="password" name="pwd" placeholder="enter a new password....">
                            	<input type="password" name="pwd-repeat" placeholder="repeat  new password....">
                            	<button type="submit" name="reset-password-submit">reset password</button>

                            </form>

                 		<?php

                 	}
                 

			?>
		</section>
	</div>
</main>
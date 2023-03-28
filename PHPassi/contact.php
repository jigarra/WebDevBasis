<?php
include("connect.php");
?>

<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Leave a Reply</h3>
					</div>
				</div>
				<form action="contact_code.php" method="post">
					<div class="row animate-box">
						<div class="col-md-12">
							<div class="row">
								<table style="width:100%">
								<tr>comment:
									<td><textarea name="comment"></textarea></td>
									</tr>
									<tr>
										<td>Name:</br><input type="text" class="form-control" name="cname" pattern="[a-zA-Z ]*$" required></td>
									</tr>
									<tr>
										<td>Email:</br><input type="text" class="form-control" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"></td>
									</tr>
									
									
									<tr><td>&nbsp;</td></tr>
									<tr>
										<td><input type="submit" value="Post Comment" style="background-color:lightblue"></td>
									</tr>
								</table>
								
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
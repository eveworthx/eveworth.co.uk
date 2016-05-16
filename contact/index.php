<?php

$title="Contact";

include '../includes/header.php';

if (isset($_GET["success"])) {

?>

<div class="alert alert-success" role="alert">
<strong>Well done!</strong> Contact form sent successfully!
</div>

<?php

} elseif (isset($_GET["error"])) {

?>

<div class="alert alert-danger" role="alert">
<strong>Error!</strong> Error in contact form
</div>


<?php

}

?>


			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form id="contact_form" class="form-horizontal" action="/contact/contact.php" method="POST">
						


						<div id="formgroupName" class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name</label>
				    		<div class="col-sm-10">
								<input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
								

								<span id="inputErrorNameGlyph" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
								<span id="inputErrorName" class="sr-only">(error)</span>

  								<span id="inputSuccessNameGlyph" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  								<span id="inputSuccessName" class="sr-only">(success)</span>


							</div>
						</div>



						<div id="formgroupEmail" class="form-group">
							<label for="inputEmail" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
								<span id="inputErrorEmailGlyph" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
								<span id="inputErrorEmail" class="sr-only">(error)</span>
								<span id="inputSuccessEmailGlyph" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  								<span id="inputSuccessEmail" class="sr-only">(success)</span>
							</div>
						</div>
						<div id="formgroupMessage" class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<textarea class="form-control" name="message" id="inputMessage" rows="3"></textarea>
								<span id="inputErrorMessageGlyph" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
								<span id="inputErrorMessage" class="sr-only">(error)</span>
  								<span id="inputSuccessMessageGlyph" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  								<span id="inputSuccessMessage" class="sr-only">(success)</span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="g-recaptcha" data-sitekey="6Lcs0xgTAAAAAIIHTLiKXMQgO0E-Wld_0lYrsOxa"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Contact Me</button>
							</div>
						</div>
					</form>
				</div>
			</div>


		</div>
	</body>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="/js/script.js"></script>
</html>

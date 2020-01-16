<!-- WEBDAK WEBSITE SOLUTIONS -->

<?php include 'header.php'; ?>

	<div class="kontakt-main">
		
		<div class="kontakt-okvir">
		
			<div class="kontakt-text">
			
				<h1>Kontakt</h1>
				
				<p>Tu smo za vas za sva pitanja i tako ta vrsta teksta zas stranicu ako hoces da imas uopste.</p>
				
			</div>
			
						<div class="form">
							
						  <div id="sendmessage">Vaša poruka je poslata. Hvala!</div>
						  <div id="errormessage"></div>
							
						  <form action="contactform/contactform.php" method="post" role="form" class="contactForm">
							  
							<div class="form-1red">
								
							  <div class="form-ime">
								<input type="text" name="name" class="form-control" id="name" placeholder="Ime" data-rule="minlen:4" data-msg="Molimo vas unesite najmanje 4 slova" />
								<div class="validation"></div>
							  </div>
								
							  <div class="form-prezime">
								<input type="text" name="surname" class="form-control" id="surname" placeholder="Prezime" data-rule="minlen:4" data-msg="Molimo vas unesite najmanje 4 slova" />
								<div class="validation"></div>
							  </div>
								
							</div>
							  
							<div class="form-email">
							  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Molimo vas unesite ispravan email" />
							  <div class="validation"></div>
							</div>
							  
							<div class="form-naslov">
								<input type="text" name="subject" class="form-control" id="subject" placeholder="Naslov" data-rule="minlen:4" data-msg="Molimo vas unesite najmanje 4 slova" />
								<div class="validation"></div>
						    </div>
							  
							<div class="form-poruka">
							  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Molimo vas unesite vašu poruku" placeholder="Poruka"></textarea>
							  <div class="validation"></div>
							</div>
							  
							<div class="text-center"><button type="submit">Pošalji</button></div>
							  
						  </form>
						</div>

		</div>
		
					<div class="info-kontakt-pozadina">
						<div class="info-kontakt">
							<a href="#"><h4>Address</h4><p>Svetozara Miletica 3<br>Stari grad<br>11000 Beograd</p></a>
							<a href="mailto:info@ecstatika.com"><h4>Email</h4><p>info@ecstatika.com</p></a>
							<a href="tel:00381113334445"><h4>Phone</h4><p>00381113334445</p></a>
						</div>
					</div>
		
	</div>
	
	

<?php include 'footer.php'; ?>
<div>
		
		<h1>debil napishi nam please</h1>
		
		<?php
	
		function header_inj($str) {
			return preg_match( "/[\r\n]/", $str );
		}

		$hostname = '{cpanel.freehosting.com:993}INBOX';
		$username = 'sevamashkovseva@gmail.com';
		$password = 'Devinbash1984';

		$inbox = imap_open($hostname, $username, $password);

		$emails = imap_search($inbox, "ALL");

		echo $emails;
		
		if (isset($_POST['dadas'])) {
			
			$imya = trim($_POST['imya']);
			$milo = trim($_POST['milo']);
			$posilka = $_POST['posilka'];

			if (header_inj($imya) || header_inj($milo)) {
				echo "<h3> wy u buly me w ur hackin oh i die...</h3>";
				die(); //umri suka
			}
			
			if (!$imya || !$milo || !$posilka) {
				echo '<h4>suka vse zapolni lol</h4><a href="contact.php"> tikai s gorodu suk</a>';
				die();
			}
			
			$poluchatel	= "sevamashkovseva@gmail.com";
			
			$tema = "$imya spamit prikazhite uebat";

			$posilka_dlya_admena = "imya: $imya\r\n";
			$posilka_dlya_admena .= "milo: $milo\r\n\r\n";
			$posilka_dlya_admena .= "skazanul:\r\n$posilka";
			
			if (isset($_POST['spam_vkl'])) {
			
				$posilka_dlya_admena .= "\r\n\r\nnoviy loh dlya spama\r\n";
				
			}
		
			$posilka_dlya_admena = wordwrap($posilka_dlya_admena, 72);
		
			mail($poluchatel, $tema, $posilka_dlya_admena);
		?>
		
		<h5>spasibo a teper ubeites</h5>
		<p><a href="/">sebites nazad umolyau</a></p>
		
		<?php
			} else {
		?>

		<form method="post" action="">
			<label for="imya">imya</label>
			<input type="text" id="imya" name="imya" required>
			
			<label for="milo">milo</label>
			<input type="email" id="milo" name="milo" required>
			
			<label for="posilka">posilka</label>
			<textarea id="posilka" name="posilka" required></textarea>
			
			<input type="checkbox" id="spam_vkl" name="spam_vkl"> <label for="spam_vkl">spam hochish?</label>
			
			<input type="submit" name="dadas" value="poehali">
		</form>
		
		<?php
			}
		?>

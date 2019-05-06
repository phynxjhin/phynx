<!DOCTYPE html>
<html>
	<head>
		<title>Layout 1</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="menu_top">
			<ul>
				<li><a href="#" title="Home" class="active">Home</a></li>
				<li><a href="#" title="Product">Product</a></li>
				<li><a href="#" title="Help">Help</a></li>
				<li><a href="#" title="Hotline">Hotline</a></li>
			</ul>
		</div>

		<div id="banner">
			<img src="images/ATN.png" />
		</div>

		<div id="main">
			<div id="left">
				<ul>
					<li>
						<img src="images/CaptainAmerica.jpg" />
						<h2>Captain American</h2>
						<?php

							echo "Captain America is a fictional superhero appearing in American comic books published by Marvel Comics. Created by cartoonists Joe Simon and Jack Kirby, the character first appeared in Captain America Comics #1 (cover dated March 1941) from Timely Comics, a predecessor of Marvel Comics. Captain America was designed as a patriotic supersoldier who often fought the Axis powers of World War II and was Timely Comics' most popular character during the wartime period. The popularity of superheroes waned following the war and the Captain America comic book was discontinued in 1950, with a short-lived revival in 1953. Since Marvel Comics revived the character in 1964, Captain America has remained in publication."
						?>
						<div class="grid__item small --one-whole pd-left5">
							<div class="product-actions clearfix">
								<button type="submit" name="ViewMore" id="ViewMore" class="btnViewMore">
									<span id="ViewMore">
										View More
									</span>
								</button>
								<button type="button" name="buy" id="buy now" class="btnBuyNow">Buy Now
								</button>
							</div>
						</div>
					</li>
					<li>
						<img src="images/Deadpool.jpg" />
						<h2>Deadpool</h2>

						Deadpool is a 2016 American superhero film based on the Marvel Comics character of the same name. Distributed by 20th Century Fox, it is the eighth installment of the X-Men film series and the first standalone Deadpool film. Directed by Tim Miller from a screenplay by Rhett Reese and Paul Wernick, the film stars Ryan Reynolds as Wade Wilson / Deadpool alongside Morena Baccarin, Ed Skrein, T. J. Miller, Gina Carano and Brianna Hildebrand. In the film, Wilson—as the antihero Deadpool—hunts down the man who gave him mutant abilities and caused his scarred physical appearance.
						<div class="grid__item small --one-whole pd-left5">
							<div class="product-actions clearfix">
								<button type="submit" name="ViewMore" id="ViewMore" class="ViewMore">
									<span id="ViewMore">
										View More
									</span>
								</button>
								<button type="button" name="buy" id="buy now" class="btnBuyNow">Buy Now
								</button>
							</div>
						</div>
					</li>
					<li>
						<img src="images/BlackWidow.jpg" />
						<h2>Black Widow</h2>

						Natalia Alianovna Romanova (Russian: Наталья Альяновна "Наташа" Романова; alias: Natasha Romanoff; Russian: Наташа Романофф), colloquial: Black Widow (Russian: Чёрная Вдова; transliterated Chyornaya Vdova) is a fictional superhero appearing in American comic books published by Marvel Comics. Created by editor and plotter Stan Lee, scripter Don Rico, and artist Don Heck, the character debuted in Tales of Suspense #52 (April 1964). The character was introduced as a Russian spy, an antagonist of the superhero Iron Man. She later defected to the United States, becoming an agent of the fictional spy agency S.H.I.E.L.D., and a member of the superhero team the Avengers.
						<div class="grid__item small --one-whole pd-left5">
							<div class="product-actions clearfix">
								<button type="submit" name="ViewMore" id="ViewMore" class="ViewMore">
									<span id="ViewMore">
										View More
									</span>
								</button>
								<button type="button" name="buy" id="buy now" class="btnBuyNow">Buy Now
								</button>
							</div>
						</div>
					</li>
					<li>
						<img src="images/Cyclops.jpg" />
						<h2>Cyclops</h2>

						Cyclops is a member of a subspecies of humans known as mutants, who are born with superhuman abilities. Cyclops can emit powerful beams of energy from his eyes. He cannot control the beams without the aid of special eyewear which he must wear at all times. He is typically considered the first of the X-Men,[1] a team of mutant heroes who fight for peace and equality between mutants and humans, and one of the team's primary leaders.
						<div class="grid__item small --one-whole pd-left5">
							<div class="product-actions clearfix">
								<button type="submit" name="ViewMore" id="ViewMore" class="ViewMore">
									<span id="ViewMore">
										View More
									</span>
								</button>
								<button type="button" name="buy" id="buy now" class="btnBuyNow">Buy Now
								</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div id="right">
				<div class="menu_right">
					<h3>Product Type List</h3>
					<ul>
						<li><a href="#">All</a></li>
						<li><a href="#">Avengers</a></li>
						<li><a href="#">Xmen</a></li>
						<li><a href="#">Venom</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">Footer</div>
	</body>
</html>
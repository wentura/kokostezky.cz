<div class="navigation flex justify-between min-h-36 md:min-h-64 min-w-full md:px-12">
	<div class="logo mx-auto md:mx-2">
		<a href="./">
			<picture>
				<source type="image/webp" srcset="./img/kokostezky-logo.webp">
				<source type="image/png" srcset="./img/kokostezky-logo.png">
				<img src="./img/kokostezky-logo.png" class="max-h-24 md:max-h-32 py-4 img-responsive" alt="Kokostezky">
			</picture>
		</a>
	</div>
	<div class="nav absolute md:relative">
		<div class="visible md:hidden align-middle" x-data="{showMenu : false}">
			<button @click.prevent="showMenu = !showMenu " class="px-2 py-4 flex justify-between">
				<svg x-show="!showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
					<path d="M4 6h16M4 12h16M4 18h16"></path>
				</svg>
				<svg x-show="showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
					<path d="M6 18L18 6M6 6l12 12"></path>
				</svg>
			</button>
			<div x-show="showMenu" class="mobil-menu">
				<div class="logo mx-auto bg-koko">
					<a href="./">
						<picture>
							<source type="image/webp" srcset="./img/kokostezky-logo.webp">
							<source type="image/png" srcset="./img/kokostezky-logo.png">
							<img src="./img/kokostezky-logo.png" class="max-h-24 md:max-h-32 py-4 img-responsive mx-auto">
						</picture>
					</a>
				</div>
				<nav class="flex flex-col z-10 border-b-8 border-y-koko">
					<?php
					foreach ($site_nav as $nav_name => $nav_value) {
						echo "<a href='?page=" . $nav_value . "' class='px-2 py-4 flex justify-between w-full border-b'>
						" . $nav_name . "
						<svg class='w-6 h-6' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'>
							<path d='M9 5l7 7-7 7'></path>
						</svg>
					</a>";
					}
					?>
				</nav>
			</div>
		</div>
		<ul class="space-x-3 self-center lg:font-bold md:space-x-8 hidden md:flex align-middle md:my-12 ">
			<?php
			foreach ($site_nav as $nav_name => $nav_value) {
				if ((isset($_GET["page"])) && $nav_value == $_GET["page"]) {
					echo "<li class='nav'><a href='?page=" . $nav_value . "' class='text-lg lg:text-xl hover:underline underline'>" . $nav_name . "</a></li>";
				} else {
					echo "<li class='nav'><a href='?page=" . $nav_value . "' class='text-lg lg:text-xl hover:underline'>" . $nav_name . "</a></li>";
				}
			}
			?>
		</ul>
	</div>
</div>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$is_front = is_front_page() || is_home();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js-na2.hs-scripts.com/242754142.js"></script>
	<!-- End of HubSpot Embed Code -->
</head>
<body <?php body_class( $is_front ? 'cases-home' : 'cases-page' ); ?>>
<?php wp_body_open(); ?>
<div class="site-page">
	<header class="site-header" id="site-header">
		<div class="site-header__inner">
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="CASES home">
				<span class="brand__mark">C</span>
				<span class="brand__text">
					<span class="brand__name">CASES</span>
					<span class="brand__meta" data-en="Ca Mau Seafood" data-vi="Ca Mau Seafood">Ca Mau Seafood</span>
				</span>
			</a>

			<button class="mobile-toggle" id="mobile-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav">
				<span class="mobile-toggle__icon">☰</span>
				<span class="mobile-toggle__label" data-en="Menu" data-vi="Menu">Menu</span>
			</button>

			<nav class="site-nav" aria-label="Primary navigation">
				<a href="#home" data-en="Home" data-vi="Trang chu">Home</a>
				<a href="#certifications" data-en="Certifications" data-vi="Chung nhan">Certifications</a>
				<a href="#reach" data-en="Global Reach" data-vi="Pham vi toan cau">Global Reach</a>
				<a href="#why" data-en="Why CASES" data-vi="Voi sao chon CASES">Why CASES</a>
				<a href="#contact" data-en="Contact" data-vi="Lien he">Contact</a>
			</nav>

			<div class="site-header__actions">
				<div class="lang-switch" role="group" aria-label="Language switch">
					<button type="button" class="lang-switch__button is-active" data-lang="en">EN</button>
					<button type="button" class="lang-switch__button" data-lang="vi">VI</button>
				</div>
				<a class="button button--primary" href="#contact" data-en="Request quote" data-vi="Yeu cau bao gia">Request quote</a>
			</div>
		</div>

		<div class="mobile-nav" id="mobile-nav" hidden>
			<a href="#home" data-en="Home" data-vi="Trang chu">Home</a>
			<a href="#certifications" data-en="Certifications" data-vi="Chung nhan">Certifications</a>
			<a href="#reach" data-en="Global Reach" data-vi="Pham vi toan cau">Global Reach</a>
			<a href="#why" data-en="Why CASES" data-vi="Voi sao chon CASES">Why CASES</a>
			<a href="#contact" data-en="Contact" data-vi="Lien he">Contact</a>
		</div>
	</header>

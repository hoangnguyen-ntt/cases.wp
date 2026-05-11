<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<footer class="footer">
		<div class="footer__inner">
			<p class="footer__brand">CASES</p>
			<p class="footer__text" data-en="Ca Mau Seafood Processing and Service Joint-Stock Corporation" data-vi="Cong ty co phan che bien va dich vu thuy san Ca Mau">Ca Mau Seafood Processing and Service Joint-Stock Corporation</p>
			<p class="footer__note"><?php echo esc_html( get_bloginfo( 'description' ) ? get_bloginfo( 'description' ) : 'Export landing page built from the prototype.' ); ?></p>
		</div>
	</footer>
</div>

<script>
(function () {
	var html = document.documentElement;
	var mobileToggle = document.getElementById('mobile-toggle');
	var mobileNav = document.getElementById('mobile-nav');
	var header = document.getElementById('site-header');
	var langButtons = Array.prototype.slice.call(document.querySelectorAll('.lang-switch__button'));
	var textNodes = Array.prototype.slice.call(document.querySelectorAll('[data-en][data-vi]'));
	var activeLang = 'en';

	function setLanguage(lang) {
		activeLang = lang;
		html.setAttribute('lang', lang);
		langButtons.forEach(function (button) {
			button.classList.toggle('is-active', button.getAttribute('data-lang') === lang);
		});
		textNodes.forEach(function (node) {
			var value = node.getAttribute('data-' + lang);
			if (value !== null) {
				node.textContent = value;
			}
		});
		try {
			window.localStorage.setItem('cases-lang', lang);
		} catch (error) {
		}
	}

	function syncHeader() {
		header.classList.toggle('is-scrolled', window.scrollY > 24);
	}

	function toggleMobileNav() {
		var open = mobileNav.hasAttribute('hidden');
		mobileNav.hidden = !open;
		mobileToggle.setAttribute('aria-expanded', String(open));
	}

	langButtons.forEach(function (button) {
		button.addEventListener('click', function () {
			setLanguage(button.getAttribute('data-lang'));
		});
	});

	mobileToggle.addEventListener('click', toggleMobileNav);
	window.addEventListener('scroll', syncHeader, { passive: true });
	window.addEventListener('keydown', function (event) {
		if (event.key === 'Escape' && !mobileNav.hasAttribute('hidden')) {
			mobileNav.hidden = true;
			mobileToggle.setAttribute('aria-expanded', 'false');
		}
	});

	try {
		var savedLang = window.localStorage.getItem('cases-lang');
		if (savedLang === 'vi' || savedLang === 'en') {
			activeLang = savedLang;
		}
	} catch (error) {
		activeLang = 'en';
	}

	setLanguage(activeLang);
	syncHeader();
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
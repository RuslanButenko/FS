<!DOCTYPE html>
<html lang="en">
	<head>
        @include('layout.head')
	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
                @include('layout.header')
			</header>
			<div role="main" class="main">
				@yield('content')
			</div>
			<footer id="footer" class="footer-texts-more-lighten">
                @include('layout.footer')
			</footer>
		</div>

		@include('layout.scripts')
	</body>
</html>

<footer class="bg-dark py-4">
	<div class="container">
		<div class="flex flex-wrap items-center justify-center md:justify-between gap-y-5">
			<div class="w-full md:w-fit">
				<p class="text-white font-raleway text-xs md:text-base text-center md:text-start">Copyright <?= date('Y') ?> <span class="px-3 lg:px-10">|</span> <?= $site ?> <span class="px-3 lg:px-10">|</span> All Rights Reserved</p>
			</div>
			<div class="w-fit">
				<a href="https://www.aiims.com.au/this-is-us/"><?= renderImg('aiims.png', 'logo') ?></a>
			</div>
		</div>
	</div>
</footer>

<a href="javascript:" id="return-to-top">
	<div class="flex justify-center items-center h-full w-full">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>

<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>
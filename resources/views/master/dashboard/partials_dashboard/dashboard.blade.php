@extends('master.dashboard.master_dashboard')

@section('konten')
<div class="row">
	<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">{{ __('Surat Masuk') }}</p>
							<h5 class="font-weight-bolder mb-0">
								$53,000
								<span class="text-success text-sm font-weight-bolder">+55%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">{{ __('Surat Keluar') }}</p>
							<h5 class="font-weight-bolder mb-0">
								2,300
								<span class="text-success text-sm font-weight-bolder">+3%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-send text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">{{ __('Surat Baru') }}</p>
							<h5 class="font-weight-bolder mb-0">
								+3,462
								<span class="text-danger text-sm font-weight-bolder">-2%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-bell-55 text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-8">
						<div class="numbers">
							<p class="text-sm mb-0 text-capitalize font-weight-bold">{{ __('Jumlah Surat') }}</p>
							<h5 class="font-weight-bolder mb-0">
								$103,430
								<span class="text-success text-sm font-weight-bolder">+5%</span>
							</h5>
						</div>
					</div>
					<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
							<i class="ni ni-books text-lg opacity-10" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mt-4">
	<div class="col-lg-7 mb-lg-0 mb-4">
		<div class="card">
			<div class="card-body p-3">
				<div class="row">
					<div class="col-lg-6">
						<div class="d-flex flex-column h-100">
							<p class="mb-1 pt-2 text-bold">C.F.A | Soft UI - Creative Tim</p>
							<h5 class="font-weight-bolder">StaffMin Lanal Semarang</h5>
							<p class="mb-5">Arsiparis Lanal Semarang menyediakan ruang untuk berbagai surat dengan
								penyimpanan yang terstruktur.</p>
							{{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
								href="javascript:;">
								Read More
								<i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
							</a> --}}
						</div>
					</div>
					<div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
						<div class="border-radius-lg h-100">

							{{-- <img src="{{ asset('master/dashboard/template/assets/img/shapes/waves-white.svg') }}"
								class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves"> --}}
							<div class="position-relative d-flex align-items-center justify-content-center h-100">
								<svg class="animated" id="freepik_stories-recommendation-letter"
									xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
									xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
									<style>
										svg#freepik_stories-recommendation-letter:not(.animated) .animable {
											opacity: 0;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--Floor--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--Shadows--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--Plants--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--Envelope--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--Letter--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--speech-bubble-2--inject-74 {
											animation: 0.7s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--speech-bubble-1--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
											animation-delay: 0s;
										}

										svg#freepik_stories-recommendation-letter.animated #freepik--Character--inject-74 {
											animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
											animation-delay: 0s;
										}

										@keyframes lightSpeedRight {
											from {
												transform: translate3d(50%, 0, 0) skewX(-20deg);
												opacity: 0;
											}

											60% {
												transform: skewX(10deg);
												opacity: 1;
											}

											80% {
												transform: skewX(-2deg);
											}

											to {
												opacity: 1;
												transform: translate3d(0, 0, 0);
											}
										}

										@keyframes slideLeft {
											0% {
												opacity: 0;
												transform: translateX(-30px);
											}

											100% {
												opacity: 1;
												transform: translateX(0);
											}
										}

										@keyframes fadeIn {
											0% {
												opacity: 0;
											}

											100% {
												opacity: 1;
											}
										}

										@keyframes slideRight {
											0% {
												opacity: 0;
												transform: translateX(30px);
											}

											100% {
												opacity: 1;
												transform: translateX(0);
											}
										}

										@keyframes slideUp {
											0% {
												opacity: 0;
												transform: translateY(30px);
											}

											100% {
												opacity: 1;
												transform: inherit;
											}
										}
									</style>
									<g id="freepik--Floor--inject-74" class="animable"
										style="transform-origin: 249.998px 339.32px;">
										<path id="freepik--floor--inject-74"
											d="M85.35,434.38c-90.94-52.5-90.94-137.62,0-190.12s238.37-52.5,329.3,0,90.94,137.62,0,190.12S176.28,486.88,85.35,434.38Z"
											style="fill: rgb(250, 250, 250); transform-origin: 249.998px 339.32px;"
											class="animable"></path>
									</g>
									<g id="freepik--Shadows--inject-74" class="animable"
										style="transform-origin: 253.516px 355.839px;">
										<ellipse id="freepik--Shadow--inject-74" cx="398.74" cy="407.72" rx="59.4"
											ry="34.29"
											style="fill: rgb(235, 235, 235); transform-origin: 398.74px 407.72px;"
											class="animable"></ellipse>
										<ellipse id="freepik--shadow--inject-74" cx="461.79" cy="415.69" rx="20.56"
											ry="11.87"
											style="fill: rgb(235, 235, 235); transform-origin: 461.79px 415.69px;"
											class="animable"></ellipse>
										<path id="freepik--shadow--inject-74"
											d="M53.63,414.41l-27.2-15.7c-2.33-1.35-2.33-3.53,0-4.88L239.74,270.68a9.3,9.3,0,0,1,8.44,0l27.2,15.7c2.33,1.35,2.33,3.53,0,4.88L62.07,414.41A9.36,9.36,0,0,1,53.63,414.41Z"
											style="fill: rgb(235, 235, 235); transform-origin: 150.905px 342.541px;"
											class="animable"></path>
										<path id="freepik--shadow--inject-74"
											d="M176.38,435,97.71,389.56c-2.33-1.34-2.33-3.53,0-4.87l197.47-114a9.3,9.3,0,0,1,8.44,0l78.67,45.42c2.33,1.35,2.33,3.53,0,4.88L184.82,435A9.3,9.3,0,0,1,176.38,435Z"
											style="fill: rgb(235, 235, 235); transform-origin: 240px 352.845px;"
											class="animable"></path>
									</g>
									<g id="freepik--Plants--inject-74" class="animable"
										style="transform-origin: 187.129px 321.232px;">
										<g id="freepik--plants--inject-74" class="animable"
											style="transform-origin: 32.4676px 360.521px;">
											<path
												d="M52.8,394.44c5.26-25.3-2.1-42.81-8-53.65s-18.68-21.9-27.67-20.51c-8.37,1.29-9.36,11.8-1,20.37s26.35,24.8,28.45,37.42l1.09,11.08Z"
												style="fill: #CB0C9F; transform-origin: 32.4676px 357.301px;"
												id="el3hry06cb483" class="animable"></path>
											<g id="elz6khhh7nkxf">
												<path
													d="M52.8,394.44c5.26-25.3-2.1-42.81-8-53.65s-18.68-21.9-27.67-20.51c-8.37,1.29-9.36,11.8-1,20.37s26.35,24.8,28.45,37.42l1.09,11.08Z"
													style="opacity: 0.15; transform-origin: 32.4676px 357.301px;"
													class="animable" id="elvw12gpmpa8"></path>
											</g>
											<path
												d="M49.22,382.88a.54.54,0,0,1-.42-.51c-1-25.82-18-49.38-29.42-55.79a.54.54,0,1,1,.53-.95c11.63,6.54,29,30.49,30,56.7a.55.55,0,0,1-.53.56Z"
												style="fill: rgb(255, 255, 255); transform-origin: 34.5053px 354.225px;"
												id="elrccu356i91" class="animable"></path>
											<path
												d="M53.89,398.4a6,6,0,0,1-9.12-2,39.51,39.51,0,0,0-8-10.59c-7.87-7.8-18.73-12.68-20.49-18-2.12-6.36,3.74-11,12.77-8.17,7.9,2.44,23,13.29,24.85,38.73Z"
												style="fill: #CB0C9F; transform-origin: 34.8728px 379.255px;"
												id="elfuvz51rr8i" class="animable"></path>
											<path
												d="M50.69,400.86a.54.54,0,0,1-.4-.43c-3.84-22.75-18.81-33.17-26.19-35.5a.54.54,0,0,1-.36-.68.52.52,0,0,1,.68-.35c8.16,2.57,23,13.13,26.94,36.35a.54.54,0,0,1-.44.62A.44.44,0,0,1,50.69,400.86Z"
												style="fill: rgb(255, 255, 255); transform-origin: 37.5411px 382.375px;"
												id="elfuan62zkg7s" class="animable"></path>
										</g>
										<g id="freepik--plants--inject-74" class="animable"
											style="transform-origin: 350.694px 270.097px;">
											<path
												d="M339,295.68s-4.29-18.75,1.47-37.64c3.21-10.55,9.75-15.7,13.89-16.37,4.64-.75,9.59,3.42,5.81,10.46-3.6,6.7-11.06,9.73-14.63,26.89a69.19,69.19,0,0,0-1.46,19.59Z"
												style="fill: #CB0C9F; transform-origin: 349.487px 270.097px;"
												id="el1av1pgmy55y" class="animable"></path>
											<g id="eldxb600fhx">
												<path
													d="M339,295.68s-4.29-18.75,1.47-37.64c3.21-10.55,9.75-15.7,13.89-16.37,4.64-.75,9.59,3.42,5.81,10.46-3.6,6.7-11.06,9.73-14.63,26.89a69.19,69.19,0,0,0-1.46,19.59Z"
													style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 349.487px 270.097px;"
													class="animable" id="eld02qmxcui1d"></path>
											</g>
											<path
												d="M341.56,290.75a.28.28,0,0,0,.24-.33c-3.09-20.61,6-38.45,13.41-44.53a.3.3,0,0,0,0-.41.29.29,0,0,0-.41,0c-7.54,6.18-16.75,24.24-13.62,45.07A.31.31,0,0,0,341.56,290.75Z"
												style="fill: rgb(255, 255, 255); transform-origin: 347.922px 268.079px;"
												id="el14vgtnfy5u" class="animable"></path>
											<path
												d="M344.07,298.61c.44-4.8,2.77-10.74,8.15-16.21s12.91-10.61,11.54-15.17-7.46-3.31-11.65-.57-13.42,13.63-10.68,30.42Z"
												style="fill: #CB0C9F; transform-origin: 352.427px 281.406px;"
												id="el46tprb8zpvt" class="animable"></path>
											<g id="elta3ajswa5eg">
												<path
													d="M344.07,298.61c.44-4.8,2.77-10.74,8.15-16.21s12.91-10.61,11.54-15.17-7.46-3.31-11.65-.57-13.42,13.63-10.68,30.42Z"
													style="fill: rgb(255, 255, 255); opacity: 0.65; transform-origin: 352.427px 281.406px;"
													class="animable" id="el5mcfhrpp6jc"></path>
											</g>
											<path
												d="M342.56,292.43a.29.29,0,0,0,.25-.28c.32-10.11,11.32-23.28,16.58-25.46a.29.29,0,1,0-.22-.54c-5.52,2.29-16.62,15.47-16.94,26a.28.28,0,0,0,.28.3Z"
												style="fill: rgb(255, 255, 255); transform-origin: 350.901px 279.289px;"
												id="elzeyqht3wxw" class="animable"></path>
										</g>
									</g>
									<g id="freepik--Envelope--inject-74" class="animable"
										style="transform-origin: 159.58px 237.394px;">
										<g id="freepik--open-envelope--inject-74" class="animable"
											style="transform-origin: 159.58px 237.394px;">
											<path
												d="M48.44,238.58l209.93-121.2,8.41,4.84a8.78,8.78,0,0,1,3.94,6.85V283.93a8.75,8.75,0,0,1-3.94,6.84l-202,116.65a8.71,8.71,0,0,1-7.89,0l-4.45-2.57a8.73,8.73,0,0,1-4-6.84Z"
												style="fill: #CB0C9F; transform-origin: 159.58px 262.872px;"
												id="ele2l0jt9p0m" class="animable"></path>
											<g id="elfz1rcnk1r1b">
												<path
													d="M48.44,238.58l209.93-121.2,8.41,4.84a8.78,8.78,0,0,1,3.94,6.85V283.93a8.75,8.75,0,0,1-3.94,6.84l-202,116.65a8.71,8.71,0,0,1-7.89,0l-4.45-2.57a8.73,8.73,0,0,1-4-6.84Z"
													style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 159.58px 262.872px;"
													class="animable" id="ellbu7cu3prun"></path>
											</g>
											<path
												d="M257.22,103.76l.85-.47-3.26-1.89h0A6.13,6.13,0,0,0,254,101l-92.4-34.24A6.34,6.34,0,0,0,154.46,69L51.1,219.94a17.91,17.91,0,0,0-2.67,8.62c0,4.31,0,10,0,10l3.2,1.86L258.37,117.38v-10A6.78,6.78,0,0,0,257.22,103.76Z"
												style="fill: #CB0C9F; transform-origin: 153.4px 153.422px;"
												id="elaxdevf4u0in" class="animable"></path>
											<g id="eluexh9o9">
												<path
													d="M158.74,69.74a5,5,0,0,0-1.07,1.13L54.3,221.8a16.2,16.2,0,0,0-1.92,4.31l-3.21-1.86A21.33,21.33,0,0,1,50,222a.11.11,0,0,1,0-.06c.14-.32.28-.61.44-.91a1.09,1.09,0,0,1,.08-.15,7.83,7.83,0,0,1,.55-.91L154.45,69a7.91,7.91,0,0,1,.52-.63l.56-.5Z"
													style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 103.955px 146.99px;"
													class="animable" id="el3vxxw4yrfp3"></path>
											</g>
											<g id="eldjt81g4erjd">
												<path
													d="M258,103.28a5.11,5.11,0,0,0-.88-.43L164.75,68.6a6.32,6.32,0,0,0-6,1.14l-3.21-1.86a6.37,6.37,0,0,1,6-1.13L254,101a4.32,4.32,0,0,1,.86.43Z"
													style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 206.77px 84.8596px;"
													class="animable" id="elv9c579jwp6"></path>
											</g>
											<path
												d="M157.66,70.87,54.31,221.8a17.8,17.8,0,0,0-2.67,8.62v10L261.58,119.23v-10a7.26,7.26,0,0,0-4.43-6.36L164.76,68.61A6.35,6.35,0,0,0,157.66,70.87Z"
												style="fill: #CB0C9F; transform-origin: 156.61px 154.355px;"
												id="ela4tdndwq4fl" class="animable"></path>
											<g id="el4v62no5m92c">
												<path
													d="M157.66,70.87,54.31,221.8a17.8,17.8,0,0,0-2.67,8.62v10L261.58,119.23v-10a7.26,7.26,0,0,0-4.43-6.36L164.76,68.61A6.35,6.35,0,0,0,157.66,70.87Z"
													style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 156.61px 154.355px;"
													class="animable" id="elykge3cztx1k"></path>
											</g>
											<polygon
												points="54.73 238.6 80.08 223.71 105.48 208.9 156.35 179.42 207.33 150.12 232.86 135.53 258.43 121.03 233.08 135.93 207.69 150.73 156.81 180.22 105.83 209.51 80.31 224.1 54.73 238.6"
												style="fill: #CB0C9F; transform-origin: 156.58px 179.815px;"
												id="elnokad9tyiks" class="animable"></polygon>
											<path
												d="M270.65,128.08h0c-.19-1.14-.79-1.45-1.56-.92a4.56,4.56,0,0,0-1,1l-.44.62L181.3,260.07l-12.89,18a7.39,7.39,0,0,1-7.1,2.66L150.18,278,65.23,246.77a4.25,4.25,0,0,0-1.73-.06,3,3,0,0,0-.65.2l3.21-1.85,81.44,29.85,10.72,3.82a7.28,7.28,0,0,0,7.1-2.66l12.89-17.94L265,126.27a3.31,3.31,0,0,1,1-.9L258.44,121l3.15-1.81,5.19,3A9,9,0,0,1,270.65,128.08Z"
												style="fill: #CB0C9F; transform-origin: 166.75px 200.02px;"
												id="elnutakvoomid" class="animable"></path>
											<path
												d="M265.4,286a2,2,0,0,1-.22.31l-87.49-27.74a15.06,15.06,0,0,0-18.9,5.82l-93.53,139-3.46,2h0a2.84,2.84,0,0,1-2.68.3l96.19-143.29a15.11,15.11,0,0,1,18.92-5.83Z"
												style="fill: #CB0C9F; transform-origin: 162.26px 330.59px;"
												id="el8lebwiw1hfh" class="animable"></path>
											<g id="el2006km1h2m8">
												<path
													d="M266.77,122.21l-5.19-3L258.43,121l7.51,4.33,0,0h0a3.5,3.5,0,0,0-1,.9L178.35,257.92l-.44.63.58.19,3,1,86.1-130.9.44-.62a4.7,4.7,0,0,1,1-1c.77-.54,1.37-.22,1.56.91h0A9.07,9.07,0,0,0,266.77,122.21Z"
													style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 224.25px 189.475px;"
													class="animable" id="elbno5jfn18s"></path>
											</g>
											<path
												d="M67,249.28l-18.52-10.7V398a8.73,8.73,0,0,0,4,6.84l4.45,2.57a8.71,8.71,0,0,0,7.89,0L67,406.14Z"
												style="fill: #CB0C9F; transform-origin: 57.74px 323.467px;"
												id="elppd54xlknf" class="animable"></path>
											<g id="elzjfi8eqbcy">
												<path
													d="M67,249.28l-18.52-10.7V398a8.73,8.73,0,0,0,4,6.84l4.45,2.57a8.71,8.71,0,0,0,7.89,0L67,406.14Z"
													style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 57.74px 323.467px;"
													class="animable" id="elwhsws8p3o5"></path>
											</g>
											<path
												d="M270.73,129.07V283.93a8,8,0,0,1-1.23,4,8.59,8.59,0,0,1-2.31,2.6l-.16.07a2,2,0,0,1-.25.18l-202,116.63a2.86,2.86,0,0,1-2.72.33,2.39,2.39,0,0,1-1.18-1.89,5.27,5.27,0,0,1-.05-.71V250.26a3.43,3.43,0,0,1,4.44-3.49l85,31.27,11.13,2.65a7.39,7.39,0,0,0,7.1-2.66l12.89-18,86.33-131.25.44-.62C269.53,126.17,270.73,126.55,270.73,129.07Z"
												style="fill: #CB0C9F; transform-origin: 165.777px 267.416px;"
												id="el5zrrvi2z0ji" class="animable"></path>
											<g id="elsbxy3qxuuq">
												<path
													d="M270.73,129.07V283.93a8,8,0,0,1-1.23,4,8.59,8.59,0,0,1-2.31,2.6l-.16.07a2,2,0,0,1-.25.18l-202,116.63a2.86,2.86,0,0,1-2.72.33,2.39,2.39,0,0,1-1.18-1.89,5.27,5.27,0,0,1-.05-.71V250.26a3.43,3.43,0,0,1,4.44-3.49l85,31.27,11.13,2.65a7.39,7.39,0,0,0,7.1-2.66l12.89-18,86.33-131.25.44-.62C269.53,126.17,270.73,126.55,270.73,129.07Z"
													style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 165.777px 267.416px;"
													class="animable" id="el3odi17o1q28"></path>
											</g>
											<path
												d="M265.05,286.51l-87.14-28a15.37,15.37,0,0,0-19.13,5.84l-3.46-2c4-6.35,11-8.72,19.12-6.11Z"
												style="fill: #CB0C9F; transform-origin: 210.185px 270.853px;"
												id="el8pfxxwknzs" class="animable"></path>
											<g id="el4y9fjenglil">
												<path
													d="M265.05,286.51l-87.14-28a15.37,15.37,0,0,0-19.13,5.84l-3.46-2c4-6.35,11-8.72,19.12-6.11Z"
													style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 210.185px 270.853px;"
													class="animable" id="elvwqz6n2oane"></path>
											</g>
											<g id="el8sbjeenz80y">
												<path
													d="M266.78,290.78l.26-.17.15-.09a8.51,8.51,0,0,0,2.31-2.58,8,8,0,0,0,1.22-3.94L181.3,260.07l59.88,45.48Z"
													style="fill: #CB0C9F; opacity: 0.3; transform-origin: 226.01px 282.81px;"
													class="animable" id="elhnzyk86y7t"></path>
											</g>
											<path
												d="M269.5,287.94a8.51,8.51,0,0,1-2.31,2.58l-.15.09L64.74,407.42h0a2.84,2.84,0,0,1-2.69.31l96.75-143.39a15.2,15.2,0,0,1,19-5.84Z"
												style="fill: #CB0C9F; transform-origin: 165.775px 332.574px;"
												id="elcl22i0cr4sn" class="animable"></path>
											<g id="elntlpjkyx51">
												<path
													d="M269.5,287.94a8.51,8.51,0,0,1-2.31,2.58h0L64.91,407.33l-.2.1a2.84,2.84,0,0,1-2.69.31l96.75-143.39a15.2,15.2,0,0,1,19-5.84Z"
													style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 165.76px 332.584px;"
													class="animable" id="elng7qnos6ra"></path>
											</g>
											<g id="eldfd0hadg60c">
												<path
													d="M49.17,224.25l3.21,1.86a16,16,0,0,0-.74,4.31v10l-3.21-1.85v-10A16,16,0,0,1,49.17,224.25Z"
													style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 50.405px 232.335px;"
													class="animable" id="el2iyxqd7abm8"></path>
											</g>
											<polygon
												points="66.06 245.06 62.85 246.91 59.61 245.04 51.63 240.44 54.73 238.6 66.06 245.06"
												style="fill: #CB0C9F; transform-origin: 58.845px 242.755px;"
												id="el4f50009z5c" class="animable"></polygon>
											<g id="el1zhskdr1d9j">
												<path
													d="M66.2,245.12,54.73,238.6l-3.1,1.84,8,4.6,3.24,1.87,0,0a3.22,3.22,0,0,1,.6-.19,4.3,4.3,0,0,1,1.74.06l6.45,2.38,74.18,27.31,1.13-1.73Z"
													style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 99.3px 257.535px;"
													class="animable" id="elctaiv9p5cmr"></path>
											</g>
											<path
												d="M158.75,264.37,62,407.73a2.71,2.71,0,0,1-1.23-2.59v-2.58l94.5-140.14a.09.09,0,0,1,0-.05Z"
												style="fill: #CB0C9F; transform-origin: 109.751px 335.05px;"
												id="el9uj6hyombec" class="animable"></path>
											<g id="elozcezr1lfw">
												<path
													d="M158.75,264.37,62,407.73a2.71,2.71,0,0,1-1.23-2.59v-2.58l94.5-140.14a.09.09,0,0,1,0-.05Z"
													style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 109.751px 335.05px;"
													class="animable" id="elybvm9msrur"></path>
											</g>
										</g>
									</g>
									<g id="freepik--Letter--inject-74" class="animable"
										style="transform-origin: 253.99px 224.7px;">
										<g id="freepik--letter--inject-74" class="animable"
											style="transform-origin: 253.99px 224.7px;">
											<g id="freepik--Sheet--inject-74" class="animable"
												style="transform-origin: 253.99px 224.7px;">
												<path
													d="M369.72,314.24v4.82L182.06,427.4,180,426.2a83.68,83.68,0,0,1-41.71-72.26V130.32L325.91,22l4.18,2.41V245.6A79.29,79.29,0,0,0,369.72,314.24Z"
													style="fill: rgb(240, 240, 240); transform-origin: 254.005px 224.7px;"
													id="el9gdl2w6fsih" class="animable"></path>
												<path
													d="M182.06,422a79,79,0,0,1-39.16-68.1V133L329.63,25.2V245.6a80,80,0,0,0,39.17,68.63Z"
													style="fill: rgb(250, 250, 250); transform-origin: 255.85px 223.6px;"
													id="eledwh5cguwip" class="animable"></path>
												<path
													d="M329.17,26V245.6a80.41,80.41,0,0,0,38.72,68.63L182.06,421.51a78.59,78.59,0,0,1-38.7-67.57V133.27L329.17,26m.92-1.6L142.44,132.74v221.2a79.27,79.27,0,0,0,39.62,68.64L369.72,314.24a79.29,79.29,0,0,1-39.63-68.64V24.4Z"
													style="fill: rgb(224, 224, 224); transform-origin: 256.08px 223.49px;"
													id="ele78b4qt7afp" class="animable"></path>
												<path
													d="M142.44,353.94V132.74l-4.18-2.42V353.94A83.68,83.68,0,0,0,180,426.2l2.09,1.2v-4.82A79.27,79.27,0,0,1,142.44,353.94Z"
													style="fill: rgb(224, 224, 224); transform-origin: 160.175px 278.86px;"
													id="elrwkmytbsgym" class="animable"></path>
												<g id="elojls77cx22i">
													<polygon
														points="182.06 422.57 182.06 427.4 369.72 319.06 369.72 314.24 182.06 422.57"
														style="opacity: 0.15; transform-origin: 275.89px 370.82px;"
														class="animable" id="eljfocrkv23q"></polygon>
												</g>
											</g>
											<path
												d="M211.14,166.24a.17.17,0,0,1,.23,0,.41.41,0,0,1,.1.31v1.34a.86.86,0,0,1-.1.41.58.58,0,0,1-.23.29l-5.38,3.11a.18.18,0,0,1-.24,0,.41.41,0,0,1-.09-.3V159.17a1.06,1.06,0,0,1,.09-.42.72.72,0,0,1,.24-.29l1-.57a.18.18,0,0,1,.24,0,.41.41,0,0,1,.09.3v10.37Z"
												style="fill: rgb(69, 90, 100); transform-origin: 208.45px 164.795px;"
												id="elznj5ox18sb" class="animable"></path>
											<path
												d="M218.38,162.06a.18.18,0,0,1,.23,0,.41.41,0,0,1,.1.31v1.34a.92.92,0,0,1-.1.42.55.55,0,0,1-.23.28l-5.4,3.12a.18.18,0,0,1-.23,0,.38.38,0,0,1-.1-.3V155a.92.92,0,0,1,.1-.42.63.63,0,0,1,.23-.29l5.3-3.06a.18.18,0,0,1,.23,0,.39.39,0,0,1,.1.3v1.35a.86.86,0,0,1-.1.41.58.58,0,0,1-.23.29l-4,2.29v3l3.7-2.14a.18.18,0,0,1,.23,0,.38.38,0,0,1,.1.3v1.35a.88.88,0,0,1-.1.41.58.58,0,0,1-.23.29l-3.7,2.14v3.14Z"
												style="fill: rgb(69, 90, 100); transform-origin: 215.68px 159.38px;"
												id="el13dnlq74cpg" class="animable"></path>
											<path
												d="M226,146.8a.17.17,0,0,1,.23,0,.38.38,0,0,1,.1.3v1.34a.92.92,0,0,1-.1.42.55.55,0,0,1-.23.28l-2.21,1.28v10.37a.92.92,0,0,1-.1.42.61.61,0,0,1-.23.28l-1,.58a.17.17,0,0,1-.23,0,.38.38,0,0,1-.1-.3V151.4l-2.21,1.28a.19.19,0,0,1-.24,0,.41.41,0,0,1-.09-.3V151a1.06,1.06,0,0,1,.09-.42.65.65,0,0,1,.24-.29Z"
												style="fill: rgb(69, 90, 100); transform-origin: 222.96px 154.435px;"
												id="el0dp0hg3lo9q" class="animable"></path>
											<path
												d="M233.25,142.59a.18.18,0,0,1,.23,0,.38.38,0,0,1,.1.3v1.35a.91.91,0,0,1-.1.41.58.58,0,0,1-.23.29L231,146.23V156.6a1.07,1.07,0,0,1-.1.42.65.65,0,0,1-.24.29l-1,.57a.17.17,0,0,1-.23,0,.38.38,0,0,1-.1-.3V147.19l-2.21,1.28a.18.18,0,0,1-.24,0,.41.41,0,0,1-.1-.3v-1.34a1.07,1.07,0,0,1,.1-.42.65.65,0,0,1,.24-.29Z"
												style="fill: rgb(69, 90, 100); transform-origin: 230.181px 150.237px;"
												id="els0jdk6qnbyj" class="animable"></path>
											<path
												d="M240.54,149.26a.18.18,0,0,1,.23,0,.39.39,0,0,1,.1.3v1.35a.88.88,0,0,1-.1.41.64.64,0,0,1-.23.29l-5.4,3.11a.17.17,0,0,1-.23,0,.39.39,0,0,1-.1-.3V142.2a.88.88,0,0,1,.1-.41.58.58,0,0,1,.23-.29l5.3-3.06a.17.17,0,0,1,.23,0,.38.38,0,0,1,.1.3v1.34a.92.92,0,0,1-.1.42.63.63,0,0,1-.23.29l-4,2.29v3l3.7-2.14a.18.18,0,0,1,.23,0,.38.38,0,0,1,.1.3v1.34a.92.92,0,0,1-.1.42.63.63,0,0,1-.23.29l-3.7,2.13v3.14Z"
												style="fill: rgb(69, 90, 100); transform-origin: 237.84px 146.58px;"
												id="el4jjetuz84eg" class="animable"></path>
											<path
												d="M245.89,135.29c1-.59,1.81-.67,2.34-.25a3.25,3.25,0,0,1,.8,2.59,8.12,8.12,0,0,1-.41,2.59,6.68,6.68,0,0,1-1.21,2.15l1.69,3.69a.41.41,0,0,1,0,.19.88.88,0,0,1-.08.34.5.5,0,0,1-.19.23l-1.05.6q-.24.15-.36,0a.57.57,0,0,1-.16-.23l-1.62-3.48-1.63.94v4.41a.92.92,0,0,1-.1.42.55.55,0,0,1-.23.28l-1,.58a.18.18,0,0,1-.23,0,.38.38,0,0,1-.1-.3V137.83a.92.92,0,0,1,.1-.42.7.7,0,0,1,.23-.29Zm-1.84,7,1.78-1a3.27,3.27,0,0,0,1.12-1,2.94,2.94,0,0,0,.42-1.68c0-.7-.14-1.1-.42-1.17a1.53,1.53,0,0,0-1.12.28l-1.78,1Z"
												style="fill: rgb(69, 90, 100); transform-origin: 245.729px 142.579px;"
												id="ely5nafd1il9i" class="animable"></path>
											<path
												d="M253.13,136.05a13,13,0,0,1,.27-2.15,9,9,0,0,1,.67-2,7.87,7.87,0,0,1,1.1-1.74,6.07,6.07,0,0,1,1.58-1.31,3,3,0,0,1,1.56-.51,1.56,1.56,0,0,1,1.1.46,2.89,2.89,0,0,1,.68,1.24,8,8,0,0,1,.27,1.85c0,.23,0,.49,0,.78v1.8c0,.29,0,.56,0,.81a11.93,11.93,0,0,1-.27,2.14,9.38,9.38,0,0,1-.66,2,7.66,7.66,0,0,1-1.12,1.73,6.11,6.11,0,0,1-1.56,1.3,3.14,3.14,0,0,1-1.58.51,1.55,1.55,0,0,1-1.1-.45,2.67,2.67,0,0,1-.67-1.24,8.21,8.21,0,0,1-.27-1.84c0-.24,0-.5,0-.79v-1.79C253.12,136.56,253.12,136.3,253.13,136.05Zm5.57-3.12a2.42,2.42,0,0,0-.57-1.78c-.35-.3-.81-.28-1.38,0a3.53,3.53,0,0,0-1.39,1.55,5.81,5.81,0,0,0-.57,2.44c0,.49,0,1,0,1.61s0,1.12,0,1.59a2.41,2.41,0,0,0,.57,1.77c.35.29.81.27,1.39-.06a3.66,3.66,0,0,0,1.38-1.54,5.72,5.72,0,0,0,.57-2.43c0-.49,0-1,0-1.61S258.72,133.4,258.7,132.93Z"
												style="fill: rgb(69, 90, 100); transform-origin: 256.741px 135.65px;"
												id="elrksu81drsz" class="animable"></path>
											<path
												d="M267.56,122.78a.18.18,0,0,1,.23,0,.38.38,0,0,1,.1.3v1.34a.92.92,0,0,1-.1.42.58.58,0,0,1-.23.29l-3.92,2.26v3.67l3.67-2.12a.18.18,0,0,1,.24,0,.41.41,0,0,1,.1.3v1.34a1.07,1.07,0,0,1-.1.42.72.72,0,0,1-.24.29l-3.67,2.12v4.33a.92.92,0,0,1-.1.42.55.55,0,0,1-.23.28l-1,.58a.18.18,0,0,1-.23,0,.38.38,0,0,1-.1-.3V126.52a.92.92,0,0,1,.1-.42.58.58,0,0,1,.23-.29Z"
												style="fill: rgb(69, 90, 100); transform-origin: 264.935px 130.9px;"
												id="elu8ma1hybs2i" class="animable"></path>
											<path
												d="M184.13,194.69c1-.59,1.81-.68,2.34-.26a3.25,3.25,0,0,1,.8,2.59,8.08,8.08,0,0,1-.41,2.59,6.43,6.43,0,0,1-1.22,2.15l1.7,3.69a.46.46,0,0,1,0,.19.81.81,0,0,1-.08.34.57.57,0,0,1-.19.23l-1.05.61q-.24.13-.36,0a.89.89,0,0,1-.17-.24l-1.6-3.48-1.64,1v4.4a.92.92,0,0,1-.1.42.63.63,0,0,1-.23.29l-1,.57a.17.17,0,0,1-.23,0,.38.38,0,0,1-.1-.3V197.22a.92.92,0,0,1,.1-.42.61.61,0,0,1,.23-.28Zm-1.84,7,1.78-1a3.35,3.35,0,0,0,1.12-1,3,3,0,0,0,.42-1.68c0-.71-.14-1.1-.42-1.18a1.54,1.54,0,0,0-1.12.29l-1.78,1Z"
												style="fill: rgb(69, 90, 100); transform-origin: 183.969px 201.997px;"
												id="elucvkud5ygx" class="animable"></path>
											<path
												d="M194.59,199.53a.19.19,0,0,1,.24,0,.46.46,0,0,1,.09.31v1.34a1.06,1.06,0,0,1-.09.42.62.62,0,0,1-.24.28L189.2,205a.19.19,0,0,1-.24,0,.41.41,0,0,1-.1-.3V192.47a1.07,1.07,0,0,1,.1-.42.72.72,0,0,1,.24-.29l5.29-3.06a.19.19,0,0,1,.24,0,.43.43,0,0,1,.1.3v1.35a1,1,0,0,1-.1.41.65.65,0,0,1-.24.29l-4,2.29v3l3.7-2.14a.19.19,0,0,1,.24,0,.43.43,0,0,1,.1.3v1.35a1,1,0,0,1-.1.41.65.65,0,0,1-.24.29l-3.7,2.14v3.14Z"
												style="fill: rgb(69, 90, 100); transform-origin: 191.89px 196.85px;"
												id="eltet4nl9q7tl" class="animable"></path>
											<path
												d="M201.66,193.61a1,1,0,0,1,.13-.44.62.62,0,0,1,.22-.25l1-.58a.21.21,0,0,1,.24,0,.36.36,0,0,1,.09.32,9.07,9.07,0,0,1-.25,1.7,7.85,7.85,0,0,1-.66,1.78,8.07,8.07,0,0,1-1.12,1.66,5.94,5.94,0,0,1-1.63,1.34,3,3,0,0,1-1.5.48,1.62,1.62,0,0,1-1.11-.44,2.81,2.81,0,0,1-.7-1.25,7.44,7.44,0,0,1-.3-1.92c0-.47,0-1,0-1.58s0-1.11,0-1.6a12.16,12.16,0,0,1,.3-2.27,10.28,10.28,0,0,1,.7-2.07,8.45,8.45,0,0,1,1.11-1.72,5.81,5.81,0,0,1,1.5-1.25,3.27,3.27,0,0,1,1.63-.54,1.66,1.66,0,0,1,1.12.37,2.14,2.14,0,0,1,.66,1,5.33,5.33,0,0,1,.25,1.4.8.8,0,0,1-.09.42.62.62,0,0,1-.24.28l-1,.58a.24.24,0,0,1-.23,0,.35.35,0,0,1-.13-.29,2.08,2.08,0,0,0-.18-.64.93.93,0,0,0-1-.56,2,2,0,0,0-.83.31,3,3,0,0,0-.84.71,4.34,4.34,0,0,0-.59,1,5.45,5.45,0,0,0-.37,1.12,6.16,6.16,0,0,0-.15,1.2c0,.49,0,1,0,1.61s0,1.1,0,1.57a4,4,0,0,0,.15,1,1.63,1.63,0,0,0,.37.68.87.87,0,0,0,.59.26,1.53,1.53,0,0,0,.84-.25,3.4,3.4,0,0,0,.83-.66,4.46,4.46,0,0,0,.6-.81,4.34,4.34,0,0,0,.38-.86A4.47,4.47,0,0,0,201.66,193.61Z"
												style="fill: rgb(69, 90, 100); transform-origin: 199.709px 192.299px;"
												id="el1cnzcjx8xogi" class="animable"></path>
											<path
												d="M204.49,187.87a11.92,11.92,0,0,1,.26-2.14,8.87,8.87,0,0,1,.67-2,7.29,7.29,0,0,1,1.11-1.73,5.72,5.72,0,0,1,1.57-1.32,3.16,3.16,0,0,1,1.56-.5,1.52,1.52,0,0,1,1.1.46,2.75,2.75,0,0,1,.68,1.23,7.15,7.15,0,0,1,.27,1.85c0,.24,0,.5,0,.79s0,.58,0,.89,0,.61,0,.9,0,.57,0,.81a12,12,0,0,1-.26,2.15,9.49,9.49,0,0,1-.67,2,8,8,0,0,1-1.11,1.73,5.77,5.77,0,0,1-1.57,1.3,3.14,3.14,0,0,1-1.57.51,1.51,1.51,0,0,1-1.11-.44,2.71,2.71,0,0,1-.67-1.25,7.62,7.62,0,0,1-.26-1.84c0-.23,0-.49,0-.78s0-.59,0-.9,0-.61,0-.9S204.48,188.12,204.49,187.87Zm5.56-3.11a2.44,2.44,0,0,0-.57-1.79,1.13,1.13,0,0,0-1.38.06,3.42,3.42,0,0,0-1.38,1.54,6,6,0,0,0-.58,2.44c0,.49,0,1,0,1.61s0,1.12,0,1.59a2.41,2.41,0,0,0,.58,1.77q.51.44,1.38-.06a3.54,3.54,0,0,0,1.38-1.54,5.72,5.72,0,0,0,.57-2.43c0-.49,0-1,0-1.61S210.07,185.22,210.05,184.76Z"
												style="fill: rgb(69, 90, 100); transform-origin: 208.098px 187.49px;"
												id="el2gmpwtp9jku" class="animable"></path>
											<path
												d="M217.36,182.26l2.34-7.6c0-.08.09-.21.17-.39a.75.75,0,0,1,.36-.42l.83-.49a.19.19,0,0,1,.24,0,.43.43,0,0,1,.09.3v12.23a1,1,0,0,1-.09.41.65.65,0,0,1-.24.29l-1,.57a.18.18,0,0,1-.24,0,.46.46,0,0,1-.09-.31v-7.39l-1.6,5.18a4,4,0,0,1-.17.41.7.7,0,0,1-.29.32l-.64.37a.21.21,0,0,1-.28,0,.68.68,0,0,1-.17-.21l-1.6-3.33v7.39a.92.92,0,0,1-.1.42.63.63,0,0,1-.23.29l-1,.57a.18.18,0,0,1-.24,0,.41.41,0,0,1-.1-.3V178.34a1.07,1.07,0,0,1,.1-.42.57.57,0,0,1,.24-.28l.83-.49q.24-.14.36,0l.17.21Z"
												style="fill: rgb(69, 90, 100); transform-origin: 217.35px 182.117px;"
												id="eloitnshlm83h" class="animable"></path>
											<path
												d="M227.34,176.49l2.34-7.59.17-.4a.76.76,0,0,1,.36-.41l.83-.49a.19.19,0,0,1,.24,0,.41.41,0,0,1,.09.3v12.23a1,1,0,0,1-.09.41.65.65,0,0,1-.24.29l-1,.57a.19.19,0,0,1-.24,0,.46.46,0,0,1-.09-.31v-7.4l-1.6,5.19a4,4,0,0,1-.17.41.76.76,0,0,1-.29.32L227,180a.21.21,0,0,1-.28,0,.68.68,0,0,1-.17-.21l-1.6-3.34v7.4a.92.92,0,0,1-.1.42.55.55,0,0,1-.23.28l-1,.58a.17.17,0,0,1-.23,0,.41.41,0,0,1-.1-.3V172.58a1.07,1.07,0,0,1,.1-.42.7.7,0,0,1,.23-.29l.84-.48q.24-.13.36,0a1.73,1.73,0,0,1,.17.21Z"
												style="fill: rgb(69, 90, 100); transform-origin: 227.33px 176.366px;"
												id="el5hk1akcasw4" class="animable"></path>
											<path
												d="M239,173.88a.18.18,0,0,1,.23,0,.41.41,0,0,1,.1.31v1.34a.92.92,0,0,1-.1.42.55.55,0,0,1-.23.28l-5.4,3.12a.17.17,0,0,1-.23,0,.38.38,0,0,1-.1-.3V166.82a.92.92,0,0,1,.1-.42.7.7,0,0,1,.23-.29l5.3-3.05a.17.17,0,0,1,.23,0,.4.4,0,0,1,.1.3v1.35a.86.86,0,0,1-.1.41.58.58,0,0,1-.23.29l-4,2.29v3l3.7-2.13a.17.17,0,0,1,.23,0,.4.4,0,0,1,.1.3v1.35a.88.88,0,0,1-.1.41.58.58,0,0,1-.23.29l-3.7,2.14v3.14Z"
												style="fill: rgb(69, 90, 100); transform-origin: 236.3px 171.205px;"
												id="el0nokbt08098j" class="animable"></path>
											<path
												d="M246.45,172c-.14.08-.24.09-.32,0l-.16-.18-3.44-5.88v7.79a.92.92,0,0,1-.1.42.63.63,0,0,1-.23.29l-1,.57a.18.18,0,0,1-.24,0,.41.41,0,0,1-.1-.3V162.44a1.07,1.07,0,0,1,.1-.42.57.57,0,0,1,.24-.28l.86-.5c.14-.08.24-.09.32,0l.16.18,3.44,5.88v-7.79a1.06,1.06,0,0,1,.09-.42.72.72,0,0,1,.24-.29l1-.57a.18.18,0,0,1,.24,0,.41.41,0,0,1,.09.3v12.22a1.06,1.06,0,0,1-.09.42.62.62,0,0,1-.24.28Z"
												style="fill: rgb(69, 90, 100); transform-origin: 244.25px 166.62px;"
												id="elxn848qno9np" class="animable"></path>
											<path
												d="M252.93,155a3.48,3.48,0,0,1,1.58-.55,1.52,1.52,0,0,1,1.12.41,2.71,2.71,0,0,1,.69,1.25,8.9,8.9,0,0,1,.28,2c0,.91,0,1.85,0,2.8a14.16,14.16,0,0,1-.28,2.32,9.06,9.06,0,0,1-.69,2,6.93,6.93,0,0,1-1.1,1.69,6.07,6.07,0,0,1-1.54,1.26l-3.1,1.78a.17.17,0,0,1-.23,0,.46.46,0,0,1-.1-.31V157.42a1,1,0,0,1,.1-.41.64.64,0,0,1,.23-.29Zm2,4.05a4.37,4.37,0,0,0-.16-1,1.43,1.43,0,0,0-.38-.69.88.88,0,0,0-.63-.24,1.82,1.82,0,0,0-.91.31l-1.65.95v8.51l1.71-1a3.25,3.25,0,0,0,.87-.73,4.09,4.09,0,0,0,.62-1,4.91,4.91,0,0,0,.37-1.12,7.15,7.15,0,0,0,.16-1.22C255,160.87,255,159.94,255,159Z"
												style="fill: rgb(69, 90, 100); transform-origin: 253.08px 162.226px;"
												id="elecwea0io399" class="animable"></path>
											<path
												d="M262.07,149.69c.13-.08.23-.08.3,0a1,1,0,0,1,.17.38l3,10.22a.49.49,0,0,1,0,.13,1,1,0,0,1-.09.41.65.65,0,0,1-.24.29l-.88.51c-.17.09-.28.11-.35,0a.56.56,0,0,1-.13-.24l-.53-1.79-3.88,2.24-.53,2.41a2.36,2.36,0,0,1-.14.39.83.83,0,0,1-.34.36l-.89.51a.18.18,0,0,1-.23,0,.38.38,0,0,1-.1-.3c0-.05,0-.1,0-.14l3-13.7a2.13,2.13,0,0,1,.17-.58.67.67,0,0,1,.29-.33Zm.68,7.91L261.4,153l-1.35,6.17Z"
												style="fill: rgb(69, 90, 100); transform-origin: 261.376px 157.591px;"
												id="ely8g5lmmrkcj" class="animable"></path>
											<path
												d="M271.54,144.22a.18.18,0,0,1,.23,0,.43.43,0,0,1,.1.3v1.35a1,1,0,0,1-.1.41.64.64,0,0,1-.23.29l-2.22,1.28v10.37a1,1,0,0,1-.09.41.65.65,0,0,1-.24.29l-1,.57a.19.19,0,0,1-.24,0,.46.46,0,0,1-.09-.31V148.82l-2.22,1.28a.18.18,0,0,1-.23,0,.41.41,0,0,1-.1-.31v-1.34a.92.92,0,0,1,.1-.42.55.55,0,0,1,.23-.28Z"
												style="fill: rgb(69, 90, 100); transform-origin: 268.489px 151.856px;"
												id="el10qita2cykv" class="animable"></path>
											<path
												d="M273.43,156.38a.18.18,0,0,1-.23,0,.38.38,0,0,1-.1-.3V143.84a.92.92,0,0,1,.1-.42.58.58,0,0,1,.23-.29l1-.57a.19.19,0,0,1,.24,0,.46.46,0,0,1,.1.31V155.1a1.07,1.07,0,0,1-.1.42.62.62,0,0,1-.24.28Z"
												style="fill: rgb(69, 90, 100); transform-origin: 273.934px 149.469px;"
												id="elds3taer1i65" class="animable"></path>
											<path
												d="M276.38,146.37a12,12,0,0,1,.26-2.15,9.77,9.77,0,0,1,.67-2,7.85,7.85,0,0,1,1.11-1.73,5.72,5.72,0,0,1,1.57-1.32,3.16,3.16,0,0,1,1.56-.5,1.56,1.56,0,0,1,1.11.46,2.88,2.88,0,0,1,.67,1.24,7,7,0,0,1,.27,1.84c0,.24,0,.5,0,.79s0,.59,0,.89,0,.61,0,.91,0,.56,0,.8a12,12,0,0,1-.26,2.15,9.77,9.77,0,0,1-.67,2,7.56,7.56,0,0,1-1.11,1.72,6,6,0,0,1-1.57,1.31,3.14,3.14,0,0,1-1.57.51,1.57,1.57,0,0,1-1.11-.45,2.76,2.76,0,0,1-.67-1.24,7.7,7.7,0,0,1-.26-1.84c0-.24,0-.5,0-.79s0-.59,0-.9,0-.6,0-.9S276.37,146.61,276.38,146.37Zm5.56-3.12a2.42,2.42,0,0,0-.57-1.78c-.35-.3-.81-.28-1.38.05a3.6,3.6,0,0,0-1.38,1.54,5.84,5.84,0,0,0-.57,2.44q0,.74,0,1.62c0,.58,0,1.11,0,1.58a2.37,2.37,0,0,0,.57,1.77q.52.43,1.38-.06a3.57,3.57,0,0,0,1.38-1.53,5.8,5.8,0,0,0,.57-2.43q0-.73,0-1.62C282,144.25,282,143.72,281.94,143.25Z"
												style="fill: rgb(69, 90, 100); transform-origin: 279.988px 145.98px;"
												id="el47wrquq311c" class="animable"></path>
											<path
												d="M290.81,146.34c-.14.08-.25.09-.32,0a.79.79,0,0,1-.16-.18l-3.44-5.88v7.8a1,1,0,0,1-.1.41.65.65,0,0,1-.24.29l-1,.57a.18.18,0,0,1-.24,0,.46.46,0,0,1-.09-.31V136.83a1,1,0,0,1,.09-.41.65.65,0,0,1,.24-.29l.86-.5c.14-.08.24-.08.32,0l.16.17,3.44,5.89v-7.8a.92.92,0,0,1,.1-.42.55.55,0,0,1,.23-.28l1-.58a.18.18,0,0,1,.23,0,.41.41,0,0,1,.1.3v12.22a1.07,1.07,0,0,1-.1.42.64.64,0,0,1-.23.29Z"
												style="fill: rgb(69, 90, 100); transform-origin: 288.605px 140.982px;"
												id="el28ujnz8mcsa" class="animable"></path>
											<g id="freepik--Text--inject-74" class="animable"
												style="transform-origin: 294.01px 80.7022px;">
												<path
													d="M271.62,82.8,316.4,56.94c1.11-.63,2-.18,2,1a4.29,4.29,0,0,1-2,3.32L271.62,87.14c-1.11.63-2,.18-2-1A4.3,4.3,0,0,1,271.62,82.8Z"
													style="fill: rgb(224, 224, 224); transform-origin: 294.01px 72.04px;"
													id="elhon1ogqkj0b" class="animable"></path>
												<path
													d="M271.62,100.14,316.4,74.28c1.11-.64,2-.19,2,1a4.27,4.27,0,0,1-2,3.32l-44.78,25.86c-1.11.64-2,.18-2-1A4.27,4.27,0,0,1,271.62,100.14Z"
													style="fill: rgb(224, 224, 224); transform-origin: 294.01px 89.369px;"
													id="el13wy8jordqj" class="animable"></path>
												<path
													d="M288.38,81.79l28-16.18c1.11-.64,2-.19,2,1a4.25,4.25,0,0,1-2,3.32l-28,16.18c-1.11.64-2,.19-2-1A4.29,4.29,0,0,1,288.38,81.79Z"
													style="fill: rgb(224, 224, 224); transform-origin: 302.38px 75.86px;"
													id="eljquv2m920ch" class="animable"></path>
											</g>
											<g id="freepik--text--inject-74" class="animable"
												style="transform-origin: 239.907px 261.777px;">
												<path
													d="M164.53,237.19l146.37-84.5c1.1-.64,2-.18,2,1a4.28,4.28,0,0,1-2,3.32L164.53,241.53c-1.1.64-2,.18-2-1A4.31,4.31,0,0,1,164.53,237.19Z"
													style="fill: rgb(224, 224, 224); transform-origin: 237.715px 197.11px;"
													id="elj1b2jkcxykd" class="animable"></path>
												<path
													d="M164.53,245.86l146.37-84.5c1.1-.64,2-.19,2,1a4.3,4.3,0,0,1-2,3.32L164.53,250.2c-1.1.63-2,.18-2-1A4.31,4.31,0,0,1,164.53,245.86Z"
													style="fill: rgb(224, 224, 224); transform-origin: 237.715px 205.777px;"
													id="elwx1361zs59" class="animable"></path>
												<path
													d="M164.53,254.53,310.9,170c1.1-.63,2-.18,2,1a4.31,4.31,0,0,1-2,3.32l-146.37,84.5c-1.1.64-2,.19-2-1A4.3,4.3,0,0,1,164.53,254.53Z"
													style="fill: rgb(224, 224, 224); transform-origin: 237.715px 214.413px;"
													id="el5tep5g0o22s" class="animable"></path>
												<path
													d="M164.53,263.2,310.9,178.69c1.1-.64,2-.18,2,1a4.31,4.31,0,0,1-2,3.33l-146.37,84.5c-1.1.64-2,.18-2-1A4.28,4.28,0,0,1,164.53,263.2Z"
													style="fill: rgb(224, 224, 224); transform-origin: 237.715px 223.105px;"
													id="elez3gcdvrccl" class="animable"></path>
												<path
													d="M313.46,281.23,170.28,363.89a1.45,1.45,0,0,1-2.19-.83l-.05-.14a2.4,2.4,0,0,1,1.06-2.68l143.17-82.67a1.42,1.42,0,0,1,2.15.84l0,.15A2.35,2.35,0,0,1,313.46,281.23Z"
													style="fill: rgb(224, 224, 224); transform-origin: 241.241px 320.733px;"
													id="eldjhdlf41xu" class="animable"></path>
												<path
													d="M316.3,288.24,173.13,370.91a1.63,1.63,0,0,1-2.36-.76l0-.08a2.16,2.16,0,0,1,.89-2.63L314.8,284.78a1.59,1.59,0,0,1,2.31.78l0,.08A2.08,2.08,0,0,1,316.3,288.24Z"
													style="fill: rgb(224, 224, 224); transform-origin: 243.953px 327.85px;"
													id="eli3k6wvl7tgn" class="animable"></path>
												<path
													d="M164.53,324a.43.43,0,0,1-.25-.07.51.51,0,0,1-.26-.44V306.53a.51.51,0,0,1,.26-.44l14.54-8.4a.51.51,0,0,1,.76.45v16.91a.52.52,0,0,1-.25.44l-14.54,8.39A.48.48,0,0,1,164.53,324Zm.51-17.12v15.73l13.52-7.81V299Z"
													style="fill: rgb(69, 90, 100); transform-origin: 171.8px 310.812px;"
													id="elf4i00q0fyf" class="animable"></path>
												<path
													d="M186.06,295.25v1.17c0,.63.44.89,1,.57l49.25-28.43a2.17,2.17,0,0,0,1-1.72v-1.17c0-.63-.44-.89-1-.57l-49.25,28.43A2.2,2.2,0,0,0,186.06,295.25Z"
													style="fill: rgb(224, 224, 224); transform-origin: 211.685px 281.045px;"
													id="elox6ubgsejr" class="animable"></path>
												<path
													d="M186.06,302.62v1.16c0,.64.44.89,1,.58l122-70.44a2.2,2.2,0,0,0,1-1.72V231c0-.64-.44-.89-1-.58l-122,70.45A2.17,2.17,0,0,0,186.06,302.62Z"
													style="fill: rgb(224, 224, 224); transform-origin: 248.06px 267.39px;"
													id="elt156qdzhl2" class="animable"></path>
												<path
													d="M186.06,309.62v1.17c0,.64.44.89,1,.58l122-70.45a2.17,2.17,0,0,0,1-1.72V238c0-.63-.44-.89-1-.57l-122,70.44A2.2,2.2,0,0,0,186.06,309.62Z"
													style="fill: rgb(224, 224, 224); transform-origin: 248.06px 274.398px;"
													id="elik9aeouney" class="animable"></path>
												<polygon
													points="171.62 316.05 168.24 312.79 169.37 310.39 171.29 312.25 179.63 294.61 181.09 296.01 171.62 316.05"
													style="fill: #CB0C9F; transform-origin: 174.665px 305.33px;"
													id="elq5nltza4jnm" class="animable"></polygon>
												<path
													d="M164.53,350a.51.51,0,0,1-.25-.06.52.52,0,0,1-.26-.45V332.53a.51.51,0,0,1,.26-.44l14.54-8.39a.52.52,0,0,1,.51,0,.5.5,0,0,1,.25.44v16.91a.52.52,0,0,1-.25.44l-14.54,8.4A.58.58,0,0,1,164.53,350Zm.51-17.12v15.73l13.52-7.81V325Z"
													style="fill: rgb(69, 90, 100); transform-origin: 171.8px 336.817px;"
													id="elk9ccmy6hijc" class="animable"></path>
												<path
													d="M186.06,321.25v1.17c0,.63.44.89,1,.57l49.25-28.43a2.17,2.17,0,0,0,1-1.72v-1.17c0-.63-.44-.89-1-.57l-49.25,28.43A2.2,2.2,0,0,0,186.06,321.25Z"
													style="fill: rgb(224, 224, 224); transform-origin: 211.685px 307.045px;"
													id="elrb39e50u1l" class="animable"></path>
												<path
													d="M186.06,328.62v1.16c0,.64.44.89,1,.58l122-70.44a2.2,2.2,0,0,0,1-1.72V257c0-.64-.44-.89-1-.58l-122,70.45A2.17,2.17,0,0,0,186.06,328.62Z"
													style="fill: rgb(224, 224, 224); transform-origin: 248.06px 293.39px;"
													id="el6asw0tjll1" class="animable"></path>
												<path
													d="M186.06,335.63v1.16c0,.64.44.89,1,.58l122-70.44a2.2,2.2,0,0,0,1-1.72V264c0-.64-.44-.89-1-.58l-122,70.45A2.17,2.17,0,0,0,186.06,335.63Z"
													style="fill: rgb(224, 224, 224); transform-origin: 248.06px 300.395px;"
													id="elkuu1etqj5bp" class="animable"></path>
												<polygon
													points="171.62 342.05 168.24 338.79 169.37 336.4 171.29 338.25 179.63 320.61 181.09 322.01 171.62 342.05"
													style="fill: #CB0C9F; transform-origin: 174.665px 331.33px;"
													id="elvibvcn4i4ur" class="animable"></polygon>
												<path
													d="M164.53,298a.43.43,0,0,1-.25-.07.51.51,0,0,1-.26-.44V280.53a.51.51,0,0,1,.26-.44l14.54-8.4a.51.51,0,0,1,.76.45v16.91a.52.52,0,0,1-.25.44l-14.54,8.39A.48.48,0,0,1,164.53,298Zm.51-17.12v15.73l13.52-7.81V273Z"
													style="fill: rgb(69, 90, 100); transform-origin: 171.8px 284.812px;"
													id="el6kq8axk0kag" class="animable"></path>
												<path
													d="M186.06,269.25v1.17c0,.63.44.89,1,.57l49.25-28.43a2.2,2.2,0,0,0,1-1.72v-1.17c0-.63-.44-.89-1-.57l-49.25,28.43A2.2,2.2,0,0,0,186.06,269.25Z"
													style="fill: rgb(224, 224, 224); transform-origin: 211.685px 255.045px;"
													id="eldhkch7bg5wk" class="animable"></path>
												<path
													d="M186.06,276.61v1.17c0,.63.44.89,1,.57l122-70.44a2.17,2.17,0,0,0,1-1.72V205c0-.63-.44-.89-1-.57l-122,70.44A2.2,2.2,0,0,0,186.06,276.61Z"
													style="fill: rgb(224, 224, 224); transform-origin: 248.06px 241.39px;"
													id="el006urlneeb71r" class="animable"></path>
												<path
													d="M186.06,283.62v1.17c0,.63.44.89,1,.57l122-70.44a2.17,2.17,0,0,0,1-1.72V212c0-.63-.44-.89-1-.57l-122,70.44A2.2,2.2,0,0,0,186.06,283.62Z"
													style="fill: rgb(224, 224, 224); transform-origin: 248.06px 248.395px;"
													id="elol1agxqjcs" class="animable"></path>
												<polygon
													points="171.62 290.05 168.24 286.79 169.37 284.39 171.29 286.25 179.63 268.61 181.09 270.01 171.62 290.05"
													style="fill: #CB0C9F; transform-origin: 174.665px 279.33px;"
													id="el61kkqexnjre" class="animable"></polygon>
											</g>
											<g id="freepik--Sign--inject-74" class="animable"
												style="transform-origin: 296.007px 324.426px;">
												<path
													d="M260,343.19a23.15,23.15,0,0,0,8.24-6.22c1.86-2.31,3.74-5.16,4-8.19a3.94,3.94,0,0,0-.64-2.82,2,2,0,0,0-2.55-.29,8.21,8.21,0,0,0-3.14,3.74,14.36,14.36,0,0,0-1.57,6.22,15.35,15.35,0,0,0,1.12,5.83,5.18,5.18,0,0,0,2.71,3.09,6.54,6.54,0,0,0,8.2-2.81,19.26,19.26,0,0,0,1.9-11.05c-.23-1.24-1.14-2.66-2.59-2a2.63,2.63,0,0,0-1.17,1.35,13.59,13.59,0,0,0-.91,2.79c-.7,3.11-.34,8.17,3.5,9.07a4,4,0,0,0,4-1.87,9.11,9.11,0,0,0,1.52-5.41,9.51,9.51,0,0,0-.66-3c-.23-.6-.91-.2-.71.35.34,1,.25,2,.65,3a5.5,5.5,0,0,0,.78,1.4c.64.79,2,1.42,2.88.58.71-.68.61-1.9.48-2.79a11.79,11.79,0,0,0-.69-2.54l-.56.54a4.08,4.08,0,0,0,2,1.65,1.35,1.35,0,0,0,1.8-1.48H288c.3,1.22,1.92.44,2.66.14a2.27,2.27,0,0,0,1.35-3.09l-.31.66a2.61,2.61,0,0,0,2.69-1.36,3.26,3.26,0,0,0,.12-2.63,4.27,4.27,0,0,0-2.18-2.32c-.93-.4-1.85-.24-2.07.83a6.28,6.28,0,0,0,1.27,5.41,4.29,4.29,0,0,0,2.62,1.71,2.94,2.94,0,0,0,2.65-1.6,5.58,5.58,0,0,0,.69-3.23A13.11,13.11,0,0,0,297,324a4.25,4.25,0,0,0-1.62-2.32c-.66-.46-1.83-.84-2.32.06s.47,1.86,1,2.48a23,23,0,0,0,2.7,2.52c1,.85,2.08,1.66,3,2.59s2,2,1.73,3.26a3.47,3.47,0,0,1-2.39,2.24,4.81,4.81,0,0,1-2.12.31,1.43,1.43,0,0,1-.35-.06c-.29-.1-.33-.1-.18-.37a3.71,3.71,0,0,1,.59-.66,20.5,20.5,0,0,1,7.44-4.5c.46-.17.23-1.19-.21-1a23.82,23.82,0,0,0-5.87,3.07,15.48,15.48,0,0,0-2.16,1.89c-.54.58-1,1.42-.42,2.15a2.61,2.61,0,0,0,2.42.52A5.74,5.74,0,0,0,301,335a3.38,3.38,0,0,0,.87-4.3c-1-2-3-3.33-4.66-4.7a27.11,27.11,0,0,1-2.45-2.22c-.36-.38-.64-.81-1-1.2-.14-.16-.15-.15.08-.27a1.13,1.13,0,0,1,.93.08c1.71.82,1.94,3.12,2,4.8a4,4,0,0,1-1.12,3,2,2,0,0,1-1.79.56,3.5,3.5,0,0,1-1.4-.85,4.92,4.92,0,0,1-1.66-2.76,5.36,5.36,0,0,1-.07-1.44c0-.6.09-1.3.85-1.23A3.09,3.09,0,0,1,294,326.8a2,2,0,0,1-2.32,2.27c-.34,0-.4.41-.3.66.37.88-.26,1.45-1,1.77a8.74,8.74,0,0,1-1,.34,2.56,2.56,0,0,1-.46.11,2.64,2.64,0,0,0-.29,0c-.23.09-.12-.29,0,.22-.11-.46-.75-.61-.69,0,.08.92-1.12.68-1.61.35a4.61,4.61,0,0,1-1-1c-.4-.51-.73.11-.57.53a10.32,10.32,0,0,1,.5,1.7,3,3,0,0,1-.07,2.18c-.58.8-1.76.09-2.16-.53-.72-1.11-.56-2.41-1-3.62l-.76.21a7.75,7.75,0,0,1,0,5.47,5.35,5.35,0,0,1-2.48,3.14,3.27,3.27,0,0,1-4.18-1.87,8.6,8.6,0,0,1-.45-4.47,12.42,12.42,0,0,1,.73-2.88,3.55,3.55,0,0,1,.74-1.38,1.1,1.1,0,0,1,1.55-.09,2.84,2.84,0,0,1,.42,1.51,18.21,18.21,0,0,1-.22,4.66,12.58,12.58,0,0,1-1.68,5.06,6,6,0,0,1-7.12,2.63,4.27,4.27,0,0,1-2.58-2.65,14.32,14.32,0,0,1-1.08-5,13.3,13.3,0,0,1,1.23-5.72,9.09,9.09,0,0,1,2.65-3.67c.64-.44,1.66-.89,2.33-.28a2.69,2.69,0,0,1,.62,2.08c-.12,2.78-1.83,5.43-3.43,7.6a23.21,23.21,0,0,1-5.74,5.31c-.86.58-1.73,1.14-2.62,1.68,0,0,0,.09,0,.07Z"
													style="fill: rgb(69, 90, 100); transform-origin: 282.346px 333.122px;"
													id="el2r0nuu0q8bn" class="animable"></path>
												<path
													d="M302.39,326.36c1.33-1.37,2.95-3,2.94-5.07a3.06,3.06,0,0,0-.86-2.25,1.48,1.48,0,0,0-2.13.57,3.77,3.77,0,0,0,.39,4.73c1.37,1.21,3.63.57,4.69-.73a4.46,4.46,0,0,0,.92-2.48,6.88,6.88,0,0,0,0-3.16c-.18-.52-.72-.25-.62.24a3.43,3.43,0,0,0,1.12,2.13,2.36,2.36,0,0,0,3-.15,3.08,3.08,0,0,0,1-2.48,5.15,5.15,0,0,0-.78-2.2l-.39.49c.87,1,1.88,1.81,3.11.75a3.05,3.05,0,0,0,.87-1.59,10.29,10.29,0,0,0,.47-2.46c.07-3.07-1.83-6-4-8-.54-.49-1.74-1.54-2.17-.36a4.39,4.39,0,0,0,.24,2.65c.23.74.49,1.48.78,2.2a24.93,24.93,0,0,0,5.71,8.32,2.17,2.17,0,0,0,2.13.83,2,2,0,0,0,1.35-1.48,9.49,9.49,0,0,0,0-2.26c0-1.14,0-2.28,0-3.42l-.54.35c.88.82,1.72,1.72,2.65,2.47a1.21,1.21,0,0,0,1.79-.09,1.42,1.42,0,0,0,.25-.91c0-.3-.19-.58.15-.75s1.11.22,1.58.24a1.68,1.68,0,0,0,1.08-.32c.75-.54.56-1.21.48-2s.85-1,1.44-1.2c1.12-.36,2.64-.51,3-1.81.1-.37-.36-.9-.5-.38-.1.34-1.08.6-1.37.7-.56.19-1.13.34-1.69.55a3.11,3.11,0,0,0-1.33.79,1.39,1.39,0,0,0-.32.87c0,.38.25.9.12,1.24-.38,1-1.72.2-2.39.23a1.08,1.08,0,0,0-1.06,1.06c0,.23.11.52.06.74-.13.56-.79.3-1.07.09a33.44,33.44,0,0,1-2.54-2.37c-.28-.27-.55,0-.54.36.06,1.37,0,2.75.07,4.12a2.7,2.7,0,0,1-.17,1.57,1.26,1.26,0,0,1-1.86.37,15.9,15.9,0,0,1-2.82-3,23.71,23.71,0,0,1-2.13-3.29,23.37,23.37,0,0,1-1.47-3.45,4.82,4.82,0,0,1-.45-2.26c.12-.5.64,0,.87.21a11.65,11.65,0,0,1,3.64,5.1,7.25,7.25,0,0,1-.07,4.49,1.8,1.8,0,0,1-1.44,1.48c-.66.07-1.15-.52-1.54-1s-.52.23-.39.49a6,6,0,0,1,.7,1.42,2.17,2.17,0,0,1-3.06,2.29,2.13,2.13,0,0,1-.88-1.53l-.63.23a6.06,6.06,0,0,1-.08,2.54,3.57,3.57,0,0,1-.79,2c-1,1.13-3.42,1.7-4.22.07a2.58,2.58,0,0,1,.32-2.72c.32-.39.9-.7,1.32-.25a2,2,0,0,1,.4,1.23,4.57,4.57,0,0,1-.84,2.32,22.43,22.43,0,0,1-1.68,2.32c-.13.15,0,.72.22.5Z"
													style="fill: rgb(69, 90, 100); transform-origin: 316.869px 315.08px;"
													id="eldpn01a1hdet" class="animable"></path>
											</g>
											<g id="freepik--Photo--inject-74" class="animable"
												style="transform-origin: 177.67px 147.88px;">
												<g id="elayjskoob30n">
													<ellipse cx="177.67" cy="147.88" rx="23.88" ry="13.79"
														style="fill: rgb(69, 90, 100); transform-origin: 177.67px 147.88px; transform: rotate(-60deg);"
														class="animable" id="el7o6ryvrme5v"></ellipse>
												</g>
												<g id="freepik--Top--inject-74" class="animable"
													style="transform-origin: 176.419px 150.67px;">
													<path
														d="M177.67,167.38A33,33,0,0,0,188,157.25a22.76,22.76,0,0,0-4.3-.69,17.34,17.34,0,0,0-6.87.73A26.42,26.42,0,0,0,169,162a11.27,11.27,0,0,0-4.4,5.81C167.69,170.35,172.4,170.42,177.67,167.38Z"
														style="fill: #CB0C9F; transform-origin: 176.3px 163.086px;"
														id="elmw5ym8iyg1" class="animable"></path>
													<g id="elan9acikn016">
														<path
															d="M177.67,167.38A33,33,0,0,0,188,157.25a22.76,22.76,0,0,0-4.3-.69,17.34,17.34,0,0,0-6.87.73A26.42,26.42,0,0,0,169,162a11.27,11.27,0,0,0-4.4,5.81C167.69,170.35,172.4,170.42,177.67,167.38Z"
															style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 176.3px 163.086px;"
															class="animable" id="elbn23jaa9um"></path>
													</g>
													<g id="freepik--Head--inject-74" class="animable"
														style="transform-origin: 178.104px 146.551px;">
														<path
															d="M186.9,140.09a3,3,0,0,0,.41-.72,2.08,2.08,0,0,0-.18-2,5.89,5.89,0,0,0,.77-1,1.75,1.75,0,0,0,.25-1.16c-.13-.65-.79-.9-1.38-1.08a3.41,3.41,0,0,0,1.1-1,1.86,1.86,0,0,0,.33-1.48,10.8,10.8,0,0,1-3.58.47,46.57,46.57,0,0,0-4.74-.29,13.11,13.11,0,0,0-4.89,1.23c-3,1.45-5.19,3.71-5.2,6.35-1.41.63-2.72,4.33-1,7.67,1.76,3.51,4.42,6,4.68,8,1.29-1.53,2.57-3.07,3.86-4.61l4.33-5.16,2-2.4.87-1a3.74,3.74,0,0,1,1.37-.94A3,3,0,0,0,186.9,140.09Z"
															style="fill: rgb(38, 50, 56); transform-origin: 178.104px 143.365px;"
															id="el5nmbdystu5u" class="animable"></path>
														<path
															d="M187.38,149.91c-.41,2-1.39,3.68-3,4.33a13.9,13.9,0,0,1-2.63.6v2.33c.74.59,2.37,2.17.08,3.49-3.07,1.77-6.78.24-8.58-1.32l-.52-7.42a2.36,2.36,0,0,1-2.72.21,3.64,3.64,0,0,1-1.36-4.55A2.34,2.34,0,0,1,172,146c.86.59.87,1.57,1.24,1.78s1-.28,1.19-1.14a4.83,4.83,0,0,0,0-2.18,6.53,6.53,0,0,0,1.57-1.83,3.65,3.65,0,0,0,.31-2.85c2.21-2.26,8-3.87,9.52-3,.94,1.43,1.46,4.9,1.7,7A19.42,19.42,0,0,1,187.38,149.91Z"
															style="fill: rgb(177, 102, 104); transform-origin: 178.019px 148.996px;"
															id="elgzy3pzyqi0g" class="animable"></path>
														<path
															d="M181.71,154.84c-1.85.29-5.6.2-6.63-.68a7,7,0,0,1-1.56-3s.27,2.81,1.09,3.89,2.78,1.2,4,1.26a26.57,26.57,0,0,0,3.14-.17Z"
															style="fill: rgb(154, 74, 77); transform-origin: 177.635px 153.735px;"
															id="el4ch5sclt5op" class="animable"></path>
														<path
															d="M180.06,144.6a1,1,0,0,1-.71,1,.64.64,0,0,1-.78-.66,1,1,0,0,1,.7-1A.65.65,0,0,1,180.06,144.6Z"
															style="fill: rgb(38, 50, 56); transform-origin: 179.315px 144.77px;"
															id="elj8xtoc7da8" class="animable"></path>
														<path
															d="M179.14,142.27l-1.46,1.43a1.15,1.15,0,0,1,.19-1.45A.83.83,0,0,1,179.14,142.27Z"
															style="fill: rgb(38, 50, 56); transform-origin: 178.323px 142.832px;"
															id="el7lo8k72s0ka" class="animable"></path>
														<path
															d="M186,141.06l-1.69-.48a1,1,0,0,1,1.17-.75A.92.92,0,0,1,186,141.06Z"
															style="fill: rgb(38, 50, 56); transform-origin: 185.194px 140.435px;"
															id="ela6aptjcx437" class="animable"></path>
														<path
															d="M185.82,143a1,1,0,0,1-.71,1,.64.64,0,0,1-.78-.66,1,1,0,0,1,.7-1A.65.65,0,0,1,185.82,143Z"
															style="fill: rgb(38, 50, 56); transform-origin: 185.075px 143.17px;"
															id="elxiu4kw6ggc" class="animable"></path>
														<polygon
															points="181.52 143.01 182.76 148.2 185.29 146.51 181.52 143.01"
															style="fill: rgb(154, 74, 77); transform-origin: 183.405px 145.605px;"
															id="el30oh780tl2v" class="animable"></polygon>
														<path
															d="M181.21,149.9l1.87-.08a1.17,1.17,0,0,1-1,1.09A.86.86,0,0,1,181.21,149.9Z"
															style="fill: rgb(154, 74, 77); transform-origin: 182.138px 150.365px;"
															id="elb6dzx9otgyi" class="animable"></path>
													</g>
												</g>
											</g>
										</g>
									</g>
									<g id="freepik--speech-bubble-2--inject-74" class="animable"
										style="transform-origin: 399.41px 76.1225px;">
										<g id="freepik--speech-bubble--inject-74" class="animable"
											style="transform-origin: 399.41px 76.1225px;">
											<g id="freepik--speech-bubble--inject-74" class="animable"
												style="transform-origin: 399.41px 76.1225px;">
												<path
													d="M396.09,102.88l3-5.63-2.41-7V86l7.38,4.26v4.26L400.88,100a.37.37,0,0,1-.22.19h0Z"
													style="fill: #CB0C9F; transform-origin: 400.075px 94.44px;"
													id="elvwann35qpca" class="animable"></path>
												<g id="elo6oyx7l80j">
													<path
														d="M396.09,102.88l3-5.63-2.41-7V86l7.38,4.26v4.26L400.88,100a.37.37,0,0,1-.22.19h0Z"
														style="opacity: 0.3; transform-origin: 400.075px 94.44px;"
														class="animable" id="elsw7gfkheue"></path>
												</g>
												<path
													d="M382.85,54.73a4.9,4.9,0,0,1,2.21-3.83l1.8-1a4.91,4.91,0,0,1,4.42,0l22.44,12.93a4.88,4.88,0,0,1,2.22,3.83V97a4.87,4.87,0,0,1-2.22,3.83l-1.8,1a4.85,4.85,0,0,1-4.42,0l-8.08-4.65-3.17,5.48a.46.46,0,0,1-.85-.08L392.05,93l-7-4a4.9,4.9,0,0,1-2.21-3.84Z"
													style="fill: #CB0C9F; transform-origin: 399.39px 76.142px;"
													id="elij1tel2dech" class="animable"></path>
												<g id="el0beqwso8mu">
													<path
														d="M415.94,97a4.87,4.87,0,0,1-2.22,3.83l-1.8,1a4.9,4.9,0,0,1-4,.18c1,.4,1.83-.19,1.83-1.45V70.22a4.5,4.5,0,0,0-.65-2.18l6.23-3.6a4.57,4.57,0,0,1,.65,2.18Z"
														style="opacity: 0.3; transform-origin: 411.95px 83.3961px;"
														class="animable" id="eln77qi4pep3"></path>
												</g>
												<g id="elqyjjpvmsnkf">
													<path
														d="M382.92,54.11c.26-.94,1.11-1.24,2.14-.65L407.5,66.39A4.36,4.36,0,0,1,409.06,68l6.22-3.59a4.44,4.44,0,0,0-1.56-1.65L391.29,49.86a4.94,4.94,0,0,0-4.43,0l-1.8,1A4.87,4.87,0,0,0,382.92,54.11Z"
														style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 399.1px 58.6678px;"
														class="animable" id="eljts1j37p8n"></path>
												</g>
											</g>
											<g id="freepik--Check--inject-74" class="animable"
												style="transform-origin: 396.647px 78.9126px;">
												<path
													d="M393.14,87.34l-.27,0a2,2,0,0,1-1.54-1.13l-4-8.47A2,2,0,1,1,391,76l2.67,5.67L402.82,71a2,2,0,0,1,3,2.6l-11.19,13A2,2,0,0,1,393.14,87.34Z"
													style="fill: rgb(250, 250, 250); transform-origin: 396.647px 78.9126px;"
													id="el2y9aays2gdt" class="animable"></path>
											</g>
										</g>
									</g>
									<g id="freepik--speech-bubble-1--inject-74" class="animable"
										style="transform-origin: 87.46px 127.882px;">
										<g id="freepik--like-bubble--inject-74" class="animable"
											style="transform-origin: 87.46px 127.882px;">
											<g id="freepik--speech-bubble--inject-74" class="animable"
												style="transform-origin: 87.46px 127.882px;">
												<path
													d="M93.36,160.18,78.15,169l6,13.59a1.35,1.35,0,0,0,.58.64l5.23,3a1.4,1.4,0,0,0,2-.81L98.6,163.2Z"
													style="fill: rgb(38, 50, 56); transform-origin: 88.375px 173.289px;"
													id="el5h8s1do4mml" class="animable"></path>
												<path
													d="M114.83,67.18,52,103.47a3.19,3.19,0,0,0-1.45,2.5v77.25A3.14,3.14,0,0,0,52,185.7l5.17,2.9a3.25,3.25,0,0,0,2.9,0l62.86-36.29a3.21,3.21,0,0,0,1.44-2.5V72.55a3.17,3.17,0,0,0-1.45-2.49l-5.17-2.89A3.2,3.2,0,0,0,114.83,67.18Z"
													style="fill: rgb(38, 50, 56); transform-origin: 87.46px 127.882px;"
													id="el89dphvs5etm" class="animable"></path>
												<path
													d="M124.32,72.29c-.11-.73-.7-1-1.42-.58L60,108a2.88,2.88,0,0,0-1,1.08L51,104.5a2.83,2.83,0,0,1,1-1l62.86-36.29a3.23,3.23,0,0,1,2.89,0l5.17,2.9A3.17,3.17,0,0,1,124.32,72.29Z"
													style="fill: rgb(69, 90, 100); transform-origin: 87.66px 87.9744px;"
													id="el5etp85u1rvu" class="animable"></path>
												<path
													d="M122.9,71.72,60,108a3.19,3.19,0,0,0-1.45,2.5v77.24c0,.92.65,1.29,1.45.83l24.44-14.11,5,11.13a1.39,1.39,0,0,0,2.61-.17L97.49,167l25.41-14.67a3.21,3.21,0,0,0,1.44-2.5V72.55C124.34,71.63,123.69,71.26,122.9,71.72Z"
													style="fill: rgb(55, 71, 79); transform-origin: 91.445px 130.145px;"
													id="elx7x5p79lll" class="animable"></path>
											</g>
											<path
												d="M78.25,129.66l-7.11,4.08a2.25,2.25,0,0,0-1,1.78l0,29.54c0,.66.46.92,1,.6l7.08-4.09a2.28,2.28,0,0,0,1-1.78V130.26C79.28,129.61,78.82,129.34,78.25,129.66Zm31.89-6a8.88,8.88,0,0,0,3.09-6.22c0-3.4-2.52-2.64-2.52-2.64a9.39,9.39,0,0,0,2-5.47,3,3,0,0,0-1.33-2.73A2.47,2.47,0,0,0,109,107l-12.69,7.32a23.07,23.07,0,0,0,.43-7.8,15.87,15.87,0,0,0-1.26-4.37,2.55,2.55,0,0,0-1.24-1.35c-2.19-1.07-5.63,1.42-5.63,2.44,0,1.29.54,7.94,0,9.85s-6.3,15-6.3,15l0,27.41s18.26-10.55,21-12.15,4.68-5,4.66-7.27a7.75,7.75,0,0,0-.52-3c1.76-1,3.54-4.76,3.54-6.33C111,124.33,110.14,123.68,110.14,123.68Z"
												style="fill: #CB0C9F; transform-origin: 91.685px 133.167px;"
												id="eldpp2l192e8i" class="animable"></path>
											<g id="elm6tg2fsjt7">
												<path
													d="M78.25,129.66l-7.11,4.08a2.25,2.25,0,0,0-1,1.78l0,29.54c0,.66.46.92,1,.6l7.08-4.09a2.28,2.28,0,0,0,1-1.78V130.26C79.28,129.61,78.82,129.34,78.25,129.66Zm31.89-6a8.88,8.88,0,0,0,3.09-6.22c0-3.4-2.52-2.64-2.52-2.64a9.39,9.39,0,0,0,2-5.47,3,3,0,0,0-1.33-2.73A2.47,2.47,0,0,0,109,107l-12.69,7.32a23.07,23.07,0,0,0,.43-7.8,15.87,15.87,0,0,0-1.26-4.37,2.55,2.55,0,0,0-1.24-1.35c-2.19-1.07-5.63,1.42-5.63,2.44,0,1.29.54,7.94,0,9.85s-6.3,15-6.3,15l0,27.41s18.26-10.55,21-12.15,4.68-5,4.66-7.27a7.75,7.75,0,0,0-.52-3c1.76-1,3.54-4.76,3.54-6.33C111,124.33,110.14,123.68,110.14,123.68Z"
													style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 91.685px 133.167px;"
													class="animable" id="el20idmcbz52k"></path>
											</g>
										</g>
									</g>
									<g id="freepik--Character--inject-74" class="animable"
										style="transform-origin: 391.648px 267.935px;">
										<g id="freepik--character--inject-74" class="animable"
											style="transform-origin: 391.648px 267.935px;">
											<g id="freepik--Bottom--inject-74" class="animable"
												style="transform-origin: 395.046px 318.964px;">
												<path
													d="M429.41,378.51c.34,2.13,1,4.6,1.56,8.95s-.42,4.51,2.2,15.43c1.57,6.56,1.21,9.14-2.89,14.56-4.39,5.79-8.83,4.51-11.6-2.08-2.37-5.64-2.17-8.23-2.06-14s.08-7.47-.09-12.05c-.15-4.05.25-6.8.06-9.91Z"
													style="fill: rgb(55, 71, 79); transform-origin: 425.264px 399.824px;"
													id="elqyv97543me" class="animable"></path>
												<path
													d="M430.4,394.38c-.68-5.62-.75-11.43-1-15.22-.47-8.49,1.59-25.22.64-38l-21.45-2.62c.62,5,6.1,27.6,8,41.22,0,0,.47,18.44,1.49,26.58a1.55,1.55,0,0,0,2.16,1.25,14.15,14.15,0,0,1,9.74-.43,1.55,1.55,0,0,0,2.11-1.44C432.11,402.72,430.91,398.59,430.4,394.38Z"
													style="fill: rgb(255, 168, 167); transform-origin: 420.34px 373.13px;"
													id="elq1hton1noh" class="animable"></path>
												<path
													d="M371.55,341.63c.08,17.66-.1,33.3-.73,37.88s-.89,6.13-2.06,9.33-3.14,7.48-4.9,9.54c0,0-5.05,5.38-3.92,5.94s11.69,1.67,16.42.24,5.24-5.44,6.85-12.77,3-18,3-18a4.91,4.91,0,0,1-.49-1.25c-.63-2.11,1.3-7.6,1.79-12.93Z"
													style="fill: rgb(255, 168, 167); transform-origin: 373.643px 373.446px;"
													id="el81k1i43iwsx" class="animable"></path>
												<path
													d="M390.91,384.7c-.31,1.71-1.78,3.65-2.44,6.31a47.42,47.42,0,0,0-1.38,9.27l-.24,4.36-1.18-.07s.3-5.52.44-7.94,0-4.2-1.16-4.53C385,392.1,385.18,384.39,390.91,384.7Z"
													style="fill: rgb(38, 50, 56); transform-origin: 387.93px 394.665px;"
													id="elfs6ubrzs61m" class="animable"></path>
												<path
													d="M386,372.77c.77,2,3.34,4.87,4.44,6.8a7.12,7.12,0,0,1,.9,3.31,3.46,3.46,0,0,1-1,2.6,39.25,39.25,0,0,0-3.68,4.07c-1.45,1.94-4.16,6.47-4.91,9.67s-1.19,6-3.94,7.61c-2.14,1.24-10.93,3-15.38,3.25-6.08.38-7.65-2.54-5.38-4.87s6.13-6.33,6.83-6.83a11.12,11.12,0,0,1,5.65.79c3.4,1.46,4.48,3.44,8.05,1.66,3.24-1.61,4.53-7.59,4.25-16.2C381.5,374.86,386,372.77,386,372.77Z"
													style="fill: rgb(55, 71, 79); transform-origin: 373.702px 391.442px;"
													id="elkad1czop1a" class="animable"></path>
												<path
													d="M415.76,216.79c.39,2.22.84,4.3,1.63,5.41,4.84,6.79,9.76,15,10.58,27.61a556.88,556.88,0,0,1,.28,59.76c.21,2.69,2.24,9.21,2.53,24.53.22,12.22-.59,31.2-.59,31.2s-8.78,4.24-16.38,1.32c-3-11.67-7.95-39.7-10.9-53.05-3.1-14.07-4.89-24.9-4.89-24.9l-3,23.05a70.86,70.86,0,0,1-.21,15.87c-1,8.15-7.6,36.89-7.6,36.89s-9.73,3-16.27-1.63c0,0-.56-40.68-.57-49.66s-1.91-66.75,3.74-90.19a52,52,0,0,0,.36-5.46C380.89,222.88,407.17,222.51,415.76,216.79Z"
													style="fill: rgb(55, 71, 79); transform-origin: 400.436px 292.218px;"
													id="elicrg4rt6hyc" class="animable"></path>
												<path
													d="M430.37,361.08c-3.34,3-13.54,3.79-17.53,1.64l1.21,6.35s2.63,1.8,8.43,1.31,7.65-2.8,7.65-2.8Z"
													style="fill: rgb(69, 90, 100); transform-origin: 421.605px 365.772px;"
													id="el3t8875c8vax" class="animable"></path>
												<path
													d="M388.21,360.45c-3.46,1.14-13.73.54-17.49-1.8l.16,5.46s2.11,2,7.9,2.65,8.31-1,8.31-1Z"
													style="fill: rgb(69, 90, 100); transform-origin: 379.465px 362.781px;"
													id="elysjorpz0u3k" class="animable"></path>
												<path
													d="M398,288.67l-5.15-36a19,19,0,0,1-15.2-7.33s-.25,7.53,12.12,11l5.72,30.41-.47,25Z"
													style="fill: rgb(38, 50, 56); transform-origin: 387.825px 278.545px;"
													id="el8y7or5ez7m" class="animable"></path>
												<path
													d="M374.2,222.56s6.23,4.74,20.92,4.13,21.83-5.25,21.73-5.51h0a20.78,20.78,0,0,1-1-3.83c0-.22-.08-.42-.1-.56-8.59,5.72-34.87,6.09-41.27.75,0,0-.08,3.51-.29,5Z"
													style="fill: rgb(38, 50, 56); transform-origin: 395.521px 221.767px;"
													id="elb6j33fqj43p" class="animable"></path>
												<path
													d="M405.84,222.25c-1.69,3.51-4.2,10.87-4.39,15.93a17.36,17.36,0,0,0,7.57,1.69s1-8.85-.61-16.43Z"
													style="fill: rgb(38, 50, 56); transform-origin: 405.388px 231.06px;"
													id="el4asxd7vl4hu" class="animable"></path>
												<path
													d="M410.14,220.32c2.6,2.9,7.08,9.27,8.67,14.07a17.52,17.52,0,0,1-6.8,3.74s-3.44-8.22-4-15.95Z"
													style="fill: rgb(38, 50, 56); transform-origin: 413.41px 229.225px;"
													id="eld9h15bq7ame" class="animable"></path>
											</g>
											<g id="freepik--top--inject-74" class="animable"
												style="transform-origin: 390.642px 180.387px;">
												<g id="freepik--Arm--inject-74" class="animable"
													style="transform-origin: 348.522px 185.102px;">
													<path
														d="M377,173.2c-6.4,4.26-21.37,14.63-25.82,17.93,0,0-15.09-7.76-20.68-11.1-2.46-1.48-3-2.36-3.34-3.45a20.53,20.53,0,0,0-1.58-4.22c-.82-1.53-1.27-2-2.25-4s-2-5.91-1.86-7.74c-.56-.79-2.63-.62-3.31,1.62a12.57,12.57,0,0,0,.07,5.7c.19,1.23.52,2.52.17,2.76s-2.21-.47-4-.71-3.45-.83-5.34,0a2.33,2.33,0,0,0-1.29,3.23,3.05,3.05,0,0,0,1.17,1.07,2.49,2.49,0,0,0-1.82.77,2.72,2.72,0,0,0,.31,3.43A1.56,1.56,0,0,0,306,180c-.09,1.17.16,2.31,1.36,2.64,0,0-.93.33-.93.89a2.74,2.74,0,0,0,1.16,2.46,9,9,0,0,0,3.39.44s.22.4,1.38.85c.41.16,1.38.55,3,1.06a16.63,16.63,0,0,0,4.25.87c1.41.1,2.21-.18,6.33,3.05,2.65,2.08,13,9.74,18.52,13.38,8.38,5.52,9.63,4.08,17.86-.66s20.17-11.79,20.17-11.79l7.37-25S384.44,168.21,377,173.2Z"
														style="fill: rgb(255, 168, 167); transform-origin: 347.922px 184.694px;"
														id="el96hb2oapj8" class="animable"></path>
													<path
														d="M312.66,171.11a4.62,4.62,0,0,1,.73.52,2.94,2.94,0,0,1,.59.71l-.07-.06a5.81,5.81,0,0,1,3.55,1.58,2.84,2.84,0,0,1,.58.85,1.51,1.51,0,0,1,.07,1.09,1.12,1.12,0,0,1-.33.49.91.91,0,0,1-.59.16c-.35,0-.65,0-1-.07-.62,0-1.27,0-1.92,0a6.12,6.12,0,0,1-1.94-.37,15.34,15.34,0,0,1-3.47-1.71,13.84,13.84,0,0,0,1.76.78c.6.23,1.19.47,1.8.64a7.9,7.9,0,0,0,1.86.28c.63,0,1.27,0,1.93,0,.33,0,.66.05.95.05s.41-.08.53-.37a1.63,1.63,0,0,0-.54-1.53,6,6,0,0,0-3.3-1.66h-.05l0,0a2.74,2.74,0,0,0-.49-.71A5.34,5.34,0,0,0,312.66,171.11Z"
														style="fill: rgb(242, 143, 143); transform-origin: 313.52px 173.781px;"
														id="elf3h93ygadw" class="animable"></path>
													<path
														d="M316,176.16a1.33,1.33,0,0,1,1.33.9,1.54,1.54,0,0,1-.5,1.62,5.52,5.52,0,0,1-3,1.65,5.09,5.09,0,0,1-1.71-.24c-.54-.16-1.06-.32-1.59-.5-1.05-.35-2.1-.7-3.13-1.11,1.09.23,2.16.51,3.23.79a11,11,0,0,0,3.16.63,4.42,4.42,0,0,0,1.48-.51,8.38,8.38,0,0,0,1.32-.94,1.31,1.31,0,0,0,.52-1.33A1.26,1.26,0,0,0,316,176.16Z"
														style="fill: rgb(242, 143, 143); transform-origin: 312.396px 178.245px;"
														id="elf9c28f1d8an" class="animable"></path>
													<path
														d="M314.43,180a1.84,1.84,0,0,1,1.47.36,1,1,0,0,1,.32.76,2.23,2.23,0,0,1-.19.79,3,3,0,0,1-1.2,1,3.34,3.34,0,0,1-1.48.58,5.31,5.31,0,0,1-1.52-.32,13.5,13.5,0,0,0-1.46-.21c-1-.11-2-.2-3-.33,1,0,2,0,3,0a8.82,8.82,0,0,1,1.52.16,5.54,5.54,0,0,0,1.41.27,3,3,0,0,0,1.3-.49,3.22,3.22,0,0,0,1.11-.84,2.31,2.31,0,0,0,.2-.66.7.7,0,0,0-.19-.59A1.86,1.86,0,0,0,314.43,180Z"
														style="fill: rgb(242, 143, 143); transform-origin: 311.795px 181.73px;"
														id="el3s0mud6dps1" class="animable"></path>
													<path
														d="M313.78,183.19a.82.82,0,0,1,.34.55,1.53,1.53,0,0,1-.11.67,5.19,5.19,0,0,1-.72,1,6.29,6.29,0,0,1-.47.43,1.53,1.53,0,0,1-.59.31,4.77,4.77,0,0,1-1.23.23l1.1-.54a1.83,1.83,0,0,0,.46-.3,5.44,5.44,0,0,0,.41-.42,8.93,8.93,0,0,0,.74-.91A1,1,0,0,0,313.78,183.19Z"
														style="fill: rgb(242, 143, 143); transform-origin: 312.561px 184.785px;"
														id="el6egv5jp49td" class="animable"></path>
													<path
														d="M317.91,175.73a7,7,0,0,0,4,9,8.18,8.18,0,0,1-3.52-1.82,7,7,0,0,1-1.94-2.61l-.41.75c-.14-.49-.16-.89-1.35-1.08a8.75,8.75,0,0,0,1.8-1.25c.52-.58,1.3-1.5,0-2.5a3.53,3.53,0,0,0,.92,0A.46.46,0,0,0,317.91,175.73Z"
														style="fill: rgb(242, 143, 143); transform-origin: 318.3px 180.23px;"
														id="elc0mz2qrmmur" class="animable"></path>
													<path
														d="M337,183.7c1.53,4.06-.9,11.29-4.83,14,0,0,9.8,7.12,14.08,9.8s5.93,3.34,10.25,1.38,27.05-15.05,27.05-15.05l7.51-26.42s-1.11-.28-4.73.61-5.83,2.21-14.69,8.19-20.53,14.22-20.53,14.22Z"
														style="fill: #CB0C9F; transform-origin: 361.615px 188.691px;"
														id="elbbxsxe4kb1a" class="animable"></path>
													<g id="el1z2b333tlkk">
														<path
															d="M351.14,190.38a12.56,12.56,0,0,1,6.77,6.53s-.62-5.35-5.16-7.67Z"
															style="opacity: 0.2; transform-origin: 354.525px 193.075px;"
															class="animable" id="el7v21w6qyqal"></path>
													</g>
												</g>
												<path
													d="M402.89,164.07l13.45,4.19c2.31.79,11,6.11,8,19.24-1,4.35-2.38,10.45-3.62,16.54-.95,4.65,2.53,13.61,5.35,27.88,0,0-11.54,9.18-34.46,6.59-17.49-2-19.38-8.52-19.38-8.52.48-16.28,1.92-22.57,1.89-28.76a14.89,14.89,0,0,1-2.66-8.65c-.12-5.8,1.41-8.92,6.61-15.5a110.31,110.31,0,0,1,9.53-10.61Z"
													style="fill: rgb(250, 250, 250); transform-origin: 398.762px 201.52px;"
													id="elk6as7st1b6k" class="animable"></path>
												<path
													d="M378,184.32c-4,9.21-1.32,61.77-1.68,57.83,0,0-7.53-2.92-8.23-5.43,0-9.47,1.74-28.48,1.85-35,.13-7.47.05-12.88,2.46-17.47s11.55-15.85,15.16-17.8C383.85,169.71,379.55,178.8,378,184.32Z"
													style="fill: #CB0C9F; transform-origin: 377.825px 204.405px;"
													id="elh0m7vgsglw9" class="animable"></path>
												<g id="elqcqfg9lmja">
													<g style="opacity: 0.2; transform-origin: 377.825px 204.405px;"
														class="animable" id="elnri181onsin">
														<path
															d="M378,184.32c-4,9.21-1.32,61.77-1.68,57.83,0,0-7.53-2.92-8.23-5.43,0-9.47,1.74-28.48,1.85-35,.13-7.47.05-12.88,2.46-17.47s11.55-15.85,15.16-17.8C383.85,169.71,379.55,178.8,378,184.32Z"
															id="elc8vecodgkir" class="animable"
															style="transform-origin: 377.825px 204.405px;"></path>
													</g>
												</g>
												<path
													d="M392.74,167c-2.54,1.74-13.94,9.57-16.2,24.82,0-6.73,2.53-15,4.93-18.86,2.93-4.76,7.74-7.91,11.18-9.91Z"
													style="fill: rgb(38, 50, 56); transform-origin: 384.64px 177.435px;"
													id="el9zgzdto5dqk" class="animable"></path>
												<path
													d="M408,164.23a13.3,13.3,0,0,1,0,3.06c-.12,2.86-4.63,24.45-4.71,34.81a337.16,337.16,0,0,0,2.5,41.66s16.69,1.51,22.84-6.79A117.58,117.58,0,0,1,423,215.22c-1.23-7.47,3.74-25.74,2.46-36.55-.54-4.52-.58-7.56-4-8.62a52.57,52.57,0,0,1-6.91-3.07Z"
													style="fill: #CB0C9F; transform-origin: 415.96px 204.049px;"
													id="elmpxuy1ibjyk" class="animable"></path>
												<g id="elj6svuo9bbdm">
													<g style="opacity: 0.2; transform-origin: 415.96px 204.049px;"
														class="animable" id="elzdc8k07d20i">
														<path
															d="M408,164.23a13.3,13.3,0,0,1,0,3.06c-.12,2.86-4.63,24.45-4.71,34.81a337.16,337.16,0,0,0,2.5,41.66s16.69,1.51,22.84-6.79A117.58,117.58,0,0,1,423,215.22c-1.23-7.47,3.74-25.74,2.46-36.55-.54-4.52-.58-7.56-4-8.62a52.57,52.57,0,0,1-6.91-3.07Z"
															id="elth8jmunimni" class="animable"
															style="transform-origin: 415.96px 204.049px;"></path>
													</g>
												</g>
												<path
													d="M379.82,124.84c-4.89.32-9.15,9.54-4.25,17,8.69,13.29,28.73,6.25,28.73,6.25L408.14,159s2.84-3.22,6.45-7.7c6.49-8,5.5-21.74-2.33-23.27C413.42,120.08,387.74,109.26,379.82,124.84Z"
													style="fill: rgb(224, 224, 224); transform-origin: 396.133px 137.953px;"
													id="elzpmwz9p91fo" class="animable"></path>
												<path
													d="M380.12,128.84c-1.15,2.35-3.12,6.69-2.69,19.68.34,10.15,3.87,12.37,7.2,13.66,1.63.63,4.14.63,7.63.25l.09,4.76S386,173,388,184.73c19.66-8.2,20-18.23,20-18.23l.32-15.74c.64,1,3.9,2.36,6.34-.77,2.88-3.68,2.24-8.07-.32-9.69s-5.69-.08-6.86,2.92c-2.76,1.15-6.42-1.72-6.24-12.39-3.37-1.76-9.93.73-12,.49C386,131,383.38,127.11,380.12,128.84Z"
													style="fill: rgb(255, 168, 167); transform-origin: 396.963px 156.564px;"
													id="elqjlzctio1fj" class="animable"></path>
												<path
													d="M380.12,128.84c2.84-.9,4.19,4.46,8.25,8.21a15.13,15.13,0,0,0,15.87,2.8c0-.48,2.1-9.64-5.87-13.86S382,123.54,380.12,128.84Z"
													style="fill: rgb(224, 224, 224); transform-origin: 392.305px 132.304px;"
													id="elvzedcy8ojgj" class="animable"></path>
												<path
													d="M413.12,148.59a1.46,1.46,0,1,1-1.65-1.23A1.46,1.46,0,0,1,413.12,148.59Z"
													style="fill: #CB0C9F; transform-origin: 411.676px 148.805px;"
													id="eli0edrbcars" class="animable"></path>
												<path
													d="M392.26,162.43c8.54-1.84,13.32-5.31,14.2-8.77,0,0-.54,4.52-2.94,6.52-3.36,2.79-11.22,4.61-11.22,4.61Z"
													style="fill: rgb(242, 143, 143); transform-origin: 399.36px 159.225px;"
													id="elz0er3jdnlmk" class="animable"></path>
												<path
													d="M387.74,153.5l5.95-2.2a3,3,0,0,1-1.75,4A3.35,3.35,0,0,1,387.74,153.5Z"
													style="fill: rgb(177, 102, 104); transform-origin: 390.835px 153.399px;"
													id="elbvw9i3khogs" class="animable"></path>
												<path
													d="M390.58,155.52a3.32,3.32,0,0,0,1.36-.18,3,3,0,0,0,2-2.56A3.68,3.68,0,0,0,390.58,155.52Z"
													style="fill: rgb(242, 143, 143); transform-origin: 392.26px 154.155px;"
													id="elxemfk5lyxhf" class="animable"></path>
												<ellipse cx="394.04" cy="142.69" rx="1.73" ry="1.72"
													style="fill: rgb(38, 50, 56); transform-origin: 394.04px 142.69px;"
													id="elm068dd2vcf8" class="animable"></ellipse>
												<path
													d="M383.58,142.21a1.73,1.73,0,1,1-1.73-1.71A1.72,1.72,0,0,1,383.58,142.21Z"
													style="fill: rgb(38, 50, 56); transform-origin: 381.85px 142.23px;"
													id="eli6yf5m6qhpl" class="animable"></path>
												<polygon
													points="389.19 139.47 388.27 151.03 382.77 148.85 389.19 139.47"
													style="fill: rgb(242, 143, 143); transform-origin: 385.98px 145.25px;"
													id="elai52t339dhf" class="animable"></polygon>
												<path
													d="M379.09,139.35l4-1.36a2,2,0,0,0-2.6-1.33A2.19,2.19,0,0,0,379.09,139.35Z"
													style="fill: rgb(69, 90, 100); transform-origin: 381.046px 137.946px;"
													id="el1cy9b097vps" class="animable"></path>
												<path
													d="M396.81,139.45l-3.9-1.68a2,2,0,0,1,2.73-1.14A2.21,2.21,0,0,1,396.81,139.45Z"
													style="fill: rgb(69, 90, 100); transform-origin: 394.934px 137.946px;"
													id="eltv9n9ne3i3f" class="animable"></path>
												<path
													d="M408.1,161.26c1.28-.06,1.62.73,3.31,2.65a24.68,24.68,0,0,0,3.18,3.07c-1.56,9.5-9,21.35-11.17,32.51-.1-9,2.32-21.46,4.61-35.26Z"
													style="fill: rgb(38, 50, 56); transform-origin: 409.003px 180.373px;"
													id="el8hbav1g5wvp" class="animable"></path>
												<path
													d="M457.19,215.52c6.26,1.64,8.52.47,9.71,0a10.88,10.88,0,0,0,4.37-3.31c1.75-2,1.87-2.94,2.5-3,1.27-.14,1.82,1.74,1.38,3.53-.78,3.14-1.86,4.11-1.86,4.11l.69,14.55c-1.31,1.5-4.44,2.43-8.88,1.48-3.08-.65-4.53-2.24-9.46-3.64C454.65,223.89,457.19,215.52,457.19,215.52Z"
													style="fill: rgb(242, 143, 143); transform-origin: 465.355px 221.234px;"
													id="el3xzabs26yqi" class="animable"></path>
												<path
													d="M422,170.24c7,2.51,10.13,4.5,13.14,12.51,3.32,8.82,8.46,25.16,8.46,25.16l16.17,8c-2.29,1.95-4.79,9.35-2.79,13.9,0,0-7.79-2.25-15.18-4.55-10.33-3.23-11.46-3.08-14-8.57-6.14-13.43-9.17-21-9.17-21S412.52,175.29,422,170.24Z"
													style="fill: #CB0C9F; transform-origin: 438.231px 200.025px;"
													id="eljd8vbfocp7" class="animable"></path>
											</g>
											<path
												d="M449.17,383.39s0-.08,0-.12L447.9,125.68s0,0,0,0v-.07a.86.86,0,0,0,0-.17,3.77,3.77,0,0,1,.19-1,4.27,4.27,0,0,1,.44-1,7.84,7.84,0,0,1,3-2.82c4.86-2.84,12.77-2.88,17.65-.09a7,7,0,0,1,3.5,3.88,3.8,3.8,0,0,1,.18,1.2l1.26,255.32v2.43h0c0,1.82-1.2,3.64-3.6,5.06-4.88,2.84-12.8,2.88-17.69.09C450.43,387.09,449.18,385.24,449.17,383.39Z"
												style="fill: rgb(230, 230, 230); transform-origin: 461.01px 254.52px;"
												id="el4nwy6r59et6" class="animable"></path>
											<path
												d="M459.73,414h0l-.14-6.28h0a1,1,0,0,1,.59-.88,3.24,3.24,0,0,1,2.91,0,1,1,0,0,1,.61.84h0l.16,6.27h0a2.09,2.09,0,0,1-.28,1,2.07,2.07,0,0,1-3.86-.93Z"
												style="fill: rgb(69, 90, 100); transform-origin: 461.725px 411.24px;"
												id="el3l8ugksz76t" class="animable"></path>
											<path
												d="M459.79,414.39v0c0-.11,0-.24,0-.36s0,0,0,0c.76,1.08,3.34,1.22,4.11.07a.48.48,0,0,1,0,.12,1,1,0,0,1,0,.11,1.72,1.72,0,0,1-.24.64,2.06,2.06,0,0,1-2.82.76A2,2,0,0,1,459.79,414.39Z"
												style="fill: rgb(38, 50, 56); transform-origin: 461.847px 414.992px;"
												id="elmcivq54t5o" class="animable"></path>
											<path
												d="M456.71,403.25a11.17,11.17,0,0,0,10.09-.05,4.06,4.06,0,0,0,1.95-2.17l5-15.9a7.53,7.53,0,0,1-3.21,3.25c-4.87,2.84-12.79,2.88-17.68.09a7.4,7.4,0,0,1-3.3-3.36l5.13,15.83a1.28,1.28,0,0,0,.11.31A4.1,4.1,0,0,0,456.71,403.25Z"
												style="fill: rgb(224, 224, 224); transform-origin: 461.655px 394.77px;"
												id="elelp301vukh" class="animable"></path>
											<g id="el2zorsmzrqc9">
												<path
													d="M455.35,396a13.85,13.85,0,0,0,12.51-.07c1.71-1,2.57-2.29,2.55-3.58s-.83-2.62-2.58-3.63a13.79,13.79,0,0,0-12.51.05c-1.73,1-2.6,2.32-2.58,3.63S453.63,395.05,455.35,396Z"
													style="opacity: 0.1; transform-origin: 461.575px 392.351px;"
													class="animable" id="ell89hi004wif"></path>
											</g>
											<path
												d="M456.71,403.25a11.17,11.17,0,0,0,10.09-.05,4.06,4.06,0,0,0,1.95-2.17l5-15.9a7.53,7.53,0,0,1-3.21,3.25c-4.87,2.84-12.79,2.88-17.68.09a7.4,7.4,0,0,1-3.3-3.36l5.13,15.83a1.28,1.28,0,0,0,.11.31A4.1,4.1,0,0,0,456.71,403.25Z"
												style="fill: rgb(224, 224, 224); transform-origin: 461.655px 394.77px;"
												id="el9mbio2ljuec" class="animable"></path>
											<path
												d="M457.69,408h0L453,393.58a3.3,3.3,0,0,1-.12-.38c-.42-1.55.4-3.19,2.46-4.4a13.79,13.79,0,0,1,12.48-.05c2,1.14,2.84,2.69,2.54,4.19,0,0,0,.07,0,.1l-.13.4-4.59,14.62h0a2.33,2.33,0,0,1-1.1,1.22,6.28,6.28,0,0,1-5.68,0A2.23,2.23,0,0,1,457.69,408Z"
												style="fill: #CB0C9F; transform-origin: 461.596px 398.621px;"
												id="el5r8fm5hg3s3" class="animable"></path>
											<g id="elvum5yacqg8o">
												<path
													d="M457.69,408h0L453,393.58a3.3,3.3,0,0,1-.12-.38c-.42-1.55.4-3.19,2.46-4.4a13.79,13.79,0,0,1,12.48-.05c2,1.14,2.84,2.69,2.54,4.19,0,0,0,.07,0,.1l-.13.4-4.59,14.62h0a2.33,2.33,0,0,1-1.1,1.22,6.28,6.28,0,0,1-5.68,0A2.23,2.23,0,0,1,457.69,408Z"
													style="opacity: 0.2; transform-origin: 461.596px 398.621px;"
													class="animable" id="el824gy5d5yfx"></path>
											</g>
											<path
												d="M455.35,396a13.85,13.85,0,0,0,12.51-.07c1.71-1,2.57-2.29,2.55-3.58s-.83-2.62-2.58-3.63a13.79,13.79,0,0,0-12.51.05c-1.73,1-2.6,2.32-2.58,3.63S453.63,395.05,455.35,396Z"
												style="fill: #CB0C9F; transform-origin: 461.575px 392.351px;"
												id="el9jf4ozzax" class="animable"></path>
											<path
												d="M455.35,396a13.85,13.85,0,0,0,12.51-.07c1.71-1,2.57-2.29,2.55-3.58s-.83-2.62-2.58-3.63a13.79,13.79,0,0,0-12.51.05c-1.73,1-2.6,2.32-2.58,3.63S453.63,395.05,455.35,396Z"
												style="fill: #CB0C9F; transform-origin: 461.575px 392.351px;"
												id="el45en508ste7" class="animable"></path>
											<g id="ely3fzbo1mns">
												<path
													d="M452.74,392.43a4,4,0,0,1,1.85-3.14,20.41,20.41,0,0,0,14,0,3.85,3.85,0,0,1,1.78,3.09c0,1.29-.84,2.58-2.55,3.58a13.85,13.85,0,0,1-12.51.07C453.63,395.05,452.75,393.74,452.74,392.43Z"
													style="opacity: 0.05; transform-origin: 461.555px 393.389px;"
													class="animable" id="el5qwkcdxzls"></path>
											</g>
											<path
												d="M458.82,409.32a6.25,6.25,0,0,0,5.68,0,2.25,2.25,0,0,0,1.09-1.23h0l2.22-7.06a4,4,0,0,1-1.64,1.64,10.09,10.09,0,0,1-9.1.05,3.8,3.8,0,0,1-1.7-1.73l2.29,7.07h0A2.21,2.21,0,0,0,458.82,409.32Z"
												style="fill: #CB0C9F; transform-origin: 461.59px 405.496px;"
												id="el24tsvkpz4l6" class="animable"></path>
											<path
												d="M456.21,152.12a2.16,2.16,0,0,1,1.29-1.82,6.9,6.9,0,0,1,6.24,0,2.13,2.13,0,0,1,1.3,1.81h0l.17,38.11a2.26,2.26,0,0,0-1.28-1.57,7,7,0,0,0-6.28,0,2.28,2.28,0,0,0-1.27,1.64Z"
												style="fill: rgb(250, 250, 250); transform-origin: 460.71px 169.922px;"
												id="eldw32ihhzk" class="animable"></path>
											<path
												d="M457.51,153.91a6.89,6.89,0,0,0,6.25,0,1.91,1.91,0,0,0,0-3.6,6.9,6.9,0,0,0-6.24,0,2.16,2.16,0,0,0-1.29,1.82A2.18,2.18,0,0,0,457.51,153.91Z"
												style="fill: rgb(224, 224, 224); transform-origin: 460.631px 152.112px;"
												id="elbaqpslzsmv" class="animable"></path>
											<path
												d="M449.21,137.07h0v-.28l0-10.95a2,2,0,0,1,0-.35v-.08h0c.11-1.58,1.18-3.13,3.25-4.34a17.55,17.55,0,0,1,15.89-.08c2.21,1.27,3.31,2.93,3.31,4.6h0l.05,11.14v.17h0c-.05,1.62-1.14,3.23-3.27,4.47a17.53,17.53,0,0,1-15.88.07C450.41,140.24,449.3,138.66,449.21,137.07Z"
												style="fill: #CB0C9F; transform-origin: 460.456px 131.217px;"
												id="elpt8i407e0r" class="animable"></path>
											<g id="elonvvuf2hda8">
												<path
													d="M449.21,137.07h0v-.28l0-10.95a2,2,0,0,1,0-.35v-.08h0c.11-1.58,1.18-3.13,3.25-4.34a17.55,17.55,0,0,1,15.89-.08c2.21,1.27,3.31,2.93,3.31,4.6h0l.05,11.14v.17h0c-.05,1.62-1.14,3.23-3.27,4.47a17.53,17.53,0,0,1-15.88.07C450.41,140.24,449.3,138.66,449.21,137.07Z"
													style="opacity: 0.05; transform-origin: 460.456px 131.217px;"
													class="animable" id="elrhnwzgw2ey"></path>
											</g>
											<path
												d="M457.29,392.49l-.08-15.88-1-186a.09.09,0,0,1,0-.07v-.34a2.26,2.26,0,0,1,1.27-1.63,7,7,0,0,1,6.28,0,2.3,2.3,0,0,1,1.28,1.57h0v.44l1,186,.08,15.9a2.16,2.16,0,0,1-1.27,1.79,6.82,6.82,0,0,1-4.59.62,5.81,5.81,0,0,1-.63-.15,4.77,4.77,0,0,1-1-.44A2.19,2.19,0,0,1,457.29,392.49Z"
												style="fill: rgb(69, 90, 100); transform-origin: 461.161px 291.435px;"
												id="elghtdolupsz" class="animable"></path>
											<path
												d="M457.56,192.18a7,7,0,0,0,6.25,0,2.18,2.18,0,0,0,1.27-1.79,2.14,2.14,0,0,0-1.29-1.82,6.86,6.86,0,0,0-6.24,0,1.91,1.91,0,0,0,0,3.61Z"
												style="fill: rgb(38, 50, 56); transform-origin: 460.672px 190.368px;"
												id="ellqgwt45fdki" class="animable"></path>
											<path
												d="M457.29,392.49l0-2.4a21.24,21.24,0,0,0,8.84,0v2.41a2.16,2.16,0,0,1-1.27,1.79,6.82,6.82,0,0,1-4.59.62,5.11,5.11,0,0,1-1.66-.59A2.19,2.19,0,0,1,457.29,392.49Z"
												style="fill: rgb(38, 50, 56); transform-origin: 461.71px 392.576px;"
												id="elu57pxm7bwjs" class="animable"></path>
											<path
												d="M451.59,130.79c4.88,2.79,12.79,2.75,17.67-.09,2.41-1.42,3.62-3.24,3.6-5.06s-1.17-3.71-3.65-5.13c-4.87-2.81-12.78-2.77-17.66.07-2.45,1.43-3.68,3.28-3.65,5.14S449.16,129.41,451.59,130.79Z"
												style="fill: rgb(224, 224, 224); transform-origin: 460.38px 125.641px;"
												id="el6dqfoofgnf" class="animable"></path>
											<path
												d="M451.59,129.55c4.88,2.79,12.8,2.75,17.67-.09,2.41-1.42,3.63-3.24,3.6-5.06v-2.52a.66.66,0,0,1,0-.14c0-.13,0-.25,0-.38a4.59,4.59,0,0,0-.1-.51c0-.1-.06-.2-.1-.31a.06.06,0,0,0,0-.06,2,2,0,0,0-.13-.31,5.17,5.17,0,0,0-.78-1.29l-.29-.34a.81.81,0,0,0-.16-.16,1.92,1.92,0,0,0-.29-.28,9,9,0,0,0-1.78-1.3c-4.89-2.79-12.79-2.75-17.65.08a8,8,0,0,0-3,2.83v0a3.69,3.69,0,0,0-.24.49l-.18.49a1.67,1.67,0,0,0-.08.3l0,.19a2.44,2.44,0,0,0-.05.39v.08c0,.12,0,.25,0,.38v2.12a1,1,0,0,0,0,.3C447.91,126.32,449.16,128.17,451.59,129.55Z"
												style="fill: #CB0C9F; transform-origin: 460.44px 123.174px;"
												id="elvp2jk0iddcs" class="animable"></path>
											<g id="eleytjxu3bxm4">
												<path
													d="M451.6,127.1c4.88,2.78,12.8,2.74,17.68-.1,2.4-1.42,3.62-3.24,3.59-5s-1.17-3.71-3.65-5.13c-4.86-2.82-12.78-2.78-17.66.06-2.44,1.44-3.67,3.28-3.64,5.14S449.17,125.71,451.6,127.1Z"
													style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 460.395px 121.968px;"
													class="animable" id="elff5mlbupuzt"></path>
											</g>
											<path
												d="M473.29,216.83c.87.87,1.75,1.7,2.56,2.64a4.09,4.09,0,0,1,1.19,2.2c.1,1.05-.56,2.08-.42,3.13.11.83.71,1.58.6,2.41-.06.42-.3.81-.33,1.23a3.46,3.46,0,0,0,.25,1.18,5.82,5.82,0,0,1-.25,3.59,16.63,16.63,0,0,1-1.76,3.2,4.68,4.68,0,0,1-1.42,1.66l-2.15,1.21a4.6,4.6,0,0,1-1,.44,1.35,1.35,0,0,1-1.06-.13,1.32,1.32,0,0,1-.54-1,3.37,3.37,0,0,1,.1-1.14A1.55,1.55,0,0,1,468,236a4.68,4.68,0,0,1,.45-1.89l.77-1.92c0-.06,0-.12,0-.18a.27.27,0,0,0-.18-.11,1.37,1.37,0,0,1-.87-1.25,3.71,3.71,0,0,1,.36-1.56,12.1,12.1,0,0,1,1.27-2.45,35.6,35.6,0,0,0,2.11-3.89c.46-.89.92-1.77,1.37-2.66Z"
												style="fill: rgb(255, 168, 167); transform-origin: 472.657px 228.302px;"
												id="elyt6kickhwxs" class="animable"></path>
										</g>
									</g>
									<defs>
										<filter id="active" height="200%">
											<feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
												radius="2">
											</feMorphology>
											<feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
											<feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
											</feComposite>
											<feMerge>
												<feMergeNode in="OUTLINE"></feMergeNode>
												<feMergeNode in="SourceGraphic"></feMergeNode>
											</feMerge>
										</filter>
										<filter id="hover" height="200%">
											<feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
												radius="2">
											</feMorphology>
											<feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
											<feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
											</feComposite>
											<feMerge>
												<feMergeNode in="OUTLINE"></feMergeNode>
												<feMergeNode in="SourceGraphic"></feMergeNode>
											</feMerge>
											<feColorMatrix type="matrix"
												values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
											</feColorMatrix>
										</filter>
									</defs>
								</svg>
								{{-- <img class="w-100 position-relative z-index-2 pt-4"
									src="{{ asset('master/dashboard/template/assets/img/illustrations/rocket-white.png') }}"
									alt="rocket"> --}}

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5">
		<div class="card h-100 p-3">
			<div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
				style="background-image: url('{{ asset('master/dashboard/template/assets/img/danlanal.jpg') }}');">
				<span class="mask bg-gradient-dark"></span>
				<div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
					<h5 class="text-white font-weight-bolder mb-4 pt-2">TNI AL Semarang</h5>
					<p class="text-white">Lanal Semarang memberikan dukungan administrasi dan
						logistik dalam melaksanakan tugas diwilayah kerja Lanal Semarang.
					</p>
					<a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
						href="https://id.wikipedia.org/wiki/Pangkalan_TNI_AL_Semarang" target="__blank">
						Baca selengkapnya
						<i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mt-4">
	<div class="col-lg-5 mb-lg-0 mb-4">
		<div class="card z-index-2">
			<div class="card-body p-3">
				<div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
					<div class="chart">
						<canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
					</div>
				</div>
				<h6 class="ms-2 mt-4 mb-0"> {{ __('Surat Masuk') }} </h6>
				<p class="text-sm ms-2"> (<span class="font-weight-bolder">+23%</span>) per bulan </p>
				<div class="container border-radius-lg">
					<div class="row">
						<div class="col-3 py-3 ps-0">
							<div class="d-flex mb-2">
								<div
									class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
									<svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>document</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
												fill-rule="nonzero">
												<g transform="translate(1716.000000, 291.000000)">
													<g transform="translate(154.000000, 300.000000)">
														<path class="color-background"
															d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
															opacity="0.603585379"></path>
														<path class="color-background"
															d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
														</path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</div>
								<p class="text-xs mt-1 mb-0 font-weight-bold">Users</p>
							</div>
							<h4 class="font-weight-bolder">36K</h4>
							<div class="progress w-75">
								<div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-3 py-3 ps-0">
							<div class="d-flex mb-2">
								<div
									class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
									<svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>spaceship</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
												fill-rule="nonzero">
												<g transform="translate(1716.000000, 291.000000)">
													<g transform="translate(4.000000, 301.000000)">
														<path class="color-background"
															d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
														</path>
														<path class="color-background"
															d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
														</path>
														<path class="color-background"
															d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
															opacity="0.598539807"></path>
														<path class="color-background"
															d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
															opacity="0.598539807"></path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</div>
								<p class="text-xs mt-1 mb-0 font-weight-bold">Clicks</p>
							</div>
							<h4 class="font-weight-bolder">2m</h4>
							<div class="progress w-75">
								<div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-3 py-3 ps-0">
							<div class="d-flex mb-2">
								<div
									class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
									<svg width="10px" height="10px" viewBox="0 0 43 36" version="1.1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>credit-card</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
												fill-rule="nonzero">
												<g transform="translate(1716.000000, 291.000000)">
													<g transform="translate(453.000000, 454.000000)">
														<path class="color-background"
															d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
															opacity="0.593633743"></path>
														<path class="color-background"
															d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
														</path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</div>
								<p class="text-xs mt-1 mb-0 font-weight-bold">Sales</p>
							</div>
							<h4 class="font-weight-bolder">435$</h4>
							<div class="progress w-75">
								<div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-3 py-3 ps-0">
							<div class="d-flex mb-2">
								<div
									class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
									<svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>settings</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
												fill-rule="nonzero">
												<g transform="translate(1716.000000, 291.000000)">
													<g transform="translate(304.000000, 151.000000)">
														<polygon class="color-background" opacity="0.596981957"
															points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
														</polygon>
														<path class="color-background"
															d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
															opacity="0.596981957"></path>
														<path class="color-background"
															d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
														</path>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</div>
								<p class="text-xs mt-1 mb-0 font-weight-bold">Items</p>
							</div>
							<h4 class="font-weight-bolder">43</h4>
							<div class="progress w-75">
								<div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-7">
		<div class="card z-index-2">
			<div class="card-header pb-0">
				<h6>Jumlah Surat Arsip</h6>
				<p class="text-sm">
					<i class="fa fa-arrow-up text-success"></i>
					<span class="font-weight-bold">4% lebih</span> per bulan
				</p>
			</div>
			<div class="card-body p-3">
				<div class="chart">
					<canvas id="chart-line" class="chart-canvas" height="300"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row my-4">
	<div class="col-lg col-md-6 mb-md-0 mb-4">
		<div class="card">
			<div class="card-header pb-0">
				<div class="row">
					<div class="col-lg-6 col-7">
						<h6>Kontak</h6>
						<p class="text-sm mb-0">
							<i class="fa fa-phone-square" aria-hidden="true"></i>
							<span class="font-weight-bold ms-1">StaffMin</span> kontak perorangan
						</p>
					</div>
					<div class="col-lg-6 col-5 my-auto text-end">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Cari kontak"
								aria-label="Kontak Staffmin" aria-describedby="cari-kontak">
							<button class="btn btn-outline-primary mb-0" type="submit" id="cari-kontak">{{ __('cari')
								}}</button>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body px-0 pb-2">
				<div class="table-responsive">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th class="text-uppercase text-secondary text-sm font-weight-bolder">
									Nama</th>
								<th class="text-center text-uppercase text-secondary text-sm font-weight-bolder">
									Keterangan
								</th>
								<th class="text-center text-uppercase text-secondary text-sm font-weight-bolder">
									Telepon</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="{{ asset('master/dashboard/template/assets/img/team-1.jpg') }}"
												class="avatar avatar-md me-3 rounded-circle" data-bs-toggle="tooltip"
												data-bs-placement="bottom" title="{{ __('Sumiyati') }}">
										</div>
										<div class="d-flex flex-column justify-content-center">
											<h6 class="mb-0 text-md">{{ __('Sumiyati') }}</h6>
										</div>
									</div>
								</td>
								<td class="align-middle text-center text-sm">
									<h6 class="text-md font-weight-bold">{{ __('Arsiparis') }}</h6>
								</td>
								<td class="align-middle text-center text-sm">
									<h6 class="text-md font-weight-bold">
										<a href="https://wa.me/62{{ __('0895622189054') }}" target="__blank"
											class="text-md font-weight-bold">{{ __('0895622189054') }}</a>
									</h6>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
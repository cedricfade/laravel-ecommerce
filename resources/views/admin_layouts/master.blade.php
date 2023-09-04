<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab" >
	<meta name="robots" content="" >
	<meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
	<meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
	<meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
	<meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
	<meta property="og:image" content="social-image.html" >
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>@yield('title')</title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<link href="{{ asset('vendor/wow-master/css/libs/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap-select-country/css/bootstrap-select-country.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}">
	<link href="{{ asset('vendor/datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
	
	 <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<!--swiper-slider-->
	<link rel="stylesheet" href="vendor/swiper/css/swiper-bundle.min.css">
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c33a414c0.js" crossorigin="anonymous"></script>

	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
	  <div class="loader">
		<div class="dots">
			  <div class="dot mainDot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
		</div>
			
		</div>
	</div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open active">
	
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/') }}" class="brand-logo">
				<svg class="logo-abbr" width="40" height="40" viewBox="0 0 48 54" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect y="3" width="48" height="48" rx="16" fill="#FB7D5B"/>
					<path d="M28.964 35.536H19.532L18.02 40H11.576L20.72 14.728H27.848L36.992 40H30.476L28.964 35.536ZM27.38 30.784L24.248 21.532L21.152 30.784H27.38Z" fill="white"/>
				</svg>
				<div class="brand-title">
					<svg width="140" height="30" viewBox="0 0 167 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.964 24.536H8.532L7.02 29H0.576L9.72 3.728H16.848L25.992 29H19.476L17.964 24.536ZM16.38 19.784L13.248 10.532L10.152 19.784H16.38ZM41.051 29L34.931 20.576V29H28.775V2.36H34.931V17.084L41.015 8.912H48.611L40.259 18.992L48.683 29H41.051ZM49.8049 18.92C49.8049 16.856 50.1889 15.044 50.9569 13.484C51.7489 11.924 52.8169 10.724 54.1609 9.884C55.5049 9.044 57.0049 8.624 58.6609 8.624C60.0769 8.624 61.3129 8.912 62.3689 9.488C63.4489 10.064 64.2769 10.82 64.8529 11.756V8.912H71.0089V29H64.8529V26.156C64.2529 27.092 63.4129 27.848 62.3329 28.424C61.2769 29 60.0409 29.288 58.6249 29.288C56.9929 29.288 55.5049 28.868 54.1609 28.028C52.8169 27.164 51.7489 25.952 50.9569 24.392C50.1889 22.808 49.8049 20.984 49.8049 18.92ZM64.8529 18.956C64.8529 17.42 64.4209 16.208 63.5569 15.32C62.7169 14.432 61.6849 13.988 60.4609 13.988C59.2369 13.988 58.1929 14.432 57.3289 15.32C56.4889 16.184 56.0689 17.384 56.0689 18.92C56.0689 20.456 56.4889 21.68 57.3289 22.592C58.1929 23.48 59.2369 23.924 60.4609 23.924C61.6849 23.924 62.7169 23.48 63.5569 22.592C64.4209 21.704 64.8529 20.492 64.8529 18.956ZM74.2385 18.92C74.2385 16.856 74.6225 15.044 75.3905 13.484C76.1825 11.924 77.2505 10.724 78.5945 9.884C79.9385 9.044 81.4385 8.624 83.0945 8.624C84.4145 8.624 85.6145 8.9 86.6945 9.452C87.7985 10.004 88.6625 10.748 89.2865 11.684V2.36H95.4425V29H89.2865V26.12C88.7105 27.08 87.8825 27.848 86.8025 28.424C85.7465 29 84.5105 29.288 83.0945 29.288C81.4385 29.288 79.9385 28.868 78.5945 28.028C77.2505 27.164 76.1825 25.952 75.3905 24.392C74.6225 22.808 74.2385 20.984 74.2385 18.92ZM89.2865 18.956C89.2865 17.42 88.8545 16.208 87.9905 15.32C87.1505 14.432 86.1185 13.988 84.8945 13.988C83.6705 13.988 82.6265 14.432 81.7625 15.32C80.9225 16.184 80.5025 17.384 80.5025 18.92C80.5025 20.456 80.9225 21.68 81.7625 22.592C82.6265 23.48 83.6705 23.924 84.8945 23.924C86.1185 23.924 87.1505 23.48 87.9905 22.592C88.8545 21.704 89.2865 20.492 89.2865 18.956ZM118.832 18.632C118.832 19.208 118.796 19.808 118.724 20.432H104.792C104.888 21.68 105.284 22.64 105.98 23.312C106.7 23.96 107.576 24.284 108.608 24.284C110.144 24.284 111.212 23.636 111.812 22.34H118.364C118.028 23.66 117.416 24.848 116.528 25.904C115.664 26.96 114.572 27.788 113.252 28.388C111.932 28.988 110.456 29.288 108.824 29.288C106.856 29.288 105.104 28.868 103.568 28.028C102.032 27.188 100.832 25.988 99.9681 24.428C99.1041 22.868 98.6721 21.044 98.6721 18.956C98.6721 16.868 99.0921 15.044 99.9321 13.484C100.796 11.924 101.996 10.724 103.532 9.884C105.068 9.044 106.832 8.624 108.824 8.624C110.768 8.624 112.496 9.032 114.008 9.848C115.52 10.664 116.696 11.828 117.536 13.34C118.4 14.852 118.832 16.616 118.832 18.632ZM112.532 17.012C112.532 15.956 112.172 15.116 111.452 14.492C110.732 13.868 109.832 13.556 108.752 13.556C107.72 13.556 106.844 13.856 106.124 14.456C105.428 15.056 104.996 15.908 104.828 17.012H112.532ZM147.712 8.696C150.208 8.696 152.188 9.452 153.652 10.964C155.14 12.476 155.884 14.576 155.884 17.264V29H149.764V18.092C149.764 16.796 149.416 15.8 148.72 15.104C148.048 14.384 147.112 14.024 145.912 14.024C144.712 14.024 143.764 14.384 143.068 15.104C142.396 15.8 142.06 16.796 142.06 18.092V29H135.94V18.092C135.94 16.796 135.592 15.8 134.896 15.104C134.224 14.384 133.288 14.024 132.088 14.024C130.888 14.024 129.94 14.384 129.244 15.104C128.572 15.8 128.236 16.796 128.236 18.092V29H122.08V8.912H128.236V11.432C128.86 10.592 129.676 9.932 130.684 9.452C131.692 8.948 132.832 8.696 134.104 8.696C135.616 8.696 136.96 9.02 138.136 9.668C139.336 10.316 140.272 11.24 140.944 12.44C141.64 11.336 142.588 10.436 143.788 9.74C144.988 9.044 146.296 8.696 147.712 8.696ZM163.285 6.824C162.205 6.824 161.317 6.512 160.621 5.888C159.949 5.24 159.613 4.448 159.613 3.512C159.613 2.552 159.949 1.76 160.621 1.136C161.317 0.487998 162.205 0.163998 163.285 0.163998C164.341 0.163998 165.205 0.487998 165.877 1.136C166.573 1.76 166.921 2.552 166.921 3.512C166.921 4.448 166.573 5.24 165.877 5.888C165.205 6.512 164.341 6.824 163.285 6.824ZM166.345 8.912V29H160.189V8.912H166.345Z" fill="white"/>
					</svg>
				</div> 
            </a>
			

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>		
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#chat_model"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dlab-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dlab-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1" >
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<circle fill="#000000" cx="5" cy="12" r="2"/>
												<circle fill="#000000" cx="12" cy="12" r="2"/>
												<circle fill="#000000" cx="19" cy="12" r="2"/>
											</g>
										</svg>
									</a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		<!--**********************************
            Header start
        ***********************************-->
	 @include('admin_layouts.header')
			<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin_layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--****
		Wallet Sidebar
		****-->
		<div class="wallet-bar wow fadeInRight dlab-scroll active" id="wallet-bar" data-wow-delay="0.7s">		
			<div class="row ">
				<!--column-->
				<div class="col-xl-12">
					<div class="card bg-transparent mb-1">
						<div class="card-header border-0 px-3">
							<div>
								<h2 class="heading mb-0">Recent Students</h2>
								<span>You have <span class="font-w600">456</span> Students</span>
							</div>
							<div >
								<a href="#" class="add icon-box bg-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.188 13.412V8.512H0.428V5.348H5.188V0.531999H8.352V5.348H13.14V8.512H8.352V13.412H5.188Z" fill="white"/>
									</svg>
								</a>									
							</div>	
						</div>
						<div class="card-body height450 dlab-scroll loadmore-content recent-activity-wrapper p-3 pt-2" id="RecentActivityContent">
							<!--student-->
							<div class="d-flex align-items-center student">
								<span class="dz-media">
									<img src="images/profile/small/pic1.jpg" alt="" width="50" class="avatar">
								</span>
								<div class="user-info">
									<h6 class="name"><a href="app-profile.html">Samantha William</a></h6>
									<span class="fs-14 font-w400 text-wrap">Class VII A</span>
								</div>
								<div class="icon-box st-box ms-auto">
									<a href="#">
										<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19 0.000114441H3C2.20435 0.000114441 1.44129 0.316185 0.878679 0.878794C0.31607 1.4414 0 2.20446 0 3.00011V13.0001C0 13.7958 0.31607 14.5588 0.878679 15.1214C1.44129 15.684 2.20435 16.0001 3 16.0001H19C19.7956 16.0001 20.5587 15.684 21.1213 15.1214C21.6839 14.5588 22 13.7958 22 13.0001V3.00011C22 2.20446 21.6839 1.4414 21.1213 0.878794C20.5587 0.316185 19.7956 0.000114441 19 0.000114441V0.000114441ZM20 12.7501L15.1 8.35011L20 4.92011V12.7501ZM2 4.92011L6.9 8.35011L2 12.7501V4.92011ZM8.58 9.53011L10.43 10.8201C10.5974 10.9362 10.7963 10.9985 11 10.9985C11.2037 10.9985 11.4026 10.9362 11.57 10.8201L13.42 9.53011L18.42 14.0001H3.6L8.58 9.53011ZM3 2.00011H19C19.1857 2.0016 19.3673 2.05478 19.5245 2.15369C19.6817 2.2526 19.8083 2.39333 19.89 2.56011L11 8.78011L2.11 2.56011C2.19171 2.39333 2.31826 2.2526 2.47545 2.15369C2.63265 2.05478 2.81428 2.0016 3 2.00011V2.00011Z" fill="#A098AE"/>
										</svg>
									</a>		
								</div>													
							</div>
							<!--/student-->
							<!--student-->
							<div class="d-flex align-items-center student">
								<span class="dz-media">
									<img src="images/profile/small/pic2.jpg" alt="" width="50" class="avatar">
								</span>
								<div class="user-info">
									<h6 class="name"><a href="app-profile.html">Tony Soap</a></h6>
									<span class=" text-wrap text-break">Class VII B</span>
								</div>
								<div class="icon-box st-box ms-auto">
									<a href="#">
										<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19 0.000114441H3C2.20435 0.000114441 1.44129 0.316185 0.878679 0.878794C0.31607 1.4414 0 2.20446 0 3.00011V13.0001C0 13.7958 0.31607 14.5588 0.878679 15.1214C1.44129 15.684 2.20435 16.0001 3 16.0001H19C19.7956 16.0001 20.5587 15.684 21.1213 15.1214C21.6839 14.5588 22 13.7958 22 13.0001V3.00011C22 2.20446 21.6839 1.4414 21.1213 0.878794C20.5587 0.316185 19.7956 0.000114441 19 0.000114441V0.000114441ZM20 12.7501L15.1 8.35011L20 4.92011V12.7501ZM2 4.92011L6.9 8.35011L2 12.7501V4.92011ZM8.58 9.53011L10.43 10.8201C10.5974 10.9362 10.7963 10.9985 11 10.9985C11.2037 10.9985 11.4026 10.9362 11.57 10.8201L13.42 9.53011L18.42 14.0001H3.6L8.58 9.53011ZM3 2.00011H19C19.1857 2.0016 19.3673 2.05478 19.5245 2.15369C19.6817 2.2526 19.8083 2.39333 19.89 2.56011L11 8.78011L2.11 2.56011C2.19171 2.39333 2.31826 2.2526 2.47545 2.15369C2.63265 2.05478 2.81428 2.0016 3 2.00011V2.00011Z" fill="#A098AE"/>
										</svg>
									</a>		
								</div>																				
							</div>
							<!--/student-->
							<!--student-->
							<div class="d-flex align-items-center student">
								<span class="dz-media">
									<img src="images/profile/small/pic3.jpg" alt="" class="avatar">
								</span>
								<div class="user-info">
									<h6 class="name"><a href="app-profile.html">Karen Hope</a></h6>
									<span>Web Developer</span>
								</div>
								<div class="icon-box st-box ms-auto">
									<a href="#">
										<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19 0.000114441H3C2.20435 0.000114441 1.44129 0.316185 0.878679 0.878794C0.31607 1.4414 0 2.20446 0 3.00011V13.0001C0 13.7958 0.31607 14.5588 0.878679 15.1214C1.44129 15.684 2.20435 16.0001 3 16.0001H19C19.7956 16.0001 20.5587 15.684 21.1213 15.1214C21.6839 14.5588 22 13.7958 22 13.0001V3.00011C22 2.20446 21.6839 1.4414 21.1213 0.878794C20.5587 0.316185 19.7956 0.000114441 19 0.000114441V0.000114441ZM20 12.7501L15.1 8.35011L20 4.92011V12.7501ZM2 4.92011L6.9 8.35011L2 12.7501V4.92011ZM8.58 9.53011L10.43 10.8201C10.5974 10.9362 10.7963 10.9985 11 10.9985C11.2037 10.9985 11.4026 10.9362 11.57 10.8201L13.42 9.53011L18.42 14.0001H3.6L8.58 9.53011ZM3 2.00011H19C19.1857 2.0016 19.3673 2.05478 19.5245 2.15369C19.6817 2.2526 19.8083 2.39333 19.89 2.56011L11 8.78011L2.11 2.56011C2.19171 2.39333 2.31826 2.2526 2.47545 2.15369C2.63265 2.05478 2.81428 2.0016 3 2.00011V2.00011Z" fill="#A098AE"/>
										</svg>
									</a>		
								</div>																			
							</div>
							<!--/student-->
							<!--student-->
							<div class="d-flex align-items-center student">
								<span class="dz-media">
									<img src="images/profile/small/pic4.jpg" alt="" class="avatar">
								</span>
								<div class="user-info">
									<h6 class="name"><a href="app-profile.html">Jordan Nico</a></h6>
									<span class=" text-wrap">Class VII A</span>
								</div>
								<div class="icon-box st-box ms-auto">
									<a href="#">
										<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19 0.000114441H3C2.20435 0.000114441 1.44129 0.316185 0.878679 0.878794C0.31607 1.4414 0 2.20446 0 3.00011V13.0001C0 13.7958 0.31607 14.5588 0.878679 15.1214C1.44129 15.684 2.20435 16.0001 3 16.0001H19C19.7956 16.0001 20.5587 15.684 21.1213 15.1214C21.6839 14.5588 22 13.7958 22 13.0001V3.00011C22 2.20446 21.6839 1.4414 21.1213 0.878794C20.5587 0.316185 19.7956 0.000114441 19 0.000114441V0.000114441ZM20 12.7501L15.1 8.35011L20 4.92011V12.7501ZM2 4.92011L6.9 8.35011L2 12.7501V4.92011ZM8.58 9.53011L10.43 10.8201C10.5974 10.9362 10.7963 10.9985 11 10.9985C11.2037 10.9985 11.4026 10.9362 11.57 10.8201L13.42 9.53011L18.42 14.0001H3.6L8.58 9.53011ZM3 2.00011H19C19.1857 2.0016 19.3673 2.05478 19.5245 2.15369C19.6817 2.2526 19.8083 2.39333 19.89 2.56011L11 8.78011L2.11 2.56011C2.19171 2.39333 2.31826 2.2526 2.47545 2.15369C2.63265 2.05478 2.81428 2.0016 3 2.00011V2.00011Z" fill="#A098AE"/>
										</svg>
									</a>		
								</div>																				
							</div>
							<!--/student-->
							<!--student-->
							<div class="d-flex align-items-center student">
								<span class="dz-media">
									<img src="images/profile/small/pic5.jpg" alt="" class="avatar">
								</span>
								<div class="user-info">
									<h6 class="name"><a href="app-profile.html">Nadila Adja</a></h6>
									<span class=" text-wrap">Class VII B</span>
								</div>
								<div class="icon-box st-box ms-auto">
									<a href="#">
										<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19 0.000114441H3C2.20435 0.000114441 1.44129 0.316185 0.878679 0.878794C0.31607 1.4414 0 2.20446 0 3.00011V13.0001C0 13.7958 0.31607 14.5588 0.878679 15.1214C1.44129 15.684 2.20435 16.0001 3 16.0001H19C19.7956 16.0001 20.5587 15.684 21.1213 15.1214C21.6839 14.5588 22 13.7958 22 13.0001V3.00011C22 2.20446 21.6839 1.4414 21.1213 0.878794C20.5587 0.316185 19.7956 0.000114441 19 0.000114441V0.000114441ZM20 12.7501L15.1 8.35011L20 4.92011V12.7501ZM2 4.92011L6.9 8.35011L2 12.7501V4.92011ZM8.58 9.53011L10.43 10.8201C10.5974 10.9362 10.7963 10.9985 11 10.9985C11.2037 10.9985 11.4026 10.9362 11.57 10.8201L13.42 9.53011L18.42 14.0001H3.6L8.58 9.53011ZM3 2.00011H19C19.1857 2.0016 19.3673 2.05478 19.5245 2.15369C19.6817 2.2526 19.8083 2.39333 19.89 2.56011L11 8.78011L2.11 2.56011C2.19171 2.39333 2.31826 2.2526 2.47545 2.15369C2.63265 2.05478 2.81428 2.0016 3 2.00011V2.00011Z" fill="#A098AE"/>
										</svg>
									</a>		
								</div>																				
							</div>
							<!--/student-->
						</div>
						<div class="card-footer text-center border-0 pt-0 px-3 pb-0">
							<a href="javascript:void(0);" class="btn btn-block btn-primary light btn-rounded dlab-load-more" id="RecentActivity" rel="ajax/recentactivity.html">View More</a>
						</div>
					</div>
				</div>
				<!--/column-->
				<!--column-->
				<div class="col-xl-12">
					<div class="card massage bg-transparent mb-0">
						<div class="card-header border-0 px-3 py-0">
							<div>
								<h2 class="heading">Messages</h2>
							</div>
							
						</div>
						<div class="card-body height450 dlab-scroll p-0 px-3" id="messageContent">
							<!--student-->
							<div class="d-flex student border-bottom">
								<div class="d-flex align-items-center">
									<span class="dz-media">
										<img src="images/profile/small/pic1.jpg" alt="" class="avatar">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Samantha William</a></h6>
										<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
									</div>
								</div>													
								<div class="indox">
									<span class="fs-14 font-w400 text-wrap">12:45 PM</span>		
								</div>
							</div>
							<!--student-->
							<div class="d-flex student border-bottom">
								<div class="d-flex align-items-center">
									<span class="dz-media">
										<img src="images/profile/small/pic2.jpg" alt="" class="avatar">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Tony Soap</a></h6>
										<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
									</div>
								</div>													
								<div class="indox">
									<span class="fs-14 font-w400 text-wrap">12:45 PM</span>		
								</div>
							</div>
							<!--student-->
							<div class="d-flex student border-bottom">
								<div class="d-flex align-items-center">
									<span class="dz-media">
										<img src="images/profile/small/pic2.jpg" alt="" class="avatar">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Tony Soap</a></h6>
										<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
									</div>
								</div>													
								<div class="indox">
									<span class="fs-14 font-w400 text-wrap">12:45 PM</span>		
								</div>
							</div>
							<!--tudent-->
							<div class="d-flex student border-bottom">
								<div class="d-flex align-items-center">
									<span class="dz-media">
										<img src="images/profile/small/pic3.jpg" alt="" class="avatar">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Jordan Nico</a></h6>
										<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
									</div>
								</div>													
								<div class="indox">
									<span class="fs-14 font-w400 text-wrap">12:45 PM</span>		
								</div>
							</div>
							<!--student-->
							<div class="d-flex student border-bottom">
								<div class="d-flex align-items-center">
									<span class="dz-media">
										<img src="images/profile/small/pic4.jpg" alt="" class="avatar">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Nadila Adja</a></h6>
										<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
									</div>
								</div>													
								<div class="indox">
									<span class="fs-14 font-w400 text-wrap">12:45 PM</span>		
								</div>
							</div>
							<div class="d-flex student border-bottom">
								<div class="d-flex align-items-center">
									<span class="dz-media">
										<img src="images/profile/small/pic4.jpg" alt="" class="avatar">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Nadila Adja</a></h6>
										<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
									</div>
								</div>													
								<div class="indox">
									<span class="fs-14 font-w400 text-wrap">12:45 PM</span>		
								</div>
							</div>
						</div>
						<div class="card-footer text-center border-0 px-3 pb-0">
							<a href="contact.html" class="btn btn-block btn-primary light btn-rounded dlab-load-more" id="message" rel="ajax/message-content.html">View More</a>
						</div>
					</div>
				</div>
				<!--/column-->
				<!--column-->
				<div class="col-xl-12 ">
					<div class="card tags bg-transparent mb-0">
						<div class="card-header border-0 px-3 py-0">
							<h2 class="heading">Current Foods Menu</h2>
						</div>
						<div class="card-body  p-3 py-1 ">	
							<div class="card-body-inner food">
								<span class="dz-media">
									<img src="images/food/pic1.jpg" alt="" class="avatar">
								</span>
								<div class="user-info">
									<h5 class="name"><a href="app-profile.html">Beef Steak with Fried Potato</a></h5>
									<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
								</div>
							</div>	
							<div class="card-body-inner food">
								<span class="dz-media">
									<img src="images/food/pic2.jpg" alt="" class="avatar">
								</span>
								<div class="user-info">
									<h5 class="name"><a href="app-profile.html">Pancake with Honey</a></h5>
									<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
								</div>
							</div>	
							<div class="card-body-inner food">
								<span class="dz-media">
									<img src="images/food/pic3.jpg" alt="" class="avatar">
								</span>
								<div class="user-info">
									<h5 class="name"><a href="app-profile.html">Japanese Beef Ramen</a></h5>
									<span class="fs-14 font-w400 text-wrap">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</div>
						<div class="card-footer pt-0 border-0 px-2">
							<button class="btn btn-block btn-primary light btn-rounded  mb-3">View More</button>		
						</div>
					</div>	
							
				</div>
				<!--column-->
			</div>
		</div>
		<div class="wallet-bar-close"></div>

        {{-- DEBUT CONTENU --}}
        @yield('content')

        {{-- FIN CONTENU --}}





	<!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
	<!--swiper-slider-->
	<script src="{{ asset('vendor/swiper/js/swiper-bundle.min.js') }}"></script>
	
	
    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="{{ asset('vendor/wow-master/dist/wow.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select-country/js/bootstrap-select-country.min.js') }}"></script>
	
	<script src="{{ asset('js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
	
	
</body>

<!-- Mirrored from akademi.dexignlab.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 23:54:53 GMT -->
</html>
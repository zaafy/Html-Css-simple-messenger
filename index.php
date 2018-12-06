<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Messenger</title>
	<link rel="stylesheet" href="assets/style/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script type="text/javascript" src="assets/script/script.js"></script>
	<link rel="stylesheet" href="assets/style/foundation.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="sidenav">
	  <div class="grid-container">	
		<div class="grid-x">
			<div class="cell small-8"></div>
			<div class="cell small-4"> 
				<a href="#!"><img src="assets/img/sliders.svg" class="sliders"></a>
			</div>
		</div>
		<div class="grid-x">
			<div class="cell menu_container">
				<a href="#!" class="active">
					<div class="grid-x">
						<div class="cell small-4">
								<img src="assets/img/inbox.svg" class="menu_item"> 
						</div>
						<div class="cell small-8">
							
								Inbox
							
						</div>
					</div>
				</a>
				<a href="#!">
					<div class="grid-x">
						<div class="cell small-4">
								<img src="assets/img/saved.svg" class="menu_item"> 
						</div>
						<div class="cell small-8">
							
								Saved
							
						</div>
					</div>
				</a>
				<a href="#!">
					<div class="grid-x">
						<div class="cell small-4">
								<img src="assets/img/drafts.svg" class="menu_item"> 
						</div>
						<div class="cell small-8">
							
								Drafts
							
						</div>
					</div>
				</a>
				<a href="#!">
					<div class="grid-x">
						<div class="cell small-4">
								<img src="assets/img/sent.svg" class="menu_item"> 
						</div>
						<div class="cell small-8">
							
								Sent
							
						</div>
					</div>
				</a>
				<a href="#!">
					<div class="grid-x">
						<div class="cell small-4">
								<img src="assets/img/trash.svg" class="menu_item"> 
						</div>
						<div class="cell small-8">
							
								Trash
							
						</div>
					</div>
				</a>
			</div>
		</div>
	  </div>
	</div>

	<div class="sidebar">
		<div class="sidebar-content">
			<div class="search-bar">
				<form action="/search.php" method="GET" class="search-form">
				  <div class="grid-container">
				    <div class="grid-x">
				      <div class="small-10 cell">
				        <input class="search-text" type="text" name="search" placeholder="Search Messages">
				      </div>
				      <div class="small-2 cell">
				       	<label class="search-button">
							<input type="submit">
							<img src="assets/img/search.svg">
						</label>
				      </div>
				    </div>
				  </div>
				</form>
			</div>
			
			<div class=" all_messages">
				<div class="message active-message">
					<div class="">
						<div class="grid-x">
							<div class="cell small-10">
								<p class="title">
									Net Promoter Score
								</p>
							</div>
							<div class="cell small-2">
								<p class="views">
									1.8k
								</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<p class="sample">
							Great to hear from you the
							other day! Would you like...
						</p>
						<img src="assets/img/picture.svg">
					</div>
				</div>
				<div class="grid-x message">
					<div class="cell">
						<div class="grid-x">
							<div class="cell small-10">
								<p class="title">
									Net Promoter Score
								</p>
							</div>
							<div class="cell small-2">
								<p class="views">
									1.8k
								</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<p class="sample">
							Great to hear from you the
							other day! Would you like...
						</p>
						<img src="assets/img/picture.svg">
					</div>
				</div>
				<div class="grid-x message">
					<div class="cell">
						<div class="grid-x">
							<div class="cell small-10">
								<p class="title">
									User Poll
								</p>
							</div>
							<div class="cell small-2">
								<p class="views">
									1.8k
								</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<p class="sample">
							Great to hear from you the
							other day! Would you like...
						</p>
						<img src="assets/img/picture.svg">
					</div>
				</div>
				<div class="grid-x message">
					<div class="cell">
						<div class="grid-x">
							<div class="cell small-10">
								<p class="title">
									Market Research
								</p>
							</div>
							<div class="cell small-2">
								<p class="views">
									1.8k
								</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<p class="sample">
							Great to hear from you the
							other day! Would you like...
						</p>
						<img src="assets/img/picture.svg">
					</div>
				</div>
				<div class="grid-x message">
					<div class="cell">
						<div class="grid-x">
							<div class="cell small-10">
								<p class="title">
								Engagment Results
							</p>
							</div>
							<div class="cell small-2">
								<p class="views">
									1.8k
								</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<p class="sample">
							Great to hear from you the
							other day! Would you like...
						</p>
						<img src="assets/img/picture.svg">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="content_search_wrapper">
			<div class="content_search">
				<form action="/targets.php" method="GET" class="content_search_form">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell">
								<input class="content_search_input" type="text" name="search-target" placeholder="To: Type the name of the person or group">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="content_view">
			<div class="">
				<p class="content_title">
					Easily manage your messages
					on the blockchain
				</p>
				<p class="content_text">
					Send messages on your computer, then access them on your
					phone and on the road. Everything you think in Fyle
					is synced automatically to all your devices.
				</p>
				<div class="boxes">
					<img src="assets/img/cube_left.svg" class="cube_left">
					<img src="assets/img/cube_big.svg" class="cube_big">
					<img src="assets/img/cube_right.svg" class="cube_right">
				</div>
			</div>
		</div>

	</div>
	
	<div class="helpbar">
		<div class="right_icons">
			<img src="assets/img/info.svg" class="info"><br />
			<img src="assets/img/share.svg" class="share">
		</div>
	</div>

</div>

</body>
</html>
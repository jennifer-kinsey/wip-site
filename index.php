<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$from = 'Contact Form';
		$to = 'dev@kinsey.tech';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

    //Check if subject has been entered
    if (!$_POST['message']) {
      $errSubject = 'Please enter a subject';
    }

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter a message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errSubject) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch. ;-)</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later. Or email me directly: dev@kinsey.tech </div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jennifer Kinsey</title>
  </head>

  <body>
    <div class="header">
      <div class="upper">
        <h2>hi! welcome, <span class="name">bipedal lifeform</span>.</h2>
      </div>
      <nav class="navbar main-nav">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="logo-container" href="#"><img src="img/Optimized-brand.png" alt="K logo" class="brand"></a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://medium.com/@kinsey" target="_blank">Blog</a></li>
              <li><a href="https://docs.google.com/document/d/1XXmb47SXEwfDZmhg88oVyGQS5pXvk2ryJqrnMRKbJIQ/edit?usp=sharing" target="_blank">Resume</a></li>
              <a href="https://www.linkedin.com/in/jenniferkinsey/" target="_blank"><i class="fa fa-linkedin-square fa-3x icons" aria-hidden="true"></i></a>
              <a href="https://github.com/jennifer-kinsey/" target="_blank"><i class="fa fa-github-alt fa-3x icons" aria-hidden="true"></i></a>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="main-content">
      <div class="image">
        <img src="img/sunset.jpeg" alt="beautiful sunset">
        <h1 class="intro-text">i'm <span class="highlight"> kinsey.</span> an awesome developer and a rad person <br>&nbsp;&nbsp;you should hire.</h1>
      </div>
      <div class="about centered" id="about">
        <h1 class="specificity">A BIT ABOUT ME</h1>
        <h3 class="specificity">A <img src="img/logo-ruby.png" alt="ruby" class="ruby"> in the Rough</h3>
				<img class="profile" src="img/profile.jpg" alt="a great developer named Kinsey">
        <h3>I’ve been on a career change trek from social services to developer over the last few years. I've always had an interest in STEM fields and dabbled in programming for years. Recently, I've buckled down and learned Ruby on Rails and haven't looked back. You can check out my Github, see my LinkedIn, message me on here for career propositions, or find me at a meetup in downtown Portland learning about new tech.</h3>

        <h3>When not doing code, I am probably watching scifi/fantasy with my two old cats, pretending to be a runner, listening to 80s music, or cooking something up from the local farmer's market.</h3>
      </div>
      <div class="image">
        <img src="img/Optimized-typing.jpeg" alt="lady working on laptop with cappucino">
        <h1 class="work-text">PAST WORK</h1>
      </div>
      <div class="work" id="projects">
        <div class="row">
          <div class="col-sm-6 space left-text">
            <h2 class="specificity">TomKaneArt.com</h2>
            <h3>A freelance project for a local painter, artfully displaying his work and allowing customers to purchase his art.</h3>
            <h3>This Rails app was a team project utilizing user authentication and authorization, Stripe integration, image uploads, mail gun for email confirmations, and AWS for image hosting.</h3>
            <i class="fa fa-external-link fa-lg"><a href="http://www.tomkaneart.com/" target="_blank">&ensp; It's online</a></i><br>
            <i class="fa fa-github fa-lg"><a href="https://github.com/akane0915/tom-kane-art-website" target="_blank">&ensp; It's on Github</a></i>
          </div>
          <div class="col-sm-6 space right-pic">
            <img src="img/Optimized-tomkane.jpg" alt="abstract painting">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 space left-pic">
            <img src="img/Optimized-api.jpeg" alt="screen of minified code">
          </div>
          <div class="col-sm-6 space">
            <h2 class="specificity">National Park API</h2>
            <h3>This is an API that includes seeds Faker data for National Parks. It includes multiple scopes for querying and thorough testing. It includes Authentication using Devise and JWT tokens and Versioning.</h3>
            <i class="fa fa-github fa-lg"><a href="https://github.com/jennifer-kinsey/national-park-api">&ensp; It's on Github</a></i>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 space left-text">
            <h2 class="specificity">Career Quest</h2>
            <h3>This is an application for organizing your job search. Users can create unique accounts, and store and access data for all things job-related in their career quest - like what company you've applied to, who you've corresponded with, what positions you applied to, and status as you move through the hiring process.</h3>
            <h3> Ruby app on the lightweight Sinatra framework. Uses a fairly complex schema for a quick team week project. </h3>
            <i class="fa fa-external-link fa-lg"><a href="http://career-quest.herokuapp.com/" target="_blank">&ensp; It's online</a></i><br>
            <i class="fa fa-github fa-lg"><a href="https://github.com/jennifer-kinsey/career-quest" target="_blank">&ensp; It's on Github</a></i>
          </div>
          <div class="col-sm-6 space right-pic">
            <img src="img/careerquest.png" alt="">
          </div>
        </div>
      </div>
      <div class="contact" id="contact">
        <div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: 45.5231, lng: -122.6765};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 11,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmUSmDpAfBnOcZuBdwXvi2GLmkkVrspJE&callback=initMap">
        </script>
        <div class="form-area">
          <h1 class="specificity">CONTACT ME</h1>
          <form class="contact-form" role="form" action="index.php" method="post">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control override" value="<?php echo htmlspecialchars($_POST['name']); ?>" placeholder="Name">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control override" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group">
              <input type="text" id="subject" name="subject" class="form-control override" placeholder="Subject" value="<?php echo htmlspecialchars($_POST['subject']); ?>">
              <?php echo "<p class='text-danger'>$errSubject</p>";?>
            </div>
            <div class="form-group">
              <textarea id="subject" name="message" class="form-control override" rows="4" placeholder="What's up?" value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <div class="form-group">
              <?php echo $result; ?>
            </div>
            <button type="submit" name="submit" id="submit" name="button">Send</button>
          </form>
        </div>
      </div>
    </div>
  </body>

</html>

<head>
	<?php include('head.php');
	?>
</head>

<body>
	<?php include('header.php')
	?>
	
<style>
	body {
		background: #47505e;
		color: #eae9e3;
	}

	inner-column {
		max-width: 700px;
	}

	h1 {
		color: #eae9e3;
		margin: 0;
	}

	h2 {
		text-align: left;
	}

	h2 + hr {
		margin-top: -15px;
	}

	education, skills {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}

	h3, h4 {
		color: #AB6668;
	}

	h3 + h3, h5 + h3, skills h4 {
		margin-bottom: -15px;
	}

	skills h5 {
		margin-bottom: 5px;
	}

</style>


	<inner-column>
		<h1>Resume</h1>

		<h2 class='second-title'>Education</h2>
		<hr>
		<education>
			<h3>Perpetual Education: Design for the Web</h3>
			
			<h3>Nova Southeastern University</h3>
			<h5>Master of Medical Science in Physician Assistant</h5>

			<h3>Duke University</h3>
			<h5>Bachelor of Arts: Biology, Spanish Minor</h5>
		</education>

		<h2 class='second-title'>Skills</h2>
		<hr>
		<skills>
			<h4>Languages</h4>
			<h5>HTML, CSS, PHP</h5>
			
			<h4>Tools</h4>
			<h5>Affinity Designer, Whimsical, CodePen</h5>

			<h4>Design</h4>
			<h5>User Experience Design, Rapid Prototyping, Design Thinking, Graphic Design</h5>

			<h4>Other</h4>
			<h5>Web Development Best Practices Knowledge</h5>

			<h4>Soft Skills</h4>
			<h5 style='text-align: left;'>Effective Communicator, Problem-solving Skills, Quick Learner, Adaptable, Compassionate, Hardworking, Analytical, Collaborative worker</h5>
		</skills>
	</inner-column>
</body>
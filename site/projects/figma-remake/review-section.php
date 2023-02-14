<section class='review-section'>
	<inner-column>
		<review-section>
			<review-header>
				<h1>What Our Clients Say</h1>

				<p>Neque, pulvinar vestibulum non aliquam.</p>
			</review-header>

			<client-reviews>
				<?php foreach ($client_review as $review) { ?>
					<div>
						<stars><?=$review["stars"];?></stars>

						<more-info>
							<h3 class='comment'><?=$review["comment"];?></h3>
							<h5 class='author'><?=$review["author"];?></h5>
						</more-info>
					</div>

				<?php } ?>
			</client-reviews>
		
		</review-section>
	</inner-column>
</section>
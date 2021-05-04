<?php $title='FAQ';
require_once '../headerFooter/header.php';?>
<link href="FAQ.css" rel="stylesheet" />       
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
	<div class="content">
		<h2>UNE QUESTION ?</h2>
		<p>Nous sommes là pour vous aider</p>
	</div>
	<!--<div class="image">
		<img src="../view/images/icons/question.png" alt="">
	</div>-->
</div>

<!-- ----------------------------------------------------------- FAQ ---------------------------------------------------------------------------------- -->
<?php
	/*require '../../model/FAQ/modelFaq.php';*/
	require_once '../../model/BDD/connexionBDD.php';

?>

<section class="ib-faq js-ib-faq">
	<ul class="faq-categories">
		<li><a href="#topic-1" class="faq-category">Topic 1<i class="mob"></i></a></li>
		<li><a href="#topic-2" class="faq-category">Topic 2<i class="mob"></i></a></li>
		<li><a href="#topic-3" class="faq-category">Topic 3<i class="mob"></i></a></li>
		<li><a href="#topic-4" class="faq-category">Topic 4<i class="mob"></i></a></li>
	</ul>

	<div class="faq-items">
		<ul id="topic-1" class="faq-group">
			<li class="faq-title"><h2>Topic 1</h2></li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 1 - Question1</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 1 - Question2</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 1 - Question3</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>
		</ul>

		<ul id="topic-2" class="faq-group">
			<li class="faq-title"><h2>Topic 2</h2></li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 2 - Question1</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 2 - Question2</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 2 - Question3</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>
		</ul>

		<ul id="topic-3" class="faq-group">
			<li class="faq-title"><h2>Topic 3</h2></li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 3 - Question1</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 3 - Question2</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 3 - Question3</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>
		</ul>

		<ul id="topic-4" class="faq-group">
			<li class="faq-title"><h2>Topic 4</h2></li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 4 - Question1</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 4 - Question2</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>

			<li class="faq-item">
				<a href="#0" class="faq-question"><span>Topic 4 - Question3</span></a>
				<div class="faq-response">
					<div class="text-block">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ea eos quaerat vel eum cumque eius ipsum laboriosam quos! Tempora quas sequi delectus consectetur voluptates laboriosam perspiciatis voluptatem accusamus incidunt?</p>
					</div>
				</div>
			</li>
		</ul>

	</div>			
</section>
	<div class="faq-overlay" aria-hidden="true"></div>
</section>
<div class="contact">
	<p>Pour plus d'informations, contactez-nous, <a href="">cliquez ici</a></p>
</div>

<!--<script src="../js/faq.js"></script>-->

 <?php require_once '../headerFooter/footer.php'; ?>   

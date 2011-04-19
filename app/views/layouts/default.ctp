<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css(array('reset', 'fonts', 'p10books_new'));

			echo $scripts_for_layout;
		?>
	</head>
	
	<body>
		<?php $classHome=null; ?>
		<?php if($this->params['controller'] != 'home')
					$classHome = 'class="homepage"';
		?>
		<div id="pg">
			<div id="hd">
				<div id="logo">
					<h1><a href="<?php echo $this->Html->url(array('controller' => 'home')) ?>">Books10 <?php echo $this->Html->image('books.png', array('alt' => 'Point10 Books'))?></a>
					</h1>
				</div>
				<div id="topNav">
					<ul>
						<li class="selected">
							<a href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=>'index')) ?>">Buy Textbooks</a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url(array('controller' => 'books', 'action' => 'sellbooks')) ?>">Sell Textbooks</a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'howitworks')) ?>">How it works?</a>
						</li>
						<?php if ($session->read('Auth.User')) { ?>
						<li>
								<a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'view', $session->read('Auth.User.id'))); ?>"><?php echo $session->read('Auth.User.fullname'); ?></a>
						</li>	
						<li class="last">
								<a href="<?php echo $this->Html->url(array('controller' => 'users','action' => 'signout')); ?>">Sign out</a>
						</li>
						<?php }else{ ?>
						<li>
								<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'signin')); ?>">Sign in</a>
						</li>
						<li class="last">
							<a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')); ?>">Sign up</a>
						</li>
						<?php } ?>
						<div class="clear">
						</div>
					</ul>
				</div>
				<div class="clear">
					
				</div>
			</div> <!-- #hd -->
			<div id="bd" <?php echo $classHome; ?>>
   			
				<?php echo $this->Session->flash(); ?>
				
				<?php echo $content_for_layout; ?>
			</div> <!-- #bd -->
			<div id="ft">
				<div class="copy">&copy; Copyright 2010 Point10Books. All rights reserved.</div>
			</div> <!-- #ft -->
		</div> <!-- #pg -->
		<?php //echo $this->element('sql_dump'); ?>
	</body>

</html>
<div class="users form">
	<h1 class="bigTitle">Change Your Profile Pic</h1>
	<fieldset>
		<br />
		<div class="input text">
<label>Choose Pic</label>
<?php
    echo $form->create('User', array('action'=>'uploadpic', 'type' => 'file'));
?>

<?php
    echo $form->file('propic');
?>
</div>
<?php
    echo $form->submit('Upload',array('class'=>'upload'));
    echo $form->end();
?>
</div>
	
	</fieldset>
	<br/>
	<br/>
</div>




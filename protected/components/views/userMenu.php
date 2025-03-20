<?php
/* @var $this SiteController */
?>

<div class="max-w-4xl mx-auto mt-12">
    <ul class="space-y-4">
        <li>
            <?php echo CHtml::link('Create New Post', array('post/create'), array('class' => 'text-blue-600 hover:underline')); ?>
        </li>
        <li>
            <?php echo CHtml::link('Manage Posts', array('post/admin'), array('class' => 'text-blue-600 hover:underline')); ?>
        </li>
        <li>
            <?php echo CHtml::link('Manage Comments', array('comment/admin'), array('class' => 'text-blue-600 hover:underline')); ?>
        </li>
        <li>
            <?php echo CHtml::link('Approve Comments', array('comment/index'), array('class' => 'text-blue-600 hover:underline')); ?>
            <span class="text-gray-600">(<?php echo Comment::model()->pendingCommentCount; ?>)</span>
        </li>
        <li>
            <?php echo CHtml::link('Logout', array('site/logout'), array('class' => 'text-red-600 hover:underline')); ?>
        </li>
    </ul>
</div>

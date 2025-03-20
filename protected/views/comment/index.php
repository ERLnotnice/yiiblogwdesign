<?php
/* @var $comments Comment[] */
?>

<div class="max-w-4xl mx-auto mt-12">
    <?php if (!empty($comments)): ?>
        <h3 class="text-2xl font-bold mb-6 text-gray-800">
            <?php echo count($comments); ?> Comments
        </h3>
        <ul class="space-y-6">
            <?php foreach ($comments as $comment): ?>
                <li class="bg-gray-100 p-4 rounded-lg">
                    <strong class="text-blue-600">
                        <?php echo CHtml::encode($comment->author); ?>:
                    </strong>
                    <p class="mt-2 text-gray-700">
                        <?php echo CHtml::encode($comment->content); ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p class="text-gray-600">No comments yet.</p>
    <?php endif; ?>
</div>

<div class="max-w-4xl mx-auto mt-8">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Comments</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
        )); ?>
    </div>
</div>

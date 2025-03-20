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
    <h1 class="text-3xl font-bold text-gray-900 mb-4">View Comment #<?php echo $model->id; ?></h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <dl class="divide-y divide-gray-200">
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">ID:</dt>
                <dd class="text-gray-900 font-medium"><?php echo $model->id; ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">Content:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->content); ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">Status:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->status); ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">Created At:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->create_time); ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">Author:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->author); ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">Email:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->email); ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">URL:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->url); ?></dd>
            </div>
            <div class="py-4 flex justify-between">
                <dt class="text-gray-600">Post ID:</dt>
                <dd class="text-gray-900 font-medium"><?php echo CHtml::encode($model->post_id); ?></dd>
            </div>
        </dl>
    </div>
</div>

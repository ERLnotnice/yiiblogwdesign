<?php /* @var $this PostController */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - View Post'; ?>

<div class="max-w-4xl mx-auto mt-12">

    <h1 class="text-4xl font-bold text-center text-[#ff6ef4]">View Post #<?php echo $model->id; ?></h1>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
        <p class="text-xl font-semibold">Title: <?php echo CHtml::encode($model->title); ?></p>
        <p class="mt-4 text-gray-700">Content: <?php echo nl2br(CHtml::encode($model->content)); ?></p>
        <p class="mt-4 text-gray-600">Tags: <?php echo CHtml::encode($model->tags); ?></p>
        <p class="mt-4 text-gray-500">Status: <?php echo CHtml::encode($model->status); ?></p>
        <p class="mt-4 text-gray-400">Created on: <?php echo date('F j, Y, g:i a', strtotime($model->create_time)); ?></p>
        <p class="mt-4 text-gray-400">Updated on: <?php echo date('F j, Y, g:i a', strtotime($model->update_time)); ?></p>
    </div>

    <div id="comments" class="mt-12">
        <?php if($model->commentCount >= 1): ?>
            <h3 class="text-2xl font-semibold mb-4">
                <?php echo $model->commentCount . ' comment(s)'; ?>
            </h3>

            <?php $this->renderPartial('_comments', array(
                'post' => $model,
                'comments' => $model->comments,
            )); ?>
        <?php endif; ?>
    </div>

    <div id="comment-form" class="mt-12">
        <h3 class="text-2xl font-semibold mb-4">Leave a Comment</h3>

        <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
            <div class="bg-green-100 p-4 rounded-lg shadow-md text-green-800">
                <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
            </div>
        <?php else: ?>
            <?php $this->renderPartial('/comment/_form', array(
                'model' => $comment,
            )); ?>
        <?php endif; ?>
    </div>

    <div class="mt-12 flex space-x-4">
        <?php echo CHtml::link('Update Post', array('update', 'id' => $model->id), array('class' => 'bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600')); ?>
        <?php echo CHtml::link('Delete Post', '#', array(
            'submit' => array('delete', 'id' => $model->id),
            'confirm' => 'Are you sure you want to delete this item?',
            'class' => 'bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600'
        )); ?>
        <?php echo CHtml::link('Back to List', array('index'), array('class' => 'bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600')); ?>
    </div>

</div>

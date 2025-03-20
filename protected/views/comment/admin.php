<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="max-w-4xl mx-auto mt-12">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">Manage Comments</h1>

    <p class="text-gray-700 mb-4">
        You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
        or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>

    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button text-blue-600 hover:underline')); ?>
    <div class="search-form" style="display:none">
        <?php $this->renderPartial('_search',array(
            'model'=>$model,
        )); ?>
    </div>

    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'comment-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'itemsCssClass'=>'w-full table-auto border-collapse',
        'columns'=>array(
            'id',
            'content',
            'status',
            'create_time',
            'author',
            'email',
            array(
                'class'=>'CButtonColumn',
            ),
        ),
    )); ?>
</div>

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
